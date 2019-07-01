<?php /* Smarty version 2.6.19, created on 2014-09-01 10:13:53
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_11-08-2014_to_31-08-2014.tpl */ ?>
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
        <select name="startday" value="11">
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
			<option value="11"  selected >11</option>
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
        <select name="startmonth" value="08">
           <option value="01" >JAN</option>
	   <option value="02" >FEB</option>
	   <option value="03" >MAR</option>
	   <option value="04" >APR</option>
	   <option value="05" >MAY</option>
	   <option value="06" >JUN</option>
	   <option value="07" >JUL</option>
	   <option value="08"  selected >AUG</option>
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
        <select name="endmonth" value="08">
           <option value="01" >JAN</option>
	   <option value="02" >FEB</option>
	   <option value="03" >MAR</option>
	   <option value="04" >APR</option>
	   <option value="05" >MAY</option>
	   <option value="06" >JUN</option>
	   <option value="07" >JUL</option>
	   <option value="08"  selected >AUG</option>
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
 <tr><td colspan="15" align="center">Apply Online from 11-08-2014 to 31-08-2014</td></tr>
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
    <tr><td>Monday,11-Aug-2014</td><td>214882</td>
                       <td>3063</td>
                       <td>72710</td>
                       <td>206245</td>
                       <td>5263</td> 
                       <td>87876</td>
                       <td>158949</td>
                       <td>1913</td> 
                       <td>63299</td>
                       <td>169179</td>
                       <td>6035</td>
                       <td>83960</td>
                       <td>765529</td>
                       <td>176700</td></tr>
      <tr><td>Tuesday,12-Aug-2014</td><td>378839</td>
                       <td>7085</td>
                       <td>130824</td>
                       <td>243345</td>
                       <td>8833</td> 
                       <td>113716</td>
                       <td>263780</td>
                       <td>4458</td> 
                       <td>108018</td>
                       <td>197746</td>
                       <td>8845</td>
                       <td>107565</td>
                       <td>1112931</td>
                       <td>257941</td></tr>
      <tr><td>Wednesday,13-Aug-2014</td><td>379946</td>
                       <td>5025</td>
                       <td>128966</td>
                       <td>265709</td>
                       <td>5731</td> 
                       <td>110607</td>
                       <td>261325</td>
                       <td>2943</td> 
                       <td>103631</td>
                       <td>223536</td>
                       <td>6592</td>
                       <td>110598</td>
                       <td>1150807</td>
                       <td>261769</td></tr>
      <tr><td>Thursday,14-Aug-2014</td><td>208181</td>
                       <td>3228</td>
                       <td>69352</td>
                       <td>218365</td>
                       <td>5152</td> 
                       <td>97397</td>
                       <td>140404</td>
                       <td>1736</td> 
                       <td>55104</td>
                       <td>172736</td>
                       <td>5933</td>
                       <td>91189</td>
                       <td>755735</td>
                       <td>183472</td></tr>
      <tr><td>Friday,15-Aug-2014</td><td>189216</td>
                       <td>1947</td>
                       <td>64773</td>
                       <td>164332</td>
                       <td>3825</td> 
                       <td>74214</td>
                       <td>130990</td>
                       <td>1222</td> 
                       <td>52227</td>
                       <td>129891</td>
                       <td>4269</td>
                       <td>68553</td>
                       <td>625692</td>
                       <td>149404</td></tr>
      <tr><td>Saturday,16-Aug-2014</td><td>171079</td>
                       <td>2108</td>
                       <td>56806</td>
                       <td>155123</td>
                       <td>3478</td> 
                       <td>67289</td>
                       <td>117506</td>
                       <td>1313</td> 
                       <td>45894</td>
                       <td>120783</td>
                       <td>4400</td>
                       <td>62238</td>
                       <td>575790</td>
                       <td>134695</td></tr>
      <tr><td>Sunday,17-Aug-2014</td><td>105670</td>
                       <td>1022</td>
                       <td>31144</td>
                       <td>115834</td>
                       <td>2309</td> 
                       <td>47268</td>
                       <td>77076</td>
                       <td>693</td> 
                       <td>26440</td>
                       <td>91671</td>
                       <td>3092</td>
                       <td>44246</td>
                       <td>397367</td>
                       <td>83085</td></tr>
      <tr><td>Monday,18-Aug-2014</td><td>220156</td>
                       <td>2053</td>
                       <td>74059</td>
                       <td>207737</td>
                       <td>4296</td> 
                       <td>89662</td>
                       <td>163964</td>
                       <td>1518</td> 
                       <td>63247</td>
                       <td>165169</td>
                       <td>5198</td>
                       <td>83601</td>
                       <td>770091</td>
                       <td>176379</td></tr>
      <tr><td>Tuesday,19-Aug-2014</td><td>373743</td>
                       <td>5605</td>
                       <td>132350</td>
                       <td>234239</td>
                       <td>6579</td> 
                       <td>110225</td>
                       <td>278816</td>
                       <td>3675</td> 
                       <td>113649</td>
                       <td>191516</td>
                       <td>7283</td>
                       <td>103604</td>
                       <td>1101456</td>
                       <td>258351</td></tr>
      <tr><td>Wednesday,20-Aug-2014</td><td>343749</td>
                       <td>4671</td>
                       <td>120175</td>
                       <td>258465</td>
                       <td>5030</td> 
                       <td>108402</td>
                       <td>247244</td>
                       <td>2743</td> 
                       <td>98954</td>
                       <td>222675</td>
                       <td>6156</td>
                       <td>108234</td>
                       <td>1090733</td>
                       <td>251959</td></tr>
      <tr><td>Thursday,21-Aug-2014</td><td>217288</td>
                       <td>3367</td>
                       <td>72817</td>
                       <td>230347</td>
                       <td>5309</td> 
                       <td>103045</td>
                       <td>150843</td>
                       <td>1882</td> 
                       <td>59296</td>
                       <td>188130</td>
                       <td>6520</td>
                       <td>96527</td>
                       <td>803686</td>
                       <td>193437</td></tr>
      <tr><td>Friday,22-Aug-2014</td><td>237679</td>
                       <td>3179</td>
                       <td>80915</td>
                       <td>260586</td>
                       <td>7339</td> 
                       <td>121817</td>
                       <td>165859</td>
                       <td>1713</td> 
                       <td>66156</td>
                       <td>197721</td>
                       <td>7014</td>
                       <td>106948</td>
                       <td>881090</td>
                       <td>215488</td></tr>
      <tr><td>Saturday,23-Aug-2014</td><td>168203</td>
                       <td>2883</td>
                       <td>58525</td>
                       <td>160967</td>
                       <td>4078</td> 
                       <td>69922</td>
                       <td>118089</td>
                       <td>1579</td> 
                       <td>47616</td>
                       <td>127372</td>
                       <td>4474</td>
                       <td>64574</td>
                       <td>587645</td>
                       <td>141958</td></tr>
      <tr><td>Sunday,24-Aug-2014</td><td>109491</td>
                       <td>1430</td>
                       <td>32539</td>
                       <td>127293</td>
                       <td>2893</td> 
                       <td>52822</td>
                       <td>80299</td>
                       <td>789</td> 
                       <td>27584</td>
                       <td>105900</td>
                       <td>3560</td>
                       <td>50676</td>
                       <td>431655</td>
                       <td>91792</td></tr>
      <tr><td>Monday,25-Aug-2014</td><td>212865</td>
                       <td>2730</td>
                       <td>73373</td>
                       <td>211963</td>
                       <td>4962</td> 
                       <td>95157</td>
                       <td>154631</td>
                       <td>1547</td> 
                       <td>61347</td>
                       <td>179626</td>
                       <td>6140</td>
                       <td>91469</td>
                       <td>774464</td>
                       <td>184877</td></tr>
      <tr><td>Tuesday,26-Aug-2014</td><td>330954</td>
                       <td>4436</td>
                       <td>116233</td>
                       <td>289236</td>
                       <td>7804</td> 
                       <td>137317</td>
                       <td>245267</td>
                       <td>3007</td> 
                       <td>98692</td>
                       <td>236555</td>
                       <td>8481</td>
                       <td>127145</td>
                       <td>1125740</td>
                       <td>267158</td></tr>
      <tr><td>Wednesday,27-Aug-2014</td><td>372077</td>
                       <td>5370</td>
                       <td>132844</td>
                       <td>227559</td>
                       <td>5519</td> 
                       <td>101798</td>
                       <td>279700</td>
                       <td>3614</td> 
                       <td>115035</td>
                       <td>194002</td>
                       <td>6631</td>
                       <td>100284</td>
                       <td>1094472</td>
                       <td>261937</td></tr>
      <tr><td>Thursday,28-Aug-2014</td><td>210822</td>
                       <td>3174</td>
                       <td>72049</td>
                       <td>231069</td>
                       <td>5988</td> 
                       <td>108157</td>
                       <td>157524</td>
                       <td>2017</td> 
                       <td>62081</td>
                       <td>190651</td>
                       <td>6782</td>
                       <td>100854</td>
                       <td>808027</td>
                       <td>199214</td></tr>
      <tr><td>Friday,29-Aug-2014</td><td>201022</td>
                       <td>2714</td>
                       <td>70517</td>
                       <td>196181</td>
                       <td>5340</td> 
                       <td>93670</td>
                       <td>150515</td>
                       <td>1643</td> 
                       <td>59845</td>
                       <td>168312</td>
                       <td>6208</td>
                       <td>90055</td>
                       <td>731935</td>
                       <td>179881</td></tr>
      <tr><td>Saturday,30-Aug-2014</td><td>157761</td>
                       <td>2526</td>
                       <td>54158</td>
                       <td>151616</td>
                       <td>4081</td> 
                       <td>69468</td>
                       <td>116922</td>
                       <td>1605</td> 
                       <td>45666</td>
                       <td>131490</td>
                       <td>5483</td>
                       <td>68098</td>
                       <td>571484</td>
                       <td>137896</td></tr>
      <tr><td>Sunday,31-Aug-2014</td><td>106999</td>
                       <td>1340</td>
                       <td>31738</td>
                       <td>122128</td>
                       <td>2884</td> 
                       <td>51083</td>
                       <td>84253</td>
                       <td>839</td> 
                       <td>28240</td>
                       <td>105774</td>
                       <td>3996</td>
                       <td>51856</td>
                       <td>428213</td>
                       <td>91129</td></tr>
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 11-08-2014 to 31-08-2014</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Monday,11-Aug-2014</td><td>301</td>
                        <td>1719</td>
                        <td>25550</td></tr>
     <tr><td>Tuesday,12-Aug-2014</td><td>199</td>
                        <td>1239</td>
                        <td>21831</td></tr>
     <tr><td>Wednesday,13-Aug-2014</td><td>381</td>
                        <td>1683</td>
                        <td>33655</td></tr>
     <tr><td>Thursday,14-Aug-2014</td><td>270</td>
                        <td>1521</td>
                        <td>23615</td></tr>
     <tr><td>Friday,15-Aug-2014</td><td>132</td>
                        <td>1160</td>
                        <td>13533</td></tr>
     <tr><td>Saturday,16-Aug-2014</td><td>140</td>
                        <td>1395</td>
                        <td>14651</td></tr>
     <tr><td>Sunday,17-Aug-2014</td><td>148</td>
                        <td>885</td>
                        <td>12136</td></tr>
     <tr><td>Monday,18-Aug-2014</td><td>282</td>
                        <td>1567</td>
                        <td>23632</td></tr>
     <tr><td>Tuesday,19-Aug-2014</td><td>238</td>
                        <td>1279</td>
                        <td>20951</td></tr>
     <tr><td>Wednesday,20-Aug-2014</td><td>423</td>
                        <td>2222</td>
                        <td>31657</td></tr>
     <tr><td>Thursday,21-Aug-2014</td><td>335</td>
                        <td>1502</td>
                        <td>28892</td></tr>
     <tr><td>Friday,22-Aug-2014</td><td>292</td>
                        <td>1490</td>
                        <td>23134</td></tr>
     <tr><td>Saturday,23-Aug-2014</td><td>212</td>
                        <td>1042</td>
                        <td>15870</td></tr>
     <tr><td>Sunday,24-Aug-2014</td><td>175</td>
                        <td>1010</td>
                        <td>14676</td></tr>
     <tr><td>Monday,25-Aug-2014</td><td>339</td>
                        <td>1485</td>
                        <td>25405</td></tr>
     <tr><td>Tuesday,26-Aug-2014</td><td>260</td>
                        <td>1399</td>
                        <td>24055</td></tr>
     <tr><td>Wednesday,27-Aug-2014</td><td>613</td>
                        <td>1735</td>
                        <td>27205</td></tr>
     <tr><td>Thursday,28-Aug-2014</td><td>536</td>
                        <td>1297</td>
                        <td>22920</td></tr>
     <tr><td>Friday,29-Aug-2014</td><td>434</td>
                        <td>1186</td>
                        <td>17378</td></tr>
     <tr><td>Saturday,30-Aug-2014</td><td>351</td>
                        <td>1059</td>
                        <td>15426</td></tr>
     <tr><td>Sunday,31-Aug-2014</td><td>223</td>
                        <td>1025</td>
                        <td>13507</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="11">
<input type="hidden" name="endday" value="31">
<input type="hidden" name="startmonth" value="08">
<input type="hidden" name="startyear" value="2014">
<input type="hidden" name="endmonth" value="08">
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
    <tr><td>Monday,11-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>176700</td></tr>
    <tr><td>Tuesday,12-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>257941</td></tr>
    <tr><td>Wednesday,13-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>261769</td></tr>
    <tr><td>Thursday,14-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>183472</td></tr>
    <tr><td>Friday,15-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>149404</td></tr>
    <tr><td>Saturday,16-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>134695</td></tr>
    <tr><td>Sunday,17-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>83085</td></tr>
    <tr><td>Monday,18-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>176379</td></tr>
    <tr><td>Tuesday,19-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>258351</td></tr>
    <tr><td>Wednesday,20-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>251959</td></tr>
    <tr><td>Thursday,21-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>193437</td></tr>
    <tr><td>Friday,22-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>215488</td></tr>
    <tr><td>Saturday,23-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>141958</td></tr>
    <tr><td>Sunday,24-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>91792</td></tr>
    <tr><td>Monday,25-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>184877</td></tr>
    <tr><td>Tuesday,26-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>267158</td></tr>
    <tr><td>Wednesday,27-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>261937</td></tr>
    <tr><td>Thursday,28-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>199214</td></tr>
    <tr><td>Friday,29-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>179881</td></tr>
    <tr><td>Saturday,30-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>137896</td></tr>
    <tr><td>Sunday,31-Aug-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>91129</td></tr>
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