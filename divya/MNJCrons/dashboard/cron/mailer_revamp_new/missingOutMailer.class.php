<?php

define('__DIR__', pathinfo(__FILE__, PATHINFO_DIRNAME));
include_once(__DIR__."/mailer_276.class.php");
include_once($APP_DIR."lib/third-party/JAuthenticationManager/AuthenticatorManager.php");

class MissingOutMailer extends Mailer {

	public function __construct($dbserver)
	{
		$this->MID = 38;
		$this->announce_from = "Naukri.com Alert <naukrialerts@naukri.com>";
		$this->announce_from_name = "Naukri.com Alert";
                $this->announce_from_email = "naukrialerts@naukri.com";
	        $this->from = "naukrialerts@naukri.com";
        	$this->fromName = "Naukri.com Alert";
		//$this->subject = "Did you miss out on the best positions filled recently?";
		$this->subject = "Did you miss out on the top positions filled recently?";
		$this->tplName = "mailer_revamp/missingout_non_premium.tpl";
		$this->mailSettingCheckProperty = 'profileIncompleteAlert';
		$this->dayGap = array(750,930,1110);
		$this->mailType = "mnj_missing_out";
		$this->mailerCategory = "alerts";
		$this->recipientType = "jobseeker";
		parent::__construct($dbserver);
	}

	public function init()
	{
		global $slowEmails;
		foreach($this->dayGap as $gap) {
			$modDate = date("Y-m-d", time()-$gap*86400);
			$sql = "SELECT u.USERNAME, u.USERID, u.EMAIL, u.JOB_ALERT, u.ACC_CRT_DATE FROM resman5.cv_users AS u, resman5.cv_profile AS p WHERE u.USERNAME = p.USERNAME AND u.CV_STATUS <> 'b' AND p.MOD_DT >= '$modDate 00:00:00' AND p.MOD_DT <= '$modDate 23:59:59' AND p.ACTIVE = 'y' AND (u.VERIFY <> 'N' OR u.VERIFY IS NULL) AND RIGHT(u.MAILER2, 1) = 1 AND (u.SERVICE = 'A' OR u.SERVICE = 'N')";
//			$sql = "SELECT u.USERNAME, u.USERID, u.EMAIL, u.JOB_ALERT, u.ACC_CRT_DATE FROM resman5.cv_users AS u WHERE u.USERNAME = 'kratiP1@yopmail.com'" ;
			parent::init($sql,$gap,$this->conn,true);
		}
		$this->saveLog('Missing Out Mailer');
	}

	protected function additionalData($arrDetails)
	{
		$data = array();
		$data["ALID"] = AuthenticatorManager::getAuthenticator()->generateMailerToken($arrDetails['USERNAME']);
		if($arrDetails['JOB_ALERT'] == 'p') {
			$this->MID = 37;
			$this->announce_from = "Naukri Premium Alert <premiumhelpdesk@naukri.com>";
			//$this->subject = "Did you miss out on the top positions filled recently?";
			$this->tplName = "mailer_revamp/missingout_premium.tpl";
			$data['GAPARAM'] = "utm_campaign=MR2&utm_medium=mailer&utm_source=MOMPremiumJ";
		} else {
			$this->MID = 38;
			$data['GAPARAM'] = "utm_campaign=MR2&utm_medium=mailer&utm_source=MOMNonPremiumJ";
			$this->announce_from = "Naukri.com Alert <naukrialerts@naukri.com>";
	                //$this->subject = "Did you miss out on the best positions filled recently?";
        	        $this->tplName = "mailer_revamp/missingout_non_premium.tpl";
		}


		return $data;
	}
}
