<?php /* Smarty version 2.6.19, created on 2010-04-13 08:52:08
         compiled from ni/nidashboard/dashboard_fdre_summary.tpl */ ?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['DASHBOARD_STATIC_PATH']; ?>
/js_calendar_<?php echo $this->_tpl_vars['DB_CSS_VER']; ?>
.css" media="screen"></LINK>
	<SCRIPT type="text/javascript" src="<?php echo $this->_tpl_vars['DASHBOARD_STATIC_PATH']; ?>
/js_calendar_<?php echo $this->_tpl_vars['DB_JS_VER']; ?>
.js"></script>
	<style>
		.heading1{border:0.005em solid;font-size:14px;font-weight:bold;padding:0px 10px 0px 10px;background-color:#CCCCCC;}
		.heading2{border:0.005em solid;font-size:14px;padding:0px 10px 0px 10px;background-color:#CCCCCC;}
		.value{border:0.005em solid;font-size:13px;padding:0px 10px 0px 10px;background-color:#FFFFFF;}
	</style>
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
<form action="" method="POST" name="formFDREReport">
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
    	<td colspan="2" align="center"><input type="submit" name="btnSearch" value="View Report" style="color:blue;"></td>
    </tr>
    </table>
    <br><br>
    <?php if ($this->_tpl_vars['FDRE_SUMMARY']): ?>
    	<table cellpadding="0" cellspacing="0" border="0">
    		<tr>
    			<td colspan="2" nowrap class="heading1">Cleared By Gateway</td>
    			<td colspan="2" nowrap class="heading1">Good Transactions</td>
    			<td colspan="2" nowrap class="heading1">Fishy Transactions</td>
    			<td colspan="2" nowrap class="heading1">Bad Transactions</td>
    			<td colspan="2" nowrap class="heading1">Fishy Unattended Transactions</td>
    			<td colspan="2" nowrap class="heading1">Fishy Turned Good</td>
    			<td colspan="2" nowrap class="heading1">Fishy Turned Bad</td>
    			<td colspan="2" nowrap class="heading1">Fishy Cancelled</td>
    		</tr>
    		<tr>
    			<td nowrap class="heading2">Count</td>
    			<td nowrap class="heading2">Amount</td>
    			<td nowrap class="heading2">Count</td>
    			<td nowrap class="heading2">Amount</td>
    			<td nowrap class="heading2">Count</td>
    			<td nowrap class="heading2">Amount</td>
    			<td nowrap class="heading2">Count</td>
    			<td nowrap class="heading2">Amount</td>
    			<td nowrap class="heading2">Count</td>
    			<td nowrap class="heading2">Amount</td>
    			<td nowrap class="heading2">Count</td>
    			<td nowrap class="heading2">Amount</td>
    			<td nowrap class="heading2">Count</td>
    			<td nowrap class="heading2">Amount</td>
    			<td nowrap class="heading2">Count</td>
    			<td nowrap class="heading2">Amount</td>
    		</tr>
    	<tr>
    			<td nowrap class="value"><?php echo $this->_tpl_vars['FDRE_SUMMARY']['TOTAL_COUNT']; ?>
</td>
    			<td nowrap class="value"><?php echo $this->_tpl_vars['FDRE_SUMMARY']['TOTAL_AMT']; ?>
</td>
    			<td nowrap class="value"><?php echo $this->_tpl_vars['FDRE_SUMMARY']['GOOD_COUNT']; ?>
</td>
    			<td nowrap class="value"><?php echo $this->_tpl_vars['FDRE_SUMMARY']['GOOD_AMT']; ?>
</td>
    			<td nowrap class="value"><?php echo $this->_tpl_vars['FDRE_SUMMARY']['FISHY_COUNT']; ?>
</td>
    			<td nowrap class="value"><?php echo $this->_tpl_vars['FDRE_SUMMARY']['FISHY_AMT']; ?>
</td>
    			<td nowrap class="value"><?php echo $this->_tpl_vars['FDRE_SUMMARY']['BAD_COUNT']; ?>
</td>
    			<td nowrap class="value"><?php echo $this->_tpl_vars['FDRE_SUMMARY']['BAD_AMT']; ?>
</td>
    			<td nowrap class="value"><?php echo $this->_tpl_vars['FDRE_SUMMARY']['FISHY_UNATTENDED_COUNT']; ?>
</td>
    			<td nowrap class="value"><?php echo $this->_tpl_vars['FDRE_SUMMARY']['FISHY_UNATTENDED_AMT']; ?>
</td>
    			<td nowrap class="value"><?php echo $this->_tpl_vars['FDRE_SUMMARY']['FISHY_TURNED_GOOD_COUNT']; ?>
</td>
    			<td nowrap class="value"><?php echo $this->_tpl_vars['FDRE_SUMMARY']['FISHY_TURNED_GOOD_AMT']; ?>
</td>
    			<td nowrap class="value"><?php echo $this->_tpl_vars['FDRE_SUMMARY']['FISHY_TURNED_BAD_COUNT']; ?>
</td>
    			<td nowrap class="value"><?php echo $this->_tpl_vars['FDRE_SUMMARY']['FISHY_TURNED_BAD_AMT']; ?>
</td>
    			<td nowrap class="value"><?php echo $this->_tpl_vars['FDRE_SUMMARY']['FISHY_CANCELLED_COUNT']; ?>
</td>
    			<td nowrap class="value"><?php echo $this->_tpl_vars['FDRE_SUMMARY']['FISHY_CANCELLED_AMT']; ?>
</td>
    		</tr>
    	</table>
    <?php endif; ?>
</form>
</body>
</html>