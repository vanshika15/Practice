<?php
//require_once("MyException.php");
class DatabaseManager {
	private $query;
	private $result;
	private $dbConn;
	
	
	//connect to the database
	public function __construct() {	    
	}
	
	public function connectDB($dbHost,$dbUser,$dbPwd,$dbName,$dbPort="3306") {
	    $this->dbConn = mysql_connect($dbHost . ":" . $dbPort, $dbUser,$dbPwd);
	    if (!$this->dbConn) {
	        throw new MyException('Critical Stop Error: Database Error<br />' . mysql_error());
	    }
	    mysql_select_db($dbName, $this->dbConn);
	}
	
	public function executeQuery($query,&$isError=false){
		$this->result = mysql_query($query, $this->dbConn);
		if(!$this->result) {
			$isError = true;
			throw new MyException('Query :'.$query.' Error (' . mysql_error() . ') ');
			return false;
		}
		return true;
	}
	
	public function fetchArray($fetchType=MYSQL_ASSOC){
		$resultArray = array();
		While($rows = mysql_fetch_array($this->result,$fetchType)) {
			$resultArray[] = $rows;
		}
		return $resultArray;
	}
    
    public function affectedRows() {
        return mysql_affected_rows($this->dbConn);		
    }
    	
	public function close () {
	    if (isset($this->dbConn) && !empty($this->dbConn)) {
	        mysql_close($this->dbConn);
	    }
	}
	
}
