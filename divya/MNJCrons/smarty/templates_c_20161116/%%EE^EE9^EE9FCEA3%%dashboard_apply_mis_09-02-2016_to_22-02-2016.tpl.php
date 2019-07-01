<?php /* Smarty version 2.6.19, created on 2016-02-23 14:43:10
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_09-02-2016_to_22-02-2016.tpl */ ?>
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
        <select name="startday" value="09">
		          <option value="01" >1</option>
			<option value="02" >2</option>
			<option value="03" >3</option>
			<option value="04" >4</option>
			<option value="05" >5</option>
			<option value="06" >6</option>
			<option value="07" >7</option>
			<option value="08" >8</option>
			<option value="09"  selected >9</option>
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
        <select name="startmonth" value="02">
           <option value="01" >JAN</option>
	   <option value="02"  selected >FEB</option>
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
        <select name="startyear" value="2016">
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
		<option value="2016"  selected >2016</option>
        </select>
        </font></b></TD>
      <TD width="46"> 
        <div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">To</font></b></div>
      </TD>
      <TD width="46"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endday" value="22">
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
			<option value="22"  selected >22</option>
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
        <select name="endmonth" value="02">
           <option value="01" >JAN</option>
	   <option value="02"  selected >FEB</option>
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
        <select name="endyear" value="2016">
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
                <option value="2016"  selected >2016</option>
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
 <tr><td colspan="15" align="center">Apply Online from 09-02-2016 to 22-02-2016</td></tr>
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
    <tr><td>Tuesday,09-Feb-2016</td><td>59597</td>
                       <td>1922</td>
                       <td>41603</td>
                       <td>496277</td>
                       <td>10958</td> 
                       <td>191029</td>
                       <td>54905</td>
                       <td>1393</td> 
                       <td>38519</td>
                       <td>614913</td>
                       <td>18283</td>
                       <td>227188</td>
                       <td>1258248</td>
                       <td>314970</td></tr>
      <tr><td>Wednesday,10-Feb-2016</td><td>75382</td>
                       <td>2311</td>
                       <td>52182</td>
                       <td>454744</td>
                       <td>9049</td> 
                       <td>174915</td>
                       <td>68830</td>
                       <td>1939</td> 
                       <td>48508</td>
                       <td>587718</td>
                       <td>15948</td>
                       <td>215315</td>
                       <td>1215921</td>
                       <td>307155</td></tr>
      <tr><td>Thursday,11-Feb-2016</td><td>43985</td>
                       <td>1700</td>
                       <td>32202</td>
                       <td>455432</td>
                       <td>10225</td> 
                       <td>177442</td>
                       <td>38025</td>
                       <td>1229</td> 
                       <td>28493</td>
                       <td>590117</td>
                       <td>18315</td>
                       <td>218453</td>
                       <td>1159028</td>
                       <td>295255</td></tr>
      <tr><td>Friday,12-Feb-2016</td><td>38577</td>
                       <td>1219</td>
                       <td>26783</td>
                       <td>434897</td>
                       <td>9680</td> 
                       <td>166728</td>
                       <td>35413</td>
                       <td>1027</td> 
                       <td>25422</td>
                       <td>535274</td>
                       <td>17007</td>
                       <td>196421</td>
                       <td>1073094</td>
                       <td>267244</td></tr>
      <tr><td>Saturday,13-Feb-2016</td><td>59773</td>
                       <td>2011</td>
                       <td>41126</td>
                       <td>355423</td>
                       <td>7220</td> 
                       <td>131701</td>
                       <td>54727</td>
                       <td>1674</td> 
                       <td>39244</td>
                       <td>423533</td>
                       <td>13053</td>
                       <td>155782</td>
                       <td>917414</td>
                       <td>229170</td></tr>
      <tr><td>Sunday,14-Feb-2016</td><td>25003</td>
                       <td>861</td>
                       <td>16705</td>
                       <td>263222</td>
                       <td>4837</td> 
                       <td>93955</td>
                       <td>23072</td>
                       <td>735</td> 
                       <td>15985</td>
                       <td>302965</td>
                       <td>8991</td>
                       <td>107638</td>
                       <td>629686</td>
                       <td>149771</td></tr>
      <tr><td>Monday,15-Feb-2016</td><td>42775</td>
                       <td>1427</td>
                       <td>29496</td>
                       <td>476258</td>
                       <td>9860</td> 
                       <td>172502</td>
                       <td>41000</td>
                       <td>1244</td> 
                       <td>28640</td>
                       <td>588181</td>
                       <td>18390</td>
                       <td>205104</td>
                       <td>1179135</td>
                       <td>276609</td></tr>
      <tr><td>Tuesday,16-Feb-2016</td><td>93124</td>
                       <td>2851</td>
                       <td>62883</td>
                       <td>573787</td>
                       <td>12707</td> 
                       <td>215597</td>
                       <td>87489</td>
                       <td>2400</td> 
                       <td>60600</td>
                       <td>724606</td>
                       <td>23045</td>
                       <td>261218</td>
                       <td>1520009</td>
                       <td>365721</td></tr>
      <tr><td>Wednesday,17-Feb-2016</td><td>52461</td>
                       <td>2031</td>
                       <td>36088</td>
                       <td>555661</td>
                       <td>9673</td> 
                       <td>185518</td>
                       <td>46321</td>
                       <td>1645</td> 
                       <td>33079</td>
                       <td>664911</td>
                       <td>18100</td>
                       <td>219062</td>
                       <td>1350803</td>
                       <td>295343</td></tr>
      <tr><td>Thursday,18-Feb-2016</td><td>48762</td>
                       <td>1982</td>
                       <td>35166</td>
                       <td>603895</td>
                       <td>10135</td> 
                       <td>198929</td>
                       <td>37923</td>
                       <td>1329</td> 
                       <td>29323</td>
                       <td>706786</td>
                       <td>18611</td>
                       <td>232521</td>
                       <td>1429423</td>
                       <td>311513</td></tr>
      <tr><td>Friday,19-Feb-2016</td><td>33909</td>
                       <td>1247</td>
                       <td>23170</td>
                       <td>570456</td>
                       <td>10274</td> 
                       <td>190544</td>
                       <td>28646</td>
                       <td>971</td> 
                       <td>21102</td>
                       <td>643373</td>
                       <td>17678</td>
                       <td>216975</td>
                       <td>1306554</td>
                       <td>288310</td></tr>
      <tr><td>Saturday,20-Feb-2016</td><td>27785</td>
                       <td>1074</td>
                       <td>19138</td>
                       <td>449904</td>
                       <td>7394</td> 
                       <td>140967</td>
                       <td>23306</td>
                       <td>835</td> 
                       <td>17163</td>
                       <td>493060</td>
                       <td>12981</td>
                       <td>158264</td>
                       <td>1016339</td>
                       <td>213378</td></tr>
      <tr><td>Sunday,21-Feb-2016</td><td>9807</td>
                       <td>447</td>
                       <td>6509</td>
                       <td>393854</td>
                       <td>5615</td> 
                       <td>117946</td>
                       <td>8453</td>
                       <td>359</td> 
                       <td>5902</td>
                       <td>408136</td>
                       <td>10123</td>
                       <td>125647</td>
                       <td>836794</td>
                       <td>165470</td></tr>
      <tr><td>Monday,22-Feb-2016</td><td>29956</td>
                       <td>1079</td>
                       <td>21029</td>
                       <td>632436</td>
                       <td>10481</td> 
                       <td>197397</td>
                       <td>25379</td>
                       <td>729</td> 
                       <td>19005</td>
                       <td>682314</td>
                       <td>20707</td>
                       <td>217499</td>
                       <td>1403081</td>
                       <td>289448</td></tr>
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 09-02-2016 to 22-02-2016</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Tuesday,09-Feb-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,10-Feb-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Thursday,11-Feb-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Friday,12-Feb-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Saturday,13-Feb-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,14-Feb-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,15-Feb-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,16-Feb-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,17-Feb-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Thursday,18-Feb-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Friday,19-Feb-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Saturday,20-Feb-2016</td><td>--</td>
                        <td>8</td>
                        <td>--</td></tr>
     <tr><td>Sunday,21-Feb-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,22-Feb-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="09">
<input type="hidden" name="endday" value="22">
<input type="hidden" name="startmonth" value="02">
<input type="hidden" name="startyear" value="2016">
<input type="hidden" name="endmonth" value="02">
<input type="hidden" name="endyear" value="2016">
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
    <tr><td>Tuesday,09-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>314970</td></tr>
    <tr><td>Wednesday,10-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>307155</td></tr>
    <tr><td>Thursday,11-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>295255</td></tr>
    <tr><td>Friday,12-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>267244</td></tr>
    <tr><td>Saturday,13-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>229170</td></tr>
    <tr><td>Sunday,14-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>149771</td></tr>
    <tr><td>Monday,15-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>276609</td></tr>
    <tr><td>Tuesday,16-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>365721</td></tr>
    <tr><td>Wednesday,17-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>295343</td></tr>
    <tr><td>Thursday,18-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>311513</td></tr>
    <tr><td>Friday,19-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>288310</td></tr>
    <tr><td>Saturday,20-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>213378</td></tr>
    <tr><td>Sunday,21-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>165470</td></tr>
    <tr><td>Monday,22-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>289448</td></tr>
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