<?php /* Smarty version 2.6.19, created on 2016-01-13 22:55:45
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_01-01-2015_to_12-01-2015.tpl */ ?>
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
        <select name="startmonth" value="01">
           <option value="01"  selected >JAN</option>
	   <option value="02" >FEB</option>
	   <option value="03" >MAR</option>
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
        <select name="startyear" value="2015">
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
		<option value="2015"  selected >2015</option>
		<option value="2016" >2016</option>
        </select>
        </font></b></TD>
      <TD width="46"> 
        <div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">To</font></b></div>
      </TD>
      <TD width="46"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endday" value="12">
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
			<option value="12"  selected >12</option>
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
        <select name="endmonth" value="01">
           <option value="01"  selected >JAN</option>
	   <option value="02" >FEB</option>
	   <option value="03" >MAR</option>
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
        <select name="endyear" value="2015">
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
                <option value="2015"  selected >2015</option>
                <option value="2016" >2016</option>
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
 <tr><td colspan="15" align="center">Apply Online from 01-01-2015 to 12-01-2015</td></tr>
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
    <tr><td>Thursday,01-Jan-2015</td><td>50390</td>
                       <td>1501</td>
                       <td>31011</td>
                       <td>216164</td>
                       <td>5156</td> 
                       <td>76038</td>
                       <td>37604</td>
                       <td>942</td> 
                       <td>24593</td>
                       <td>210791</td>
                       <td>6820</td>
                       <td>79694</td>
                       <td>529368</td>
                       <td>130683</td></tr>
      <tr><td>Friday,02-Jan-2015</td><td>131950</td>
                       <td>3127</td>
                       <td>77016</td>
                       <td>436289</td>
                       <td>13217</td> 
                       <td>152782</td>
                       <td>116055</td>
                       <td>2507</td> 
                       <td>72068</td>
                       <td>404570</td>
                       <td>14205</td>
                       <td>153386</td>
                       <td>1121920</td>
                       <td>262318</td></tr>
      <tr><td>Saturday,03-Jan-2015</td><td>80368</td>
                       <td>2472</td>
                       <td>48612</td>
                       <td>287584</td>
                       <td>7731</td> 
                       <td>96838</td>
                       <td>69521</td>
                       <td>1970</td> 
                       <td>44157</td>
                       <td>268648</td>
                       <td>9653</td>
                       <td>99224</td>
                       <td>727947</td>
                       <td>171443</td></tr>
      <tr><td>Sunday,04-Jan-2015</td><td>35302</td>
                       <td>918</td>
                       <td>20042</td>
                       <td>224784</td>
                       <td>5697</td> 
                       <td>72973</td>
                       <td>30228</td>
                       <td>715</td> 
                       <td>18191</td>
                       <td>212293</td>
                       <td>7513</td>
                       <td>74970</td>
                       <td>517450</td>
                       <td>112583</td></tr>
      <tr><td>Monday,05-Jan-2015</td><td>70924</td>
                       <td>1942</td>
                       <td>43526</td>
                       <td>371974</td>
                       <td>10826</td> 
                       <td>128924</td>
                       <td>57702</td>
                       <td>1466</td> 
                       <td>37425</td>
                       <td>368924</td>
                       <td>13850</td>
                       <td>137666</td>
                       <td>897608</td>
                       <td>211088</td></tr>
      <tr><td>Tuesday,06-Jan-2015</td><td>141163</td>
                       <td>3742</td>
                       <td>83571</td>
                       <td>448047</td>
                       <td>12405</td> 
                       <td>157062</td>
                       <td>115423</td>
                       <td>2827</td> 
                       <td>73491</td>
                       <td>450672</td>
                       <td>15245</td>
                       <td>169706</td>
                       <td>1189524</td>
                       <td>281551</td></tr>
      <tr><td>Wednesday,07-Jan-2015</td><td>87579</td>
                       <td>2575</td>
                       <td>52185</td>
                       <td>343858</td>
                       <td>8595</td> 
                       <td>118095</td>
                       <td>70449</td>
                       <td>2079</td> 
                       <td>45642</td>
                       <td>348895</td>
                       <td>11543</td>
                       <td>130855</td>
                       <td>875573</td>
                       <td>211425</td></tr>
      <tr><td>Thursday,08-Jan-2015</td><td>73294</td>
                       <td>2343</td>
                       <td>45121</td>
                       <td>393528</td>
                       <td>9942</td> 
                       <td>141272</td>
                       <td>57165</td>
                       <td>1768</td> 
                       <td>37918</td>
                       <td>384905</td>
                       <td>12184</td>
                       <td>148532</td>
                       <td>935129</td>
                       <td>232370</td></tr>
      <tr><td>Friday,09-Jan-2015</td><td>90250</td>
                       <td>2197</td>
                       <td>54107</td>
                       <td>385400</td>
                       <td>11202</td> 
                       <td>139815</td>
                       <td>75766</td>
                       <td>1727</td> 
                       <td>49090</td>
                       <td>373924</td>
                       <td>13058</td>
                       <td>147756</td>
                       <td>953524</td>
                       <td>238871</td></tr>
      <tr><td>Saturday,10-Jan-2015</td><td>74356</td>
                       <td>2479</td>
                       <td>46033</td>
                       <td>260167</td>
                       <td>6791</td> 
                       <td>91082</td>
                       <td>62295</td>
                       <td>1946</td> 
                       <td>41084</td>
                       <td>255950</td>
                       <td>8290</td>
                       <td>97533</td>
                       <td>672274</td>
                       <td>167865</td></tr>
      <tr><td>Sunday,11-Jan-2015</td><td>28874</td>
                       <td>947</td>
                       <td>16447</td>
                       <td>206687</td>
                       <td>5077</td> 
                       <td>69672</td>
                       <td>24851</td>
                       <td>695</td> 
                       <td>14854</td>
                       <td>206901</td>
                       <td>6294</td>
                       <td>73803</td>
                       <td>480326</td>
                       <td>108793</td></tr>
      <tr><td>Monday,12-Jan-2015</td><td>67336</td>
                       <td>1908</td>
                       <td>41138</td>
                       <td>321439</td>
                       <td>7975</td> 
                       <td>110943</td>
                       <td>58591</td>
                       <td>1644</td> 
                       <td>38500</td>
                       <td>318363</td>
                       <td>10043</td>
                       <td>119049</td>
                       <td>787299</td>
                       <td>192004</td></tr>
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 01-01-2015 to 12-01-2015</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Thursday,01-Jan-2015</td><td>178</td>
                        <td>6</td>
                        <td>8</td></tr>
     <tr><td>Friday,02-Jan-2015</td><td>238</td>
                        <td>4</td>
                        <td>14</td></tr>
     <tr><td>Saturday,03-Jan-2015</td><td>271</td>
                        <td>7</td>
                        <td>8</td></tr>
     <tr><td>Sunday,04-Jan-2015</td><td>189</td>
                        <td>3</td>
                        <td>4</td></tr>
     <tr><td>Monday,05-Jan-2015</td><td>326</td>
                        <td>5</td>
                        <td>4</td></tr>
     <tr><td>Tuesday,06-Jan-2015</td><td>373</td>
                        <td>18</td>
                        <td>10</td></tr>
     <tr><td>Wednesday,07-Jan-2015</td><td>496</td>
                        <td>14</td>
                        <td>5</td></tr>
     <tr><td>Thursday,08-Jan-2015</td><td>443</td>
                        <td>29</td>
                        <td>10</td></tr>
     <tr><td>Friday,09-Jan-2015</td><td>400</td>
                        <td>12</td>
                        <td>6</td></tr>
     <tr><td>Saturday,10-Jan-2015</td><td>320</td>
                        <td>11</td>
                        <td>7</td></tr>
     <tr><td>Sunday,11-Jan-2015</td><td>299</td>
                        <td>13</td>
                        <td>4</td></tr>
     <tr><td>Monday,12-Jan-2015</td><td>612</td>
                        <td>34</td>
                        <td>11</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="01">
<input type="hidden" name="endday" value="12">
<input type="hidden" name="startmonth" value="01">
<input type="hidden" name="startyear" value="2015">
<input type="hidden" name="endmonth" value="01">
<input type="hidden" name="endyear" value="2015">
<ol>
<li><a href="http://lfvsfcp10127.dn.net/dashboard/dashboard_apply_summary.php"  target="_blank">Apply Summary Dashboard</a></li>
<li><a href="http://lfvsfcp10127.dn.net/dashboard/dashboard_apply_realtime.php?today=1"  target="_blank">Real Time Apply MIS(for last 24 hour)</a></li>
<li><a href="http://lfvsfcp10127.dn.net/apply/applyMIS.php"  target="_blank">Apply Relevance Dashboard</a></li>
<li><a href="http://lfvsfcp10127.dn.net/apply/unregApplySummary.php"  target="_blank">Unregistered Apply MIS</a></li>
<li><a href=""  target="_blank">SAP MIS</a></li>
<li><a href="http://lfvsfcp10127.dn.net/apply/reApplyMIS.php"  target="_blank">Reapply Dashboard</a></li>
<li><a href=""  target="_blank">Apply Data :Break up by Company/Consultant/Spammer</a></li>
<li><a href="http://lfvsfcp10127.dn.net/dashboard/dashboard_apply_topapplies.php"  target="_blank">Top Applies MIS</a></li>
<ol>

<!-- Apply summary dashboard 
<table border="1">
 <caption>Apply Summary Dashboard</caption>
 <tr><th colspan="9">Apply Summary for last 7 day</th><tr>
 <tr><td align="center">Date</td><td>Single Applies</td><td>Multiple Applies</td><td>Total</td><td>Unique Users</td><td>Normal Applies</td>
<td>Eapps Applies</td><td>Total</td><td>Unique User</td></tr>
    <tr><td>Thursday,01-Jan-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>130683</td></tr>
    <tr><td>Friday,02-Jan-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>262318</td></tr>
    <tr><td>Saturday,03-Jan-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>171443</td></tr>
    <tr><td>Sunday,04-Jan-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>112583</td></tr>
    <tr><td>Monday,05-Jan-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>211088</td></tr>
    <tr><td>Tuesday,06-Jan-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>281551</td></tr>
    <tr><td>Wednesday,07-Jan-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>211425</td></tr>
    <tr><td>Thursday,08-Jan-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>232370</td></tr>
    <tr><td>Friday,09-Jan-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>238871</td></tr>
    <tr><td>Saturday,10-Jan-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>167865</td></tr>
    <tr><td>Sunday,11-Jan-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>108793</td></tr>
    <tr><td>Monday,12-Jan-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>192004</td></tr>
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