<?php /* Smarty version 2.6.19, created on 2014-07-21 10:36:54
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_01-07-2014_to_20-07-2014.tpl */ ?>
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
        <select name="startmonth" value="07">
           <option value="01" >JAN</option>
	   <option value="02" >FEB</option>
	   <option value="03" >MAR</option>
	   <option value="04" >APR</option>
	   <option value="05" >MAY</option>
	   <option value="06" >JUN</option>
	   <option value="07"  selected >JUL</option>
	   <option value="08" >AUG</option>
	   <option value="09" >SEP</option>
	   <option value="10" >OCT</option>
	   <option value="11" >NOV</option>
	   <option value="12" >DEC</option>
        </select>
        </font></b></TD>
      <TD width="57"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="startyear" value="2014">
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
		<option value="2014"  selected >2014</option>
        </select>
        </font></b></TD>
      <TD width="46"> 
        <div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">To</font></b></div>
      </TD>
      <TD width="46"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endday" value="20">
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
			<option value="20"  selected >20</option>
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
        <select name="endmonth" value="07">
           <option value="01" >JAN</option>
	   <option value="02" >FEB</option>
	   <option value="03" >MAR</option>
	   <option value="04" >APR</option>
	   <option value="05" >MAY</option>
	   <option value="06" >JUN</option>
	   <option value="07"  selected >JUL</option>
	   <option value="08" >AUG</option>
	   <option value="09" >SEP</option>
	   <option value="10" >OCT</option>
	   <option value="11" >NOV</option>
	   <option value="12" >DEC</option>
        </select>
        </font></b></TD>
      <TD width="57"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endyear" value="2014">
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
		<option value="2014"  selected >2014</option>
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
 <tr><td colspan="15" align="center">Apply Online from 01-07-2014 to 20-07-2014</td></tr>
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
    <tr><td>Tuesday,01-Jul-2014</td><td>228260</td>
                       <td>4851</td>
                       <td>81524</td>
                       <td>363573</td>
                       <td>8842</td> 
                       <td>147094</td>
                       <td>143297</td>
                       <td>2567</td> 
                       <td>62429</td>
                       <td>258540</td>
                       <td>7935</td>
                       <td>126801</td>
                       <td>1017865</td>
                       <td>254780</td></tr>
      <tr><td>Wednesday,02-Jul-2014</td><td>150571</td>
                       <td>3276</td>
                       <td>53749</td>
                       <td>264629</td>
                       <td>6083</td> 
                       <td>102095</td>
                       <td>90685</td>
                       <td>1593</td> 
                       <td>39518</td>
                       <td>185954</td>
                       <td>5955</td>
                       <td>89412</td>
                       <td>708746</td>
                       <td>179038</td></tr>
      <tr><td>Thursday,03-Jul-2014</td><td>119710</td>
                       <td>3141</td>
                       <td>44320</td>
                       <td>249555</td>
                       <td>6178</td> 
                       <td>96826</td>
                       <td>68886</td>
                       <td>1449</td> 
                       <td>31513</td>
                       <td>176036</td>
                       <td>6136</td>
                       <td>85168</td>
                       <td>631091</td>
                       <td>165266</td></tr>
      <tr><td>Friday,04-Jul-2014</td><td>98523</td>
                       <td>2146</td>
                       <td>34300</td>
                       <td>280997</td>
                       <td>7666</td> 
                       <td>115641</td>
                       <td>56929</td>
                       <td>957</td> 
                       <td>25146</td>
                       <td>191231</td>
                       <td>6543</td>
                       <td>97313</td>
                       <td>644992</td>
                       <td>176210</td></tr>
      <tr><td>Saturday,05-Jul-2014</td><td>92853</td>
                       <td>2355</td>
                       <td>34485</td>
                       <td>209422</td>
                       <td>5964</td> 
                       <td>85993</td>
                       <td>52182</td>
                       <td>1079</td> 
                       <td>24817</td>
                       <td>141429</td>
                       <td>5295</td>
                       <td>72460</td>
                       <td>510579</td>
                       <td>141074</td></tr>
      <tr><td>Sunday,06-Jul-2014</td><td>66861</td>
                       <td>1178</td>
                       <td>20537</td>
                       <td>172463</td>
                       <td>4393</td> 
                       <td>64980</td>
                       <td>38333</td>
                       <td>538</td> 
                       <td>15229</td>
                       <td>114872</td>
                       <td>3869</td>
                       <td>54613</td>
                       <td>402507</td>
                       <td>97542</td></tr>
      <tr><td>Monday,07-Jul-2014</td><td>97104</td>
                       <td>1730</td>
                       <td>32974</td>
                       <td>259889</td>
                       <td>6777</td> 
                       <td>101346</td>
                       <td>58071</td>
                       <td>899</td> 
                       <td>25399</td>
                       <td>184401</td>
                       <td>6371</td>
                       <td>89125</td>
                       <td>615242</td>
                       <td>158158</td></tr>
      <tr><td>Tuesday,08-Jul-2014</td><td>221323</td>
                       <td>4441</td>
                       <td>82097</td>
                       <td>400451</td>
                       <td>10096</td> 
                       <td>164212</td>
                       <td>139364</td>
                       <td>2564</td> 
                       <td>64489</td>
                       <td>291137</td>
                       <td>8914</td>
                       <td>144488</td>
                       <td>1078290</td>
                       <td>279218</td></tr>
      <tr><td>Wednesday,09-Jul-2014</td><td>205712</td>
                       <td>4817</td>
                       <td>80713</td>
                       <td>293853</td>
                       <td>6756</td> 
                       <td>122774</td>
                       <td>130143</td>
                       <td>2922</td> 
                       <td>63518</td>
                       <td>222733</td>
                       <td>6971</td>
                       <td>111821</td>
                       <td>873907</td>
                       <td>238575</td></tr>
      <tr><td>Thursday,10-Jul-2014</td><td>136403</td>
                       <td>3346</td>
                       <td>55356</td>
                       <td>299995</td>
                       <td>6967</td> 
                       <td>126503</td>
                       <td>83782</td>
                       <td>1929</td> 
                       <td>42560</td>
                       <td>219936</td>
                       <td>6757</td>
                       <td>112244</td>
                       <td>759115</td>
                       <td>219700</td></tr>
      <tr><td>Friday,11-Jul-2014</td><td>105629</td>
                       <td>2233</td>
                       <td>40258</td>
                       <td>318034</td>
                       <td>8313</td> 
                       <td>134904</td>
                       <td>60448</td>
                       <td>1218</td> 
                       <td>30243</td>
                       <td>217721</td>
                       <td>7560</td>
                       <td>113405</td>
                       <td>721156</td>
                       <td>209127</td></tr>
      <tr><td>Saturday,12-Jul-2014</td><td>97392</td>
                       <td>2713</td>
                       <td>41137</td>
                       <td>214538</td>
                       <td>4955</td> 
                       <td>86216</td>
                       <td>57247</td>
                       <td>1418</td> 
                       <td>31327</td>
                       <td>140964</td>
                       <td>4774</td>
                       <td>72026</td>
                       <td>524001</td>
                       <td>152498</td></tr>
      <tr><td>Sunday,13-Jul-2014</td><td>60516</td>
                       <td>1128</td>
                       <td>20291</td>
                       <td>167533</td>
                       <td>3695</td> 
                       <td>61447</td>
                       <td>34781</td>
                       <td>665</td> 
                       <td>15640</td>
                       <td>106009</td>
                       <td>3734</td>
                       <td>50697</td>
                       <td>378061</td>
                       <td>94581</td></tr>
      <tr><td>Monday,14-Jul-2014</td><td>108302</td>
                       <td>2202</td>
                       <td>40942</td>
                       <td>289908</td>
                       <td>6480</td> 
                       <td>112803</td>
                       <td>58171</td>
                       <td>1059</td> 
                       <td>29314</td>
                       <td>183689</td>
                       <td>6099</td>
                       <td>91189</td>
                       <td>655910</td>
                       <td>179762</td></tr>
      <tr><td>Tuesday,15-Jul-2014</td><td>256881</td>
                       <td>5901</td>
                       <td>101685</td>
                       <td>399617</td>
                       <td>9496</td> 
                       <td>165386</td>
                       <td>153556</td>
                       <td>3337</td> 
                       <td>79332</td>
                       <td>271684</td>
                       <td>8098</td>
                       <td>140500</td>
                       <td>1108570</td>
                       <td>304306</td></tr>
      <tr><td>Wednesday,16-Jul-2014</td><td>179294</td>
                       <td>4703</td>
                       <td>72218</td>
                       <td>326688</td>
                       <td>7968</td> 
                       <td>136019</td>
                       <td>97078</td>
                       <td>2292</td> 
                       <td>51544</td>
                       <td>221476</td>
                       <td>7160</td>
                       <td>115329</td>
                       <td>846659</td>
                       <td>243818</td></tr>
      <tr><td>Thursday,17-Jul-2014</td><td>123298</td>
                       <td>3616</td>
                       <td>50409</td>
                       <td>273883</td>
                       <td>6249</td> 
                       <td>112229</td>
                       <td>60760</td>
                       <td>1504</td> 
                       <td>32814</td>
                       <td>193473</td>
                       <td>6227</td>
                       <td>98770</td>
                       <td>669010</td>
                       <td>196242</td></tr>
      <tr><td>Friday,18-Jul-2014</td><td>82942</td>
                       <td>2088</td>
                       <td>32559</td>
                       <td>249815</td>
                       <td>6320</td> 
                       <td>106693</td>
                       <td>42458</td>
                       <td>880</td> 
                       <td>22410</td>
                       <td>173745</td>
                       <td>5858</td>
                       <td>91264</td>
                       <td>564106</td>
                       <td>169598</td></tr>
      <tr><td>Saturday,19-Jul-2014</td><td>92798</td>
                       <td>2677</td>
                       <td>42112</td>
                       <td>192082</td>
                       <td>4512</td> 
                       <td>79281</td>
                       <td>51988</td>
                       <td>1365</td> 
                       <td>30495</td>
                       <td>137893</td>
                       <td>4527</td>
                       <td>70114</td>
                       <td>487842</td>
                       <td>149236</td></tr>
      <tr><td>Sunday,20-Jul-2014</td><td>52486</td>
                       <td>1102</td>
                       <td>18956</td>
                       <td>153557</td>
                       <td>3473</td> 
                       <td>58732</td>
                       <td>29541</td>
                       <td>551</td> 
                       <td>14247</td>
                       <td>110740</td>
                       <td>3825</td>
                       <td>52588</td>
                       <td>355275</td>
                       <td>93669</td></tr>
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 01-07-2014 to 20-07-2014</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Tuesday,01-Jul-2014</td><td>699</td>
                        <td>1854</td>
                        <td>30039</td></tr>
     <tr><td>Wednesday,02-Jul-2014</td><td>760</td>
                        <td>1991</td>
                        <td>31805</td></tr>
     <tr><td>Thursday,03-Jul-2014</td><td>812</td>
                        <td>1944</td>
                        <td>31051</td></tr>
     <tr><td>Friday,04-Jul-2014</td><td>832</td>
                        <td>1729</td>
                        <td>26660</td></tr>
     <tr><td>Saturday,05-Jul-2014</td><td>601</td>
                        <td>1436</td>
                        <td>20592</td></tr>
     <tr><td>Sunday,06-Jul-2014</td><td>679</td>
                        <td>1265</td>
                        <td>17499</td></tr>
     <tr><td>Monday,07-Jul-2014</td><td>832</td>
                        <td>1931</td>
                        <td>32483</td></tr>
     <tr><td>Tuesday,08-Jul-2014</td><td>1000</td>
                        <td>2073</td>
                        <td>33659</td></tr>
     <tr><td>Wednesday,09-Jul-2014</td><td>937</td>
                        <td>1964</td>
                        <td>32368</td></tr>
     <tr><td>Thursday,10-Jul-2014</td><td>964</td>
                        <td>1989</td>
                        <td>30838</td></tr>
     <tr><td>Friday,11-Jul-2014</td><td>1355</td>
                        <td>1844</td>
                        <td>28531</td></tr>
     <tr><td>Saturday,12-Jul-2014</td><td>891</td>
                        <td>1515</td>
                        <td>21085</td></tr>
     <tr><td>Sunday,13-Jul-2014</td><td>1294</td>
                        <td>1330</td>
                        <td>17907</td></tr>
     <tr><td>Monday,14-Jul-2014</td><td>1770</td>
                        <td>2128</td>
                        <td>32305</td></tr>
     <tr><td>Tuesday,15-Jul-2014</td><td>1523</td>
                        <td>2363</td>
                        <td>32744</td></tr>
     <tr><td>Wednesday,16-Jul-2014</td><td>1365</td>
                        <td>2124</td>
                        <td>32186</td></tr>
     <tr><td>Thursday,17-Jul-2014</td><td>1099</td>
                        <td>1993</td>
                        <td>30443</td></tr>
     <tr><td>Friday,18-Jul-2014</td><td>1027</td>
                        <td>1784</td>
                        <td>24023</td></tr>
     <tr><td>Saturday,19-Jul-2014</td><td>810</td>
                        <td>1438</td>
                        <td>20093</td></tr>
     <tr><td>Sunday,20-Jul-2014</td><td>673</td>
                        <td>1374</td>
                        <td>17021</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="01">
<input type="hidden" name="endday" value="20">
<input type="hidden" name="startmonth" value="07">
<input type="hidden" name="startyear" value="2014">
<input type="hidden" name="endmonth" value="07">
<input type="hidden" name="endyear" value="2014">
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
    <tr><td>Tuesday,01-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>254780</td></tr>
    <tr><td>Wednesday,02-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>179038</td></tr>
    <tr><td>Thursday,03-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>165266</td></tr>
    <tr><td>Friday,04-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>176210</td></tr>
    <tr><td>Saturday,05-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>141074</td></tr>
    <tr><td>Sunday,06-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>97542</td></tr>
    <tr><td>Monday,07-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>158158</td></tr>
    <tr><td>Tuesday,08-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>279218</td></tr>
    <tr><td>Wednesday,09-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>238575</td></tr>
    <tr><td>Thursday,10-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>219700</td></tr>
    <tr><td>Friday,11-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>209127</td></tr>
    <tr><td>Saturday,12-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>152498</td></tr>
    <tr><td>Sunday,13-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>94581</td></tr>
    <tr><td>Monday,14-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>179762</td></tr>
    <tr><td>Tuesday,15-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>304306</td></tr>
    <tr><td>Wednesday,16-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>243818</td></tr>
    <tr><td>Thursday,17-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>196242</td></tr>
    <tr><td>Friday,18-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>169598</td></tr>
    <tr><td>Saturday,19-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>149236</td></tr>
    <tr><td>Sunday,20-Jul-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>93669</td></tr>
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