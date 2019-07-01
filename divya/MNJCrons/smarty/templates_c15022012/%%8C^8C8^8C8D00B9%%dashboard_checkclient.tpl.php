<?php /* Smarty version 2.6.19, created on 2012-01-30 15:27:14
         compiled from ni/nidashboard/dashboard_checkclient.tpl */ ?>
<html>
	<head></head>
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

	<br><br>
		<form name="frmclientdet" action="" method="POST">
<font color="RED">
<center>
<?php echo $this->_tpl_vars['ERROR_MSG']; ?>
<?php echo $this->_tpl_vars['CONFIRM_MSG']; ?>

</center>
</font>
			<table border="1" align="center">
				<tr bgcolor="#5aa8da">
					<td colspan = "3" align="center">Search Criteria</td>		
				</tr>
				<tr>
					<td><input type="radio" name="radsearch" value="username" <?php if ($this->_tpl_vars['RAD_STATUS'] == 'username'): ?>checked<?php endif; ?> ></td><td align="left">&nbsp;User Name :</td><td><input type="text" name ="txtusername" value = "<?php echo $this->_tpl_vars['USERNAME']; ?>
" align="right"></td>
				</tr>
				<tr>
					<td><input type="radio" name="radsearch" value="email" <?php if ($this->_tpl_vars['RAD_STATUS'] == 'email'): ?>checked<?php endif; ?>></td><td align="left">&nbsp;E-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td><td><input type="text" name ="txtemail" value="<?php echo $this->_tpl_vars['EMAIL']; ?>
"align="right"></td>
				</tr>
				<tr>
					<td><input type="radio" name="radsearch" value="compname" <?php if ($this->_tpl_vars['RAD_STATUS'] == 'compname'): ?>checked<?php endif; ?>></td><td align="left">&nbsp;Company Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td><td><input type="text" name ="txtcompname" value="<?php echo $this->_tpl_vars['COMPNAME']; ?>
"align="right"></td>
				</tr>
			</table>
<p align="center"><input type="submit" name="btnsearch" value="Search"></p>

<?php if ($this->_tpl_vars['CLIENT_DETAILS']): ?>
	<TABLE BORDER="1" ALIGN="CENTER" width="80%">
		<TR BGCOLOR="#5AA8DA" align="center">
			<TD>S.No</TD><TD>USERNAME</TD><TD>COMPANY NAME</TD><TD>EMAIL ADDRESS</TD><TD>CLIENT ENTRY DATE</TD>
		</TR>
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['CLIENT_DETAILS']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<TD align="center"><a href="<?php echo $this->_tpl_vars['DASHBOARD_PATH']; ?>
/dashboard_clientinfo.php?uname=<?php echo $this->_tpl_vars['CLIENT_DETAILS'][$this->_sections['i']['index']]['clientusername']; ?>
"><?php echo $this->_tpl_vars['CLIENT_DETAILS'][$this->_sections['i']['index']]['sno']; ?>
</a></TD><TD><?php echo $this->_tpl_vars['CLIENT_DETAILS'][$this->_sections['i']['index']]['clientusername']; ?>
</TD><TD><?php echo $this->_tpl_vars['CLIENT_DETAILS'][$this->_sections['i']['index']]['compName']; ?>
</TD><TD><?php echo $this->_tpl_vars['CLIENT_DETAILS'][$this->_sections['i']['index']]['compEmail']; ?>
</TD><TD><?php echo $this->_tpl_vars['CLIENT_DETAILS'][$this->_sections['i']['index']]['clientEntryDate']; ?>
</TD>
			</tr>
		<?php endfor; endif; ?>
	</TABLE>
<?php endif; ?>
		</form>
	</body>
</html>