<?php /* Smarty version 2.6.19, created on 2010-01-27 17:16:52
         compiled from startSubview.tpl */ ?>
<html>
<head>
<title>Companies Subscriptions Details</title>
<link href="<?php echo $this->_tpl_vars['defaultcss']; ?>
" rel="stylesheet" type="text/css" />
</head>
<BODY>
         <?php if ($this->_tpl_vars['arrDetails'][0]['actual_end_date']): ?>
        <h1>Companies Listed With Subscription Expired</h1>
        <?php else: ?>
	<h1>Companies Currently Subscribed</h1>
	<?php endif; ?>

<table class="sms">
<tr style="color:#FFFF00">
        <td>Sr.No.</td>
	<td>Company Id</td>
        <td>Company Name</td>
        <td>Transaction Id</td>
        <td>Product</td>
	<td>Start Date</td>
        <td>Actual Start Date</td>
	<td>End Date</td>
<?php if ($this->_tpl_vars['arrDetails'][0]['actual_start_date']): ?>
        <td>Actual End Date</td>
        <td>Remove Date</td>
<?php endif; ?>

</tr>

<?php unset($this->_sections['mysec']);
$this->_sections['mysec']['name'] = 'mysec';
$this->_sections['mysec']['loop'] = is_array($_loop=$this->_tpl_vars['arrDetails']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mysec']['show'] = true;
$this->_sections['mysec']['max'] = $this->_sections['mysec']['loop'];
$this->_sections['mysec']['step'] = 1;
$this->_sections['mysec']['start'] = $this->_sections['mysec']['step'] > 0 ? 0 : $this->_sections['mysec']['loop']-1;
if ($this->_sections['mysec']['show']) {
    $this->_sections['mysec']['total'] = $this->_sections['mysec']['loop'];
    if ($this->_sections['mysec']['total'] == 0)
        $this->_sections['mysec']['show'] = false;
} else
    $this->_sections['mysec']['total'] = 0;
if ($this->_sections['mysec']['show']):

            for ($this->_sections['mysec']['index'] = $this->_sections['mysec']['start'], $this->_sections['mysec']['iteration'] = 1;
                 $this->_sections['mysec']['iteration'] <= $this->_sections['mysec']['total'];
                 $this->_sections['mysec']['index'] += $this->_sections['mysec']['step'], $this->_sections['mysec']['iteration']++):
$this->_sections['mysec']['rownum'] = $this->_sections['mysec']['iteration'];
$this->_sections['mysec']['index_prev'] = $this->_sections['mysec']['index'] - $this->_sections['mysec']['step'];
$this->_sections['mysec']['index_next'] = $this->_sections['mysec']['index'] + $this->_sections['mysec']['step'];
$this->_sections['mysec']['first']      = ($this->_sections['mysec']['iteration'] == 1);
$this->_sections['mysec']['last']       = ($this->_sections['mysec']['iteration'] == $this->_sections['mysec']['total']);
?>
<?php echo '<tr><td>'; ?><?php echo $this->_sections['mysec']['iteration']; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['arrDetails'][$this->_sections['mysec']['index']]['company_id']; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['arrDetails'][$this->_sections['mysec']['index']]['company_name']; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['arrDetails'][$this->_sections['mysec']['index']]['transaction_id']; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['arrDetails'][$this->_sections['mysec']['index']]['product']; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['arrDetails'][$this->_sections['mysec']['index']]['start_date']; ?><?php echo '</td>'; ?><?php if ($this->_tpl_vars['arrDetails'][$this->_sections['mysec']['index']]['actual_start_date']): ?><?php echo '<td>'; ?><?php echo $this->_tpl_vars['arrDetails'][$this->_sections['mysec']['index']]['actual_start_date']; ?><?php echo '</td>'; ?><?php else: ?><?php echo '<td><a href="dateedit.php?formaction='; ?><?php echo $this->_tpl_vars['formactionpage']; ?><?php echo '&startdate=1&id='; ?><?php echo $this->_tpl_vars['arrDetails'][$this->_sections['mysec']['index']]['id']; ?><?php echo '">add start date</a></td>'; ?><?php endif; ?><?php echo '<td>'; ?><?php echo $this->_tpl_vars['arrDetails'][$this->_sections['mysec']['index']]['end_date']; ?><?php echo '</td>'; ?><?php if ($this->_tpl_vars['arrDetails'][$this->_sections['mysec']['index']]['actual_start_date']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['arrDetails'][$this->_sections['mysec']['index']]['actual_end_date']): ?><?php echo '<td>'; ?><?php echo $this->_tpl_vars['arrDetails'][$this->_sections['mysec']['index']]['actual_end_date']; ?><?php echo '</td>'; ?><?php else: ?><?php echo '<td>Require Start Date</td>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['arrDetails'][$this->_sections['mysec']['index']]['remove_date']): ?><?php echo '<td>'; ?><?php echo $this->_tpl_vars['arrDetails'][$this->_sections['mysec']['index']]['remove_date']; ?><?php echo '</td>'; ?><?php else: ?><?php echo '<td><a href="'; ?><?php echo $this->_tpl_vars['formactionpage']; ?><?php echo '?formaction='; ?><?php echo $this->_tpl_vars['formactionpage']; ?><?php echo '&removedate=1&id='; ?><?php echo $this->_tpl_vars['arrDetails'][$this->_sections['mysec']['index']]['id']; ?><?php echo '">remove</a></td>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</tr>'; ?>

<?php endfor; endif; ?>
</table>
</body>
</html>