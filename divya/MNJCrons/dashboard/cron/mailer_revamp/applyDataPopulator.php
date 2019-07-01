<?php
ini_set('memory_limit', '1024M');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dataPopulator
 *
 * @author sumit
 */
include_once('avmConfig.php');

function executeQuery($sql, $server = 'resman5slave', $count = false) {
	//echo $sql."\n";return;
	global $srvArr;
	$host = $srvArr[$server]['host'];
	$username = $srvArr[$server]['username'];
	$password = $srvArr[$server]['password'];
        while(!$conn){
	$conn = mysql_connect($host, $username, $password, true) or logInfo("Can't connect to mysql - $server - " . mysql_error(), true);
        }
	$res = mysql_query($sql, $conn) or logInfo("Error in query - $sql - " . mysql_error(), true);
        $rows = mysql_affected_rows($conn);
        mysql_close($conn);
	return ($count ? $rows : $res);
        
}

function logInfo($info, $dieFlag = false) {
	$fileName =  "/usr/local/apache/htdocs/dashboard/cron/mailer_revamp/log/AVMProfileLog_" . date('dmY') . ".txt";
	file_put_contents($fileName, date('Y-m-d H:i:s') . "|X|" . $info . "\n", FILE_APPEND);
	/**if ($dieFlag)
		exit(0);**/
}
logInfo("Script Start", false);
$prevDate = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d") - 1, date("Y"))); //yesterday date
$secondsForBatching = 3600;
$currentDate = date('Y-m-d H:i:s');

for ($seconds = 0; $seconds < 86400; $seconds = $seconds + $secondsForBatching) {
	$minHour = $seconds / 3600;
	$maxHour = (($seconds + $secondsForBatching) / 3600) - 1; 
        if($maxHour==-1)$maxHour=0;
	$maxHour = (10 <= $maxHour) ? $maxHour : "0$maxHour";
	$minHour = (10 <= $minHour) ? $minHour : "0$minHour";
	
        //   get usernames on hour basis from amr_tracking 
	$sqlFetchUsernames = " SELECT DISTINCT(USERNAME) from db1.AMR_tracking_new WHERE '$prevDate $minHour:00:00'<=DateTime ";
echo	$sqlFetchUsernames.="AND DateTime <='$prevDate $maxHour:59:59';";
echo "\n";
        echo $sqlFetchUsernames."\n";
	$usernames = executeQuery($sqlFetchUsernames,'applyslave');
	while ($row = mysql_fetch_array($usernames)) {
echo "1";
	echo	$userNameToinsert = $row['USERNAME'];
		$sqlcheckForAlreadyInserted = "SELECT * FROM dashboard.sentAVMusernames WHERE username = '{$userNameToinsert}';";
		if (executeQuery($sqlcheckForAlreadyInserted, 'applyslave',true)==0) {
			$sqlinsertusernames = "INSERT INTO dashboard.sentAVMusernames (USERNAME,PICK_UP_DATE) VALUES ('{$userNameToinsert}','{$currentDate}');";
			executeQuery($sqlinsertusernames , 'applyslave');
		}
echo "2";
	}
}
 /** TEST FUNCTION TO CHECK VALID NO'S OF AVM TO BE SEND
   function abc(){
        $count1=$count2=0;
        $minHour=$maxHour=0; 
        $secondsForBatching = 3600;
        for ($seconds = 0; $seconds < 86400; $seconds = $seconds + $secondsForBatching) {

        $minHour = $seconds / 3600;
        $maxHour = (($seconds + $secondsForBatching) / 3600) - 1;
 //       if($maxHour==-1)$maxHour=0;
        $maxHour = (10 <= $maxHour) ? $maxHour : "0$maxHour";
        $minHour = (10 <= $minHour) ? $minHour : "0$minHour";

        //   get usernames on hour basis from amr_tracking 
        $sqlFetchUsernames = " SELECT DISTINCT(USERNAME) from db1.AMR_tracking_new WHERE '2016-10-10 $minHour:00:00'<=DateTime ";
        $sqlFetchUsernames.="AND DateTime <='2016-10-10 $maxHour:59:59';";
        echo "hhh\n";
        echo $sqlFetchUsernames."\n";
        $usernames = executeQuery($sqlFetchUsernames,'applyslave',true);
        print_R($usernames."\n");
        $usernames = executeQuery($sqlFetchUsernames,'applyslave');
         // $count1=0;     
        while ($row = mysql_fetch_array($usernames)) {
//echo "---------\n";
        ++$count1;
            $userNameToinsert = $row['USERNAME'];
         
           $sqlcheckForAlreadyInserted = "SELECT * FROM dashboard.sentAVMusernames WHERE username = '{$userNameToinsert}';";
     
          $x =executeQuery($sqlcheckForAlreadyInserted, 'applyslave',true);
//         print_r($x."\n");
                if ($x==0) {
                         ++$count2;

      print_r("count2".$count2."\n");
 //                       $sqlinsertusernames = "INSERT INTO dashboard.sentAVMusernames (USERNAME,PICK_UP_DATE) VALUES ('{$userNameToinsert}','{$currentDate}');";
   //                     executeQuery($sqlinsertusernames , 'applyslave');
                }
//echo "2";
        }

}
 echo "ffjfjff"; 
      print_r($count1."\n");
      print_r("count2".$count2."\n");
 $sqlFetchUsernames="SELECT DISTINCT(USERNAME) from db1.AMR_tracking_new WHERE '2016-10-10 00:00:00'<=DateTime AND DateTime <='2016-10-10 23:59:59';"    ;
    $usernames = executeQuery($sqlFetchUsernames,'applyslave',true);
     print_r($usernames);
  }**/


exit(0);
