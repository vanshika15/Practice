<?php /* Smarty version 2.6.19, created on 2012-08-29 15:48:30
         compiled from ni/nidashboard/dash_dateCal.tpl */ ?>
<LINK TYPE="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['DASHBOARD_STATIC_PATH']; ?>
/js_calendar_<?php echo $this->_tpl_vars['DB_CSS_VER']; ?>
.css" media="screen"></LINK>
<SCRIPT language="JavaScript1.2" TYPE="text/javascript" SRC="<?php echo $this->_tpl_vars['DASHBOARD_STATIC_PATH']; ?>
/js_calendar_<?php echo $this->_tpl_vars['DB_JS_VER']; ?>
.js"></SCRIPT>
<style>	
	.style1	{font-weight:bold; background-color:#DDDDDD;}
	.gobutton{color:#ffffff;background-color:#0E5BA8;font-weight:bold;CURSOR:hand;width:50px;margin-top:1px;margin-bottom:1px;}
</style>

<FORM name="frmDateCal" action="" METHOD="POST">
	<table align ="center" width="80%" border="1">
		<TR align="left"> 
			<TD class="style1">Enter Duration</TD>
			<TD>
				<input type="text" value="<?php echo $this->_tpl_vars['FROMDATE']; ?>
" readonly name="fromDate"><img src="<?php echo $this->_tpl_vars['DASHBOARD_STATIC_PATH']; ?>
/images/calendar.gif" onclick="displayCalendar(document.frmDateCal.fromDate,'yyyy-mm-dd',this)">
					&nbsp;&nbsp;TO&nbsp;&nbsp; 
				<input type="text" value="<?php echo $this->_tpl_vars['TODATE']; ?>
" readonly name="toDate"><img src="<?php echo $this->_tpl_vars['DASHBOARD_STATIC_PATH']; ?>
/images/calendar.gif" onclick="displayCalendar(document.frmDateCal.toDate,'yyyy-mm-dd',this)">
			</TD>
		</TR>
		<TR>
			<td colspan="2" align="center"><input type="submit" name="btnGo" value="Go" class="gobutton"></td>
		</tr>
	</table>
</FORM>
<div align="center" style="color:red;"><?php echo $this->_tpl_vars['ERROR_MSG']; ?>
</div>
<br>