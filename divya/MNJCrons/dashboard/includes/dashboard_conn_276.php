<?php

function executeQuery($sql, $server = 'slave', $count = false) {
        echo $sql."==\n";
        //$host = '10.208.68.200';
        $host = 'dashboard1.slave.resdex.com';
        $username = 'dashboard';
        $password = 'dashboardKm7Iv80l';
        $conn = mysql_pconnect($host, $username, $password, true) or logInfo("Can't connect to mysql - $server - ".mysql_error(), true);
        $res = @mysql_query($sql, $conn) or logInfo("Error in query - $sql - ".mysql_error(), true);
        //file_put_contents('/tmp/to.log', print_r($res,1)."\n", FILE_APPEND);
        mysql_close($conn);
       //  print_R($res);die;
        return $res;
        return ($count?mysql_affected_rows($conn):$res);
}

function executeQueryProfileHistory($sql, $server = 'slave', $count = false) {
        echo $sql."==\n";
        //$host = '10.208.68.200';
        $host = 'profilemodslave.resdex.com:3306';
        //$host = 'dashboard1.slave.resdex.com:3308';
        $username = 'dashboard';
        $password = 'dashboardKm7Iv80l';
        $conn = mysql_pconnect($host, $username, $password, true) or logInfo("Can't connect to mysql - $server - ".mysql_error(), true);
        $res = @mysql_query($sql, $conn) or logInfo("Error in query - $sql - ".mysql_error(), true);
        //file_put_contents('/tmp/to.log', print_r($res,1)."\n", FILE_APPEND);
        mysql_close($conn);
       //  print_R($res);die;
        return $res;
        return ($count?mysql_affected_rows($conn):$res);
}


function logInfo($info, $dieFlag = false) {
echo $info."===";
echo        $fileName = dirname(__FILE__)."/logs/dashboardLog_".date('dmY').".txt";
echo "\n";
        file_put_contents($fileName, date('Y-m-d H:i:s'). "|X|". $info."\n", FILE_APPEND);
        if ($dieFlag) exit(0);
}
