<?php /* Smarty version 2.6.19, created on 2017-03-28 18:29:12
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_01-01-2017_to_26-03-2017.tpl */ ?>
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
        <select name="startmonth" value="01">
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
        <select name="startyear" value="2017">
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
		<option value="2016" >2016</option>
		<option value="2017"  selected >2017</option>
		<option value="2018" >2018</option>
		<option value="2019" >2019</option>
        </select>
        </font></b></TD>
      <TD width="46"> 
        <div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">To</font></b></div>
      </TD>
      <TD width="46"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endday" value="26">
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
			<option value="26"  selected >26</option>
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
        <select name="endyear" value="2017">
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
                <option value="2016" >2016</option>
                <option value="2017"  selected >2017</option>
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
 <tr><td colspan="15" align="center">Apply Online from 01-01-2017 to 26-03-2017</td></tr>
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
    <tr><td>Sunday,01-Jan-2017</td><td>5</td>
                       <td>--</td>
                       <td>5</td>
                       <td>268642</td>
                       <td>2778</td> 
                       <td>92726</td>
                       <td>6</td>
                       <td>--</td> 
                       <td>6</td>
                       <td>302063</td>
                       <td>5396</td>
                       <td>101535</td>
                       <td>578890</td>
                       <td>133167</td></tr>
      <tr><td>Monday,02-Jan-2017</td><td>11</td>
                       <td>--</td>
                       <td>11</td>
                       <td>690347</td>
                       <td>8874</td> 
                       <td>233860</td>
                       <td>20</td>
                       <td>--</td> 
                       <td>16</td>
                       <td>792984</td>
                       <td>15959</td>
                       <td>254444</td>
                       <td>1508195</td>
                       <td>331203</td></tr>
      <tr><td>Tuesday,03-Jan-2017</td><td>14</td>
                       <td>--</td>
                       <td>14</td>
                       <td>723521</td>
                       <td>10741</td> 
                       <td>252452</td>
                       <td>20</td>
                       <td>--</td> 
                       <td>20</td>
                       <td>850103</td>
                       <td>19749</td>
                       <td>286436</td>
                       <td>1604148</td>
                       <td>366605</td></tr>
      <tr><td>Wednesday,04-Jan-2017</td><td>15</td>
                       <td>--</td>
                       <td>14</td>
                       <td>684341</td>
                       <td>9184</td> 
                       <td>238840</td>
                       <td>18</td>
                       <td>--</td> 
                       <td>18</td>
                       <td>829590</td>
                       <td>18153</td>
                       <td>275420</td>
                       <td>1541301</td>
                       <td>350979</td></tr>
      <tr><td>Thursday,05-Jan-2017</td><td>12</td>
                       <td>--</td>
                       <td>12</td>
                       <td>625143</td>
                       <td>7800</td> 
                       <td>215498</td>
                       <td>36</td>
                       <td>--</td> 
                       <td>35</td>
                       <td>734975</td>
                       <td>15715</td>
                       <td>245018</td>
                       <td>1383681</td>
                       <td>313085</td></tr>
      <tr><td>Friday,06-Jan-2017</td><td>19</td>
                       <td>1</td>
                       <td>16</td>
                       <td>692428</td>
                       <td>10071</td> 
                       <td>247109</td>
                       <td>28</td>
                       <td>--</td> 
                       <td>26</td>
                       <td>763582</td>
                       <td>16667</td>
                       <td>270455</td>
                       <td>1482796</td>
                       <td>356225</td></tr>
      <tr><td>Saturday,07-Jan-2017</td><td>12</td>
                       <td>--</td>
                       <td>11</td>
                       <td>473812</td>
                       <td>6471</td> 
                       <td>166060</td>
                       <td>19</td>
                       <td>--</td> 
                       <td>15</td>
                       <td>522099</td>
                       <td>12013</td>
                       <td>183088</td>
                       <td>1014426</td>
                       <td>239824</td></tr>
      <tr><td>Sunday,08-Jan-2017</td><td>10</td>
                       <td>--</td>
                       <td>10</td>
                       <td>385510</td>
                       <td>4678</td> 
                       <td>131146</td>
                       <td>14</td>
                       <td>--</td> 
                       <td>14</td>
                       <td>465473</td>
                       <td>9201</td>
                       <td>154862</td>
                       <td>864886</td>
                       <td>195618</td></tr>
      <tr><td>Monday,09-Jan-2017</td><td>19</td>
                       <td>--</td>
                       <td>18</td>
                       <td>687375</td>
                       <td>9027</td> 
                       <td>238634</td>
                       <td>25</td>
                       <td>--</td> 
                       <td>24</td>
                       <td>828808</td>
                       <td>17075</td>
                       <td>270632</td>
                       <td>1542329</td>
                       <td>346576</td></tr>
      <tr><td>Tuesday,10-Jan-2017</td><td>17</td>
                       <td>--</td>
                       <td>16</td>
                       <td>709719</td>
                       <td>9693</td> 
                       <td>250265</td>
                       <td>22</td>
                       <td>--</td> 
                       <td>18</td>
                       <td>839119</td>
                       <td>16872</td>
                       <td>283322</td>
                       <td>1575442</td>
                       <td>364608</td></tr>
      <tr><td>Wednesday,11-Jan-2017</td><td>14</td>
                       <td>--</td>
                       <td>14</td>
                       <td>621935</td>
                       <td>8374</td> 
                       <td>222020</td>
                       <td>24</td>
                       <td>--</td> 
                       <td>18</td>
                       <td>690515</td>
                       <td>15366</td>
                       <td>239940</td>
                       <td>1336228</td>
                       <td>319244</td></tr>
      <tr><td>Thursday,12-Jan-2017</td><td>14</td>
                       <td>--</td>
                       <td>12</td>
                       <td>568616</td>
                       <td>6869</td> 
                       <td>197726</td>
                       <td>18</td>
                       <td>1</td> 
                       <td>19</td>
                       <td>662702</td>
                       <td>14151</td>
                       <td>223511</td>
                       <td>1252371</td>
                       <td>288076</td></tr>
      <tr><td>Friday,13-Jan-2017</td><td>20</td>
                       <td>--</td>
                       <td>19</td>
                       <td>584594</td>
                       <td>7880</td> 
                       <td>210794</td>
                       <td>15</td>
                       <td>--</td> 
                       <td>14</td>
                       <td>686616</td>
                       <td>14590</td>
                       <td>241300</td>
                       <td>1293715</td>
                       <td>311192</td></tr>
      <tr><td>Saturday,14-Jan-2017</td><td>7</td>
                       <td>--</td>
                       <td>7</td>
                       <td>384682</td>
                       <td>4880</td> 
                       <td>134677</td>
                       <td>8</td>
                       <td>--</td> 
                       <td>6</td>
                       <td>431840</td>
                       <td>9412</td>
                       <td>150753</td>
                       <td>830829</td>
                       <td>195912</td></tr>
      <tr><td>Sunday,15-Jan-2017</td><td>8</td>
                       <td>--</td>
                       <td>6</td>
                       <td>361759</td>
                       <td>4114</td> 
                       <td>122353</td>
                       <td>12</td>
                       <td>1</td> 
                       <td>11</td>
                       <td>400333</td>
                       <td>8269</td>
                       <td>133773</td>
                       <td>774496</td>
                       <td>174448</td></tr>
      <tr><td>Monday,16-Jan-2017</td><td>23</td>
                       <td>--</td>
                       <td>19</td>
                       <td>685767</td>
                       <td>8314</td> 
                       <td>232515</td>
                       <td>13</td>
                       <td>1</td> 
                       <td>14</td>
                       <td>759611</td>
                       <td>16227</td>
                       <td>250508</td>
                       <td>1469956</td>
                       <td>328845</td></tr>
      <tr><td>Tuesday,17-Jan-2017</td><td>30</td>
                       <td>--</td>
                       <td>22</td>
                       <td>730464</td>
                       <td>10425</td> 
                       <td>255247</td>
                       <td>48</td>
                       <td>--</td> 
                       <td>47</td>
                       <td>839493</td>
                       <td>19778</td>
                       <td>286215</td>
                       <td>1600238</td>
                       <td>369243</td></tr>
      <tr><td>Wednesday,18-Jan-2017</td><td>15</td>
                       <td>--</td>
                       <td>13</td>
                       <td>677531</td>
                       <td>9944</td> 
                       <td>238882</td>
                       <td>19</td>
                       <td>--</td> 
                       <td>17</td>
                       <td>748783</td>
                       <td>18094</td>
                       <td>258179</td>
                       <td>1454386</td>
                       <td>340972</td></tr>
      <tr><td>Thursday,19-Jan-2017</td><td>15</td>
                       <td>--</td>
                       <td>14</td>
                       <td>620446</td>
                       <td>7952</td> 
                       <td>217735</td>
                       <td>30</td>
                       <td>--</td> 
                       <td>29</td>
                       <td>686635</td>
                       <td>15931</td>
                       <td>236688</td>
                       <td>1331009</td>
                       <td>310538</td></tr>
      <tr><td>Friday,20-Jan-2017</td><td>19</td>
                       <td>--</td>
                       <td>15</td>
                       <td>631198</td>
                       <td>9235</td> 
                       <td>227259</td>
                       <td>21</td>
                       <td>--</td> 
                       <td>19</td>
                       <td>685575</td>
                       <td>16201</td>
                       <td>245031</td>
                       <td>1342249</td>
                       <td>323619</td></tr>
      <tr><td>Saturday,21-Jan-2017</td><td>17</td>
                       <td>--</td>
                       <td>16</td>
                       <td>490500</td>
                       <td>6375</td> 
                       <td>171450</td>
                       <td>10</td>
                       <td>--</td> 
                       <td>9</td>
                       <td>514230</td>
                       <td>11837</td>
                       <td>181371</td>
                       <td>1022969</td>
                       <td>242076</td></tr>
      <tr><td>Sunday,22-Jan-2017</td><td>6</td>
                       <td>--</td>
                       <td>6</td>
                       <td>385254</td>
                       <td>4446</td> 
                       <td>129064</td>
                       <td>15</td>
                       <td>--</td> 
                       <td>15</td>
                       <td>403579</td>
                       <td>8582</td>
                       <td>136200</td>
                       <td>801882</td>
                       <td>180349</td></tr>
      <tr><td>Monday,23-Jan-2017</td><td>17</td>
                       <td>--</td>
                       <td>14</td>
                       <td>682538</td>
                       <td>8670</td> 
                       <td>229400</td>
                       <td>32</td>
                       <td>1</td> 
                       <td>30</td>
                       <td>731098</td>
                       <td>15933</td>
                       <td>242701</td>
                       <td>1438289</td>
                       <td>318952</td></tr>
      <tr><td>Tuesday,24-Jan-2017</td><td>10</td>
                       <td>--</td>
                       <td>7</td>
                       <td>807733</td>
                       <td>11504</td> 
                       <td>269181</td>
                       <td>24</td>
                       <td>--</td> 
                       <td>23</td>
                       <td>846836</td>
                       <td>19408</td>
                       <td>289125</td>
                       <td>1685515</td>
                       <td>379246</td></tr>
      <tr><td>Wednesday,25-Jan-2017</td><td>25</td>
                       <td>--</td>
                       <td>21</td>
                       <td>598116</td>
                       <td>8422</td> 
                       <td>210992</td>
                       <td>31</td>
                       <td>1</td> 
                       <td>27</td>
                       <td>676954</td>
                       <td>16812</td>
                       <td>238109</td>
                       <td>1300361</td>
                       <td>307204</td></tr>
      <tr><td>Thursday,26-Jan-2017</td><td>18</td>
                       <td>--</td>
                       <td>14</td>
                       <td>457132</td>
                       <td>5564</td> 
                       <td>156300</td>
                       <td>7</td>
                       <td>--</td> 
                       <td>6</td>
                       <td>508903</td>
                       <td>11400</td>
                       <td>172171</td>
                       <td>983024</td>
                       <td>224240</td></tr>
      <tr><td>Friday,27-Jan-2017</td><td>17</td>
                       <td>--</td>
                       <td>15</td>
                       <td>640128</td>
                       <td>9685</td> 
                       <td>227154</td>
                       <td>26</td>
                       <td>--</td> 
                       <td>22</td>
                       <td>714617</td>
                       <td>17942</td>
                       <td>248442</td>
                       <td>1382415</td>
                       <td>325107</td></tr>
      <tr><td>Saturday,28-Jan-2017</td><td>8</td>
                       <td>--</td>
                       <td>8</td>
                       <td>546466</td>
                       <td>8219</td> 
                       <td>193449</td>
                       <td>11</td>
                       <td>--</td> 
                       <td>11</td>
                       <td>574391</td>
                       <td>13550</td>
                       <td>202057</td>
                       <td>1142645</td>
                       <td>272814</td></tr>
      <tr><td>Sunday,29-Jan-2017</td><td>15</td>
                       <td>--</td>
                       <td>14</td>
                       <td>463601</td>
                       <td>6093</td> 
                       <td>160088</td>
                       <td>12</td>
                       <td>--</td> 
                       <td>12</td>
                       <td>471167</td>
                       <td>11286</td>
                       <td>163252</td>
                       <td>952174</td>
                       <td>223233</td></tr>
      <tr><td>Monday,30-Jan-2017</td><td>21</td>
                       <td>--</td>
                       <td>17</td>
                       <td>746447</td>
                       <td>10287</td> 
                       <td>258459</td>
                       <td>28</td>
                       <td>--</td> 
                       <td>27</td>
                       <td>782618</td>
                       <td>18681</td>
                       <td>262951</td>
                       <td>1558082</td>
                       <td>356293</td></tr>
      <tr><td>Tuesday,31-Jan-2017</td><td>28</td>
                       <td>--</td>
                       <td>23</td>
                       <td>729291</td>
                       <td>11030</td> 
                       <td>258348</td>
                       <td>45</td>
                       <td>--</td> 
                       <td>40</td>
                       <td>825061</td>
                       <td>20496</td>
                       <td>285713</td>
                       <td>1585951</td>
                       <td>373170</td></tr>
      <tr><td>Wednesday,01-Feb-2017</td><td>16</td>
                       <td>--</td>
                       <td>16</td>
                       <td>615899</td>
                       <td>7687</td> 
                       <td>204481</td>
                       <td>19</td>
                       <td>--</td> 
                       <td>18</td>
                       <td>719567</td>
                       <td>15794</td>
                       <td>231121</td>
                       <td>1358982</td>
                       <td>295669</td></tr>
      <tr><td>Thursday,02-Feb-2017</td><td>23</td>
                       <td>--</td>
                       <td>21</td>
                       <td>648136</td>
                       <td>7748</td> 
                       <td>213740</td>
                       <td>21</td>
                       <td>--</td> 
                       <td>20</td>
                       <td>724183</td>
                       <td>15745</td>
                       <td>237443</td>
                       <td>1395856</td>
                       <td>306032</td></tr>
      <tr><td>Friday,03-Feb-2017</td><td>20</td>
                       <td>--</td>
                       <td>18</td>
                       <td>757997</td>
                       <td>10097</td> 
                       <td>260233</td>
                       <td>22</td>
                       <td>--</td> 
                       <td>20</td>
                       <td>809112</td>
                       <td>17763</td>
                       <td>278156</td>
                       <td>1595011</td>
                       <td>368128</td></tr>
      <tr><td>Saturday,04-Feb-2017</td><td>12</td>
                       <td>1</td>
                       <td>11</td>
                       <td>548580</td>
                       <td>7174</td> 
                       <td>184246</td>
                       <td>18</td>
                       <td>1</td> 
                       <td>18</td>
                       <td>563363</td>
                       <td>13386</td>
                       <td>193694</td>
                       <td>1132535</td>
                       <td>258846</td></tr>
      <tr><td>Sunday,05-Feb-2017</td><td>10</td>
                       <td>--</td>
                       <td>9</td>
                       <td>451707</td>
                       <td>4958</td> 
                       <td>144545</td>
                       <td>12</td>
                       <td>--</td> 
                       <td>10</td>
                       <td>448951</td>
                       <td>9590</td>
                       <td>148402</td>
                       <td>915228</td>
                       <td>198855</td></tr>
      <tr><td>Monday,06-Feb-2017</td><td>13</td>
                       <td>--</td>
                       <td>11</td>
                       <td>768907</td>
                       <td>9177</td> 
                       <td>253018</td>
                       <td>25</td>
                       <td>--</td> 
                       <td>24</td>
                       <td>809803</td>
                       <td>16835</td>
                       <td>262645</td>
                       <td>1604760</td>
                       <td>349113</td></tr>
      <tr><td>Tuesday,07-Feb-2017</td><td>39</td>
                       <td>--</td>
                       <td>39</td>
                       <td>810676</td>
                       <td>10975</td> 
                       <td>272082</td>
                       <td>38</td>
                       <td>--</td> 
                       <td>34</td>
                       <td>867216</td>
                       <td>19429</td>
                       <td>292826</td>
                       <td>1708373</td>
                       <td>384357</td></tr>
      <tr><td>Wednesday,08-Feb-2017</td><td>30</td>
                       <td>--</td>
                       <td>27</td>
                       <td>754678</td>
                       <td>10236</td> 
                       <td>253708</td>
                       <td>53</td>
                       <td>--</td> 
                       <td>47</td>
                       <td>801536</td>
                       <td>18094</td>
                       <td>272099</td>
                       <td>1584627</td>
                       <td>357961</td></tr>
      <tr><td>Thursday,09-Feb-2017</td><td>30</td>
                       <td>--</td>
                       <td>26</td>
                       <td>700610</td>
                       <td>8897</td> 
                       <td>234301</td>
                       <td>49</td>
                       <td>1</td> 
                       <td>46</td>
                       <td>738341</td>
                       <td>16846</td>
                       <td>252444</td>
                       <td>1464774</td>
                       <td>330915</td></tr>
      <tr><td>Friday,10-Feb-2017</td><td>9</td>
                       <td>--</td>
                       <td>9</td>
                       <td>707145</td>
                       <td>9111</td> 
                       <td>244510</td>
                       <td>19</td>
                       <td>1</td> 
                       <td>17</td>
                       <td>745044</td>
                       <td>16832</td>
                       <td>263741</td>
                       <td>1478161</td>
                       <td>347337</td></tr>
      <tr><td>Saturday,11-Feb-2017</td><td>17</td>
                       <td>--</td>
                       <td>15</td>
                       <td>547037</td>
                       <td>7305</td> 
                       <td>187059</td>
                       <td>13</td>
                       <td>--</td> 
                       <td>11</td>
                       <td>540589</td>
                       <td>12608</td>
                       <td>192335</td>
                       <td>1107569</td>
                       <td>260037</td></tr>
      <tr><td>Sunday,12-Feb-2017</td><td>14</td>
                       <td>--</td>
                       <td>13</td>
                       <td>455866</td>
                       <td>5453</td> 
                       <td>148387</td>
                       <td>10</td>
                       <td>--</td> 
                       <td>9</td>
                       <td>435820</td>
                       <td>9696</td>
                       <td>148658</td>
                       <td>906859</td>
                       <td>202476</td></tr>
      <tr><td>Monday,13-Feb-2017</td><td>19</td>
                       <td>--</td>
                       <td>17</td>
                       <td>768421</td>
                       <td>9528</td> 
                       <td>243367</td>
                       <td>16</td>
                       <td>--</td> 
                       <td>16</td>
                       <td>749465</td>
                       <td>16158</td>
                       <td>245559</td>
                       <td>1543607</td>
                       <td>330549</td></tr>
      <tr><td>Tuesday,14-Feb-2017</td><td>15</td>
                       <td>--</td>
                       <td>14</td>
                       <td>827201</td>
                       <td>10533</td> 
                       <td>265868</td>
                       <td>19</td>
                       <td>--</td> 
                       <td>15</td>
                       <td>815533</td>
                       <td>17029</td>
                       <td>272035</td>
                       <td>1670330</td>
                       <td>364638</td></tr>
      <tr><td>Wednesday,15-Feb-2017</td><td>23</td>
                       <td>--</td>
                       <td>23</td>
                       <td>823768</td>
                       <td>11149</td> 
                       <td>265997</td>
                       <td>26</td>
                       <td>--</td> 
                       <td>25</td>
                       <td>807002</td>
                       <td>18246</td>
                       <td>273465</td>
                       <td>1660214</td>
                       <td>365605</td></tr>
      <tr><td>Thursday,16-Feb-2017</td><td>18</td>
                       <td>--</td>
                       <td>17</td>
                       <td>799190</td>
                       <td>9584</td> 
                       <td>252520</td>
                       <td>37</td>
                       <td>--</td> 
                       <td>29</td>
                       <td>781689</td>
                       <td>16377</td>
                       <td>262477</td>
                       <td>1606895</td>
                       <td>347060</td></tr>
      <tr><td>Friday,17-Feb-2017</td><td>9</td>
                       <td>--</td>
                       <td>8</td>
                       <td>792049</td>
                       <td>9992</td> 
                       <td>265938</td>
                       <td>30</td>
                       <td>--</td> 
                       <td>28</td>
                       <td>765423</td>
                       <td>16942</td>
                       <td>273781</td>
                       <td>1584445</td>
                       <td>369849</td></tr>
      <tr><td>Saturday,18-Feb-2017</td><td>13</td>
                       <td>--</td>
                       <td>9</td>
                       <td>518074</td>
                       <td>6172</td> 
                       <td>178387</td>
                       <td>21</td>
                       <td>--</td> 
                       <td>16</td>
                       <td>517088</td>
                       <td>11343</td>
                       <td>189714</td>
                       <td>1052711</td>
                       <td>254914</td></tr>
      <tr><td>Sunday,19-Feb-2017</td><td>17</td>
                       <td>--</td>
                       <td>12</td>
                       <td>429698</td>
                       <td>4666</td> 
                       <td>142946</td>
                       <td>8</td>
                       <td>--</td> 
                       <td>7</td>
                       <td>428000</td>
                       <td>8716</td>
                       <td>151189</td>
                       <td>871105</td>
                       <td>202044</td></tr>
      <tr><td>Monday,20-Feb-2017</td><td>21</td>
                       <td>--</td>
                       <td>18</td>
                       <td>775283</td>
                       <td>9236</td> 
                       <td>253428</td>
                       <td>26</td>
                       <td>--</td> 
                       <td>25</td>
                       <td>763044</td>
                       <td>16733</td>
                       <td>258685</td>
                       <td>1564343</td>
                       <td>348869</td></tr>
      <tr><td>Tuesday,21-Feb-2017</td><td>26</td>
                       <td>--</td>
                       <td>20</td>
                       <td>817126</td>
                       <td>10729</td> 
                       <td>270397</td>
                       <td>30</td>
                       <td>--</td> 
                       <td>28</td>
                       <td>823379</td>
                       <td>18865</td>
                       <td>284068</td>
                       <td>1670155</td>
                       <td>376782</td></tr>
      <tr><td>Wednesday,22-Feb-2017</td><td>24</td>
                       <td>--</td>
                       <td>20</td>
                       <td>858142</td>
                       <td>9786</td> 
                       <td>277717</td>
                       <td>27</td>
                       <td>1</td> 
                       <td>26</td>
                       <td>861414</td>
                       <td>17525</td>
                       <td>288420</td>
                       <td>1746919</td>
                       <td>381263</td></tr>
      <tr><td>Thursday,23-Feb-2017</td><td>15</td>
                       <td>--</td>
                       <td>15</td>
                       <td>724446</td>
                       <td>7772</td> 
                       <td>240652</td>
                       <td>26</td>
                       <td>--</td> 
                       <td>25</td>
                       <td>736881</td>
                       <td>15109</td>
                       <td>255475</td>
                       <td>1484249</td>
                       <td>335604</td></tr>
      <tr><td>Friday,24-Feb-2017</td><td>17</td>
                       <td>--</td>
                       <td>13</td>
                       <td>713876</td>
                       <td>8082</td> 
                       <td>239081</td>
                       <td>16</td>
                       <td>--</td> 
                       <td>15</td>
                       <td>750470</td>
                       <td>15045</td>
                       <td>259301</td>
                       <td>1487506</td>
                       <td>337198</td></tr>
      <tr><td>Saturday,25-Feb-2017</td><td>8</td>
                       <td>--</td>
                       <td>8</td>
                       <td>592163</td>
                       <td>6573</td> 
                       <td>193136</td>
                       <td>7</td>
                       <td>--</td> 
                       <td>7</td>
                       <td>597328</td>
                       <td>11746</td>
                       <td>201451</td>
                       <td>1207825</td>
                       <td>266859</td></tr>
      <tr><td>Sunday,26-Feb-2017</td><td>13</td>
                       <td>--</td>
                       <td>12</td>
                       <td>522738</td>
                       <td>5242</td> 
                       <td>162230</td>
                       <td>13</td>
                       <td>--</td> 
                       <td>11</td>
                       <td>508394</td>
                       <td>9846</td>
                       <td>165606</td>
                       <td>1046246</td>
                       <td>220795</td></tr>
      <tr><td>Monday,27-Feb-2017</td><td>14</td>
                       <td>--</td>
                       <td>12</td>
                       <td>761197</td>
                       <td>8462</td> 
                       <td>236119</td>
                       <td>22</td>
                       <td>--</td> 
                       <td>20</td>
                       <td>767013</td>
                       <td>16186</td>
                       <td>245559</td>
                       <td>1552894</td>
                       <td>321754</td></tr>
      <tr><td>Tuesday,28-Feb-2017</td><td>34</td>
                       <td>--</td>
                       <td>26</td>
                       <td>850496</td>
                       <td>10864</td> 
                       <td>279653</td>
                       <td>32</td>
                       <td>1</td> 
                       <td>31</td>
                       <td>832237</td>
                       <td>18129</td>
                       <td>284995</td>
                       <td>1711793</td>
                       <td>383220</td></tr>
      <tr><td>Wednesday,01-Mar-2017</td><td>26</td>
                       <td>--</td>
                       <td>22</td>
                       <td>829538</td>
                       <td>8662</td> 
                       <td>252400</td>
                       <td>20</td>
                       <td>--</td> 
                       <td>18</td>
                       <td>828312</td>
                       <td>15908</td>
                       <td>262210</td>
                       <td>1682466</td>
                       <td>345539</td></tr>
      <tr><td>Thursday,02-Mar-2017</td><td>31</td>
                       <td>--</td>
                       <td>25</td>
                       <td>847652</td>
                       <td>9532</td> 
                       <td>254936</td>
                       <td>29</td>
                       <td>--</td> 
                       <td>24</td>
                       <td>854664</td>
                       <td>16642</td>
                       <td>265662</td>
                       <td>1728550</td>
                       <td>353113</td></tr>
      <tr><td>Friday,03-Mar-2017</td><td>22</td>
                       <td>--</td>
                       <td>21</td>
                       <td>845822</td>
                       <td>10225</td> 
                       <td>277207</td>
                       <td>18</td>
                       <td>--</td> 
                       <td>16</td>
                       <td>870123</td>
                       <td>16118</td>
                       <td>290546</td>
                       <td>1742328</td>
                       <td>385722</td></tr>
      <tr><td>Saturday,04-Mar-2017</td><td>20</td>
                       <td>--</td>
                       <td>14</td>
                       <td>615972</td>
                       <td>6479</td> 
                       <td>197101</td>
                       <td>21</td>
                       <td>--</td> 
                       <td>20</td>
                       <td>624295</td>
                       <td>10467</td>
                       <td>205670</td>
                       <td>1257254</td>
                       <td>274008</td></tr>
      <tr><td>Sunday,05-Mar-2017</td><td>9</td>
                       <td>--</td>
                       <td>9</td>
                       <td>515482</td>
                       <td>5585</td> 
                       <td>159969</td>
                       <td>18</td>
                       <td>--</td> 
                       <td>16</td>
                       <td>509334</td>
                       <td>9265</td>
                       <td>162974</td>
                       <td>1039693</td>
                       <td>219058</td></tr>
      <tr><td>Monday,06-Mar-2017</td><td>12</td>
                       <td>--</td>
                       <td>11</td>
                       <td>795461</td>
                       <td>8861</td> 
                       <td>249354</td>
                       <td>20</td>
                       <td>1</td> 
                       <td>21</td>
                       <td>837733</td>
                       <td>15514</td>
                       <td>260526</td>
                       <td>1657602</td>
                       <td>345144</td></tr>
      <tr><td>Tuesday,07-Mar-2017</td><td>17</td>
                       <td>--</td>
                       <td>15</td>
                       <td>862938</td>
                       <td>10611</td> 
                       <td>283315</td>
                       <td>35</td>
                       <td>--</td> 
                       <td>30</td>
                       <td>910357</td>
                       <td>17421</td>
                       <td>297446</td>
                       <td>1801379</td>
                       <td>394430</td></tr>
      <tr><td>Wednesday,08-Mar-2017</td><td>20</td>
                       <td>--</td>
                       <td>18</td>
                       <td>745069</td>
                       <td>8863</td> 
                       <td>239573</td>
                       <td>21</td>
                       <td>--</td> 
                       <td>20</td>
                       <td>797973</td>
                       <td>15306</td>
                       <td>256110</td>
                       <td>1567252</td>
                       <td>335690</td></tr>
      <tr><td>Thursday,09-Mar-2017</td><td>13</td>
                       <td>--</td>
                       <td>12</td>
                       <td>832381</td>
                       <td>9297</td> 
                       <td>262806</td>
                       <td>19</td>
                       <td>--</td> 
                       <td>15</td>
                       <td>877458</td>
                       <td>15378</td>
                       <td>277182</td>
                       <td>1734546</td>
                       <td>364244</td></tr>
      <tr><td>Friday,10-Mar-2017</td><td>16</td>
                       <td>--</td>
                       <td>15</td>
                       <td>877882</td>
                       <td>10111</td> 
                       <td>283475</td>
                       <td>23</td>
                       <td>--</td> 
                       <td>21</td>
                       <td>881423</td>
                       <td>15567</td>
                       <td>291835</td>
                       <td>1785022</td>
                       <td>389388</td></tr>
      <tr><td>Saturday,11-Mar-2017</td><td>12</td>
                       <td>--</td>
                       <td>11</td>
                       <td>576549</td>
                       <td>6678</td> 
                       <td>184723</td>
                       <td>25</td>
                       <td>--</td> 
                       <td>16</td>
                       <td>539542</td>
                       <td>10013</td>
                       <td>182100</td>
                       <td>1132819</td>
                       <td>249965</td></tr>
      <tr><td>Sunday,12-Mar-2017</td><td>9</td>
                       <td>--</td>
                       <td>8</td>
                       <td>422896</td>
                       <td>4468</td> 
                       <td>131485</td>
                       <td>15</td>
                       <td>--</td> 
                       <td>12</td>
                       <td>410973</td>
                       <td>7525</td>
                       <td>135402</td>
                       <td>845886</td>
                       <td>180901</td></tr>
      <tr><td>Monday,13-Mar-2017</td><td>15</td>
                       <td>--</td>
                       <td>11</td>
                       <td>563626</td>
                       <td>5986</td> 
                       <td>173295</td>
                       <td>15</td>
                       <td>--</td> 
                       <td>15</td>
                       <td>580534</td>
                       <td>10625</td>
                       <td>180429</td>
                       <td>1160801</td>
                       <td>236915</td></tr>
      <tr><td>Tuesday,14-Mar-2017</td><td>18</td>
                       <td>--</td>
                       <td>16</td>
                       <td>910032</td>
                       <td>11089</td> 
                       <td>291982</td>
                       <td>28</td>
                       <td>--</td> 
                       <td>24</td>
                       <td>907184</td>
                       <td>17193</td>
                       <td>298825</td>
                       <td>1845544</td>
                       <td>396993</td></tr>
      <tr><td>Wednesday,15-Mar-2017</td><td>34</td>
                       <td>--</td>
                       <td>31</td>
                       <td>906036</td>
                       <td>10495</td> 
                       <td>284009</td>
                       <td>22</td>
                       <td>--</td> 
                       <td>20</td>
                       <td>860179</td>
                       <td>17051</td>
                       <td>286497</td>
                       <td>1793817</td>
                       <td>384053</td></tr>
      <tr><td>Thursday,16-Mar-2017</td><td>21</td>
                       <td>--</td>
                       <td>19</td>
                       <td>909557</td>
                       <td>10667</td> 
                       <td>285929</td>
                       <td>29</td>
                       <td>--</td> 
                       <td>28</td>
                       <td>831718</td>
                       <td>17319</td>
                       <td>285323</td>
                       <td>1769311</td>
                       <td>386156</td></tr>
      <tr><td>Friday,17-Mar-2017</td><td>15</td>
                       <td>--</td>
                       <td>12</td>
                       <td>900993</td>
                       <td>11238</td> 
                       <td>289841</td>
                       <td>24</td>
                       <td>--</td> 
                       <td>22</td>
                       <td>823605</td>
                       <td>16644</td>
                       <td>289081</td>
                       <td>1752519</td>
                       <td>391306</td></tr>
      <tr><td>Saturday,18-Mar-2017</td><td>16</td>
                       <td>--</td>
                       <td>14</td>
                       <td>682148</td>
                       <td>8445</td> 
                       <td>216508</td>
                       <td>12</td>
                       <td>--</td> 
                       <td>11</td>
                       <td>604938</td>
                       <td>12189</td>
                       <td>211667</td>
                       <td>1307748</td>
                       <td>290535</td></tr>
      <tr><td>Sunday,19-Mar-2017</td><td>18</td>
                       <td>--</td>
                       <td>17</td>
                       <td>569276</td>
                       <td>6321</td> 
                       <td>176378</td>
                       <td>14</td>
                       <td>--</td> 
                       <td>14</td>
                       <td>497306</td>
                       <td>9396</td>
                       <td>170280</td>
                       <td>1082331</td>
                       <td>235662</td></tr>
      <tr><td>Monday,20-Mar-2017</td><td>30</td>
                       <td>--</td>
                       <td>25</td>
                       <td>890296</td>
                       <td>10876</td> 
                       <td>275760</td>
                       <td>34</td>
                       <td>--</td> 
                       <td>30</td>
                       <td>811069</td>
                       <td>16276</td>
                       <td>273088</td>
                       <td>1728581</td>
                       <td>370461</td></tr>
      <tr><td>Tuesday,21-Mar-2017</td><td>22</td>
                       <td>--</td>
                       <td>20</td>
                       <td>859550</td>
                       <td>11191</td> 
                       <td>284555</td>
                       <td>25</td>
                       <td>--</td> 
                       <td>23</td>
                       <td>825447</td>
                       <td>16572</td>
                       <td>290594</td>
                       <td>1712807</td>
                       <td>389358</td></tr>
      <tr><td>Wednesday,22-Mar-2017</td><td>46</td>
                       <td>--</td>
                       <td>35</td>
                       <td>955184</td>
                       <td>12077</td> 
                       <td>303596</td>
                       <td>49</td>
                       <td>1</td> 
                       <td>47</td>
                       <td>923201</td>
                       <td>18337</td>
                       <td>312293</td>
                       <td>1908895</td>
                       <td>415931</td></tr>
      <tr><td>Thursday,23-Mar-2017</td><td>19</td>
                       <td>--</td>
                       <td>18</td>
                       <td>774670</td>
                       <td>9319</td> 
                       <td>249155</td>
                       <td>27</td>
                       <td>--</td> 
                       <td>26</td>
                       <td>773813</td>
                       <td>14997</td>
                       <td>263608</td>
                       <td>1572845</td>
                       <td>346350</td></tr>
      <tr><td>Friday,24-Mar-2017</td><td>15</td>
                       <td>--</td>
                       <td>14</td>
                       <td>818464</td>
                       <td>10682</td> 
                       <td>275744</td>
                       <td>24</td>
                       <td>--</td> 
                       <td>24</td>
                       <td>823563</td>
                       <td>16385</td>
                       <td>290210</td>
                       <td>1669133</td>
                       <td>384902</td></tr>
      <tr><td>Saturday,25-Mar-2017</td><td>16</td>
                       <td>--</td>
                       <td>13</td>
                       <td>615989</td>
                       <td>8064</td> 
                       <td>204161</td>
                       <td>23</td>
                       <td>1</td> 
                       <td>23</td>
                       <td>592748</td>
                       <td>11796</td>
                       <td>209233</td>
                       <td>1228637</td>
                       <td>282131</td></tr>
      <tr><td>Sunday,26-Mar-2017</td><td>10</td>
                       <td>--</td>
                       <td>10</td>
                       <td>492637</td>
                       <td>5465</td> 
                       <td>155684</td>
                       <td>15</td>
                       <td>--</td> 
                       <td>14</td>
                       <td>466308</td>
                       <td>8252</td>
                       <td>156702</td>
                       <td>972687</td>
                       <td>211966</td></tr>
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 01-01-2017 to 26-03-2017</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Sunday,01-Jan-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,02-Jan-2017</td><td>--</td>
                        <td>4</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,03-Jan-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,04-Jan-2017</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Thursday,05-Jan-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Friday,06-Jan-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Saturday,07-Jan-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,08-Jan-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,09-Jan-2017</td><td>--</td>
                        <td>--</td>
                        <td>1</td></tr>
     <tr><td>Tuesday,10-Jan-2017</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,11-Jan-2017</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Thursday,12-Jan-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Friday,13-Jan-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Saturday,14-Jan-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Sunday,15-Jan-2017</td><td>--</td>
                        <td>--</td>
                        <td>1</td></tr>
     <tr><td>Monday,16-Jan-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,17-Jan-2017</td><td>--</td>
                        <td>1</td>
                        <td>1</td></tr>
     <tr><td>Wednesday,18-Jan-2017</td><td>--</td>
                        <td>1</td>
                        <td>1</td></tr>
     <tr><td>Thursday,19-Jan-2017</td><td>--</td>
                        <td>5</td>
                        <td>--</td></tr>
     <tr><td>Friday,20-Jan-2017</td><td>--</td>
                        <td>5</td>
                        <td>--</td></tr>
     <tr><td>Saturday,21-Jan-2017</td><td>--</td>
                        <td>4</td>
                        <td>--</td></tr>
     <tr><td>Sunday,22-Jan-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,23-Jan-2017</td><td>--</td>
                        <td>5</td>
                        <td>5</td></tr>
     <tr><td>Tuesday,24-Jan-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,25-Jan-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Thursday,26-Jan-2017</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Friday,27-Jan-2017</td><td>--</td>
                        <td>4</td>
                        <td>--</td></tr>
     <tr><td>Saturday,28-Jan-2017</td><td>--</td>
                        <td>--</td>
                        <td>2</td></tr>
     <tr><td>Sunday,29-Jan-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,30-Jan-2017</td><td>--</td>
                        <td>--</td>
                        <td>1</td></tr>
     <tr><td>Tuesday,31-Jan-2017</td><td>--</td>
                        <td>5</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,01-Feb-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Thursday,02-Feb-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Friday,03-Feb-2017</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Saturday,04-Feb-2017</td><td>--</td>
                        <td>--</td>
                        <td>1</td></tr>
     <tr><td>Sunday,05-Feb-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,06-Feb-2017</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,07-Feb-2017</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,08-Feb-2017</td><td>--</td>
                        <td>3</td>
                        <td>1</td></tr>
     <tr><td>Thursday,09-Feb-2017</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Friday,10-Feb-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Saturday,11-Feb-2017</td><td>--</td>
                        <td>2</td>
                        <td>1</td></tr>
     <tr><td>Sunday,12-Feb-2017</td><td>--</td>
                        <td>--</td>
                        <td>1</td></tr>
     <tr><td>Monday,13-Feb-2017</td><td>--</td>
                        <td>1</td>
                        <td>1</td></tr>
     <tr><td>Tuesday,14-Feb-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,15-Feb-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Thursday,16-Feb-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Friday,17-Feb-2017</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Saturday,18-Feb-2017</td><td>--</td>
                        <td>--</td>
                        <td>1</td></tr>
     <tr><td>Sunday,19-Feb-2017</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Monday,20-Feb-2017</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,21-Feb-2017</td><td>--</td>
                        <td>4</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,22-Feb-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Thursday,23-Feb-2017</td><td>--</td>
                        <td>5</td>
                        <td>--</td></tr>
     <tr><td>Friday,24-Feb-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Saturday,25-Feb-2017</td><td>--</td>
                        <td>1</td>
                        <td>1</td></tr>
     <tr><td>Sunday,26-Feb-2017</td><td>--</td>
                        <td>5</td>
                        <td>--</td></tr>
     <tr><td>Monday,27-Feb-2017</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,28-Feb-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,01-Mar-2017</td><td>--</td>
                        <td>6</td>
                        <td>--</td></tr>
     <tr><td>Thursday,02-Mar-2017</td><td>--</td>
                        <td>5</td>
                        <td>1</td></tr>
     <tr><td>Friday,03-Mar-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Saturday,04-Mar-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,05-Mar-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,06-Mar-2017</td><td>--</td>
                        <td>5</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,07-Mar-2017</td><td>--</td>
                        <td>7</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,08-Mar-2017</td><td>--</td>
                        <td>2</td>
                        <td>1</td></tr>
     <tr><td>Thursday,09-Mar-2017</td><td>--</td>
                        <td>4</td>
                        <td>--</td></tr>
     <tr><td>Friday,10-Mar-2017</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Saturday,11-Mar-2017</td><td>--</td>
                        <td>--</td>
                        <td>4</td></tr>
     <tr><td>Sunday,12-Mar-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,13-Mar-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,14-Mar-2017</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,15-Mar-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Thursday,16-Mar-2017</td><td>--</td>
                        <td>5</td>
                        <td>1</td></tr>
     <tr><td>Friday,17-Mar-2017</td><td>--</td>
                        <td>--</td>
                        <td>1</td></tr>
     <tr><td>Saturday,18-Mar-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,19-Mar-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,20-Mar-2017</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,21-Mar-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,22-Mar-2017</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Thursday,23-Mar-2017</td><td>--</td>
                        <td>1</td>
                        <td>2</td></tr>
     <tr><td>Friday,24-Mar-2017</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Saturday,25-Mar-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Sunday,26-Mar-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="01">
<input type="hidden" name="endday" value="26">
<input type="hidden" name="startmonth" value="01">
<input type="hidden" name="startyear" value="2017">
<input type="hidden" name="endmonth" value="03">
<input type="hidden" name="endyear" value="2017">
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
    <tr><td>Sunday,01-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>133167</td></tr>
    <tr><td>Monday,02-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>331203</td></tr>
    <tr><td>Tuesday,03-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>366605</td></tr>
    <tr><td>Wednesday,04-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>350979</td></tr>
    <tr><td>Thursday,05-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>313085</td></tr>
    <tr><td>Friday,06-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>356225</td></tr>
    <tr><td>Saturday,07-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>239824</td></tr>
    <tr><td>Sunday,08-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>195618</td></tr>
    <tr><td>Monday,09-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>346576</td></tr>
    <tr><td>Tuesday,10-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>364608</td></tr>
    <tr><td>Wednesday,11-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>319244</td></tr>
    <tr><td>Thursday,12-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>288076</td></tr>
    <tr><td>Friday,13-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>311192</td></tr>
    <tr><td>Saturday,14-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>195912</td></tr>
    <tr><td>Sunday,15-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>174448</td></tr>
    <tr><td>Monday,16-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>328845</td></tr>
    <tr><td>Tuesday,17-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>369243</td></tr>
    <tr><td>Wednesday,18-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>340972</td></tr>
    <tr><td>Thursday,19-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>310538</td></tr>
    <tr><td>Friday,20-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>323619</td></tr>
    <tr><td>Saturday,21-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>242076</td></tr>
    <tr><td>Sunday,22-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>180349</td></tr>
    <tr><td>Monday,23-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>318952</td></tr>
    <tr><td>Tuesday,24-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>379246</td></tr>
    <tr><td>Wednesday,25-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>307204</td></tr>
    <tr><td>Thursday,26-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>224240</td></tr>
    <tr><td>Friday,27-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>325107</td></tr>
    <tr><td>Saturday,28-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>272814</td></tr>
    <tr><td>Sunday,29-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>223233</td></tr>
    <tr><td>Monday,30-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>356293</td></tr>
    <tr><td>Tuesday,31-Jan-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>373170</td></tr>
    <tr><td>Wednesday,01-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>295669</td></tr>
    <tr><td>Thursday,02-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>306032</td></tr>
    <tr><td>Friday,03-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>368128</td></tr>
    <tr><td>Saturday,04-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>258846</td></tr>
    <tr><td>Sunday,05-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>198855</td></tr>
    <tr><td>Monday,06-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>349113</td></tr>
    <tr><td>Tuesday,07-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>384357</td></tr>
    <tr><td>Wednesday,08-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>357961</td></tr>
    <tr><td>Thursday,09-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>330915</td></tr>
    <tr><td>Friday,10-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>347337</td></tr>
    <tr><td>Saturday,11-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>260037</td></tr>
    <tr><td>Sunday,12-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>202476</td></tr>
    <tr><td>Monday,13-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>330549</td></tr>
    <tr><td>Tuesday,14-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>364638</td></tr>
    <tr><td>Wednesday,15-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>365605</td></tr>
    <tr><td>Thursday,16-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>347060</td></tr>
    <tr><td>Friday,17-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>369849</td></tr>
    <tr><td>Saturday,18-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>254914</td></tr>
    <tr><td>Sunday,19-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>202044</td></tr>
    <tr><td>Monday,20-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>348869</td></tr>
    <tr><td>Tuesday,21-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>376782</td></tr>
    <tr><td>Wednesday,22-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>381263</td></tr>
    <tr><td>Thursday,23-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>335604</td></tr>
    <tr><td>Friday,24-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>337198</td></tr>
    <tr><td>Saturday,25-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>266859</td></tr>
    <tr><td>Sunday,26-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>220795</td></tr>
    <tr><td>Monday,27-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>321754</td></tr>
    <tr><td>Tuesday,28-Feb-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>383220</td></tr>
    <tr><td>Wednesday,01-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>345539</td></tr>
    <tr><td>Thursday,02-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>353113</td></tr>
    <tr><td>Friday,03-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>385722</td></tr>
    <tr><td>Saturday,04-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>274008</td></tr>
    <tr><td>Sunday,05-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>219058</td></tr>
    <tr><td>Monday,06-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>345144</td></tr>
    <tr><td>Tuesday,07-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>394430</td></tr>
    <tr><td>Wednesday,08-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>335690</td></tr>
    <tr><td>Thursday,09-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>364244</td></tr>
    <tr><td>Friday,10-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>389388</td></tr>
    <tr><td>Saturday,11-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>249965</td></tr>
    <tr><td>Sunday,12-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>180901</td></tr>
    <tr><td>Monday,13-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>236915</td></tr>
    <tr><td>Tuesday,14-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>396993</td></tr>
    <tr><td>Wednesday,15-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>384053</td></tr>
    <tr><td>Thursday,16-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>386156</td></tr>
    <tr><td>Friday,17-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>391306</td></tr>
    <tr><td>Saturday,18-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>290535</td></tr>
    <tr><td>Sunday,19-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>235662</td></tr>
    <tr><td>Monday,20-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>370461</td></tr>
    <tr><td>Tuesday,21-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>389358</td></tr>
    <tr><td>Wednesday,22-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>415931</td></tr>
    <tr><td>Thursday,23-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>346350</td></tr>
    <tr><td>Friday,24-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>384902</td></tr>
    <tr><td>Saturday,25-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>282131</td></tr>
    <tr><td>Sunday,26-Mar-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>211966</td></tr>
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