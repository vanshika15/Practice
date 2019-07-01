<?php /* Smarty version 2.6.19, created on 2014-07-11 11:15:06
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_04-06-2014_to_09-07-2014.tpl */ ?>
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
        <select name="startday" value="04">
		          <option value="01" >1</option>
			<option value="02" >2</option>
			<option value="03" >3</option>
			<option value="04"  selected >4</option>
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
        <select name="startmonth" value="06">
           <option value="01" >JAN</option>
	   <option value="02" >FEB</option>
	   <option value="03" >MAR</option>
	   <option value="04" >APR</option>
	   <option value="05" >MAY</option>
	   <option value="06"  selected >JUN</option>
	   <option value="07" >JUL</option>
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
        <select name="endday" value="09">
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
 <tr><td colspan="15" align="center">Apply Online from 04-06-2014 to 09-07-2014</td></tr>
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
    <tr><td>Wednesday,04-Jun-2014</td><td>250934</td>
                       <td>4760</td>
                       <td>81408</td>
                       <td>244684</td>
                       <td>5773</td> 
                       <td>103016</td>
                       <td>181040</td>
                       <td>2933</td> 
                       <td>68853</td>
                       <td>186722</td>
                       <td>5998</td>
                       <td>91893</td>
                       <td>882844</td>
                       <td>202021</td></tr>
      <tr><td>Thursday,05-Jun-2014</td><td>190745</td>
                       <td>3705</td>
                       <td>60418</td>
                       <td>263418</td>
                       <td>6834</td> 
                       <td>110940</td>
                       <td>133735</td>
                       <td>1916</td> 
                       <td>49549</td>
                       <td>194120</td>
                       <td>6496</td>
                       <td>96053</td>
                       <td>800969</td>
                       <td>184792</td></tr>
      <tr><td>Friday,06-Jun-2014</td><td>177680</td>
                       <td>3347</td>
                       <td>56259</td>
                       <td>254352</td>
                       <td>7233</td> 
                       <td>109893</td>
                       <td>124484</td>
                       <td>1785</td> 
                       <td>46381</td>
                       <td>185527</td>
                       <td>6563</td>
                       <td>94575</td>
                       <td>760971</td>
                       <td>179953</td></tr>
      <tr><td>Saturday,07-Jun-2014</td><td>140021</td>
                       <td>2650</td>
                       <td>44640</td>
                       <td>167331</td>
                       <td>4273</td> 
                       <td>68886</td>
                       <td>97101</td>
                       <td>1500</td> 
                       <td>36447</td>
                       <td>125660</td>
                       <td>4128</td>
                       <td>61077</td>
                       <td>542664</td>
                       <td>124857</td></tr>
      <tr><td>Sunday,08-Jun-2014</td><td>93031</td>
                       <td>1497</td>
                       <td>26608</td>
                       <td>134039</td>
                       <td>3158</td> 
                       <td>50940</td>
                       <td>69503</td>
                       <td>761</td> 
                       <td>22821</td>
                       <td>103998</td>
                       <td>3479</td>
                       <td>48006</td>
                       <td>409466</td>
                       <td>83970</td></tr>
      <tr><td>Monday,09-Jun-2014</td><td>175149</td>
                       <td>3098</td>
                       <td>55741</td>
                       <td>233408</td>
                       <td>5690</td> 
                       <td>94956</td>
                       <td>128176</td>
                       <td>1748</td> 
                       <td>47002</td>
                       <td>178511</td>
                       <td>5910</td>
                       <td>86138</td>
                       <td>731690</td>
                       <td>164430</td></tr>
      <tr><td>Tuesday,10-Jun-2014</td><td>366744</td>
                       <td>6803</td>
                       <td>118982</td>
                       <td>330528</td>
                       <td>7889</td> 
                       <td>140370</td>
                       <td>267890</td>
                       <td>4014</td> 
                       <td>100847</td>
                       <td>250781</td>
                       <td>7299</td>
                       <td>125584</td>
                       <td>1241948</td>
                       <td>274764</td></tr>
      <tr><td>Wednesday,11-Jun-2014</td><td>226163</td>
                       <td>4676</td>
                       <td>74904</td>
                       <td>244912</td>
                       <td>6784</td> 
                       <td>104883</td>
                       <td>162287</td>
                       <td>2621</td> 
                       <td>61717</td>
                       <td>190052</td>
                       <td>6718</td>
                       <td>94229</td>
                       <td>844213</td>
                       <td>195757</td></tr>
      <tr><td>Thursday,12-Jun-2014</td><td>196895</td>
                       <td>3932</td>
                       <td>63861</td>
                       <td>273214</td>
                       <td>7359</td> 
                       <td>117033</td>
                       <td>138356</td>
                       <td>2056</td> 
                       <td>51701</td>
                       <td>211230</td>
                       <td>7020</td>
                       <td>104898</td>
                       <td>840062</td>
                       <td>196276</td></tr>
      <tr><td>Friday,13-Jun-2014</td><td>150331</td>
                       <td>2694</td>
                       <td>47472</td>
                       <td>229565</td>
                       <td>6529</td> 
                       <td>98400</td>
                       <td>107531</td>
                       <td>1488</td> 
                       <td>39630</td>
                       <td>171896</td>
                       <td>5829</td>
                       <td>86868</td>
                       <td>675863</td>
                       <td>159147</td></tr>
      <tr><td>Saturday,14-Jun-2014</td><td>142913</td>
                       <td>3070</td>
                       <td>47228</td>
                       <td>170150</td>
                       <td>4251</td> 
                       <td>69468</td>
                       <td>100866</td>
                       <td>1497</td> 
                       <td>38847</td>
                       <td>124081</td>
                       <td>4212</td>
                       <td>61594</td>
                       <td>551040</td>
                       <td>129147</td></tr>
      <tr><td>Sunday,15-Jun-2014</td><td>94838</td>
                       <td>1560</td>
                       <td>27218</td>
                       <td>138247</td>
                       <td>3298</td> 
                       <td>51779</td>
                       <td>68504</td>
                       <td>876</td> 
                       <td>23078</td>
                       <td>99526</td>
                       <td>3372</td>
                       <td>45871</td>
                       <td>410221</td>
                       <td>83986</td></tr>
      <tr><td>Monday,16-Jun-2014</td><td>174333</td>
                       <td>3097</td>
                       <td>56763</td>
                       <td>240508</td>
                       <td>5817</td> 
                       <td>97649</td>
                       <td>121543</td>
                       <td>1604</td> 
                       <td>46135</td>
                       <td>173648</td>
                       <td>5796</td>
                       <td>85213</td>
                       <td>726346</td>
                       <td>167457</td></tr>
      <tr><td>Tuesday,17-Jun-2014</td><td>350628</td>
                       <td>6175</td>
                       <td>111447</td>
                       <td>354989</td>
                       <td>8866</td> 
                       <td>150886</td>
                       <td>242164</td>
                       <td>3481</td> 
                       <td>92046</td>
                       <td>260398</td>
                       <td>7691</td>
                       <td>130612</td>
                       <td>1234392</td>
                       <td>272508</td></tr>
      <tr><td>Wednesday,18-Jun-2014</td><td>243163</td>
                       <td>4883</td>
                       <td>79036</td>
                       <td>253209</td>
                       <td>5697</td> 
                       <td>102404</td>
                       <td>166482</td>
                       <td>2619</td> 
                       <td>64660</td>
                       <td>191852</td>
                       <td>6622</td>
                       <td>93499</td>
                       <td>874527</td>
                       <td>199148</td></tr>
      <tr><td>Thursday,19-Jun-2014</td><td>223270</td>
                       <td>4144</td>
                       <td>71627</td>
                       <td>298388</td>
                       <td>7614</td> 
                       <td>125837</td>
                       <td>152478</td>
                       <td>2304</td> 
                       <td>58067</td>
                       <td>229227</td>
                       <td>7467</td>
                       <td>113605</td>
                       <td>924892</td>
                       <td>215676</td></tr>
      <tr><td>Friday,20-Jun-2014</td><td>186886</td>
                       <td>3641</td>
                       <td>61586</td>
                       <td>250910</td>
                       <td>6971</td> 
                       <td>108954</td>
                       <td>132913</td>
                       <td>2137</td> 
                       <td>52166</td>
                       <td>197383</td>
                       <td>6817</td>
                       <td>98588</td>
                       <td>787658</td>
                       <td>188725</td></tr>
      <tr><td>Saturday,21-Jun-2014</td><td>122132</td>
                       <td>2544</td>
                       <td>39465</td>
                       <td>165935</td>
                       <td>4392</td> 
                       <td>67501</td>
                       <td>88065</td>
                       <td>1443</td> 
                       <td>33448</td>
                       <td>130070</td>
                       <td>4501</td>
                       <td>62224</td>
                       <td>519082</td>
                       <td>119540</td></tr>
      <tr><td>Sunday,22-Jun-2014</td><td>90204</td>
                       <td>1517</td>
                       <td>25644</td>
                       <td>140117</td>
                       <td>3386</td> 
                       <td>52773</td>
                       <td>65751</td>
                       <td>821</td> 
                       <td>22034</td>
                       <td>106697</td>
                       <td>3326</td>
                       <td>47729</td>
                       <td>411819</td>
                       <td>84109</td></tr>
      <tr><td>Monday,23-Jun-2014</td><td>154971</td>
                       <td>2512</td>
                       <td>48507</td>
                       <td>232173</td>
                       <td>5650</td> 
                       <td>92604</td>
                       <td>112775</td>
                       <td>1544</td> 
                       <td>42467</td>
                       <td>178690</td>
                       <td>5672</td>
                       <td>84312</td>
                       <td>693987</td>
                       <td>156029</td></tr>
      <tr><td>Tuesday,24-Jun-2014</td><td>303247</td>
                       <td>5415</td>
                       <td>100488</td>
                       <td>350316</td>
                       <td>8305</td> 
                       <td>147928</td>
                       <td>223409</td>
                       <td>3584</td> 
                       <td>87370</td>
                       <td>272260</td>
                       <td>8116</td>
                       <td>135714</td>
                       <td>1174652</td>
                       <td>268836</td></tr>
      <tr><td>Wednesday,25-Jun-2014</td><td>228687</td>
                       <td>4723</td>
                       <td>75880</td>
                       <td>262460</td>
                       <td>6175</td> 
                       <td>106258</td>
                       <td>155722</td>
                       <td>2644</td> 
                       <td>60879</td>
                       <td>189163</td>
                       <td>6361</td>
                       <td>93651</td>
                       <td>855935</td>
                       <td>199191</td></tr>
      <tr><td>Thursday,26-Jun-2014</td><td>207134</td>
                       <td>4260</td>
                       <td>66017</td>
                       <td>296184</td>
                       <td>8043</td> 
                       <td>123566</td>
                       <td>136564</td>
                       <td>2113</td> 
                       <td>51912</td>
                       <td>210603</td>
                       <td>7323</td>
                       <td>105423</td>
                       <td>872224</td>
                       <td>204673</td></tr>
      <tr><td>Friday,27-Jun-2014</td><td>165681</td>
                       <td>3461</td>
                       <td>55023</td>
                       <td>257211</td>
                       <td>7417</td> 
                       <td>111415</td>
                       <td>103416</td>
                       <td>1662</td> 
                       <td>41885</td>
                       <td>180850</td>
                       <td>6540</td>
                       <td>93631</td>
                       <td>726238</td>
                       <td>184121</td></tr>
      <tr><td>Saturday,28-Jun-2014</td><td>115163</td>
                       <td>2801</td>
                       <td>39586</td>
                       <td>175182</td>
                       <td>4824</td> 
                       <td>71023</td>
                       <td>71045</td>
                       <td>1347</td> 
                       <td>29502</td>
                       <td>121087</td>
                       <td>4340</td>
                       <td>61040</td>
                       <td>495789</td>
                       <td>124951</td></tr>
      <tr><td>Sunday,29-Jun-2014</td><td>76592</td>
                       <td>1325</td>
                       <td>22871</td>
                       <td>141779</td>
                       <td>3641</td> 
                       <td>52931</td>
                       <td>50640</td>
                       <td>672</td> 
                       <td>18325</td>
                       <td>95237</td>
                       <td>3137</td>
                       <td>44319</td>
                       <td>373023</td>
                       <td>82678</td></tr>
      <tr><td>Monday,30-Jun-2014</td><td>141155</td>
                       <td>3036</td>
                       <td>49972</td>
                       <td>244763</td>
                       <td>6142</td> 
                       <td>98626</td>
                       <td>93772</td>
                       <td>1469</td> 
                       <td>40050</td>
                       <td>166823</td>
                       <td>6111</td>
                       <td>83103</td>
                       <td>663271</td>
                       <td>168321</td></tr>
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
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 04-06-2014 to 09-07-2014</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Wednesday,04-Jun-2014</td><td>581</td>
                        <td>1743</td>
                        <td>25949</td></tr>
     <tr><td>Thursday,05-Jun-2014</td><td>533</td>
                        <td>1728</td>
                        <td>25741</td></tr>
     <tr><td>Friday,06-Jun-2014</td><td>432</td>
                        <td>1599</td>
                        <td>22552</td></tr>
     <tr><td>Saturday,07-Jun-2014</td><td>355</td>
                        <td>1285</td>
                        <td>16610</td></tr>
     <tr><td>Sunday,08-Jun-2014</td><td>369</td>
                        <td>1212</td>
                        <td>14040</td></tr>
     <tr><td>Monday,09-Jun-2014</td><td>548</td>
                        <td>1806</td>
                        <td>25177</td></tr>
     <tr><td>Tuesday,10-Jun-2014</td><td>484</td>
                        <td>1576</td>
                        <td>26392</td></tr>
     <tr><td>Wednesday,11-Jun-2014</td><td>468</td>
                        <td>1811</td>
                        <td>26114</td></tr>
     <tr><td>Thursday,12-Jun-2014</td><td>443</td>
                        <td>1695</td>
                        <td>24897</td></tr>
     <tr><td>Friday,13-Jun-2014</td><td>368</td>
                        <td>1738</td>
                        <td>21981</td></tr>
     <tr><td>Saturday,14-Jun-2014</td><td>352</td>
                        <td>1500</td>
                        <td>16741</td></tr>
     <tr><td>Sunday,15-Jun-2014</td><td>310</td>
                        <td>1103</td>
                        <td>14379</td></tr>
     <tr><td>Monday,16-Jun-2014</td><td>449</td>
                        <td>1717</td>
                        <td>24605</td></tr>
     <tr><td>Tuesday,17-Jun-2014</td><td>418</td>
                        <td>1654</td>
                        <td>27067</td></tr>
     <tr><td>Wednesday,18-Jun-2014</td><td>438</td>
                        <td>1703</td>
                        <td>28733</td></tr>
     <tr><td>Thursday,19-Jun-2014</td><td>488</td>
                        <td>1937</td>
                        <td>26055</td></tr>
     <tr><td>Friday,20-Jun-2014</td><td>472</td>
                        <td>1668</td>
                        <td>24721</td></tr>
     <tr><td>Saturday,21-Jun-2014</td><td>339</td>
                        <td>1415</td>
                        <td>17475</td></tr>
     <tr><td>Sunday,22-Jun-2014</td><td>283</td>
                        <td>1299</td>
                        <td>15075</td></tr>
     <tr><td>Monday,23-Jun-2014</td><td>428</td>
                        <td>1711</td>
                        <td>27923</td></tr>
     <tr><td>Tuesday,24-Jun-2014</td><td>525</td>
                        <td>1857</td>
                        <td>30665</td></tr>
     <tr><td>Wednesday,25-Jun-2014</td><td>396</td>
                        <td>1840</td>
                        <td>29404</td></tr>
     <tr><td>Thursday,26-Jun-2014</td><td>408</td>
                        <td>1906</td>
                        <td>27293</td></tr>
     <tr><td>Friday,27-Jun-2014</td><td>448</td>
                        <td>1681</td>
                        <td>24282</td></tr>
     <tr><td>Saturday,28-Jun-2014</td><td>463</td>
                        <td>1197</td>
                        <td>17032</td></tr>
     <tr><td>Sunday,29-Jun-2014</td><td>360</td>
                        <td>1365</td>
                        <td>14905</td></tr>
     <tr><td>Monday,30-Jun-2014</td><td>562</td>
                        <td>1913</td>
                        <td>27278</td></tr>
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
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="04">
<input type="hidden" name="endday" value="09">
<input type="hidden" name="startmonth" value="06">
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
    <tr><td>Wednesday,04-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>202021</td></tr>
    <tr><td>Thursday,05-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>184792</td></tr>
    <tr><td>Friday,06-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>179953</td></tr>
    <tr><td>Saturday,07-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>124857</td></tr>
    <tr><td>Sunday,08-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>83970</td></tr>
    <tr><td>Monday,09-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>164430</td></tr>
    <tr><td>Tuesday,10-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>274764</td></tr>
    <tr><td>Wednesday,11-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>195757</td></tr>
    <tr><td>Thursday,12-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>196276</td></tr>
    <tr><td>Friday,13-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>159147</td></tr>
    <tr><td>Saturday,14-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>129147</td></tr>
    <tr><td>Sunday,15-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>83986</td></tr>
    <tr><td>Monday,16-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>167457</td></tr>
    <tr><td>Tuesday,17-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>272508</td></tr>
    <tr><td>Wednesday,18-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>199148</td></tr>
    <tr><td>Thursday,19-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>215676</td></tr>
    <tr><td>Friday,20-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>188725</td></tr>
    <tr><td>Saturday,21-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>119540</td></tr>
    <tr><td>Sunday,22-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>84109</td></tr>
    <tr><td>Monday,23-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>156029</td></tr>
    <tr><td>Tuesday,24-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>268836</td></tr>
    <tr><td>Wednesday,25-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>199191</td></tr>
    <tr><td>Thursday,26-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>204673</td></tr>
    <tr><td>Friday,27-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>184121</td></tr>
    <tr><td>Saturday,28-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>124951</td></tr>
    <tr><td>Sunday,29-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>82678</td></tr>
    <tr><td>Monday,30-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>168321</td></tr>
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