<?php /* Smarty version 2.6.19, created on 2017-05-23 18:39:37
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_01-04-2016_to_30-04-2016.tpl */ ?>
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
		<option value="2017" >2017</option>
		<option value="2018" >2018</option>
		<option value="2019" >2019</option>
        </select>
        </font></b></TD>
      <TD width="46"> 
        <div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">To</font></b></div>
      </TD>
      <TD width="46"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endday" value="30">
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
			<option value="30"  selected >30</option>
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
                <option value="2017" >2017</option>
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
 <tr><td colspan="15" align="center">Apply Online from 01-04-2016 to 30-04-2016</td></tr>
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
    <tr><td>Friday,01-Apr-2016</td><td>46880</td>
                       <td>1652</td>
                       <td>32207</td>
                       <td>484036</td>
                       <td>8845</td> 
                       <td>163359</td>
                       <td>36950</td>
                       <td>1264</td> 
                       <td>27902</td>
                       <td>516125</td>
                       <td>13858</td>
                       <td>182696</td>
                       <td>1109610</td>
                       <td>252610</td></tr>
      <tr><td>Saturday,02-Apr-2016</td><td>49188</td>
                       <td>1932</td>
                       <td>33396</td>
                       <td>557943</td>
                       <td>9228</td> 
                       <td>176163</td>
                       <td>37007</td>
                       <td>1417</td> 
                       <td>27402</td>
                       <td>563342</td>
                       <td>14505</td>
                       <td>191236</td>
                       <td>1234562</td>
                       <td>265092</td></tr>
      <tr><td>Sunday,03-Apr-2016</td><td>11300</td>
                       <td>496</td>
                       <td>7483</td>
                       <td>362113</td>
                       <td>5339</td> 
                       <td>111997</td>
                       <td>9114</td>
                       <td>375</td> 
                       <td>6416</td>
                       <td>353683</td>
                       <td>8230</td>
                       <td>118335</td>
                       <td>750650</td>
                       <td>155996</td></tr>
      <tr><td>Monday,04-Apr-2016</td><td>33025</td>
                       <td>1340</td>
                       <td>24025</td>
                       <td>423102</td>
                       <td>6732</td> 
                       <td>143112</td>
                       <td>35455</td>
                       <td>1016</td> 
                       <td>25797</td>
                       <td>443008</td>
                       <td>12019</td>
                       <td>157919</td>
                       <td>955697</td>
                       <td>220524</td></tr>
      <tr><td>Tuesday,05-Apr-2016</td><td>55478</td>
                       <td>1788</td>
                       <td>39031</td>
                       <td>743406</td>
                       <td>12818</td> 
                       <td>241920</td>
                       <td>54889</td>
                       <td>1592</td> 
                       <td>39751</td>
                       <td>802413</td>
                       <td>22282</td>
                       <td>271660</td>
                       <td>1694666</td>
                       <td>365786</td></tr>
      <tr><td>Wednesday,06-Apr-2016</td><td>68613</td>
                       <td>2298</td>
                       <td>46026</td>
                       <td>689079</td>
                       <td>11366</td> 
                       <td>219209</td>
                       <td>57945</td>
                       <td>2009</td> 
                       <td>42103</td>
                       <td>741074</td>
                       <td>19771</td>
                       <td>246472</td>
                       <td>1592155</td>
                       <td>337592</td></tr>
      <tr><td>Thursday,07-Apr-2016</td><td>36343</td>
                       <td>1507</td>
                       <td>25196</td>
                       <td>535551</td>
                       <td>9364</td> 
                       <td>177083</td>
                       <td>27453</td>
                       <td>961</td> 
                       <td>20348</td>
                       <td>576276</td>
                       <td>15539</td>
                       <td>197017</td>
                       <td>1202994</td>
                       <td>265281</td></tr>
      <tr><td>Friday,08-Apr-2016</td><td>59868</td>
                       <td>1715</td>
                       <td>39855</td>
                       <td>446140</td>
                       <td>8723</td> 
                       <td>149940</td>
                       <td>51880</td>
                       <td>1388</td> 
                       <td>37433</td>
                       <td>493380</td>
                       <td>13539</td>
                       <td>171041</td>
                       <td>1076633</td>
                       <td>243638</td></tr>
      <tr><td>Saturday,09-Apr-2016</td><td>47445</td>
                       <td>1810</td>
                       <td>33189</td>
                       <td>437170</td>
                       <td>7464</td> 
                       <td>141524</td>
                       <td>42642</td>
                       <td>1429</td> 
                       <td>31343</td>
                       <td>466934</td>
                       <td>12425</td>
                       <td>158315</td>
                       <td>1017319</td>
                       <td>223320</td></tr>
      <tr><td>Sunday,10-Apr-2016</td><td>18138</td>
                       <td>680</td>
                       <td>12504</td>
                       <td>375248</td>
                       <td>5829</td> 
                       <td>117394</td>
                       <td>17186</td>
                       <td>582</td> 
                       <td>12324</td>
                       <td>399402</td>
                       <td>9805</td>
                       <td>130430</td>
                       <td>826870</td>
                       <td>171043</td></tr>
      <tr><td>Monday,11-Apr-2016</td><td>38670</td>
                       <td>1354</td>
                       <td>26939</td>
                       <td>595810</td>
                       <td>9509</td> 
                       <td>194077</td>
                       <td>35517</td>
                       <td>1072</td> 
                       <td>25798</td>
                       <td>671251</td>
                       <td>16641</td>
                       <td>221454</td>
                       <td>1369824</td>
                       <td>290580</td></tr>
      <tr><td>Tuesday,12-Apr-2016</td><td>62834</td>
                       <td>2376</td>
                       <td>43193</td>
                       <td>590517</td>
                       <td>11195</td> 
                       <td>209157</td>
                       <td>56604</td>
                       <td>1991</td> 
                       <td>40946</td>
                       <td>667008</td>
                       <td>17549</td>
                       <td>234812</td>
                       <td>1410074</td>
                       <td>325618</td></tr>
      <tr><td>Wednesday,13-Apr-2016</td><td>46848</td>
                       <td>1758</td>
                       <td>32887</td>
                       <td>540640</td>
                       <td>9058</td> 
                       <td>180907</td>
                       <td>39521</td>
                       <td>1400</td> 
                       <td>29505</td>
                       <td>632025</td>
                       <td>14497</td>
                       <td>210632</td>
                       <td>1285747</td>
                       <td>280106</td></tr>
      <tr><td>Thursday,14-Apr-2016</td><td>18414</td>
                       <td>804</td>
                       <td>12787</td>
                       <td>519904</td>
                       <td>8648</td> 
                       <td>172321</td>
                       <td>15291</td>
                       <td>590</td> 
                       <td>11335</td>
                       <td>611718</td>
                       <td>14386</td>
                       <td>202249</td>
                       <td>1189755</td>
                       <td>253450</td></tr>
      <tr><td>Friday,15-Apr-2016</td><td>60505</td>
                       <td>1956</td>
                       <td>40733</td>
                       <td>547286</td>
                       <td>9701</td> 
                       <td>184663</td>
                       <td>55783</td>
                       <td>1794</td> 
                       <td>39910</td>
                       <td>604090</td>
                       <td>14653</td>
                       <td>208219</td>
                       <td>1295768</td>
                       <td>289778</td></tr>
      <tr><td>Saturday,16-Apr-2016</td><td>25016</td>
                       <td>1137</td>
                       <td>17174</td>
                       <td>410106</td>
                       <td>6737</td> 
                       <td>132657</td>
                       <td>22712</td>
                       <td>1013</td> 
                       <td>16421</td>
                       <td>417360</td>
                       <td>10102</td>
                       <td>144867</td>
                       <td>894183</td>
                       <td>196652</td></tr>
      <tr><td>Sunday,17-Apr-2016</td><td>9206</td>
                       <td>435</td>
                       <td>6141</td>
                       <td>350482</td>
                       <td>4912</td> 
                       <td>112142</td>
                       <td>8787</td>
                       <td>339</td> 
                       <td>5911</td>
                       <td>351453</td>
                       <td>7753</td>
                       <td>119214</td>
                       <td>733367</td>
                       <td>156675</td></tr>
      <tr><td>Monday,18-Apr-2016</td><td>30573</td>
                       <td>985</td>
                       <td>21026</td>
                       <td>608177</td>
                       <td>9928</td> 
                       <td>199887</td>
                       <td>24270</td>
                       <td>748</td> 
                       <td>17828</td>
                       <td>653185</td>
                       <td>16343</td>
                       <td>222638</td>
                       <td>1344209</td>
                       <td>289385</td></tr>
      <tr><td>Tuesday,19-Apr-2016</td><td>76985</td>
                       <td>2412</td>
                       <td>51596</td>
                       <td>618905</td>
                       <td>11214</td> 
                       <td>208065</td>
                       <td>60860</td>
                       <td>1837</td> 
                       <td>44503</td>
                       <td>662005</td>
                       <td>17990</td>
                       <td>232576</td>
                       <td>1452208</td>
                       <td>323180</td></tr>
      <tr><td>Wednesday,20-Apr-2016</td><td>69456</td>
                       <td>2307</td>
                       <td>46222</td>
                       <td>625438</td>
                       <td>10467</td> 
                       <td>207043</td>
                       <td>57202</td>
                       <td>1845</td> 
                       <td>41757</td>
                       <td>675070</td>
                       <td>17795</td>
                       <td>233634</td>
                       <td>1459580</td>
                       <td>321454</td></tr>
      <tr><td>Thursday,21-Apr-2016</td><td>35893</td>
                       <td>1471</td>
                       <td>24792</td>
                       <td>549705</td>
                       <td>9228</td> 
                       <td>184050</td>
                       <td>30059</td>
                       <td>1050</td> 
                       <td>22543</td>
                       <td>580658</td>
                       <td>15737</td>
                       <td>204785</td>
                       <td>1223801</td>
                       <td>275550</td></tr>
      <tr><td>Friday,22-Apr-2016</td><td>16057</td>
                       <td>682</td>
                       <td>11351</td>
                       <td>451643</td>
                       <td>8829</td> 
                       <td>156837</td>
                       <td>12651</td>
                       <td>520</td> 
                       <td>9756</td>
                       <td>470226</td>
                       <td>14305</td>
                       <td>173352</td>
                       <td>974913</td>
                       <td>228327</td></tr>
      <tr><td>Saturday,23-Apr-2016</td><td>25829</td>
                       <td>755</td>
                       <td>17702</td>
                       <td>365620</td>
                       <td>6387</td> 
                       <td>124315</td>
                       <td>19007</td>
                       <td>518</td> 
                       <td>14471</td>
                       <td>378107</td>
                       <td>10801</td>
                       <td>137603</td>
                       <td>807024</td>
                       <td>188291</td></tr>
      <tr><td>Sunday,24-Apr-2016</td><td>40257</td>
                       <td>1225</td>
                       <td>27266</td>
                       <td>363518</td>
                       <td>5869</td> 
                       <td>121203</td>
                       <td>34047</td>
                       <td>1044</td> 
                       <td>25123</td>
                       <td>385333</td>
                       <td>9894</td>
                       <td>137277</td>
                       <td>841187</td>
                       <td>192473</td></tr>
      <tr><td>Monday,25-Apr-2016</td><td>35644</td>
                       <td>1375</td>
                       <td>24179</td>
                       <td>488595</td>
                       <td>8159</td> 
                       <td>164404</td>
                       <td>31430</td>
                       <td>1140</td> 
                       <td>22255</td>
                       <td>571783</td>
                       <td>14610</td>
                       <td>193933</td>
                       <td>1152736</td>
                       <td>253334</td></tr>
      <tr><td>Tuesday,26-Apr-2016</td><td>60509</td>
                       <td>1923</td>
                       <td>40452</td>
                       <td>519422</td>
                       <td>9142</td> 
                       <td>179508</td>
                       <td>52293</td>
                       <td>1490</td> 
                       <td>37196</td>
                       <td>620231</td>
                       <td>16011</td>
                       <td>215043</td>
                       <td>1281021</td>
                       <td>291573</td></tr>
      <tr><td>Wednesday,27-Apr-2016</td><td>69480</td>
                       <td>2419</td>
                       <td>46779</td>
                       <td>545988</td>
                       <td>9381</td> 
                       <td>191015</td>
                       <td>65536</td>
                       <td>2130</td> 
                       <td>46262</td>
                       <td>643201</td>
                       <td>16268</td>
                       <td>226316</td>
                       <td>1354403</td>
                       <td>312625</td></tr>
      <tr><td>Thursday,28-Apr-2016</td><td>61938</td>
                       <td>2436</td>
                       <td>42426</td>
                       <td>507609</td>
                       <td>8625</td> 
                       <td>179326</td>
                       <td>61961</td>
                       <td>2249</td> 
                       <td>43188</td>
                       <td>590877</td>
                       <td>15128</td>
                       <td>211957</td>
                       <td>1250823</td>
                       <td>294431</td></tr>
      <tr><td>Friday,29-Apr-2016</td><td>70890</td>
                       <td>2627</td>
                       <td>48191</td>
                       <td>496057</td>
                       <td>8858</td> 
                       <td>179958</td>
                       <td>72729</td>
                       <td>2636</td> 
                       <td>50489</td>
                       <td>577232</td>
                       <td>15891</td>
                       <td>214706</td>
                       <td>1246920</td>
                       <td>302268</td></tr>
      <tr><td>Saturday,30-Apr-2016</td><td>54324</td>
                       <td>2127</td>
                       <td>37313</td>
                       <td>366654</td>
                       <td>6402</td> 
                       <td>133715</td>
                       <td>54842</td>
                       <td>2061</td> 
                       <td>38797</td>
                       <td>410449</td>
                       <td>10756</td>
                       <td>155303</td>
                       <td>907615</td>
                       <td>227836</td></tr>
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 01-04-2016 to 30-04-2016</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Friday,01-Apr-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Saturday,02-Apr-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,03-Apr-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,04-Apr-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,05-Apr-2016</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,06-Apr-2016</td><td>--</td>
                        <td>--</td>
                        <td>1</td></tr>
     <tr><td>Thursday,07-Apr-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Friday,08-Apr-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Saturday,09-Apr-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,10-Apr-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Monday,11-Apr-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,12-Apr-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,13-Apr-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Thursday,14-Apr-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Friday,15-Apr-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Saturday,16-Apr-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,17-Apr-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,18-Apr-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,19-Apr-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,20-Apr-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Thursday,21-Apr-2016</td><td>--</td>
                        <td>5</td>
                        <td>--</td></tr>
     <tr><td>Friday,22-Apr-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Saturday,23-Apr-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,24-Apr-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,25-Apr-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,26-Apr-2016</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,27-Apr-2016</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Thursday,28-Apr-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Friday,29-Apr-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Saturday,30-Apr-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="01">
<input type="hidden" name="endday" value="30">
<input type="hidden" name="startmonth" value="04">
<input type="hidden" name="startyear" value="2016">
<input type="hidden" name="endmonth" value="04">
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
    <tr><td>Friday,01-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>252610</td></tr>
    <tr><td>Saturday,02-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>265092</td></tr>
    <tr><td>Sunday,03-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>155996</td></tr>
    <tr><td>Monday,04-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>220524</td></tr>
    <tr><td>Tuesday,05-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>365786</td></tr>
    <tr><td>Wednesday,06-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>337592</td></tr>
    <tr><td>Thursday,07-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>265281</td></tr>
    <tr><td>Friday,08-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>243638</td></tr>
    <tr><td>Saturday,09-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>223320</td></tr>
    <tr><td>Sunday,10-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>171043</td></tr>
    <tr><td>Monday,11-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>290580</td></tr>
    <tr><td>Tuesday,12-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>325618</td></tr>
    <tr><td>Wednesday,13-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>280106</td></tr>
    <tr><td>Thursday,14-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>253450</td></tr>
    <tr><td>Friday,15-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>289778</td></tr>
    <tr><td>Saturday,16-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>196652</td></tr>
    <tr><td>Sunday,17-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>156675</td></tr>
    <tr><td>Monday,18-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>289385</td></tr>
    <tr><td>Tuesday,19-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>323180</td></tr>
    <tr><td>Wednesday,20-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>321454</td></tr>
    <tr><td>Thursday,21-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>275550</td></tr>
    <tr><td>Friday,22-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>228327</td></tr>
    <tr><td>Saturday,23-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>188291</td></tr>
    <tr><td>Sunday,24-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>192473</td></tr>
    <tr><td>Monday,25-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>253334</td></tr>
    <tr><td>Tuesday,26-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>291573</td></tr>
    <tr><td>Wednesday,27-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>312625</td></tr>
    <tr><td>Thursday,28-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>294431</td></tr>
    <tr><td>Friday,29-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>302268</td></tr>
    <tr><td>Saturday,30-Apr-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>227836</td></tr>
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