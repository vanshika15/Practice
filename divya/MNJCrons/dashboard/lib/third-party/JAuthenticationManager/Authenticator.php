<?php
/**
 *  @class Authenticator
 *  @package JAuthenticationManager
 */

class Authenticator {

    private $username, $serviceFlag, $fnName;

    private $AUTH_SERVER_URL = _AUTH_SERVER_URL;

    private $request;

    private $mysqlFlag = false;

    private $mailerTokenCounter = 0;

    public function __construct($mysqlFlag = false) {

        $this->mysqlFlag = $mysqlFlag;
        $this->request = ncRequestProvider::getInstance()->getRequest();
    }

    /**
     * @access public
     * @desc Checks if user is authenticated else redirects to login page.
     */

    public function forceAuthentication() {

        $status = $this->getAuthenticationStatus();
        switch ($status) {
            case "AUTHENTICATED":
                return true;
            case "REMEMBERED":
                $this->redirectToAuthServer(2);
            case "TIMEDOUT":
                $this->redirectToAuthServer(3);
            case "NOTAUTHENTICATED":
                $this->redirectToAuthServer(0);
        }
    }

    /**
     * @access public
     * @generates authentication token to be sent in mailers for auto login.
     */

    public function generateMailerToken($userName) {

        $curTime = time() + $this->mailerTokenCounter;
        $this->mailerTokenCounter++;
        $token = $userName."|~|".$curTime;
        return Encryption::Encrypt($token);
    }

    /**
     * @access public
     * @validate authentication token for mailers and auto login user.
     */

    public function validateMailerToken($token, $autoLogin = true) {

        //$_MAILER_TIMEOUT = 864000;
        $_MAILER_TIMEOUT       = 259200;
        $token                 = Encryption::Decrypt($token);
        list($userName, $time) = explode("|~|", $token);
        if ($time > (time() - $_MAILER_TIMEOUT)) {
            $ndb       = $this->getDatabaseConnection();
            $sqlMailer = "SELECT * FROM db1.AUTH_TOKEN WHERE USERNAME = binary \"".addslashes($userName)."\" AND TIME = '$time'";
            $resMailer = $ndb->query($sqlMailer);
            if (!$resMailer->fetchColumn()) {
                $sqlMailer = "INSERT INTO db1.AUTH_TOKEN (USERNAME, TIME) values ('".addslashes($userName)."','$time')";
                $resMailer = $ndb->query($sqlMailer);
                if ($autoLogin) {
                    return $this->autoLoginUser($userName);
                } else {
                    return array("USERNAME" => $userName);
                }
            }
        }
        return false;
    }

    /**
     * @access private
     * @desc checks authentication status.
     */

    public function getAuthenticationStatus() {

        if (Cookies::isCookieEnabled()) {
            return $this->isAuthenticatedFromCookie();
        } else {
            return $this->isAuthenticatedFromUrl();
        }
    }

    /**
     * @access public
     * @desc returns Authentication status.
     */

    public function isAuthenticated() {

        return($this->getAuthenticationStatus() == "AUTHENTICATED");
    }

    /**
     * @access public
     * @desc returns status of cookie being remembered, in case if user chose so.
     */

    public function isRemembered() {

        return($this->getAuthenticationStatus() == "REMEMBERED");
    }

    /**
     * @access public
     * @desc returns whether the used is a paid Resume Services client or not.
    */

    public function isPaidClient() {

        return($_COOKIE["MYNAUKRI"]['RS'] == "1" ? TRUE : FALSE);
    }

    /**
     * @access private
     * @desc checks Authentication status if cookies are enable.
     */

    private function isAuthenticatedFromCookie() {

        $_TOUT             = 1800;
        $_TOUT_REMEMBER_ME = 45 * 24 * 60 * 60;
        $CookieVars        = $_COOKIE["MYNAUKRI"];
        $arrReturnVals     = array();
        $Id                = $CookieVars["ID"];
        $Resid             = $CookieVars["RESID"];
        $Tout              = $CookieVars["TOUT"];
        if (!$Id || !$Tout) 
            return "NOTAUTHENTICATED";
        list($cipherText, $flagRemember, $flagCredential) = explode("|X|", $Id);
        $PlainText = Encryption::Decrypt($cipherText, $Tout);
        if ($PlainText) {
            $current_time = time();
            if ($current_time - $Tout < $_TOUT) {
                $newTime = time();
                if (strtoupper($flagRemember) == 'Y') 
                    $cookie_expiry = $newTime + 3888000;
                // Cookie expiry set to 45 days
                else 
                    $cookie_expiry = 0;
                $Id                = Encryption::Encrypt($PlainText, $newTime);
                $Id                = $Id."|X|$flagRemember|X|$flagCredential";
                setcookie("test", "naukri.com", $newTime + 630720000, "/", _COOKIE_DOMAIN, false, true);
                setcookie("MYNAUKRI[ID]", $Id, $cookie_expiry, "/", _COOKIE_DOMAIN, false, true);
                setcookie("MYNAUKRI[TOUT]", intval($newTime), $cookie_expiry, "/", _COOKIE_DOMAIN, false, true);
                setcookie("MYNAUKRI[RESID]", $Resid, $cookie_expiry, "/", _COOKIE_DOMAIN, false, true);
                if ($CookieVars["RS"] == "1") 
                    setcookie("MYNAUKRI[RS]", 1, $cookie_expiry, "/", _COOKIE_DOMAIN, false, true);
                /// For Resume Services cookie
                return "AUTHENTICATED";
            } elseif (strtoupper($flagRemember) == 'Y' && $current_time - $Tout < $_TOUT_REMEMBER_ME) {
                return "REMEMBERED";
            }
        }
        return "TIMEDOUT";
    }

    /**
     * @access private
     * @desc checks Authentication status if cookies are disable.
     */

    private function isAuthenticatedFromUrl() {

        $userId = $this->request->getParameter("id");
        if (!$userId || $userId == "") 
            return "NOTAUTHENTICATED";
        $ipAddress = CDNHeaders::getInstance()->getRemoteIP();
        if ($this->mysqlFlag) {
            return $this->isUserLoggedInFromIpAddress_mysql($userId, $ipAddress);
        } else {
            return $this->isUserLoggedInFromIpAddress($userId, $ipAddress);
        }
    }

    /**
     * @access private
     * @desc removes old id value from the url.
     */

    private function clearAuthIdFromURL($url) {

        // Remove authentication id from target url
        $regex = "/([\/|\?|\&]{1})(id[=\/][^\/&]*[\/&]?)/";
        //$regex = "/([\/|\?|\&]{1})id[=\/][^\/&]*[\/&]?/";
        $returnUrl = preg_replace("/[&?\/]?$/", "", preg_replace($regex, '$1', $url));
        //$returnUrl = preg_replace("/[&?\/]?$/", "", preg_replace($regex, '', $url));
        return $returnUrl;
    }

    /**
     * @access private
     * @desc redirect to Login server.
     */

    private function redirectToAuthServer($msg) {

        header('Location: '.$this->AUTH_SERVER_URL."?msg=$msg&URL=".rawurlencode($this->clearAuthIdFromURL($this->getURL())));
        exit(0);
    }

    private function isUserLoggedInFromIpAddress($userId, $ipAddress) {

        list($CipherText, $PlainText) = explode("|~|", rawurldecode($userId));
        $_TOUT                        = _TOUT;
        $PlainText                    = Encryption::Decrypt($userId);
        if ($PlainText) {
            $ndb = $this->getDatabaseConnection();
            $sql = "SELECT ID, RESID, USERNAME, IPADDR, TIME FROM resman5.CONNECT WHERE ID = \"".$PlainText."\"";
            $res = $ndb->query($sql);
            if ($res) {
                $row = $res->fetch(PDO::FETCH_ASSOC);
                $res->closeCursor();
                if ($row) {
                    $diff = time() - ($row["TIME"] + $_TOUT);
                    if ($diff <= 0) {
                        $newTime   = time();
                        $sqlUpdate = "UPDATE resman5.CONNECT SET `TIME` = \"".$newTime."\" WHERE ID = \"".$PlainText."\"";
                        $resUpdate = $ndb->query($sqlUpdate);
                        $resUpdate->closeCursor();
                        return "AUTHENTICATED";
                    }
                }
            }
        }
        return "TIMEDOUT";
    }

    private function isUserLoggedInFromIpAddress_mysql($userId, $ipAddress) {

        list($CipherText, $PlainText) = explode("|~|", rawurldecode($userId));
        $_TOUT                        = _TOUT;
        $PlainText                    = Encryption::Decrypt($userId);
        if ($PlainText) {
            $ndb = $this->getDatabaseConnection();
            $sql = "SELECT ID, RESID, USERNAME, IPADDR, TIME FROM resman5.CONNECT WHERE ID = \"".$PlainText."\"";
            $res = mysql_query($sql, $ndb);
            if ($res) {
                $row = mysql_fetch_assoc($res);
                if ($row) {
                    $diff = time() - ($row["TIME"] + $_TOUT);
                    if ($diff <= 0) {
                        $newTime   = time();
                        $sqlUpdate = "UPDATE resman5.CONNECT SET `TIME` = \"".$newTime."\" WHERE ID = \"".$PlainText."\"";
                        $resUpdate = mysql_query($sqlUpdate, $ndb);
                        return "AUTHENTICATED";
                    }
                }
            }
        }
        return "TIMEDOUT";
    }

    /**
     * @access private
     * @desc extracts url where the user need to redirect after login.
     */

    private function getURL() {

        $final_uri  = "";
        $final_uri  = ($this->isHttps()) ? "https" : "http";
        $final_uri .= "://";
        if (empty($_SERVER["HTTP_X_FORWARDED_SERVER"])) {
            if (empty($_SERVER["SERVER_NAME"])) {
                $server_name = $_SERVER["HTTP_HOST"];
            } else {
                $server_name = $_SERVER["SERVER_NAME"];
            }
        } else {
            $server_name = $_SERVER["HTTP_X_FORWARDED_SERVER"];
        }
        $final_uri .= $server_name;
        if (!strpos($server_name, ":")) {
            if (($this->isHttps() && $_SERVER["SERVER_PORT"] != 443) || (!$this->isHttps() && $_SERVER["SERVER_PORT"] != 80)) {
                $final_uri .= ":";
                $final_uri .= $_SERVER["SERVER_PORT"];
            }
        }
        $final_uri .= $_SERVER["REQUEST_URI"];
        return $final_uri;
    }

    private function isHttps() {

        return isset($_SERVER["HTTPS"]) && !empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on";
    }

    /**
     * @access public
     * @desc return username of the job seeker.
     */

    public function getUsername() {

        if ($this->username != '') {
            return $this->username;
        }
        if ($this->mysqlFlag) {
            return $this->getUsername_mysql();
        }
        global $_RESMAN_DB;
        global $_CONNECT;
        $userId = $this->getSessionId();
        if (!Cookies::isCookieEnabled()) {
            $decryptVal = Encryption::Decrypt($userId);
            $ndb        = $this->getDatabaseConnection();
            $sql        = "SELECT USERNAME, TIME FROM resman5.CONNECT WHERE ID = \"".$decryptVal."\"";
            $res        = $ndb->query($sql);
            if ($res) {
                $row = $res->fetch(PDO::FETCH_ASSOC);
                $res->closeCursor();
                if ($row) {
                    $decryptVal = $row["USERNAME"];
                } else {
                    $decryptVal = NULL;
                }
            }
        } else {
            $time = $_COOKIE['MYNAUKRI']['TOUT'];
            $decryptVal = Encryption::Decrypt($userId, $time);
        }
        $this->username = $decryptVal;
        return $decryptVal;
    }

    private function getUsername_mysql() {

        global $_RESMAN_DB;
        global $_CONNECT;
        $userId = $this->getSessionId();
        if (!Cookies::isCookieEnabled()) {
            $decryptVal = Encryption::Decrypt($userId);
            $ndb        = $this->getDatabaseConnection();
            $sql        = "SELECT USERNAME, TIME FROM resman5.CONNECT WHERE ID = \"".$decryptVal."\"";
            $res        = mysql_query($sql, $ndb);
            if ($res) {
                $row = mysql_fetch_assoc($res);
                if ($row) {
                    $decryptVal = $row["USERNAME"];
                } else {
                    $decryptVal = NULL;
                }
            }
        } else {
            $time = $_COOKIE['MYNAUKRI']['TOUT'];
            $decryptVal = Encryption::Decrypt($userId, $time);
        }
        $this->username = $decryptVal;
        return $decryptVal;
    }

    /**
     * @access public
     * @desc return current session id.
     */

    public function getSessionId() {

        $sessionIdSource                              = new mnjSessionIdSource();
        $userId                                       = $sessionIdSource->getSessionId();
        list($encTxt, $flagRemember, $flagCredential) = explode("|X|", $userId);
        return $encTxt;
    }

    /**
     * @access protected
     * @desc returns database connection instance.
     */

    protected function getDatabaseConnection() {

        return ncDatabaseManager::getInstance()->getDatabase('connect')->getConnection();
    }

    public function getUsername_Topband() {

        if ($this->fnName != '') {
            return $this->fnName;
        }
        if (Cookies::isCookieEnabled()) {
            global $_COOKIE;
            if (isset($_COOKIE['MYNAUKRI']['NI_FN_HS'])) {
                $NI_FN_HS = Encryption::Decrypt($_COOKIE['MYNAUKRI']['NI_FN_HS']);
                list($this->serviceFlag, $this->fnName) = explode('|X|', $NI_FN_HS);
            } else {
                $tout                           = $_COOKIE['MYNAUKRI']['TOUT'];
                list($username, $remember_flag) = explode("|X|", $_COOKIE['MYNAUKRI']['ID']);
                $plaintext                      = Encryption::Decrypt($username, $tout);
                $this->setUserInfoForFirstNaukri($username);
            }
        } else {
            $this->getFirstNaukriDetails();
        }
        if ($this->serviceFlag == 'F' || $this->serviceFlag == 'A') {
            return $this->fnName;
        } else {
            return $this->getUsername();
        }
    }

    private function setUserInfoForFirstNaukri_mysql($username) {

        $ndb = $this->getDatabaseConnection();
        $sql = "SELECT SERVICE, USERID FROM resman5.cv_users WHERE USERNAME = \"".addslashes($username)."\"";
        $res = mysql_query($sql, $ndb);
        if ($res) {
            $row = mysql_fetch_assoc($res);
            if ($row) {
                $ndb_FN            = ncDatabaseManager::getInstance()->getDatabase('FirstNaukri')->getConnection();
                $sql_FN            = "SELECT NAME FROM fsresman.cv_main WHERE USERID = \"".$row['USERID']."\"";
                $res_FN            = mysql_query($sql_FN, $ndb_FN);
                $row_FN            = mysql_fetch_assoc($res_FN);
                $this->serviceFlag = $row['SERVICE'];
                $this->fnName      = $row_FN['NAME'];
                setcookie("MYNAUKRI[NI_FN_HS]", Encryption::Encrypt($this->serviceFlag.'|X|'.$this->fnName), time() + 630720000, "/", _COOKIE_DOMAIN, false, true);
            }
        }
        mysql_close($ndb);
        mysql_close($ndb_FN);
    }

    private function setUserInfoForFirstNaukri($username) {

        if ($this->mysqlFlag) {
            return $this->setUserInfoForFirstNaukri_mysql($username);
        }
        $ndb = $this->getDatabaseConnection();
        $sql = "SELECT SERVICE, USERID FROM resman5.cv_users WHERE USERNAME = \"".addslashes($username)."\"";
        $res = $ndb->query($sql);
        if ($res) {
            $row = $res->fetch(PDO::FETCH_ASSOC);
            $res->closeCursor();
            if ($row) {
                $ndb_FN            = ncDatabaseManager::getInstance()->getDatabase('FirstNaukri')->getConnection();
                $sql_FN            = "SELECT NAME FROM fsresman.cv_main WHERE USERID = \"".$row['USERID']."\"";
                $res_FN            = $ndb_FN->query($sql_FN);
                $row_FN            = $res_FN->fetch(PDO::FETCH_ASSOC);
                $this->serviceFlag = $row['SERVICE'];
                $this->fnName      = $row_FN['NAME'];
                setcookie("MYNAUKRI[NI_FN_HS]", Encryption::Encrypt($this->serviceFlag.'|X|'.$this->fnName), time() + 630720000, "/", _COOKIE_DOMAIN, false, true);
            }
        }
    }

    private function getFirstNaukriDetails_mysql() {

        $ndb    = $this->getDatabaseConnection();
        $userId = $this->request->getParameter("id");
        $id     = Encryption::Decrypt($userId);
        $sql    = "SELECT SERVICE, FN_NAME FROM resman5.CONNECT WHERE ID = \"".$id."\"";
        $res    = mysql_query($sql, $ndb);
        $row    = mysql_fetch_assoc($res);
        mysql_close($ndb);
        $this->serviceFlag = $row['SERVICE'];
        $this->fnName = $row['FN_NAME'];
    }

    private function getFirstNaukriDetails() {

        if ($this->mysqlFlag) {
            return $this->getFirstNaukriDetails_mysql();
        }
        $ndb    = $this->getDatabaseConnection();
        $userId = $this->request->getParameter("id");
        $id     = Encryption::Decrypt($userId);
        $sql    = "SELECT SERVICE, FN_NAME FROM resman5.CONNECT WHERE ID = \"".$id."\"";
        $res    = $ndb->query($sql);
        $row    = $res->fetch(PDO::FETCH_ASSOC);
        $res->closeCursor();
        $this->serviceFlag = $row['SERVICE'];
        $this->fnName = $row['FN_NAME'];
    }

    /**
     * @access private
     * @validate auto login user
     */

    private function autoLoginUser($userName, $generateNewDbSessionId = true) {

        $ndb       = $this->getDatabaseConnection();
        $sqlActive = "SELECT RESID FROM resman5.cv_profile WHERE USERNAME = binary \"".addslashes($userName)."\" AND ACTIVE='y'";
        $resActive = $ndb->query($sqlActive);
        if ($resActive) {
            $rowActive = $resActive->fetch(PDO::FETCH_ASSOC);
            $resid = $rowActive["RESID"];
            $resActive->closeCursor();
        }
        if (Cookies::isCookieEnabled()) {
            $newTime = time();
            $id = Encryption::Encrypt($userName, $newTime)."|X|Y|X|U";
            setcookie("test", "naukri.com", time() + 630720000, "/", _COOKIE_DOMAIN, false, true);
            setcookie("MYNAUKRI[ID]", $id, time() + 3888000, "/", _COOKIE_DOMAIN, false, true);
            setcookie("MYNAUKRI[TOUT]", $newTime, time() + 3888000, "/", _COOKIE_DOMAIN, false, true);
            setcookie("MYNAUKRI[RESID]", Encryption::Encrypt($resid), time() + 3888000, "/", _COOKIE_DOMAIN, false, true);
        } else {
            $CurTime = time();
            $ipaddr = CDNHeaders::getInstance()->getRemoteIP();
            if ($generateNewDbSessionId) {
                //set it blank, it will be auto generated
                $newSessionId = '';
                $sqlConnect = "INSERT INTO resman5.CONNECT(ID, RESID, USERNAME, IPADDR, TIME) VALUE(\"".$newSessionId."\", \"".$resid."\", \"".addslashes($userName)."\", \"$ipaddr\", \"".$CurTime."\")";
            } else {
                $newSessionId = $this->getSessionId();
                $newSessionId = Encryption::Decrypt($newSessionId);
                $sqlConnect = "UPDATE resman5.CONNECT set RESID = '".$resid."', TIME = '".$CurTime."' where ID = '".$newSessionId."'";
            }
            $resConnect = $ndb->query($sqlConnect);
            $resConnect->closeCursor();
            if ($newSessionId) {
                $id = Encryption::Encrypt($newSessionId);
            } else {
                $id = Encryption::Encrypt($ndb->lastInsertID());
            }
        }
        return array("ID" => $id, "USERNAME" => $userName, "RESID" => $resid);
    }

    public function updateSessionWithNewProfile($userName) {

        return $this->autoLoginUser($userName, false);
    }
}
?>
