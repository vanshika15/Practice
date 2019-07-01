<?php
/**
 * 
Create database photo_moderation;

CREATE TABLE IF NOT EXISTS `photo_moderation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `res_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1->Pending,3->Approve,2->Reject,4->Upload Error,5->Guidelines Violation,6->Obscene',
  `moderator_id` int(11) NOT NULL DEFAULT '0',
  `cur_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (`id`),
   UNIQUE KEY `res_id` (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `photo_moderation_mis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `res_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1->Pending,3->Approve,2->Reject,4->Upload Error,5->Guidelines Violation,6->Obscene',
  `moderator_id` int(11) NOT NULL DEFAULT '0',
  `cur_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
 
CREATE TABLE IF NOT EXISTS `photo_moderator` (
  `moderator_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (`moderator_id`),
   UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
 */
require_once("MyException.php");
require_once("DataBaseManager.php");
require_once("db_config.php");

class PhotoModerationCron {	
		
	private $localDb,$slaveDb;
	
	function __construct() {
		 $this->localDb = new DataBaseManager();
		 $this->localDb->connectDB(PMC_DB_HOST,PMC_DB_USER,
		                                     PMC_DB_PWD,PMC_DB_NAME,PMC_DB_PORT);
	}
	
	
	/** Delete more then 30 Days Records from Mis Table **/
	function deleteOldRecords($isError=false) {
	    $query = "Delete From photo_moderation_mis".
	             " WHERE cur_time < DATE_SUB(NOW(), INTERVAL 90 DAY);";
	    return $this->localDb->executeQuery($query,$isError);	    
	}
	
	/** Fetch Records from Photo Moderation Records **/
	function fetchPhotoModerationCronRecords(&$isError=false) {
	    $query = "Select RESID From cv_profile_other_info
				  Where `key`='photo_status' and `value` = '1';";
	    $results = $this->localDb->executeQuery($query,$isError);
	    if($results && ($isError!=true)) {
	        return $this->localDb->fetchArray(); //Need to handle blank records
	    } else {
	        $isError = true;
	        throw new MyException('Error from fetching Records from cv_profile_other_info');//Handling or not
	        return false;
	    }
	}
	
	/** Insert into Mis from Photo Moderation Cron Table **/
	function insertRecordsIntoMIS($isError=false) {
        $query = "Insert into photo_moderation_mis
                  ( `res_id`,`status`,`moderator_id`,`cur_time`) 
                  Select `res_id`,`status`,`moderator_id`,`cur_time` 
                    From photo_moderation";        
        return $this->localDb->executeQuery($query,$isError);    
	}
	
	/** Truncate Photo Moderation Table **/
	function truncatePhotoModerationTable($isError=false) {
	    $query = "Truncate Table photo_moderation";
	    return $this->localDb->executeQuery($query,$isError);
	}
	
	/** fetch Photo Moderation Records of Active Mobile & Email Id **/
	function fetchPhotoModerationRecords(&$isError=false) {
	    $this->slaveDb = new DataBaseManager();
	    $this->slaveDb->connectDB(PMC_SLAVE_DB_HOST,PMC_SLAVE_DB_USER,
	                                         PMC_SLAVE_DB_PWD,PMC_SLAVE_DB_NAME,PMC_SLAVE_DB_PORT);
	    // Validation of international no
	    $query = "Select oi.RESID From cv_profile_other_info as oi
            	   Inner Join cv_profile as cp
            		  On oi.RESID = cp.RESID
            	   Inner Join cv_users as cu
            		  On cp.USERNAME = cu.USERNAME AND oi.key ='photo_status' and oi.value = '1';";
/*            		 And ((cu.VERIFY = 'B' OR 
                          (SUBSTRING(cu.MAILER,3,2) = '11'))
	                      OR ((cu.VERIFY = 'B') OR
                              (cu.MPHONE NOT REGEXP '^((\\\+?(91)?-?)|0)?(9|8|7)[0-9]{9}$'  
	                           And cu.MPHONE REGEXP '^(\\\+?-?)?[0-9]{10,}')))
            	   Where oi.key ='photo_status' and oi.value = '1';"; */
	    $results = $this->slaveDb->executeQuery($query,$isError);
	    
	    /// lib/common/MobileValidator
	    
	    if($results && ($isError!=true)) {
	        $res = $this->slaveDb->fetchArray(); //Need to handle blank records
            $this->slaveDb->close();
            return $res;
	    } else {
	        $isError = true;
	        throw new MyException('Error from fetching Records from cv_profile_other_info');//Handling or not
	        return false;
	    }
	}
	
	/** Insert into Photo Moderation Cron table **/
	function insertRecordsIntoPhotoModeration($resultArray,&$isError=false) {
	    $query = "Insert IGNORE into ".PMC_DB_NAME.".photo_moderation
					    (res_id)
					  Values";
	    foreach($resultArray as $result) {
	        $resids[] = '('.$result['RESID'].')';
	    }
	    $query .= implode(",",$resids).";";
	    $this->localDb->executeQuery($query,$isError);
        if ($isError == false) {
           return $this->localDb->affectedRows();
        }   
        return false; 
	}
	
	function fetchAndInsertRecordsIntoPhotoModeration(&$isError=false) {
	    $resultArray = $this->fetchPhotoModerationRecords($isError);
	    if($isError==false && is_array($resultArray) && count($resultArray)>0) {
	        $noOfResIdsForPhotoMod = $this->insertRecordsIntoPhotoModeration($resultArray,$isError);
	        if($isError == false) {
	            return $noOfResIdsForPhotoMod;	
	        } 
	    }
	    return 0;
	}	
}

$photoMod = new PhotoModerationCron();
$isError = false;
/** Delete more then 30 Days Records from Mis Table **/
$photoMod->deleteOldRecords($isError);
/** Insert into Mis from Photo Moderation Cron Table **/
if($isError == true) {
   echo "Error in deleteOldRecords";
}    
$photoMod->insertRecordsIntoMIS($isError);
/** Truncate Photo Moderation Table **/
if($isError == true) {
    echo "Error in insertRecordsIntoMIS";
}
$photoMod->truncatePhotoModerationTable($isError);
/** Insert into Photo Moderation Cron table **/
if($isError == true) {
    echo "Error in truncatePhotoModerationTable";
}
$num = $photoMod->fetchAndInsertRecordsIntoPhotoModeration($isError);
echo "Total No of ResIds for Photo Moderation :$num";
