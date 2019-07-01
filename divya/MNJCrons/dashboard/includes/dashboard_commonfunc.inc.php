<?php

/*************************dashboard_commonfunc.inc.php***********************

	Created By	        :	Ruchi Chawla
	Last Modified By	:	Rahul Batra, 2008-06-01 
	Description	        :	This file contains common functions used 
	Includes/Libraries	:	includes/dashboard_servers.inc.php
							
*******************************************************************************/ 

include_once("dashboard_servers.inc.php");
include_once("dashboard_globals.inc.php");
include_once("$BENCHMARK_PATH/Timer.php");


function fetchSearchHeader()
{
	global $smarty;
	$server_date=getServerTimeToday();
	$smarty->assign("server_date",$server_date);
	$searchheader=$smarty->fetch("./dashboard/dashboard_searchheader.tpl");
	return $searchheader;
}
function fetchOverviewHeader()
{
	global $smarty;
	$server_date=getServerTimeToday();
	$smarty->assign("server_date",$server_date);
	$overviewheader=$smarty->fetch("./dashboard/dashboard_overviewheader.tpl");
	return $overviewheader;
}
function fetchDashboardFooter()
{
	global $smarty;
	$dashboard_footer=$smarty->fetch("./dashboard/dashboard_footer.tpl");
	return $dashboard_footer;
}

function execute_query($sql,$db)
 {
	$res=mysql_query($sql,$db) or die($sql." -->  ".mysql_error($db));
	return $res;
}

function getLastWeekDate($date='')
{
	if(!$date)
		$date=date("Y-m-d");
	$datearr=explode("-",$date);
	$timestamp=mktime(0,0,0,$datearr[1],$datearr[2]-7,$datearr[0]);
	$date_lastweek["date"]=date("Y-m-d",$timestamp);
	$date_lastweek["day"]=date("l",$timestamp);
	return $date_lastweek;	
}

function getServerTimeToday()
{
	$curdate=date("l dS of F Y h:i:s A");
	return $curdate;	
}
function getFormattedDate($date)
{
	if($date)
	{
		$date_arr=explode("-",$date);
		print_r($date_arr);
		$formatted_date=$date_arr[2]."-".$date_arr[1]."-".$date_arr[0];
		echo $formatted_date;
		return $formatted_date;	
	}
}

function getQuarter($month)
{
	if($month>="1"&&$month<="3")
		return 1;
	elseif ($month>="4"&&$month<="6")
		return 2;
	elseif ($month>="7"&&$month<="9")
		return 3;
	elseif($month>="10"&&$month>="12")
		return 4;
	else 
	{
		echo "quarte is ".$month;
		echo "error in quarter conversion";
		exit;
	}
}
function getDateFormat()
{
	$dateformat="";
	if($dateformat==format_1)
	{
		if($today||$yesterday)
			$date_range_arr["date_format"]="singledate";
				
	}
	elseif($dateformat==format_2)
	{
		$date_range_arr["date_format"]="daterange";
		$date_range_arr["date_grouptype"]="datewise";
		$date_range_arr["date_grouptype"]="weekwise";
		$date_range_arr["date_grouptype"]="monthwise";
		$date_range_arr["date_grouptype"]="quarterwise";
	}
	elseif($dateformat==format_3)
	{
	
	
	
	}


	return $date_range_arr;
}

function connectToDatabase($server,&$condb,$die="y")
{
//echo "1";
		global $SERVERS_ARR;
	   	/*get connection parameters*/
	$server=strtoupper($server);	
//echo $server;die;
	$ip=$SERVERS_ARR["$server"]["SERVER"];
        $user=$SERVERS_ARR["$server"]["USERNAME"];
        $pass=$SERVERS_ARR["$server"]["PASSWORD"]; 
        $defaultdb=$SERVERS_ARR["$server"]["DATABASE"];
	/*take a connection to database*/
//print_r($SERVERS_ARR[$server]);die;
	$condb = mysql_connect($ip,$user,$pass,true) or die(mysql_error());
        
        if($die=="y" && !$condb)//if connection failed and flag set show error template and exit
//                logError("Due to high server load, we are unable to process your request at this time.<br>We apologize for the inconvenience.",$server,1,$condb);
		echo "could not connect";
        else//else select the default database
                mysql_select_db($defaultdb,$condb);
}

function checkDateEntry($date)
{
	global $dbslave;
	$sql_checkdate="insert ignore into dashboard.DATE_FORMAT (Mis_Id,Mis_Date,Mis_Day,Mis_Week,Mis_Month,Mis_Quarter) values('','$date', dayname( '$date' ), week( '$date' ,3 ), month( '$date' ),quarter('$date') )";
	$res_checkdate=execute_query($sql_checkdate,$dbslave);
}

function get_yesterday_date()
{
	$date_arr=explode("-",date("Y-m-d"));
	$yesterday_date_timestamp=mktime(0,0,0,$date_arr[1],$date_arr[2]-1,$date_arr[0]);
	$yesterday_date=date("Y-m-d",$yesterday_date_timestamp);
	return  $yesterday_date;
}

function get_prev_date($diff=1)
{
	$date_arr=explode("-",date("Y-m-d"));
	$prev_date_timestamp=mktime(0,0,0,$date_arr[1],$date_arr[2]-$diff,$date_arr[0]);
	$prev_date=date("Y-m-d",$prev_date_timestamp);
	return  $prev_date;
}

/****************************************************************************************
function        :       getPreviousWeekLimits
author          :       rachna
returns         :       returns the start and end of current week in an array

***************************************************************************************/

function getPreviousWeekLimits($ymd)
{
        $dtArr  =explode("-",$ymd);
        $yr     =$dtArr[0];
        $mth    =$dtArr[1];
        $dt     =$dtArr[2];
        $wkid   =date("W",mktime(0,0,0,$mth, $dt, $yr));

        $wkdaydiff=date("w", mktime(0,0,0,$mth, $dt, $yr));
        if($wkdaydiff==0)
                $wkdaydiff=7;


        $stday=date("Y-m-d", mktime(0,0,0, $mth, $dt-$wkdaydiff+1, $yr) );
        //$endday=date("Y-m-d", mktime(0,0,0,$mth, ($dt+(7-$wkdaydiff)), $yr) );
        $endday=date("Y-m-d", mktime(0,0,0,$mth, $dt, $yr) );

        $week["begin"]  =$stday;
        $week["end"]    =$endday;
        return $week;
}

/****************************************************************************************
function        :       getCurrentWeekLimits
author          :       rachna
returns         :       returns the start and end of current week in an array

***************************************************************************************/

function getCurrentWeekLimits()
{
	$dt=date("d");
	$mth=date("m");;
	$yr=date("Y");
	$wkid=date("W",mktime(0,0,0,$mth, $dt, $yr));
	
	$wkdaydiff=date("w", mktime(0,0,0,$mth, $dt, $yr));
	if($wkdaydiff==0)
	        $wkdaydiff=7;


	$stday=date("Y-m-d", mktime(0,0,0, $mth, $dt-$wkdaydiff+1, $yr) );
	//$endday=date("Y-m-d", mktime(0,0,0,$mth, ($dt+(7-$wkdaydiff)), $yr) );
	$endday=date("Y-m-d", mktime(0,0,0,$mth, $dt, $yr) );
	
	$week["begin"]=$stday;
	$week["end"]=$endday;
	return $week;
}

/****************************************************************************************
function	:	getWeekId4GivenDate
author		: 	rachna
returns		:	returns the weekid for a given date
input		:	date array -associative with date, month and year as keys
****************************************************************************************/

function getWeekId4GivenDate($dtArr)
{
	$dt=$dtArr['date'];
	$mth=$dtArr['month'];
	$yr=$dtArr['year'];

        $wkid=date("W",mktime(0,0,0,$mth, $dt, $yr));

        return $wkid;

}


/****************************************************************************************
function	:	match_city
author		: 	rachna
returns		:	true if match found, else false
description	:	checks whether first argument- city from resume- matches the city list
specified in the job posting city list from sitenew

***************************************************************************************/

function match_city($rcity, $jobcityList)
{
	$jobcityList=strtolower($jobcityList);
    $rcity=strtolower($rcity);
    $jobcityList=str_replace("<br>",'',$jobcityList);
    $jobcityList=explode(",",$jobcityList);
    foreach ($jobcityList as $val)
    {
            $tempcity=explode("-",$val);
            $x=count($tempcity)-1;
            $finalcity1=trim($tempcity[$x]);
            $finalcity2=explode(" ",$finalcity1);
            foreach($finalcity2 as $val2)
            {
                    $finalcity[]=$val2;
            }
    }
    if(isset($finalcity))
    {
            $finalcity=array_unique($finalcity);
            if(in_array($rcity,$finalcity))
                    return true;
            else
                    return false;
    }
    return false;

}

function checkemail($email)     { // returns 1 if email id valid
        if (trim($email) == "")
                $result = 0;
        else if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
                $result=0;
        else
                $result=1;

        return $result;
}

?>
