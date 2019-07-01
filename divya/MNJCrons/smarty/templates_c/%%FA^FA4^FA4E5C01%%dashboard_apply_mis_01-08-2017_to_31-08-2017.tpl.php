<?php /* Smarty version 2.6.19, created on 2017-09-01 12:51:32
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_01-08-2017_to_31-08-2017.tpl */ ?>
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
 <tr><td colspan="15" align="center">Apply Online from 01-08-2017 to 31-08-2017</td></tr>
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
    <tr><td>Tuesday,01-Aug-2017</td><td>14</td>
                       <td>--</td>
                       <td>13</td>
                       <td>1100644</td>
                       <td>10590</td> 
                       <td>341324</td>
                       <td>12</td>
                       <td>--</td> 
                       <td>12</td>
                       <td>1026494</td>
                       <td>15982</td>
                       <td>341213</td>
                       <td>2153736</td>
                       <td>460678</td></tr>
      <tr><td>Wednesday,02-Aug-2017</td><td>5</td>
                       <td>--</td>
                       <td>5</td>
                       <td>1059738</td>
                       <td>11108</td> 
                       <td>339041</td>
                       <td>15</td>
                       <td>--</td> 
                       <td>15</td>
                       <td>1020938</td>
                       <td>16984</td>
                       <td>347987</td>
                       <td>2108788</td>
                       <td>467146</td></tr>
      <tr><td>Thursday,03-Aug-2017</td><td>9</td>
                       <td>--</td>
                       <td>8</td>
                       <td>863364</td>
                       <td>7986</td> 
                       <td>271464</td>
                       <td>13</td>
                       <td>1</td> 
                       <td>13</td>
                       <td>843417</td>
                       <td>13097</td>
                       <td>282498</td>
                       <td>1727887</td>
                       <td>374220</td></tr>
      <tr><td>Friday,04-Aug-2017</td><td>5</td>
                       <td>--</td>
                       <td>5</td>
                       <td>939012</td>
                       <td>8875</td> 
                       <td>311522</td>
                       <td>4</td>
                       <td>--</td> 
                       <td>4</td>
                       <td>891208</td>
                       <td>13916</td>
                       <td>311400</td>
                       <td>1853020</td>
                       <td>425488</td></tr>
      <tr><td>Saturday,05-Aug-2017</td><td>10</td>
                       <td>--</td>
                       <td>8</td>
                       <td>688068</td>
                       <td>7228</td> 
                       <td>226418</td>
                       <td>2</td>
                       <td>--</td> 
                       <td>2</td>
                       <td>633159</td>
                       <td>10483</td>
                       <td>222582</td>
                       <td>1338950</td>
                       <td>307951</td></tr>
      <tr><td>Sunday,06-Aug-2017</td><td>2</td>
                       <td>--</td>
                       <td>2</td>
                       <td>473422</td>
                       <td>4385</td> 
                       <td>148272</td>
                       <td>4</td>
                       <td>--</td> 
                       <td>4</td>
                       <td>435230</td>
                       <td>6788</td>
                       <td>145276</td>
                       <td>919831</td>
                       <td>200299</td></tr>
      <tr><td>Monday,07-Aug-2017</td><td>3</td>
                       <td>--</td>
                       <td>3</td>
                       <td>756513</td>
                       <td>6925</td> 
                       <td>244897</td>
                       <td>6</td>
                       <td>--</td> 
                       <td>6</td>
                       <td>736486</td>
                       <td>10534</td>
                       <td>244552</td>
                       <td>1510467</td>
                       <td>333806</td></tr>
      <tr><td>Tuesday,08-Aug-2017</td><td>10</td>
                       <td>--</td>
                       <td>10</td>
                       <td>940811</td>
                       <td>9145</td> 
                       <td>302925</td>
                       <td>7</td>
                       <td>--</td> 
                       <td>7</td>
                       <td>927330</td>
                       <td>13840</td>
                       <td>310226</td>
                       <td>1891143</td>
                       <td>415715</td></tr>
      <tr><td>Wednesday,09-Aug-2017</td><td>6</td>
                       <td>--</td>
                       <td>6</td>
                       <td>944618</td>
                       <td>10074</td> 
                       <td>305421</td>
                       <td>5</td>
                       <td>--</td> 
                       <td>5</td>
                       <td>909454</td>
                       <td>13991</td>
                       <td>306962</td>
                       <td>1878148</td>
                       <td>416976</td></tr>
      <tr><td>Thursday,10-Aug-2017</td><td>7</td>
                       <td>--</td>
                       <td>7</td>
                       <td>826495</td>
                       <td>7840</td> 
                       <td>265855</td>
                       <td>8</td>
                       <td>--</td> 
                       <td>8</td>
                       <td>806383</td>
                       <td>11777</td>
                       <td>272476</td>
                       <td>1652510</td>
                       <td>365611</td></tr>
      <tr><td>Friday,11-Aug-2017</td><td>8</td>
                       <td>--</td>
                       <td>8</td>
                       <td>941805</td>
                       <td>9628</td> 
                       <td>311082</td>
                       <td>9</td>
                       <td>--</td> 
                       <td>9</td>
                       <td>885425</td>
                       <td>13459</td>
                       <td>306745</td>
                       <td>1850334</td>
                       <td>422759</td></tr>
      <tr><td>Saturday,12-Aug-2017</td><td>6</td>
                       <td>--</td>
                       <td>6</td>
                       <td>658339</td>
                       <td>7091</td> 
                       <td>211185</td>
                       <td>5</td>
                       <td>--</td> 
                       <td>5</td>
                       <td>595107</td>
                       <td>9766</td>
                       <td>206793</td>
                       <td>1270314</td>
                       <td>286781</td></tr>
      <tr><td>Sunday,13-Aug-2017</td><td>1</td>
                       <td>--</td>
                       <td>1</td>
                       <td>521643</td>
                       <td>4887</td> 
                       <td>160267</td>
                       <td>6</td>
                       <td>--</td> 
                       <td>3</td>
                       <td>459443</td>
                       <td>7264</td>
                       <td>154359</td>
                       <td>993244</td>
                       <td>214433</td></tr>
      <tr><td>Monday,14-Aug-2017</td><td>8</td>
                       <td>1</td>
                       <td>8</td>
                       <td>793281</td>
                       <td>7891</td> 
                       <td>249536</td>
                       <td>7</td>
                       <td>--</td> 
                       <td>7</td>
                       <td>727280</td>
                       <td>11248</td>
                       <td>242808</td>
                       <td>1539716</td>
                       <td>337068</td></tr>
      <tr><td>Tuesday,15-Aug-2017</td><td>3</td>
                       <td>--</td>
                       <td>3</td>
                       <td>728638</td>
                       <td>7267</td> 
                       <td>231391</td>
                       <td>3</td>
                       <td>--</td> 
                       <td>3</td>
                       <td>649663</td>
                       <td>9424</td>
                       <td>220257</td>
                       <td>1394998</td>
                       <td>309832</td></tr>
      <tr><td>Wednesday,16-Aug-2017</td><td>3</td>
                       <td>--</td>
                       <td>3</td>
                       <td>1020771</td>
                       <td>10817</td> 
                       <td>322542</td>
                       <td>12</td>
                       <td>--</td> 
                       <td>12</td>
                       <td>926863</td>
                       <td>14268</td>
                       <td>309388</td>
                       <td>1972734</td>
                       <td>429323</td></tr>
      <tr><td>Thursday,17-Aug-2017</td><td>6</td>
                       <td>--</td>
                       <td>6</td>
                       <td>885258</td>
                       <td>7907</td> 
                       <td>271420</td>
                       <td>15</td>
                       <td>--</td> 
                       <td>14</td>
                       <td>813171</td>
                       <td>12169</td>
                       <td>272598</td>
                       <td>1718526</td>
                       <td>367427</td></tr>
      <tr><td>Friday,18-Aug-2017</td><td>5</td>
                       <td>--</td>
                       <td>5</td>
                       <td>1011756</td>
                       <td>9589</td> 
                       <td>319914</td>
                       <td>12</td>
                       <td>--</td> 
                       <td>12</td>
                       <td>879964</td>
                       <td>13975</td>
                       <td>307873</td>
                       <td>1915301</td>
                       <td>428213</td></tr>
      <tr><td>Saturday,19-Aug-2017</td><td>9</td>
                       <td>--</td>
                       <td>5</td>
                       <td>704391</td>
                       <td>7049</td> 
                       <td>219740</td>
                       <td>4</td>
                       <td>--</td> 
                       <td>4</td>
                       <td>596135</td>
                       <td>10462</td>
                       <td>209561</td>
                       <td>1318050</td>
                       <td>292773</td></tr>
      <tr><td>Sunday,20-Aug-2017</td><td>2</td>
                       <td>--</td>
                       <td>2</td>
                       <td>602400</td>
                       <td>5211</td> 
                       <td>178128</td>
                       <td>5</td>
                       <td>--</td> 
                       <td>5</td>
                       <td>493172</td>
                       <td>8036</td>
                       <td>166476</td>
                       <td>1108826</td>
                       <td>232819</td></tr>
      <tr><td>Monday,21-Aug-2017</td><td>12</td>
                       <td>2</td>
                       <td>14</td>
                       <td>1031495</td>
                       <td>9542</td> 
                       <td>321703</td>
                       <td>7</td>
                       <td>--</td> 
                       <td>7</td>
                       <td>871692</td>
                       <td>13069</td>
                       <td>304030</td>
                       <td>1925819</td>
                       <td>424602</td></tr>
      <tr><td>Tuesday,22-Aug-2017</td><td>11</td>
                       <td>--</td>
                       <td>10</td>
                       <td>1050515</td>
                       <td>10753</td> 
                       <td>334664</td>
                       <td>14</td>
                       <td>--</td> 
                       <td>12</td>
                       <td>933051</td>
                       <td>14396</td>
                       <td>328981</td>
                       <td>2008740</td>
                       <td>450296</td></tr>
      <tr><td>Wednesday,23-Aug-2017</td><td>4</td>
                       <td>--</td>
                       <td>4</td>
                       <td>1021086</td>
                       <td>10153</td> 
                       <td>321161</td>
                       <td>10</td>
                       <td>--</td> 
                       <td>10</td>
                       <td>891539</td>
                       <td>13790</td>
                       <td>312407</td>
                       <td>1936582</td>
                       <td>430653</td></tr>
      <tr><td>Thursday,24-Aug-2017</td><td>6</td>
                       <td>--</td>
                       <td>6</td>
                       <td>739225</td>
                       <td>6595</td> 
                       <td>231028</td>
                       <td>12</td>
                       <td>--</td> 
                       <td>11</td>
                       <td>657315</td>
                       <td>10104</td>
                       <td>230467</td>
                       <td>1413257</td>
                       <td>313150</td></tr>
      <tr><td>Friday,25-Aug-2017</td><td>8</td>
                       <td>--</td>
                       <td>8</td>
                       <td>745357</td>
                       <td>6655</td> 
                       <td>239881</td>
                       <td>6</td>
                       <td>--</td> 
                       <td>6</td>
                       <td>602672</td>
                       <td>9309</td>
                       <td>221527</td>
                       <td>1364007</td>
                       <td>317834</td></tr>
      <tr><td>Saturday,26-Aug-2017</td><td>6</td>
                       <td>--</td>
                       <td>6</td>
                       <td>691848</td>
                       <td>7292</td> 
                       <td>217984</td>
                       <td>8</td>
                       <td>--</td> 
                       <td>6</td>
                       <td>562655</td>
                       <td>10351</td>
                       <td>202483</td>
                       <td>1272160</td>
                       <td>287014</td></tr>
      <tr><td>Sunday,27-Aug-2017</td><td>1</td>
                       <td>--</td>
                       <td>1</td>
                       <td>536153</td>
                       <td>4969</td> 
                       <td>162024</td>
                       <td>4</td>
                       <td>--</td> 
                       <td>4</td>
                       <td>431728</td>
                       <td>7623</td>
                       <td>149873</td>
                       <td>980478</td>
                       <td>211508</td></tr>
      <tr><td>Monday,28-Aug-2017</td><td>8</td>
                       <td>1</td>
                       <td>8</td>
                       <td>912541</td>
                       <td>8392</td> 
                       <td>279469</td>
                       <td>7</td>
                       <td>--</td> 
                       <td>7</td>
                       <td>775061</td>
                       <td>12267</td>
                       <td>261104</td>
                       <td>1708277</td>
                       <td>365952</td></tr>
      <tr><td>Tuesday,29-Aug-2017</td><td>13</td>
                       <td>--</td>
                       <td>11</td>
                       <td>957031</td>
                       <td>9887</td> 
                       <td>302902</td>
                       <td>10</td>
                       <td>--</td> 
                       <td>9</td>
                       <td>832237</td>
                       <td>14195</td>
                       <td>289904</td>
                       <td>1813373</td>
                       <td>402500</td></tr>
      <tr><td>Wednesday,30-Aug-2017</td><td>7</td>
                       <td>--</td>
                       <td>7</td>
                       <td>950792</td>
                       <td>10287</td> 
                       <td>308498</td>
                       <td>14</td>
                       <td>--</td> 
                       <td>13</td>
                       <td>844556</td>
                       <td>15611</td>
                       <td>300205</td>
                       <td>1821267</td>
                       <td>415893</td></tr>
      <tr><td>Thursday,31-Aug-2017</td><td>6</td>
                       <td>--</td>
                       <td>6</td>
                       <td>778265</td>
                       <td>7319</td> 
                       <td>242097</td>
                       <td>8</td>
                       <td>--</td> 
                       <td>8</td>
                       <td>745688</td>
                       <td>13382</td>
                       <td>252192</td>
                       <td>1544668</td>
                       <td>333948</td></tr>
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 01-08-2017 to 31-08-2017</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Tuesday,01-Aug-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,02-Aug-2017</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Thursday,03-Aug-2017</td><td>--</td>
                        <td>--</td>
                        <td>2</td></tr>
     <tr><td>Friday,04-Aug-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Saturday,05-Aug-2017</td><td>--</td>
                        <td>3</td>
                        <td>1</td></tr>
     <tr><td>Sunday,06-Aug-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,07-Aug-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,08-Aug-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,09-Aug-2017</td><td>--</td>
                        <td>--</td>
                        <td>2</td></tr>
     <tr><td>Thursday,10-Aug-2017</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Friday,11-Aug-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Saturday,12-Aug-2017</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Sunday,13-Aug-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,14-Aug-2017</td><td>--</td>
                        <td>--</td>
                        <td>1</td></tr>
     <tr><td>Tuesday,15-Aug-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,16-Aug-2017</td><td>--</td>
                        <td>3</td>
                        <td>1</td></tr>
     <tr><td>Thursday,17-Aug-2017</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Friday,18-Aug-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Saturday,19-Aug-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Sunday,20-Aug-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,21-Aug-2017</td><td>--</td>
                        <td>4</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,22-Aug-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,23-Aug-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Thursday,24-Aug-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Friday,25-Aug-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Saturday,26-Aug-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,27-Aug-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,28-Aug-2017</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,29-Aug-2017</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,30-Aug-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Thursday,31-Aug-2017</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="01">
<input type="hidden" name="endday" value="31">
<input type="hidden" name="startmonth" value="08">
<input type="hidden" name="startyear" value="2017">
<input type="hidden" name="endmonth" value="08">
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
    <tr><td>Tuesday,01-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>460678</td></tr>
    <tr><td>Wednesday,02-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>467146</td></tr>
    <tr><td>Thursday,03-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>374220</td></tr>
    <tr><td>Friday,04-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>425488</td></tr>
    <tr><td>Saturday,05-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>307951</td></tr>
    <tr><td>Sunday,06-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>200299</td></tr>
    <tr><td>Monday,07-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>333806</td></tr>
    <tr><td>Tuesday,08-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>415715</td></tr>
    <tr><td>Wednesday,09-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>416976</td></tr>
    <tr><td>Thursday,10-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>365611</td></tr>
    <tr><td>Friday,11-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>422759</td></tr>
    <tr><td>Saturday,12-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>286781</td></tr>
    <tr><td>Sunday,13-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>214433</td></tr>
    <tr><td>Monday,14-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>337068</td></tr>
    <tr><td>Tuesday,15-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>309832</td></tr>
    <tr><td>Wednesday,16-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>429323</td></tr>
    <tr><td>Thursday,17-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>367427</td></tr>
    <tr><td>Friday,18-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>428213</td></tr>
    <tr><td>Saturday,19-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>292773</td></tr>
    <tr><td>Sunday,20-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>232819</td></tr>
    <tr><td>Monday,21-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>424602</td></tr>
    <tr><td>Tuesday,22-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>450296</td></tr>
    <tr><td>Wednesday,23-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>430653</td></tr>
    <tr><td>Thursday,24-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>313150</td></tr>
    <tr><td>Friday,25-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>317834</td></tr>
    <tr><td>Saturday,26-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>287014</td></tr>
    <tr><td>Sunday,27-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>211508</td></tr>
    <tr><td>Monday,28-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>365952</td></tr>
    <tr><td>Tuesday,29-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>402500</td></tr>
    <tr><td>Wednesday,30-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>415893</td></tr>
    <tr><td>Thursday,31-Aug-2017</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>333948</td></tr>
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