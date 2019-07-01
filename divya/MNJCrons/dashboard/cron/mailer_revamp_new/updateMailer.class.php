<?php

define('__DIR__', pathinfo(__FILE__, PATHINFO_DIRNAME));
include_once(__DIR__."/mailer_276.class.php");
//include_once(__DIR__."/mailer.class.php");
include_once($APP_DIR."lib/third-party/JAuthenticationManager/AuthenticatorManager.php");

class UpdateMailer extends Mailer {

	public function __construct($dbserver)
	{
		$this->announce_from = "Naukri.com Alert <naukrialerts@naukri.com>";
		$this->announce_from_name = "Naukri.com Alert";
	        $this->announce_from_email = "naukrialerts@naukri.com";
        	$this->from = 'naukrialerts@naukri.com';
        	$this->fromName = 'Naukri.com Alert';
        	$this->mailSettingCheckProperty = 'profileIncompleteAlert';
		$this->dayGap = array(180,183,270,273,365,368,545,548,725,728,1085,1088);
		$this->mailType = "mnj_update";
		$this->mailerCategory = "alerts";
		$this->recipientType = "jobseeker";
		parent::__construct($dbserver);
	}

	public function init()
	{
		global $slowEmails;
		foreach($this->dayGap as $gap) {
			/*if($gap <= 273) {
				$this->subject = "The first step to beat competition";
			} else if($gap > 273 && $gap <= 548) {
				$this->subject = "80,000+ positions filled while you were away";
			} else {
				$this->subject = "Industry changes fast, does your Naukri profile?";
			}*/

			if($gap < 270) {
				if($gap%5 == 3)
					$this->subject = "Reminder: it's been 6 months since we heard from you";
				else
					$this->subject = "It's been 6 months since we heard from you";
			} else
				$this->subject = "Don't fall behind, remain updated about the best jobs";

			$this->msrc = "upd" . $gap;
			$modDate = date("Y-m-d", time()-$gap*86400);

                        for($count =0 ; $count<24;$count++) {
			  $startTime = $modDate." $count".':00:00';
			  $endTime = $modDate." $count".':59:59';
	                  $sql = "SELECT u.USERID, u.USERNAME,u.ACC_CRT_DATE, p.NAME, u.RPHONE, u.MPHONE, u.EMAIL, u.JOB_ALERT, p.TOTAL_EXP, p.CTC,p.CTC_TYPE, p.RESID, p.ROLE, p.FAREA, p.TITLE,  p.IND_TYPE, p.MOD_DT, p.LOC_PREF, p.KEYWORDS FROM resman5.cv_users AS u, resman5.cv_profile AS p WHERE u.USERNAME = p.USERNAME AND u.CV_STATUS <> 'b' AND p.MOD_DT >= '$startTime' AND p.MOD_DT <= '$endTime' AND p.ACTIVE = 'Y' AND (u.VERIFY <> 'N' OR u.VERIFY IS NULL) AND RIGHT(u.MAILER2, 1) = 1 AND (u.SERVICE = 'A' OR u.SERVICE = 'N')";
//			$sql = "SELECT u.USERNAME,u.USERID,u.ACC_CRT_DATE, p.NAME, u.RPHONE, u.MPHONE, u.EMAIL, u.JOB_ALERT, p.TOTAL_EXP, p.CTC,p.CTC_TYPE, p.RESID, p.ROLE, p.FAREA, p.TITLE,  p.IND_TYPE, p.MOD_DT, p.LOC_PREF, p.KEYWORDS FROM resman5.cv_users AS u, resman5.cv_profile AS p WHERE u.USERNAME = p.USERNAME AND p.ACTIVE = 'Y' AND u.USERNAME in ('kratip2@yopmail.com','kratiP1@yopmail.com')" ;
//echo "adsdasd";die;
		          parent::init($sql,$gap,$this->conn,true,array("DAY_SENT"=>floor($gap/30)));
	          	}
                }
		$this->saveLog('Update Mailer');
	}

	protected function additionalData($arrDetails)
	{
		$data = array();
		$data["ALID"] = AuthenticatorManager::getAuthenticator()->generateMailerToken($arrDetails['USERNAME']);
		if($arrDetails['JOB_ALERT'] == 'P' || $arrDetails['JOB_ALERT'] == 'p') {
			$this->MID = 29;
			$this->tplName = "mailer_revamp/Update_Premium.tpl";
			$data['GAPARAM'] = "utm_campaign=MR2&utm_medium=mailer&utm_source=UpdatePremium".$this->globalData['DAY_SENT'];
		} else {
			$this->MID = 4;
			if($this->globalData['DAY_SENT'] <= 273)
				$this->tplName = "mailer_revamp/Update_Non_Premium6.tpl";
			else if($gap > 273 && $gap <= 548)
				$this->tplName = "mailer_revamp/Update_Non_Premium12.tpl";
			else
				$this->tplName = "mailer_revamp/Update_Non_Premium24.tpl";
			$data['GAPARAM'] = "utm_campaign=MR2&utm_medium=mailer&utm_source=UpdateNonPremium".$this->globalData['DAY_SENT'];
		}

		$data['CITY'] =  $this->getCityFromMasterTable($arrDetails["CITY"], $this->conn);
		$data["FAREA"] = $this->getFArea($arrDetails["FAREA"]);
        	$data["IND_TYPE"] = $this->getIndType($row["IND_TYPE"]);
        	$data["LOC_PREF"] = $this->getPrefLocation(explode(',',$arrDetails["LOC_PREF"]));
        	$data["ROLE"] = $this->getRole($arrDetails['FAREA'],$arrDetails['ROLE']);
		$data["EXP"] = $this->getWorkExp($arrDetails['RESID']);
		$data["EDUCATION_TYPE"] = $this->getEducation($arrDetails['RESID']);
		$data = array_merge($data,$this->processData($arrDetails));
		return $data;
	}

	protected function doStuff($count)
	{
		$totalCount = 0;
		foreach($count as $mid => $value)
			$totalCount += $value;
		$dbmaster = mysql_connect("resman1.resdex.com", "dashboard","dashboardKm7Iv80l") or $this->LogError("not connected to master *".mysql_error()."*");
	        $sqlLog = "INSERT INTO db1.updatemailercount (id, entry_date, numsent, mailersource) VALUES ('', '".$this->curdate."', '$totalCount', '".$this->msrc."')";
        	mysql_query($sqlLog, $dbmaster) or LogError("insert into update mailer error : ". mysql_error($dbmaster));
        	mysql_close($dbmaster);
	}

	function getCityFromMasterTable($cityid, $dbconn)
	{
		$sql = "SELECT LABEL FROM resman5.MCITY WHERE ID = '" . $cityid . "'";
		$res = mysql_query($sql, $dbconn) or LogError("getCityFromMasterTable fatal".mysql_error());
		$row = mysql_fetch_assoc($res);
		return $row['LABEL'];
	}

	function getWorkExp($resid)
	{
		$sql = "SELECT ORGN, DESIG, START_DATE FROM resman5.cv_exp WHERE resid = '$resid' and EMP_TYPE = 'C'";
        	$res = mysql_query($sql, $this->conn) or $this->LogError("getWorkExp fatal ".mysql_error());
        	$row = mysql_fetch_assoc($res);
        	return $row;
	}

	function getEducation($resid)
	{
		$sql = "select EDUCATION_TYPE from cv_education where resid = '$resid'";
		$res = mysql_query($sql, $this->conn) or LogError("getEducation fatal".mysql_error());
		$row = mysql_fetch_assoc($res);
		return $row['EDUCATION_TYPE'];
	}
}
