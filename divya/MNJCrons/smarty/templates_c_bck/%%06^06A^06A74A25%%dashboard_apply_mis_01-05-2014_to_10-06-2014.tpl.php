<?php /* Smarty version 2.6.19, created on 2014-06-11 11:37:44
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_01-05-2014_to_10-06-2014.tpl */ ?>
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
        <select name="startmonth" value="05">
           <option value="01" >JAN</option>
	   <option value="02" >FEB</option>
	   <option value="03" >MAR</option>
	   <option value="04" >APR</option>
	   <option value="05"  selected >MAY</option>
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
        <select name="endday" value="10">
		          <option value="01" >1</option>
			<option value="02" >2</option>
			<option value="03" >3</option>
			<option value="04" >4</option>
			<option value="05" >5</option>
			<option value="06" >6</option>
			<option value="07" >7</option>
			<option value="08" >8</option>
			<option value="09" >9</option>
			<option value="10"  selected >10</option>
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
        <select name="endmonth" value="06">
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
 <tr><td colspan="15" align="center">Apply Online from 01-05-2014 to 10-06-2014</td></tr>
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
    <tr><td>Thursday,01-May-2014</td><td>186589</td>
                       <td>3935</td>
                       <td>58252</td>
                       <td>238326</td>
                       <td>7008</td> 
                       <td>96171</td>
                       <td>136877</td>
                       <td>2182</td> 
                       <td>49330</td>
                       <td>178142</td>
                       <td>5793</td>
                       <td>85135</td>
                       <td>758852</td>
                       <td>163580</td></tr>
      <tr><td>Friday,02-May-2014</td><td>170899</td>
                       <td>3894</td>
                       <td>55221</td>
                       <td>225310</td>
                       <td>7363</td> 
                       <td>94538</td>
                       <td>121983</td>
                       <td>2167</td> 
                       <td>45840</td>
                       <td>166096</td>
                       <td>5821</td>
                       <td>81312</td>
                       <td>703533</td>
                       <td>159889</td></tr>
      <tr><td>Saturday,03-May-2014</td><td>136705</td>
                       <td>3225</td>
                       <td>44373</td>
                       <td>151913</td>
                       <td>4606</td> 
                       <td>60814</td>
                       <td>95691</td>
                       <td>1668</td> 
                       <td>35987</td>
                       <td>113053</td>
                       <td>3836</td>
                       <td>54307</td>
                       <td>510697</td>
                       <td>114895</td></tr>
      <tr><td>Sunday,04-May-2014</td><td>89833</td>
                       <td>1824</td>
                       <td>25856</td>
                       <td>126810</td>
                       <td>3555</td> 
                       <td>47274</td>
                       <td>68924</td>
                       <td>982</td> 
                       <td>22514</td>
                       <td>93051</td>
                       <td>3000</td>
                       <td>42942</td>
                       <td>387979</td>
                       <td>77768</td></tr>
      <tr><td>Monday,05-May-2014</td><td>146101</td>
                       <td>2845</td>
                       <td>45284</td>
                       <td>218797</td>
                       <td>6338</td> 
                       <td>87708</td>
                       <td>112257</td>
                       <td>1468</td> 
                       <td>39193</td>
                       <td>160480</td>
                       <td>5002</td>
                       <td>75880</td>
                       <td>653288</td>
                       <td>141182</td></tr>
      <tr><td>Tuesday,06-May-2014</td><td>228706</td>
                       <td>4611</td>
                       <td>73914</td>
                       <td>290094</td>
                       <td>8873</td> 
                       <td>120088</td>
                       <td>174841</td>
                       <td>2812</td> 
                       <td>64287</td>
                       <td>216615</td>
                       <td>6798</td>
                       <td>104406</td>
                       <td>933350</td>
                       <td>204600</td></tr>
      <tr><td>Wednesday,07-May-2014</td><td>211243</td>
                       <td>4272</td>
                       <td>69702</td>
                       <td>211478</td>
                       <td>5607</td> 
                       <td>86389</td>
                       <td>168105</td>
                       <td>2679</td> 
                       <td>62338</td>
                       <td>170172</td>
                       <td>4941</td>
                       <td>81582</td>
                       <td>778497</td>
                       <td>171934</td></tr>
      <tr><td>Thursday,08-May-2014</td><td>224965</td>
                       <td>4645</td>
                       <td>73924</td>
                       <td>259719</td>
                       <td>6863</td> 
                       <td>106124</td>
                       <td>164147</td>
                       <td>2688</td> 
                       <td>61549</td>
                       <td>199670</td>
                       <td>5768</td>
                       <td>95975</td>
                       <td>868465</td>
                       <td>195772</td></tr>
      <tr><td>Friday,09-May-2014</td><td>190484</td>
                       <td>3806</td>
                       <td>61816</td>
                       <td>249823</td>
                       <td>7132</td> 
                       <td>105123</td>
                       <td>140016</td>
                       <td>2202</td> 
                       <td>52174</td>
                       <td>181606</td>
                       <td>5684</td>
                       <td>89915</td>
                       <td>780753</td>
                       <td>177981</td></tr>
      <tr><td>Saturday,10-May-2014</td><td>129204</td>
                       <td>2591</td>
                       <td>41515</td>
                       <td>156714</td>
                       <td>4476</td> 
                       <td>62456</td>
                       <td>97574</td>
                       <td>1750</td> 
                       <td>35381</td>
                       <td>117184</td>
                       <td>3902</td>
                       <td>56771</td>
                       <td>513395</td>
                       <td>114350</td></tr>
      <tr><td>Sunday,11-May-2014</td><td>89052</td>
                       <td>1433</td>
                       <td>25230</td>
                       <td>125508</td>
                       <td>3445</td> 
                       <td>47143</td>
                       <td>70976</td>
                       <td>915</td> 
                       <td>22398</td>
                       <td>92225</td>
                       <td>2959</td>
                       <td>42401</td>
                       <td>386513</td>
                       <td>76488</td></tr>
      <tr><td>Monday,12-May-2014</td><td>152859</td>
                       <td>2471</td>
                       <td>45239</td>
                       <td>254524</td>
                       <td>7139</td> 
                       <td>101311</td>
                       <td>115672</td>
                       <td>1399</td> 
                       <td>38900</td>
                       <td>182679</td>
                       <td>5738</td>
                       <td>86784</td>
                       <td>722481</td>
                       <td>154519</td></tr>
      <tr><td>Tuesday,13-May-2014</td><td>196450</td>
                       <td>3433</td>
                       <td>61648</td>
                       <td>249353</td>
                       <td>6645</td> 
                       <td>100558</td>
                       <td>142259</td>
                       <td>1914</td> 
                       <td>50949</td>
                       <td>188352</td>
                       <td>5780</td>
                       <td>89897</td>
                       <td>794186</td>
                       <td>173997</td></tr>
      <tr><td>Wednesday,14-May-2014</td><td>261824</td>
                       <td>4955</td>
                       <td>84230</td>
                       <td>240568</td>
                       <td>5035</td> 
                       <td>95698</td>
                       <td>183116</td>
                       <td>2701</td> 
                       <td>68247</td>
                       <td>187538</td>
                       <td>4781</td>
                       <td>89185</td>
                       <td>890518</td>
                       <td>198212</td></tr>
      <tr><td>Thursday,15-May-2014</td><td>256378</td>
                       <td>4975</td>
                       <td>82192</td>
                       <td>281887</td>
                       <td>7768</td> 
                       <td>118489</td>
                       <td>179134</td>
                       <td>2690</td> 
                       <td>66795</td>
                       <td>214907</td>
                       <td>6324</td>
                       <td>105347</td>
                       <td>954063</td>
                       <td>215973</td></tr>
      <tr><td>Friday,16-May-2014</td><td>124203</td>
                       <td>2803</td>
                       <td>42561</td>
                       <td>167110</td>
                       <td>4839</td> 
                       <td>72692</td>
                       <td>89938</td>
                       <td>1444</td> 
                       <td>35425</td>
                       <td>126913</td>
                       <td>4031</td>
                       <td>64607</td>
                       <td>521281</td>
                       <td>131092</td></tr>
      <tr><td>Saturday,17-May-2014</td><td>127121</td>
                       <td>2676</td>
                       <td>41420</td>
                       <td>152847</td>
                       <td>3985</td> 
                       <td>61589</td>
                       <td>94123</td>
                       <td>1455</td> 
                       <td>34662</td>
                       <td>113691</td>
                       <td>3446</td>
                       <td>54516</td>
                       <td>499344</td>
                       <td>113415</td></tr>
      <tr><td>Sunday,18-May-2014</td><td>88663</td>
                       <td>1506</td>
                       <td>25527</td>
                       <td>128558</td>
                       <td>3397</td> 
                       <td>48580</td>
                       <td>67926</td>
                       <td>924</td> 
                       <td>22244</td>
                       <td>92566</td>
                       <td>2744</td>
                       <td>42111</td>
                       <td>386284</td>
                       <td>78682</td></tr>
      <tr><td>Monday,19-May-2014</td><td>158916</td>
                       <td>2614</td>
                       <td>50044</td>
                       <td>249131</td>
                       <td>6494</td> 
                       <td>101763</td>
                       <td>122013</td>
                       <td>1555</td> 
                       <td>43362</td>
                       <td>182800</td>
                       <td>5427</td>
                       <td>87429</td>
                       <td>728950</td>
                       <td>162603</td></tr>
      <tr><td>Tuesday,20-May-2014</td><td>205808</td>
                       <td>3177</td>
                       <td>64553</td>
                       <td>248920</td>
                       <td>6406</td> 
                       <td>104411</td>
                       <td>154947</td>
                       <td>2110</td> 
                       <td>55779</td>
                       <td>191918</td>
                       <td>5365</td>
                       <td>92407</td>
                       <td>818651</td>
                       <td>181384</td></tr>
      <tr><td>Wednesday,21-May-2014</td><td>320467</td>
                       <td>6211</td>
                       <td>105638</td>
                       <td>280239</td>
                       <td>6878</td> 
                       <td>118743</td>
                       <td>233585</td>
                       <td>3906</td> 
                       <td>88665</td>
                       <td>222452</td>
                       <td>5741</td>
                       <td>107904</td>
                       <td>1079479</td>
                       <td>241813</td></tr>
      <tr><td>Thursday,22-May-2014</td><td>198699</td>
                       <td>3996</td>
                       <td>65422</td>
                       <td>271734</td>
                       <td>7252</td> 
                       <td>115433</td>
                       <td>143707</td>
                       <td>2242</td> 
                       <td>54182</td>
                       <td>207038</td>
                       <td>5823</td>
                       <td>101690</td>
                       <td>840491</td>
                       <td>197193</td></tr>
      <tr><td>Friday,23-May-2014</td><td>150537</td>
                       <td>2837</td>
                       <td>49362</td>
                       <td>225861</td>
                       <td>6659</td> 
                       <td>98165</td>
                       <td>110607</td>
                       <td>1571</td> 
                       <td>41422</td>
                       <td>166837</td>
                       <td>5032</td>
                       <td>84886</td>
                       <td>669941</td>
                       <td>161200</td></tr>
      <tr><td>Saturday,24-May-2014</td><td>124243</td>
                       <td>2596</td>
                       <td>41502</td>
                       <td>155740</td>
                       <td>4113</td> 
                       <td>63146</td>
                       <td>93117</td>
                       <td>1499</td> 
                       <td>35196</td>
                       <td>119697</td>
                       <td>4053</td>
                       <td>59251</td>
                       <td>505058</td>
                       <td>117368</td></tr>
      <tr><td>Sunday,25-May-2014</td><td>84614</td>
                       <td>1383</td>
                       <td>24382</td>
                       <td>121933</td>
                       <td>2979</td> 
                       <td>46754</td>
                       <td>66397</td>
                       <td>817</td> 
                       <td>21557</td>
                       <td>93397</td>
                       <td>2923</td>
                       <td>42811</td>
                       <td>374443</td>
                       <td>76359</td></tr>
      <tr><td>Monday,26-May-2014</td><td>158993</td>
                       <td>2712</td>
                       <td>52651</td>
                       <td>209221</td>
                       <td>5079</td> 
                       <td>86412</td>
                       <td>119513</td>
                       <td>1518</td> 
                       <td>44826</td>
                       <td>159713</td>
                       <td>4736</td>
                       <td>77533</td>
                       <td>661485</td>
                       <td>152454</td></tr>
      <tr><td>Tuesday,27-May-2014</td><td>339828</td>
                       <td>6189</td>
                       <td>109109</td>
                       <td>344865</td>
                       <td>8989</td> 
                       <td>146933</td>
                       <td>247860</td>
                       <td>3938</td> 
                       <td>92160</td>
                       <td>261509</td>
                       <td>8114</td>
                       <td>130975</td>
                       <td>1221292</td>
                       <td>268587</td></tr>
      <tr><td>Wednesday,28-May-2014</td><td>245359</td>
                       <td>5132</td>
                       <td>82399</td>
                       <td>223490</td>
                       <td>5479</td> 
                       <td>94728</td>
                       <td>178613</td>
                       <td>3123</td> 
                       <td>69236</td>
                       <td>172349</td>
                       <td>6041</td>
                       <td>86544</td>
                       <td>839586</td>
                       <td>195043</td></tr>
      <tr><td>Thursday,29-May-2014</td><td>187634</td>
                       <td>3709</td>
                       <td>59975</td>
                       <td>251643</td>
                       <td>6982</td> 
                       <td>108909</td>
                       <td>134265</td>
                       <td>2037</td> 
                       <td>49530</td>
                       <td>189511</td>
                       <td>6080</td>
                       <td>95682</td>
                       <td>781861</td>
                       <td>183542</td></tr>
      <tr><td>Friday,30-May-2014</td><td>154447</td>
                       <td>3215</td>
                       <td>51043</td>
                       <td>220656</td>
                       <td>6716</td> 
                       <td>97998</td>
                       <td>111952</td>
                       <td>1747</td> 
                       <td>42732</td>
                       <td>164698</td>
                       <td>5699</td>
                       <td>85736</td>
                       <td>669130</td>
                       <td>163015</td></tr>
      <tr><td>Saturday,31-May-2014</td><td>129033</td>
                       <td>2613</td>
                       <td>41830</td>
                       <td>150826</td>
                       <td>4231</td> 
                       <td>62504</td>
                       <td>92068</td>
                       <td>1501</td> 
                       <td>34973</td>
                       <td>111027</td>
                       <td>4127</td>
                       <td>55096</td>
                       <td>495426</td>
                       <td>114985</td></tr>
      <tr><td>Sunday,01-Jun-2014</td><td>86525</td>
                       <td>1354</td>
                       <td>24100</td>
                       <td>126520</td>
                       <td>3028</td> 
                       <td>46863</td>
                       <td>64740</td>
                       <td>798</td> 
                       <td>20927</td>
                       <td>93145</td>
                       <td>2880</td>
                       <td>42033</td>
                       <td>378990</td>
                       <td>75505</td></tr>
      <tr><td>Monday,02-Jun-2014</td><td>165774</td>
                       <td>2746</td>
                       <td>53023</td>
                       <td>219329</td>
                       <td>5338</td> 
                       <td>88648</td>
                       <td>121514</td>
                       <td>1613</td> 
                       <td>44555</td>
                       <td>162744</td>
                       <td>4967</td>
                       <td>78924</td>
                       <td>684025</td>
                       <td>155174</td></tr>
      <tr><td>Tuesday,03-Jun-2014</td><td>341787</td>
                       <td>5688</td>
                       <td>106565</td>
                       <td>338685</td>
                       <td>8562</td> 
                       <td>144992</td>
                       <td>248357</td>
                       <td>3392</td> 
                       <td>91470</td>
                       <td>254607</td>
                       <td>7067</td>
                       <td>125501</td>
                       <td>1208145</td>
                       <td>262471</td></tr>
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
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 01-05-2014 to 10-06-2014</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Thursday,01-May-2014</td><td>1688</td>
                        <td>1420</td>
                        <td>21498</td></tr>
     <tr><td>Friday,02-May-2014</td><td>1575</td>
                        <td>1587</td>
                        <td>22857</td></tr>
     <tr><td>Saturday,03-May-2014</td><td>1142</td>
                        <td>1341</td>
                        <td>17328</td></tr>
     <tr><td>Sunday,04-May-2014</td><td>1077</td>
                        <td>1077</td>
                        <td>13861</td></tr>
     <tr><td>Monday,05-May-2014</td><td>1628</td>
                        <td>1728</td>
                        <td>25030</td></tr>
     <tr><td>Tuesday,06-May-2014</td><td>1686</td>
                        <td>1477</td>
                        <td>25878</td></tr>
     <tr><td>Wednesday,07-May-2014</td><td>1582</td>
                        <td>1702</td>
                        <td>26155</td></tr>
     <tr><td>Thursday,08-May-2014</td><td>1456</td>
                        <td>1658</td>
                        <td>25128</td></tr>
     <tr><td>Friday,09-May-2014</td><td>1323</td>
                        <td>1480</td>
                        <td>20263</td></tr>
     <tr><td>Saturday,10-May-2014</td><td>918</td>
                        <td>1399</td>
                        <td>16566</td></tr>
     <tr><td>Sunday,11-May-2014</td><td>831</td>
                        <td>1239</td>
                        <td>13994</td></tr>
     <tr><td>Monday,12-May-2014</td><td>1358</td>
                        <td>1675</td>
                        <td>25230</td></tr>
     <tr><td>Tuesday,13-May-2014</td><td>1456</td>
                        <td>1736</td>
                        <td>27136</td></tr>
     <tr><td>Wednesday,14-May-2014</td><td>1304</td>
                        <td>1896</td>
                        <td>26704</td></tr>
     <tr><td>Thursday,15-May-2014</td><td>1115</td>
                        <td>1932</td>
                        <td>25153</td></tr>
     <tr><td>Friday,16-May-2014</td><td>778</td>
                        <td>1142</td>
                        <td>16030</td></tr>
     <tr><td>Saturday,17-May-2014</td><td>795</td>
                        <td>1318</td>
                        <td>17122</td></tr>
     <tr><td>Sunday,18-May-2014</td><td>743</td>
                        <td>1184</td>
                        <td>14965</td></tr>
     <tr><td>Monday,19-May-2014</td><td>1091</td>
                        <td>1753</td>
                        <td>26082</td></tr>
     <tr><td>Tuesday,20-May-2014</td><td>999</td>
                        <td>1672</td>
                        <td>25753</td></tr>
     <tr><td>Wednesday,21-May-2014</td><td>1094</td>
                        <td>1707</td>
                        <td>26170</td></tr>
     <tr><td>Thursday,22-May-2014</td><td>920</td>
                        <td>1844</td>
                        <td>24982</td></tr>
     <tr><td>Friday,23-May-2014</td><td>808</td>
                        <td>1521</td>
                        <td>21583</td></tr>
     <tr><td>Saturday,24-May-2014</td><td>693</td>
                        <td>1245</td>
                        <td>16365</td></tr>
     <tr><td>Sunday,25-May-2014</td><td>530</td>
                        <td>1097</td>
                        <td>13210</td></tr>
     <tr><td>Monday,26-May-2014</td><td>715</td>
                        <td>1859</td>
                        <td>22797</td></tr>
     <tr><td>Tuesday,27-May-2014</td><td>745</td>
                        <td>1687</td>
                        <td>24379</td></tr>
     <tr><td>Wednesday,28-May-2014</td><td>622</td>
                        <td>1916</td>
                        <td>24013</td></tr>
     <tr><td>Thursday,29-May-2014</td><td>668</td>
                        <td>1709</td>
                        <td>23936</td></tr>
     <tr><td>Friday,30-May-2014</td><td>486</td>
                        <td>1498</td>
                        <td>19415</td></tr>
     <tr><td>Saturday,31-May-2014</td><td>429</td>
                        <td>1313</td>
                        <td>14247</td></tr>
     <tr><td>Sunday,01-Jun-2014</td><td>461</td>
                        <td>1094</td>
                        <td>13887</td></tr>
     <tr><td>Monday,02-Jun-2014</td><td>553</td>
                        <td>1495</td>
                        <td>24462</td></tr>
     <tr><td>Tuesday,03-Jun-2014</td><td>644</td>
                        <td>1555</td>
                        <td>25070</td></tr>
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
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="01">
<input type="hidden" name="endday" value="10">
<input type="hidden" name="startmonth" value="05">
<input type="hidden" name="startyear" value="2014">
<input type="hidden" name="endmonth" value="06">
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
    <tr><td>Thursday,01-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>163580</td></tr>
    <tr><td>Friday,02-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>159889</td></tr>
    <tr><td>Saturday,03-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>114895</td></tr>
    <tr><td>Sunday,04-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>77768</td></tr>
    <tr><td>Monday,05-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>141182</td></tr>
    <tr><td>Tuesday,06-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>204600</td></tr>
    <tr><td>Wednesday,07-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>171934</td></tr>
    <tr><td>Thursday,08-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>195772</td></tr>
    <tr><td>Friday,09-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>177981</td></tr>
    <tr><td>Saturday,10-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>114350</td></tr>
    <tr><td>Sunday,11-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>76488</td></tr>
    <tr><td>Monday,12-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>154519</td></tr>
    <tr><td>Tuesday,13-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>173997</td></tr>
    <tr><td>Wednesday,14-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>198212</td></tr>
    <tr><td>Thursday,15-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>215973</td></tr>
    <tr><td>Friday,16-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>131092</td></tr>
    <tr><td>Saturday,17-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>113415</td></tr>
    <tr><td>Sunday,18-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>78682</td></tr>
    <tr><td>Monday,19-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>162603</td></tr>
    <tr><td>Tuesday,20-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>181384</td></tr>
    <tr><td>Wednesday,21-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>241813</td></tr>
    <tr><td>Thursday,22-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>197193</td></tr>
    <tr><td>Friday,23-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>161200</td></tr>
    <tr><td>Saturday,24-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>117368</td></tr>
    <tr><td>Sunday,25-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>76359</td></tr>
    <tr><td>Monday,26-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>152454</td></tr>
    <tr><td>Tuesday,27-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>268587</td></tr>
    <tr><td>Wednesday,28-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>195043</td></tr>
    <tr><td>Thursday,29-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>183542</td></tr>
    <tr><td>Friday,30-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>163015</td></tr>
    <tr><td>Saturday,31-May-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>114985</td></tr>
    <tr><td>Sunday,01-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>75505</td></tr>
    <tr><td>Monday,02-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>155174</td></tr>
    <tr><td>Tuesday,03-Jun-2014</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>262471</td></tr>
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