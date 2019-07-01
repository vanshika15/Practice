<?php /* Smarty version 2.6.19, created on 2012-01-23 16:23:50
         compiled from ni/nidashboard/dashboard_spamdata.tpl */ ?>
<table border="1" align="center" width="95%">
	<tr style="font-weight:bold;">
		<td>S.No.</td>
		<td>Company Name</td>
		<td>Username</td>
		<td>Email Template</td>
		<td>No. of emails</td>
		<?php if ($this->_tpl_vars['SOURCE'] == 'MIS'): ?>
			<TD>Action Taken</TD>
			<TD>Log Date</TD>
			<TD>Action Date</TD>
		<?php else: ?>
			<td>Reject</td>
			<td>Allow</td>
			<td>Block</td>
		<?php endif; ?>
	</tr>
	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['SPAMDATA_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<TD><?php echo $this->_tpl_vars['SPAMDATA_ARR'][$this->_sections['i']['index']]['sno']; ?>
</TD>
		<TD><?php echo $this->_tpl_vars['SPAMDATA_ARR'][$this->_sections['i']['index']]['compname']; ?>
</TD>
		<TD><?php echo $this->_tpl_vars['SPAMDATA_ARR'][$this->_sections['i']['index']]['username']; ?>
</TD>
		<TD><a href="<?php echo $this->_tpl_vars['DASHBOARD_PATH']; ?>
/dashboard_spamcontrol<?php echo $this->_tpl_vars['SOURCE']; ?>
.php?spamid=<?php echo $this->_tpl_vars['SPAMDATA_ARR'][$this->_sections['i']['index']]['spamid']; ?>
&showmsg=1" target="_blank"><?php echo $this->_tpl_vars['SPAMDATA_ARR'][$this->_sections['i']['index']]['sub']; ?>
</a></TD>
		<TD><?php echo $this->_tpl_vars['SPAMDATA_ARR'][$this->_sections['i']['index']]['cnt']; ?>
</TD>
		<?php if ($this->_tpl_vars['SOURCE'] == 'MIS'): ?>
			<TD><?php echo $this->_tpl_vars['SPAMDATA_ARR'][$this->_sections['i']['index']]['action']; ?>
</TD>
			<TD><?php echo $this->_tpl_vars['SPAMDATA_ARR'][$this->_sections['i']['index']]['datetime']; ?>
</TD>
			<TD><?php echo $this->_tpl_vars['SPAMDATA_ARR'][$this->_sections['i']['index']]['actiondatetime']; ?>
</TD>
		<?php else: ?>
			<TD><a href="#" onclick="confirmAction(<?php echo $this->_tpl_vars['SPAMDATA_ARR'][$this->_sections['i']['index']]['spamid']; ?>
, <?php echo $this->_tpl_vars['SPAMDATA_ARR'][$this->_sections['i']['index']]['clientid']; ?>
, 'reject');">Reject</a></TD>
			<TD><a href="#" onclick="confirmAction(<?php echo $this->_tpl_vars['SPAMDATA_ARR'][$this->_sections['i']['index']]['spamid']; ?>
, <?php echo $this->_tpl_vars['SPAMDATA_ARR'][$this->_sections['i']['index']]['clientid']; ?>
, 'allow');">Allow</a></TD>
			<TD><a href="#" onclick="confirmAction(<?php echo $this->_tpl_vars['SPAMDATA_ARR'][$this->_sections['i']['index']]['spamid']; ?>
, <?php echo $this->_tpl_vars['SPAMDATA_ARR'][$this->_sections['i']['index']]['clientid']; ?>
, 'block');">Block</a></TD>
		<?php endif; ?>
<!--		<TD><a href="<?php echo $this->_tpl_vars['DASHBOARD_PATH']; ?>
/dashboard_changeclientdetails.php?uname=<?php echo $this->_tpl_vars['SPAMDATA_ARR'][$this->_sections['i']['index']]['username']; ?>
" target="_blank">Block</a></TD>-->
	</tr>
	<?php endfor; endif; ?>
</table>