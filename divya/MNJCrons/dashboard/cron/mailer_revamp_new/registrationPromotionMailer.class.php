<?php
/*
(
    [URL] => https://my.naukri.com
    [APP_DIR] => /home/vikasa/cron/critical_action
    [MAIL_TRACK_URL] => https://my.naukri.com/manager/emt.php?mid=
    [RESETPASSURL] => https://login.naukri.com/nLogin/resetpass.php
    [LOGINURL] => https://login.naukri.com/nLogin
    [CJAURL] => http://jobsearch.naukri.com/mynaukri/js_msngr.php
    [COMPBLOCKURL] => https://my.naukri.com/BlockCompany/view/
    [PROFILEVISIBILITYURL] => https://my.naukri.com/ManageProfiles/profileVisibility
    [MOBILEURL] => https://www.naukri.com/mobile/
    [PROFILEURL] => https://my.naukri.com/Profile/view
    [TCURL] => http://jobsearch.naukri.com/mynaukri/mn_termsconditions.php
    [FAQURL] => https://my.naukri.com/faq/faq.php
    [IMGURL] => https://img.naukimg.com/s/1/10/i
    [DELETEACCURL] => https://my.naukri.com/DeleteAccount/delete
    [ICOPSSAVEURL] => https://my.naukri.com/AL/saveDetails
    [ICOPSEDITURL] => https://my.naukri.com/AL/editProfile
    [FFITCERTURL] => https://resume.naukri.com/it-certifications?fftid=110039
    [FFAPTICERTURL] => https://resume.naukri.com/aptitude-test-online?fftid=110040
    [FFVERIURL] => https://resume.naukri.com/background-checks?fftid=210044
    [RESUMENONREG_SERVICEURL] => http://service.response.resdex.com/brv/index.php/rservice
)

*/
define('__DIR__', pathinfo(__FILE__, PATHINFO_DIRNAME));
include_once(__DIR__."/mailer_276.class.php");

class RegistrationPromotionMailer extends Mailer {

	private $IntUsersAlreadyRegistered;

	public function __construct($dbserver)
	{
		$this->announce_from = "Naukri.com Alert <naukrialerts@naukri.com>";
		$this->announce_from_name = "Naukri.com Alert";
	        $this->announce_from_email = "naukrialerts@naukri.com";
        	$this->from = 'naukrialerts@naukri.com';
    		$this->fromName = "Naukri.com Alert";
		$this->subject = "Want that job profile? Register with us now";
		$this->tplName = "mailer_revamp/rpm.tpl";
		$this->MID = 36;
		$this->IntUsersAlreadyRegistered = 0;
		$this->IntUsersMailSentPreviously = 0;
		$this->job_name = "mnj_rpm";
		$this->mailType = "mnj_registration_promotion";
		$this->mailerCategory = "alerts";
		$this->recipientType = "jobseeker";
		parent::__construct($dbserver);
	}

	public function init()
	{
		global $SERVER_APPLYSLAVE;
		$data = array("GAPARAM"=>"utm_campaign=MR2&utm_medium=mailer&utm_source=RPM");
		//Deleting the older data
		$lowerDay = time() - (14*24*60*60);
		$lowerdate = date('Y-m-d',$lowerDay);
		$sql = "delete from db1.SENT_MAIL where DATE < '$lowerdate' and MID = '".$this->MID."'";
		//$res = execute_query($sql, $this->log_conn) or $this->LogError(mysql_error($this->log_conn));
		//Done deleting the older data

		//Sending mail to user with 7 days old applies
                $Day = time() - (7*24*60*60);
                $date = date('Y-m-d',$Day);
                $arrProfile = array();
                $serviceUrl = $this->arrPaths['RESUMENONREG_SERVICEURL']."/getNonRegAppliesByDate?date=$date&limit=10";
                while(true) {
			try {
				$objPestManager = PestFactory::getInstance()->getJsonPestManager(10, 10);
				$arrNonRegProfile = $objPestManager->get($serviceUrl);
				$arrProfile = array_merge($arrNonRegProfile['data'], $arrProfile);
				if ($arrNonRegProfile['url'] == '') break;
				else $serviceUrl = $arrNonRegProfile['url'];
			} catch (Exception $e) {
				echo $e->getMessage();
			}
                }
                file_put_contents("/tmp/regmail", print_r($arrNonRegProfile,1));
                parent::init_nosql($arrProfile, $arr, false, true);
                //Done sending mail to user with 7 days old applies

		//Sending mail to users with 14 days old CJA
		$Day1 = time() - (14*24*60*60);
		$date1 = date('Y-m-d',$Day1);
		$sql2 = "select * from dashboard.RPM_nonreg where type = 'CJA' and DATE = '$date1'";
//		parent::init($sql2,14,$this->log_conn,false,$data,false,1);
		//Done sending mail to users with 14 days old CJA

		$this->saveLog('Registration Promotion Mailer',"Users already registered ".$this->IntUsersAlreadyRegistered."\n Users already received mail in last 14 days ".$this->IntUsersMailSentPreviously);
	}

	protected function checkMissingData($arrDetails)
	{
		// check if mail already sent
		$sql = "select EMAIL from db1.SENT_MAIL where EMAIL = '".$arrDetails['EMAIL']."' and MID = '".$this->MID."'";
		$res = execute_query($sql, $this->log_conn) or $this->LogError(mysql_error($this->log_conn));
		$row = mysql_fetch_assoc($res);
		if(empty($row)) {
			// check if user already registered
			$SqlCheckIfRegistered = "SELECT COUNT(*) AS CNT FROM resman5.cv_users WHERE EMAIL = '".$arrDetails['EMAIL']."'";
			$res1 = execute_query($SqlCheckIfRegistered, $this->conn) or $this->LogError(mysql_error($this->conn));
                        $row1 = mysql_fetch_assoc($res1);
			if($row1['CNT'] == 0)
				return true;
			else {
				$this->IntUsersAlreadyRegistered++;
				return false;
			}
		} else {
			$this->IntUsersMailSentPreviously++;
			return false;
		}
	}
}
