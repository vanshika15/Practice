<?php /* Smarty version 2.6.19, created on 2014-07-28 12:15:04
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_02-02-2013_to_02-03-2013.tpl */ ?>
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
        <select name="startday" value="02">
		          <option value="01" >1</option>
			<option value="02"  selected >2</option>
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
        <select name="startmonth" value="02">
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
		<option value="2014" >2014</option>
        </select>
        </font></b></TD>
      <TD width="46"> 
        <div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">To</font></b></div>
      </TD>
      <TD width="46"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endday" value="02">
		          <option value="01" >1</option>
			<option value="02"  selected >2</option>
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
        <select name="endmonth" value="03">
           <option value="01" >JAN</option>
	   <option value="02" >FEB</option>
	   <option value="03"  selected >MAR</option>
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
		<option value="2014" >2014</option>
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
 <tr><td colspan="15" align="center">Apply Online from 02-2/-2013 to 02-3/-2013</td></tr>
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
    <tr><td>Saturday,02-Feb-2013</td><td>414326</td>
                       <td>5806</td>
                       <td>115680</td>
                       <td>242591</td>
                       <td>3322</td> 
                       <td>94718</td>
                       <td>71427</td>
                       <td>914</td> 
                       <td>40325</td>
                       <td>39837</td>
                       <td>911</td>
                       <td>27880</td>
                       <td>779134</td>
                       <td>194537</td></tr>
      <tr><td>Sunday,03-Feb-2013</td><td>222447</td>
                       <td>2920</td>
                       <td>53530</td>
                       <td>179740</td>
                       <td>2578</td> 
                       <td>64723</td>
                       <td>42550</td>
                       <td>451</td> 
                       <td>21978</td>
                       <td>28837</td>
                       <td>659</td>
                       <td>19018</td>
                       <td>480182</td>
                       <td>105488</td></tr>
      <tr><td>Monday,04-Feb-2013</td><td>397072</td>
                       <td>4918</td>
                       <td>104420</td>
                       <td>289246</td>
                       <td>4432</td> 
                       <td>100176</td>
                       <td>70422</td>
                       <td>842</td> 
                       <td>39026</td>
                       <td>47662</td>
                       <td>1147</td>
                       <td>32280</td>
                       <td>815741</td>
                       <td>182886</td></tr>
      <tr><td>Tuesday,05-Feb-2013</td><td>489110</td>
                       <td>6423</td>
                       <td>131427</td>
                       <td>323432</td>
                       <td>4888</td> 
                       <td>122878</td>
                       <td>83331</td>
                       <td>1032</td> 
                       <td>46966</td>
                       <td>52212</td>
                       <td>1447</td>
                       <td>36360</td>
                       <td>961875</td>
                       <td>228490</td></tr>
      <tr><td>Wednesday,06-Feb-2013</td><td>326623</td>
                       <td>4305</td>
                       <td>83864</td>
                       <td>305651</td>
                       <td>4526</td> 
                       <td>114560</td>
                       <td>59061</td>
                       <td>750</td> 
                       <td>32374</td>
                       <td>48851</td>
                       <td>1384</td>
                       <td>33534</td>
                       <td>751151</td>
                       <td>177354</td></tr>
      <tr><td>Thursday,07-Feb-2013</td><td>494294</td>
                       <td>6870</td>
                       <td>137498</td>
                       <td>313652</td>
                       <td>4588</td> 
                       <td>123577</td>
                       <td>83104</td>
                       <td>1115</td> 
                       <td>47958</td>
                       <td>48086</td>
                       <td>1093</td>
                       <td>33672</td>
                       <td>952802</td>
                       <td>237592</td></tr>
      <tr><td>Friday,08-Feb-2013</td><td>446334</td>
                       <td>6787</td>
                       <td>125151</td>
                       <td>298138</td>
                       <td>4567</td> 
                       <td>120658</td>
                       <td>74862</td>
                       <td>1104</td> 
                       <td>42575</td>
                       <td>45277</td>
                       <td>1126</td>
                       <td>32338</td>
                       <td>878195</td>
                       <td>221795</td></tr>
      <tr><td>Saturday,09-Feb-2013</td><td>313957</td>
                       <td>5048</td>
                       <td>84494</td>
                       <td>191548</td>
                       <td>3567</td> 
                       <td>75516</td>
                       <td>54231</td>
                       <td>757</td> 
                       <td>30176</td>
                       <td>29270</td>
                       <td>774</td>
                       <td>20280</td>
                       <td>599152</td>
                       <td>144239</td></tr>
      <tr><td>Sunday,10-Feb-2013</td><td>199165</td>
                       <td>2923</td>
                       <td>46863</td>
                       <td>156094</td>
                       <td>3011</td> 
                       <td>59057</td>
                       <td>38817</td>
                       <td>528</td> 
                       <td>19959</td>
                       <td>25006</td>
                       <td>734</td>
                       <td>16651</td>
                       <td>426278</td>
                       <td>92693</td></tr>
      <tr><td>Monday,11-Feb-2013</td><td>394678</td>
                       <td>5566</td>
                       <td>102002</td>
                       <td>269839</td>
                       <td>5246</td> 
                       <td>101534</td>
                       <td>71466</td>
                       <td>978</td> 
                       <td>39431</td>
                       <td>41092</td>
                       <td>1093</td>
                       <td>28741</td>
                       <td>789958</td>
                       <td>177487</td></tr>
      <tr><td>Tuesday,12-Feb-2013</td><td>471124</td>
                       <td>6718</td>
                       <td>126408</td>
                       <td>299192</td>
                       <td>5749</td> 
                       <td>118651</td>
                       <td>84213</td>
                       <td>1224</td> 
                       <td>47666</td>
                       <td>44214</td>
                       <td>1070</td>
                       <td>31114</td>
                       <td>913504</td>
                       <td>217625</td></tr>
      <tr><td>Wednesday,13-Feb-2013</td><td>443933</td>
                       <td>6610</td>
                       <td>123888</td>
                       <td>299603</td>
                       <td>4823</td> 
                       <td>116461</td>
                       <td>76677</td>
                       <td>1096</td> 
                       <td>43753</td>
                       <td>46503</td>
                       <td>1095</td>
                       <td>31873</td>
                       <td>880340</td>
                       <td>218854</td></tr>
      <tr><td>Thursday,14-Feb-2013</td><td>322813</td>
                       <td>4694</td>
                       <td>86593</td>
                       <td>252240</td>
                       <td>4447</td> 
                       <td>101926</td>
                       <td>56811</td>
                       <td>773</td> 
                       <td>31903</td>
                       <td>39388</td>
                       <td>1054</td>
                       <td>27700</td>
                       <td>682220</td>
                       <td>171325</td></tr>
      <tr><td>Friday,15-Feb-2013</td><td>403032</td>
                       <td>5107</td>
                       <td>111823</td>
                       <td>280957</td>
                       <td>4475</td> 
                       <td>114425</td>
                       <td>71484</td>
                       <td>938</td> 
                       <td>40392</td>
                       <td>44050</td>
                       <td>1066</td>
                       <td>31051</td>
                       <td>811109</td>
                       <td>206478</td></tr>
      <tr><td>Saturday,16-Feb-2013</td><td>311512</td>
                       <td>4405</td>
                       <td>83477</td>
                       <td>213289</td>
                       <td>3693</td> 
                       <td>83283</td>
                       <td>58087</td>
                       <td>701</td> 
                       <td>31501</td>
                       <td>36437</td>
                       <td>829</td>
                       <td>24761</td>
                       <td>628953</td>
                       <td>153233</td></tr>
      <tr><td>Sunday,17-Feb-2013</td><td>203891</td>
                       <td>2356</td>
                       <td>46728</td>
                       <td>175299</td>
                       <td>3095</td> 
                       <td>65537</td>
                       <td>41443</td>
                       <td>450</td> 
                       <td>20707</td>
                       <td>30585</td>
                       <td>663</td>
                       <td>20344</td>
                       <td>457782</td>
                       <td>99458</td></tr>
      <tr><td>Monday,18-Feb-2013</td><td>501986</td>
                       <td>6223</td>
                       <td>137695</td>
                       <td>308925</td>
                       <td>5100</td> 
                       <td>119422</td>
                       <td>90871</td>
                       <td>1089</td> 
                       <td>51004</td>
                       <td>51695</td>
                       <td>1042</td>
                       <td>36302</td>
                       <td>966931</td>
                       <td>233403</td></tr>
      <tr><td>Tuesday,19-Feb-2013</td><td>368552</td>
                       <td>4970</td>
                       <td>96172</td>
                       <td>282402</td>
                       <td>5185</td> 
                       <td>112688</td>
                       <td>69751</td>
                       <td>916</td> 
                       <td>38310</td>
                       <td>48074</td>
                       <td>1131</td>
                       <td>33121</td>
                       <td>780981</td>
                       <td>186647</td></tr>
      <tr><td>Wednesday,20-Feb-2013</td><td>431344</td>
                       <td>6603</td>
                       <td>122317</td>
                       <td>297972</td>
                       <td>5395</td> 
                       <td>115566</td>
                       <td>80758</td>
                       <td>1116</td> 
                       <td>45419</td>
                       <td>50567</td>
                       <td>1190</td>
                       <td>34646</td>
                       <td>874945</td>
                       <td>217670</td></tr>
      <tr><td>Thursday,21-Feb-2013</td><td>390466</td>
                       <td>5687</td>
                       <td>105108</td>
                       <td>290293</td>
                       <td>5918</td> 
                       <td>116333</td>
                       <td>73953</td>
                       <td>962</td> 
                       <td>40615</td>
                       <td>47793</td>
                       <td>1195</td>
                       <td>32863</td>
                       <td>816267</td>
                       <td>199952</td></tr>
      <tr><td>Friday,22-Feb-2013</td><td>406799</td>
                       <td>5832</td>
                       <td>114191</td>
                       <td>286582</td>
                       <td>5446</td> 
                       <td>120421</td>
                       <td>75849</td>
                       <td>1095</td> 
                       <td>42455</td>
                       <td>45949</td>
                       <td>1077</td>
                       <td>32657</td>
                       <td>828629</td>
                       <td>213388</td></tr>
      <tr><td>Saturday,23-Feb-2013</td><td>297297</td>
                       <td>4651</td>
                       <td>82115</td>
                       <td>201214</td>
                       <td>4247</td> 
                       <td>82021</td>
                       <td>57024</td>
                       <td>829</td> 
                       <td>31906</td>
                       <td>33874</td>
                       <td>848</td>
                       <td>23831</td>
                       <td>599984</td>
                       <td>151332</td></tr>
      <tr><td>Sunday,24-Feb-2013</td><td>190578</td>
                       <td>2601</td>
                       <td>45239</td>
                       <td>169928</td>
                       <td>3480</td> 
                       <td>65784</td>
                       <td>38850</td>
                       <td>501</td> 
                       <td>20140</td>
                       <td>31091</td>
                       <td>870</td>
                       <td>21402</td>
                       <td>437899</td>
                       <td>99742</td></tr>
      <tr><td>Monday,25-Feb-2013</td><td>502819</td>
                       <td>6872</td>
                       <td>138858</td>
                       <td>301102</td>
                       <td>6079</td> 
                       <td>119143</td>
                       <td>89583</td>
                       <td>1178</td> 
                       <td>51331</td>
                       <td>49466</td>
                       <td>1212</td>
                       <td>35765</td>
                       <td>958311</td>
                       <td>234407</td></tr>
      <tr><td>Tuesday,26-Feb-2013</td><td>372957</td>
                       <td>5642</td>
                       <td>96589</td>
                       <td>294841</td>
                       <td>5925</td> 
                       <td>116580</td>
                       <td>69839</td>
                       <td>1023</td> 
                       <td>38787</td>
                       <td>46505</td>
                       <td>1249</td>
                       <td>33046</td>
                       <td>797981</td>
                       <td>188997</td></tr>
      <tr><td>Wednesday,27-Feb-2013</td><td>457088</td>
                       <td>7300</td>
                       <td>128009</td>
                       <td>302193</td>
                       <td>5938</td> 
                       <td>119376</td>
                       <td>79980</td>
                       <td>1233</td> 
                       <td>45824</td>
                       <td>47102</td>
                       <td>1184</td>
                       <td>33105</td>
                       <td>902018</td>
                       <td>226267</td></tr>
      <tr><td>Thursday,28-Feb-2013</td><td>--</td>
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
      <tr><td>Friday,01-Mar-2013</td><td>407006</td>
                       <td>5533</td>
                       <td>109763</td>
                       <td>295937</td>
                       <td>5267</td> 
                       <td>120243</td>
                       <td>70927</td>
                       <td>859</td> 
                       <td>39482</td>
                       <td>44435</td>
                       <td>1051</td>
                       <td>30819</td>
                       <td>831015</td>
                       <td>206060</td></tr>
      <tr><td>Saturday,02-Mar-2013</td><td>329990</td>
                       <td>4940</td>
                       <td>88578</td>
                       <td>203182</td>
                       <td>3858</td> 
                       <td>81130</td>
                       <td>57712</td>
                       <td>759</td> 
                       <td>31914</td>
                       <td>33021</td>
                       <td>841</td>
                       <td>22885</td>
                       <td>634303</td>
                       <td>155189</td></tr>
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 02-2/-2013 to 02-3/-2013</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Saturday,02-Feb-2013</td><td>3302</td>
                        <td>1680</td>
                        <td>20123</td></tr>
     <tr><td>Sunday,03-Feb-2013</td><td>2859</td>
                        <td>1492</td>
                        <td>16002</td></tr>
     <tr><td>Monday,04-Feb-2013</td><td>4300</td>
                        <td>2213</td>
                        <td>30498</td></tr>
     <tr><td>Tuesday,05-Feb-2013</td><td>3524</td>
                        <td>2470</td>
                        <td>31732</td></tr>
     <tr><td>Wednesday,06-Feb-2013</td><td>4050</td>
                        <td>2358</td>
                        <td>31899</td></tr>
     <tr><td>Thursday,07-Feb-2013</td><td>4603</td>
                        <td>2327</td>
                        <td>31069</td></tr>
     <tr><td>Friday,08-Feb-2013</td><td>3227</td>
                        <td>2155</td>
                        <td>27496</td></tr>
     <tr><td>Saturday,09-Feb-2013</td><td>2631</td>
                        <td>1785</td>
                        <td>19343</td></tr>
     <tr><td>Sunday,10-Feb-2013</td><td>2330</td>
                        <td>1402</td>
                        <td>16129</td></tr>
     <tr><td>Monday,11-Feb-2013</td><td>4260</td>
                        <td>2316</td>
                        <td>30582</td></tr>
     <tr><td>Tuesday,12-Feb-2013</td><td>3324</td>
                        <td>2646</td>
                        <td>31721</td></tr>
     <tr><td>Wednesday,13-Feb-2013</td><td>3198</td>
                        <td>2160</td>
                        <td>30513</td></tr>
     <tr><td>Thursday,14-Feb-2013</td><td>2380</td>
                        <td>2052</td>
                        <td>29681</td></tr>
     <tr><td>Friday,15-Feb-2013</td><td>2599</td>
                        <td>2194</td>
                        <td>27821</td></tr>
     <tr><td>Saturday,16-Feb-2013</td><td>1843</td>
                        <td>1910</td>
                        <td>21164</td></tr>
     <tr><td>Sunday,17-Feb-2013</td><td>1587</td>
                        <td>1580</td>
                        <td>17892</td></tr>
     <tr><td>Monday,18-Feb-2013</td><td>2231</td>
                        <td>2288</td>
                        <td>29410</td></tr>
     <tr><td>Tuesday,19-Feb-2013</td><td>1704</td>
                        <td>2376</td>
                        <td>28515</td></tr>
     <tr><td>Wednesday,20-Feb-2013</td><td>2021</td>
                        <td>2453</td>
                        <td>30383</td></tr>
     <tr><td>Thursday,21-Feb-2013</td><td>1787</td>
                        <td>2462</td>
                        <td>30432</td></tr>
     <tr><td>Friday,22-Feb-2013</td><td>2073</td>
                        <td>1950</td>
                        <td>28295</td></tr>
     <tr><td>Saturday,23-Feb-2013</td><td>1446</td>
                        <td>1509</td>
                        <td>18844</td></tr>
     <tr><td>Sunday,24-Feb-2013</td><td>1512</td>
                        <td>1467</td>
                        <td>16620</td></tr>
     <tr><td>Monday,25-Feb-2013</td><td>2012</td>
                        <td>2376</td>
                        <td>30329</td></tr>
     <tr><td>Tuesday,26-Feb-2013</td><td>1658</td>
                        <td>2495</td>
                        <td>31490</td></tr>
     <tr><td>Wednesday,27-Feb-2013</td><td>2477</td>
                        <td>2333</td>
                        <td>32133</td></tr>
     <tr><td>Thursday,28-Feb-2013</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Friday,01-Mar-2013</td><td>2011</td>
                        <td>2062</td>
                        <td>28939</td></tr>
     <tr><td>Saturday,02-Mar-2013</td><td>1244</td>
                        <td>1744</td>
                        <td>19832</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="02">
<input type="hidden" name="endday" value="02">
<input type="hidden" name="startmonth" value="02">
<input type="hidden" name="startyear" value="2013">
<input type="hidden" name="endmonth" value="03">
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
    <tr><td>Saturday,02-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>194537</td></tr>
    <tr><td>Sunday,03-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>105488</td></tr>
    <tr><td>Monday,04-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>182886</td></tr>
    <tr><td>Tuesday,05-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>228490</td></tr>
    <tr><td>Wednesday,06-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>177354</td></tr>
    <tr><td>Thursday,07-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>237592</td></tr>
    <tr><td>Friday,08-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>221795</td></tr>
    <tr><td>Saturday,09-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>144239</td></tr>
    <tr><td>Sunday,10-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>92693</td></tr>
    <tr><td>Monday,11-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>177487</td></tr>
    <tr><td>Tuesday,12-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>217625</td></tr>
    <tr><td>Wednesday,13-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>218854</td></tr>
    <tr><td>Thursday,14-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>171325</td></tr>
    <tr><td>Friday,15-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>206478</td></tr>
    <tr><td>Saturday,16-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>153233</td></tr>
    <tr><td>Sunday,17-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>99458</td></tr>
    <tr><td>Monday,18-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>233403</td></tr>
    <tr><td>Tuesday,19-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>186647</td></tr>
    <tr><td>Wednesday,20-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>217670</td></tr>
    <tr><td>Thursday,21-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>199952</td></tr>
    <tr><td>Friday,22-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>213388</td></tr>
    <tr><td>Saturday,23-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>151332</td></tr>
    <tr><td>Sunday,24-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>99742</td></tr>
    <tr><td>Monday,25-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>234407</td></tr>
    <tr><td>Tuesday,26-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>188997</td></tr>
    <tr><td>Wednesday,27-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>226267</td></tr>
    <tr><td>Thursday,28-Feb-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td></tr>
    <tr><td>Friday,01-Mar-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>206060</td></tr>
    <tr><td>Saturday,02-Mar-2013</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>155189</td></tr>
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