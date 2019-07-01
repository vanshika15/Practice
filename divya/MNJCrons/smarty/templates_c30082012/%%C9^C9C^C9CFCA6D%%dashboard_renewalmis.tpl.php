<?php /* Smarty version 2.6.19, created on 2012-08-29 15:38:48
         compiled from ni/nidashboard/dashboard_renewalmis.tpl */ ?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['DASHBOARD_STATIC_PATH']; ?>
/js_calendar_<?php echo $this->_tpl_vars['DB_CSS_VER']; ?>
.css" media="screen"></LINK>
	<SCRIPT type="text/javascript" src="<?php echo $this->_tpl_vars['DASHBOARD_STATIC_PATH']; ?>
/js_calendar_<?php echo $this->_tpl_vars['DB_JS_VER']; ?>
.js"></script>
	</head>
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

	<br><br>
<font color="RED">
	<noscript>
		<div align="center">Please ensure Javascript is enabled on your browser. Required for proper functionality of this module.</div>	
	</noscript>
	<div id="err_msg" align="center">
		<?php if ($this->_tpl_vars['ERROR_MSG']): ?> <?php echo $this->_tpl_vars['ERROR_MSG']; ?>
 <?php else: ?> <br><br> <?php endif; ?>
	</div>
</font>
<form action="" method="POST" name="formRenewalMis">
<table align ="center" width="65%" border="1">
<tr>
	<th align="center" bgcolor="#e4e4e4" colspan="2">Search Criteria</th>
</tr>
<TR align="left"> 
      <TH>Enter Duration</TH>
      <TD>
      	<input type="text" value="<?php echo $this->_tpl_vars['FROMDATE']; ?>
" readonly name="fromdate"><img src="<?php echo $this->_tpl_vars['DASHBOARD_STATIC_PATH']; ?>
/images/calendar.gif" onclick="displayCalendar(document.forms[0].fromdate,'yyyy-mm-dd',this)">
               &nbsp;&nbsp;TO&nbsp;&nbsp; 
        <input type="text" value="<?php echo $this->_tpl_vars['TODATE']; ?>
" readonly name="todate"><img src="<?php echo $this->_tpl_vars['DASHBOARD_STATIC_PATH']; ?>
/images/calendar.gif" onclick="displayCalendar(document.forms[0].todate,'yyyy-mm-dd',this)">
       </TD>
    </TR>
    <tr>
    	<td colspan="2">&nbsp;</td>
    </tr>
    <tr>
    	<td colspan="2" align="center"><input type="submit" name="btnDwnld" value="Download In Excel" style="color:blue;"></td>
    </tr>
    </table>
</form>
</body>
</html>