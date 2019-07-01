<?php /* Smarty version 2.6.19, created on 2011-02-17 19:17:29
         compiled from ni/nidashboard/dashboard_resdex_api_usage.tpl */ ?>
<html>

<!--<h3><center><font color=Red><i> <?php echo $this->_tpl_vars['ErrorMsg']; ?>
</i></font></center></h3>-->

<br />
<?php if ($this->_tpl_vars['INFO_ARR'] != ""): ?>
<table width="95%" border="1" align="center" bordercolor="#CCCCFF">
 <tr> 
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Date</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>CV Clicks</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Unique User Clicks[Resdex Access]</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Unique User Clicks[Rest. Access]</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>View All Clicks</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Modify Search Clicks</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>New Search Clicks</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Total Searches Through Resdex - Restricted Access</center></font></b></td>
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
<?php echo '<tr><td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['rauDate']; ?><?php echo '</center></font></b></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['rauCvClick']; ?><?php echo '</center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['rauUserClick']; ?><?php echo '</center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['rauUserRAClick']; ?><?php echo '</center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['rauViewAllCvClick']; ?><?php echo '</center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['rauModSrchClick']; ?><?php echo '</center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['rauNewSrchClick']; ?><?php echo '</center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['rauTotalSearchRa']; ?><?php echo '</center></font></td></tr>'; ?>

<?php endfor; endif; ?>

</table>
<?php elseif (! $this->_tpl_vars['FIRST_TIME']): ?>
<center><font color="Maroon"><h3>No Records Found</h3></font></center>
<?php endif; ?>
<br />

</body>
</html>