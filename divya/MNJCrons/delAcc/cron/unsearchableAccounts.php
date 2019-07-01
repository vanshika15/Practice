<?php

$arrMailRecipients = 'jobseeker.server@naukri.com';
$arrCcMailRecipients = '';
$arrBccMailRecipients = '';

$_SERVER["PHP_AUTH_USER"] = "TechSupport@Naukri";
$_SERVER["PHP_AUTH_PW"] = "T3ChSuPp0rT@n@uKr!";

include_once(dirname(__FILE__) . '/../config/config.php');

$connMaster = get_mysql_connection('MASTER');
$connSlave = get_mysql_connection('SLAVE');
$connLocal = get_mysql_connection('LOCAL');

if (!$connMaster)
  logError('Error connecting to master', true);
else if ( ! $connSlave )
  logError('Error connecting to slave', true);

$countUnsearchable = 0;

$previousDate = date('Y-m-d H:i:s', mktime(0, 0, 0, date('m'), date('d')-1, date('Y')));
$currentDate = date('Y-m-d');

$sql = "SELECT USERNAME FROM db1.TS_ACTIONS WHERE ACTION = 'UNSEARCHABLE' AND ACTION_DATETIME > '$previousDate' AND ACTION_DATETIME  < '$currentDate 00:00:00'";
$res = mysql_query($sql, $connLocal);
while($row = mysql_fetch_assoc($res))
{
  $username = $row['USERNAME'];
  $sql1 = "UPDATE resman5.cv_users SET RESDEX = 'c' WHERE USERNAME = '$username'";  
  $res1 = mysql_query($sql1, $connMaster) or logError($sql1);

  $sql2 = "UPDATE resman5.cv_profile SET MOD_DT = MOD_DT + INTERVAL 1 SECOND WHERE USERNAME = '$username' AND ACTIVE = 'Y'";
  $res2 =  mysql_query($sql2, $connMaster);

  ++$countUnsearchable;

  $sql3 = "INSERT INTO db1.TS_ACTIONS_LOG(ID, USERNAME, EMAIL, MPHONE, ACTION, ACTION_DATETIME) SELECT ID, USERNAME, EMAIL, MPHON, ACTION, ACTION_DATETIME FROM db1.TS_ACTIONS WHERE USERNAME = '$username'";
  $res3 = mysql_query($sql3, $connLocal);

  $sql4 = "DELETE FROM db1.TS_ACTIONS WHERE USERNAME = '$username'";
  $res4 = mysql_query($sql4, $connLocal);
}

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: TechSupport Actions <techsupportactions@naukri.com>' . "\r\n";
$headers .= $arrCcMailRecipients != '' ? 'Cc: ' . $arrCcMailRecipient . "\r\n" : "";
$headers .= $arrBccMailRecipients != '' ? 'Bcc: ' . $arrBccMailRecipients . "\r\n" : "";


mail($arrMailRecipients, 'Unsearchable accounts', "$countUnsearchable accounts marked unsearchable", $headers);

mysql_close($connSlave);
mysql_close($connMaster);
