<?php /* Smarty version 2.6.19, created on 2016-01-04 17:18:17
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_01-12-2015_to_03-01-2016.tpl */ ?>
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
        <select name="startmonth" value="12">
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
        <select name="endday" value="03">
		          <option value="01" >1</option>
			<option value="02" >2</option>
			<option value="03"  selected >3</option>
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
 <tr><td colspan="15" align="center">Apply Online from 01-12-2015 to 03-01-2016</td></tr>
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
    <tr><td>Tuesday,01-Dec-2015</td><td>85350</td>
                       <td>2392</td>
                       <td>56606</td>
                       <td>503437</td>
                       <td>9817</td> 
                       <td>183865</td>
                       <td>81608</td>
                       <td>2196</td> 
                       <td>54740</td>
                       <td>580141</td>
                       <td>19856</td>
                       <td>211902</td>
                       <td>1284797</td>
                       <td>306705</td></tr>
      <tr><td>Wednesday,02-Dec-2015</td><td>41197</td>
                       <td>1375</td>
                       <td>28373</td>
                       <td>369716</td>
                       <td>7224</td> 
                       <td>135278</td>
                       <td>37782</td>
                       <td>1287</td> 
                       <td>26601</td>
                       <td>438240</td>
                       <td>14660</td>
                       <td>160467</td>
                       <td>911481</td>
                       <td>222367</td></tr>
      <tr><td>Thursday,03-Dec-2015</td><td>34889</td>
                       <td>1204</td>
                       <td>25434</td>
                       <td>438520</td>
                       <td>8418</td> 
                       <td>161402</td>
                       <td>31277</td>
                       <td>1119</td> 
                       <td>23481</td>
                       <td>489666</td>
                       <td>15513</td>
                       <td>181411</td>
                       <td>1020606</td>
                       <td>252268</td></tr>
      <tr><td>Friday,04-Dec-2015</td><td>57356</td>
                       <td>1486</td>
                       <td>38888</td>
                       <td>445088</td>
                       <td>8951</td> 
                       <td>165283</td>
                       <td>55837</td>
                       <td>1264</td> 
                       <td>38078</td>
                       <td>482431</td>
                       <td>17048</td>
                       <td>184058</td>
                       <td>1069461</td>
                       <td>266366</td></tr>
      <tr><td>Saturday,05-Dec-2015</td><td>43446</td>
                       <td>1421</td>
                       <td>29512</td>
                       <td>309413</td>
                       <td>6140</td> 
                       <td>113757</td>
                       <td>43184</td>
                       <td>1229</td> 
                       <td>29080</td>
                       <td>342062</td>
                       <td>12033</td>
                       <td>128463</td>
                       <td>758928</td>
                       <td>187835</td></tr>
      <tr><td>Sunday,06-Dec-2015</td><td>14949</td>
                       <td>459</td>
                       <td>9832</td>
                       <td>249705</td>
                       <td>4399</td> 
                       <td>86583</td>
                       <td>15003</td>
                       <td>388</td> 
                       <td>9763</td>
                       <td>282076</td>
                       <td>8917</td>
                       <td>99865</td>
                       <td>575896</td>
                       <td>130767</td></tr>
      <tr><td>Monday,07-Dec-2015</td><td>35970</td>
                       <td>1055</td>
                       <td>25358</td>
                       <td>441586</td>
                       <td>8716</td> 
                       <td>159925</td>
                       <td>35041</td>
                       <td>852</td> 
                       <td>24365</td>
                       <td>528133</td>
                       <td>17735</td>
                       <td>189234</td>
                       <td>1069088</td>
                       <td>251736</td></tr>
      <tr><td>Tuesday,08-Dec-2015</td><td>73863</td>
                       <td>2172</td>
                       <td>49596</td>
                       <td>530667</td>
                       <td>10756</td> 
                       <td>194276</td>
                       <td>71927</td>
                       <td>1824</td> 
                       <td>48658</td>
                       <td>633102</td>
                       <td>22145</td>
                       <td>229398</td>
                       <td>1346456</td>
                       <td>314210</td></tr>
      <tr><td>Wednesday,09-Dec-2015</td><td>50310</td>
                       <td>1590</td>
                       <td>34663</td>
                       <td>441829</td>
                       <td>7979</td> 
                       <td>157329</td>
                       <td>52418</td>
                       <td>1567</td> 
                       <td>35810</td>
                       <td>533881</td>
                       <td>17234</td>
                       <td>191185</td>
                       <td>1106808</td>
                       <td>258915</td></tr>
      <tr><td>Thursday,10-Dec-2015</td><td>29908</td>
                       <td>1034</td>
                       <td>21732</td>
                       <td>411183</td>
                       <td>7536</td> 
                       <td>149305</td>
                       <td>32384</td>
                       <td>1091</td> 
                       <td>23105</td>
                       <td>498476</td>
                       <td>16172</td>
                       <td>180973</td>
                       <td>997784</td>
                       <td>239533</td></tr>
      <tr><td>Friday,11-Dec-2015</td><td>69052</td>
                       <td>1843</td>
                       <td>46000</td>
                       <td>450877</td>
                       <td>9129</td> 
                       <td>169318</td>
                       <td>65443</td>
                       <td>1598</td> 
                       <td>44756</td>
                       <td>520924</td>
                       <td>18350</td>
                       <td>196281</td>
                       <td>1137216</td>
                       <td>280478</td></tr>
      <tr><td>Saturday,12-Dec-2015</td><td>30773</td>
                       <td>916</td>
                       <td>21037</td>
                       <td>318065</td>
                       <td>6744</td> 
                       <td>116425</td>
                       <td>28466</td>
                       <td>870</td> 
                       <td>19859</td>
                       <td>368181</td>
                       <td>13248</td>
                       <td>136707</td>
                       <td>767263</td>
                       <td>186036</td></tr>
      <tr><td>Sunday,13-Dec-2015</td><td>10951</td>
                       <td>321</td>
                       <td>7167</td>
                       <td>273711</td>
                       <td>4945</td> 
                       <td>97103</td>
                       <td>10669</td>
                       <td>300</td> 
                       <td>7005</td>
                       <td>325480</td>
                       <td>10473</td>
                       <td>115698</td>
                       <td>636850</td>
                       <td>147034</td></tr>
      <tr><td>Monday,14-Dec-2015</td><td>28359</td>
                       <td>824</td>
                       <td>20454</td>
                       <td>464708</td>
                       <td>8832</td> 
                       <td>168928</td>
                       <td>27184</td>
                       <td>786</td> 
                       <td>19875</td>
                       <td>567951</td>
                       <td>18613</td>
                       <td>202103</td>
                       <td>1117257</td>
                       <td>264339</td></tr>
      <tr><td>Tuesday,15-Dec-2015</td><td>39736</td>
                       <td>1069</td>
                       <td>28174</td>
                       <td>517947</td>
                       <td>10404</td> 
                       <td>189151</td>
                       <td>38719</td>
                       <td>1038</td> 
                       <td>27901</td>
                       <td>589927</td>
                       <td>19322</td>
                       <td>215241</td>
                       <td>1218162</td>
                       <td>291319</td></tr>
      <tr><td>Wednesday,16-Dec-2015</td><td>70694</td>
                       <td>2141</td>
                       <td>47651</td>
                       <td>450010</td>
                       <td>8677</td> 
                       <td>161910</td>
                       <td>68408</td>
                       <td>2086</td> 
                       <td>46961</td>
                       <td>524507</td>
                       <td>20577</td>
                       <td>193330</td>
                       <td>1147100</td>
                       <td>273912</td></tr>
      <tr><td>Thursday,17-Dec-2015</td><td>25956</td>
                       <td>978</td>
                       <td>18403</td>
                       <td>446348</td>
                       <td>8216</td> 
                       <td>159245</td>
                       <td>23073</td>
                       <td>793</td> 
                       <td>16657</td>
                       <td>510333</td>
                       <td>18206</td>
                       <td>185655</td>
                       <td>1033903</td>
                       <td>245036</td></tr>
      <tr><td>Friday,18-Dec-2015</td><td>71955</td>
                       <td>1707</td>
                       <td>46146</td>
                       <td>500344</td>
                       <td>9988</td> 
                       <td>182344</td>
                       <td>65944</td>
                       <td>1544</td> 
                       <td>43715</td>
                       <td>540394</td>
                       <td>18272</td>
                       <td>206016</td>
                       <td>1210148</td>
                       <td>294945</td></tr>
      <tr><td>Saturday,19-Dec-2015</td><td>53593</td>
                       <td>1578</td>
                       <td>33757</td>
                       <td>348664</td>
                       <td>6460</td> 
                       <td>123390</td>
                       <td>49501</td>
                       <td>1518</td> 
                       <td>32265</td>
                       <td>371883</td>
                       <td>13063</td>
                       <td>141137</td>
                       <td>846260</td>
                       <td>205299</td></tr>
      <tr><td>Sunday,20-Dec-2015</td><td>15775</td>
                       <td>462</td>
                       <td>9679</td>
                       <td>261747</td>
                       <td>4374</td> 
                       <td>89087</td>
                       <td>15015</td>
                       <td>445</td> 
                       <td>9382</td>
                       <td>280928</td>
                       <td>9387</td>
                       <td>101548</td>
                       <td>588133</td>
                       <td>132576</td></tr>
      <tr><td>Monday,21-Dec-2015</td><td>32054</td>
                       <td>994</td>
                       <td>22461</td>
                       <td>465326</td>
                       <td>8802</td> 
                       <td>163811</td>
                       <td>31326</td>
                       <td>870</td> 
                       <td>21956</td>
                       <td>508567</td>
                       <td>17260</td>
                       <td>185728</td>
                       <td>1065199</td>
                       <td>249938</td></tr>
      <tr><td>Tuesday,22-Dec-2015</td><td>44703</td>
                       <td>1234</td>
                       <td>30330</td>
                       <td>494121</td>
                       <td>10153</td> 
                       <td>176950</td>
                       <td>41834</td>
                       <td>1172</td> 
                       <td>29441</td>
                       <td>535388</td>
                       <td>20570</td>
                       <td>200562</td>
                       <td>1149175</td>
                       <td>273823</td></tr>
      <tr><td>Wednesday,23-Dec-2015</td><td>69912</td>
                       <td>2043</td>
                       <td>46043</td>
                       <td>413105</td>
                       <td>7538</td> 
                       <td>147980</td>
                       <td>60650</td>
                       <td>1894</td> 
                       <td>41820</td>
                       <td>456827</td>
                       <td>17079</td>
                       <td>173282</td>
                       <td>1029048</td>
                       <td>250866</td></tr>
      <tr><td>Thursday,24-Dec-2015</td><td>33344</td>
                       <td>1056</td>
                       <td>23798</td>
                       <td>374772</td>
                       <td>7225</td> 
                       <td>138429</td>
                       <td>27869</td>
                       <td>909</td> 
                       <td>20679</td>
                       <td>420989</td>
                       <td>16900</td>
                       <td>161086</td>
                       <td>883064</td>
                       <td>219648</td></tr>
      <tr><td>Friday,25-Dec-2015</td><td>58364</td>
                       <td>1320</td>
                       <td>37714</td>
                       <td>361967</td>
                       <td>7276</td> 
                       <td>134576</td>
                       <td>52674</td>
                       <td>1098</td> 
                       <td>35564</td>
                       <td>387112</td>
                       <td>15294</td>
                       <td>150148</td>
                       <td>885105</td>
                       <td>218569</td></tr>
      <tr><td>Saturday,26-Dec-2015</td><td>49842</td>
                       <td>1474</td>
                       <td>32019</td>
                       <td>304418</td>
                       <td>6007</td> 
                       <td>110681</td>
                       <td>44031</td>
                       <td>1243</td> 
                       <td>29797</td>
                       <td>318376</td>
                       <td>13086</td>
                       <td>123359</td>
                       <td>738477</td>
                       <td>182367</td></tr>
      <tr><td>Sunday,27-Dec-2015</td><td>16435</td>
                       <td>527</td>
                       <td>10199</td>
                       <td>249708</td>
                       <td>4448</td> 
                       <td>85954</td>
                       <td>14799</td>
                       <td>415</td> 
                       <td>9547</td>
                       <td>250460</td>
                       <td>9207</td>
                       <td>92453</td>
                       <td>545999</td>
                       <td>127704</td></tr>
      <tr><td>Monday,28-Dec-2015</td><td>34588</td>
                       <td>1124</td>
                       <td>23898</td>
                       <td>393933</td>
                       <td>7591</td> 
                       <td>138092</td>
                       <td>33690</td>
                       <td>940</td> 
                       <td>23355</td>
                       <td>432254</td>
                       <td>16485</td>
                       <td>159328</td>
                       <td>920605</td>
                       <td>219142</td></tr>
      <tr><td>Tuesday,29-Dec-2015</td><td>47812</td>
                       <td>1443</td>
                       <td>32352</td>
                       <td>536085</td>
                       <td>12104</td> 
                       <td>191837</td>
                       <td>45935</td>
                       <td>1263</td> 
                       <td>32409</td>
                       <td>571927</td>
                       <td>23934</td>
                       <td>215802</td>
                       <td>1240503</td>
                       <td>296912</td></tr>
      <tr><td>Wednesday,30-Dec-2015</td><td>58243</td>
                       <td>1872</td>
                       <td>39522</td>
                       <td>412364</td>
                       <td>8650</td> 
                       <td>148923</td>
                       <td>52199</td>
                       <td>1738</td> 
                       <td>37073</td>
                       <td>445490</td>
                       <td>17028</td>
                       <td>170476</td>
                       <td>997584</td>
                       <td>248256</td></tr>
      <tr><td>Thursday,31-Dec-2015</td><td>32592</td>
                       <td>1185</td>
                       <td>23676</td>
                       <td>285232</td>
                       <td>5652</td> 
                       <td>104599</td>
                       <td>27557</td>
                       <td>954</td> 
                       <td>20723</td>
                       <td>301521</td>
                       <td>11487</td>
                       <td>118731</td>
                       <td>666180</td>
                       <td>174483</td></tr>
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
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 01-12-2015 to 03-01-2016</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Tuesday,01-Dec-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,02-Dec-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Thursday,03-Dec-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Friday,04-Dec-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Saturday,05-Dec-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Sunday,06-Dec-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,07-Dec-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,08-Dec-2015</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,09-Dec-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Thursday,10-Dec-2015</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Friday,11-Dec-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Saturday,12-Dec-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Sunday,13-Dec-2015</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Monday,14-Dec-2015</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,15-Dec-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,16-Dec-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Thursday,17-Dec-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Friday,18-Dec-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Saturday,19-Dec-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Sunday,20-Dec-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,21-Dec-2015</td><td>--</td>
                        <td>4</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,22-Dec-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,23-Dec-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Thursday,24-Dec-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Friday,25-Dec-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Saturday,26-Dec-2015</td><td>--</td>
                        <td>5</td>
                        <td>--</td></tr>
     <tr><td>Sunday,27-Dec-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,28-Dec-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,29-Dec-2015</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,30-Dec-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Thursday,31-Dec-2015</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Friday,01-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Saturday,02-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,03-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="01">
<input type="hidden" name="endday" value="03">
<input type="hidden" name="startmonth" value="12">
<input type="hidden" name="startyear" value="2015">
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
    <tr><td>Tuesday,01-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>306705</td></tr>
    <tr><td>Wednesday,02-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>222367</td></tr>
    <tr><td>Thursday,03-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>252268</td></tr>
    <tr><td>Friday,04-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>266366</td></tr>
    <tr><td>Saturday,05-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>187835</td></tr>
    <tr><td>Sunday,06-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>130767</td></tr>
    <tr><td>Monday,07-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>251736</td></tr>
    <tr><td>Tuesday,08-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>314210</td></tr>
    <tr><td>Wednesday,09-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>258915</td></tr>
    <tr><td>Thursday,10-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>239533</td></tr>
    <tr><td>Friday,11-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>280478</td></tr>
    <tr><td>Saturday,12-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>186036</td></tr>
    <tr><td>Sunday,13-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>147034</td></tr>
    <tr><td>Monday,14-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>264339</td></tr>
    <tr><td>Tuesday,15-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>291319</td></tr>
    <tr><td>Wednesday,16-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>273912</td></tr>
    <tr><td>Thursday,17-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>245036</td></tr>
    <tr><td>Friday,18-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>294945</td></tr>
    <tr><td>Saturday,19-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>205299</td></tr>
    <tr><td>Sunday,20-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>132576</td></tr>
    <tr><td>Monday,21-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>249938</td></tr>
    <tr><td>Tuesday,22-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>273823</td></tr>
    <tr><td>Wednesday,23-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>250866</td></tr>
    <tr><td>Thursday,24-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>219648</td></tr>
    <tr><td>Friday,25-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>218569</td></tr>
    <tr><td>Saturday,26-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>182367</td></tr>
    <tr><td>Sunday,27-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>127704</td></tr>
    <tr><td>Monday,28-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>219142</td></tr>
    <tr><td>Tuesday,29-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>296912</td></tr>
    <tr><td>Wednesday,30-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>248256</td></tr>
    <tr><td>Thursday,31-Dec-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>174483</td></tr>
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