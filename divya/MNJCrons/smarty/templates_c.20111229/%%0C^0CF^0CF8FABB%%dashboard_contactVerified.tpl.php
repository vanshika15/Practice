<?php /* Smarty version 2.6.19, created on 2011-11-28 09:22:38
         compiled from ni/nidashboard/dashboard_contactVerified.tpl */ ?>
<html>

<!--<h3><center><font color=Red><i> <?php echo $this->_tpl_vars['ErrorMsg']; ?>
</i></font></center></h3>-->

<br />
<?php if ($this->_tpl_vars['INFO_ARR'] != ""): ?>
<table width="95%" border="1" align="center" bordercolor="#CCCCFF">
 <tr> 

 <td width="12%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Verified Date</center></font></b></td>

 <td width="8%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Counts</center></font></b></td>

</tr>

<?php unset($this->_sections['mysec']);
$this->_sections['mysec']['name'] = 'mysec';
$this->_sections['mysec']['loop'] = is_array($_loop=$this->_tpl_vars['INFO_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<?php echo '<tr><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['verifiedDate']; ?><?php echo '</center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['verifiedCount']; ?><?php echo '</center></font></td></tr>'; ?>

<?php endfor; endif; ?>

</table>
<?php else: ?>
<center><font color="Maroon"><h3>No Records Found</h3></font></center>
<?php endif; ?>
<br />

</body>
</html>