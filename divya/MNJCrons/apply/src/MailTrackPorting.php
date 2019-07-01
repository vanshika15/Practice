<?php
/** script to copy records from AOL_MAILER_TRACK to MAILER_TRACK daily **/

$environment = "";

if($environment == "DEV") {
    $dbApply = mysql_connect("192.168.2.61:3319", "root", "Km7Iv80l") or sendMail(mysql_error());
    $dbResman = mysql_connect("localhost:3308:/tmp/mysql-5.0.45.sock", "root", "Km7Iv80l") or sendMail(mysql_error());
}
else if($environment == "TEST") {
    $dbApply = mysql_connect("172.16.3.212:3317", "root", "Km7Iv80l") or sendMail(mysql_error());
    $dbResman = mysql_connect("172.16.3.212:3308", "root", "Km7Iv80l") or sendMail(mysql_error());
}
else
{
//    $dbApply = mysql_connect("localhost:/tmp/mysql7.sock", "root", "Km7Iv80l") or sendMail(mysql_error());
    $dbApply = mysql_connect("dashboard.applyslave.resdex.com:3307", "dashboard", "dashboardKm7Iv80l") or sendMail(mysql_error());
//    $dbResman = mysql_connect("localhost:3306", "root", "Km7Iv80l") or sendMail(mysql_error()); 
    $dbResman = mysql_connect("dashboard1.resdex.com", "dashboard", "dashboardKm7Iv80l") or sendMail(mysql_error()); 
}

$dateYesterday = date("Y-m-d", strtotime("-1 days"));
$sqlSelectAOL = "SELECT `DATE`, `MID`, `SENT_COUNT`, `OPEN_COUNT` from db1.AOL_MAILER_TRACK WHERE `DATE` = '$dateYesterday'";
$resSelectAOL = mysql_query($sqlSelectAOL, $dbApply) or sendMail(mysql_error($dbApply));
$count =0;
while($rowSelectAOL = mysql_fetch_assoc($resSelectAOL)) {
    $count++;
    $sqlInsertMailerTrack = "INSERT INTO db1.MAILER_TRACK (`DATE`, `MID`, `SENT_COUNT`, `OPEN_COUNT`) VALUES ('" . $rowSelectAOL['DATE'] . "', '" . $rowSelectAOL['MID'] . "', '" .  $rowSelectAOL['SENT_COUNT'] . "', '" . $rowSelectAOL['OPEN_COUNT'] . "')";
    mysql_query($sqlInsertMailerTrack, $dbResman) or sendMail(mysql_error($dbResman));
}
echo "total $count ported";
mysql_close($dbApply);
mysql_close($dbResman);

function sendMail($StrMailContent)
{
  global $dateYesterday;
  mail("jobseeker.server@naukri.com","Mailer Track Porting Error for $dateYesterday",$StrMailContent);
  die;
}
