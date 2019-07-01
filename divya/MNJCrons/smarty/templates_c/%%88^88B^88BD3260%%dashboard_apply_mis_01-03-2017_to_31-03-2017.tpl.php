<?php /* Smarty version 2.6.19, created on 2017-04-28 20:04:27
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_01-03-2017_to_31-03-2017.tpl */ ?>
<html>
<head>
<title>
  Apply MIS
</title>
<script language="JavaScript" type="text/JavaScript">
function openwindow(fromoldlog)
{
	var doc=document.formmain;
	if(doc.searchcriteria.options[doc.searchcriteria.selectedIndex].value=="")
		alert("please enter search criteria properly");
	else if(doc.durcriteria.options[doc.durcriteria.selectedIndex].value=="")
		alert("please enter duration criteria properly");
	else
	{
	var durcriteria=doc.durcriteria.value;
	var searchcriteria=doc.searchcriteria.value;
	var startdate=doc.startyear.value+"-"+doc.startmonth.value+"-"+doc.startday.value;
	var enddate=doc.endyear.value+"-"+doc.endmonth.value+"-"+doc.endday.value;
	
	if(fromoldlog==true)
		var loc="dashboard_applymis.php?go=go&startdate="+startdate+"&enddate="+enddate+"&searchcriteria="+searchcriteria+"&durcriteria="+durcriteria+"&fromoldlog="+fromoldlog;
	else
		var loc="dashboard_applymis.php?go=go&startdate="+startdate+"&enddate="+enddate+"&searchcriteria="+searchcriteria+"&durcriteria="+durcriteria;
	window.open(loc);
	}
	
}

function openwindowrelvc()
{

        var doc=document.formmain;
		var srchcriteria=doc.relvctype.value;
	    if (srchcriteria == "")
    	    srchcriteria = "datewise";

        var dtval=doc.startday.value;
        var mthval=doc.startmonth.value;
        var yrval=doc.startyear.value;

	if((srchcriteria =="datewise")||(srchcriteria =="weekwise"))
    {
        var dtvalid=checkDate(yrval, mthval, dtval );
        if(!dtvalid)
        {
            alert("Please enter a valid date!");
            return;
        }
        var dtfuture=checkFutureDt(yrval, mthval, dtval );
        if(dtfuture)
        {
            if(dtfuture == 1)
                alert("Cannot process data for a future date!\n Please enter a date less than today\'s date.");
            else if (dtfuture == 2)
                alert("Cannot process data for today\'s date!\n Please enter a date less than today\'s date.");
            return;
        }
    }

    var startdate=doc.startyear.value+"-"+doc.startmonth.value+"-"+doc.startday.value;
    var loc="dashboard_relvncsumm.php?submit=1&yestDt="+startdate+"&relvctype="+srchcriteria;
    window.open(loc);
}

function checkFutureDt(y,m,d)
{
        var now = new Date();
        now = now.getTime();

        var dateToCheck = new Date();
        dateToCheck.setYear(y);
        dateToCheck.setMonth(m-1);
        dateToCheck.setDate(d);
        var newDt = dateToCheck.getTime();

        if(newDt > now)
                return 1;
        else if (newDt == now)
                return 2;
        else
                return 0;
}

function checkDate(y,m,d)
{
        if (m==4 || m==6 || m==9 || m==11)
                if (d==31) return(false);
        if (m==2)
        {
                var b=parseInt(y/4);
                if (isNaN(b)) return(false);
                if (d>29) return(false);
                if (d==29 && ((y/4)!=parseInt(y/4))) return(false);
        }
        return(true);
}

</script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="85%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#66CCFF">
  <tr> 
    <td width="552"> 
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="5"><b><font color="#66CCFF">DASHBOARD</font> 
        :: Apply Online</b></font></div>
    </td>
    <td width="225"> 
      <div align="right"><img src="http://w10.naukri.com/gifs/jobs-india.gif"></div>
    </td>
  </tr>
</table><br>
<!--
<TABLE align="center" border="1" bordercolor="#CCCCFF">
    <TR>
        <TD>
                <a href="http://linux11735.dn.net/dashboard/SPAMMISFILES/spammis_interface.htm">SPAM MARKING MIS</a>
        </TD>
    </TR>
    <TR>
        <TD>
                <a href="http://linux11735.dn.net/spammer/mn_spam_search.php">Apply Data : Break up by Company/Consultant/Spammer</a>
        </TD>
    </TR>
</TABLE>
-->
<form name="formmain" action="dashboard_apply_mis.php" method="post">
  <TABLE align="center" border="1" bordercolor="#CCCCFF" width="85%">
    <TR> 
      <TD width="178"></TD>
      <TD width="10"></TD>
      <TD width="57"></TD>
      <TD width="57"></TD>
      <TD width="46"></TD>
      <TD width="46"></TD>
      <TD width="57"></TD>
      <TD width="57"></TD>
    </TR>
    <TR> 
      <TD width="178"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Enter 
        Duration</font></b></TD>
      <TD width="10"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="startday" value="01">
		          <option value="01"  selected >1</option>
			<option value="02" >2</option>
			<option value="03" >3</option>
			<option value="04" >4</option>
			<option value="05" >5</option>
			<option value="06" >6</option>
			<option value="07" >7</option>
			<option value="08" >8</option>
			<option value="09" >9</option>
			<option value="10" >10</option>
			<option value="11" >11</option>
			<option value="12" >12</option>
			<option value="13" >13</option>
			<option value="14" >14</option>
			<option value="15" >15</option>
			<option value="16" >16</option>
			<option value="17" >17</option>
			<option value="18" >18</option>
			<option value="19" >19</option>
			<option value="20" >20</option>
			<option value="21" >21</option>
			<option value="22" >22</option>
			<option value="23" >23</option>
			<option value="24" >24</option>
			<option value="25" >25</option>
			<option value="26" >26</option>
			<option value="27" >27</option>
			<option value="28" >28</option>
			<option value="29" >29</option>
			<option value="30" >30</option>
			<option value="31" >31</option>
        </select>
        </font></b></TD>
      <TD width="57"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="startmonth" value="03">
           <option value="01" >JAN</option>
	   <option value="02" >FEB</option>
	   <option value="03"  selected >MAR</option>
	   <option value="04" >APR</option>
	   <option value="05" >MAY</option>
	   <option value="06" >JUN</option>
	   <option value="07" >JUL</option>
	   <option value="08" >AUG</option>
	   <option value="09" >SEP</option>
	   <option value="10" >OCT</option>
	   <option value="11" >NOV</option>
	   <option value="12" >DEC</option>
        </select>
        </font></b></TD>
      <TD width="57"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="startyear" value="2017">
          <option value="2004" >2004</option>
		<option value="2005" >2005</option>
                <option value="2006" >2006</option>
		<option value="2007" >2007</option>
		<option value="2008" >2008</option>
		<option value="2009" >2009</option>
		<option value="2010" >2010</option>
		<option value="2011" >2011</option>
		<option value="2012" >2012</option>
		<option value="2013" >2013</option>
		<option value="2014" >2014</option>
		<option value="2015" >2015</option>
		<option value="2016" >2016</option>
		<option value="2017"  selected >2017</option>
		<option value="2018" >2018</option>
		<option value="2019" >2019</option>
        </select>
        </font></b></TD>
      <TD width="46"> 
        <div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">To</font></b></div>
      </TD>
      <TD width="46"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endday" value="31">
		          <option value="01" >1</option>
			<option value="02" >2</option>
			<option value="03" >3</option>
			<option value="04" >4</option>
			<option value="05" >5</option>
			<option value="06" >6</option>
			<option value="07" >7</option>
			<option value="08" >8</option>
			<option value="09" >9</option>
			<option value="10" >10</option>
			<option value="11" >11</option>
			<option value="12" >12</option>
			<option value="13" >13</option>
			<option value="14" >14</option>
			<option value="15" >15</option>
			<option value="16" >16</option>
			<option value="17" >17</option>
			<option value="18" >18</option>
			<option value="19" >19</option>
			<option value="20" >20</option>
			<option value="21" >21</option>
			<option value="22" >22</option>
			<option value="23" >23</option>
			<option value="24" >24</option>
			<option value="25" >25</option>
			<option value="26" >26</option>
			<option value="27" >27</option>
			<option value="28" >28</option>
			<option value="29" >29</option>
			<option value="30" >30</option>
			<option value="31"  selected >31</option>
        </select>
        </font></b></TD>
      <TD width="57"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endmonth" value="03">
           <option value="01" >JAN</option>
	   <option value="02" >FEB</option>
	   <option value="03"  selected >MAR</option>
	   <option value="04" >APR</option>
	   <option value="05" >MAY</option>
	   <option value="06" >JUN</option>
	   <option value="07" >JUL</option>
	   <option value="08" >AUG</option>
	   <option value="09" >SEP</option>
	   <option value="10" >OCT</option>
	   <option value="11" >NOV</option>
	   <option value="12" >DEC</option>
        </select>
        </font></b></TD>
      <TD width="57"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endyear" value="2017">
          <option value="2004" >2004</option>
		<option value="2005" >2005</option>
                <option value="2006" >2006</option>
		<option value="2007" >2007</option>
		<option value="2008" >2008</option>
		<option value="2009" >2009</option>
		<option value="2010" >2010</option>
		<option value="2011" >2011</option>
		<option value="2012" >2012</option>
		<option value="2013" >2013</option>
		<option value="2014" >2014</option>
                <option value="2015" >2015</option>
                <option value="2016" >2016</option>
                <option value="2017"  selected >2017</option>
                <option value="2018" >2018</option>
                <option value="2019" >2019</option>
        </select>
        </font></b></TD>
    </TR>
   <input type="submit" name="submit" value="submit">
  </table>
</form>
<br>
<br>
<!-- Apply heirarchy -->
<table width="85%" border="1" align="center">
 <caption>Apply Heirarchy</caption>
 <tr><td colspan="15" align="center">Apply Online from 01-03-2017 to 31-03-2017</td></tr>
 <tr><td rowspan="4" align="center">day</td><tr><td colspan="6" align="Center">Normal</td>
                                                <td colspan="6" align="center">Eapps</td>
                                            <td rowspan="3">Total Applies</td><td rowspan="3">Unique users</td></tr></tr>
                                            <tr><td colspan="3" align="center">Sap</td><td colspan="3" align="center">Non-Sap</td>
                                                <td colspan="3" align="center">Sap</td><td colspan="3" align="center">Non-Sap</td></tr>
                                            <tr><td>Reg</td><td>Non-Reg</td><td>Unique</td>
                                                <td>Reg</td><td>Non-Reg</td><td>Unique</td>
                                                <td>Reg</td><td>Non-Reg</td><td>Unique</td>
                                                <td>Reg</td><td>Non-Reg</td><td>Unique</td></tr>
                                            </tr>
    <tr><td>Wednesday,01-Mar-2017</td><td>26</td>
                       <td>--</td>
                       <td>22</td>
                       <td>829538</td>
                       <td>8662</td> 
                       <td>252400</td>
                       <td>20</td>
                       <td>--</td> 
                       <td>18</td>
                       <td>828312</td>
                       <td>15908</td>
                       <td>262210</td>
                       <td>1682466</td>
                       <td>345539</td></tr>
      <tr><td>Thursday,02-Mar-2017</td><td>31</td>
                       <td>--</td>
                       <td>25</td>
                       <td>847652</td>
                       <td>9532</td> 
                       <td>254936</td>
                       <td>29</td>
                       <td>--</td> 
                       <td>24</td>
                       <td>854664</td>
                       <td>16642</td>
                       <td>265662</td>
                       <td>1728550</td>
                       <td>353113</td></tr>
      <tr><td>Friday,03-Mar-2017</td><td>22</td>
                       <td>--</td>
                       <td>21</td>
                       <td>845822</td>
                       <td>10225</td> 
                       <td>277207</td>
                       <td>18</td>
                       <td>--</td> 
                       <td>16</td>
                       <td>870123</td>
                       <td>16118</td>
                       <td>290546</td>
                       <td>1742328</td>
                       <td>385722</td></tr>
      <tr><td>Saturday,04-Mar-2017</td><td>20</td>
                       <td>--</td>
                       <td>14</td>
                       <td>615972</td>
                       <td>6479</td> 
                       <td>197101</td>
                       <td>21</td>
                       <td>--</td> 
                       <td>20</td>
                       <td>624295</td>
                       <td>10467</td>
                       <td>205670</td>
                       <td>1257254</td>
                       <td>274008</td></tr>
      <tr><td>Sunday,05-Mar-2017</td><td>9</td>
                       <td>--</td>
                       <td>9</td>
                       <td>515482</td>
                       <td>5585</td> 
                       <td>159969</td>
                       <td>18</td>
                       <td>--</td> 
                       <td>16</td>
                       <td>509334</td>
                       <td>9265</td>
                       <td>162974</td>
                       <td>1039693</td>
                       <td>219058</td></tr>
      <tr><td>Monday,06-Mar-2017</td><td>12</td>
                       <td>--</td>
                       <td>11</td>
                       <td>795461</td>
                       <td>8861</td> 
                       <td>249354</td>
                       <td>20</td>
                       <td>1</td> 
                       <td>21</td>
                       <td>837733</td>
                       <td>15514</td>
                       <td>260526</td>
                       <td>1657602</td>
                       <td>345144</td></tr>
      <tr><td>Tuesday,07-Mar-2017</td><td>17</td>
                       <td>--</td>
                       <td>15</td>
                       <td>862938</td>
                       <td>10611</td> 
                       <td>283315</td>
                       <td>35</td>
                       <td>--</td> 
                       <td>30</td>
                       <td>910357</td>
                       <td>17421</td>
                       <td>297446</td>
                       <td>1801379</td>
                       <td>394430</td></tr>
      <tr><td>Wednesday,08-Mar-2017</td><td>20</td>
                       <td>--</td>
                       <td>18</td>
                       <td>745069</td>
                       <td>8863</td> 
                       <td>239573</td>
                       <td>21</td>
                       <td>--</td> 
                       <td>20</td>
                       <td>797973</td>
                       <td>15306</td>
                       <td>256110</td>
                       <td>1567252</td>
                       <td>335690</td></tr>
      <tr><td>Thursday,09-Mar-2017</td><td>13</td>
                       <td>--</td>
                       <td>12</td>
                       <td>832381</td>
                       <td>9297</td> 
                       <td>262806</td>
                       <td>19</td>
                       <td>--</td> 
                       <td>15</td>
                       <td>877458</td>
                       <td>15378</td>
                       <td>277182</td>
                       <td>1734546</td>
                       <td>364244</td></tr>
      <tr><td>Friday,10-Mar-2017</td><td>16</td>
                       <td>--</td>
                       <td>15</td>
                       <td>877882</td>
                       <td>10111</td> 
                       <td>283475</td>
                       <td>23</td>
                       <td>--</td> 
                       <td>21</td>
                       <td>881423</td>
                       <td>15567</td>
                       <td>291835</td>
                       <td>1785022</td>
                       <td>389388</td></tr>
      <tr><td>Saturday,11-Mar-2017</td><td>12</td>
                       <td>--</td>
                       <td>11</td>
                       <td>576549</td>
                       <td>6678</td> 
                       <td>184723</td>
                       <td>25</td>
                       <td>--</td> 
                       <td>16</td>
                       <td>539542</td>
                       <td>10013</td>
                       <td>182100</td>
                       <td>1132819</td>
                       <td>249965</td></tr>
      <tr><td>Sunday,12-Mar-2017</td><td>9</td>
                       <td>--</td>
                       <td>8</td>
                       <td>422896</td>
                       <td>4468</td> 
                       <td>131485</td>
                       <td>15</td>
                       <td>--</td> 
                       <td>12</td>
                       <td>410973</td>
                       <td>7525</td>
                       <td>135402</td>
                       <td>845886</td>
                       <td>180901</td></tr>
      <tr><td>Monday,13-Mar-2017</td><td>15</td>
                       <td>--</td>
                       <td>11</td>
                       <td>563626</td>
                       <td>5986</td> 
                       <td>173295</td>
                       <td>15</td>
                       <td>--</td> 
                       <td>15</td>
                       <td>580534</td>
                       <td>10625</td>
                       <td>180429</td>
                       <td>1160801</td>
                       <td>236915</td></tr>
      <tr><td>Tuesday,14-Mar-2017</td><td>18</td>
                       <td>--</td>
                       <td>16</td>
                       <td>910032</td>
                       <td>11089</td> 
                       <td>291982</td>
                       <td>28</td>
                       <td>--</td> 
                       <td>24</td>
                       <td>907184</td>
                       <td>17193</td>
                       <td>298825</td>
                       <td>1845544</td>
                       <td>396993</td></tr>
      <tr><td>Wednesday,15-Mar-2017</td><td>34</td>
                       <td>--</td>
                       <td>31</td>
                       <td>906036</td>
                       <td>10495</td> 
                       <td>284009</td>
                       <td>22</td>
                       <td>--</td> 
                       <td>20</td>
                       <td>860179</td>
                       <td>17051</td>
                       <td>286497</td>
                       <td>1793817</td>
                       <td>384053</td></tr>
      <tr><td>Thursday,16-Mar-2017</td><td>21</td>
                       <td>--</td>
                       <td>19</td>
                       <td>909557</td>
                       <td>10667</td> 
                       <td>285929</td>
                       <td>29</td>
                       <td>--</td> 
                       <td>28</td>
                       <td>831718</td>
                       <td>17319</td>
                       <td>285323</td>
                       <td>1769311</td>
                       <td>386156</td></tr>
      <tr><td>Friday,17-Mar-2017</td><td>15</td>
                       <td>--</td>
                       <td>12</td>
                       <td>900993</td>
                       <td>11238</td> 
                       <td>289841</td>
                       <td>24</td>
                       <td>--</td> 
                       <td>22</td>
                       <td>823605</td>
                       <td>16644</td>
                       <td>289081</td>
                       <td>1752519</td>
                       <td>391306</td></tr>
      <tr><td>Saturday,18-Mar-2017</td><td>16</td>
                       <td>--</td>
                       <td>14</td>
                       <td>682148</td>
                       <td>8445</td> 
                       <td>216508</td>
                       <td>12</td>
                       <td>--</td> 
                       <td>11</td>
                       <td>604938</td>
                       <td>12189</td>
                       <td>211667</td>
                       <td>1307748</td>
                       <td>290535</td></tr>
      <tr><td>Sunday,19-Mar-2017</td><td>18</td>
                       <td>--</td>
                       <td>17</td>
                       <td>569276</td>
                       <td>6321</td> 
                       <td>176378</td>
                       <td>14</td>
                       <td>--</td> 
                       <td>14</td>
                       <td>497306</td>
                       <td>9396</td>
                       <td>170280</td>
                       <td>1082331</td>
                       <td>235662</td></tr>
      <tr><td>Monday,20-Mar-2017</td><td>30</td>
                       <td>--</td>
                       <td>25</td>
                       <td>890296</td>
                       <td>10876</td> 
                       <td>275760</td>
                       <td>34</td>
                       <td>--</td> 
                       <td>30</td>
                       <td>811069</td>
                       <td>16276</td>
                       <td>273088</td>
                       <td>1728581</td>
                       <td>370461</td></tr>
      <tr><td>Tuesday,21-Mar-2017</td><td>22</td>
                       <td>--</td>
                       <td>20</td>
                       <td>859550</td>
                       <td>11191</td> 
                       <td>284555</td>
                       <td>25</td>
                       <td>--</td> 
                       <td>23</td>
                       <td>825447</td>
                       <td>16572</td>
                       <td>290594</td>
                       <td>1712807</td>
                       <td>389358</td></tr>
      <tr><td>Wednesday,22-Mar-2017</td><td>46</td>
                       <td>--</td>
                       <td>35</td>
                       <td>955184</td>
                       <td>12077</td> 
                       <td>303596</td>
                       <td>49</td>
                       <td>1</td> 
                       <td>47</td>
                       <td>923201</td>
                       <td>18337</td>
                       <td>312293</td>
                       <td>1908895</td>
                       <td>415931</td></tr>
      <tr><td>Thursday,23-Mar-2017</td><td>19</td>
                       <td>--</td>
                       <td>18</td>
                       <td>774670</td>
                       <td>9319</td> 
                       <td>249155</td>
                       <td>27</td>
                       <td>--</td> 
                       <td>26</td>
                       <td>773813</td>
                       <td>14997</td>
                       <td>263608</td>
                       <td>1572845</td>
                       <td>346350</td></tr>
      <tr><td>Friday,24-Mar-2017</td><td>15</td>
                       <td>--</td>
                       <td>14</td>
                       <td>818464</td>
                       <td>10682</td> 
                       <td>275744</td>
                       <td>24</td>
                       <td>--</td> 
                       <td>24</td>
                       <td>823563</td>
                       <td>16385</td>
                       <td>290210</td>
                       <td>1669133</td>
                       <td>384902</td></tr>
      <tr><td>Saturday,25-Mar-2017</td><td>16</td>
                       <td>--</td>
                       <td>13</td>
                       <td>615989</td>
                       <td>8064</td> 
                       <td>204161</td>
                       <td>23</td>
                       <td>1</td> 
                       <td>23</td>
                       <td>592748</td>
                       <td>11796</td>
                       <td>209233</td>
                       <td>1228637</td>
                       <td>282131</td></tr>
      <tr><td>Sunday,26-Mar-2017</td><td>10</td>
                       <td>--</td>
                       <td>10</td>
                       <td>492637</td>
                       <td>5465</td> 
                       <td>155684</td>
                       <td>15</td>
                       <td>--</td> 
                       <td>14</td>
                       <td>466308</td>
                       <td>8252</td>
                       <td>156702</td>
                       <td>972687</td>
                       <td>211966</td></tr>
      <tr><td>Monday,27-Mar-2017</td><td>26</td>
                       <td>--</td>
                       <td>22</td>
                       <td>781955</td>
                       <td>9500</td> 
                       <td>253337</td>
                       <td>18</td>
                       <td>1</td> 
                       <td>19</td>
                       <td>757281</td>
                       <td>14729</td>
                       <td>255491</td>
                       <td>1563510</td>
                       <td>345660</td></tr>
      <tr><td>Tuesday,28-Mar-2017</td><td>30</td>
                       <td>--</td>
                       <td>26</td>
                       <td>815806</td>
                       <td>10450</td> 
                       <td>266196</td>
                       <td>21</td>
                       <td>--</td> 
                       <td>20</td>
                       <td>805382</td>
                       <td>15959</td>
                       <td>276413</td>
                       <td>1647648</td>
                       <td>367791</td></tr>
      <tr><td>Wednesday,29-Mar-2017</td><td>19</td>
                       <td>--</td>
                       <td>19</td>
                       <td>797130</td>
                       <td>10450</td> 
                       <td>259393</td>
                       <td>20</td>
                       <td>--</td> 
                       <td>19</td>
                       <td>774222</td>
                       <td>15600</td>
                       <td>268598</td>
                       <td>1597441</td>
                       <td>358271</td></tr>
      <tr><td>Thursday,30-Mar-2017</td><td>20</td>
                       <td>--</td>
                       <td>20</td>
                       <td>794449</td>
                       <td>10166</td> 
                       <td>258286</td>
                       <td>25</td>
                       <td>--</td> 
                       <td>24</td>
                       <td>756546</td>
                       <td>15653</td>
                       <td>263467</td>
                       <td>1576859</td>
                       <td>353840</td></tr>
      <tr><td>Friday,31-Mar-2017</td><td>20</td>
                       <td>--</td>
                       <td>12</td>
                       <td>783008</td>
                       <td>10907</td> 
                       <td>262619</td>
                       <td>18</td>
                       <td>--</td> 
                       <td>18</td>
                       <td>754987</td>
                       <td>15803</td>
                       <td>270016</td>
                       <td>1564743</td>
                       <td>364053</td></tr>
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 01-03-2017 to 31-03-2017</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Wednesday,01-Mar-2017</td><td>--</td>
                        <td>6</td>
                        <td>--</td></tr>
     <tr><td>Thursday,02-Mar-2017</td><td>--</td>
                        <td>5</td>
                        <td>1</td></tr>
     <tr><td>Friday,03-Mar-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Saturday,04-Mar-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,05-Mar-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,06-Mar-2017</td><td>--</td>
                        <td>5</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,07-Mar-2017</td><td>--</td>
                        <td>7</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,08-Mar-2017</td><td>--</td>
                        <td>2</td>
                        <td>1</td></tr>
     <tr><td>Thursday,09-Mar-2017</td><td>--</td>
                        <td>4</td>
                        <td>--</td></tr>
     <tr><td>Friday,10-Mar-2017</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Saturday,11-Mar-2017</td><td>--</td>
                        <td>--</td>
                        <td>4</td></tr>
     <tr><td>Sunday,12-Mar-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,13-Mar-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,14-Mar-2017</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,15-Mar-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Thursday,16-Mar-2017</td><td>--</td>
                        <td>5</td>
                        <td>1</td></tr>
     <tr><td>Friday,17-Mar-2017</td><td>--</td>
                        <td>--</td>
                        <td>1</td></tr>
     <tr><td>Saturday,18-Mar-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,19-Mar-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,20-Mar-2017</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,21-Mar-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,22-Mar-2017</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Thursday,23-Mar-2017</td><td>--</td>
                        <td>1</td>
                        <td>2</td></tr>
     <tr><td>Friday,24-Mar-2017</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Saturday,25-Mar-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Sunday,26-Mar-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,27-Mar-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,28-Mar-2017</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,29-Mar-2017</td><td>--</td>
                        <td>2</td>
                        <td>3</td></tr>
     <tr><td>Thursday,30-Mar-2017</td><td>--</td>
                        <td>2</td>
                        <td>1</td></tr>
     <tr><td>Friday,31-Mar-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="01">
<input type="hidden" name="endday" value="31">
<input type="hidden" name="startmonth" value="03">
<input type="hidden" name="startyear" value="2017">
<input type="hidden" name="endmonth" value="03">
<input type="hidden" name="endyear" value="2017">
<ol>
<li><a href="http://dashboard.naukri.com/dashboard/dashboard_apply_summary.php"  target="_blank">Apply Summary Dashboard</a></li>
<li><a href="http://dashboard.naukri.com/dashboard/dashboard_apply_realtime.php?today=1"  target="_blank">Real Time Apply MIS(for last 24 hour)</a></li>
<li><a href="http://dashboard.naukri.com/apply/applyMIS.php"  target="_blank">Apply Relevance Dashboard</a></li>
<li><a href="http://dashboard.naukri.com/apply/unregApplySummary.php"  target="_blank">Unregistered Apply MIS</a></li>
<li><a href=""  target="_blank">SAP MIS</a></li>
<li><a href="http://dashboard.naukri.com/apply/reApplyMIS.php"  target="_blank">Reapply Dashboard</a></li>
<li><a href=""  target="_blank">Apply Data :Break up by Company/Consultant/Spammer</a></li>
<li><a href="http://dashboard.naukri.com/dashboard/dashboard_apply_topapplies.php"  target="_blank">Top Applies MIS</a></li>
<ol>

<!-- Apply summary dashboard 
<table border="1">
 <caption>Apply Summary Dashboard</caption>
 <tr><th colspan="9">Apply Summary for last 7 day</th><tr>
 <tr><td align="center">Date</td><td>Single Applies</td><td>Multiple Applies</td><td>Total</td><td>Unique Users</td><td>Normal Applies</td>
<td>Eapps Applies</td><td>Total</td><td>Unique User</td></tr>
    <tr><td>Wednesday,01-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>345539</td></tr>
    <tr><td>Thursday,02-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>353113</td></tr>
    <tr><td>Friday,03-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>385722</td></tr>
    <tr><td>Saturday,04-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>274008</td></tr>
    <tr><td>Sunday,05-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>219058</td></tr>
    <tr><td>Monday,06-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>345144</td></tr>
    <tr><td>Tuesday,07-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>394430</td></tr>
    <tr><td>Wednesday,08-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>335690</td></tr>
    <tr><td>Thursday,09-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>364244</td></tr>
    <tr><td>Friday,10-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>389388</td></tr>
    <tr><td>Saturday,11-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>249965</td></tr>
    <tr><td>Sunday,12-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>180901</td></tr>
    <tr><td>Monday,13-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>236915</td></tr>
    <tr><td>Tuesday,14-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>396993</td></tr>
    <tr><td>Wednesday,15-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>384053</td></tr>
    <tr><td>Thursday,16-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>386156</td></tr>
    <tr><td>Friday,17-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>391306</td></tr>
    <tr><td>Saturday,18-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>290535</td></tr>
    <tr><td>Sunday,19-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>235662</td></tr>
    <tr><td>Monday,20-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>370461</td></tr>
    <tr><td>Tuesday,21-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>389358</td></tr>
    <tr><td>Wednesday,22-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>415931</td></tr>
    <tr><td>Thursday,23-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>346350</td></tr>
    <tr><td>Friday,24-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>384902</td></tr>
    <tr><td>Saturday,25-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>282131</td></tr>
    <tr><td>Sunday,26-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>211966</td></tr>
    <tr><td>Monday,27-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>345660</td></tr>
    <tr><td>Tuesday,28-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>367791</td></tr>
    <tr><td>Wednesday,29-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>358271</td></tr>
    <tr><td>Thursday,30-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>353840</td></tr>
    <tr><td>Friday,31-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>364053</td></tr>
 </table>
-->
<!-- Apply summary dashboard (ends here)-->
<br />



<!-- code is commented by vishal saxena on 30 jan 2008(this table will be merged with Real Time apply mis table)
<table width="85%" border="1" align="center" bordercolor="#CCCCFF">
  <tr> 
    <td width="42%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Server 
      time: </font></b></td>
    <td width="58%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;</font></td>
  </tr>
  <tr> 
    <td colspan="2"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b>Note: 
      Last 24 hrs statistics(acc.to server time)</b></font><b></b></td>
  </tr>
  <tr> 
    <td width="42%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total 
      Apply :</font></b></td>
    <td width="58%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;</font></td>
  </tr>
  <tr> 
    <td width="42%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Eapps 
      :</font></b></td>
    <td width="58%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;</font></td>
  </tr>
  <tr> 
    <td width="42%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Non- 
      Eapps :</font></b></td>
    <td width="58%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;</font></td>
  </tr>
  <tr> 
    <td colspan="2"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
      <a href="../../dashboard/dashboard_userwisemaxapplies.php" target="_blank">Top 
      50 Applies for the day (User name wise)</a> </font></b></td>
  </tr>
</table>
code is commented by vishal saxena on 30 jan 2008(ends here)-->
<br><br><br>
<br>

<br>
<!--code is commented by vishal saxena on 30 Jan 2008
<table align = "center" border =0><tr><td>
<iframe name="frmSAP" frameborder="0" height="250px" scrolling="auto" src="http://w0.naukri.com/SAP/mis.html"  align="center"></iframe>
</td></tr></table>
code is commented by vishal saxena(ends here)
-->
</body>
</html>