<?php /* Smarty version 2.6.19, created on 2012-01-24 08:28:43
         compiled from /usr/local/apache/htdocs/smarty/templates/dashboard/dashboard_applymis.tpl */ ?>
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
                alert("Cannot process data for a future date!\n Please enter a date less than today's date.");
            else if (dtfuture == 2)
                alert("Cannot process data for today's date!\n Please enter a date less than today's date.");
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
        <select name="startday" value="<?php echo $this->_tpl_vars['startday']; ?>
">
		          <option value="01" <?php if ($this->_tpl_vars['startday'] == 1): ?> selected <?php endif; ?>>1</option>
			<option value="02" <?php if ($this->_tpl_vars['startday'] == 2): ?> selected <?php endif; ?>>2</option>
			<option value="03" <?php if ($this->_tpl_vars['startday'] == 3): ?> selected <?php endif; ?>>3</option>
			<option value="04" <?php if ($this->_tpl_vars['startday'] == 4): ?> selected <?php endif; ?>>4</option>
			<option value="05" <?php if ($this->_tpl_vars['startday'] == 5): ?> selected <?php endif; ?>>5</option>
			<option value="06" <?php if ($this->_tpl_vars['startday'] == 6): ?> selected <?php endif; ?>>6</option>
			<option value="07" <?php if ($this->_tpl_vars['startday'] == 7): ?> selected <?php endif; ?>>7</option>
			<option value="08" <?php if ($this->_tpl_vars['startday'] == 8): ?> selected <?php endif; ?>>8</option>
			<option value="09" <?php if ($this->_tpl_vars['startday'] == 9): ?> selected <?php endif; ?>>9</option>
			<option value="10" <?php if ($this->_tpl_vars['startday'] == 10): ?> selected <?php endif; ?>>10</option>
			<option value="11" <?php if ($this->_tpl_vars['startday'] == 11): ?> selected <?php endif; ?>>11</option>
			<option value="12" <?php if ($this->_tpl_vars['startday'] == 12): ?> selected <?php endif; ?>>12</option>
			<option value="13" <?php if ($this->_tpl_vars['startday'] == 13): ?> selected <?php endif; ?>>13</option>
			<option value="14" <?php if ($this->_tpl_vars['startday'] == 14): ?> selected <?php endif; ?>>14</option>
			<option value="15" <?php if ($this->_tpl_vars['startday'] == 15): ?> selected <?php endif; ?>>15</option>
			<option value="16" <?php if ($this->_tpl_vars['startday'] == 16): ?> selected <?php endif; ?>>16</option>
			<option value="17" <?php if ($this->_tpl_vars['startday'] == 17): ?> selected <?php endif; ?>>17</option>
			<option value="18" <?php if ($this->_tpl_vars['startday'] == 18): ?> selected <?php endif; ?>>18</option>
			<option value="19" <?php if ($this->_tpl_vars['startday'] == 19): ?> selected <?php endif; ?>>19</option>
			<option value="20" <?php if ($this->_tpl_vars['startday'] == 20): ?> selected <?php endif; ?>>20</option>
			<option value="21" <?php if ($this->_tpl_vars['startday'] == 21): ?> selected <?php endif; ?>>21</option>
			<option value="22" <?php if ($this->_tpl_vars['startday'] == 22): ?> selected <?php endif; ?>>22</option>
			<option value="23" <?php if ($this->_tpl_vars['startday'] == 23): ?> selected <?php endif; ?>>23</option>
			<option value="24" <?php if ($this->_tpl_vars['startday'] == 24): ?> selected <?php endif; ?>>24</option>
			<option value="25" <?php if ($this->_tpl_vars['startday'] == 25): ?> selected <?php endif; ?>>25</option>
			<option value="26" <?php if ($this->_tpl_vars['startday'] == 26): ?> selected <?php endif; ?>>26</option>
			<option value="27" <?php if ($this->_tpl_vars['startday'] == 27): ?> selected <?php endif; ?>>27</option>
			<option value="28" <?php if ($this->_tpl_vars['startday'] == 28): ?> selected <?php endif; ?>>28</option>
			<option value="29" <?php if ($this->_tpl_vars['startday'] == 29): ?> selected <?php endif; ?>>29</option>
			<option value="30" <?php if ($this->_tpl_vars['startday'] == 30): ?> selected <?php endif; ?>>30</option>
			<option value="31" <?php if ($this->_tpl_vars['startday'] == 31): ?> selected <?php endif; ?>>31</option>
        </select>
        </font></b></TD>
      <TD width="57"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="startmonth" value="<?php echo $this->_tpl_vars['startmonth']; ?>
">
           <option value="01" <?php if ($this->_tpl_vars['startmonth'] == '01'): ?> selected <?php endif; ?>>JAN</option>
	   <option value="02" <?php if ($this->_tpl_vars['startmonth'] == '02'): ?> selected <?php endif; ?>>FEB</option>
	   <option value="03" <?php if ($this->_tpl_vars['startmonth'] == '03'): ?> selected <?php endif; ?>>MAR</option>
	   <option value="04" <?php if ($this->_tpl_vars['startmonth'] == '04'): ?> selected <?php endif; ?>>APR</option>
	   <option value="05" <?php if ($this->_tpl_vars['startmonth'] == '05'): ?> selected <?php endif; ?>>MAY</option>
	   <option value="06" <?php if ($this->_tpl_vars['startmonth'] == '06'): ?> selected <?php endif; ?>>JUN</option>
	   <option value="07" <?php if ($this->_tpl_vars['startmonth'] == '07'): ?> selected <?php endif; ?>>JUL</option>
	   <option value="08" <?php if ($this->_tpl_vars['startmonth'] == '08'): ?> selected <?php endif; ?>>AUG</option>
	   <option value="09" <?php if ($this->_tpl_vars['startmonth'] == '09'): ?> selected <?php endif; ?>>SEP</option>
	   <option value="10" <?php if ($this->_tpl_vars['startmonth'] == '10'): ?> selected <?php endif; ?>>OCT</option>
	   <option value="11" <?php if ($this->_tpl_vars['startmonth'] == '11'): ?> selected <?php endif; ?>>NOV</option>
	   <option value="12" <?php if ($this->_tpl_vars['startmonth'] == '12'): ?> selected <?php endif; ?>>DEC</option>
        </select>
        </font></b></TD>
      <TD width="57"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="startyear" value="<?php echo $this->_tpl_vars['startyear']; ?>
">
          <option value="2004" <?php if ($this->_tpl_vars['startyear'] == 2004): ?> selected <?php endif; ?>>2004</option>
		<option value="2005" <?php if ($this->_tpl_vars['startyear'] == 2005): ?> selected <?php endif; ?>>2005</option>
                <option value="2006" <?php if ($this->_tpl_vars['startyear'] == 2006): ?> selected <?php endif; ?>>2006</option>
		<option value="2007" <?php if ($this->_tpl_vars['startyear'] == 2007): ?> selected <?php endif; ?>>2007</option>
		<option value="2008" <?php if ($this->_tpl_vars['startyear'] == 2008): ?> selected <?php endif; ?>>2008</option>
		<option value="2009" <?php if ($this->_tpl_vars['startyear'] == 2009): ?> selected <?php endif; ?>>2009</option>
		<option value="2010" <?php if ($this->_tpl_vars['startyear'] == 2010): ?> selected <?php endif; ?>>2010</option>
		<option value="2011" <?php if ($this->_tpl_vars['startyear'] == 2011): ?> selected <?php endif; ?>>2011</option>
		<option value="2012" <?php if ($this->_tpl_vars['startyear'] == 2012): ?> selected <?php endif; ?>>2012</option>
		<option value="2013" <?php if ($this->_tpl_vars['startyear'] == 2013): ?> selected <?php endif; ?>>2013</option>
        </select>
        </font></b></TD>
      <TD width="46"> 
        <div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">To</font></b></div>
      </TD>
      <TD width="46"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endday" value="<?php echo $this->_tpl_vars['endday']; ?>
">
		          <option value="01" <?php if ($this->_tpl_vars['endday'] == 1): ?> selected <?php endif; ?>>1</option>
			<option value="02" <?php if ($this->_tpl_vars['endday'] == 2): ?> selected <?php endif; ?>>2</option>
			<option value="03" <?php if ($this->_tpl_vars['endday'] == 3): ?> selected <?php endif; ?>>3</option>
			<option value="04" <?php if ($this->_tpl_vars['endday'] == 4): ?> selected <?php endif; ?>>4</option>
			<option value="05" <?php if ($this->_tpl_vars['endday'] == 5): ?> selected <?php endif; ?>>5</option>
			<option value="06" <?php if ($this->_tpl_vars['endday'] == 6): ?> selected <?php endif; ?>>6</option>
			<option value="07" <?php if ($this->_tpl_vars['endday'] == 7): ?> selected <?php endif; ?>>7</option>
			<option value="08" <?php if ($this->_tpl_vars['endday'] == 8): ?> selected <?php endif; ?>>8</option>
			<option value="09" <?php if ($this->_tpl_vars['endday'] == 9): ?> selected <?php endif; ?>>9</option>
			<option value="10" <?php if ($this->_tpl_vars['endday'] == 10): ?> selected <?php endif; ?>>10</option>
			<option value="11" <?php if ($this->_tpl_vars['endday'] == 11): ?> selected <?php endif; ?>>11</option>
			<option value="12" <?php if ($this->_tpl_vars['endday'] == 12): ?> selected <?php endif; ?>>12</option>
			<option value="13" <?php if ($this->_tpl_vars['endday'] == 13): ?> selected <?php endif; ?>>13</option>
			<option value="14" <?php if ($this->_tpl_vars['endday'] == 14): ?> selected <?php endif; ?>>14</option>
			<option value="15" <?php if ($this->_tpl_vars['endday'] == 15): ?> selected <?php endif; ?>>15</option>
			<option value="16" <?php if ($this->_tpl_vars['endday'] == 16): ?> selected <?php endif; ?>>16</option>
			<option value="17" <?php if ($this->_tpl_vars['endday'] == 17): ?> selected <?php endif; ?>>17</option>
			<option value="18" <?php if ($this->_tpl_vars['endday'] == 18): ?> selected <?php endif; ?>>18</option>
			<option value="19" <?php if ($this->_tpl_vars['endday'] == 19): ?> selected <?php endif; ?>>19</option>
			<option value="20" <?php if ($this->_tpl_vars['endday'] == 20): ?> selected <?php endif; ?>>20</option>
			<option value="21" <?php if ($this->_tpl_vars['endday'] == 21): ?> selected <?php endif; ?>>21</option>
			<option value="22" <?php if ($this->_tpl_vars['endday'] == 22): ?> selected <?php endif; ?>>22</option>
			<option value="23" <?php if ($this->_tpl_vars['endday'] == 23): ?> selected <?php endif; ?>>23</option>
			<option value="24" <?php if ($this->_tpl_vars['endday'] == 24): ?> selected <?php endif; ?>>24</option>
			<option value="25" <?php if ($this->_tpl_vars['endday'] == 25): ?> selected <?php endif; ?>>25</option>
			<option value="26" <?php if ($this->_tpl_vars['endday'] == 26): ?> selected <?php endif; ?>>26</option>
			<option value="27" <?php if ($this->_tpl_vars['endday'] == 27): ?> selected <?php endif; ?>>27</option>
			<option value="28" <?php if ($this->_tpl_vars['endday'] == 28): ?> selected <?php endif; ?>>28</option>
			<option value="29" <?php if ($this->_tpl_vars['endday'] == 29): ?> selected <?php endif; ?>>29</option>
			<option value="30" <?php if ($this->_tpl_vars['endday'] == 30): ?> selected <?php endif; ?>>30</option>
			<option value="31" <?php if ($this->_tpl_vars['endday'] == 31): ?> selected <?php endif; ?>>31</option>
        </select>
        </font></b></TD>
      <TD width="57"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endmonth" value="<?php echo $this->_tpl_vars['endmonth']; ?>
">
           <option value="01" <?php if ($this->_tpl_vars['endmonth'] == '01'): ?> selected <?php endif; ?>>JAN</option>
	   <option value="02" <?php if ($this->_tpl_vars['endmonth'] == '02'): ?> selected <?php endif; ?>>FEB</option>
	   <option value="03" <?php if ($this->_tpl_vars['endmonth'] == '03'): ?> selected <?php endif; ?>>MAR</option>
	   <option value="04" <?php if ($this->_tpl_vars['endmonth'] == '04'): ?> selected <?php endif; ?>>APR</option>
	   <option value="05" <?php if ($this->_tpl_vars['endmonth'] == '05'): ?> selected <?php endif; ?>>MAY</option>
	   <option value="06" <?php if ($this->_tpl_vars['endmonth'] == '06'): ?> selected <?php endif; ?>>JUN</option>
	   <option value="07" <?php if ($this->_tpl_vars['endmonth'] == '07'): ?> selected <?php endif; ?>>JUL</option>
	   <option value="08" <?php if ($this->_tpl_vars['endmonth'] == '08'): ?> selected <?php endif; ?>>AUG</option>
	   <option value="09" <?php if ($this->_tpl_vars['endmonth'] == '09'): ?> selected <?php endif; ?>>SEP</option>
	   <option value="10" <?php if ($this->_tpl_vars['endmonth'] == '10'): ?> selected <?php endif; ?>>OCT</option>
	   <option value="11" <?php if ($this->_tpl_vars['endmonth'] == '11'): ?> selected <?php endif; ?>>NOV</option>
	   <option value="12" <?php if ($this->_tpl_vars['endmonth'] == '12'): ?> selected <?php endif; ?>>DEC</option>
        </select>
        </font></b></TD>
      <TD width="57"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endyear" value="<?php echo $this->_tpl_vars['endyear']; ?>
">
          <option value="2004" <?php if ($this->_tpl_vars['endyear'] == 2004): ?> selected <?php endif; ?>>2004</option>
		<option value="2005" <?php if ($this->_tpl_vars['endyear'] == 2005): ?> selected <?php endif; ?>>2005</option>
                <option value="2006" <?php if ($this->_tpl_vars['endyear'] == 2006): ?> selected <?php endif; ?>>2006</option>
		<option value="2007" <?php if ($this->_tpl_vars['endyear'] == 2007): ?> selected <?php endif; ?>>2007</option>
		<option value="2008" <?php if ($this->_tpl_vars['endyear'] == 2008): ?> selected <?php endif; ?>>2008</option>
		<option value="2009" <?php if ($this->_tpl_vars['endyear'] == 2009): ?> selected <?php endif; ?>>2009</option>
		<option value="2010" <?php if ($this->_tpl_vars['endyear'] == 2010): ?> selected <?php endif; ?>>2010</option>
		<option value="2011" <?php if ($this->_tpl_vars['endyear'] == 2011): ?> selected <?php endif; ?>>2011</option>
		<option value="2012" <?php if ($this->_tpl_vars['endyear'] == 2012): ?> selected <?php endif; ?>>2012</option>
		<option value="2013" <?php if ($this->_tpl_vars['endyear'] == 2013): ?> selected <?php endif; ?>>2013</option>
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
 <tr><td colspan="15" align="center"><?php echo $this->_tpl_vars['title_heirarchy']; ?>
</td></tr>
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
 <?php $_from = $this->_tpl_vars['apply']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['date'] => $this->_tpl_vars['columnheading']):
?>
   <tr><td><?php echo $this->_tpl_vars['date']; ?>
</td><td><?php echo $this->_tpl_vars['columnheading']['normal_reg_sap']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['normal_unreg_sap']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['normal_unique_sap']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['normal_reg_nonsap']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['normal_unreg_nonsap']; ?>
</td> 
                       <td><?php echo $this->_tpl_vars['columnheading']['normal_unique_nonsap']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['eapps_reg_sap']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['eapps_unreg_sap']; ?>
</td> 
                       <td><?php echo $this->_tpl_vars['columnheading']['eapps_unique_sap']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['eapps_reg_nonsap']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['eapps_unreg_nonsap']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['eapps_unique_nonsap']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['total_applies']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['total_unique_user']; ?>
</td></tr>
   <?php endforeach; endif; unset($_from); ?>
</table>

<!-- Apply Heirarchy (ends here) -->
<br>
<br>
<br>
<!-- Apply thru VSJ,VAJ and Cluster -->
<table border="1" align="center">
  <caption>Apply through VSJ,VJA and Cluster</caption>
  <tr><th colspan="4"><?php echo $this->_tpl_vars['title_viewsimilar']; ?>
</th></tr>
  <tr><td>day</td><td>ViewSimilar</td><td>Company Search</td><td>Cluster</td></tr>
 <?php $_from = $this->_tpl_vars['apply']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['date'] => $this->_tpl_vars['columnheading']):
?>
    <tr><td><?php echo $this->_tpl_vars['date']; ?>
</td><td><?php echo $this->_tpl_vars['columnheading']['viewsimilar']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['columnheading']['company']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['columnheading']['cluster']; ?>
</td></tr>
 <?php endforeach; endif; unset($_from); ?>
 </table>
<!-- Apply thru VSJ,VAJ and Cluster (ends here)-->
<br>
<br>
<br>
<input type="hidden" name="apply" value="<?php echo $this->_tpl_vars['apply']; ?>
">
<input type="hidden" name="startday" value="<?php echo $this->_tpl_vars['startday']; ?>
">
<input type="hidden" name="endday" value="<?php echo $this->_tpl_vars['endday']; ?>
">
<input type="hidden" name="startmonth" value="<?php echo $this->_tpl_vars['startmonth']; ?>
">
<input type="hidden" name="startyear" value="<?php echo $this->_tpl_vars['startyear']; ?>
">
<input type="hidden" name="endmonth" value="<?php echo $this->_tpl_vars['endmonth']; ?>
">
<input type="hidden" name="endyear" value="<?php echo $this->_tpl_vars['endyear']; ?>
">
<ol>
<li><a href="http://<?php echo $this->_tpl_vars['fileforapply_dashboard']; ?>
/dashboard_apply_summary.php"  target="_blank">Apply Summary Dashboard</a></li>
<li><a href="http://<?php echo $this->_tpl_vars['fileforapply_dashboard']; ?>
/dashboard_apply_realtime.php?today=1"  target="_blank">Real Time Apply MIS(for last 24 hour)</a></li>
<li><a href="<?php echo $this->_tpl_vars['fileforapply_dashboard1']; ?>
/applyMIS.php"  target="_blank">Apply Relevance Dashboard</a></li>
<li><a href="<?php echo $this->_tpl_vars['fileforapply_dashboard1']; ?>
/unregApplySummary.php"  target="_blank">Unregistered Apply MIS</a></li>
<li><a href=""  target="_blank">SAP MIS</a></li>
<li><a href="<?php echo $this->_tpl_vars['fileforapply_dashboard1']; ?>
/reApplyMIS.php"  target="_blank">Reapply Dashboard</a></li>
<li><a href=""  target="_blank">Apply Data :Break up by Company/Consultant/Spammer</a></li>
<li><a href="http://<?php echo $this->_tpl_vars['fileforapply_dashboard']; ?>
/dashboard_apply_topapplies.php"  target="_blank">Top Applies MIS</a></li>
<ol>

<!-- Apply summary dashboard 
<table border="1">
 <caption>Apply Summary Dashboard</caption>
 <tr><th colspan="9">Apply Summary for last 7 day</th><tr>
 <tr><td align="center">Date</td><td>Single Applies</td><td>Multiple Applies</td><td>Total</td><td>Unique Users</td><td>Normal Applies</td>
<td>Eapps Applies</td><td>Total</td><td>Unique User</td></tr>
 <?php $_from = $this->_tpl_vars['apply']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['date'] => $this->_tpl_vars['columnheading']):
?>
   <tr><td><?php echo $this->_tpl_vars['date']; ?>
</td><td><?php echo $this->_tpl_vars['columnheading']['single']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['multiple']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['total_single_multiple']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['total_unique_single_multiple']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['normal']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['eapps']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['total_normal_eapps']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['total_unique_user']; ?>
</td></tr>
 <?php endforeach; endif; unset($_from); ?>
</table>
-->
<!-- Apply summary dashboard (ends here)-->
<br />



<!-- code is commented by vishal saxena on 30 jan 2008(this table will be merged with Real Time apply mis table)
<table width="85%" border="1" align="center" bordercolor="#CCCCFF">
  <tr> 
    <td width="42%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Server 
      time: </font></b></td>
    <td width="58%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['servertime']; ?>
</font></td>
  </tr>
  <tr> 
    <td colspan="2"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b>Note: 
      Last 24 hrs statistics(acc.to server time)</b></font><b></b></td>
  </tr>
  <tr> 
    <td width="42%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total 
      Apply :</font></b></td>
    <td width="58%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['total']; ?>
</font></td>
  </tr>
  <tr> 
    <td width="42%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Eapps 
      :</font></b></td>
    <td width="58%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['eappstotal']; ?>
</font></td>
  </tr>
  <tr> 
    <td width="42%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Non- 
      Eapps :</font></b></td>
    <td width="58%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['noneappstotal']; ?>
</font></td>
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
<?php echo $this->_tpl_vars['str']; ?>

<br>
<!--code is commented by vishal saxena on 30 Jan 2008
<table align = "center" border =0><tr><td>
<iframe name="frmSAP" frameborder="0" height="250px" scrolling="auto" src="http://w0.naukri.com/SAP/mis<?php echo $this->_tpl_vars['dt']; ?>
.html"  align="center"></iframe>
</td></tr></table>
code is commented by vishal saxena(ends here)
-->
</body>
</html>