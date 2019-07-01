<?php /* Smarty version 2.6.19, created on 2016-01-06 13:04:05
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_01-11-2015_to_05-01-2016.tpl */ ?>
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
        <select name="startmonth" value="11">
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
	   <option value="11"  selected >NOV</option>
	   <option value="12" >DEC</option>
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
        <select name="endday" value="05">
		          <option value="01" >1</option>
			<option value="02" >2</option>
			<option value="03" >3</option>
			<option value="04" >4</option>
			<option value="05"  selected >5</option>
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
 <tr><td colspan="15" align="center">Apply Online from 01-11-2015 to 05-01-2016</td></tr>
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
    <tr><td>Sunday,01-Nov-2015</td><td>21582</td>
                       <td>660</td>
                       <td>14042</td>
                       <td>240656</td>
                       <td>4268</td> 
                       <td>86498</td>
                       <td>20634</td>
                       <td>588</td> 
                       <td>13635</td>
                       <td>263450</td>
                       <td>9570</td>
                       <td>97614</td>
                       <td>561408</td>
                       <td>136474</td></tr>
      <tr><td>Monday,02-Nov-2015</td><td>29914</td>
                       <td>909</td>
                       <td>20494</td>
                       <td>399508</td>
                       <td>7987</td> 
                       <td>146079</td>
                       <td>29693</td>
                       <td>824</td> 
                       <td>20652</td>
                       <td>444395</td>
                       <td>19243</td>
                       <td>168814</td>
                       <td>932473</td>
                       <td>230266</td></tr>
      <tr><td>Tuesday,03-Nov-2015</td><td>79594</td>
                       <td>2214</td>
                       <td>53111</td>
                       <td>501662</td>
                       <td>10375</td> 
                       <td>186069</td>
                       <td>74771</td>
                       <td>1864</td> 
                       <td>51310</td>
                       <td>561078</td>
                       <td>25315</td>
                       <td>215679</td>
                       <td>1256873</td>
                       <td>309691</td></tr>
      <tr><td>Wednesday,04-Nov-2015</td><td>58257</td>
                       <td>1896</td>
                       <td>40510</td>
                       <td>402868</td>
                       <td>7368</td> 
                       <td>147456</td>
                       <td>53927</td>
                       <td>1603</td> 
                       <td>38329</td>
                       <td>459741</td>
                       <td>16328</td>
                       <td>173927</td>
                       <td>1001988</td>
                       <td>250993</td></tr>
      <tr><td>Thursday,05-Nov-2015</td><td>26263</td>
                       <td>1074</td>
                       <td>19018</td>
                       <td>384965</td>
                       <td>7233</td> 
                       <td>143592</td>
                       <td>24534</td>
                       <td>835</td> 
                       <td>17856</td>
                       <td>439707</td>
                       <td>15810</td>
                       <td>167542</td>
                       <td>900421</td>
                       <td>226397</td></tr>
      <tr><td>Friday,06-Nov-2015</td><td>67012</td>
                       <td>1665</td>
                       <td>44290</td>
                       <td>422066</td>
                       <td>8884</td> 
                       <td>160408</td>
                       <td>62307</td>
                       <td>1542</td> 
                       <td>42588</td>
                       <td>485270</td>
                       <td>17270</td>
                       <td>187670</td>
                       <td>1066016</td>
                       <td>267936</td></tr>
      <tr><td>Saturday,07-Nov-2015</td><td>37398</td>
                       <td>1270</td>
                       <td>25445</td>
                       <td>255377</td>
                       <td>4885</td> 
                       <td>96432</td>
                       <td>35279</td>
                       <td>1113</td> 
                       <td>24504</td>
                       <td>296014</td>
                       <td>11049</td>
                       <td>114760</td>
                       <td>642385</td>
                       <td>165586</td></tr>
      <tr><td>Sunday,08-Nov-2015</td><td>11573</td>
                       <td>420</td>
                       <td>7474</td>
                       <td>189111</td>
                       <td>3441</td> 
                       <td>68091</td>
                       <td>11095</td>
                       <td>350</td> 
                       <td>7274</td>
                       <td>215661</td>
                       <td>7713</td>
                       <td>80094</td>
                       <td>439364</td>
                       <td>104599</td></tr>
      <tr><td>Monday,09-Nov-2015</td><td>30029</td>
                       <td>868</td>
                       <td>22299</td>
                       <td>293942</td>
                       <td>5264</td> 
                       <td>110286</td>
                       <td>32549</td>
                       <td>908</td> 
                       <td>24123</td>
                       <td>354032</td>
                       <td>11241</td>
                       <td>134557</td>
                       <td>728833</td>
                       <td>185908</td></tr>
      <tr><td>Tuesday,10-Nov-2015</td><td>43596</td>
                       <td>1091</td>
                       <td>29054</td>
                       <td>279359</td>
                       <td>5325</td> 
                       <td>107199</td>
                       <td>40345</td>
                       <td>1007</td> 
                       <td>27866</td>
                       <td>327871</td>
                       <td>10882</td>
                       <td>127549</td>
                       <td>709476</td>
                       <td>183524</td></tr>
      <tr><td>Wednesday,11-Nov-2015</td><td>40387</td>
                       <td>1050</td>
                       <td>27432</td>
                       <td>204552</td>
                       <td>3674</td> 
                       <td>77458</td>
                       <td>35739</td>
                       <td>906</td> 
                       <td>25089</td>
                       <td>234211</td>
                       <td>7227</td>
                       <td>91111</td>
                       <td>527746</td>
                       <td>139739</td></tr>
      <tr><td>Thursday,12-Nov-2015</td><td>27898</td>
                       <td>976</td>
                       <td>18890</td>
                       <td>302522</td>
                       <td>6076</td> 
                       <td>111169</td>
                       <td>25751</td>
                       <td>756</td> 
                       <td>17554</td>
                       <td>360395</td>
                       <td>11182</td>
                       <td>132450</td>
                       <td>735556</td>
                       <td>179501</td></tr>
      <tr><td>Friday,13-Nov-2015</td><td>49184</td>
                       <td>1310</td>
                       <td>33091</td>
                       <td>362357</td>
                       <td>7334</td> 
                       <td>133743</td>
                       <td>46121</td>
                       <td>1152</td> 
                       <td>31631</td>
                       <td>421078</td>
                       <td>12839</td>
                       <td>156110</td>
                       <td>901375</td>
                       <td>220872</td></tr>
      <tr><td>Saturday,14-Nov-2015</td><td>44243</td>
                       <td>1379</td>
                       <td>28998</td>
                       <td>280715</td>
                       <td>5522</td> 
                       <td>102184</td>
                       <td>42196</td>
                       <td>1298</td> 
                       <td>28386</td>
                       <td>321291</td>
                       <td>10279</td>
                       <td>118271</td>
                       <td>706923</td>
                       <td>172583</td></tr>
      <tr><td>Sunday,15-Nov-2015</td><td>15062</td>
                       <td>478</td>
                       <td>9519</td>
                       <td>232945</td>
                       <td>4472</td> 
                       <td>81181</td>
                       <td>14443</td>
                       <td>448</td> 
                       <td>9409</td>
                       <td>256404</td>
                       <td>8217</td>
                       <td>90139</td>
                       <td>532469</td>
                       <td>122814</td></tr>
      <tr><td>Monday,16-Nov-2015</td><td>31634</td>
                       <td>1058</td>
                       <td>22018</td>
                       <td>400047</td>
                       <td>7847</td> 
                       <td>145001</td>
                       <td>33417</td>
                       <td>986</td> 
                       <td>22937</td>
                       <td>473984</td>
                       <td>12845</td>
                       <td>166769</td>
                       <td>961818</td>
                       <td>228101</td></tr>
      <tr><td>Tuesday,17-Nov-2015</td><td>74805</td>
                       <td>2303</td>
                       <td>50407</td>
                       <td>494232</td>
                       <td>10475</td> 
                       <td>183454</td>
                       <td>80266</td>
                       <td>2246</td> 
                       <td>54109</td>
                       <td>581460</td>
                       <td>18931</td>
                       <td>213918</td>
                       <td>1264718</td>
                       <td>305269</td></tr>
      <tr><td>Wednesday,18-Nov-2015</td><td>51034</td>
                       <td>1657</td>
                       <td>36129</td>
                       <td>420180</td>
                       <td>8724</td> 
                       <td>153432</td>
                       <td>47824</td>
                       <td>1524</td> 
                       <td>34247</td>
                       <td>483912</td>
                       <td>17324</td>
                       <td>178709</td>
                       <td>1032179</td>
                       <td>252878</td></tr>
      <tr><td>Thursday,19-Nov-2015</td><td>22992</td>
                       <td>947</td>
                       <td>16670</td>
                       <td>422569</td>
                       <td>8568</td> 
                       <td>154997</td>
                       <td>20870</td>
                       <td>832</td> 
                       <td>15311</td>
                       <td>472668</td>
                       <td>15964</td>
                       <td>177669</td>
                       <td>965410</td>
                       <td>237665</td></tr>
      <tr><td>Friday,20-Nov-2015</td><td>64610</td>
                       <td>1828</td>
                       <td>44922</td>
                       <td>453155</td>
                       <td>9624</td> 
                       <td>169622</td>
                       <td>65938</td>
                       <td>1730</td> 
                       <td>45911</td>
                       <td>495263</td>
                       <td>17428</td>
                       <td>191444</td>
                       <td>1109576</td>
                       <td>279172</td></tr>
      <tr><td>Saturday,21-Nov-2015</td><td>33203</td>
                       <td>1298</td>
                       <td>23902</td>
                       <td>307891</td>
                       <td>6488</td> 
                       <td>113868</td>
                       <td>31979</td>
                       <td>1073</td> 
                       <td>22889</td>
                       <td>343007</td>
                       <td>12062</td>
                       <td>132433</td>
                       <td>737001</td>
                       <td>184435</td></tr>
      <tr><td>Sunday,22-Nov-2015</td><td>11984</td>
                       <td>436</td>
                       <td>8054</td>
                       <td>257559</td>
                       <td>4596</td> 
                       <td>90671</td>
                       <td>12096</td>
                       <td>373</td> 
                       <td>7991</td>
                       <td>283757</td>
                       <td>9302</td>
                       <td>103542</td>
                       <td>580103</td>
                       <td>132478</td></tr>
      <tr><td>Monday,23-Nov-2015</td><td>37177</td>
                       <td>1061</td>
                       <td>27499</td>
                       <td>437397</td>
                       <td>8751</td> 
                       <td>159159</td>
                       <td>33167</td>
                       <td>952</td> 
                       <td>24728</td>
                       <td>481560</td>
                       <td>15333</td>
                       <td>178572</td>
                       <td>1015398</td>
                       <td>246670</td></tr>
      <tr><td>Tuesday,24-Nov-2015</td><td>42177</td>
                       <td>1507</td>
                       <td>32137</td>
                       <td>498390</td>
                       <td>10694</td> 
                       <td>186329</td>
                       <td>46514</td>
                       <td>1392</td> 
                       <td>34787</td>
                       <td>559661</td>
                       <td>17022</td>
                       <td>210274</td>
                       <td>1177357</td>
                       <td>289640</td></tr>
      <tr><td>Wednesday,25-Nov-2015</td><td>46340</td>
                       <td>1609</td>
                       <td>35092</td>
                       <td>390018</td>
                       <td>8130</td> 
                       <td>146581</td>
                       <td>40478</td>
                       <td>1369</td> 
                       <td>31330</td>
                       <td>462402</td>
                       <td>16126</td>
                       <td>172989</td>
                       <td>966472</td>
                       <td>243073</td></tr>
      <tr><td>Thursday,26-Nov-2015</td><td>21419</td>
                       <td>888</td>
                       <td>16036</td>
                       <td>370169</td>
                       <td>7678</td> 
                       <td>140839</td>
                       <td>18377</td>
                       <td>671</td> 
                       <td>13986</td>
                       <td>432370</td>
                       <td>15002</td>
                       <td>163291</td>
                       <td>866574</td>
                       <td>216836</td></tr>
      <tr><td>Friday,27-Nov-2015</td><td>53912</td>
                       <td>1523</td>
                       <td>36343</td>
                       <td>375394</td>
                       <td>7894</td> 
                       <td>145619</td>
                       <td>49180</td>
                       <td>1217</td> 
                       <td>33941</td>
                       <td>436808</td>
                       <td>15009</td>
                       <td>168458</td>
                       <td>940937</td>
                       <td>241896</td></tr>
      <tr><td>Saturday,28-Nov-2015</td><td>54342</td>
                       <td>1681</td>
                       <td>36687</td>
                       <td>292237</td>
                       <td>6173</td> 
                       <td>111460</td>
                       <td>50881</td>
                       <td>1468</td> 
                       <td>35311</td>
                       <td>342199</td>
                       <td>12599</td>
                       <td>131573</td>
                       <td>761580</td>
                       <td>196050</td></tr>
      <tr><td>Sunday,29-Nov-2015</td><td>15520</td>
                       <td>608</td>
                       <td>10233</td>
                       <td>250967</td>
                       <td>4346</td> 
                       <td>91152</td>
                       <td>15120</td>
                       <td>496</td> 
                       <td>9952</td>
                       <td>287315</td>
                       <td>8772</td>
                       <td>102869</td>
                       <td>583144</td>
                       <td>139172</td></tr>
      <tr><td>Monday,30-Nov-2015</td><td>35315</td>
                       <td>1115</td>
                       <td>25588</td>
                       <td>423318</td>
                       <td>8372</td> 
                       <td>157907</td>
                       <td>35972</td>
                       <td>1040</td> 
                       <td>26350</td>
                       <td>499604</td>
                       <td>17385</td>
                       <td>183725</td>
                       <td>1022121</td>
                       <td>250784</td></tr>
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
                       <td>595761</td>
                       <td>11521</td> 
                       <td>206588</td>
                       <td>71786</td>
                       <td>2353</td> 
                       <td>49171</td>
                       <td>637161</td>
                       <td>21109</td>
                       <td>229722</td>
                       <td>1444157</td>
                       <td>337585</td></tr>
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 01-11-2015 to 05-01-2016</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Sunday,01-Nov-2015</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Monday,02-Nov-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,03-Nov-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,04-Nov-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Thursday,05-Nov-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Friday,06-Nov-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Saturday,07-Nov-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,08-Nov-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,09-Nov-2015</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,10-Nov-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,11-Nov-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Thursday,12-Nov-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Friday,13-Nov-2015</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Saturday,14-Nov-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,15-Nov-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,16-Nov-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,17-Nov-2015</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,18-Nov-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Thursday,19-Nov-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Friday,20-Nov-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Saturday,21-Nov-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,22-Nov-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,23-Nov-2015</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,24-Nov-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,25-Nov-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Thursday,26-Nov-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Friday,27-Nov-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Saturday,28-Nov-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,29-Nov-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,30-Nov-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
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
     <tr><td>Monday,04-Jan-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,05-Jan-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="01">
<input type="hidden" name="endday" value="05">
<input type="hidden" name="startmonth" value="11">
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
    <tr><td>Sunday,01-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>136474</td></tr>
    <tr><td>Monday,02-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>230266</td></tr>
    <tr><td>Tuesday,03-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>309691</td></tr>
    <tr><td>Wednesday,04-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>250993</td></tr>
    <tr><td>Thursday,05-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>226397</td></tr>
    <tr><td>Friday,06-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>267936</td></tr>
    <tr><td>Saturday,07-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>165586</td></tr>
    <tr><td>Sunday,08-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>104599</td></tr>
    <tr><td>Monday,09-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>185908</td></tr>
    <tr><td>Tuesday,10-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>183524</td></tr>
    <tr><td>Wednesday,11-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>139739</td></tr>
    <tr><td>Thursday,12-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>179501</td></tr>
    <tr><td>Friday,13-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>220872</td></tr>
    <tr><td>Saturday,14-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>172583</td></tr>
    <tr><td>Sunday,15-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>122814</td></tr>
    <tr><td>Monday,16-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>228101</td></tr>
    <tr><td>Tuesday,17-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>305269</td></tr>
    <tr><td>Wednesday,18-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>252878</td></tr>
    <tr><td>Thursday,19-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>237665</td></tr>
    <tr><td>Friday,20-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>279172</td></tr>
    <tr><td>Saturday,21-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>184435</td></tr>
    <tr><td>Sunday,22-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>132478</td></tr>
    <tr><td>Monday,23-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>246670</td></tr>
    <tr><td>Tuesday,24-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>289640</td></tr>
    <tr><td>Wednesday,25-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>243073</td></tr>
    <tr><td>Thursday,26-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>216836</td></tr>
    <tr><td>Friday,27-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>241896</td></tr>
    <tr><td>Saturday,28-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>196050</td></tr>
    <tr><td>Sunday,29-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>139172</td></tr>
    <tr><td>Monday,30-Nov-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>250784</td></tr>
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
                       <td>337585</td></tr>
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