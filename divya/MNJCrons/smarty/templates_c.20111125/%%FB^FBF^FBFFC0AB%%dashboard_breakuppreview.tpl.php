<?php /* Smarty version 2.6.19, created on 2008-06-30 13:48:47
         compiled from ni/nidashboard/dashboard_breakuppreview.tpl */ ?>
<html>
	<head></head>
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

	<br><br>
<font color="RED">
	<center>
		<?php echo $this->_tpl_vars['ERROR_MSG']; ?>

	</center>
</font>	
<form name="breakup_preview" method="post" action="<?php echo $this->_tpl_vars['FORM_ACTION']; ?>
">
<table align ="center" width="90%" border="1">
<tr>
	<th align="center" bgcolor="#e4e4e4" colspan="2">Detail Criteria</th>
</tr>
<tr>
	<th align="right"> Criteria</th>
	<td align="right">
		<select name = "drp_criteria">
		  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['POPULATE_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        		<option value="<?php echo $this->_tpl_vars['POPULATE_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['POPULATE_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['POPULATE_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
          <?php endfor; endif; ?>
		</select>
	</td>
</tr>
<tr>
	<td colspan="2" align="center">
		<input type="submit" name="btn_criteria" value="View Details">
	</td>
</tr>

<input type="hidden" name = "drp_breakup" value = "<?php echo $this->_tpl_vars['DRP_BREAKUP']; ?>
">
<input type="hidden" name = "drp_source" value = "<?php echo $this->_tpl_vars['DRP_SOURCE']; ?>
">
<input type="hidden" name = "fromdate" value = "<?php echo $this->_tpl_vars['FROMDATE']; ?>
">
<input type="hidden" name = "todate" value = "<?php echo $this->_tpl_vars['TODATE']; ?>
">

</table>
<BR><BR>
<?php if ($this->_tpl_vars['ERROR_MSG'] == ''): ?>
<TABLE border="1" align="center" width="90%">
	<tr bgcolor="#e4e4e4">
		<th align="center">S.NO.</th>
		<th align="center">DATE</th>
		<th align="center">LABEL</th>
		<th align="center">CUMULATIVE COUNT</th>
	</tr>
	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['DETAILS_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<th align="center"><?php echo $this->_tpl_vars['DETAILS_ARR'][$this->_sections['i']['index']]['sno']; ?>
</th>
		<th align="center"><?php echo $this->_tpl_vars['DETAILS_ARR'][$this->_sections['i']['index']]['date']; ?>
</th>
		<th align="center"><?php echo $this->_tpl_vars['DETAILS_ARR'][$this->_sections['i']['index']]['label']; ?>
</th>
		<th align="center"><?php echo $this->_tpl_vars['DETAILS_ARR'][$this->_sections['i']['index']]['count']; ?>
</th>
	</tr>
	<?php endfor; endif; ?>
</TABLE>
<Pre>

<font size="4" color="Blue"> *Note: The dates selected by are Auto-Cron entry dates.
      : The Count displayed corresponding to a Label is a Cumulative Count on the Auto-Cron Run date.
</font></Pre>
<?php endif; ?>
</form>
</html>