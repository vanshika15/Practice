<?php /* Smarty version 2.6.19, created on 2017-08-14 10:18:51
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_01-07-2016_to_31-07-2016.tpl */ ?>
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
        <select name="startmonth" value="07">
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
		<option value="2017" >2017</option>
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
                <option value="2017" >2017</option>
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
 <tr><td colspan="15" align="center">Apply Online from 01-07-2016 to 31-07-2016</td></tr>
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
    <tr><td>Friday,01-Jul-2016</td><td>34</td>
                       <td>1</td>
                       <td>34</td>
                       <td>745420</td>
                       <td>12713</td> 
                       <td>255107</td>
                       <td>32</td>
                       <td>--</td> 
                       <td>27</td>
                       <td>848606</td>
                       <td>18951</td>
                       <td>291974</td>
                       <td>1625757</td>
                       <td>365589</td></tr>
      <tr><td>Saturday,02-Jul-2016</td><td>24</td>
                       <td>3</td>
                       <td>24</td>
                       <td>498797</td>
                       <td>7778</td> 
                       <td>164847</td>
                       <td>35</td>
                       <td>1</td> 
                       <td>32</td>
                       <td>534492</td>
                       <td>11875</td>
                       <td>181731</td>
                       <td>1053005</td>
                       <td>230725</td></tr>
      <tr><td>Sunday,03-Jul-2016</td><td>18</td>
                       <td>1</td>
                       <td>17</td>
                       <td>439726</td>
                       <td>5745</td> 
                       <td>137758</td>
                       <td>37</td>
                       <td>2</td> 
                       <td>36</td>
                       <td>447030</td>
                       <td>8850</td>
                       <td>145962</td>
                       <td>901409</td>
                       <td>188058</td></tr>
      <tr><td>Monday,04-Jul-2016</td><td>42</td>
                       <td>6</td>
                       <td>38</td>
                       <td>800604</td>
                       <td>12199</td> 
                       <td>264646</td>
                       <td>44</td>
                       <td>--</td> 
                       <td>36</td>
                       <td>852187</td>
                       <td>17840</td>
                       <td>282379</td>
                       <td>1682922</td>
                       <td>365652</td></tr>
      <tr><td>Tuesday,05-Jul-2016</td><td>31</td>
                       <td>--</td>
                       <td>25</td>
                       <td>749920</td>
                       <td>12323</td> 
                       <td>249733</td>
                       <td>23</td>
                       <td>3</td> 
                       <td>25</td>
                       <td>845752</td>
                       <td>18671</td>
                       <td>283933</td>
                       <td>1626723</td>
                       <td>350662</td></tr>
      <tr><td>Wednesday,06-Jul-2016</td><td>45</td>
                       <td>1</td>
                       <td>39</td>
                       <td>692360</td>
                       <td>10845</td> 
                       <td>233350</td>
                       <td>28</td>
                       <td>2</td> 
                       <td>29</td>
                       <td>786169</td>
                       <td>16475</td>
                       <td>265283</td>
                       <td>1505925</td>
                       <td>325245</td></tr>
      <tr><td>Thursday,07-Jul-2016</td><td>34</td>
                       <td>1</td>
                       <td>29</td>
                       <td>671426</td>
                       <td>10017</td> 
                       <td>222699</td>
                       <td>37</td>
                       <td>4</td> 
                       <td>36</td>
                       <td>762184</td>
                       <td>14965</td>
                       <td>251389</td>
                       <td>1458668</td>
                       <td>310152</td></tr>
      <tr><td>Friday,08-Jul-2016</td><td>47</td>
                       <td>--</td>
                       <td>40</td>
                       <td>738147</td>
                       <td>12356</td> 
                       <td>251776</td>
                       <td>27</td>
                       <td>1</td> 
                       <td>28</td>
                       <td>777030</td>
                       <td>17058</td>
                       <td>268756</td>
                       <td>1544666</td>
                       <td>348438</td></tr>
      <tr><td>Saturday,09-Jul-2016</td><td>26</td>
                       <td>2</td>
                       <td>26</td>
                       <td>476286</td>
                       <td>7416</td> 
                       <td>155383</td>
                       <td>21</td>
                       <td>3</td> 
                       <td>24</td>
                       <td>490770</td>
                       <td>11010</td>
                       <td>166734</td>
                       <td>985534</td>
                       <td>213521</td></tr>
      <tr><td>Sunday,10-Jul-2016</td><td>23</td>
                       <td>1</td>
                       <td>21</td>
                       <td>435292</td>
                       <td>5729</td> 
                       <td>135650</td>
                       <td>34</td>
                       <td>3</td> 
                       <td>30</td>
                       <td>427876</td>
                       <td>8446</td>
                       <td>140205</td>
                       <td>877404</td>
                       <td>182563</td></tr>
      <tr><td>Monday,11-Jul-2016</td><td>46</td>
                       <td>4</td>
                       <td>38</td>
                       <td>836177</td>
                       <td>13157</td> 
                       <td>273272</td>
                       <td>37</td>
                       <td>1</td> 
                       <td>30</td>
                       <td>817878</td>
                       <td>17125</td>
                       <td>275271</td>
                       <td>1684425</td>
                       <td>367211</td></tr>
      <tr><td>Tuesday,12-Jul-2016</td><td>35568</td>
                       <td>--</td>
                       <td>11611</td>
                       <td>800183</td>
                       <td>12527</td> 
                       <td>271925</td>
                       <td>30392</td>
                       <td>2</td> 
                       <td>11016</td>
                       <td>860789</td>
                       <td>19435</td>
                       <td>301759</td>
                       <td>1758896</td>
                       <td>386962</td></tr>
      <tr><td>Wednesday,13-Jul-2016</td><td>41883</td>
                       <td>--</td>
                       <td>13372</td>
                       <td>738614</td>
                       <td>11179</td> 
                       <td>255537</td>
                       <td>33298</td>
                       <td>4</td> 
                       <td>12144</td>
                       <td>751607</td>
                       <td>16785</td>
                       <td>272352</td>
                       <td>1593370</td>
                       <td>362835</td></tr>
      <tr><td>Thursday,14-Jul-2016</td><td>36448</td>
                       <td>2</td>
                       <td>11415</td>
                       <td>652236</td>
                       <td>9628</td> 
                       <td>223917</td>
                       <td>29755</td>
                       <td>2</td> 
                       <td>10706</td>
                       <td>709672</td>
                       <td>15224</td>
                       <td>253234</td>
                       <td>1452967</td>
                       <td>321207</td></tr>
      <tr><td>Friday,15-Jul-2016</td><td>51636</td>
                       <td>--</td>
                       <td>15701</td>
                       <td>721821</td>
                       <td>11901</td> 
                       <td>257664</td>
                       <td>39043</td>
                       <td>3</td> 
                       <td>13977</td>
                       <td>727833</td>
                       <td>16841</td>
                       <td>270516</td>
                       <td>1569078</td>
                       <td>360647</td></tr>
      <tr><td>Saturday,16-Jul-2016</td><td>23418</td>
                       <td>1</td>
                       <td>7356</td>
                       <td>456103</td>
                       <td>6847</td> 
                       <td>159227</td>
                       <td>17969</td>
                       <td>1</td> 
                       <td>6520</td>
                       <td>434987</td>
                       <td>10181</td>
                       <td>163673</td>
                       <td>949507</td>
                       <td>222465</td></tr>
      <tr><td>Sunday,17-Jul-2016</td><td>17094</td>
                       <td>2</td>
                       <td>4981</td>
                       <td>409134</td>
                       <td>5156</td> 
                       <td>131665</td>
                       <td>12391</td>
                       <td>1</td> 
                       <td>4334</td>
                       <td>385475</td>
                       <td>8357</td>
                       <td>133525</td>
                       <td>837610</td>
                       <td>179485</td></tr>
      <tr><td>Monday,18-Jul-2016</td><td>45536</td>
                       <td>2</td>
                       <td>13730</td>
                       <td>742627</td>
                       <td>12131</td> 
                       <td>253437</td>
                       <td>34447</td>
                       <td>--</td> 
                       <td>12192</td>
                       <td>724084</td>
                       <td>16447</td>
                       <td>257022</td>
                       <td>1575274</td>
                       <td>349720</td></tr>
      <tr><td>Tuesday,19-Jul-2016</td><td>48293</td>
                       <td>--</td>
                       <td>15386</td>
                       <td>792808</td>
                       <td>13886</td> 
                       <td>274093</td>
                       <td>39147</td>
                       <td>2</td> 
                       <td>14355</td>
                       <td>859673</td>
                       <td>19618</td>
                       <td>304064</td>
                       <td>1773427</td>
                       <td>385989</td></tr>
      <tr><td>Wednesday,20-Jul-2016</td><td>45558</td>
                       <td>--</td>
                       <td>14043</td>
                       <td>721469</td>
                       <td>12722</td> 
                       <td>255666</td>
                       <td>36899</td>
                       <td>3</td> 
                       <td>13031</td>
                       <td>792060</td>
                       <td>18067</td>
                       <td>284531</td>
                       <td>1626778</td>
                       <td>365181</td></tr>
      <tr><td>Thursday,21-Jul-2016</td><td>42517</td>
                       <td>1</td>
                       <td>13223</td>
                       <td>667416</td>
                       <td>10813</td> 
                       <td>233416</td>
                       <td>35783</td>
                       <td>2</td> 
                       <td>12533</td>
                       <td>739484</td>
                       <td>16745</td>
                       <td>263076</td>
                       <td>1512761</td>
                       <td>336990</td></tr>
      <tr><td>Friday,22-Jul-2016</td><td>12365</td>
                       <td>--</td>
                       <td>3827</td>
                       <td>772714</td>
                       <td>13238</td> 
                       <td>269091</td>
                       <td>9763</td>
                       <td>--</td> 
                       <td>3533</td>
                       <td>780540</td>
                       <td>18721</td>
                       <td>286228</td>
                       <td>1607341</td>
                       <td>377388</td></tr>
      <tr><td>Saturday,23-Jul-2016</td><td>23</td>
                       <td>1</td>
                       <td>21</td>
                       <td>480104</td>
                       <td>8035</td> 
                       <td>163888</td>
                       <td>17</td>
                       <td>1</td> 
                       <td>16</td>
                       <td>498787</td>
                       <td>12658</td>
                       <td>177798</td>
                       <td>999626</td>
                       <td>230580</td></tr>
      <tr><td>Sunday,24-Jul-2016</td><td>14</td>
                       <td>--</td>
                       <td>14</td>
                       <td>417411</td>
                       <td>6010</td> 
                       <td>136681</td>
                       <td>18</td>
                       <td>2</td> 
                       <td>17</td>
                       <td>441934</td>
                       <td>10086</td>
                       <td>148615</td>
                       <td>875475</td>
                       <td>187293</td></tr>
      <tr><td>Monday,25-Jul-2016</td><td>23</td>
                       <td>--</td>
                       <td>21</td>
                       <td>763534</td>
                       <td>12346</td> 
                       <td>261201</td>
                       <td>36</td>
                       <td>--</td> 
                       <td>34</td>
                       <td>849857</td>
                       <td>19554</td>
                       <td>288515</td>
                       <td>1645350</td>
                       <td>362495</td></tr>
      <tr><td>Tuesday,26-Jul-2016</td><td>23</td>
                       <td>1</td>
                       <td>20</td>
                       <td>799100</td>
                       <td>13828</td> 
                       <td>275999</td>
                       <td>33</td>
                       <td>--</td> 
                       <td>29</td>
                       <td>913147</td>
                       <td>22551</td>
                       <td>314993</td>
                       <td>1748683</td>
                       <td>394911</td></tr>
      <tr><td>Wednesday,27-Jul-2016</td><td>19</td>
                       <td>1</td>
                       <td>17</td>
                       <td>687180</td>
                       <td>11614</td> 
                       <td>237350</td>
                       <td>21</td>
                       <td>1</td> 
                       <td>22</td>
                       <td>773726</td>
                       <td>19155</td>
                       <td>266889</td>
                       <td>1491717</td>
                       <td>335465</td></tr>
      <tr><td>Thursday,28-Jul-2016</td><td>20</td>
                       <td>--</td>
                       <td>19</td>
                       <td>633099</td>
                       <td>10009</td> 
                       <td>216913</td>
                       <td>26</td>
                       <td>--</td> 
                       <td>23</td>
                       <td>734646</td>
                       <td>17272</td>
                       <td>250829</td>
                       <td>1395072</td>
                       <td>313797</td></tr>
      <tr><td>Friday,29-Jul-2016</td><td>18</td>
                       <td>1</td>
                       <td>17</td>
                       <td>727872</td>
                       <td>13376</td> 
                       <td>256684</td>
                       <td>49</td>
                       <td>1</td> 
                       <td>48</td>
                       <td>791635</td>
                       <td>19685</td>
                       <td>282368</td>
                       <td>1552637</td>
                       <td>366193</td></tr>
      <tr><td>Saturday,30-Jul-2016</td><td>21</td>
                       <td>2</td>
                       <td>21</td>
                       <td>455419</td>
                       <td>8179</td> 
                       <td>158077</td>
                       <td>33</td>
                       <td>--</td> 
                       <td>30</td>
                       <td>492141</td>
                       <td>12125</td>
                       <td>172979</td>
                       <td>967920</td>
                       <td>223414</td></tr>
      <tr><td>Sunday,31-Jul-2016</td><td>22</td>
                       <td>--</td>
                       <td>20</td>
                       <td>387120</td>
                       <td>5550</td> 
                       <td>126605</td>
                       <td>24</td>
                       <td>--</td> 
                       <td>20</td>
                       <td>399138</td>
                       <td>9112</td>
                       <td>133913</td>
                       <td>800966</td>
                       <td>175261</td></tr>
   </table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4">Apply Online from 01-07-2016 to 31-07-2016</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Friday,01-Jul-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Saturday,02-Jul-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,03-Jul-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Monday,04-Jul-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,05-Jul-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,06-Jul-2016</td><td>--</td>
                        <td>3</td>
                        <td>--</td></tr>
     <tr><td>Thursday,07-Jul-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Friday,08-Jul-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Saturday,09-Jul-2016</td><td>--</td>
                        <td>--</td>
                        <td>1</td></tr>
     <tr><td>Sunday,10-Jul-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,11-Jul-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,12-Jul-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,13-Jul-2016</td><td>--</td>
                        <td>--</td>
                        <td>1</td></tr>
     <tr><td>Thursday,14-Jul-2016</td><td>--</td>
                        <td>--</td>
                        <td>1</td></tr>
     <tr><td>Friday,15-Jul-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Saturday,16-Jul-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,17-Jul-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,18-Jul-2016</td><td>--</td>
                        <td>5</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,19-Jul-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,20-Jul-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Thursday,21-Jul-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Friday,22-Jul-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Saturday,23-Jul-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Sunday,24-Jul-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Monday,25-Jul-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Tuesday,26-Jul-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Wednesday,27-Jul-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Thursday,28-Jul-2016</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
     <tr><td>Friday,29-Jul-2016</td><td>--</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Saturday,30-Jul-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
     <tr><td>Sunday,31-Jul-2016</td><td>--</td>
                        <td>1</td>
                        <td>--</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="01">
<input type="hidden" name="endday" value="31">
<input type="hidden" name="startmonth" value="07">
<input type="hidden" name="startyear" value="2016">
<input type="hidden" name="endmonth" value="07">
<input type="hidden" name="endyear" value="2016">
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
    <tr><td>Friday,01-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>365589</td></tr>
    <tr><td>Saturday,02-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>230725</td></tr>
    <tr><td>Sunday,03-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>188058</td></tr>
    <tr><td>Monday,04-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>365652</td></tr>
    <tr><td>Tuesday,05-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>350662</td></tr>
    <tr><td>Wednesday,06-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>325245</td></tr>
    <tr><td>Thursday,07-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>310152</td></tr>
    <tr><td>Friday,08-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>348438</td></tr>
    <tr><td>Saturday,09-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>213521</td></tr>
    <tr><td>Sunday,10-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>182563</td></tr>
    <tr><td>Monday,11-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>367211</td></tr>
    <tr><td>Tuesday,12-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>386962</td></tr>
    <tr><td>Wednesday,13-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>362835</td></tr>
    <tr><td>Thursday,14-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>321207</td></tr>
    <tr><td>Friday,15-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>360647</td></tr>
    <tr><td>Saturday,16-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>222465</td></tr>
    <tr><td>Sunday,17-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>179485</td></tr>
    <tr><td>Monday,18-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>349720</td></tr>
    <tr><td>Tuesday,19-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>385989</td></tr>
    <tr><td>Wednesday,20-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>365181</td></tr>
    <tr><td>Thursday,21-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>336990</td></tr>
    <tr><td>Friday,22-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>377388</td></tr>
    <tr><td>Saturday,23-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>230580</td></tr>
    <tr><td>Sunday,24-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>187293</td></tr>
    <tr><td>Monday,25-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>362495</td></tr>
    <tr><td>Tuesday,26-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>394911</td></tr>
    <tr><td>Wednesday,27-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>335465</td></tr>
    <tr><td>Thursday,28-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>313797</td></tr>
    <tr><td>Friday,29-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>366193</td></tr>
    <tr><td>Saturday,30-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>223414</td></tr>
    <tr><td>Sunday,31-Jul-2016</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>175261</td></tr>
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