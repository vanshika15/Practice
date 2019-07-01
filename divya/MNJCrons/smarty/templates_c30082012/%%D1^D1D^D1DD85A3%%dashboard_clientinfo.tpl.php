<?php /* Smarty version 2.6.19, created on 2012-08-13 16:12:32
         compiled from ni/nidashboard/dashboard_clientinfo.tpl */ ?>
<html>
	<head></head>
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

	<br><br>
		<form name="frmclientinfo" action="" method="POST">
<font color="RED">
<center>
<?php echo $this->_tpl_vars['ERROR_MSG']; ?>

</center>
<?php if ($this->_tpl_vars['CLIENT_INFO']): ?>
	<TABLE BORDER="1" ALIGN="CENTER" width="80%">
		<TR BGCOLOR="#5AA8DA" align="center">
			<TD>S.No</TD><TD>USERNAME</TD><TD>PASSWORD</TD><TD></TD>
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
				<TD align="center"><a href=""><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['sno']; ?>
</a></TD><TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['username']; ?>
</TD><TD><?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['password']; ?>
</TD><TD><a href="dashboard_changeclientdetails.php?uname=<?php echo $this->_tpl_vars['CLIENT_INFO'][$this->_sections['i']['index']]['username']; ?>
" target="_blank">Modify Account</a></TD>
			</tr>
		<?php endfor; endif; ?>
	</TABLE>
<?php endif; ?>
		</form>
	</body>
</html>