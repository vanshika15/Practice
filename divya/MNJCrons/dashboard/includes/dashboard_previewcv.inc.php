<?php

/*************************dashboard_previewcv.inc***********************************

	Created By			:	Ruchi Chawla
	Last Modified By	:	Rahul Batra, 2008-04-30
	Description			:	used for preview of cv
	Includes/Libraries	:	None
	
/***************************************************************************
	Funcation Name	:	preview
	Inputs			:	resultset of entire row of RESUME table
	Output			:	Details from resume table assigned to template.
****************************************************************************/ 

function preview($myrow) {

	global $smarty,$dbslave, $auth;
        
	$smarty->assign("USERNAME",$myrow["USERNAME"]);
//	$uname=md5($myrow["USERNAME"]."@ut0l0g1n")."~".$myrow["USERNAME"];
//	$smarty->assign("UNAME",$uname);
	$smarty->assign("ALID", $auth->generateMailerToken($myrow["USERNAME"]));
	$smarty->assign("NAME",$myrow["NAME"]);
					
        if ($myrow["RPHONE"] && strlen(trim($myrow["RPHONE"]))>2 && trim($myrow["RPHONE"]) != "91+")
               $rphone = $myrow["RPHONE"];
                                                                                                 
	if($myrow["MPHONE"] && strlen(trim($myrow["MPHONE"]))>2 && trim($myrow["MPHONE"]) != "91+")
		$mphone = $myrow["MPHONE"];
		
	$rphone=ereg_replace("\+","",$rphone);
	$mphone=ereg_replace("\+","",$mphone);

	$smarty->assign("MPHONE",$mphone);
	$smarty->assign("RPHONE",$rphone);
	$smarty->assign("EMAIL",$myrow["EMAIL"]);
	$smarty->assign("CITY", $myrow["CITY"]);
	$smarty->assign("COUNTRY", $myrow["COUNTRY"]);
			
	$totalexp = $myrow["TOTAL_EXP"];
	if($totalexp != "") {
		$exp=explode(".",$totalexp);
		$expyear=(int)$exp[0];
		$expmnth=(int)$exp[1];
		if ($expyear == 99)
			$stotalexp = "Fresher";
		else {
			if ($expyear == -1) {
				if ($expmnth == -1)
					$stotalexp = "Not Mentioned";
				else
					$stotalexp = $expmnth . " months";
			}
			else if ($expmnth == -1) {
				$stotalexp = $expyear . " years";
			}
			else {
				$stotalexp = $expyear." years ".$expmnth." months";
			}
		}
	}	
                       
        $smarty->assign("totalexp",$stotalexp);
        $smarty->assign("INDTYPE", $myrow["IND_TYPE"]);
        $smarty->assign("FAREA", $myrow["FAREA"]);

	if ($myrow["CTC"] === "" || $myrow["CTC"] == -1) {
		$ctc = "Not Mentioned";
	}
	else {
		$tmp = explode(".", $myrow["CTC"]);
		$ctcl = (int)$tmp[0];
		$ctct = (int)$tmp[1];

		if ($ctcl == -1) {
			if ($ctct == -1)
				$ctc = "Not Mentioned";
			else
				$ctc = $ctct . " thousands";
		}
		else if ($ctct == -1) {
			$ctc = $ctcl . " lacs";
		}
		else {
			$ctc = $ctcl." lacs ".$ctct." thousands";
		}
	}
	$smarty->assign("CTC", $ctc);
}


/*
function checkemail($email)	{ // returns 1 if email id valid
	if (trim($email) == "")
		$result = 0;
	else if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
		$result=0;
	else
		$result=1;

	return $result;
}
*/

/*
 * Created By		: Rahul Batra, 2008-04-30
 * Last Modified	: Rahul Batra, 2008-04-30
 * Description		: If another username with email as $email exists whose mod_dt is greater than $mod_dt,
 * 					  then log the username and return false, otherwise return true. 
 */
function isLatestEntry(&$db, $username, $email, $mod_dt, $toLog = true) {
	echo $sql = "SELECT u.USERNAME
		FROM resman5.cv_users AS u, resman5.cv_profile AS p
		WHERE u.USERNAME = p.USERNAME
		AND p.USERNAME <> '" . addslashes($username) . "'
		AND u.EMAIL = '" . addslashes($email) . "'
		AND p.MOD_DT > '" . addslashes($mod_dt) . "'
		LIMIT 1";
   //print_r($db);die;
//	$res = execute_query($sql, $db);
	$res = executeQuery($sql);
	if (mysql_num_rows($res) > 0) {
		if ($toLog) {
			$sql = "INSERT IGNORE INTO db1.duplicate_mailer (ENTRY_DT, USERNAME, EMAIL) VALUES (CURDATE(), '" . addslashes($username) . "', '" . addslashes($email) . "')";
			execute_query($sql, $db);
		}
		
		return false;
	}
	
	return true;
}
