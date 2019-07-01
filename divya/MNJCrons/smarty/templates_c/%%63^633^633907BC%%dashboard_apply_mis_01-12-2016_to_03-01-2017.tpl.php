<?php /* Smarty version 2.6.19, created on 2017-01-05 15:18:49
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_01-12-2016_to_03-01-2017.tpl */ ?>
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
        <select name="startmonth" value="12">
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
	   <option value="11" >NOV</option>
	   <option value="12"  selected >DEC</option>
        </select>
        </font></b></TD>
      <TD width="57"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="startyear" value="2016">
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
		<option value="2016" >2017</option>
		<option value="2016" >2018</option>
		<option value="2016" >2019</option>
        </select>
        </font></b></TD>
      <TD width="46"> 
        <div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">To</font></b></div>
      </TD>
      <TD width="46"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endday" value="03">
		          <option value="01" >1</option>
			<option value="02" >2</option>
			<option value="03"  selected >3</option>
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
                <option value="2016"  selected >2017</option>
                <option value="2016" >2018</option>
                <option value="2016" >2019</option>
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
 <tr><td colspan="15" align="center">Apply Online from 01-12-2016 to 03-01-2017</td></tr>
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
    <tr><td>Thursday,01-Dec-2016</td><td>17</td>
                       <td>--</td>
                       <td>16</td>
                       <td>579645</td>
                       <td>8500</td> 
                       <td>203874</td>
                       <td>31</td>
                       <td>--</td> 
                       <td>26</td>
                       <td>753041</td>
                       <td>15117</td>
                       <td>242557</td>
                       <td>1356351</td>
                       <td>293255</td></tr>
      <tr><td>Friday,02-Dec-2016</td><td>15</td>
                       <td>--</td>
                       <td>13</td>
                       <td>563179</td>
                       <td>9153</td> 
                       <td>205773</td>
                       <td>24</td>
                       <td>--</td> 
                       <td>22</td>
                       <td>748455</td>
                       <td>15902</td>
                       <td>253610</td>
                       <td>1336728</td>
                       <td>299448</td></tr>
      <tr><td>Saturday,03-Dec-2016</td><td>15</td>
                       <td>--</td>
                       <td>14</td>
                       <td>383064</td>
                       <td>5218</td> 
                       <td>136989</td>
                       <td>22</td>
                       <td>1</td> 
                       <td>22</td>
                       <td>499216</td>
                       <td>9509</td>
                       <td>164872</td>
                       <td>897045</td>
                       <td>197218</td></tr>
      <tr><td>Sunday,04-Dec-2016</td><td>10</td>
                       <td>--</td>
                       <td>7</td>
                       <td>369054</td>
                       <td>4598</td> 
                       <td>130527</td>
                       <td>11</td>
                       <td>--</td> 
                       <td>10</td>
                       <td>481335</td>
                       <td>8302</td>
                       <td>157860</td>
                       <td>863310</td>
                       <td>188402</td></tr>
      <tr><td>Monday,05-Dec-2016</td><td>22</td>
                       <td>--</td>
                       <td>18</td>
                       <td>518118</td>
                       <td>7263</td> 
                       <td>181656</td>
                       <td>16</td>
                       <td>2</td> 
                       <td>18</td>
                       <td>699853</td>
                       <td>12877</td>
                       <td>220277</td>
                       <td>1238151</td>
                       <td>262219</td></tr>
      <tr><td>Tuesday,06-Dec-2016</td><td>6</td>
                       <td>--</td>
                       <td>6</td>
                       <td>616311</td>
                       <td>9151</td> 
                       <td>222672</td>
                       <td>15</td>
                       <td>--</td> 
                       <td>14</td>
                       <td>829070</td>
                       <td>15914</td>
                       <td>269570</td>
                       <td>1470467</td>
                       <td>323380</td></tr>
      <tr><td>Wednesday,07-Dec-2016</td><td>24</td>
                       <td>1</td>
                       <td>23</td>
                       <td>535905</td>
                       <td>9446</td> 
                       <td>198381</td>
                       <td>29</td>
                       <td>1</td> 
                       <td>26</td>
                       <td>731955</td>
                       <td>16293</td>
                       <td>244464</td>
                       <td>1293654</td>
                       <td>293440</td></tr>
      <tr><td>Thursday,08-Dec-2016</td><td>19</td>
                       <td>--</td>
                       <td>19</td>
                       <td>483578</td>
                       <td>8195</td> 
                       <td>180045</td>
                       <td>43</td>
                       <td>--</td> 
                       <td>36</td>
                       <td>681435</td>
                       <td>14760</td>
                       <td>223498</td>
                       <td>1188030</td>
                       <td>267127</td></tr>
      <tr><td>Friday,09-Dec-2016</td><td>16</td>
                       <td>--</td>
                       <td>14</td>
                       <td>546772</td>
                       <td>9251</td> 
                       <td>206942</td>
                       <td>30</td>
                       <td>--</td> 
                       <td>27</td>
                       <td>746767</td>
                       <td>15877</td>
                       <td>252044</td>
                       <td>1318713</td>
                       <td>305489</td></tr>
      <tr><td>Saturday,10-Dec-2016</td><td>10</td>
                       <td>--</td>
                       <td>9</td>
                       <td>378867</td>
                       <td>5719</td> 
                       <td>138921</td>
                       <td>13</td>
                       <td>1</td> 
                       <td>14</td>
                       <td>499481</td>
                       <td>10103</td>
                       <td>165663</td>
                       <td>894194</td>
                       <td>202364</td></tr>
      <tr><td>Sunday,11-Dec-2016</td><td>9</td>
                       <td>--</td>
                       <td>9</td>
                       <td>320737</td>
                       <td>3960</td> 
                       <td>113051</td>
                       <td>9</td>
                       <td>--</td> 
                       <td>9</td>
                       <td>413195</td>
                       <td>7229</td>
                       <td>131913</td>
                       <td>745139</td>
                       <td>161711</td></tr>
      <tr><td>Monday,12-Dec-2016</td><td>14</td>
                       <td>--</td>
                       <td>12</td>
                       <td>550346</td>
                       <td>7570</td> 
                       <td>196667</td>
                       <td>23</td>
                       <td>1</td> 
                       <td>24</td>
                       <td>721926</td>
                       <td>12817</td>
                       <td>229512</td>
                       <td>1292697</td>
                       <td>282299</td></tr>
      <tr><td>Tuesday,13-Dec-2016</td><td>14</td>
                       <td>--</td>
                       <td>10</td>
                       <td>595602</td>
                       <td>9530</td> 
                       <td>216025</td>
                       <td>19</td>
                       <td>--</td> 
                       <td>19</td>
                       <td>751079</td>
                       <td>15560</td>
                       <td>249875</td>
                       <td>1371804</td>
                       <td>295840</td></tr>
      <tr><td>Wednesday,14-Dec-2016</td><td>13</td>
                       <td>--</td>
                       <td>12</td>
                       <td>595999</td>
                       <td>7921</td> 
                       <td>207333</td>
                       <td>28</td>
                       <td>1</td> 
                       <td>28</td>
                       <td>620495</td>
                       <td>12898</td>
                       <td>216326</td>
                       <td>1237355</td>
                       <td>207339</td></tr>
      <tr><td>Thursday,15-Dec-2016</td><td>9</td>
                       <td>--</td>
                       <td>9</td>
                       <td>578419</td>
                       <td>7744</td> 
                       <td>200785</td>
                       <td>32</td>
                       <td>1</td> 
                       <td>29</td>
                       <td>641285</td>
                       <td>13391</td>
                       <td>220619</td>
                       <td>1240881</td>
                       <td>200789</td></tr>
      <tr><td>Friday,16-Dec-2016</td><td>15</td>
                       <td>--</td>
                       <td>13</td>
                       <td>594888</td>
                       <td>8560</td> 
                       <td>212165</td>
                       <td>25</td>
                       <td>1</td> 
                       <td>23</td>
                       <td>647474</td>
                       <td>14769</td>
                       <td>232071</td>
                       <td>1265732</td>
                       <td>212172</td></tr>
      <tr><td>Saturday,17-Dec-2016</td><td>9</td>
                       <td>--</td>
                       <td>9</td>
                       <td>439776</td>
                       <td>5809</td> 
                       <td>157053</td>
                       <td>20</td>
                       <td>--</td> 
                       <td>17</td>
                       <td>468039</td>
                       <td>9773</td>
                       <td>168983</td>
                       <td>923426</td>
                       <td>157055</td></tr>
      <tr><td>Sunday,18-Dec-2016</td><td>15</td>
                       <td>--</td>
                       <td>13</td>
                       <td>361337</td>
                       <td>4254</td> 
                       <td>122763</td>
                       <td>15</td>
                       <td>--</td> 
                       <td>14</td>
                       <td>385123</td>
                       <td>7616</td>
                       <td>131467</td>
                       <td>758360</td>
                       <td>122770</td></tr>
      <tr><td>Monday,19-Dec-2016</td><td>19</td>
                       <td>--</td>
                       <td>17</td>
                       <td>628249</td>
                       <td>8199</td> 
                       <td>219206</td>
                       <td>20</td>
                       <td>1</td> 
                       <td>19</td>
                       <td>691448</td>
                       <td>13973</td>
                       <td>235976</td>
                       <td>1341909</td>
                       <td>219212</td></tr>
      <tr><td>Tuesday,20-Dec-2016</td><td>33</td>
                       <td>--</td>
                       <td>29</td>
                       <td>598638</td>
                       <td>7936</td> 
                       <td>208370</td>
                       <td>20</td>
                       <td>--</td> 
                       <td>17</td>
                       <td>671497</td>
                       <td>13735</td>
                       <td>229744</td>
                       <td>1291859</td>
                       <td>208383</td></tr>
      <tr><td>Wednesday,21-Dec-2016</td><td>15</td>
                       <td>1</td>
                       <td>13</td>
                       <td>629546</td>
                       <td>8948</td> 
                       <td>220498</td>
                       <td>22</td>
                       <td>1</td> 
                       <td>21</td>
                       <td>688726</td>
                       <td>15086</td>
                       <td>239146</td>
                       <td>1342345</td>
                       <td>220504</td></tr>
      <tr><td>Thursday,22-Dec-2016</td><td>15</td>
                       <td>--</td>
                       <td>15</td>
                       <td>547652</td>
                       <td>7396</td> 
                       <td>191304</td>
                       <td>26</td>
                       <td>--</td> 
                       <td>23</td>
                       <td>617348</td>
                       <td>13626</td>
                       <td>214120</td>
                       <td>1186063</td>
                       <td>191311</td></tr>
      <tr><td>Friday,23-Dec-2016</td><td>14</td>
                       <td>--</td>
                       <td>12</td>
                       <td>547742</td>
                       <td>8600</td> 
                       <td>201491</td>
                       <td>18</td>
                       <td>--</td> 
                       <td>17</td>
                       <td>612621</td>
                       <td>15226</td>
                       <td>222018</td>
                       <td>1184221</td>
                       <td>201495</td></tr>
      <tr><td>Saturday,24-Dec-2016</td><td>12</td>
                       <td>--</td>
                       <td>11</td>
                       <td>389491</td>
                       <td>5959</td> 
                       <td>143213</td>
                       <td>14</td>
                       <td>--</td> 
                       <td>13</td>
                       <td>432186</td>
                       <td>10201</td>
                       <td>157648</td>
                       <td>837863</td>
                       <td>143216</td></tr>
      <tr><td>Sunday,25-Dec-2016</td><td>12</td>
                       <td>--</td>
                       <td>11</td>
                       <td>294771</td>
                       <td>3716</td> 
                       <td>104187</td>
                       <td>8</td>
                       <td>--</td> 
                       <td>7</td>
                       <td>322739</td>
                       <td>7456</td>
                       <td>113879</td>
                       <td>628702</td>
                       <td>104194</td></tr>
      <tr><td>Monday,26-Dec-2016</td><td>12</td>
                       <td>--</td>
                       <td>12</td>
                       <td>506130</td>
                       <td>7419</td> 
                       <td>181609</td>
                       <td>17</td>
                       <td>--</td> 
                       <td>16</td>
                       <td>561617</td>
                       <td>14075</td>
                       <td>195314</td>
                       <td>1089270</td>
                       <td>181616</td></tr>
      <tr><td>Tuesday,27-Dec-2016</td><td>29</td>
                       <td>--</td>
                       <td>25</td>
                       <td>543599</td>
                       <td>8057</td> 
                       <td>195963</td>
                       <td>17</td>
                       <td>--</td> 
                       <td>15</td>
                       <td>630571</td>
                       <td>15532</td>
                       <td>221754</td>
                       <td>1197805</td>
                       <td>195970</td></tr>
      <tr><td>Wednesday,28-Dec-2016</td><td>27</td>
                       <td>--</td>
                       <td>22</td>
                       <td>574445</td>
                       <td>8567</td> 
                       <td>206137</td>
                       <td>32</td>
                       <td>--</td> 
                       <td>29</td>
                       <td>646421</td>
                       <td>15562</td>
                       <td>229290</td>
                       <td>1245054</td>
                       <td>300169</td></tr>
      <tr><td>Thursday,29-Dec-2016</td><td>23</td>
                       <td>--</td>
                       <td>22</td>
                       <td>547114</td>
                       <td>7830</td> 
                       <td>192861</td>
                       <td>14</td>
                       <td>--</td> 
                       <td>14</td>
                       <td>624916</td>
                       <td>14320</td>
                       <td>219786</td>
                       <td>1194217</td>
                       <td>283275</td></tr>
      <tr><td>Friday,30-Dec-2016</td><td>21</td>
                       <td>--</td>
                       <td>18</td>
                       <td>566433</td>
                       <td>9008</td> 
                       <td>208857</td>
                       <td>16</td>
                       <td>--</td> 
                       <td>16</td>
                       <td>651753</td>
                       <td>16153</td>
                       <td>238279</td>
                       <td>1243384</td>
                       <td>309153</td></tr>
      <tr><td>Saturday,31-Dec-2016</td><td>6</td>
                       <td>--</td>
                       <td>5</td>
                       <td>294903</td>
                       <td>4321</td> 
                       <td>108301</td>
                       <td>7</td>
                       <td>--</td> 
                       <td>7</td>
                       <td>338576</td>
                       <td>8205</td>
                       <td>124247</td>
                       <td>646018</td>
                       <td>161968</td></tr>
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
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 01-12-2016 to 03-01-2017</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Thursday,01-Dec-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Friday,02-Dec-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Saturday,03-Dec-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Sunday,04-Dec-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,05-Dec-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,06-Dec-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,07-Dec-2016</td><td>--</td>
                        <td>4</td>
                        <td>--</td></tr>
     <tr><td>Thursday,08-Dec-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Friday,09-Dec-2016</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Saturday,10-Dec-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,11-Dec-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,12-Dec-2016</td><td>--</td>
                        <td>6</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,13-Dec-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,14-Dec-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Thursday,15-Dec-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Friday,16-Dec-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Saturday,17-Dec-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Sunday,18-Dec-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,19-Dec-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,20-Dec-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,21-Dec-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Thursday,22-Dec-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Friday,23-Dec-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Saturday,24-Dec-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Sunday,25-Dec-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,26-Dec-2016</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,27-Dec-2016</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,28-Dec-2016</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Thursday,29-Dec-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Friday,30-Dec-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Saturday,31-Dec-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Sunday,01-Jan-2017</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,02-Jan-2017</td><td>--</td>
                        <td>4</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,03-Jan-2017</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="01">
<input type="hidden" name="endday" value="03">
<input type="hidden" name="startmonth" value="12">
<input type="hidden" name="startyear" value="2016">
<input type="hidden" name="endmonth" value="01">
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
    <tr><td>Thursday,01-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>293255</td></tr>
    <tr><td>Friday,02-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>299448</td></tr>
    <tr><td>Saturday,03-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>197218</td></tr>
    <tr><td>Sunday,04-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>188402</td></tr>
    <tr><td>Monday,05-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>262219</td></tr>
    <tr><td>Tuesday,06-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>323380</td></tr>
    <tr><td>Wednesday,07-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>293440</td></tr>
    <tr><td>Thursday,08-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>267127</td></tr>
    <tr><td>Friday,09-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>305489</td></tr>
    <tr><td>Saturday,10-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>202364</td></tr>
    <tr><td>Sunday,11-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>161711</td></tr>
    <tr><td>Monday,12-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>282299</td></tr>
    <tr><td>Tuesday,13-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>295840</td></tr>
    <tr><td>Wednesday,14-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>207339</td></tr>
    <tr><td>Thursday,15-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>200789</td></tr>
    <tr><td>Friday,16-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>212172</td></tr>
    <tr><td>Saturday,17-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>157055</td></tr>
    <tr><td>Sunday,18-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>122770</td></tr>
    <tr><td>Monday,19-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>219212</td></tr>
    <tr><td>Tuesday,20-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>208383</td></tr>
    <tr><td>Wednesday,21-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>220504</td></tr>
    <tr><td>Thursday,22-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>191311</td></tr>
    <tr><td>Friday,23-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>201495</td></tr>
    <tr><td>Saturday,24-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>143216</td></tr>
    <tr><td>Sunday,25-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>104194</td></tr>
    <tr><td>Monday,26-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>181616</td></tr>
    <tr><td>Tuesday,27-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>195970</td></tr>
    <tr><td>Wednesday,28-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>300169</td></tr>
    <tr><td>Thursday,29-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>283275</td></tr>
    <tr><td>Friday,30-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>309153</td></tr>
    <tr><td>Saturday,31-Dec-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>161968</td></tr>
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