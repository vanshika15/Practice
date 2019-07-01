<?php /* Smarty version 2.6.19, created on 2012-08-30 15:08:14
         compiled from ni/nidashboard/dashboard_editQuotaCap.tpl */ ?>
<html>
	<head></head>
	<script LANGUAGE="JavaScript">
	function confirmSubmit()
	{
	var agree=confirm("It will reset all caps to default values.Are you sure you wish to continue?");
	if (agree)
		return true ;
	else
		return false ;
	}
	// -->
</script>
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

	<br><br>
<font color="RED">
<center>
<?php echo $this->_tpl_vars['ERROR_MSG']; ?>
<br><br>
</center>

<?php if ($this->_tpl_vars['SHOW_CL'] == 'true'): ?>
<form name="frmclientinfo" action="dashboard_editCap.php" method="POST">
  <input type='hidden' name='clientid' value='<?php echo $this->_tpl_vars['CLIENT_ID']; ?>
'>
  <input type='hidden' name='companyid' value='<?php echo $this->_tpl_vars['COMPANY_ID']; ?>
'>
  <input type='hidden' name='subscriptionid' value='<?php echo $this->_tpl_vars['SUBSCRIPTION_ID']; ?>
'>
  <input type="hidden" name="hideviewsbus" value='<?php echo $this->_tpl_vars['CLIENT_INFO'][0]['clSubsLt']; ?>
'>
  <input type="hidden" name="hideemailsbus" value='<?php echo $this->_tpl_vars['CLIENT_INFO'][0]['clEmailSubsLt']; ?>
'>
   <input type="hidden" name="viewsedited" value='<?php echo $this->_tpl_vars['VIEWS_EDITED']; ?>
'>
   <input type="hidden" name="emailsedited" value='<?php echo $this->_tpl_vars['EMAILS_EDITED']; ?>
'>
  <input type='hidden' name='uname' value='<?php echo $this->_tpl_vars['UNAME']; ?>
'>
  <TABLE BORDER="1" ALIGN="CENTER" >
      <TR  BGCOLOR="#5AA8DA"align="center">
            <TD colspan =4 >Resdex CV Views</TD>
            <TD colspan =4 BGCOLOR="#da8c5a">Resdex Emails </TD>
            <TD rowspan=2 >REASON</TD>
      </TR>
      <TR BGCOLOR="#5AA8DA" align="center">
		  <td >Daily </td>
		  <td >Weekly</td>
		  <td >Monthly</td>
		  <td ><b>Subscription</b></td>
		  <td BGCOLOR="#da8c5a">Daily </td>
		  <td BGCOLOR="#da8c5a">Weekly</td>
		  <td BGCOLOR="#da8c5a">Monthly</td>
		  <td BGCOLOR="#da8c5a"><b>Subscription</b></td>
      <TR>
      </TR>
       <tr>
         <TD><input type="textarea" style = "width : 100px" value='<?php echo $this->_tpl_vars['CLIENT_INFO'][0]['clDailyLt']; ?>
' name='DailyLt' id='DailyLt' ></TD>
         <TD><input type="textarea" style = "width : 100px" value='<?php echo $this->_tpl_vars['CLIENT_INFO'][0]['clWeekLt']; ?>
' name='WeekLt' id='WeekLt' ></TD>
         <TD><input type="textarea" style = "width : 100px" value='<?php echo $this->_tpl_vars['CLIENT_INFO'][0]['clMonthLt']; ?>
' name='MonthLt' id='MonthLt'></TD>
         
         <TD style="width:125px"><input type="textarea" style = "width : 100px" value='<?php echo $this->_tpl_vars['CLIENT_INFO'][0]['clSubsLt']; ?>
' name='SubsLt' id='SubsLt'><input type="checkbox" id="checkviewsubs" name="checkviewsubs"/></TD>
         
         <TD><input type="textarea" style = "width : 100px" value='<?php echo $this->_tpl_vars['CLIENT_INFO'][0]['clEmailDailyLt']; ?>
' name='EmailDailyLt' id='EmailDailyLt' ></TD>
         
         <TD><input type="textarea" style = "width : 100px" value='<?php echo $this->_tpl_vars['CLIENT_INFO'][0]['clEmailWeekLt']; ?>
' name='EmailWeekLt' id='EmailWeekLt' ></TD>
         
         <TD><input type="textarea" style = "width : 100px" value='<?php echo $this->_tpl_vars['CLIENT_INFO'][0]['clEmailMonthLt']; ?>
' name='EmailMonthLt' id='EmailMonthLt'></TD>
         <TD style="width:125px"><input type="textarea" style = "width : 100px" value='<?php echo $this->_tpl_vars['CLIENT_INFO'][0]['clEmailSubsLt']; ?>
' name='EmailSubsLt' id='EmailSubsLt'> <input type="checkbox" id="checkemailsubs" name = "checkemailsubs"/></TD>
         <TD><input type="textarea" style = "width : 175px" maxlength='300' value='' name='reason' id='reason'></TD>
       </tr>

  </TABLE>
  <br><br>
  <center>
      <input type='submit' name='change' value='Change'> &nbsp;&nbsp;<input type='submit' name='view' value='Back'>
      &nbsp;&nbsp;<!--<input type='submit' name='reset' value='Reset' onClick="return confirmSubmit()">-->
  </center>
  
  
</form>


<?php else: ?>
  <?php if ($this->_tpl_vars['CLIENT_INFO']): ?>
	  <TABLE BORDER="1" ALIGN="CENTER" width="80%">
		  <TR  BGCOLOR="#5AA8DA" align="center">
			  <TD rowspan =2 >S.No</TD>
			  <TD rowspan =2 >USERNAME</TD>
			  <TD colspan =4 >Resdex CV Views</TD>
              <TD colspan =4 BGCOLOR="#da8c5a">Resdex Emails </TD>
			  <TD rowspan =2 >REASON</TD>
			  <TD rowspan =2 >MOD DATE</TD>
		  </TR>
		  <TR BGCOLOR="#5AA8DA" align="center">
		  <td >Daily </td>
		  <td >Weekly</td>
		  <td >Monthly</td>
		  <td >Subscription</td>
		  <td BGCOLOR="#da8c5a">Daily </td>
		  <td BGCOLOR="#da8c5a">Weekly</td>
		  <td BGCOLOR="#da8c5a">Monthly</td>
		  <td BGCOLOR="#da8c5a">Subscription</td>
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
</TD>
				  <TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['username']; ?>
</TD>
				  <TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['clDailyLt']; ?>
</TD>
				  <TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['clWeekLt']; ?>
</TD>
				  <TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['clMonthLt']; ?>
</TD>
				  <TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['clSubsLt']; ?>
</TD>
				  <TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['clEmailDailyLt']; ?>
</TD>
				  <TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['clEmailWeekLt']; ?>
</TD>
				  <TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['clEmailMonthLt']; ?>
</TD>
				  <TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['clEmailSubsLt']; ?>
</TD>
				  <TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['clReason']; ?>
</TD>
				  <TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['clDate']; ?>
</TD>
        </tr>  
			
		  <?php endfor; endif; ?>
	  </TABLE>
    <br><br>
    <center> <a href="dashboard_editCap.php?clientid=<?php echo $this->_tpl_vars['CLIENT_ID']; ?>
&changelimits=true&uname=<?php echo $this->_tpl_vars['UNAME']; ?>
&usertype=<?php echo $this->_tpl_vars['USERTYPE']; ?>
&subscriptionid=<?php echo $this->_tpl_vars['SUBSCRIPTION_ID']; ?>
&companyid=<?php echo $this->_tpl_vars['COMPANY_ID']; ?>
 ">Change Limits</a> </center>
  <?php endif; ?>
<?php endif; ?>

	</body>
</html>