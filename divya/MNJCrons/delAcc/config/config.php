<?php

# TABLE STRUCTURE
# 
# CREATE TABLE `TS_ACTIONS` (
#  `ID` int(11) NOT NULL auto_increment,
#  `USERNAME` varchar(100) character set latin1 collate latin1_bin NOT NULL,
#  `EMAIL` varchar(100) NOT NULL,
#  `ACTION` enum('DELETE','UNSEARCHABLE') default 'UNSEARCHABLE',
#  `ACTION_DATETIME` datetime default NULL,
#  PRIMARY KEY  (`ID`),
#) ENGINE=MyISAM DEFAULT CHARSET=latin1
#
# 

# Absolute defines
define('_APP_DIR', '/usr/local/apache/htdocs/delAcc');
define('_SMARTY_LIB_DIR', '/usr/local/apache/htdocs/smarty');
//define('_APP_BASE_URL', 'http://lfvsfcp10127.dn.net');
define('_APP_BASE_URL', 'http://dashboard.naukri.com');

define('_APP_REPLY_EMAIL_URL', 'http://communication.services.resdex.com/v0/comm/request/mail');
define('_APP_PREMIUM_URL', 'http://mnj.restapis.services.resdex.com/lookup-services/v0/profile');
define('_APP_REPLY_EMAIL', _APP_BASE_URL . '/delAcc/email.php');


include_once(_APP_DIR . "/config/authenticate.inc.php");

global $arrMysqlConf;

$arrMysqlConf = array(
  'MASTER' => array(
    'SERVER' => 'resman2.resdex.com:3306',
    'USERNAME' => 'dashboard', 
    'PASSWORD' => 'dashboardKm7Iv80l', 
    'DATABASE' => 'resman5'
  ),
  'SLAVE' => array(
    //'SERVER' => '10.208.65.224',
    'SERVER' => 'dashboard1.slave.resdex.com',
    'USERNAME' => 'dashboard', 
    'PASSWORD' => 'dashboardKm7Iv80l', 
    'DATABASE' => 'db1'
  ),
  'RESDEX' => array(
    'SERVER' => 'lucene.master.resdex.com',
    'USERNAME' => 'dashboard', 
    'PASSWORD' => 'dashboardKm7Iv80l', 
    'DATABASE' => 'lucene'
  ),
  'MOBILE' => array(//not sure why is this used?
    'SERVER' => 'mobverify1.resdex.com:3309',
    'USERNAME' => 'dashboard', 
    'PASSWORD' => 'dashboardKm7Iv80l', 
    'DATABASE' => 'lucene'
  ),
  'LOCAL' => array(
    'SERVER' => 'dashboard1.resdex.com:3306',
    'USERNAME' => 'dashboard', 
    'PASSWORD' => 'dashboardKm7Iv80l', 
    'DATABASE' => 'resman5'
  )
);

define('_APP_URL_EMAIL',  _APP_BASE_URL . '/delAcc/delAcc.php');
define('_APP_URL_MOBILE', _APP_BASE_URL . '/delAcc/delByMob.php');

# Relative dependent 
define('_TPL_PATH', _APP_DIR . '/tpl');

include_once(_SMARTY_LIB_DIR . '/libs/Smarty.class.php');

function get_mysql_connection($NODE)
{
  global $arrMysqlConf;
  $MYSQL_SERVER = $arrMysqlConf[$NODE]['SERVER'];
  $MYSQL_USER   = $arrMysqlConf[$NODE]['USERNAME'];
  $MYSQL_PASS   = $arrMysqlConf[$NODE]['PASSWORD'];
  $MYSQL_DB     = $arrMysqlConf[$NODE]['DATABASE'];

  $conn = @mysql_connect($MYSQL_SERVER, $MYSQL_USER, $MYSQL_PASS);
  mysql_select_db($MYSQL_DB, $conn);
  return $conn;
}

function logError($errorString, $boolExitFlag = false)
{
  $logFile = _APP_DIR . '/logs/errorLog.' . date('Ymd') . '.log';
  $handle = fopen($logFile, "a");
  if ( $handle )
  {
    fwrite($handle, $errorString."\n");
    fclose($handle);
  }

  if ( $boolExitFlag)
    exit(0);
}
