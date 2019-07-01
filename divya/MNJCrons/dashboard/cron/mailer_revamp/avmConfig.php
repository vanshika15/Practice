<?php
$ENV = 'LIVE';

if ($ENV == 'DEV') {
        $srvArr['resman5slave'] = array('host' => 'localhost', 'username' => 'root', 'password' => 'Km7Iv80l');
        $srvArr['applyslave'] = array('host' => 'localhost:/tmp/mysql-5.0.45.sock', 'username' => 'root', 'password' => 'Km7Iv80l');
} else if($ENV=='TEST') {
        $srvArr['resman5slave'] = array('host' => '172.16.2.233:3308', 'username' => 'root', 'password' => 'Km7Iv80l');
        $srvArr['applyslave'] = array('host' => '172.16.2.233:3306', 'username' => 'root', 'password' => 'Km7Iv80l');
} else if ($ENV=='LIVE') {
        //$srvArr['resman5slave'] = array('host' => 'localhost', 'username' => 'root', 'password' => 'Km7Iv80l');
        $srvArr['resman5slave'] = array('host' => 'dashboard1.slave.resdex.com:3308', 'username' => 'dashboard', 'password' => 'dashboardKm7Iv80l');
        $srvArr['applyslave'] = array('host' => 'dashboard.applyslave.resdex.com:3307', 'username' => 'dashboard', 'password' => 'dashboardKm7Iv80l');
}
