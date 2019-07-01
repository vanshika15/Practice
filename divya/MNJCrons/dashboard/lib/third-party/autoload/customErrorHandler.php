<?php

// user defined error handling function
function customErrorHandler($errno, $errmsg, $filename, $linenum){
    	customErrorLogger($errno, $errmsg, $filename, $linenum, array_reverse(debug_backtrace()));
}

function customExceptionHandler($exc) {
	customErrorLogger($exc->getCode(), $exc->getMessage(), $exc->getFile(), $exc->getLine(), $exc->getTrace());
}

function customErrorLogger($errno, $errmsg, $filename, $linenum, $backtrace)
{

	// timestamp for the error entry
  	  $dt = date("Y-m-d H:i:s");

  	  $errortype = array (
                E_ERROR              => 'Error',
                E_WARNING            => 'Warning',
                E_PARSE              => 'Parsing Error',
                E_NOTICE             => 'Notice',
                E_CORE_ERROR         => 'Core Error',
                E_CORE_WARNING       => 'Core Warning',
                E_COMPILE_ERROR      => 'Compile Error',
                E_COMPILE_WARNING    => 'Compile Warning',
                E_USER_ERROR         => 'User Error',
                E_USER_WARNING       => 'User Warning',
                E_USER_NOTICE        => 'User Notice',
                E_STRICT             => 'Runtime Notice',
                E_RECOVERABLE_ERROR  => 'Catchable Fatal Error'
                );
    //$user_errors = array(E_USER_ERROR, E_USER_WARNING, E_USER_NOTICE);

    $err = "Date: " . $dt . "\n";
    $err .= "Error No: " . $errno . "\n";
    $err .= "Error Type: " . $errortype[$errno] . "\n";
    $err .= "Error Msg: " . $errmsg . "\n";
    $err .= "File: " . $filename . "\n";
    $err .= "Line No: " . $linenum . "\n";
    //$err .= "Trace: " . customGetBackTrace($backtrace) . "\n";
    // for testing
    // echo $err;

    // save to the error log, and e-mail me if there is a critical user error
    if(defined("CUSTOM_ERROR_HANDLER_FILE") && ($errno == E_ERROR || $errno == E_USER_ERROR || $errno == 0 || $errortype[$errno] == ""))
    	{
		/*if(file_exists(CUSTOM_ERROR_HANDLER_FILE))
		{
			$intFileSize = filesize(CUSTOM_ERROR_HANDLER_FILE);
		}
		else
			$intFileSize = 0;	*/
    		$err .= "Trace: " . customGetBackTrace($backtrace) . "\n";
		$errCode = date('ymdHis')."-".str_replace(".","-",$_SERVER["REMOTE_ADDR"])."-".$errno;
    		$err = "\nError ID: " .$errCode ."\n" . $err;
    		error_log($err, 3, CUSTOM_ERROR_HANDLER_FILE."error_".date('dmY').".log");
	}

    if ($errno == E_USER_ERROR && defined("CUSTOM_ERROR_HANDLER_EMAIL")) {
        mail(CUSTOM_ERROR_HANDLER_EMAIL, "Critical User Error - Mail from Error Handler", $err);
    }
    if(($errno == E_ERROR || $errno == E_USER_ERROR || $errno == 0) && defined("CUSTOM_ERROR_HANDLER_REDIRECT"))
    {
	    if (error_reporting() == 0) 
		return;
	    if(substr(CUSTOM_ERROR_HANDLER_REDIRECT, 0, 7) == "http://")
	    {
		    header("Location: ".CUSTOM_ERROR_HANDLER_REDIRECT."?errCode=$errCode"); 
	    }
	    else
	    {
		    include(CUSTOM_ERROR_HANDLER_REDIRECT);
	    }
	    exit;
    }
}

function customGetBackTrace($backtrace)
{
	return var_export($backtrace,true);
	foreach ($backtrace as $v) {
	        if (isset($v['class'])) {
	            $trace = 'in class '.$v['class'].' :: '.$v['function'].'(';
    	            if (isset($v['args'])) {
    		           $trace .= var_export($v['args'],true);
    	            }
            	    $trace .= ')';
        	}

        	elseif (isset($v['function']) && empty($trace)) {
            		$trace = 'in function '.$v['function'].'(';
            		if (!empty($v['args'])) {
                		$trace .= var_export($v['args'],true);
            		}
            		$trace .= ')';
        	}
	}
	return $trace;
}

$old_error_handler = set_error_handler("customErrorHandler");
set_exception_handler("customExceptionHandler");

?>
