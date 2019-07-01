<?php /* Smarty version 2.6.19, created on 2018-04-18 11:08:41
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_01-04-2018_to_16-04-2018.tpl */ ?>
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
        <select name="startmonth" value="04">
           <option value="01" >JAN</option>
	   <option value="02" >FEB</option>
	   <option value="03" >MAR</option>
	   <option value="04"  selected >APR</option>
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
        <select name="startyear" value="2018">
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
		<option value="2017" >2017</option>
		<option value="2018"  selected >2018</option>
		<option value="2019" >2019</option>
        </select>
        </font></b></TD>
      <TD width="46"> 
        <div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">To</font></b></div>
      </TD>
      <TD width="46"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endday" value="16">
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
			<option value="16"  selected >16</option>
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
        <select name="endmonth" value="04">
           <option value="01" >JAN</option>
	   <option value="02" >FEB</option>
	   <option value="03" >MAR</option>
	   <option value="04"  selected >APR</option>
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
        <select name="endyear" value="2018">
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
                <option value="2017" >2017</option>
                <option value="2018"  selected >2018</option>
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
 <tr><td colspan="15" align="center">Apply Online from 01-04-2018 to 16-04-2018</td></tr>
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
    <tr><td>Sunday,01-Apr-2018</td><td>1</td>
                       <td>--</td>
                       <td>1</td>
                       <td>364378</td>
                       <td>4083</td> 
                       <td>127974</td>
                       <td>7</td>
                       <td>--</td> 
                       <td>7</td>
                       <td>587575</td>
                       <td>8157</td>
                       <td>168380</td>
                       <td>964201</td>
                       <td>210626</td></tr>
      <tr><td>Monday,02-Apr-2018</td><td>6</td>
                       <td>--</td>
                       <td>5</td>
                       <td>661336</td>
                       <td>8091</td> 
                       <td>239705</td>
                       <td>17</td>
                       <td>--</td> 
                       <td>16</td>
                       <td>1167025</td>
                       <td>15619</td>
                       <td>328547</td>
                       <td>1852094</td>
                       <td>401796</td></tr>
      <tr><td>Tuesday,03-Apr-2018</td><td>9</td>
                       <td>--</td>
                       <td>8</td>
                       <td>625010</td>
                       <td>8202</td> 
                       <td>228524</td>
                       <td>16</td>
                       <td>--</td> 
                       <td>16</td>
                       <td>1121651</td>
                       <td>16094</td>
                       <td>321632</td>
                       <td>1770982</td>
                       <td>392847</td></tr>
      <tr><td>Wednesday,04-Apr-2018</td><td>6</td>
                       <td>--</td>
                       <td>6</td>
                       <td>564548</td>
                       <td>7403</td> 
                       <td>206341</td>
                       <td>11</td>
                       <td>--</td> 
                       <td>10</td>
                       <td>1024831</td>
                       <td>14812</td>
                       <td>295482</td>
                       <td>1611611</td>
                       <td>358689</td></tr>
      <tr><td>Thursday,05-Apr-2018</td><td>7</td>
                       <td>--</td>
                       <td>7</td>
                       <td>570999</td>
                       <td>6916</td> 
                       <td>209896</td>
                       <td>7</td>
                       <td>--</td> 
                       <td>6</td>
                       <td>1002292</td>
                       <td>13884</td>
                       <td>295571</td>
                       <td>1594105</td>
                       <td>361592</td></tr>
      <tr><td>Friday,06-Apr-2018</td><td>3</td>
                       <td>--</td>
                       <td>3</td>
                       <td>529803</td>
                       <td>6013</td> 
                       <td>195965</td>
                       <td>10</td>
                       <td>--</td> 
                       <td>9</td>
                       <td>882104</td>
                       <td>12217</td>
                       <td>269526</td>
                       <td>1430150</td>
                       <td>333281</td></tr>
      <tr><td>Saturday,07-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>454416</td>
                       <td>5648</td> 
                       <td>169251</td>
                       <td>3</td>
                       <td>--</td> 
                       <td>3</td>
                       <td>692637</td>
                       <td>10653</td>
                       <td>218625</td>
                       <td>1163357</td>
                       <td>278294</td></tr>
      <tr><td>Sunday,08-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>369322</td>
                       <td>4369</td> 
                       <td>130574</td>
                       <td>1</td>
                       <td>--</td> 
                       <td>1</td>
                       <td>538172</td>
                       <td>8054</td>
                       <td>162602</td>
                       <td>919918</td>
                       <td>207461</td></tr>
      <tr><td>Monday,09-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>726212</td>
                       <td>9148</td> 
                       <td>264108</td>
                       <td>3</td>
                       <td>--</td> 
                       <td>3</td>
                       <td>1113325</td>
                       <td>16593</td>
                       <td>333405</td>
                       <td>1865281</td>
                       <td>420214</td></tr>
      <tr><td>Tuesday,10-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td> 
                       <td>--</td>
                       <td>--</td>
                       <td>--</td> 
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td></tr>
      <tr><td>Wednesday,11-Apr-2018</td><td>1</td>
                       <td>--</td>
                       <td>1</td>
                       <td>544485</td>
                       <td>7042</td> 
                       <td>203316</td>
                       <td>11</td>
                       <td>1</td> 
                       <td>12</td>
                       <td>885136</td>
                       <td>14603</td>
                       <td>276024</td>
                       <td>1451279</td>
                       <td>342814</td></tr>
      <tr><td>Thursday,12-Apr-2018</td><td>1</td>
                       <td>--</td>
                       <td>1</td>
                       <td>559739</td>
                       <td>6647</td> 
                       <td>210871</td>
                       <td>3</td>
                       <td>--</td> 
                       <td>3</td>
                       <td>933502</td>
                       <td>13863</td>
                       <td>289649</td>
                       <td>1513755</td>
                       <td>357847</td></tr>
      <tr><td>Friday,13-Apr-2018</td><td>1</td>
                       <td>--</td>
                       <td>1</td>
                       <td>550422</td>
                       <td>6570</td> 
                       <td>211455</td>
                       <td>9</td>
                       <td>--</td> 
                       <td>9</td>
                       <td>890907</td>
                       <td>13022</td>
                       <td>285058</td>
                       <td>1460931</td>
                       <td>356514</td></tr>
      <tr><td>Saturday,14-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>403246</td>
                       <td>4745</td> 
                       <td>148074</td>
                       <td>1</td>
                       <td>--</td> 
                       <td>1</td>
                       <td>624721</td>
                       <td>8975</td>
                       <td>197089</td>
                       <td>1041688</td>
                       <td>247329</td></tr>
      <tr><td>Sunday,15-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>317795</td>
                       <td>4045</td> 
                       <td>114399</td>
                       <td>1</td>
                       <td>--</td> 
                       <td>1</td>
                       <td>497539</td>
                       <td>7976</td>
                       <td>153407</td>
                       <td>827356</td>
                       <td>191026</td></tr>
      <tr><td>Monday,16-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>590044</td>
                       <td>7321</td> 
                       <td>222081</td>
                       <td>--</td>
                       <td>--</td> 
                       <td>--</td>
                       <td>955675</td>
                       <td>14159</td>
                       <td>292199</td>
                       <td>1567198</td>
                       <td>365132</td></tr>
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 01-04-2018 to 16-04-2018</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Sunday,01-Apr-2018</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,02-Apr-2018</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,03-Apr-2018</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,04-Apr-2018</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Thursday,05-Apr-2018</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Friday,06-Apr-2018</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Saturday,07-Apr-2018</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,08-Apr-2018</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,09-Apr-2018</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,10-Apr-2018</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,11-Apr-2018</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Thursday,12-Apr-2018</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Friday,13-Apr-2018</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Saturday,14-Apr-2018</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,15-Apr-2018</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,16-Apr-2018</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="01">
<input type="hidden" name="endday" value="16">
<input type="hidden" name="startmonth" value="04">
<input type="hidden" name="startyear" value="2018">
<input type="hidden" name="endmonth" value="04">
<input type="hidden" name="endyear" value="2018">
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
    <tr><td>Sunday,01-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>210626</td></tr>
    <tr><td>Monday,02-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>401796</td></tr>
    <tr><td>Tuesday,03-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>392847</td></tr>
    <tr><td>Wednesday,04-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>358689</td></tr>
    <tr><td>Thursday,05-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>361592</td></tr>
    <tr><td>Friday,06-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>333281</td></tr>
    <tr><td>Saturday,07-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>278294</td></tr>
    <tr><td>Sunday,08-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>207461</td></tr>
    <tr><td>Monday,09-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>420214</td></tr>
    <tr><td>Tuesday,10-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td></tr>
    <tr><td>Wednesday,11-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>342814</td></tr>
    <tr><td>Thursday,12-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>357847</td></tr>
    <tr><td>Friday,13-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>356514</td></tr>
    <tr><td>Saturday,14-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>247329</td></tr>
    <tr><td>Sunday,15-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>191026</td></tr>
    <tr><td>Monday,16-Apr-2018</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>365132</td></tr>
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