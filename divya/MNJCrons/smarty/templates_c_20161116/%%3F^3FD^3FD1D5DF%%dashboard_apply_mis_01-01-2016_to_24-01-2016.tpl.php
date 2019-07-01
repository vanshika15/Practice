<?php /* Smarty version 2.6.19, created on 2016-01-25 19:25:04
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_01-01-2016_to_24-01-2016.tpl */ ?>
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
        <select name="endday" value="24">
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
			<option value="24"  selected >24</option>
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
 <tr><td colspan="15" align="center">Apply Online from 01-01-2016 to 24-01-2016</td></tr>
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
    <tr><td>Friday,01-Jan-2016</td><td>49843</td>
                       <td>1174</td>
                       <td>31786</td>
                       <td>281419</td>
                       <td>4530</td> 
                       <td>97556</td>
                       <td>44176</td>
                       <td>865</td> 
                       <td>29312</td>
                       <td>280967</td>
                       <td>9116</td>
                       <td>106081</td>
                       <td>672090</td>
                       <td>166152</td></tr>
      <tr><td>Saturday,02-Jan-2016</td><td>50150</td>
                       <td>1601</td>
                       <td>31738</td>
                       <td>340692</td>
                       <td>5880</td> 
                       <td>115275</td>
                       <td>44957</td>
                       <td>1295</td> 
                       <td>29332</td>
                       <td>332166</td>
                       <td>11614</td>
                       <td>121680</td>
                       <td>788355</td>
                       <td>186455</td></tr>
      <tr><td>Sunday,03-Jan-2016</td><td>16947</td>
                       <td>584</td>
                       <td>10411</td>
                       <td>280140</td>
                       <td>4624</td> 
                       <td>91165</td>
                       <td>15362</td>
                       <td>454</td> 
                       <td>9645</td>
                       <td>282088</td>
                       <td>9123</td>
                       <td>99129</td>
                       <td>609322</td>
                       <td>132674</td></tr>
      <tr><td>Monday,04-Jan-2016</td><td>52441</td>
                       <td>1590</td>
                       <td>34477</td>
                       <td>449944</td>
                       <td>8476</td> 
                       <td>151251</td>
                       <td>38734</td>
                       <td>1007</td> 
                       <td>26628</td>
                       <td>492514</td>
                       <td>16672</td>
                       <td>172996</td>
                       <td>1061378</td>
                       <td>242622</td></tr>
      <tr><td>Tuesday,05-Jan-2016</td><td>100887</td>
                       <td>3579</td>
                       <td>64736</td>
                       <td>595760</td>
                       <td>11521</td> 
                       <td>206587</td>
                       <td>71786</td>
                       <td>2353</td> 
                       <td>49171</td>
                       <td>637158</td>
                       <td>21109</td>
                       <td>229721</td>
                       <td>1444153</td>
                       <td>337584</td></tr>
      <tr><td>Wednesday,06-Jan-2016</td><td>40526</td>
                       <td>1398</td>
                       <td>27343</td>
                       <td>549326</td>
                       <td>11656</td> 
                       <td>195035</td>
                       <td>30404</td>
                       <td>975</td> 
                       <td>22126</td>
                       <td>588108</td>
                       <td>21335</td>
                       <td>216806</td>
                       <td>1243728</td>
                       <td>296073</td></tr>
      <tr><td>Thursday,07-Jan-2016</td><td>43878</td>
                       <td>1279</td>
                       <td>30610</td>
                       <td>466073</td>
                       <td>7694</td> 
                       <td>167331</td>
                       <td>34138</td>
                       <td>948</td> 
                       <td>25730</td>
                       <td>527537</td>
                       <td>16430</td>
                       <td>194253</td>
                       <td>1097977</td>
                       <td>267770</td></tr>
      <tr><td>Friday,08-Jan-2016</td><td>45186</td>
                       <td>1833</td>
                       <td>31373</td>
                       <td>530870</td>
                       <td>11998</td> 
                       <td>196309</td>
                       <td>34388</td>
                       <td>1412</td> 
                       <td>25530</td>
                       <td>580742</td>
                       <td>21106</td>
                       <td>218361</td>
                       <td>1227535</td>
                       <td>301088</td></tr>
      <tr><td>Saturday,09-Jan-2016</td><td>66344</td>
                       <td>3224</td>
                       <td>44886</td>
                       <td>394404</td>
                       <td>8424</td> 
                       <td>142799</td>
                       <td>50542</td>
                       <td>2417</td> 
                       <td>37018</td>
                       <td>428019</td>
                       <td>15225</td>
                       <td>162327</td>
                       <td>968599</td>
                       <td>239553</td></tr>
      <tr><td>Sunday,10-Jan-2016</td><td>18267</td>
                       <td>846</td>
                       <td>11844</td>
                       <td>282399</td>
                       <td>5261</td> 
                       <td>97608</td>
                       <td>14297</td>
                       <td>675</td> 
                       <td>9941</td>
                       <td>308332</td>
                       <td>10472</td>
                       <td>110628</td>
                       <td>640549</td>
                       <td>147712</td></tr>
      <tr><td>Monday,11-Jan-2016</td><td>56071</td>
                       <td>2458</td>
                       <td>37987</td>
                       <td>481620</td>
                       <td>9209</td> 
                       <td>172634</td>
                       <td>46736</td>
                       <td>1963</td> 
                       <td>33484</td>
                       <td>538626</td>
                       <td>19036</td>
                       <td>196427</td>
                       <td>1155719</td>
                       <td>276530</td></tr>
      <tr><td>Tuesday,12-Jan-2016</td><td>73959</td>
                       <td>2601</td>
                       <td>48895</td>
                       <td>591639</td>
                       <td>12523</td> 
                       <td>212734</td>
                       <td>66100</td>
                       <td>2293</td> 
                       <td>46163</td>
                       <td>678503</td>
                       <td>18920</td>
                       <td>243238</td>
                       <td>1446538</td>
                       <td>341409</td></tr>
      <tr><td>Wednesday,13-Jan-2016</td><td>82367</td>
                       <td>3636</td>
                       <td>54019</td>
                       <td>453463</td>
                       <td>9391</td> 
                       <td>165522</td>
                       <td>67936</td>
                       <td>2946</td> 
                       <td>47289</td>
                       <td>527627</td>
                       <td>16710</td>
                       <td>194248</td>
                       <td>1164076</td>
                       <td>286336</td></tr>
      <tr><td>Thursday,14-Jan-2016</td><td>48581</td>
                       <td>1791</td>
                       <td>33675</td>
                       <td>433072</td>
                       <td>8024</td> 
                       <td>156866</td>
                       <td>37719</td>
                       <td>1325</td> 
                       <td>27733</td>
                       <td>501812</td>
                       <td>15338</td>
                       <td>182559</td>
                       <td>1047662</td>
                       <td>257300</td></tr>
      <tr><td>Friday,15-Jan-2016</td><td>56607</td>
                       <td>1612</td>
                       <td>37091</td>
                       <td>439235</td>
                       <td>8727</td> 
                       <td>161843</td>
                       <td>46600</td>
                       <td>1424</td> 
                       <td>32873</td>
                       <td>497258</td>
                       <td>17427</td>
                       <td>185464</td>
                       <td>1068890</td>
                       <td>262124</td></tr>
      <tr><td>Saturday,16-Jan-2016</td><td>47369</td>
                       <td>1906</td>
                       <td>31605</td>
                       <td>332328</td>
                       <td>6652</td> 
                       <td>119333</td>
                       <td>39871</td>
                       <td>1571</td> 
                       <td>27691</td>
                       <td>362539</td>
                       <td>13079</td>
                       <td>134963</td>
                       <td>805315</td>
                       <td>198108</td></tr>
      <tr><td>Sunday,17-Jan-2016</td><td>16112</td>
                       <td>639</td>
                       <td>10273</td>
                       <td>273238</td>
                       <td>4712</td> 
                       <td>93676</td>
                       <td>13877</td>
                       <td>515</td> 
                       <td>9152</td>
                       <td>292076</td>
                       <td>9495</td>
                       <td>102569</td>
                       <td>610664</td>
                       <td>139912</td></tr>
      <tr><td>Monday,18-Jan-2016</td><td>24972</td>
                       <td>1088</td>
                       <td>16621</td>
                       <td>458757</td>
                       <td>8895</td> 
                       <td>161781</td>
                       <td>22790</td>
                       <td>846</td> 
                       <td>15659</td>
                       <td>526488</td>
                       <td>19053</td>
                       <td>187437</td>
                       <td>1062889</td>
                       <td>246780</td></tr>
      <tr><td>Tuesday,19-Jan-2016</td><td>95222</td>
                       <td>3620</td>
                       <td>61636</td>
                       <td>495739</td>
                       <td>10761</td> 
                       <td>179814</td>
                       <td>76038</td>
                       <td>2604</td> 
                       <td>52349</td>
                       <td>550776</td>
                       <td>24352</td>
                       <td>208818</td>
                       <td>1259112</td>
                       <td>308686</td></tr>
      <tr><td>Wednesday,20-Jan-2016</td><td>82798</td>
                       <td>3409</td>
                       <td>54200</td>
                       <td>560654</td>
                       <td>11604</td> 
                       <td>201578</td>
                       <td>63472</td>
                       <td>2475</td> 
                       <td>44173</td>
                       <td>672112</td>
                       <td>25094</td>
                       <td>242883</td>
                       <td>1421618</td>
                       <td>337394</td></tr>
      <tr><td>Thursday,21-Jan-2016</td><td>50646</td>
                       <td>2232</td>
                       <td>36010</td>
                       <td>401509</td>
                       <td>8604</td> 
                       <td>150283</td>
                       <td>31989</td>
                       <td>1383</td> 
                       <td>24649</td>
                       <td>467482</td>
                       <td>16885</td>
                       <td>175639</td>
                       <td>980730</td>
                       <td>248382</td></tr>
      <tr><td>Friday,22-Jan-2016</td><td>39430</td>
                       <td>1558</td>
                       <td>27678</td>
                       <td>533399</td>
                       <td>11899</td> 
                       <td>196797</td>
                       <td>30655</td>
                       <td>1153</td> 
                       <td>22717</td>
                       <td>594675</td>
                       <td>20011</td>
                       <td>221509</td>
                       <td>1232780</td>
                       <td>303026</td></tr>
      <tr><td>Saturday,23-Jan-2016</td><td>38153</td>
                       <td>1491</td>
                       <td>26160</td>
                       <td>334963</td>
                       <td>7329</td> 
                       <td>124363</td>
                       <td>30820</td>
                       <td>1163</td> 
                       <td>22576</td>
                       <td>354819</td>
                       <td>12189</td>
                       <td>137064</td>
                       <td>780927</td>
                       <td>199788</td></tr>
      <tr><td>Sunday,24-Jan-2016</td><td>60251</td>
                       <td>2120</td>
                       <td>40285</td>
                       <td>329813</td>
                       <td>6340</td> 
                       <td>119416</td>
                       <td>48600</td>
                       <td>1671</td> 
                       <td>34742</td>
                       <td>340057</td>
                       <td>11637</td>
                       <td>129721</td>
                       <td>800489</td>
                       <td>202370</td></tr>
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 01-01-2016 to 24-01-2016</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Friday,01-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Saturday,02-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,03-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,04-Jan-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,05-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,06-Jan-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Thursday,07-Jan-2016</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Friday,08-Jan-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Saturday,09-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,10-Jan-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,11-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,12-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,13-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Thursday,14-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Friday,15-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Saturday,16-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,17-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,18-Jan-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,19-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,20-Jan-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Thursday,21-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Friday,22-Jan-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Saturday,23-Jan-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Sunday,24-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="01">
<input type="hidden" name="endday" value="24">
<input type="hidden" name="startmonth" value="01">
<input type="hidden" name="startyear" value="2016">
<input type="hidden" name="endmonth" value="01">
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
    <tr><td>Friday,01-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>166152</td></tr>
    <tr><td>Saturday,02-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>186455</td></tr>
    <tr><td>Sunday,03-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>132674</td></tr>
    <tr><td>Monday,04-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>242622</td></tr>
    <tr><td>Tuesday,05-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>337584</td></tr>
    <tr><td>Wednesday,06-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>296073</td></tr>
    <tr><td>Thursday,07-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>267770</td></tr>
    <tr><td>Friday,08-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>301088</td></tr>
    <tr><td>Saturday,09-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>239553</td></tr>
    <tr><td>Sunday,10-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>147712</td></tr>
    <tr><td>Monday,11-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>276530</td></tr>
    <tr><td>Tuesday,12-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>341409</td></tr>
    <tr><td>Wednesday,13-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>286336</td></tr>
    <tr><td>Thursday,14-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>257300</td></tr>
    <tr><td>Friday,15-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>262124</td></tr>
    <tr><td>Saturday,16-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>198108</td></tr>
    <tr><td>Sunday,17-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>139912</td></tr>
    <tr><td>Monday,18-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>246780</td></tr>
    <tr><td>Tuesday,19-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>308686</td></tr>
    <tr><td>Wednesday,20-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>337394</td></tr>
    <tr><td>Thursday,21-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>248382</td></tr>
    <tr><td>Friday,22-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>303026</td></tr>
    <tr><td>Saturday,23-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>199788</td></tr>
    <tr><td>Sunday,24-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>202370</td></tr>
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