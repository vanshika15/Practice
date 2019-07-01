<?php
include_once("/usr/local/apache/htdocs/dashboard/includes/GlobalVars.inc.php");

define('GCM_PATH', realpath(dirname(__FILE__).'/..'));
define('GCM_CONFIG_PATH', GCM_PATH.'/config');
define('NC_DB_CONFIG', GCM_PATH.'/config');
#define("NC_AUTOLOAD_CONFIG",GCM_PATH.'/config/');
define("GCMLOG_PATH", '/usr/local/apache/htdocs/dashboard/cron/mailer_revamp/log/');
define('SF_ROOT_DIR',GCM_PATH);

#require_once GCM_PATH.'/lib/third-party/autoload/__autoload.php';
