<?php
$date = date('Y-m-d', strtotime('-30 days'));
$db = array('host' => 'resman1.resdex.com:3306', 'username' => 'dashboard', 'password' => 'dashboardKm7Iv80l', 'resource' => '');
$master_db = array('host' => 'resman1.resdex.com:3306', 'username' => 'dashboard', 'password' => 'dashboardKm7Iv80l', 'resource' => '');


$res = executeQuery("Select MIN(query_id) AS minquery_id, MAX(query_id) AS maxquery_id 
                     from resman5.send_query Where query_date <= '$date 00:00:00'", $db);
$row = mysql_fetch_assoc($res);
$minQueryId = $row['minquery_id'];
$maxQueryId = $row['maxquery_id'];

executeQuery("Insert IGNORE into resman5.send_query_archive
               Select * from resman5.send_query
               Where query_id <= '$maxQueryId'", $db);



//$limit = round(($maxId-$minId)/20);

//for($queryId=$minId+$limit;$queryId<$maxId;$queryId+=$limit) {
  //  $queryId =($queryId > $maxId)?$maxId:$queryId;
    executeQuery("Delete from resman5.send_query WHERE query_id <= '$maxQueryId'", $master_db);
//}

function executeQuery($sql, &$db) {
    if(isset($db['resource']) && $db['resource'] != '' && mysql_ping($db['resource']))
        ;
    else {
        @mysql_close($db['resource']);
        $db['resource'] = null;

        $db['resource'] = mysql_connect($db['host'], $db['username'], $db['password']) or ondie($sql, mysql_error());
    }
     echo $sql."\n";
    $res = mysql_query($sql, $db['resource']) or ondie($sql, mysql_error());
    return $res;
}

function ondie($sql, $e) {
    echo "$sql==$e\n";
    exit(1);
}

echo "No of Affected Records:". ($maxQueryId-$minQueryId)/2;
