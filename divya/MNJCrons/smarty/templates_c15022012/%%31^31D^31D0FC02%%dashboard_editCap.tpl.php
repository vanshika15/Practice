<?php /* Smarty version 2.6.19, created on 2012-01-23 18:51:20
         compiled from ni/nidashboard/dashboard_editCap.tpl */ ?>
<html>
	<head></head>
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

	<br><br>
<font color="RED">
<center>
<?php echo $this->_tpl_vars['ERROR_MSG']; ?>

</center>


<?php if ($this->_tpl_vars['SHOW_CL'] == 'true'): ?>
<form name="frmclientinfo" action="dashboard_editCap.php" method="POST">
  <input type='hidden' name='clientid' value='<?php echo $this->_tpl_vars['CLIENT_ID']; ?>
'>
  <input type='hidden' name='uname' value='<?php echo $this->_tpl_vars['uname']; ?>
'>
  <TABLE BORDER="1" ALIGN="CENTER" >
      <TR BGCOLOR="#5AA8DA" align="center">
            <TD>DAILY LIMIT</TD><TD>WEEK LIMIT</TD><TD>MONTH LIMIT</TD><TD>REASON</TD>
      </TR>
       <tr>
         <TD><input type="textarea" value='<?php echo $this->_tpl_vars['CLIENT_INFO'][0]['clDailyLt']; ?>
' name='DailyLt' id='DailyLt' ></TD><TD><input type="textarea" value='<?php echo $this->_tpl_vars['CLIENT_INFO'][0]['clWeekLt']; ?>
' name='WeekLt' id='WeekLt' ></TD><TD><input type="textarea" value='<?php echo $this->_tpl_vars['CLIENT_INFO'][0]['clMonthLt']; ?>
' name='MonthLt' id='MonthLt'></TD><TD><input type="textarea" maxlength='300' value='' name='reason' id='reason'></TD>
       </tr>

  </TABLE>
  <br><br>
  <center>
      <input type='submit' name='change' value='Change'> &nbsp;&nbsp;<input type='submit' name='view' value='Back'>
  </center>
  
</form>


<?php else: ?>
  <?php if ($this->_tpl_vars['CLIENT_INFO']): ?>
	  <TABLE BORDER="1" ALIGN="CENTER" width="80%">
		  <TR BGCOLOR="#5AA8DA" align="center">
			  <TD>S.No</TD><TD>USERNAME</TD><TD>DAILY LIMIT</TD><TD>WEEK LIMIT</TD><TD>MONTH LIMIT</TD><TD>REASON</TD><TD>MOD DATE</TD>
		  </TR>
		  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['CLIENT_INFO']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
			  <tr>
				  <TD align="center"><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['sno']; ?>
</TD><TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['username']; ?>
</TD><TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['clDailyLt']; ?>
</TD><TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['clWeekLt']; ?>
</TD><TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['clMonthLt']; ?>
</TD><TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['clReason']; ?>
</TD><TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['clDate']; ?>
</TD>
        </tr>  
			
		  <?php endfor; endif; ?>
	  </TABLE>
    <br><br>
    <center> <a href="dashboard_editCap.php?clientid=<?php echo $this->_tpl_vars['CLIENT_ID']; ?>
&changelimits=true&uname=<?php echo $this->_tpl_vars['uname']; ?>
 ">Change Limits</a> </center>
  <?php endif; ?>
<?php endif; ?>

	</body>
</html>