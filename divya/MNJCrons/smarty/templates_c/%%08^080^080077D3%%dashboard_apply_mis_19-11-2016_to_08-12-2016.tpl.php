<?php /* Smarty version 2.6.19, created on 2016-12-12 17:46:53
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_19-11-2016_to_08-12-2016.tpl */ ?>
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
        <select name="startday" value="19">
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
			<option value="19"  selected >19</option>
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
        <select name="startmonth" value="11">
           <option value="01" >JAN</option>
	   <option value="02" >FEB</option>
	   <option value="03" >MAR</option>
	   <option value="04" >APR</option>
	   <option value="05" >MAY</option>
	   <option value="06" >JUN</option>
	   <option value="07" >JUL</option>
	   <option value="08" >AUG</option>
	   <option value="09" >SEP</option>
	   <option value="10" >OCT</option>
	   <option value="11"  selected >NOV</option>
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
        <select name="endday" value="08">
		          <option value="01" >1</option>
			<option value="02" >2</option>
			<option value="03" >3</option>
			<option value="04" >4</option>
			<option value="05" >5</option>
			<option value="06" >6</option>
			<option value="07" >7</option>
			<option value="08"  selected >8</option>
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
        <select name="endmonth" value="12">
           <option value="01" >JAN</option>
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
	   <option value="12"  selected >DEC</option>
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
 <tr><td colspan="15" align="center">Apply Online from 19-11-2016 to 08-12-2016</td></tr>
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
    <tr><td>Saturday,19-Nov-2016</td><td>16</td>
                       <td>1</td>
                       <td>16</td>
                       <td>392814</td>
                       <td>6064</td> 
                       <td>141525</td>
                       <td>17</td>
                       <td>--</td> 
                       <td>17</td>
                       <td>468603</td>
                       <td>9946</td>
                       <td>161518</td>
                       <td>877461</td>
                       <td>203179</td></tr>
      <tr><td>Sunday,20-Nov-2016</td><td>13</td>
                       <td>--</td>
                       <td>10</td>
                       <td>326482</td>
                       <td>4557</td> 
                       <td>113849</td>
                       <td>19</td>
                       <td>--</td> 
                       <td>17</td>
                       <td>382217</td>
                       <td>7425</td>
                       <td>126703</td>
                       <td>720713</td>
                       <td>160358</td></tr>
      <tr><td>Monday,21-Nov-2016</td><td>16</td>
                       <td>--</td>
                       <td>16</td>
                       <td>916254</td>
                       <td>11834</td> 
                       <td>198463</td>
                       <td>45</td>
                       <td>--</td> 
                       <td>27</td>
                       <td>1147618</td>
                       <td>19895</td>
                       <td>229093</td>
                       <td>2095662</td>
                       <td>284237</td></tr>
      <tr><td>Tuesday,22-Nov-2016</td><td>16</td>
                       <td>--</td>
                       <td>11</td>
                       <td>663051</td>
                       <td>11504</td> 
                       <td>240979</td>
                       <td>26</td>
                       <td>--</td> 
                       <td>26</td>
                       <td>828670</td>
                       <td>18350</td>
                       <td>278485</td>
                       <td>1521617</td>
                       <td>346400</td></tr>
      <tr><td>Wednesday,23-Nov-2016</td><td>22</td>
                       <td>--</td>
                       <td>21</td>
                       <td>529005</td>
                       <td>8735</td> 
                       <td>191771</td>
                       <td>24</td>
                       <td>--</td> 
                       <td>21</td>
                       <td>688720</td>
                       <td>15368</td>
                       <td>229791</td>
                       <td>1241874</td>
                       <td>279194</td></tr>
      <tr><td>Thursday,24-Nov-2016</td><td>33</td>
                       <td>--</td>
                       <td>31</td>
                       <td>563672</td>
                       <td>9226</td> 
                       <td>207127</td>
                       <td>40</td>
                       <td>--</td> 
                       <td>33</td>
                       <td>737924</td>
                       <td>15590</td>
                       <td>248692</td>
                       <td>1326485</td>
                       <td>302567</td></tr>
      <tr><td>Friday,25-Nov-2016</td><td>19</td>
                       <td>--</td>
                       <td>18</td>
                       <td>574895</td>
                       <td>9986</td> 
                       <td>214000</td>
                       <td>23</td>
                       <td>--</td> 
                       <td>16</td>
                       <td>722199</td>
                       <td>16036</td>
                       <td>249356</td>
                       <td>1323158</td>
                       <td>310325</td></tr>
      <tr><td>Saturday,26-Nov-2016</td><td>10</td>
                       <td>--</td>
                       <td>10</td>
                       <td>386297</td>
                       <td>6442</td> 
                       <td>141734</td>
                       <td>12</td>
                       <td>1</td> 
                       <td>12</td>
                       <td>479234</td>
                       <td>10495</td>
                       <td>164113</td>
                       <td>882491</td>
                       <td>203843</td></tr>
      <tr><td>Sunday,27-Nov-2016</td><td>14</td>
                       <td>--</td>
                       <td>9</td>
                       <td>324127</td>
                       <td>4580</td> 
                       <td>114470</td>
                       <td>20</td>
                       <td>--</td> 
                       <td>18</td>
                       <td>412243</td>
                       <td>8195</td>
                       <td>133944</td>
                       <td>749179</td>
                       <td>164037</td></tr>
      <tr><td>Monday,28-Nov-2016</td><td>22</td>
                       <td>--</td>
                       <td>20</td>
                       <td>592519</td>
                       <td>9542</td> 
                       <td>215965</td>
                       <td>37</td>
                       <td>1</td> 
                       <td>36</td>
                       <td>782967</td>
                       <td>16199</td>
                       <td>254526</td>
                       <td>1401287</td>
                       <td>312628</td></tr>
      <tr><td>Tuesday,29-Nov-2016</td><td>30</td>
                       <td>3</td>
                       <td>28</td>
                       <td>574113</td>
                       <td>10575</td> 
                       <td>214728</td>
                       <td>37</td>
                       <td>--</td> 
                       <td>33</td>
                       <td>751833</td>
                       <td>17546</td>
                       <td>255788</td>
                       <td>1354137</td>
                       <td>314600</td></tr>
      <tr><td>Wednesday,30-Nov-2016</td><td>13</td>
                       <td>--</td>
                       <td>13</td>
                       <td>544005</td>
                       <td>9527</td> 
                       <td>202338</td>
                       <td>25</td>
                       <td>--</td> 
                       <td>24</td>
                       <td>699484</td>
                       <td>15842</td>
                       <td>240169</td>
                       <td>1268896</td>
                       <td>294784</td></tr>
      <tr><td>Thursday,01-Dec-2016</td><td>17</td>
                       <td>--</td>
                       <td>16</td>
                       <td>579645</td>
                       <td>8500</td> 
                       <td>203874</td>
                       <td>31</td>
                       <td>--</td> 
                       <td>26</td>
                       <td>753041</td>
                       <td>15117</td>
                       <td>242557</td>
                       <td>1356351</td>
                       <td>293255</td></tr>
      <tr><td>Friday,02-Dec-2016</td><td>15</td>
                       <td>--</td>
                       <td>13</td>
                       <td>563179</td>
                       <td>9153</td> 
                       <td>205773</td>
                       <td>24</td>
                       <td>--</td> 
                       <td>22</td>
                       <td>748455</td>
                       <td>15902</td>
                       <td>253610</td>
                       <td>1336728</td>
                       <td>299448</td></tr>
      <tr><td>Saturday,03-Dec-2016</td><td>15</td>
                       <td>--</td>
                       <td>14</td>
                       <td>383064</td>
                       <td>5218</td> 
                       <td>136989</td>
                       <td>22</td>
                       <td>1</td> 
                       <td>22</td>
                       <td>499216</td>
                       <td>9509</td>
                       <td>164872</td>
                       <td>897045</td>
                       <td>197218</td></tr>
      <tr><td>Sunday,04-Dec-2016</td><td>10</td>
                       <td>--</td>
                       <td>7</td>
                       <td>369054</td>
                       <td>4598</td> 
                       <td>130527</td>
                       <td>11</td>
                       <td>--</td> 
                       <td>10</td>
                       <td>481335</td>
                       <td>8302</td>
                       <td>157860</td>
                       <td>863310</td>
                       <td>188402</td></tr>
      <tr><td>Monday,05-Dec-2016</td><td>22</td>
                       <td>--</td>
                       <td>18</td>
                       <td>518118</td>
                       <td>7263</td> 
                       <td>181656</td>
                       <td>16</td>
                       <td>2</td> 
                       <td>18</td>
                       <td>699853</td>
                       <td>12877</td>
                       <td>220277</td>
                       <td>1238151</td>
                       <td>262219</td></tr>
      <tr><td>Tuesday,06-Dec-2016</td><td>6</td>
                       <td>--</td>
                       <td>6</td>
                       <td>616311</td>
                       <td>9151</td> 
                       <td>222672</td>
                       <td>15</td>
                       <td>--</td> 
                       <td>14</td>
                       <td>829070</td>
                       <td>15914</td>
                       <td>269570</td>
                       <td>1470467</td>
                       <td>323380</td></tr>
      <tr><td>Wednesday,07-Dec-2016</td><td>24</td>
                       <td>1</td>
                       <td>23</td>
                       <td>535905</td>
                       <td>9446</td> 
                       <td>198381</td>
                       <td>29</td>
                       <td>1</td> 
                       <td>26</td>
                       <td>731955</td>
                       <td>16293</td>
                       <td>244464</td>
                       <td>1293654</td>
                       <td>293440</td></tr>
      <tr><td>Thursday,08-Dec-2016</td><td>--</td>
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
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 19-11-2016 to 08-12-2016</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Saturday,19-Nov-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,20-Nov-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,21-Nov-2016</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,22-Nov-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,23-Nov-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Thursday,24-Nov-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Friday,25-Nov-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Saturday,26-Nov-2016</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Sunday,27-Nov-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,28-Nov-2016</td><td>--</td>
                        <td>4</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,29-Nov-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,30-Nov-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Thursday,01-Dec-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Friday,02-Dec-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Saturday,03-Dec-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Sunday,04-Dec-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,05-Dec-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,06-Dec-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,07-Dec-2016</td><td>--</td>
                        <td>4</td>
                        <td>--</td></tr>
     <tr><td>Thursday,08-Dec-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="19">
<input type="hidden" name="endday" value="08">
<input type="hidden" name="startmonth" value="11">
<input type="hidden" name="startyear" value="2016">
<input type="hidden" name="endmonth" value="12">
<input type="hidden" name="endyear" value="2016">
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
    <tr><td>Saturday,19-Nov-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>203179</td></tr>
    <tr><td>Sunday,20-Nov-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>160358</td></tr>
    <tr><td>Monday,21-Nov-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>284237</td></tr>
    <tr><td>Tuesday,22-Nov-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>346400</td></tr>
    <tr><td>Wednesday,23-Nov-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>279194</td></tr>
    <tr><td>Thursday,24-Nov-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>302567</td></tr>
    <tr><td>Friday,25-Nov-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>310325</td></tr>
    <tr><td>Saturday,26-Nov-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>203843</td></tr>
    <tr><td>Sunday,27-Nov-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>164037</td></tr>
    <tr><td>Monday,28-Nov-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>312628</td></tr>
    <tr><td>Tuesday,29-Nov-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>314600</td></tr>
    <tr><td>Wednesday,30-Nov-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>294784</td></tr>
    <tr><td>Thursday,01-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>293255</td></tr>
    <tr><td>Friday,02-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>299448</td></tr>
    <tr><td>Saturday,03-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>197218</td></tr>
    <tr><td>Sunday,04-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>188402</td></tr>
    <tr><td>Monday,05-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>262219</td></tr>
    <tr><td>Tuesday,06-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>323380</td></tr>
    <tr><td>Wednesday,07-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>293440</td></tr>
    <tr><td>Thursday,08-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td></tr>
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