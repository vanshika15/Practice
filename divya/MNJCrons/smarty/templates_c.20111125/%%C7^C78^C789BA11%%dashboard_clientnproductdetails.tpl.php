<?php /* Smarty version 2.6.19, created on 2008-06-28 17:04:11
         compiled from ni/nidashboard/dashboard_clientnproductdetails.tpl */ ?>
<html>
	<head></head>
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

	<br><br>
<font color="RED"><center><?php echo $this->_tpl_vars['ERROR_MSG']; ?>
</center></font>	
<form name="frmclientdetails" method="post" action="">
<table align ="center" width="90%" border="1">
<tr>
	<th align="center" bgcolor="#e4e4e4" colspan="2">Search Criteria</th>
</tr>
<TR align="right">
	<TH width="30%">Select Product</TH>
	<TD width="70%">
		<select name="drp_products">
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['PRODUCT_LIST']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<option value="<?php echo $this->_tpl_vars['PRODUCT_LIST'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['PRODUCT_LIST'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['PRODUCT_LIST'][$this->_sections['i']['index']]['label']; ?>

			<?php endfor; endif; ?>
		</select>
	</TD>
</TR>
<TR align="right">
	<TH>Select Status</TH>
	<TD>
		<select name="drp_status">
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['PRODUCT_STATUS']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<option value="<?php echo $this->_tpl_vars['PRODUCT_STATUS'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['PRODUCT_STATUS'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['PRODUCT_STATUS'][$this->_sections['i']['index']]['label']; ?>

		<?php endfor; endif; ?>
		</select>
	</TD>
</TR>
<TR>
	<TD colspan="2">
		<center>
			<input type="submit" name="btndwnld" value="Download In Excel">
		</center>
	</TD>
</TR>
</body>
</html>