<?php /* Smarty version 2.6.19, created on 2014-09-01 09:16:06
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_01-08-2013_to_01-09-2013.tpl */ ?>
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
        <select name="startyear" value="2013">
          <option value="2004" >2004</option>
		<option value="2005" >2005</option>
                <option value="2006" >2006</option>
		<option value="2007" >2007</option>
		<option value="2008" >2008</option>
		<option value="2009" >2009</option>
		<option value="2010" >2010</option>
		<option value="2011" >2011</option>
		<option value="2012" >2012</option>
		<option value="2013"  selected >2013</option>
        </select>
        </font></b></TD>
      <TD width="46"> 
        <div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">To</font></b></div>
      </TD>
      <TD width="46"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endday" value="01">
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
        <select name="endmonth" value="09">
           <option value="01" >JAN</option>
	   <option value="02" >FEB</option>
	   <option value="03" >MAR</option>
	   <option value="04" >APR</option>
	   <option value="05" >MAY</option>
	   <option value="06" >JUN</option>
	   <option value="07" >JUL</option>
	   <option value="08" >AUG</option>
	   <option value="09"  selected >SEP</option>
	   <option value="10" >OCT</option>
	   <option value="11" >NOV</option>
	   <option value="12" >DEC</option>
        </select>
        </font></b></TD>
      <TD width="57"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endyear" value="2013">
          <option value="2004" >2004</option>
		<option value="2005" >2005</option>
                <option value="2006" >2006</option>
		<option value="2007" >2007</option>
		<option value="2008" >2008</option>
		<option value="2009" >2009</option>
		<option value="2010" >2010</option>
		<option value="2011" >2011</option>
		<option value="2012" >2012</option>
		<option value="2013"  selected >2013</option>
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
 <tr><td colspan="15" align="center">Apply Online from 01-08-2013 to 01-09-2013</td></tr>
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
    <tr><td>Thursday,01-Aug-2013</td><td>416951</td>
                       <td>5751</td>
                       <td>107535</td>
                       <td>395503</td>
                       <td>8176</td> 
                       <td>154843</td>
                       <td>119914</td>
                       <td>1220</td> 
                       <td>55074</td>
                       <td>107601</td>
                       <td>2893</td>
                       <td>69577</td>
                       <td>1058009</td>
                       <td>233618</td></tr>
      <tr><td>Friday,02-Aug-2013</td><td>432505</td>
                       <td>5954</td>
                       <td>117810</td>
                       <td>362650</td>
                       <td>8019</td> 
                       <td>147579</td>
                       <td>122593</td>
                       <td>1446</td> 
                       <td>59350</td>
                       <td>98615</td>
                       <td>2653</td>
                       <td>64625</td>
                       <td>1034435</td>
                       <td>236777</td></tr>
      <tr><td>Saturday,03-Aug-2013</td><td>275202</td>
                       <td>3821</td>
                       <td>72731</td>
                       <td>219742</td>
                       <td>4632</td> 
                       <td>88993</td>
                       <td>82225</td>
                       <td>960</td> 
                       <td>38482</td>
                       <td>60984</td>
                       <td>1513</td>
                       <td>38771</td>
                       <td>649079</td>
                       <td>145605</td></tr>
      <tr><td>Sunday,04-Aug-2013</td><td>187691</td>
                       <td>2183</td>
                       <td>43644</td>
                       <td>158625</td>
                       <td>3570</td> 
                       <td>60888</td>
                       <td>60113</td>
                       <td>611</td> 
                       <td>25627</td>
                       <td>45788</td>
                       <td>1192</td>
                       <td>28009</td>
                       <td>459773</td>
                       <td>90923</td></tr>
      <tr><td>Monday,05-Aug-2013</td><td>396841</td>
                       <td>5329</td>
                       <td>105651</td>
                       <td>341024</td>
                       <td>6631</td> 
                       <td>131241</td>
                       <td>120605</td>
                       <td>1361</td> 
                       <td>55958</td>
                       <td>97975</td>
                       <td>2233</td>
                       <td>61711</td>
                       <td>971999</td>
                       <td>211257</td></tr>
      <tr><td>Tuesday,06-Aug-2013</td><td>454770</td>
                       <td>6319</td>
                       <td>119309</td>
                       <td>440140</td>
                       <td>10382</td> 
                       <td>175353</td>
                       <td>138902</td>
                       <td>1556</td> 
                       <td>64509</td>
                       <td>126432</td>
                       <td>3365</td>
                       <td>81984</td>
                       <td>1181866</td>
                       <td>260246</td></tr>
      <tr><td>Wednesday,07-Aug-2013</td><td>383097</td>
                       <td>5641</td>
                       <td>106735</td>
                       <td>328929</td>
                       <td>6709</td> 
                       <td>131341</td>
                       <td>114631</td>
                       <td>1378</td> 
                       <td>55800</td>
                       <td>99388</td>
                       <td>2595</td>
                       <td>63823</td>
                       <td>942368</td>
                       <td>218738</td></tr>
      <tr><td>Thursday,08-Aug-2013</td><td>365638</td>
                       <td>5000</td>
                       <td>97161</td>
                       <td>356906</td>
                       <td>7784</td> 
                       <td>143949</td>
                       <td>108888</td>
                       <td>1267</td> 
                       <td>52107</td>
                       <td>99963</td>
                       <td>2524</td>
                       <td>64591</td>
                       <td>947970</td>
                       <td>216237</td></tr>
      <tr><td>Friday,09-Aug-2013</td><td>342415</td>
                       <td>4587</td>
                       <td>93100</td>
                       <td>292279</td>
                       <td>6210</td> 
                       <td>122290</td>
                       <td>103263</td>
                       <td>1126</td> 
                       <td>49214</td>
                       <td>81964</td>
                       <td>1877</td>
                       <td>53386</td>
                       <td>833721</td>
                       <td>192466</td></tr>
      <tr><td>Saturday,10-Aug-2013</td><td>276948</td>
                       <td>3913</td>
                       <td>75557</td>
                       <td>205248</td>
                       <td>4528</td> 
                       <td>82844</td>
                       <td>84284</td>
                       <td>940</td> 
                       <td>39816</td>
                       <td>57361</td>
                       <td>1455</td>
                       <td>37096</td>
                       <td>634677</td>
                       <td>143319</td></tr>
      <tr><td>Sunday,11-Aug-2013</td><td>184761</td>
                       <td>2104</td>
                       <td>44775</td>
                       <td>163459</td>
                       <td>3556</td> 
                       <td>62535</td>
                       <td>59179</td>
                       <td>612</td> 
                       <td>25854</td>
                       <td>45134</td>
                       <td>1273</td>
                       <td>28147</td>
                       <td>460078</td>
                       <td>93998</td></tr>
      <tr><td>Monday,12-Aug-2013</td><td>373733</td>
                       <td>4637</td>
                       <td>103566</td>
                       <td>333157</td>
                       <td>6135</td> 
                       <td>127905</td>
                       <td>113666</td>
                       <td>1218</td> 
                       <td>54524</td>
                       <td>86387</td>
                       <td>1977</td>
                       <td>54788</td>
                       <td>920910</td>
                       <td>205207</td></tr>
      <tr><td>Tuesday,13-Aug-2013</td><td>427723</td>
                       <td>6031</td>
                       <td>113079</td>
                       <td>446979</td>
                       <td>10513</td> 
                       <td>178924</td>
                       <td>124978</td>
                       <td>1440</td> 
                       <td>60254</td>
                       <td>115518</td>
                       <td>3036</td>
                       <td>76397</td>
                       <td>1136218</td>
                       <td>253687</td></tr>
      <tr><td>Wednesday,14-Aug-2013</td><td>376522</td>
                       <td>5861</td>
                       <td>107922</td>
                       <td>287498</td>
                       <td>5809</td> 
                       <td>117123</td>
                       <td>97038</td>
                       <td>1119</td> 
                       <td>48907</td>
                       <td>76173</td>
                       <td>2051</td>
                       <td>49989</td>
                       <td>852071</td>
                       <td>204362</td></tr>
      <tr><td>Thursday,15-Aug-2013</td><td>280822</td>
                       <td>3706</td>
                       <td>70011</td>
                       <td>302561</td>
                       <td>6269</td> 
                       <td>118666</td>
                       <td>78504</td>
                       <td>719</td> 
                       <td>35876</td>
                       <td>75489</td>
                       <td>1873</td>
                       <td>49581</td>
                       <td>749943</td>
                       <td>165202</td></tr>
      <tr><td>Friday,16-Aug-2013</td><td>411198</td>
                       <td>5358</td>
                       <td>113346</td>
                       <td>376350</td>
                       <td>8732</td> 
                       <td>155528</td>
                       <td>114742</td>
                       <td>1238</td> 
                       <td>56938</td>
                       <td>93170</td>
                       <td>2514</td>
                       <td>62307</td>
                       <td>1013302</td>
                       <td>235734</td></tr>
      <tr><td>Saturday,17-Aug-2013</td><td>256971</td>
                       <td>3734</td>
                       <td>68227</td>
                       <td>203020</td>
                       <td>4737</td> 
                       <td>83526</td>
                       <td>73830</td>
                       <td>841</td> 
                       <td>35649</td>
                       <td>53917</td>
                       <td>1490</td>
                       <td>35534</td>
                       <td>598540</td>
                       <td>136142</td></tr>
      <tr><td>Sunday,18-Aug-2013</td><td>177550</td>
                       <td>2095</td>
                       <td>42238</td>
                       <td>159065</td>
                       <td>3578</td> 
                       <td>60762</td>
                       <td>52478</td>
                       <td>544</td> 
                       <td>23637</td>
                       <td>42466</td>
                       <td>1337</td>
                       <td>27256</td>
                       <td>439113</td>
                       <td>89249</td></tr>
      <tr><td>Monday,19-Aug-2013</td><td>365395</td>
                       <td>4488</td>
                       <td>97421</td>
                       <td>325361</td>
                       <td>6573</td> 
                       <td>128651</td>
                       <td>103612</td>
                       <td>1124</td> 
                       <td>50835</td>
                       <td>87067</td>
                       <td>2251</td>
                       <td>57073</td>
                       <td>895871</td>
                       <td>202312</td></tr>
      <tr><td>Tuesday,20-Aug-2013</td><td>349407</td>
                       <td>4400</td>
                       <td>89863</td>
                       <td>348390</td>
                       <td>8193</td> 
                       <td>145099</td>
                       <td>104196</td>
                       <td>1108</td> 
                       <td>49282</td>
                       <td>94638</td>
                       <td>2513</td>
                       <td>63914</td>
                       <td>912845</td>
                       <td>207577</td></tr>
      <tr><td>Wednesday,21-Aug-2013</td><td>375461</td>
                       <td>5079</td>
                       <td>105990</td>
                       <td>302608</td>
                       <td>5978</td> 
                       <td>126889</td>
                       <td>104766</td>
                       <td>1216</td> 
                       <td>52512</td>
                       <td>83010</td>
                       <td>1973</td>
                       <td>55777</td>
                       <td>880091</td>
                       <td>211571</td></tr>
      <tr><td>Thursday,22-Aug-2013</td><td>361451</td>
                       <td>4782</td>
                       <td>95501</td>
                       <td>372146</td>
                       <td>8363</td> 
                       <td>154093</td>
                       <td>101644</td>
                       <td>1169</td> 
                       <td>49366</td>
                       <td>97417</td>
                       <td>2440</td>
                       <td>65182</td>
                       <td>949412</td>
                       <td>221276</td></tr>
      <tr><td>Friday,23-Aug-2013</td><td>387218</td>
                       <td>5536</td>
                       <td>109405</td>
                       <td>350282</td>
                       <td>8454</td> 
                       <td>149147</td>
                       <td>109508</td>
                       <td>1162</td> 
                       <td>54683</td>
                       <td>95353</td>
                       <td>2572</td>
                       <td>63928</td>
                       <td>960085</td>
                       <td>232175</td></tr>
      <tr><td>Saturday,24-Aug-2013</td><td>251560</td>
                       <td>3338</td>
                       <td>67289</td>
                       <td>209582</td>
                       <td>4939</td> 
                       <td>85723</td>
                       <td>72830</td>
                       <td>798</td> 
                       <td>34832</td>
                       <td>60872</td>
                       <td>1511</td>
                       <td>39514</td>
                       <td>605430</td>
                       <td>138875</td></tr>
      <tr><td>Sunday,25-Aug-2013</td><td>179781</td>
                       <td>2015</td>
                       <td>42742</td>
                       <td>160460</td>
                       <td>3888</td> 
                       <td>61881</td>
                       <td>55548</td>
                       <td>524</td> 
                       <td>24553</td>
                       <td>46895</td>
                       <td>1273</td>
                       <td>29651</td>
                       <td>450384</td>
                       <td>92396</td></tr>
      <tr><td>Monday,26-Aug-2013</td><td>362439</td>
                       <td>4552</td>
                       <td>101654</td>
                       <td>316549</td>
                       <td>6278</td> 
                       <td>127816</td>
                       <td>108648</td>
                       <td>1247</td> 
                       <td>53848</td>
                       <td>92832</td>
                       <td>2349</td>
                       <td>60908</td>
                       <td>894894</td>
                       <td>210366</td></tr>
      <tr><td>Tuesday,27-Aug-2013</td><td>367058</td>
                       <td>4532</td>
                       <td>98258</td>
                       <td>392214</td>
                       <td>8719</td> 
                       <td>161452</td>
                       <td>111924</td>
                       <td>1269</td> 
                       <td>53989</td>
                       <td>112753</td>
                       <td>2898</td>
                       <td>74797</td>
                       <td>1001367</td>
                       <td>231324</td></tr>
      <tr><td>Wednesday,28-Aug-2013</td><td>375515</td>
                       <td>5656</td>
                       <td>107443</td>
                       <td>325668</td>
                       <td>6528</td> 
                       <td>130731</td>
                       <td>108621</td>
                       <td>1400</td> 
                       <td>53911</td>
                       <td>91204</td>
                       <td>2236</td>
                       <td>59243</td>
                       <td>916828</td>
                       <td>216745</td></tr>
      <tr><td>Thursday,29-Aug-2013</td><td>324618</td>
                       <td>4777</td>
                       <td>88305</td>
                       <td>333351</td>
                       <td>6775</td> 
                       <td>132080</td>
                       <td>93156</td>
                       <td>1147</td> 
                       <td>45200</td>
                       <td>91120</td>
                       <td>2320</td>
                       <td>59570</td>
                       <td>857264</td>
                       <td>198521</td></tr>
      <tr><td>Friday,30-Aug-2013</td><td>394333</td>
                       <td>5669</td>
                       <td>111954</td>
                       <td>379045</td>
                       <td>8120</td> 
                       <td>154501</td>
                       <td>108219</td>
                       <td>1499</td> 
                       <td>55541</td>
                       <td>104459</td>
                       <td>2939</td>
                       <td>70517</td>
                       <td>1004283</td>
                       <td>239978</td></tr>
      <tr><td>Saturday,31-Aug-2013</td><td>240398</td>
                       <td>3580</td>
                       <td>63879</td>
                       <td>221885</td>
                       <td>5398</td> 
                       <td>89796</td>
                       <td>69512</td>
                       <td>902</td> 
                       <td>33733</td>
                       <td>62232</td>
                       <td>1832</td>
                       <td>41184</td>
                       <td>605739</td>
                       <td>139353</td></tr>
      <tr><td>Sunday,01-Sep-2013</td><td>180854</td>
                       <td>2079</td>
                       <td>42375</td>
                       <td>183044</td>
                       <td>3839</td> 
                       <td>66215</td>
                       <td>55539</td>
                       <td>527</td> 
                       <td>24339</td>
                       <td>51894</td>
                       <td>1232</td>
                       <td>31395</td>
                       <td>479008</td>
                       <td>95311</td></tr>
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 01-08-2013 to 01-09-2013</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Thursday,01-Aug-2013</td><td>3509</td>
                        <td>2417</td>
                        <td>31991</td></tr>
     <tr><td>Friday,02-Aug-2013</td><td>2650</td>
                        <td>2327</td>
                        <td>27291</td></tr>
     <tr><td>Saturday,03-Aug-2013</td><td>1702</td>
                        <td>1760</td>
                        <td>19323</td></tr>
     <tr><td>Sunday,04-Aug-2013</td><td>1584</td>
                        <td>1545</td>
                        <td>16403</td></tr>
     <tr><td>Monday,05-Aug-2013</td><td>3222</td>
                        <td>2293</td>
                        <td>31822</td></tr>
     <tr><td>Tuesday,06-Aug-2013</td><td>3084</td>
                        <td>2339</td>
                        <td>34595</td></tr>
     <tr><td>Wednesday,07-Aug-2013</td><td>4592</td>
                        <td>2562</td>
                        <td>34145</td></tr>
     <tr><td>Thursday,08-Aug-2013</td><td>4437</td>
                        <td>2002</td>
                        <td>28363</td></tr>
     <tr><td>Friday,09-Aug-2013</td><td>2202</td>
                        <td>1634</td>
                        <td>19246</td></tr>
     <tr><td>Saturday,10-Aug-2013</td><td>1842</td>
                        <td>1750</td>
                        <td>17016</td></tr>
     <tr><td>Sunday,11-Aug-2013</td><td>1928</td>
                        <td>1446</td>
                        <td>16345</td></tr>
     <tr><td>Monday,12-Aug-2013</td><td>3573</td>
                        <td>1854</td>
                        <td>31941</td></tr>
     <tr><td>Tuesday,13-Aug-2013</td><td>2745</td>
                        <td>2243</td>
                        <td>32856</td></tr>
     <tr><td>Wednesday,14-Aug-2013</td><td>2055</td>
                        <td>2154</td>
                        <td>26322</td></tr>
     <tr><td>Thursday,15-Aug-2013</td><td>1187</td>
                        <td>1296</td>
                        <td>17669</td></tr>
     <tr><td>Friday,16-Aug-2013</td><td>1668</td>
                        <td>1948</td>
                        <td>24629</td></tr>
     <tr><td>Saturday,17-Aug-2013</td><td>971</td>
                        <td>1263</td>
                        <td>17792</td></tr>
     <tr><td>Sunday,18-Aug-2013</td><td>1081</td>
                        <td>983</td>
                        <td>15079</td></tr>
     <tr><td>Monday,19-Aug-2013</td><td>1926</td>
                        <td>2079</td>
                        <td>26944</td></tr>
     <tr><td>Tuesday,20-Aug-2013</td><td>1540</td>
                        <td>1871</td>
                        <td>23641</td></tr>
     <tr><td>Wednesday,21-Aug-2013</td><td>1773</td>
                        <td>1960</td>
                        <td>24935</td></tr>
     <tr><td>Thursday,22-Aug-2013</td><td>1615</td>
                        <td>1937</td>
                        <td>27685</td></tr>
     <tr><td>Friday,23-Aug-2013</td><td>2071</td>
                        <td>1788</td>
                        <td>25168</td></tr>
     <tr><td>Saturday,24-Aug-2013</td><td>1418</td>
                        <td>1762</td>
                        <td>19027</td></tr>
     <tr><td>Sunday,25-Aug-2013</td><td>1433</td>
                        <td>1377</td>
                        <td>16260</td></tr>
     <tr><td>Monday,26-Aug-2013</td><td>2784</td>
                        <td>1833</td>
                        <td>28615</td></tr>
     <tr><td>Tuesday,27-Aug-2013</td><td>2865</td>
                        <td>2027</td>
                        <td>28226</td></tr>
     <tr><td>Wednesday,28-Aug-2013</td><td>2991</td>
                        <td>1880</td>
                        <td>27587</td></tr>
     <tr><td>Thursday,29-Aug-2013</td><td>2666</td>
                        <td>1869</td>
                        <td>27509</td></tr>
     <tr><td>Friday,30-Aug-2013</td><td>2747</td>
                        <td>1564</td>
                        <td>27098</td></tr>
     <tr><td>Saturday,31-Aug-2013</td><td>2021</td>
                        <td>1609</td>
                        <td>18656</td></tr>
     <tr><td>Sunday,01-Sep-2013</td><td>2014</td>
                        <td>1539</td>
                        <td>18447</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="01">
<input type="hidden" name="endday" value="01">
<input type="hidden" name="startmonth" value="08">
<input type="hidden" name="startyear" value="2013">
<input type="hidden" name="endmonth" value="09">
<input type="hidden" name="endyear" value="2013">
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
    <tr><td>Thursday,01-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>233618</td></tr>
    <tr><td>Friday,02-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>236777</td></tr>
    <tr><td>Saturday,03-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>145605</td></tr>
    <tr><td>Sunday,04-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>90923</td></tr>
    <tr><td>Monday,05-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>211257</td></tr>
    <tr><td>Tuesday,06-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>260246</td></tr>
    <tr><td>Wednesday,07-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>218738</td></tr>
    <tr><td>Thursday,08-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>216237</td></tr>
    <tr><td>Friday,09-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>192466</td></tr>
    <tr><td>Saturday,10-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>143319</td></tr>
    <tr><td>Sunday,11-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>93998</td></tr>
    <tr><td>Monday,12-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>205207</td></tr>
    <tr><td>Tuesday,13-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>253687</td></tr>
    <tr><td>Wednesday,14-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>204362</td></tr>
    <tr><td>Thursday,15-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>165202</td></tr>
    <tr><td>Friday,16-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>235734</td></tr>
    <tr><td>Saturday,17-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>136142</td></tr>
    <tr><td>Sunday,18-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>89249</td></tr>
    <tr><td>Monday,19-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>202312</td></tr>
    <tr><td>Tuesday,20-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>207577</td></tr>
    <tr><td>Wednesday,21-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>211571</td></tr>
    <tr><td>Thursday,22-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>221276</td></tr>
    <tr><td>Friday,23-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>232175</td></tr>
    <tr><td>Saturday,24-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>138875</td></tr>
    <tr><td>Sunday,25-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>92396</td></tr>
    <tr><td>Monday,26-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>210366</td></tr>
    <tr><td>Tuesday,27-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>231324</td></tr>
    <tr><td>Wednesday,28-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>216745</td></tr>
    <tr><td>Thursday,29-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>198521</td></tr>
    <tr><td>Friday,30-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>239978</td></tr>
    <tr><td>Saturday,31-Aug-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>139353</td></tr>
    <tr><td>Sunday,01-Sep-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>95311</td></tr>
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