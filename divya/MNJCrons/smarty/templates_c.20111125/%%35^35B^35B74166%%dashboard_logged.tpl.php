<?php /* Smarty version 2.6.19, created on 2009-04-23 15:58:09
         compiled from /usr/local/apache/htdocs//smarty/templates/dashboard/dashboard_logged.tpl */ ?>
<html>
<head>
<title> Resume Dashboard for <?php echo $this->_tpl_vars['DATEMIS']; ?>
 </title>
<script language="JavaScript" type="text/JavaScript">
function openwindow()
{
	var doc=document.formmain;
	if(doc.searchcriteria.options[doc.searchcriteria.selectedIndex].value=="")
		alert("please enter search criteria properly");
	else if(doc.durcriteria.options[doc.durcriteria.selectedIndex].value=="")
		alert("please enter duration criteria properly");
	else
	{
		var durcriteria=doc.durcriteria.options[doc.durcriteria.selectedIndex].value;
		var searchcriteria=doc.searchcriteria.options[doc.searchcriteria.selectedIndex].value;
		var startdate=doc.startyear.value+"-"+doc.startmonth.value+"-"+doc.startday.value;
		var enddate=doc.endyear.value+"-"+doc.endmonth.value+"-"+doc.endday.value;
		var loc;
	if(searchcriteria=="alliance")
		{
			 loc="dashboard_alliancemis.php?startdate="+startdate+"&enddate="+enddate+"&searchcriteria="+searchcriteria+"&durcriteria="+durcriteria;
		}
		else if(searchcriteria=="easy")
		{
loc="dashboard_easyregistermis.php?startdate="+startdate+"&enddate="+enddate+"&durcriteria="+durcriteria;
		}
		else if(searchcriteria=="privacy")
		{
			if(durcriteria=="week" || durcriteria=="month")
			{
				alert("please select datewise");
				return 0;

			}
			else
loc="dashboard_privacymis.php?startdate="+startdate+"&enddate="+enddate;
		}
		else
		{
		var loc="dashboard_resumemis.php?go=go&startdate="+startdate+"&enddate="+enddate+"&searchcriteria="+searchcriteria+"&durcriteria="+durcriteria;
		}
		window.open(loc);

	}

}
function openresumewindow()
{
	var doc=document.formmain;
	var startresumedate=doc.startresumeyear.value+"-"+doc.startresumemonth.value+"-"+doc.startresumeday.value;
	var loc="newdashboard_resumemis.php?datefind="+startresumedate;

	window.open(loc);

}
</script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php if ($this->_tpl_vars['datefind'] == 'invalid'): ?>
<table width="85%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#66CCFF">
  <tr>
    <td width="552">
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="5"><b><font color="#66CCFF">DASHBOARD</font>
        :: RESUME </b></font></div>
    </td>
    <td width="225">
      <div align="right"><img src="http://w10.naukri.com/gifs/jobs-india.gif"></div>
    </td>
  </tr>
</table>
<BR />
<form name="formmain"  >
   <INPUT type="hidden" name="scripttocall" value="<?php echo $this->_tpl_vars['scripttocall']; ?>
">
  <TABLE align="center" border="1" bordercolor="#CCCCFF" width="85%" >
    <TR>
      <TD>Enter Duration</TD>
      <TD>
        <select name="startday">
          <option value="01" <?php if ($this->_tpl_vars['startday'] == '01'): ?> selected <?php endif; ?>>1</option>
          <option value="02" <?php if ($this->_tpl_vars['startday'] == '02'): ?> selected <?php endif; ?>>2</option>
          <option value="03" <?php if ($this->_tpl_vars['startday'] == '03'): ?> selected <?php endif; ?>>3</option>
          <option value="04" <?php if ($this->_tpl_vars['startday'] == '04'): ?> selected <?php endif; ?>>4</option>
          <option value="05" <?php if ($this->_tpl_vars['startday'] == '05'): ?> selected <?php endif; ?>>5</option>
          <option value="06" <?php if ($this->_tpl_vars['startday'] == '06'): ?> selected <?php endif; ?>>6</option>
          <option value="07" <?php if ($this->_tpl_vars['startday'] == '07'): ?> selected <?php endif; ?>>7</option>
          <option value="08" <?php if ($this->_tpl_vars['startday'] == '08'): ?> selected <?php endif; ?>>8</option>
          <option value="09" <?php if ($this->_tpl_vars['startday'] == '09'): ?> selected <?php endif; ?>>9</option>
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
        </select>
        <select name="startmonth">
          <option value="01" <?php if ($this->_tpl_vars['startmonth'] == '01'): ?> selected <?php endif; ?>>05</option>
          <option value="02" <?php if ($this->_tpl_vars['startmonth'] == '02'): ?> selected <?php endif; ?>>10</option>
          <option value="03" <?php if ($this->_tpl_vars['startmonth'] == '03'): ?> selected <?php endif; ?>>15</option>
          <option value="04" <?php if ($this->_tpl_vars['startmonth'] == '04'): ?> selected <?php endif; ?>>20</option>
          <option value="05" <?php if ($this->_tpl_vars['startmonth'] == '05'): ?> selected <?php endif; ?>>25</option>
          <option value="06" <?php if ($this->_tpl_vars['startmonth'] == '06'): ?> selected <?php endif; ?>>30</option>
          <option value="07" <?php if ($this->_tpl_vars['startmonth'] == '07'): ?> selected <?php endif; ?>>35</option>
          <option value="08" <?php if ($this->_tpl_vars['startmonth'] == '08'): ?> selected <?php endif; ?>>40</option>
          <option value="09" <?php if ($this->_tpl_vars['startmonth'] == '09'): ?> selected <?php endif; ?>>45</option>
          <option value="10" <?php if ($this->_tpl_vars['startmonth'] == '10'): ?> selected <?php endif; ?>>50</option>
          <option value="11" <?php if ($this->_tpl_vars['startmonth'] == '11'): ?> selected <?php endif; ?>>55</option>
          <option value="12" <?php if ($this->_tpl_vars['startmonth'] == '12'): ?> selected <?php endif; ?>>60</option>

        </select>
        &nbsp;&nbsp;TO&nbsp;
        <select name="endday">
          <option value="01" <?php if ($this->_tpl_vars['startday'] == '01'): ?> selected <?php endif; ?>>1</option>
          <option value="02" <?php if ($this->_tpl_vars['startday'] == '02'): ?> selected <?php endif; ?>>2</option>
          <option value="03" <?php if ($this->_tpl_vars['startday'] == '03'): ?> selected <?php endif; ?>>3</option>
          <option value="04" <?php if ($this->_tpl_vars['startday'] == '04'): ?> selected <?php endif; ?>>4</option>
          <option value="05" <?php if ($this->_tpl_vars['startday'] == '05'): ?> selected <?php endif; ?>>5</option>
          <option value="06" <?php if ($this->_tpl_vars['startday'] == '06'): ?> selected <?php endif; ?>>6</option>
          <option value="07" <?php if ($this->_tpl_vars['startday'] == '07'): ?> selected <?php endif; ?>>7</option>
          <option value="08" <?php if ($this->_tpl_vars['startday'] == '08'): ?> selected <?php endif; ?>>8</option>
          <option value="09" <?php if ($this->_tpl_vars['startday'] == '09'): ?> selected <?php endif; ?>>9</option>
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
        </select>
        <select name="endmonth">
          <option value="01" <?php if ($this->_tpl_vars['startmonth'] == '01'): ?> selected <?php endif; ?>>05</option>
          <option value="02" <?php if ($this->_tpl_vars['startmonth'] == '02'): ?> selected <?php endif; ?>>10</option>
          <option value="03" <?php if ($this->_tpl_vars['startmonth'] == '03'): ?> selected <?php endif; ?>>15</option>
          <option value="04" <?php if ($this->_tpl_vars['startmonth'] == '04'): ?> selected <?php endif; ?>>20</option>
          <option value="05" <?php if ($this->_tpl_vars['startmonth'] == '05'): ?> selected <?php endif; ?>>25</option>
          <option value="06" <?php if ($this->_tpl_vars['startmonth'] == '06'): ?> selected <?php endif; ?>>30</option>
          <option value="07" <?php if ($this->_tpl_vars['startmonth'] == '07'): ?> selected <?php endif; ?>>35</option>
          <option value="08" <?php if ($this->_tpl_vars['startmonth'] == '08'): ?> selected <?php endif; ?>>40</option>
          <option value="09" <?php if ($this->_tpl_vars['startmonth'] == '09'): ?> selected <?php endif; ?>>45</option>
          <option value="10" <?php if ($this->_tpl_vars['startmonth'] == '10'): ?> selected <?php endif; ?>>50</option>
          <option value="11" <?php if ($this->_tpl_vars['startmonth'] == '11'): ?> selected <?php endif; ?>>55</option>
          <option value="12" <?php if ($this->_tpl_vars['startmonth'] == '12'): ?> selected <?php endif; ?>>60</option>
        </select>
      </TD>
    </TR>
    <TR>
    </TR>
    <TR>
      <TD>
        <input type="button" name="go" value="go" onClick="openwindow();">
      </TD>
      <TD>&nbsp;</TD>
    </TR>
	<TR>
      <TD>
        <input type="button" name="go" value="View dashboard datewise" onClick="openresumewindow();">
      </TD>
      <TD>
       </TD>
    </TR>
  </table>
</form>
<?php endif; ?>
<br />
<table width="85%" border="1" align="center" bordercolor="#CCCCFF">
<?php if ($this->_tpl_vars['datefind'] != 'invalid'): ?>
  <tr>
 <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Find Date : </font></b></td>
  <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<b><?php echo $this->_tpl_vars['datefind']; ?>
</b></font></td>
 </tr>
 <tr>
 <?php else: ?>
  <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Server
      time : </font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['servertime']; ?>
</font></td>
	</tr>
    <!--td colspan="2"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b>Note:
      Today's statistics(acc.to server time)</b></font><b></b></td-->
<?php endif; ?>


  <tr>
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">MIS Update Time</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['slavestatus']; ?>
</font></td>
  </tr>
  <tr>
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Users who filled first page only(Through Resman): </font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['count1']; ?>
</font></td>
  </tr>
  <tr>
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Out of these TSNOTIFY is set f:  </font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['countf']; ?>
</font></td>
  </tr>
  <tr>
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">CVs through duplicate entries:  </font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['duplicatecount']; ?>
</font></td>
  </tr>
  <tr>
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">CVs through Multiple Profile: </font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['multi']; ?>
</font></td>
  </tr>
<!--  <tr>
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Cv's through EasyRegister(Validated/total):</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['easyregistervalid']; ?>
/<?php echo $this->_tpl_vars['easyregistertotal']; ?>
</font></td>
  </tr>-->
  <tr>
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">CVs through Resume Billing :</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['billingresume']; ?>
</font></td>
  </tr>
  <tr>
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">New CVs:<br />(Excluding user's filling first page only, multiple profile total count)(Excluding CVs from billing) </font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['totalnewcv']; ?>
</font></td>
  </tr>
   <tr>
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total Modified CVs: </font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['modifiedcv']; ?>
</font></td>
  </tr>
  <tr>
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total CVs for Resdex<br />New CVs + Modified CVs tsnotify f+ CVs from billing</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['resdextotal']; ?>
</font></td>
  </tr>
  <tr>
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">New CVs for Resdex(Out of total above)<br /> New CVs + tsnotify f + CVs from billing</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['resdexnew']; ?>
/<?php echo $this->_tpl_vars['resdextotal']; ?>
</font></td>
  </tr>
  <tr>
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">New Email IDs</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['newemail']; ?>
</font></td>
  </tr>
  <tr>
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Avg New CVs/Hr: </font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['avgnew']; ?>
</font></td>
  </tr>
  <tr>
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Avg modified CVs/Hr:  </font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['avgmod']; ?>
</font></td>
  </tr>
</table>
<?php echo $this->_tpl_vars['infostr']; ?>
<?php echo $this->_tpl_vars['indstr']; ?>
<?php echo $this->_tpl_vars['numstr']; ?>

</body>
</html>