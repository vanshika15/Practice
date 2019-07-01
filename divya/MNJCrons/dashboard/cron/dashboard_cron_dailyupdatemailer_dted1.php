<?php

/*************dashboard_cron_dailyupdatemailer.php*********************
  
     Created By         : Rahul Batra
     Last Modified By   : Rahul Batra, 2008-04-30
     Description        : Used for sending update mailer to users who have filled first page only.
						  ***NOTE: This mailer does not have the isLatestEntry() check which the other fmark mailers have.***
     Includes/Libraries : None
**********************************************************************/

function send_mail($date, $str)
{
        //mail("rahul.batra@naukri.com, vishal.raj@naukri.com, jaspreet.oberoi@naukri.com", "Daily Update Mailer for $date",$str);
        mail("jobseeker.server@naukri.com", "Daily FMark Mailer 1 for $date",$str);
}


$_ABS_PATH="/usr/local/apache/htdocs";
$mailopenratetrackid = '13';

include_once("$_ABS_PATH/dashboard/includes/GlobalVars.inc.php");
$auth = AuthenticatorManager::getAuthenticator();

include_once("$_ABS_PATH/dashboard/includes/dashboard_globals.inc.php");
include_once("$_ABS_PATH/dashboard/includes/dashboard_commonfunc.inc.php");
include_once("$_ABS_PATH/dashboard/includes/dashboard_previewcv.inc.php");
include_once("/usr/local/apache/htdocs/dashboard/includes/dashboard_conn_276.php");
include_once("sendMailFunction.php");
$dtStart= date('Y-m-j H:i:s');
// Display time when query was fired query
$msg = "\ndashboard_cron_dailyupdatemailer_dted1.php script started at: " . $dtStart ."\n" ;

connectToDatabase($SERVER_RESUMESLAVE,$dbslave,"y");
//print_r($SERVER_RESUMESLAVE);die;

/** start timer for benchmarking **/
$timer=new Benchmark_Timer();
$timer->start();


$smarty = new Smarty;
$smarty->assign("UNSUBSCRIBE_URL", "https://login.naukri.com/nLogin/Login.php?URL=".rawurlencode("http://my.naukri.com/customised/unsubscribe/unsubscribe.php?mailer_id=&mail_cat=UP2&mail_type=ucm"));

$curryear = date("Y");
$currmonth = date("m");
$currday = date("d");

$currday = $currday -1;
$currday= strftime("%Y-%m-%d",mktime(0,0,0,date("m") , date("d")-1, date("Y")));

//$curdate = strftime("%Y-%m-%d",mktime(0,0,0, date("m")-3 , date("d")+5, date("Y")));


$curdate = strftime("%Y-%m-%d",mktime(0,0,0, date("m"), date("d")-1, date("Y")));

//$curdate = '2010-02-06';

/*$sql= "SELECT manager.RESUME.USERNAME,manager.RESUME.RESID,NAME,CONTADD1,CONTADD2,CONTADD3,CITY,OCITY,COUNTRY,OCOUNTRY,RPHONE,MPHONE,manager.RESUME.EMAIL,TOTALEXP,INDTYPE,FAREA from manager.RESUME, manager.PSWRDS where TSINITIATE <>'multiprof' AND  tsnotify IN ('','f','x') AND ENTRY_DT='$curdate' AND manager.RESUME.RESID=manager.PSWRDS.RESID AND mailer like 'CS%'";*/

//$sql = "SELECT u.USERNAME, u.RPHONE, u.MPHONE, u.EMAIL, mci.LABEL AS CITY, mco.LABEL AS COUNTRY, TOTAL_EXP, i.LABEL AS IND_TYPE, f.LABEL AS FAREA, p.CTC, p.MOD_DT
//	FROM resman5.cv_users AS u, resman5.cv_profile AS p, resman5.FAREA AS f, resman5.INDTYPE AS i, resman5.MCOUNTRY as mco, resman5.MCITY AS mci
//	WHERE u.USERNAME = p.USERNAME
//	AND p.FAREA = f.FAREA_ID
//	AND p.IND_TYPE = i.VALUE
//	AND mco.ID = p.COUNTRY
//	AND mci.ID = p.CITY
//	AND u.ACC_CRT_DATE = '$curdate'
//	AND p.SRC <> 'RESBILLING'
//	AND p.ACTIVE = 'y'
//	AND u.CV_STATUS IN ('','f','x')
//	AND (u.VERIFY <> 'N' OR u.VERIFY IS NULL) 
//	AND RIGHT(u.MAILER,1) = 1
//";

$sql = "SELECT u.USERNAME, u.RPHONE, u.MPHONE, u.EMAIL, mci.LABEL AS CITY, mco.LABEL AS COUNTRY, TOTAL_EXP, i.LABEL AS IND_TYPE, f.LABEL AS FAREA, p.CTC, p.MOD_DT
	FROM resman5.cv_users AS u, resman5.cv_profile AS p, resman5.FAREA AS f, resman5.INDTYPE AS i, resman5.MCOUNTRY as mco, resman5.MCITY AS mci
	WHERE u.USERNAME = p.USERNAME
	AND p.FAREA = f.FAREA_ID
	AND p.IND_TYPE = i.VALUE
	AND mco.ID = p.COUNTRY
	AND mci.ID = p.CITY
	AND u.ACC_CRT_DATE = '$curdate'
	AND p.SRC <> 'RESBILLING'
	AND p.ACTIVE = 'y'
	AND u.CV_STATUS IN ('','f','x')
	AND (u.VERIFY <> 'N' OR u.VERIFY IS NULL) 
	AND RIGHT(u.MAILER2 ,1) = 1 
";	// Select only those users for whon UP2 flag is set in MAILER2 field - Vishal Raj - 03 Sep 2010 - New Communication Settings

$msg .= date("Y-m-d H:i:s") . "\n$sql\n";
$res=executeQuery($sql);
$msg .= date("Y-m-d H:i:s") . "\n\n";

$count = $duplicateCount = $invalidemail = 0;
$mailersource="firstpage";
$mail_type="urm";
$sub="Complete your Naukri.com profile. Power up your job search";

while($myresult=mysql_fetch_array($res)) {
	$email = $myresult["EMAIL"];
//$email = "mittal21cen@gmail.com";

	if(checkemail($email)) {
		preview($myresult);
		$smarty->assign("mailersource",$mailersource);
		$smarty->assign("mail_type",$mail_type);
		$smarty->assign("EmTrack_Path", "http://my.naukri.com/manager/emt.php?mid=$mailopenratetrackid");
				
		$from="info@naukri.com";
		$to=$email;
		$page=$smarty->fetch("./dashboard/dashboard_updtmailer1.tpl");
		$announce_from_email = "$from";
		$announce_to_email = "$to";

		if ($index%100 < NEWSENDMAILCONST) {
			if (sendMailNew($to,$sub,$page, $announce_from_email)) {
				$str = "$index===$to\n";
				file_put_contents("/tmp/sendMailNew".date("Ymd"), $str, FILE_APPEND);
				$count=$count+1;
			}
		} else {
			$MP = "/usr/sbin/sendmail -N never -t -f$from";
			$fd = popen($MP,"w");

			fputs($fd, "X-Mailer: PHP3\n");
			fputs($fd, "MIME-Version:1.0 \n");
			fputs($fd, "To: $announce_to_email\n");
			fputs($fd, "From: $announce_from_email \n");
			fputs($fd, "Subject: $sub \n");
			fputs($fd, "Content-Type: text/html; charset=us-ascii \n");
			fputs($fd, "Content-Transfer-Encoding: 7bit \n\n");
			//fputs($fd, "$body\n"); // message goes here
			//fputs($fd, "--%s", $boundry);
			fputs($fd, $page);

			if(! ($mailsent = pclose($fd)))
				$count=$count+1;

			$str = "$index===$to\n";
			file_put_contents("/tmp/sendMail".date("Ymd"), $str, FILE_APPEND);
		}
	}
	else {
		//echo "\ninvalidemail $email\n";
		$msg = $msg."\nInvalid Email:$email for Username:".$myresult["USERNAME"];
		++$invalidemail;
	}
}

//echo "count is $count<br>";

$msg .= "\n\nTotal Records Found: " . ($count + $duplicateCount + $invalidemail) . "\nInvalid Emails Count: " . $invalidemail . "\nDuplicate Emails Count: " . $duplicateCount . "\nTotal Mails Fired: " . $count . "\n\n";

/** open rate recording begins **/
$sqlselectmailertrack = "SELECT COUNT(1) AS CNT FROM db1.MAILER_TRACK WHERE DATE = CURRENT_DATE AND MID = '".$mailopenratetrackid."'";
$resselectmailertrack = execute_query($sqlselectmailertrack, $dbslave);
$rowselectmailertrack = mysql_fetch_array($resselectmailertrack);
if($rowselectmailertrack["CNT"] > 0)
{
  $sqlupdatemailertrack = "UPDATE db1.MAILER_TRACK SET SENT_COUNT = SENT_COUNT + $count WHERE DATE = CURRENT_DATE AND MID = '".$mailopenratetrackid."'";
}
else
{
  $sqlupdatemailertrack = "INSERT INTO db1.MAILER_TRACK(DATE, MID, SENT_COUNT, OPEN_COUNT) VALUES(CURRENT_DATE, $mailopenratetrackid, $count, 0)";
}
$res = mysql_query($sqlupdatemailertrack, $dbslave);
/** open rate recording ends **/

$dbmaster1 = mysql_connect("resman1.resdex.com:3306", "dashboard","dashboardKm7Iv80l") or die("not connected to master jj".mysql_error()." ff") ;

$sqlselectmaster="select id from db1.updatemailercount where entry_date='$curdate' and mailersource='$mailersource'";
$resmaster=execute_query($sqlselectmaster,$dbmaster1);
if(!mysql_num_rows($resmaster))
	$sqlmaster="insert ignore into db1.updatemailercount(id,entry_date,numsent,numopened,numinvalid,mailersource) values ('','$curdate','$count','','$invalidemail','$mailersource')";
else
	$sqlmaster="update db1.updatemailercount set numsent=numsent+$count , numinvalid=numinvalid+$invalidemail where entry_date='$curdate' and mailersource='$mailersource'";

$msg = $msg."\n\n\n Query for UpdateMailer table\n".$sqlmaster;
$resmaster=execute_query($sqlmaster,$dbmaster1);

//$timer->stop();
$dtEnd= date('Y-m-j H:i:s');
$msg = $msg."\n\n\nDaily Update Mailer ended at $dtEnd";

send_mail($curdate, $msg);
