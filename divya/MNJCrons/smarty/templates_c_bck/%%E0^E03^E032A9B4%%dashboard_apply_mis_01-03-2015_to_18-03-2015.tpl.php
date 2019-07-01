<?php /* Smarty version 2.6.19, created on 2015-03-19 10:46:56
         compiled from /usr/local/apache/htdocs/dashboard/dashboard_output/apply/dashboard_apply_mis_01-03-2015_to_18-03-2015.tpl */ ?>
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
        <select name="startmonth" value="03">
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
        <select name="endday" value="18">
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
			<option value="18"  selected >18</option>
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
 <tr><td colspan="15" align="center">Apply Online from 01-03-2015 to 18-03-2015</td></tr>
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
    <tr><td>Sunday,01-Mar-2015</td><td>32058</td>
                       <td>821</td>
                       <td>17973</td>
                       <td>242858</td>
                       <td>5070</td> 
                       <td>78384</td>
                       <td>28637</td>
                       <td>695</td> 
                       <td>16841</td>
                       <td>252522</td>
                       <td>6694</td>
                       <td>84184</td>
                       <td>569355</td>
                       <td>122803</td></tr>
      <tr><td>Monday,02-Mar-2015</td><td>47901</td>
                       <td>1352</td>
                       <td>28588</td>
                       <td>380213</td>
                       <td>8393</td> 
                       <td>128996</td>
                       <td>41324</td>
                       <td>1110</td> 
                       <td>25855</td>
                       <td>399669</td>
                       <td>10965</td>
                       <td>138011</td>
                       <td>890927</td>
                       <td>202582</td></tr>
      <tr><td>Tuesday,03-Mar-2015</td><td>71696</td>
                       <td>2059</td>
                       <td>44809</td>
                       <td>488920</td>
                       <td>11720</td> 
                       <td>169459</td>
                       <td>56860</td>
                       <td>1333</td> 
                       <td>37251</td>
                       <td>498364</td>
                       <td>13754</td>
                       <td>176909</td>
                       <td>1144706</td>
                       <td>267179</td></tr>
      <tr><td>Wednesday,04-Mar-2015</td><td>144952</td>
                       <td>3434</td>
                       <td>84717</td>
                       <td>408726</td>
                       <td>9882</td> 
                       <td>143043</td>
                       <td>132701</td>
                       <td>3203</td> 
                       <td>81124</td>
                       <td>441877</td>
                       <td>11634</td>
                       <td>159947</td>
                       <td>1156409</td>
                       <td>274354</td></tr>
      <tr><td>Thursday,05-Mar-2015</td><td>58271</td>
                       <td>1690</td>
                       <td>34993</td>
                       <td>353979</td>
                       <td>8471</td> 
                       <td>126243</td>
                       <td>49046</td>
                       <td>1322</td> 
                       <td>31261</td>
                       <td>373535</td>
                       <td>9807</td>
                       <td>136873</td>
                       <td>856121</td>
                       <td>206583</td></tr>
      <tr><td>Friday,06-Mar-2015</td><td>43144</td>
                       <td>997</td>
                       <td>25416</td>
                       <td>285623</td>
                       <td>6771</td> 
                       <td>100831</td>
                       <td>37818</td>
                       <td>798</td> 
                       <td>23559</td>
                       <td>306630</td>
                       <td>7991</td>
                       <td>111161</td>
                       <td>689772</td>
                       <td>164382</td></tr>
      <tr><td>Saturday,07-Mar-2015</td><td>45112</td>
                       <td>1330</td>
                       <td>27208</td>
                       <td>276089</td>
                       <td>6761</td> 
                       <td>94271</td>
                       <td>39568</td>
                       <td>993</td> 
                       <td>25121</td>
                       <td>291874</td>
                       <td>8213</td>
                       <td>103320</td>
                       <td>669940</td>
                       <td>156507</td></tr>
      <tr><td>Sunday,08-Mar-2015</td><td>21618</td>
                       <td>586</td>
                       <td>11727</td>
                       <td>217064</td>
                       <td>4765</td> 
                       <td>72246</td>
                       <td>18554</td>
                       <td>459</td> 
                       <td>10631</td>
                       <td>237006</td>
                       <td>6198</td>
                       <td>80282</td>
                       <td>506250</td>
                       <td>111264</td></tr>
      <tr><td>Monday,09-Mar-2015</td><td>59852</td>
                       <td>1680</td>
                       <td>37542</td>
                       <td>425333</td>
                       <td>9965</td> 
                       <td>147651</td>
                       <td>55865</td>
                       <td>1456</td> 
                       <td>36640</td>
                       <td>481008</td>
                       <td>12793</td>
                       <td>168081</td>
                       <td>1047952</td>
                       <td>242913</td></tr>
      <tr><td>Tuesday,10-Mar-2015</td><td>122754</td>
                       <td>2850</td>
                       <td>72649</td>
                       <td>447652</td>
                       <td>11264</td> 
                       <td>159314</td>
                       <td>111723</td>
                       <td>2619</td> 
                       <td>69662</td>
                       <td>515799</td>
                       <td>14154</td>
                       <td>183685</td>
                       <td>1228815</td>
                       <td>287000</td></tr>
      <tr><td>Wednesday,11-Mar-2015</td><td>73511</td>
                       <td>2117</td>
                       <td>44628</td>
                       <td>361208</td>
                       <td>8545</td> 
                       <td>127157</td>
                       <td>64845</td>
                       <td>1807</td> 
                       <td>41463</td>
                       <td>424189</td>
                       <td>11722</td>
                       <td>150324</td>
                       <td>947944</td>
                       <td>225003</td></tr>
      <tr><td>Thursday,12-Mar-2015</td><td>59424</td>
                       <td>2026</td>
                       <td>36992</td>
                       <td>402145</td>
                       <td>9514</td> 
                       <td>143618</td>
                       <td>50911</td>
                       <td>1617</td> 
                       <td>33578</td>
                       <td>462050</td>
                       <td>12751</td>
                       <td>166459</td>
                       <td>1000438</td>
                       <td>240144</td></tr>
      <tr><td>Friday,13-Mar-2015</td><td>95166</td>
                       <td>2478</td>
                       <td>57384</td>
                       <td>419588</td>
                       <td>10809</td> 
                       <td>153048</td>
                       <td>90812</td>
                       <td>2238</td> 
                       <td>57152</td>
                       <td>470582</td>
                       <td>14141</td>
                       <td>174878</td>
                       <td>1105814</td>
                       <td>267807</td></tr>
      <tr><td>Saturday,14-Mar-2015</td><td>39638</td>
                       <td>1203</td>
                       <td>24059</td>
                       <td>252132</td>
                       <td>6037</td> 
                       <td>89461</td>
                       <td>36509</td>
                       <td>1169</td> 
                       <td>23303</td>
                       <td>279769</td>
                       <td>8196</td>
                       <td>101071</td>
                       <td>624653</td>
                       <td>149715</td></tr>
      <tr><td>Sunday,15-Mar-2015</td><td>21280</td>
                       <td>548</td>
                       <td>11721</td>
                       <td>227689</td>
                       <td>5055</td> 
                       <td>76480</td>
                       <td>19621</td>
                       <td>486</td> 
                       <td>11375</td>
                       <td>248645</td>
                       <td>6676</td>
                       <td>84158</td>
                       <td>530000</td>
                       <td>116953</td></tr>
      <tr><td>Monday,16-Mar-2015</td><td>50865</td>
                       <td>1365</td>
                       <td>31555</td>
                       <td>421371</td>
                       <td>10232</td> 
                       <td>147004</td>
                       <td>51005</td>
                       <td>1267</td> 
                       <td>33033</td>
                       <td>477280</td>
                       <td>13448</td>
                       <td>167496</td>
                       <td>1026833</td>
                       <td>238402</td></tr>
      <tr><td>Tuesday,17-Mar-2015</td><td>136207</td>
                       <td>3579</td>
                       <td>83727</td>
                       <td>495989</td>
                       <td>12313</td> 
                       <td>181775</td>
                       <td>139840</td>
                       <td>3736</td> 
                       <td>88135</td>
                       <td>577285</td>
                       <td>16103</td>
                       <td>210158</td>
                       <td>1385052</td>
                       <td>328632</td></tr>
      <tr><td>Wednesday,18-Mar-2015</td><td>--</td>
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
  <tr><th colspan="4">Apply Online from 01-03-2015 to 18-03-2015</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
     <tr><td>Sunday,01-Mar-2015</td><td>162</td>
                        <td>3</td>
                        <td>2</td></tr>
     <tr><td>Monday,02-Mar-2015</td><td>210</td>
                        <td>6</td>
                        <td>4</td></tr>
     <tr><td>Tuesday,03-Mar-2015</td><td>119</td>
                        <td>6</td>
                        <td>5</td></tr>
     <tr><td>Wednesday,04-Mar-2015</td><td>81</td>
                        <td>8</td>
                        <td>2</td></tr>
     <tr><td>Thursday,05-Mar-2015</td><td>62</td>
                        <td>2</td>
                        <td>--</td></tr>
     <tr><td>Friday,06-Mar-2015</td><td>51</td>
                        <td>4</td>
                        <td>3</td></tr>
     <tr><td>Saturday,07-Mar-2015</td><td>43</td>
                        <td>10</td>
                        <td>2</td></tr>
     <tr><td>Sunday,08-Mar-2015</td><td>33</td>
                        <td>1</td>
                        <td>1</td></tr>
     <tr><td>Monday,09-Mar-2015</td><td>86</td>
                        <td>6</td>
                        <td>2</td></tr>
     <tr><td>Tuesday,10-Mar-2015</td><td>96</td>
                        <td>6</td>
                        <td>2</td></tr>
     <tr><td>Wednesday,11-Mar-2015</td><td>96</td>
                        <td>5</td>
                        <td>3</td></tr>
     <tr><td>Thursday,12-Mar-2015</td><td>123</td>
                        <td>3</td>
                        <td>4</td></tr>
     <tr><td>Friday,13-Mar-2015</td><td>69</td>
                        <td>3</td>
                        <td>9</td></tr>
     <tr><td>Saturday,14-Mar-2015</td><td>64</td>
                        <td>2</td>
                        <td>3</td></tr>
     <tr><td>Sunday,15-Mar-2015</td><td>31</td>
                        <td>2</td>
                        <td>1</td></tr>
     <tr><td>Monday,16-Mar-2015</td><td>82</td>
                        <td>3</td>
                        <td>2</td></tr>
     <tr><td>Tuesday,17-Mar-2015</td><td>56</td>
                        <td>3</td>
                        <td>4</td></tr>
     <tr><td>Wednesday,18-Mar-2015</td><td>--</td>
                        <td>--</td>
                        <td>--</td></tr>
  </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="Array">
<input type="hidden" name="startday" value="01">
<input type="hidden" name="endday" value="18">
<input type="hidden" name="startmonth" value="03">
<input type="hidden" name="startyear" value="2015">
<input type="hidden" name="endmonth" value="03">
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
    <tr><td>Sunday,01-Mar-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>122803</td></tr>
    <tr><td>Monday,02-Mar-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>202582</td></tr>
    <tr><td>Tuesday,03-Mar-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>267179</td></tr>
    <tr><td>Wednesday,04-Mar-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>274354</td></tr>
    <tr><td>Thursday,05-Mar-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>206583</td></tr>
    <tr><td>Friday,06-Mar-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>164382</td></tr>
    <tr><td>Saturday,07-Mar-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>156507</td></tr>
    <tr><td>Sunday,08-Mar-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>111264</td></tr>
    <tr><td>Monday,09-Mar-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>242913</td></tr>
    <tr><td>Tuesday,10-Mar-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>287000</td></tr>
    <tr><td>Wednesday,11-Mar-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>225003</td></tr>
    <tr><td>Thursday,12-Mar-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>240144</td></tr>
    <tr><td>Friday,13-Mar-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>267807</td></tr>
    <tr><td>Saturday,14-Mar-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>149715</td></tr>
    <tr><td>Sunday,15-Mar-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>116953</td></tr>
    <tr><td>Monday,16-Mar-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>238402</td></tr>
    <tr><td>Tuesday,17-Mar-2015</td><td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>--</td>
                       <td>328632</td></tr>
    <tr><td>Wednesday,18-Mar-2015</td><td>--</td>
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