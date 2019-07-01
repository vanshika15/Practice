<?php

/*
 *	This cron will get the registration count for previous day and add in the MAILER_TRACK table.
 *	Cron is scheduled at 0300 hours. If this time is changes, cron timings on linuxcp10199.dn.net, linuxcp10200.dn.net, linuxcp10215.dn.net
 *	and linuxcp10308.dn.net for mailOpenNotify.php has to be changed and they must execute only after this cron has executed successfully.
 *	else registration mailer open rate will not be avaiilable in dashboard - Vishal Raj - 20 August 2009
 */
$conn = mysql_connect("dashboard1.resdex.com:3306", "dashboard", "dashboardKm7Iv80l") or LogError(mysql_error()); 
$conn1 = mysql_connect("dashboard1.slave.resdex.com", "dashboard", "dashboardKm7Iv80l") or LogError(mysql_error()); 

if ( $conn )
{
	$sql = "SELECT COUNT(1) REG_COUNT FROM resman5.cv_users WHERE ACC_CRT_DATE = CURRENT_DATE - INTERVAL 1 DAY AND SERVICE <> 'F'";
	$res = mysql_query($sql, $conn1) or LogError(mysql_error($conn1));
	$row = mysql_fetch_assoc($res);
	$regCount = $row["REG_COUNT"];

	$sql = "INSERT INTO db1.MAILER_TRACK(DATE, MID, SENT_COUNT, OPEN_COUNT) VALUES(CURRENT_DATE - INTERVAL 1 DAY, 5, $regCount, 0)";
	$res = mysql_query($sql, $conn) or LogError(mysql_error($conn));

	mysql_close($conn);
}

function LogError($errStr)
{
	mail("vishal.saxena@naukri.com,shashank.mittal@naukri.com", "Cron error - Reg count", $errStr);
}
