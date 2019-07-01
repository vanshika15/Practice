<?php

define('__DIR__', pathinfo(__FILE__, PATHINFO_DIRNAME));
include_once(__DIR__."/mailer.class.php");
include_once($APP_DIR."lib/third-party/JAuthenticationManager/AuthenticatorManager.php");
error_reporting(E_ALL);

ini_set('error_reporting', E_ALL);
//ini_set("memory_limit", "1024M");

class RecruiterViewMailerCleanUp extends Mailer {
	const BATCH_RECORDS = 10000;
	public function __construct($dbserver,$batchRecordsCount)
	{
		$this->MID = 15;
		$this->batchRecordsCount = $batchRecordsCount;
		$this->announce_from = "Naukri.com Info <info@naukri.com>";
		$this->day = 3;
		parent::__construct($dbserver);
	}

 private function connectToCvCrm()
        {
                $con = mysql_connect("db2.resdex.com","mynauk","mynaukKm7Iv80l",true) or $this->LogError("Connection Error --> ".mysql_error($con),1);
                mysql_select_db("db1",$con);
                return $con;
        }

        private function connectToSlave()
        {
               $con = mysql_connect("dashboard1.resdex.com","dashboard","dashboardKm7Iv80l",true) or $this->LogError("Connection Error --> ".mysql_error($con),1);
               // $con = mysql_connect("localhost:/tmp/mysql_06.sock","dashboard","dashboardKm7Iv80l",true) or $this->LogError("Connection Error --> ".mysql_error($con),1);
                mysql_select_db("resman5",$con);//THis statement makes NO sense at ALL!!!!!!
                return $con;
        }


	public function init()
	{

		// Deleting the older data
		$lowerDate = date('Y-m-d', strtotime("-3 days"));
echo		$sql = "delete from db1.SENT_MAIL_RVM where DATE < '$lowerDate  00:00:00'";
$this->log_conn = $this->connectToSlave();
		$res = mysql_query($sql, $this->log_conn) or $this->LogError(mysql_error($this->log_conn));
		
//		$lowerDate = date('Y-m-d', strtotime("-1 days"));
echo		$sql = "delete from db1.cv_crm_weekly where ACT_DT < '$lowerDate'";
$this->conn = $this->connectToCvCrm();
		$res = mysql_query($sql, $this->conn) or $this->LogError(mysql_error($this->conn));

/*		$sql = "OPTIMIZE table db1.cv_crm_weekly";
$this->conn = $this->connectToCvCrm();
		$res = mysql_query($sql, $this->conn) or $this->LogError(mysql_error($this->conn)); 
		//echo "11";
*/
	echo	$sql = "truncate db1.temp_username";
$this->conn = $this->connectToSlave();
		$result = mysql_query($sql,$this->conn) or $this->LogError($sql." --> ".mysql_error($this->conn)." --> Error number ".mysql_errno($this->conn));
	echo	$sql = "truncate db1.temp_username";
$this->conn = $this->connectToCvCrm();
		$result = mysql_query($sql,$this->conn) or $this->LogError($sql." --> ".mysql_error($this->conn)." --> Error number ".mysql_errno($this->conn));
	echo	$sql = "truncate db1.temp_username3";
$this->log_conn = $this->connectToSlave();
		$result = mysql_query($sql,$this->log_conn) or $this->LogError($sql." --> ".mysql_error($this->log_conn)." --> Error number ".mysql_errno($this->log_conn));
		echo "done";
	}
}
