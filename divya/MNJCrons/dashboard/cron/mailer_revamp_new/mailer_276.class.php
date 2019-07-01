<?php
ini_set("memory_limit", "1024M");
define('__DIR__', pathinfo(__FILE__, PATHINFO_DIRNAME)); 
define('CMSURL', "http://cmsservice.mailer.resdex.com/schedule-bulk");
//Enabling the ERROR LOGGING
error_reporting(E_ALL);
set_error_handler("ErrorLogger");

//this function will be made static method of mailer class
function ErrorLogger($errno, $errstr, $errfile, $errline)
{
	$file = __DIR__. "/log/php_error_" . date("Ymd") . ".log";
	file_put_contents($file, date("H:i:s")." : Error no = " .$errno."\nError String = ".$errstr."\nError File = ".$errfile."\nError Line Numer = ".$errline."\n\n", FILE_APPEND);
}

include_once(__DIR__."/config.php");
include_once($APP_DIR."includes/GlobalVars.inc.php");
include_once($APP_DIR."includes/dashboard_globals.inc.php");
include_once($APP_DIR."includes/dashboard_commonfunc.inc.php");
include_once($APP_DIR."cron/mailer_revamp/maps/mapFarea.inc.php");
include_once($APP_DIR."cron/mailer_revamp/maps/mapPrefJobLoc.inc.php");
include_once($APP_DIR."cron/mailer_revamp/maps/mapCity.inc.php");
include_once($APP_DIR."cron/mailer_revamp/maps/mapIndustry.inc.php");
include_once($APP_DIR."cron/mailer_revamp/maps/mapRole.inc.php");
include_once($APP_DIR."cron/mailer_revamp/maps/mapUGCourse.inc.php");
include_once($APP_DIR."cron/mailer_revamp/maps/mapPGCourse.inc.php");
include_once($APP_DIR."cron/mailer_revamp/maps/mapPPGCourse.inc.php");
include_once($APP_DIR."cron/mailer_revamp/maps/mapUGSpec.inc.php");
include_once($APP_DIR."cron/mailer_revamp/maps/mapUGInst.inc.php");
include_once($APP_DIR."cron/mailer_revamp/NaukriMQ/lib/third-party/Pest/PestFactory.php");
include_once($APP_DIR."cron/mailer_revamp/NaukriMQ/lib/third-party/Pest/PestJSON.php");
include_once($APP_DIR."cron/mailer_revamp/NaukriMQ/lib/third-party/Pest/Pest.php");
include_once("GCMThirdParty/config/config.php");
include_once(__DIR__."/../sendMailFunction.php");

/** \brief Mailer Class
 *
 * This class is created with the intent to serve as parent class of all mailers. Therefore, it provides general funtionalities 
 * which a new mailer would require. Most of the functions are protected, so that a child can override them if it want to change functionality.
 * 
 */
class Mailer {
	/** environment is defined in config.php file */
	private 	$env;
	/** connection object of resmanslave. We need it for saving log*/
	private 	$dupAccCnt;
	private 	$reportingEmail;
	/** exit if error occurs */
	private 	$boolExitOnError; 
	private 	$mailHTMLContent;
	private 	$totalMailerCount;
	/** Unique Mailer ID */ /*http://192.168.2.222/jswiki/index.php/Email_Open_Rate */
	protected 	$MID;
	/** connection object to the server, provided by the child */ /* We need to rethink about this. Is it beneficial to make connection object in constructor? */
	protected 	$conn;
	protected 	$log_conn;
	protected 	$server;
	protected 	$logStr;
	protected 	$dayGap;
	protected 	$subject;
	/** TPL name. Need to be set by the child. It can be set anywhere, before mail has been sent to user in init/init_nosql function */
	protected 	$tplName; 
	/** environment specific urls would be available in TPL */
	protected 	$arrPaths; 
	protected 	$globalData;
	protected 	$announce_from;
	protected $mailType;
	protected $mailerCategory;
	protected $recipientType;

	public function __construct($dbserver)
	{
		global $SERVER_RESUMESLAVE;
		global $SERVER_276RESUMESLAVE;
		global $arrConnections;
		global $ENV;
		global $REPORTING_EMAIL;
		$this->env 		= $ENV;
		$this->reportingEmail   = $REPORTING_EMAIL; 
		$this->logStr 		= "Script starts @ " . date('Y-m-d H:i:s');
		$this->curdate 		= strftime("%Y-%m-%d",mktime(0,0,0, date("m"), date("d"), date("Y")));
		$this->conn 		= null;
		$this->log_conn 		= null;
		$this->server 		= $dbserver;
		$this->arrPaths 	= $arrConnections[$this->env];
		$this->totalMailerCount = array();
		$this->boolExitOnError 	= true; 
		//$this->from = 'info@naukri.com';
		//$this->fromName = 'Naukri.com Info';
		$this->headers = array('Content-Type' => 'application/json', 'Accept' => 'application/json');
		//$this->get_mysql_connection($this->server,$this->conn);
		//echo "wwwwwwwwwwwwwwwwwwwwwww";
		$this->get_mysql_connection($SERVER_276RESUMESLAVE, $this->conn);
		//echo "rrrrrrrrrrrrrrrrrrrrrrr";
		$this->get_mysql_connection($SERVER_RESUMESLAVE, $this->log_conn);
		//echo "ttttttttttttttttttttttt";
	}

	protected function get_mysql_connection($server,&$conn)
	{
		connectToDatabase($server, $conn, "y");
	}

	/** \brief init function
	 *
	 * This function takes sql string as argument, executes that sql, retrieves result from database and sends mail to retrieved Email Id's.
	 * After information has been retrieved from database, there are two points where child will have access to this information and it can take
	 * some actions. These two points are additionalData and checkMissingData functions. User information is available in these function and 
	 * child can override them.
	 *
	 */
	public function init($sql,$gap,$conn=null,$checkDuplicate=true,$globaldata=array(),$getProfileData=false,$push_user=false)
	{
		global $smarty;
		global $mailerTplPath;
		$this->globalData = $globaldata;
		$arrUserList = array();
		$mailerCount = array();
		$this->dupAccCnt = 0;
		if(!$conn || !mysql_ping($conn))
			$this->get_mysql_connection($this->server,$conn);
		while(($res = execute_query($sql, $conn)) === false) $this->LogErrorAndReconnect(mysql_error($conn),$conn,$this->server); /** executing the sql */

		/** retrieving info from database and storing it in an array */
		if(mysql_num_rows($res) > 0) {
			while($row = mysql_fetch_assoc($res)) {
                                $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
                                if(!empty($row["EMAIL"]) && !preg_match($pattern, $row["EMAIL"])) {
                                   continue;
                                }

				if($checkDuplicate) {
					/** checking if user has duplicate accounts */
					if( $this->isLatestAccount($row["EMAIL"], $row["ACC_CRT_DATE"]) ) {
						$arrUserList[] = $row;
					} else {
						++$this->dupAccCnt;
					}
				} else
					$arrUserList[] = $row;
			}
		}
		if($gap)
			$this->logStr .= "\n\n".date('Y-m-d H:i:s')." Total users found $gap days ago = " . (count($arrUserList) + $this->dupAccCnt);
		else
			$this->logStr .= "\n\n".date('Y-m-d H:i:s')." Total users found = " . (count($arrUserList) + $this->dupAccCnt);
		if($checkDuplicate)
			$this->logStr .= "\n".date('Y-m-d H:i:s')." Duplicate account count = ". $this->dupAccCnt;

		$index = 1;
		$totalMailer = count($arrUserList);
		$indexForSendMailNew = ceil(($totalMailer*NEWSENDMAILCONST)/100);
		$batchSize = 1000;
		$idx = 1;
		/** looping over array and sending mail to each user */
		//print_r($arrUserList);die;
		$arrChunkUserList = array_chunk($arrUserList , $batchSize, true);
		foreach($arrChunkUserList as $key => $arrUserList){
			$cmsData = array();
			$mailerId = get_class($this) . '_' . date('Y-m-d') .'_' . $idx;
			$idx++;
			foreach($arrUserList as $arrDetails) {
				if(!$tconn || !mysql_ping($conn))
					$this->get_mysql_connection($this->server,$conn);
				if($getProfileData === true)
					$arrDetails = array_merge($arrDetails,$this->getProfileDetail($arrDetails['USERNAME']));

				/** call to additionalData function */
				$arrDetails = array_merge($arrDetails,$this->additionalData($arrDetails));
				$arrDetails = array_merge($arrDetails, $this->additionDataDynamic($arrDetails));

				/** call to checkMissingData function */
				$validData = $this->checkMissingData($arrDetails);

				/** assigning data to template */
				$this->setTemplateData($arrDetails,$smarty,$mailerTplPath);

				if($arrDetails['EMAIL']!='' && $validData) {
					/** fetching template */
					$this->mailHTMLContent = $smarty->fetch($mailerTplPath.$this->tplName);
					$email = ($this->env == 'LIVE') ? $arrDetails['EMAIL'] : $this->reportingEmail;
					// $email = "sankalpsharma05021992@gmail.com";
					/** sending mail */
					$cmsData[] = $this->setMetaData($arrDetails['USERID'],$email, $this->subject,$this->mailHTMLContent, $this->from, $this->fromName, $mailerId);
					$mailerCount[$this->MID]++;
					if($push_user)
					   $this->push_user($arrDetails);   
				}
				$index++;
				
				// clear all assigned variables (Not working)
				//$smarty->clearAllAssign();
			}
			$pest = PestFactory::getInstance()->getJsonPestManager(2, 2);
			try {
				$response= $pest->post(CMSURL, $cmsData, $this->headers, true);
				file_put_contents('/tmp/cmsDataMailer_' . date('Y-m-d') . '.log', $mailerId . "\n", FILE_APPEND);
			}catch(Exception $e) {
                                $msg = $mailerId." ".$e->getMessage();
                                //file_put_contents('/tmp/cmsDataMailerRequestData_' . date('Y-m-d') . '.log', print_r($cmsData,1),FILE_APPEND);
                                file_put_contents('/tmp/cmsDataMailerError_' . date('Y-m-d') . '.log', print_r($msg,1). "\n", FILE_APPEND);
			}
		}
		/** mail has been sent to all users. Do you want to do something with mailercount? */
		if($this->env == 'LIVE')
			$this->doStuff($mailerCount);
		$totalCount = 0;
		foreach($mailerCount as $mid => $count) {
			$this->totalMailerCount[$mid] += $count;
			$totalCount += $count;
		}
		$this->logStr .= "\n".date('Y-m-d H:i:s')." Mail sent to $totalCount users.";
	}

	/** \brief push_user function
	 *
	 * Call to this function is made when mail has been successfully sent to a user. Record this event. User informantion is available
	 * inside.
	 *
	 * $arrDetails: an array of user information
	 *
	 */
	protected function push_user($arrDetails)
	{
		$sql = "insert into db1.SENT_MAIL (EMAIL,MID,DATE) values ('".$arrDetails['EMAIL']."','".$this->MID."','".date('Y-m-d')."')";
		while(($res = execute_query($sql, $this->log_conn)) === false) $this->LogErrorAndReconnect(mysql_error($this->log_conn),$this->log_conn,$SERVER_RESUMESLAVE);
	}

	/** \brief init_nosql function
	 *
	 * If you have user data and just want to send mail, use this function instead of init. All other functionalities are same as init.
	 *
	 * $arrUserList: User information
	 * $globaldata: array of data
	 * $getProfileData: bool
	 * $push_user: bool
	 *
	 */

	public function init_nosql($arrUserList,$globaldata=array(),$getProfileData=false,$push_user=false)
	{
		global $smarty;
		global $mailerTplPath;
		$this->globalData = $globaldata;
		$mailerCount = array();

		$index = 1;
		$totalMailer = count($arrUserList);
		$indexForSendMailNew = ceil(($totalMailer*NEWSENDMAILCONST)/100);
		$batchSize = 1000;
		$idx = 1;
		/** looping over array and sending mail to each user */
		//print_r($arrUserList);die;
		$arrChunkUserList = array_chunk($arrUserList , $batchSize, true);
		foreach($arrChunkUserList as $key => $arrUserList){
			$cmsData = array();
			$mailerId = get_class($this) . '_' . date('Y-m-d') .'_' . $idx;
			$idx++;

			foreach($arrUserList as $arrDetails) {
				if(!$this->conn || !mysql_ping($this->conn))
					$this->get_mysql_connection($this->server,$this->conn);
				if($getProfileData === true)
					$arrDetails = array_merge($arrDetails,$this->getProfileDetail($arrDetails['USERNAME']));
				$arrDetails = array_merge($arrDetails,$this->additionalData($arrDetails));
				$arrDetails = array_merge($arrDetails, $this->additionDataDynamic($arrDetails));
				$validData = $this->checkMissingData($arrDetails);
				//print_r($arrDetails);die;
				$this->setTemplateData($arrDetails,$smarty,$mailerTplPath);
				if($arrDetails['EMAIL']!='' && $validData) {
					$this->mailHTMLContent = $smarty->fetch($mailerTplPath.$this->tplName);
					$email = ($this->env == 'LIVE') ? $arrDetails['EMAIL'] : $this->reportingEmail;
					$cmsData[] = $this->setMetaData($arrDetails['USERID'],$email, $this->subject,$this->mailHTMLContent, $this->from, $this->fromName, $mailerId);
					$mailerCount[$this->MID]++;
					if($push_user)
						$this->push_user($arrDetails);
				}
				$index++;
			}
			$pest = PestFactory::getInstance()->getJsonPestManager(2, 2);
			try {
				$response= $pest->post(CMSURL, $cmsData, $this->headers, true);
				file_put_contents('/tmp/cmsData_' . date('Y-m-d') . '.log', $mailerId . "\n", FILE_APPEND);
			}catch(Exception $e) {
				$msg = $e->getMessage();
				file_put_contents('/tmp/cmsData_' . date('Y-m-d') . '.log', print_r($msg,1). "\n", FILE_APPEND);
			}

		}
		if($this->env == 'LIVE')
			$this->doStuff($mailerCount);
		$totalCount = 0;
		foreach($mailerCount as $mid => $count) {
			$this->totalMailerCount[$mid] += $count;
			$totalCount += $count;
		}
		$this->logStr .= "\n".date('Y-m-d H:i:s')." Mail sent to $totalCount users.";
	}

	public function init_nosql_new($arrUserList,$globaldata=array(),$getProfileData=false,$push_user=false)
	{
		global $smarty;
		global $mailerTplPath;
		$this->globalData = $globaldata;
		$mailerCount = array();
		foreach($arrUserList as $arrDetails) {
			if(!$this->conn || !mysql_ping($this->conn))
				$this->get_mysql_connection($this->server,$this->conn);
			if($getProfileData === true)
				$arrDetails = array_merge($arrDetails,$this->getProfileDetail($arrDetails['USERNAME']));
			$arrDetails = array_merge($arrDetails,$this->additionalData($arrDetails));
			$arrDetails = array_merge($arrDetails, $this->additionDataDynamic($arrDetails));
			$validData = $this->checkMissingData($arrDetails);
			//print_r($arrDetails);die;
			$this->setTemplateData($arrDetails,$smarty,$mailerTplPath);
			if($arrDetails['EMAIL']!='' && $validData) {
				$this->mailHTMLContent = $smarty->fetch($mailerTplPath.$this->tplName);
				$email = ($this->env == 'LIVE') ? $arrDetails['EMAIL'] : $this->reportingEmail;
				$this->subject = $arrDetails['subject'];
				$arrDetails['EMAIL']."===".$this->subject."++".$arrDetails['username']."\n";
				if(!$this->sendMail($email,$this->subject)) {
					try {
						if ($this->MID == 15) {
							$cmd = "/usr/local/php/bin/php /usr/local/apache/htdocs/dashboard/cron/mailer_revamp/NaukriMQ/RVMPush.php "."\"{$arrDetails['username']}\"";
							//						       passthru($cmd);
						}
					} catch (Exception $e) {
						echo $e->getMessage();
					} 
					$mailerCount[$this->MID]++;
					if($push_user)
						$this->push_user($arrDetails);
				}
			}
			// clear all assigned variables
			//$smarty->clearAllAssign();
		}
		if($this->env == 'LIVE')
			$this->doStuff($mailerCount);
		$totalCount = 0;
		foreach($mailerCount as $mid => $count) {
			$this->totalMailerCount[$mid] += $count;
			$totalCount += $count;
		}
		$this->logStr .= "\n".date('Y-m-d H:i:s')." Mail sent to $totalCount users.";
	}

	protected function doStuff($count)
	{
		return;
	}

	/** \brief additionalData function
	 *
	 * $arrDetails: an array of User information
	 *
	 * Return: array of data
	 *
	 */
	protected function additionalData($arrDetails)
	{
		return array();
	}

	protected function additionDataDynamic($arrDetails)
   	{
        	return array();
    	}

	/**
	 *
	 * save/email generated logs.
	 *
	 */
	protected function saveLog($sub,$mesg=null)
	{
		$totalMails = 0;
		foreach($this->totalMailerCount as $mid => $count)
			$totalMails += $count;
		$this->logStr .= "\n\n".date('Y-m-d H:i:s')." Total Mails Sent = ".$totalMails;

		if(!empty($mesg))
			$this->logStr .= "\n\n".date('Y-m-d H:i:s')." ".$mesg;
		$this->saveMailSentCount($this->log_conn); /** saving mailcount in database */
		echo $this->logStr .= "\n\nScript ends @ " . date('Y-m-d H:i:s');
		$this->LogError($this->logStr,1); /** saving log in file */
		mail($this->reportingEmail, $sub, $this->logStr); /** emailing log to reportingEmailId */
	}

	/** \brief checkMissingData function
	 *
	 * $arrDetails: an array of user information
	 *
	 * Return: bool
	 *
	 */
	protected function checkMissingData($arrDetails)
	{//override this function in child
		return true;
	}

	/** \brief setTemplateData function
	 * Assigns variables to smarty template
	 * $data: array of User Data
	 * $smarty: smarty object
	 * $mailerTplPath: path to tpl file
	 *
	 */
	protected function setTemplateData($data,$smarty,$mailerTplPath)
	{	
		foreach($data as $key => $value)
			$smarty->assign($key,$value);
		$this->assignGlobalData($smarty); /** assigning global data to template */
		$smarty->assign("arrPaths",$this->arrPaths); /** assigning environment dependent path URLs to template */
		$smarty->assign("mailerTplPath",$mailerTplPath);
		$smarty->assign("MID",$this->MID); /** assigning MID to template */
	}

	/** \brief assignGlobalData function
	 *
	 * $smarty: smarty object
	 *
	 */
	protected function assignGlobalData($smarty)
	{
		foreach($this->globalData as $key => $value){
			$smarty->assign($key,$value);
		}
	}

	/** \brief sendMail function
	 *
	 * $email: EMAIL ID
	 * $subject: Email Subject
	 *
	 * Return: Integer Mail send code
	 *	   -1, if failure
	 *
	 */
	private function sendMail($email,$subject)
	{
		$announce_to = $email;
		$announce_from = $this->announce_from;
		$announce_subject = $subject;
		preg_match('/<(.*?)>/', $announce_from, $match);
		$foption = $match[1];
		$foption = $foption?" -f$foption":" ";
		$MP = "/usr/sbin/sendmail -t $foption";
		//$MP = "/usr/sbin/sendmail -t";
		$MP .= " -N never";
		//$MP .= " -FNaukri.com info";
		$fd = popen ($MP, "w");
		fputs ($fd, "X-Mailer: Naukri-Mail\n");
		fputs ($fd, "MIME-Version: 1.0\r\n");
		fputs ($fd, "To: $announce_to\n");
		fputs ($fd, "From: $announce_from \n");
		fputs ($fd, "Subject: $announce_subject \n");
		fputs($fd, "Content-Type: text/html; charset=us-ascii \n");
		fputs($fd, "Content-Transfer-Encoding: 7bit \n\n");
		fputs ($fd, "$this->mailHTMLContent");
		$rcode = pclose ($fd);
		return $rcode;
	}

	protected function getProfileDetail($username)
	{
		$details = array();
		$sql = "SELECT NAME, RESID, TOTAL_EXP, CTC, FAREA, IND_TYPE, LOC_PREF, ROLE, CITY, KEYWORDS, TITLE,MOD_DT FROM resman5.cv_profile WHERE USERNAME = '$username' AND ACTIVE = 'y'";
		while(($res = execute_query($sql, $this->conn)) === false) $this->LogErrorAndReconnect("getProfileDetail fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
		$row = mysql_fetch_assoc($res);
		$details["NAME"] = $row["NAME"];
		$details["RESID"] = $row["RESID"];
		$details["CITY"] = $row["CITY"];  
		$details["KEYWORDS"] = $row["KEYWORDS"];
		$details["TITLE"] = $row["TITLE"];
		$details["FAREA"] = $this->getFArea($row["FAREA"]);
		//$details["IND_TYPE"] = $this->getIndType($row["IND_TYPE"]);
		$details["LOC_PREF"] = $this->getPrefLocation(explode(',',$row["LOC_PREF"]));
		$details["ROLE"] = $this->getRole($row['FAREA'],$row['ROLE']);
		$details["MOD_DT"] = $row["MOD_DT"];
		$details = array_merge($details,$this->processData($row));
		return $details;
	}

	protected function processData($data)
	{
		$details = array();
		$exp = explode(".",$data['TOTAL_EXP']);
		$details["TOTAL_EXP"] = $exp[0]=='-1'?"Not Mentioned" :$exp[0]=='99'?'Fresher':($exp[0]=='31'?'30+':$exp[0])." year(s) ".($exp[1]!="-1"&&!empty($exp[1])?$exp[1]." month(s)":"");
		$ctc = explode(".",$data["CTC"]);
		$details["CTC"] = $ctc[0]=='-1'?"Not Mentioned" : ((($ctc[1]!='-1' && !empty($ctc[1])) ? $data["CTC"] : ($ctc[0]=='51'?'50+':$ctc[0])) ." Lakh(s)");
		return $details;
	}

	function getLocationFromMap($ID=array()) {
		global $mapCity;
		$result=  array();
		foreach ($ID as $cityId) {
			if (trim($cityId) == '') continue;
			if($cityId >= 9999) {
				$sql = "SELECT LABEL FROM resman5.MCITY WHERE ID =".$cityId;
				while(($res = mysql_query($sql, $this->conn)) === false) $this->LogErrorAndReconnect("getLocationFromMap fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
				while($row = mysql_fetch_assoc($res))
					array_push($result,$row['LABEL']);
			} else {
				array_push($result,$mapCity[$cityId]);
			}
		}               
		return implode(',',$result);
	}

	function getFAreaFromMap($farea) {
		global $mapFarea;
		return $mapFarea[$farea];
	}

	function getPPGCourseFromMap($ppgCourseId) {
		global $mapPPGCourse;
		if($ppgCourseId>=9999) {
			$sql = "SELECT PPGCOURSE FROM resman5.MPPGCOURSE WHERE CID =".$ppgCourseId;
			while(($res = mysql_query($sql, $this->conn)) === false) 
				$this->LogErrorAndReconnect("getPPGCourseFromMap fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
			while($row = mysql_fetch_assoc($res))
				return $row['PPGCOURSE'];
		}
		return $mapPPGCourse[$ppgCourseId];
	}

	function getPGCourseFromMap($pgCourseId) {
		global $mapPGCourse;
		if($pgCourseId>=9999) {
			$sql = "SELECT PGCOURSE FROM resman5.MPGCOURSE WHERE CID =".$pgCourseId;
			while(($res = mysql_query($sql, $this->conn)) === false) $this->LogErrorAndReconnect("getPGCourseFromMap fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
			while($row = mysql_fetch_assoc($res))
				return $row['PGCOURSE'];
		}
		return $mapPGCourse[$pgCourseId];
	}

	function getUGCourseFromMap($ugCourseId) {
		global $mapUGCourse;
		if($ugCourseId>=9999) {
			$sql = "SELECT UGCOURSE FROM resman5.MUGCOURSE WHERE CID =".$ugCourseId;
			while(($res = mysql_query($sql, $this->conn)) === false) $this->LogErrorAndReconnect("getUGCourseFromMap fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
			while($row = mysql_fetch_assoc($res))
				return $row['UGCOURSE'];
		}
		return $mapUGCourse[$ugCourseId];
	}

	function getUGSpecFromMap($ugSpecId) {
		global $mapUGSpec;
		if($ugSpecId>=9999) {
			$sql = "SELECT UGSPEC FROM resman5.MUGSPEC WHERE CID =".$ugSpecId;
			while(($res = mysql_query($sql, $this->conn)) === false) $this->LogErrorAndReconnect("getUGSpecFromMap fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
			while($row = mysql_fetch_assoc($res))
				return $row['UGSPEC'];
		}
		return $mapUGSpec[$ugSpecId];
	}

	function getUGInstFromMap($ugInstId) {
		global $mapUGInst;
		if($ugInstId>=9999) {
			$sql = "SELECT INSTITUTE FROM resman5.MUGINST WHERE ID =".$ugInstId;
			while(($res = mysql_query($sql, $this->conn)) === false) $this->LogErrorAndReconnect("getUGInstFromMap fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
			while($row = mysql_fetch_assoc($res))
				return $row['INSTITUTE'];
		}
		return $mapUGInst[$ugInstId];
	}

	function getRoleFromMap($fid,$rid) {
		global $mapRole;
		return $mapRole[$fid.'.'.$rid];
	}

	function getRoleTypeFromMap($rid) {
		global $mapRole;
		return $mapRole[$rid];
	}

	function getIndTypeFromMap($value) {
		global $mapIndustry;
		return $mapIndustry[$value];
	}

	function getPrefLocationFromMap($ID=array()) {
		global $mapPrefJobLoc;
		$result=  array();
		foreach ($ID as $prefJobLocId) {
			if($prefJobLocId>=9999) {
				$prefJobLocId=9999;
			}
			array_push($result,$mapPrefJobLoc[$prefJobLocId]);
		}               
		return implode(',',$result);
	}

	function getFArea($farea)
	{
		$sql = "SELECT f.LABEL AS FAREA_LABEL FROM resman5.FAREA AS f WHERE f.FAREA_ID = '$farea'";
		while(($res = mysql_query($sql, $this->conn)) === false) $this->LogErrorAndReconnect("getFArea fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
		$row = mysql_fetch_assoc($res);
		return $row["FAREA_LABEL"];
	}

	function getRole($fid,$rid)
	{
		if(empty($rid))
			return "";
		$sql = "SELECT IF($rid = '-1' OR $rid = '', 'Not Mentioned', r.ROLE) AS ROLE FROM resman5.ROLE AS r WHERE  r.FID = '$fid' AND IF($rid = '-1' OR $rid = '', 1, $rid) = r.RID";
		while(($res = mysql_query($sql, $this->conn)) === false) $this->LogErrorAndReconnect("getRole fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
		$row = mysql_fetch_assoc($res);
		return $row["ROLE"];
	}

	function getIndType($value)
	{
		$sql = "SELECT i.LABEL AS IND_TYPE FROM resman5.INDTYPE AS i WHERE i.VALUE = '$value'";
		while(($res = mysql_query($sql, $this->conn)) === false) $this->LogErrorAndReconnect("getIndType fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
		$row = mysql_fetch_assoc($res);
		return $row["IND_TYPE"];
	}

	function getPrefLocation($ID=array())
	{
		$result = array();
		$id = implode("','",$ID);
		$sql = "SELECT LABEL FROM resman5.DTARGETCITY WHERE ID IN ('$id')";
		while(($res = mysql_query($sql, $this->conn)) === false) $this->LogErrorAndReconnect("getPrefLocation fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
		while($row = mysql_fetch_assoc($res))
			array_push($result,$row['LABEL']);
		return implode(',',$result);
	}

	function getLocation($ID=array(), $checkForOtherCities = false)
	{
		$result = array();
		$id = implode("','",$ID);
		$sql = "SELECT LABEL FROM resman5.DCITY WHERE ID IN ('$id')";
		while(($res = mysql_query($sql, $this->conn)) === false) $this->LogErrorAndReconnect("getLocation fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
		if(mysql_numrows($res) == 0 && $checkForOtherCities) {
			unset($res);
			$sql = "SELECT LABEL FROM resman5.MCITY WHERE ID IN ('$id')";
			while(($res = mysql_query($sql, $this->conn)) === false) $this->LogErrorAndReconnect("getLocation fatal mcity".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
		}
		while($row = mysql_fetch_assoc($res))
			array_push($result,$row['LABEL']);
		return implode(',',$result);
	}

	function getTotalExp($totalExp)
	{
		$result = array();
		$result = explode('.',$totalExp);
		if($result[0] == 99){
			$totalExp = 'Fresher';
		}
		else if($totalexp[0] >= 31){
			$totalExp = "30+ Year(s)";
		}
		else if($totalexp == "30+")
			$totalExp =  "30+ Year(s)";
		else
		{
			$result[1] = $result[1] ? $result[1] : 0 ;
			$totalExp = $result[0]." Year(s) ".$result[1]." Month(s)";
		}
		return $totalExp;
	}

	function getCTC($CTC)
	{
		$result = array();
		$result = explode('.',$CTC);
		if(($result[0] == -1 && $result[1] == -1) || $CTC == null){
			$CTC = 1;
		}
		else if($result[0] == -1 && $result[1] >= 0){
			$CTC = $result[1]." Thousand(s)";
		}
		else if($result[0] >= 0 && $result[1] == -1){
			$CTC = $result[0]." Lakh(s)";
		}
		else if($result[0] > 50){
			$CTC = "50+ Lakhs";
		}
		else if($result[0] >=0 || $result[1] >=0){
			$CTC = $CTC." Lakh(s)";
		}
		return $CTC;
	}

	private function isLatestAccount($email, $registrationDate)
	{
		$sql = "SELECT COUNT(1) as ACC_CNT FROM resman5.cv_users WHERE EMAIL = '$email' AND ACC_CRT_DATE > '$registrationDate'";
		while(($res = execute_query($sql, $this->conn)) === false) $this->LogErrorAndReconnect("isLatestAccount fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
		$row = mysql_fetch_assoc($res);
		return ! intval($row["ACC_CNT"]);
	}

	protected function saveMailSentCount($conn)
	{
		foreach($this->totalMailerCount as $mid => $count) {
			//                      if ( $conn ) {
			$sql = "SELECT ID FROM db1.MAILER_TRACK WHERE MID = '$mid' AND DATE = CURRENT_DATE";
			//     $res = execute_query($sql, $conn) or $this->LogError(mysql_error($conn));
			while(($res = execute_query($sql, $this->log_conn)) === false) $this->LogErrorAndReconnect(mysql_error($this->log_conn),$this->log_conn,$SERVER_RESUMESLAVE);
			if (!mysql_num_rows($res)) {
				$sql = "INSERT INTO db1.MAILER_TRACK(DATE, MID, SENT_COUNT, OPEN_COUNT) VALUES(CURRENT_DATE, '$mid', '$count', '0')";
			} else {
				$row = mysql_fetch_row($res);
				$sql = "UPDATE db1.MAILER_TRACK SET SENT_COUNT=SENT_COUNT+$count WHERE MID = '$mid' AND DATE = CURRENT_DATE AND ID = {$row[0]}";
			}
			$logStr .= "\n$sql";
			//                                $res = execute_query($sql, $conn) or $this->LogError(mysql_error($conn));
			while(($res = execute_query($sql, $this->log_conn)) === false) $this->LogErrorAndReconnect(mysql_error($this->log_conn),$this->log_conn,$SERVER_RESUMESLAVE);
			//                      } else {
			//                              $this->LogError(mysql_error());
			//                      }
		}
	}

	protected function checkMobileNumber($arrDetails)
	{
		//if($this->isNonIndianMphone($arrDetails["MPHONE"]) || $arrDetails["MAILER"] != "11") { // bug 58275 
		if(!$this->isNonIndianMphone($arrDetails["MPHONE"]) && $arrDetails["MAILER"] != "11") {
			return true ;
		} else
			return false;
	}

	protected function checkEmailVerified($arrDetails)
	{
		if ( strtolower($arrDetails["VERIFY"]) != "b") {
			return true;
		} else
			return false;
	}

	protected function checkFarea($Farea)
	{
		if ( $Farea == 41 )  {
			return true; 
		} else
			return false; 
	}

	protected function checkIndustry($IND_TYPE)
	{
		if ($IND_TYPE == 29 ) {
			return true; 
		} else
			return false; 
	}

	protected function checkCV($resID) {

		$cvInfoIdx = floor(intval($resID) / 1000000);
		// fetch cv from mogile
		$sql1 = "SELECT LENGTH(WORDCV) AS LWCV, LENGTH(TEXTCV) AS LTCV FROM resman5.cv_info$cvInfoIdx WHERE RESID = '".$resID."'";
		$res1 = execute_query($sql1, $this->conn);
		if ( mysql_num_rows($res1) == 0 ) {
			return true;
		}
		else {
			$row1 = mysql_fetch_assoc($res1);
			if ( $row1["LWCV"] == 0 && $row1["LTCV"] == 0 ) {
				return true;
			} else
				return false;
		}
	}

	protected function isNonIndianMphone($mphone) {

		$mphone = preg_replace("/^[\+\-0]*/", "", $mphone); // strip all  leading +, -, 0
		$pattern1Indian = "/^(9|8|7)[0-9]{9}$/"; // starts with 9 or 8 or 7  and has 10 chars
		$pattern2Indian = "/^91(9|8|7)[0-9]{9}$/"; // starts with 919 or 918 or 917 and has 12 chars
		$patternNonIndian = "/^[0-9]{10,}$/"; // has at least 10 chars

		if (! preg_match($pattern1Indian, $mphone) && !  preg_match($pattern2Indian, $mphone) && preg_match($patternNonIndian,$mphone)){

			return true;
		}
		else {
			return false;
		}
	}

	/* Function checkEduNExpDetail 
	   return an array('experienceNotValid' => true/false,
	   'compdetailnotspecified' => true/false,
	   'eduexpnotspecified' => true/false,
	   'ougcourseOther' =>	true/false); */
	protected function checkEduNExpDetail($resID,$totalExp) {
		$detail = array();
		$sql2 = "SELECT (YEAR(CURDATE()) - YEAR_COMPLETION ) as YEAR_COMPLETION_GAP, YEAR_COMPLETION, COURSE_ID, EDUCATION_TYPE FROM resman5.cv_education WHERE RESID = '". $resID."' order by YEAR_COMPLETION DESC limit 1";
		while(($res2 = execute_query($sql2, $this->conn)) === false) $this->LogErrorAndReconnect("checkEduNExpDetail fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
		$row2 = mysql_fetch_assoc($res2);
		//		if( $totalExp > ($row2["YEAR_COMPLETION_GAP"]+1) && $totalExp<99 ) {
		//			$detail['experienceNotValid'] = true;
		//		} else
		$detail['experienceNotValid'] = false;
		$detail['COURSE_ID'] = $row2["COURSE_ID"];
		$detail['EDUCATION_TYPE'] = $row2["EDUCATION_TYPE"];
		$yearEdu = $row2["YEAR_COMPLETION"];
		$sql3 = "select YEAR(START_DATE) as EXP_START_DATE, ORGN, DESIG,PROFILE from resman5.cv_exp WHERE RESID = '". $resID."' order by START_DATE DESC";
		while(($res3 = execute_query($sql3, $this->conn)) === false) $this->LogErrorAndReconnect("checkEduNExpDetail1 fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);

		$arrExpList = array();
		$index=0;
		while($row3 = mysql_fetch_assoc($res3)) {
			$arrExpList[$index]["StartDate"] = $row3["EXP_START_DATE"];
			$arrExpList[$index]["Organization"] = $row3["ORGN"];
			$arrExpList[$index]["Designation"] = $row3["DESIG"];
			$arrExpList[$index]["Profile"] = $row3["PROFILE"];
			$index++;
		}
		$detail['Organization'] = $arrExpList[0]["Organization"];
		$detail['Designation'] = $arrExpList[0]["Designation"];
		if($totalExp >0  && $totalExp < 99 && (trim($arrExpList[0]["StartDate"])=="" || trim($arrExpList[0]["Organization"])=="" || trim($arrExpList[0]["Designation"])=="")) {
			$detail['compdetailnotspecified'] = true ;
		} else
			$detail['compdetailnotspecified'] = false ;
		$yearExp =   $arrExpList[$index-1]["StartDate"];
		if(($yearExp-$yearEdu)>1 && trim($yearExp)!="" && trim($yearEdu)!="" && $totalExp >0  && $totalExp < 99) {
			$detail['eduexpnotspecified'] = true ;
		} else
			$detail['eduexpnotspecified'] = false ;

		$eduPrefix = array("1"=>"UG", "2"=>"PG", "3"=>"PPG");
		$eduTableName = ($detail['EDUCATION_TYPE'])?"M".$eduPrefix[$detail['EDUCATION_TYPE']]."COURSE":"MUGCOURSE";
		$fieldName = ($detail['EDUCATION_TYPE'])?$eduPrefix[$detail['EDUCATION_TYPE']]."COURSE":"UGCOURSE";
		$sql4 = "SELECT $fieldName FROM resman5.$eduTableName WHERE CID = '".$row2["COURSE_ID"]."'";
		while(($res4 = execute_query($sql4, $this->conn)) === false) $this->LogErrorAndReconnect("checkEduNExpDetail2 fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
		$row4 = mysql_fetch_assoc($res4);
		if ($row4["$fieldName"] == "Others") {
			$detail['ougcourseOther']=true;
		} else
			$detail['ougcourseOther']=false;
		$detail['UGCOURSE'] = $row4["$fieldName"]; //*! To resolve P1 Bug 76765
		return $detail;
	}

	protected function checkCTCError($totalExp,$CTC,$CTC_TYPE,$userType) {
		$totalExperience = (float) $totalExp;
		$currentCTC = (float) $CTC;
		list($expYears, $expMonths) = explode(".", $totalExperience);
		list($ctcLacs, $ctcThousands) = explode(".",  $currentCTC);

		if($totalExperience!=0) {
			$ctcToExperienceRatio = ($currentCTC/$totalExperience);
		}
		//if($totalExp >0  && $totalExp < 99 &&( (($expYears >= 1 && $expYears < 99 ) &&  ($ctcLacs <= 0 && $ctcThousands <= 0 )) ||( (is_null($userType)) && ($ctcToExperienceRatio < 0.15 || $ctcToExperienceRatio > 5) )) ) {
		if($totalExp >0  && $totalExp < 99 &&( (($expYears >= 1 && $expYears < 99 ) &&  ($ctcLacs <= 0 && $ctcThousands <= 0 )) ) ) {
			return true ;
		} //else if($CTC_TYPE == 'U')
		//  return true;
		else
			return false ;
	}

	protected function checkPreferedLocError($LocPref) {
		$arrPreferredLocation =explode(",",$LocPref);
		if (trim($LocPref)=="" || in_array('1',$arrPreferredLocation) || in_array('-1',$arrPreferredLocation) || in_array('2',$arrPreferredLocation)) 		{
			return true ;
		} else
			return false ;
	}

	protected function checkLocation($Location) {
		$sqlCity = "SELECT LABEL FROM resman5.MCITY WHERE ID = \"$Location\"";
		while(($resCity = execute_query($sqlCity, $this->conn)) === false) $this->LogErrorAndReconnect("checkLocation fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
		$rowCity = mysql_fetch_assoc($resCity);
		if ($rowCity["LABEL"] == "others") {
			return true; 
		} else
			return false; 
	}

	protected function checkKeyskills($Keyskills) {
		if ($Keyskills == "Not Updated" || strlen($Keyskills) < 15) {
			return true; 
		} else
			return false; 
	}

	protected function checkKeyskills2($Keyskills) {
		if ($Keyskills == "Not Updated") {
			return true;
		} else
			return false;
	}

	protected function checkResumeHeadline($ResumeHeadline) {
		if ($ResumeHeadline == "None" || strlen($ResumeHeadline) < 15) {
			return true; 
		} else
			return false; 
	}

	protected function checkResumeHeadline2($ResumeHeadline) {
		if ($ResumeHeadline == "None") {
			return true; 
		} else
			return false; 
	}

	protected function checkPhotoStatus($resid)
	{
		$sql = "select * from resman5.cv_profile_other_info as p where resid = '$resid'";
		while(($res = execute_query($sql, $this->conn)) === false) $this->LogErrorAndReconnect("checkPhotoStatus fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
		$row = mysql_fetch_assoc($res);
		if(!empty($row) && $row['key']=='photo_status')
			return false;
		else
			return true;
	}

	protected function checkItSkills($Farea, $Resid)
	{
		if (in_array ($Farea, $this->ID_IT_FAREA)){
			$sql = "select count(1) as c from cv_itskills_new where resid = '$Resid'"; 
			while(($res = execute_query($sql, $this->conn)) === false) $this->LogErrorAndReconnect("checkItSkills fatal ".mysql_error($this->conn),$this->conn,$SERVER_276RESUMESLAVE);
			$row = mysql_fetch_assoc($res); 
			if($row[c] > 0)
				return false;
			else
				return true;
		}
		else
			return false;
	}

	protected function checkRoleStatus($roleSpecified) {

		switch($roleSpecified){
			case "1.25":
				case "2.11":
				case "3.9":
				case "4.29":
				case "4.30":
				case "5.26":
				case "7.10":
				case "8.37":
				case "9.5":
				case "10.18":
				case "11.4":
				case "12.16":
				case "13.12":
				case "13.13":
				case "14.17":
				case "15.32":
				case "16.52":
				case "18.6":
				case "19.25":
				case "21.12":
				case "21.37":
				case "22.24":
				case "22.25":
				case "36.8":
				case "37.34":
				case "41.1":
				case "42.8":
				case "43.28":
				case "44.21":
				case "45.7":
				case "46.7":
				return true ;
			break;
			default:
			return false ;
		}
	}

	protected function LogError($errorString, $doNotDie=0) {
		$file = __DIR__. "/log/".get_class($this)."_" . date("Ymd") . ".log";
		file_put_contents($file, date("H:i:s")." : " .$errorString."\n\n", FILE_APPEND);
		if ( $this->boolExitOnError && !$doNotDie) {
			exit(0);
		}
	}

	protected function LogErrorAndReconnect($errorString, &$conn, $server) {
		$file = __DIR__. "/log/".get_class($this)."_" . date("Ymd") . ".log";
		file_put_contents($file, date("H:i:s")." : " .$errorString."\n\n", FILE_APPEND);
		$this->get_mysql_connection($server,$conn);
	}

        private function setMetaData($userid, $email, $subject,$mailHTMLContent, $from, $fromName, $mailerId = null) {
            $data['app_id'] = '105';
            $data["job_name"] = $this->job_name ? $this->job_name : "mnj";
            $data['meta_data']['recipients'][0]['send_to'] = $email;
            $data['meta_data']['recipients'][0]['userid'] = $userid;
            $data['meta_data']['recipients'][0]['mailSettingCheckProperty'] = $this->mailSettingCheckProperty;
            //$data['recipients'][0]['NAME'] = $email;
            //$data['recipients'][0]['userName'] = $email;
            //$data['meta_data']['mailer_id'] = $mailerId;
            $data['meta_data']['users']['from']['email'] = $from;
            $data['meta_data']['users']['from']['name'] = $fromName;
            $data['meta_data']['users']['replyTo']['email'] = $from;
            $data['meta_data']['users']['replyTo']['name'] = $fromName;
            $data['meta_data']['template_data']['template_body'] = $mailHTMLContent;
            $data['meta_data']['template_data']['template_subject'] = $subject;
            $data['meta_data']['template_data']['mailer_id'] = $mailerId;
            $data['meta_data']['uba_data']['mailType'] = $this->mailType;
            $data['meta_data']['uba_data']['mailerCategory'] = $this->mailerCategory;
            $data['meta_data']['uba_data']['recipientType'] = $this->recipientType;
            return $data;
        }
}
