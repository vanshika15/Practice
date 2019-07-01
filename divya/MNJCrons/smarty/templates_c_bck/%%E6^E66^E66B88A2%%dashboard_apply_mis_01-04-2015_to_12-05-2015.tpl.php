<?php /* Smarty version 2.6.19, created on 2015-05-12 14:51:19
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_01-04-2015_to_12-05-2015.tpl */ ?>
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
        <select name="endday" value="12">
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
			<option value="12"  selected >12</option>
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
        <select name="endmonth" value="05">
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
        <select name="endyear" value="2015">
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
    </TR>
   <input type="submit" name="submit" value="submit">
  </table>
</form>
<br>
<br>
<!-- Apply heirarchy -->
<table width="85%" border="1" align="center">
 <caption>Apply Heirarchy</caption>
 <tr><td colspan="15" align="center">Apply Online from 01-04-2015 to 12-05-2015</td></tr>
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
    <tr><td>Wednesday,01-Apr-2015</td><td>72843</td>
                       <td>2275</td>
                       <td>43895</td>
                       <td>373199</td>
                       <td>8201</td> 
                       <td>129193</td>
                       <td>67713</td>
                       <td>1903</td> 
                       <td>41633</td>
                       <td>456932</td>
                       <td>12678</td>
                       <td>154479</td>
                       <td>995744</td>
                       <td>226329</td></tr>
      <tr><td>Thursday,02-Apr-2015</td><td>67394</td>
                       <td>1959</td>
                       <td>42044</td>
                       <td>418334</td>
                       <td>9445</td> 
                       <td>149211</td>
                       <td>64151</td>
                       <td>1723</td> 
                       <td>40806</td>
                       <td>512846</td>
                       <td>13644</td>
                       <td>177742</td>
                       <td>1089496</td>
                       <td>254619</td></tr>
      <tr><td>Friday,03-Apr-2015</td><td>112906</td>
                       <td>2585</td>
                       <td>65302</td>
                       <td>420956</td>
                       <td>9492</td> 
                       <td>151007</td>
                       <td>111930</td>
                       <td>2473</td> 
                       <td>66214</td>
                       <td>515060</td>
                       <td>13701</td>
                       <td>179796</td>
                       <td>1189103</td>
                       <td>274392</td></tr>
      <tr><td>Saturday,04-Apr-2015</td><td>80940</td>
                       <td>2311</td>
                       <td>49157</td>
                       <td>290828</td>
                       <td>6561</td> 
                       <td>102172</td>
                       <td>77497</td>
                       <td>2162</td> 
                       <td>48345</td>
                       <td>357914</td>
                       <td>14237</td>
                       <td>126427</td>
                       <td>832450</td>
                       <td>197339</td></tr>
      <tr><td>Sunday,05-Apr-2015</td><td>33116</td>
                       <td>856</td>
                       <td>18585</td>
                       <td>226449</td>
                       <td>4880</td> 
                       <td>76298</td>
                       <td>31744</td>
                       <td>865</td> 
                       <td>18386</td>
                       <td>283605</td>
                       <td>13596</td>
                       <td>94262</td>
                       <td>595111</td>
                       <td>127326</td></tr>
      <tr><td>Monday,06-Apr-2015</td><td>62081</td>
                       <td>1709</td>
                       <td>37853</td>
                       <td>407837</td>
                       <td>9546</td> 
                       <td>144636</td>
                       <td>63913</td>
                       <td>1626</td> 
                       <td>39278</td>
                       <td>522518</td>
                       <td>21095</td>
                       <td>177414</td>
                       <td>1090325</td>
                       <td>245466</td></tr>
      <tr><td>Tuesday,07-Apr-2015</td><td>122149</td>
                       <td>3096</td>
                       <td>73494</td>
                       <td>489975</td>
                       <td>11783</td> 
                       <td>179834</td>
                       <td>134029</td>
                       <td>3459</td> 
                       <td>80394</td>
                       <td>617483</td>
                       <td>20733</td>
                       <td>217639</td>
                       <td>1402707</td>
                       <td>323466</td></tr>
      <tr><td>Wednesday,08-Apr-2015</td><td>96691</td>
                       <td>2817</td>
                       <td>59049</td>
                       <td>399016</td>
                       <td>8275</td> 
                       <td>141741</td>
                       <td>110219</td>
                       <td>2854</td> 
                       <td>65895</td>
                       <td>510362</td>
                       <td>19888</td>
                       <td>180062</td>
                       <td>1150122</td>
                       <td>267026</td></tr>
      <tr><td>Thursday,09-Apr-2015</td><td>60019</td>
                       <td>1745</td>
                       <td>37945</td>
                       <td>384311</td>
                       <td>8749</td> 
                       <td>142048</td>
                       <td>67356</td>
                       <td>1502</td> 
                       <td>41971</td>
                       <td>493675</td>
                       <td>28647</td>
                       <td>183601</td>
                       <td>1046004</td>
                       <td>248795</td></tr>
      <tr><td>Friday,10-Apr-2015</td><td>80678</td>
                       <td>2006</td>
                       <td>48598</td>
                       <td>393326</td>
                       <td>9536</td> 
                       <td>147365</td>
                       <td>89290</td>
                       <td>1879</td> 
                       <td>53248</td>
                       <td>509924</td>
                       <td>27839</td>
                       <td>189811</td>
                       <td>1114478</td>
                       <td>265490</td></tr>
      <tr><td>Saturday,11-Apr-2015</td><td>68815</td>
                       <td>1857</td>
                       <td>42329</td>
                       <td>276177</td>
                       <td>5824</td> 
                       <td>98773</td>
                       <td>74122</td>
                       <td>1852</td> 
                       <td>45061</td>
                       <td>342023</td>
                       <td>14463</td>
                       <td>123660</td>
                       <td>785133</td>
                       <td>188430</td></tr>
      <tr><td>Sunday,12-Apr-2015</td><td>42113</td>
                       <td>1112</td>
                       <td>24344</td>
                       <td>255777</td>
                       <td>4884</td> 
                       <td>85742</td>
                       <td>45194</td>
                       <td>1082</td> 
                       <td>25826</td>
                       <td>284192</td>
                       <td>10565</td>
                       <td>96346</td>
                       <td>644919</td>
                       <td>143679</td></tr>
      <tr><td>Monday,13-Apr-2015</td><td>65898</td>
                       <td>1789</td>
                       <td>41285</td>
                       <td>418827</td>
                       <td>9309</td> 
                       <td>148483</td>
                       <td>78582</td>
                       <td>1776</td> 
                       <td>48136</td>
                       <td>490379</td>
                       <td>21364</td>
                       <td>175820</td>
                       <td>1087924</td>
                       <td>253385</td></tr>
      <tr><td>Tuesday,14-Apr-2015</td><td>66212</td>
                       <td>1638</td>
                       <td>40584</td>
                       <td>447438</td>
                       <td>10160</td> 
                       <td>161721</td>
                       <td>76294</td>
                       <td>1617</td> 
                       <td>46574</td>
                       <td>550043</td>
                       <td>23909</td>
                       <td>196536</td>
                       <td>1177311</td>
                       <td>272704</td></tr>
      <tr><td>Wednesday,15-Apr-2015</td><td>91346</td>
                       <td>2450</td>
                       <td>55738</td>
                       <td>352855</td>
                       <td>7613</td> 
                       <td>127584</td>
                       <td>86052</td>
                       <td>2123</td> 
                       <td>53376</td>
                       <td>423160</td>
                       <td>15428</td>
                       <td>154548</td>
                       <td>981027</td>
                       <td>240069</td></tr>
      <tr><td>Thursday,16-Apr-2015</td><td>68327</td>
                       <td>2244</td>
                       <td>42260</td>
                       <td>405024</td>
                       <td>8946</td> 
                       <td>149706</td>
                       <td>53116</td>
                       <td>1471</td> 
                       <td>33937</td>
                       <td>472253</td>
                       <td>15086</td>
                       <td>172772</td>
                       <td>1026467</td>
                       <td>251310</td></tr>
      <tr><td>Friday,17-Apr-2015</td><td>70861</td>
                       <td>1689</td>
                       <td>41489</td>
                       <td>424908</td>
                       <td>10275</td> 
                       <td>158088</td>
                       <td>70690</td>
                       <td>1568</td> 
                       <td>42032</td>
                       <td>468844</td>
                       <td>15735</td>
                       <td>175059</td>
                       <td>1064570</td>
                       <td>259693</td></tr>
      <tr><td>Saturday,18-Apr-2015</td><td>75923</td>
                       <td>2161</td>
                       <td>46378</td>
                       <td>300575</td>
                       <td>6286</td> 
                       <td>109041</td>
                       <td>78252</td>
                       <td>1976</td> 
                       <td>48029</td>
                       <td>336655</td>
                       <td>11424</td>
                       <td>125302</td>
                       <td>813252</td>
                       <td>203783</td></tr>
      <tr><td>Sunday,19-Apr-2015</td><td>48399</td>
                       <td>1267</td>
                       <td>28164</td>
                       <td>259573</td>
                       <td>4996</td> 
                       <td>89324</td>
                       <td>49669</td>
                       <td>1219</td> 
                       <td>29060</td>
                       <td>273650</td>
                       <td>8535</td>
                       <td>96598</td>
                       <td>647308</td>
                       <td>151223</td></tr>
      <tr><td>Monday,20-Apr-2015</td><td>59807</td>
                       <td>1611</td>
                       <td>36858</td>
                       <td>417916</td>
                       <td>9000</td> 
                       <td>149583</td>
                       <td>59716</td>
                       <td>1609</td> 
                       <td>36813</td>
                       <td>438856</td>
                       <td>15227</td>
                       <td>163252</td>
                       <td>1003742</td>
                       <td>242922</td></tr>
      <tr><td>Tuesday,21-Apr-2015</td><td>82132</td>
                       <td>2223</td>
                       <td>51405</td>
                       <td>457776</td>
                       <td>11091</td> 
                       <td>171621</td>
                       <td>77857</td>
                       <td>1930</td> 
                       <td>49664</td>
                       <td>507110</td>
                       <td>17943</td>
                       <td>192192</td>
                       <td>1158062</td>
                       <td>286986</td></tr>
      <tr><td>Wednesday,22-Apr-2015</td><td>107620</td>
                       <td>3195</td>
                       <td>64419</td>
                       <td>365288</td>
                       <td>8456</td> 
                       <td>134671</td>
                       <td>96723</td>
                       <td>2566</td> 
                       <td>60194</td>
                       <td>409733</td>
                       <td>13761</td>
                       <td>156586</td>
                       <td>1007342</td>
                       <td>254020</td></tr>
      <tr><td>Thursday,23-Apr-2015</td><td>75318</td>
                       <td>2707</td>
                       <td>46686</td>
                       <td>369190</td>
                       <td>8693</td> 
                       <td>138798</td>
                       <td>55042</td>
                       <td>1618</td> 
                       <td>36458</td>
                       <td>404823</td>
                       <td>13521</td>
                       <td>158085</td>
                       <td>930912</td>
                       <td>241913</td></tr>
      <tr><td>Friday,24-Apr-2015</td><td>84560</td>
                       <td>2263</td>
                       <td>50717</td>
                       <td>385725</td>
                       <td>10519</td> 
                       <td>150144</td>
                       <td>75251</td>
                       <td>1895</td> 
                       <td>47463</td>
                       <td>413070</td>
                       <td>15473</td>
                       <td>168085</td>
                       <td>988756</td>
                       <td>259180</td></tr>
      <tr><td>Saturday,25-Apr-2015</td><td>48160</td>
                       <td>1517</td>
                       <td>29722</td>
                       <td>242185</td>
                       <td>6114</td> 
                       <td>90024</td>
                       <td>42559</td>
                       <td>1251</td> 
                       <td>27285</td>
                       <td>263732</td>
                       <td>9999</td>
                       <td>103143</td>
                       <td>615517</td>
                       <td>159042</td></tr>
      <tr><td>Sunday,26-Apr-2015</td><td>22282</td>
                       <td>582</td>
                       <td>12317</td>
                       <td>214202</td>
                       <td>4931</td> 
                       <td>74396</td>
                       <td>19748</td>
                       <td>533</td> 
                       <td>11637</td>
                       <td>220608</td>
                       <td>7709</td>
                       <td>79405</td>
                       <td>490595</td>
                       <td>114272</td></tr>
      <tr><td>Monday,27-Apr-2015</td><td>63646</td>
                       <td>1642</td>
                       <td>38905</td>
                       <td>390011</td>
                       <td>9764</td> 
                       <td>143747</td>
                       <td>61030</td>
                       <td>1662</td> 
                       <td>38737</td>
                       <td>430038</td>
                       <td>14635</td>
                       <td>162928</td>
                       <td>972428</td>
                       <td>240857</td></tr>
      <tr><td>Tuesday,28-Apr-2015</td><td>125423</td>
                       <td>3578</td>
                       <td>75214</td>
                       <td>428141</td>
                       <td>10627</td> 
                       <td>162281</td>
                       <td>116907</td>
                       <td>3284</td> 
                       <td>73406</td>
                       <td>500234</td>
                       <td>17459</td>
                       <td>192233</td>
                       <td>1205653</td>
                       <td>299176</td></tr>
      <tr><td>Wednesday,29-Apr-2015</td><td>67306</td>
                       <td>2159</td>
                       <td>40756</td>
                       <td>328215</td>
                       <td>8537</td> 
                       <td>122843</td>
                       <td>58414</td>
                       <td>1857</td> 
                       <td>37212</td>
                       <td>376343</td>
                       <td>13996</td>
                       <td>144242</td>
                       <td>856827</td>
                       <td>216597</td></tr>
      <tr><td>Thursday,30-Apr-2015</td><td>56977</td>
                       <td>1878</td>
                       <td>36211</td>
                       <td>361109</td>
                       <td>8745</td> 
                       <td>135013</td>
                       <td>46336</td>
                       <td>1407</td> 
                       <td>31077</td>
                       <td>398023</td>
                       <td>14127</td>
                       <td>151938</td>
                       <td>888602</td>
                       <td>226082</td></tr>
      <tr><td>Friday,01-May-2015</td><td>85464</td>
                       <td>2161</td>
                       <td>50303</td>
                       <td>371403</td>
                       <td>8294</td> 
                       <td>131761</td>
                       <td>78409</td>
                       <td>1781</td> 
                       <td>47723</td>
                       <td>410900</td>
                       <td>12869</td>
                       <td>146963</td>
                       <td>971281</td>
                       <td>228786</td></tr>
      <tr><td>Saturday,02-May-2015</td><td>78873</td>
                       <td>2354</td>
                       <td>47234</td>
                       <td>279408</td>
                       <td>6465</td> 
                       <td>99672</td>
                       <td>71482</td>
                       <td>2135</td> 
                       <td>44580</td>
                       <td>306386</td>
                       <td>10276</td>
                       <td>113233</td>
                       <td>757379</td>
                       <td>185740</td></tr>
      <tr><td>Sunday,03-May-2015</td><td>29471</td>
                       <td>772</td>
                       <td>16508</td>
                       <td>226578</td>
                       <td>4672</td> 
                       <td>76043</td>
                       <td>26907</td>
                       <td>718</td> 
                       <td>15636</td>
                       <td>235446</td>
                       <td>7404</td>
                       <td>81862</td>
                       <td>531968</td>
                       <td>120304</td></tr>
      <tr><td>Monday,04-May-2015</td><td>55681</td>
                       <td>1440</td>
                       <td>34676</td>
                       <td>396401</td>
                       <td>8836</td> 
                       <td>143418</td>
                       <td>53195</td>
                       <td>1351</td> 
                       <td>33681</td>
                       <td>447294</td>
                       <td>13927</td>
                       <td>163182</td>
                       <td>978125</td>
                       <td>235422</td></tr>
      <tr><td>Tuesday,05-May-2015</td><td>132158</td>
                       <td>3700</td>
                       <td>79521</td>
                       <td>474810</td>
                       <td>10868</td> 
                       <td>172421</td>
                       <td>133337</td>
                       <td>3836</td> 
                       <td>81190</td>
                       <td>541417</td>
                       <td>16562</td>
                       <td>199460</td>
                       <td>1316688</td>
                       <td>311959</td></tr>
      <tr><td>Wednesday,06-May-2015</td><td>68962</td>
                       <td>2256</td>
                       <td>43012</td>
                       <td>345566</td>
                       <td>7957</td> 
                       <td>126392</td>
                       <td>65769</td>
                       <td>2088</td> 
                       <td>41644</td>
                       <td>404502</td>
                       <td>12620</td>
                       <td>149492</td>
                       <td>909720</td>
                       <td>223751</td></tr>
      <tr><td>Thursday,07-May-2015</td><td>48628</td>
                       <td>1549</td>
                       <td>31018</td>
                       <td>407396</td>
                       <td>9266</td> 
                       <td>151238</td>
                       <td>44581</td>
                       <td>1407</td> 
                       <td>29053</td>
                       <td>457902</td>
                       <td>13993</td>
                       <td>170087</td>
                       <td>984722</td>
                       <td>243884</td></tr>
      <tr><td>Friday,08-May-2015</td><td>71080</td>
                       <td>1937</td>
                       <td>43714</td>
                       <td>378186</td>
                       <td>8830</td> 
                       <td>142476</td>
                       <td>65212</td>
                       <td>1719</td> 
                       <td>41376</td>
                       <td>426624</td>
                       <td>13891</td>
                       <td>162407</td>
                       <td>967479</td>
                       <td>243968</td></tr>
      <tr><td>Saturday,09-May-2015</td><td>39231</td>
                       <td>1098</td>
                       <td>23704</td>
                       <td>267444</td>
                       <td>5903</td> 
                       <td>95292</td>
                       <td>34421</td>
                       <td>929</td> 
                       <td>21919</td>
                       <td>296944</td>
                       <td>9459</td>
                       <td>109494</td>
                       <td>655429</td>
                       <td>160008</td></tr>
      <tr><td>Sunday,10-May-2015</td><td>61948</td>
                       <td>1538</td>
                       <td>36257</td>
                       <td>267992</td>
                       <td>4944</td> 
                       <td>89323</td>
                       <td>55911</td>
                       <td>1273</td> 
                       <td>33944</td>
                       <td>278904</td>
                       <td>7991</td>
                       <td>98888</td>
                       <td>680501</td>
                       <td>158865</td></tr>
      <tr><td>Monday,11-May-2015</td><td>77402</td>
                       <td>2159</td>
                       <td>48445</td>
                       <td>441605</td>
                       <td>10148</td> 
                       <td>158324</td>
                       <td>73788</td>
                       <td>2027</td> 
                       <td>47174</td>
                       <td>486779</td>
                       <td>15486</td>
                       <td>180051</td>
                       <td>1109394</td>
                       <td>269158</td></tr>
      <tr><td>Tuesday,12-May-2015</td><td>--</td>
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
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 01-04-2015 to 12-05-2015</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Wednesday,01-Apr-2015</td><td>50</td>
                        <td>6</td>
                        <td>6</td></tr>
     <tr><td>Thursday,02-Apr-2015</td><td>51</td>
                        <td>5</td>
                        <td>1</td></tr>
     <tr><td>Friday,03-Apr-2015</td><td>20</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Saturday,04-Apr-2015</td><td>50</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Sunday,05-Apr-2015</td><td>22</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,06-Apr-2015</td><td>31</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,07-Apr-2015</td><td>69</td>
                        <td>5</td>
                        <td>1</td></tr>
     <tr><td>Wednesday,08-Apr-2015</td><td>62</td>
                        <td>4</td>
                        <td>--</td></tr>
     <tr><td>Thursday,09-Apr-2015</td><td>75</td>
                        <td>6</td>
                        <td>--</td></tr>
     <tr><td>Friday,10-Apr-2015</td><td>47</td>
                        <td>12</td>
                        <td>--</td></tr>
     <tr><td>Saturday,11-Apr-2015</td><td>37</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Sunday,12-Apr-2015</td><td>32</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Monday,13-Apr-2015</td><td>64</td>
                        <td>7</td>
                        <td>1</td></tr>
     <tr><td>Tuesday,14-Apr-2015</td><td>52</td>
                        <td>11</td>
                        <td>3</td></tr>
     <tr><td>Wednesday,15-Apr-2015</td><td>40</td>
                        <td>3</td>
                        <td>2</td></tr>
     <tr><td>Thursday,16-Apr-2015</td><td>61</td>
                        <td>6</td>
                        <td>1</td></tr>
     <tr><td>Friday,17-Apr-2015</td><td>52</td>
                        <td>6</td>
                        <td>--</td></tr>
     <tr><td>Saturday,18-Apr-2015</td><td>--</td>
                        <td>4</td>
                        <td>--</td></tr>
     <tr><td>Sunday,19-Apr-2015</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Monday,20-Apr-2015</td><td>--</td>
                        <td>4</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,21-Apr-2015</td><td>--</td>
                        <td>5</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,22-Apr-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Thursday,23-Apr-2015</td><td>--</td>
                        <td>8</td>
                        <td>1</td></tr>
     <tr><td>Friday,24-Apr-2015</td><td>--</td>
                        <td>4</td>
                        <td>1</td></tr>
     <tr><td>Saturday,25-Apr-2015</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Sunday,26-Apr-2015</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Monday,27-Apr-2015</td><td>--</td>
                        <td>8</td>
                        <td>1</td></tr>
     <tr><td>Tuesday,28-Apr-2015</td><td>--</td>
                        <td>7</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,29-Apr-2015</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Thursday,30-Apr-2015</td><td>--</td>
                        <td>4</td>
                        <td>1</td></tr>
     <tr><td>Friday,01-May-2015</td><td>--</td>
                        <td>1</td>
                        <td>1</td></tr>
     <tr><td>Saturday,02-May-2015</td><td>--</td>
                        <td>5</td>
                        <td>--</td></tr>
     <tr><td>Sunday,03-May-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,04-May-2015</td><td>--</td>
                        <td>6</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,05-May-2015</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,06-May-2015</td><td>--</td>
                        <td>1</td>
                        <td>1</td></tr>
     <tr><td>Thursday,07-May-2015</td><td>--</td>
                        <td>5</td>
                        <td>--</td></tr>
     <tr><td>Friday,08-May-2015</td><td>--</td>
                        <td>4</td>
                        <td>--</td></tr>
     <tr><td>Saturday,09-May-2015</td><td>--</td>
                        <td>3</td>
                        <td>1</td></tr>
     <tr><td>Sunday,10-May-2015</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,11-May-2015</td><td>--</td>
                        <td>5</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,12-May-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="01">
<input type="hidden" name="endday" value="12">
<input type="hidden" name="startmonth" value="04">
<input type="hidden" name="startyear" value="2015">
<input type="hidden" name="endmonth" value="05">
<input type="hidden" name="endyear" value="2015">
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
    <tr><td>Wednesday,01-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>226329</td></tr>
    <tr><td>Thursday,02-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>254619</td></tr>
    <tr><td>Friday,03-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>274392</td></tr>
    <tr><td>Saturday,04-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>197339</td></tr>
    <tr><td>Sunday,05-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>127326</td></tr>
    <tr><td>Monday,06-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>245466</td></tr>
    <tr><td>Tuesday,07-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>323466</td></tr>
    <tr><td>Wednesday,08-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>267026</td></tr>
    <tr><td>Thursday,09-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>248795</td></tr>
    <tr><td>Friday,10-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>265490</td></tr>
    <tr><td>Saturday,11-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>188430</td></tr>
    <tr><td>Sunday,12-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>143679</td></tr>
    <tr><td>Monday,13-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>253385</td></tr>
    <tr><td>Tuesday,14-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>272704</td></tr>
    <tr><td>Wednesday,15-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>240069</td></tr>
    <tr><td>Thursday,16-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>251310</td></tr>
    <tr><td>Friday,17-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>259693</td></tr>
    <tr><td>Saturday,18-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>203783</td></tr>
    <tr><td>Sunday,19-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>151223</td></tr>
    <tr><td>Monday,20-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>242922</td></tr>
    <tr><td>Tuesday,21-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>286986</td></tr>
    <tr><td>Wednesday,22-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>254020</td></tr>
    <tr><td>Thursday,23-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>241913</td></tr>
    <tr><td>Friday,24-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>259180</td></tr>
    <tr><td>Saturday,25-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>159042</td></tr>
    <tr><td>Sunday,26-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>114272</td></tr>
    <tr><td>Monday,27-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>240857</td></tr>
    <tr><td>Tuesday,28-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>299176</td></tr>
    <tr><td>Wednesday,29-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>216597</td></tr>
    <tr><td>Thursday,30-Apr-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>226082</td></tr>
    <tr><td>Friday,01-May-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>228786</td></tr>
    <tr><td>Saturday,02-May-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>185740</td></tr>
    <tr><td>Sunday,03-May-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>120304</td></tr>
    <tr><td>Monday,04-May-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>235422</td></tr>
    <tr><td>Tuesday,05-May-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>311959</td></tr>
    <tr><td>Wednesday,06-May-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>223751</td></tr>
    <tr><td>Thursday,07-May-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>243884</td></tr>
    <tr><td>Friday,08-May-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>243968</td></tr>
    <tr><td>Saturday,09-May-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>160008</td></tr>
    <tr><td>Sunday,10-May-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>158865</td></tr>
    <tr><td>Monday,11-May-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>269158</td></tr>
    <tr><td>Tuesday,12-May-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td></tr>
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