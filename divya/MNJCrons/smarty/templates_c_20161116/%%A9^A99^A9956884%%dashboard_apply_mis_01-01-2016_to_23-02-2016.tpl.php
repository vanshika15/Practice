<?php /* Smarty version 2.6.19, created on 2016-02-24 11:10:10
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_01-01-2016_to_23-02-2016.tpl */ ?>
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
        <select name="endday" value="23">
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
			<option value="23"  selected >23</option>
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
 <tr><td colspan="15" align="center">Apply Online from 01-01-2016 to 23-02-2016</td></tr>
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
      <tr><td>Monday,25-Jan-2016</td><td>48745</td>
                       <td>2162</td>
                       <td>33713</td>
                       <td>422468</td>
                       <td>8898</td> 
                       <td>155712</td>
                       <td>40492</td>
                       <td>1777</td> 
                       <td>28996</td>
                       <td>449283</td>
                       <td>16999</td>
                       <td>172120</td>
                       <td>990824</td>
                       <td>250099</td></tr>
      <tr><td>Tuesday,26-Jan-2016</td><td>64770</td>
                       <td>2057</td>
                       <td>42275</td>
                       <td>426385</td>
                       <td>8386</td> 
                       <td>154690</td>
                       <td>49574</td>
                       <td>1396</td> 
                       <td>34942</td>
                       <td>445833</td>
                       <td>14870</td>
                       <td>167207</td>
                       <td>1013271</td>
                       <td>248681</td></tr>
      <tr><td>Wednesday,27-Jan-2016</td><td>71355</td>
                       <td>2846</td>
                       <td>46598</td>
                       <td>489564</td>
                       <td>10594</td> 
                       <td>173901</td>
                       <td>55361</td>
                       <td>2163</td> 
                       <td>38595</td>
                       <td>543295</td>
                       <td>20132</td>
                       <td>197595</td>
                       <td>1195310</td>
                       <td>284528</td></tr>
      <tr><td>Thursday,28-Jan-2016</td><td>64398</td>
                       <td>2599</td>
                       <td>44262</td>
                       <td>462295</td>
                       <td>9324</td> 
                       <td>174944</td>
                       <td>44586</td>
                       <td>1739</td> 
                       <td>32813</td>
                       <td>513925</td>
                       <td>18203</td>
                       <td>197220</td>
                       <td>1117069</td>
                       <td>288451</td></tr>
      <tr><td>Friday,29-Jan-2016</td><td>41181</td>
                       <td>1546</td>
                       <td>28309</td>
                       <td>473907</td>
                       <td>10951</td> 
                       <td>180954</td>
                       <td>29378</td>
                       <td>990</td> 
                       <td>21904</td>
                       <td>503651</td>
                       <td>19094</td>
                       <td>198529</td>
                       <td>1080698</td>
                       <td>278899</td></tr>
      <tr><td>Saturday,30-Jan-2016</td><td>67450</td>
                       <td>2599</td>
                       <td>46486</td>
                       <td>366233</td>
                       <td>7700</td> 
                       <td>138912</td>
                       <td>47520</td>
                       <td>1699</td> 
                       <td>35753</td>
                       <td>384833</td>
                       <td>14315</td>
                       <td>153395</td>
                       <td>892349</td>
                       <td>236562</td></tr>
      <tr><td>Sunday,31-Jan-2016</td><td>31039</td>
                       <td>1207</td>
                       <td>20919</td>
                       <td>276849</td>
                       <td>5260</td> 
                       <td>100616</td>
                       <td>22843</td>
                       <td>792</td> 
                       <td>16355</td>
                       <td>287808</td>
                       <td>9908</td>
                       <td>108961</td>
                       <td>635706</td>
                       <td>158907</td></tr>
      <tr><td>Monday,01-Feb-2016</td><td>27047</td>
                       <td>1123</td>
                       <td>18421</td>
                       <td>295519</td>
                       <td>6413</td> 
                       <td>112249</td>
                       <td>21967</td>
                       <td>831</td> 
                       <td>15622</td>
                       <td>331758</td>
                       <td>12381</td>
                       <td>127546</td>
                       <td>697039</td>
                       <td>178771</td></tr>
      <tr><td>Tuesday,02-Feb-2016</td><td>101108</td>
                       <td>3303</td>
                       <td>67812</td>
                       <td>683085</td>
                       <td>14627</td> 
                       <td>254829</td>
                       <td>83119</td>
                       <td>2535</td> 
                       <td>58901</td>
                       <td>812300</td>
                       <td>28340</td>
                       <td>296065</td>
                       <td>1728417</td>
                       <td>417074</td></tr>
      <tr><td>Wednesday,03-Feb-2016</td><td>61161</td>
                       <td>2460</td>
                       <td>42602</td>
                       <td>425090</td>
                       <td>8252</td> 
                       <td>161687</td>
                       <td>48938</td>
                       <td>1392</td> 
                       <td>35477</td>
                       <td>513102</td>
                       <td>16723</td>
                       <td>195167</td>
                       <td>1077118</td>
                       <td>277559</td></tr>
      <tr><td>Thursday,04-Feb-2016</td><td>44533</td>
                       <td>1903</td>
                       <td>32499</td>
                       <td>455172</td>
                       <td>9587</td> 
                       <td>173618</td>
                       <td>36857</td>
                       <td>917</td> 
                       <td>27267</td>
                       <td>510532</td>
                       <td>16017</td>
                       <td>197808</td>
                       <td>1075518</td>
                       <td>280125</td></tr>
      <tr><td>Friday,05-Feb-2016</td><td>33737</td>
                       <td>1277</td>
                       <td>24157</td>
                       <td>451825</td>
                       <td>10694</td> 
                       <td>174094</td>
                       <td>28444</td>
                       <td>827</td> 
                       <td>21124</td>
                       <td>522526</td>
                       <td>17713</td>
                       <td>203303</td>
                       <td>1067043</td>
                       <td>276452</td></tr>
      <tr><td>Saturday,06-Feb-2016</td><td>28926</td>
                       <td>1000</td>
                       <td>20778</td>
                       <td>291734</td>
                       <td>7154</td> 
                       <td>110008</td>
                       <td>24451</td>
                       <td>564</td> 
                       <td>18054</td>
                       <td>335065</td>
                       <td>12338</td>
                       <td>130130</td>
                       <td>701232</td>
                       <td>181594</td></tr>
      <tr><td>Sunday,07-Feb-2016</td><td>54203</td>
                       <td>1589</td>
                       <td>37936</td>
                       <td>291570</td>
                       <td>6374</td> 
                       <td>108414</td>
                       <td>47591</td>
                       <td>937</td> 
                       <td>34176</td>
                       <td>340426</td>
                       <td>11203</td>
                       <td>128784</td>
                       <td>753893</td>
                       <td>194816</td></tr>
      <tr><td>Monday,08-Feb-2016</td><td>46063</td>
                       <td>1788</td>
                       <td>32726</td>
                       <td>451670</td>
                       <td>9974</td> 
                       <td>172119</td>
                       <td>42383</td>
                       <td>1086</td> 
                       <td>29917</td>
                       <td>555261</td>
                       <td>17849</td>
                       <td>204584</td>
                       <td>1126074</td>
                       <td>281804</td></tr>
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
                       <td>632435</td>
                       <td>10481</td> 
                       <td>197396</td>
                       <td>25379</td>
                       <td>729</td> 
                       <td>19005</td>
                       <td>682313</td>
                       <td>20706</td>
                       <td>217497</td>
                       <td>1403078</td>
                       <td>289447</td></tr>
      <tr><td>Tuesday,23-Feb-2016</td><td>85448</td>
                       <td>2829</td>
                       <td>57128</td>
                       <td>714252</td>
                       <td>13028</td> 
                       <td>233890</td>
                       <td>73927</td>
                       <td>2268</td> 
                       <td>53011</td>
                       <td>790587</td>
                       <td>25480</td>
                       <td>265885</td>
                       <td>1707819</td>
                       <td>368035</td></tr>
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 01-01-2016 to 23-02-2016</th></tr>
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
     <tr><td>Monday,25-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,26-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,27-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Thursday,28-Jan-2016</td><td>--</td>
                        <td>1</td>
                        <td>1</td></tr>
     <tr><td>Friday,29-Jan-2016</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Saturday,30-Jan-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Sunday,31-Jan-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,01-Feb-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,02-Feb-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,03-Feb-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Thursday,04-Feb-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Friday,05-Feb-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Saturday,06-Feb-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,07-Feb-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,08-Feb-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
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
     <tr><td>Tuesday,23-Feb-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="01">
<input type="hidden" name="endday" value="23">
<input type="hidden" name="startmonth" value="01">
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
    <tr><td>Monday,25-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>250099</td></tr>
    <tr><td>Tuesday,26-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>248681</td></tr>
    <tr><td>Wednesday,27-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>284528</td></tr>
    <tr><td>Thursday,28-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>288451</td></tr>
    <tr><td>Friday,29-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>278899</td></tr>
    <tr><td>Saturday,30-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>236562</td></tr>
    <tr><td>Sunday,31-Jan-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>158907</td></tr>
    <tr><td>Monday,01-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>178771</td></tr>
    <tr><td>Tuesday,02-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>417074</td></tr>
    <tr><td>Wednesday,03-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>277559</td></tr>
    <tr><td>Thursday,04-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>280125</td></tr>
    <tr><td>Friday,05-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>276452</td></tr>
    <tr><td>Saturday,06-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>181594</td></tr>
    <tr><td>Sunday,07-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>194816</td></tr>
    <tr><td>Monday,08-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>281804</td></tr>
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
                       <td>289447</td></tr>
    <tr><td>Tuesday,23-Feb-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>368035</td></tr>
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