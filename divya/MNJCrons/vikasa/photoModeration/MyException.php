<?php
class MyException extends Exception {
		
	public static function exceptionHandler(Exception $e) {
		//error_log("Big trouble, we're all out of FOOs!", 1,"saurabh@naukri.com");
		echo $msg = "Exception with message '".$e->getMessage().
		       "' in ".$e->getFile().":".$e->getLine()."\nStack trace:\n".$e->getTraceAsString();
		$to = "saurabh@naukri.com";
		$from = "errors@naukri.com";
		$subject = "Error in Photo Moderation Cron ".date("Y-m-d h:i:s",time());
		error_log($msg,1,$to,"Subject: $subject\nFrom: $from");
		return false;
	}
}
set_exception_handler(array('MyException','exceptionHandler'));
