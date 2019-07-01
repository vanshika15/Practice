<?php /* Smarty version 2.6.19, created on 2008-06-28 17:11:25
         compiled from ni/nidashboard/dashboard_resumeview.tpl */ ?>
<html>
	<head></head>
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

	<br><br>
	<form name="resumeview" method="post" action="">
		<table align="center" width="50%">
			<tr align="center" bgcolor="seablue">
				<td colspan="3"><i>Resumes For Date : <?php echo $this->_tpl_vars['DATE']; ?>
</i></td>
			</tr>
			<tr bgcolor="#e4e4e4" align="center">
				<td><b>S.No.</b></td>
				<td><b>User Name</b></td>
				<td>&nbsp;</td>
			</tr>
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['RES_USERNAMES']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<tr bgcolor="#e4e4e4" align="center">
				<td><?php echo $this->_tpl_vars['RES_USERNAMES'][$this->_sections['i']['index']]['sno']; ?>
</td>
				<td><?php echo $this->_tpl_vars['RES_USERNAMES'][$this->_sections['i']['index']]['resUsername']; ?>
</td>
				<td><a href="<?php echo $this->_tpl_vars['CUSTOMISE_MASTER_PATH']; ?>
/nidashboard/dashboard_res_preview.php?resumeid=<?php echo $this->_tpl_vars['RES_USERNAMES'][$this->_sections['i']['index']]['resId']; ?>
&uname=<?php echo $this->_tpl_vars['RES_USERNAMES'][$this->_sections['i']['index']]['resUsername']; ?>
" target="_blank">View</a></td>
			</tr>
			<?php endfor; endif; ?>
			<tr bgcolor="seablue">
				<td colspan="3">&nbsp;</td>
			</tr>
		</table>	
	</form>
</html>