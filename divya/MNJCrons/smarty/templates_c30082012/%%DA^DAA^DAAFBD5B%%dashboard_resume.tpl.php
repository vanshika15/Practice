<?php /* Smarty version 2.6.19, created on 2012-08-16 09:53:24
         compiled from ni/nidashboard/dashboard_resume.tpl */ ?>
<html>
  <br />
  <?php if ($this->_tpl_vars['INFO_ARR'] != ""): ?>
  <table width="95%" border="1" align="center" bordercolor="#CCCCFF">
    <tr> 
      <td width="10%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Date</center></font></b></td>
      <td width="8%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Total New Resumes</center></font></b></td>
      <td width="6%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Page 1</center></font></b></td>
      <td width="10%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Page 1 and<br>Attached CVs</center></font></b></td>
      <td width="10%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Page 1 and<br>Pasted CVs</center></font></b></td>
      <td width="6%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Page 2</center></font></b></td>
      <td width="10%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Page 2 and<br>Attached CVs</center></font></b></td>
      <td width="10%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Page 2 and<br>Pasted CVs</center></font></b></td>
      <td width="6%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Page 3</center></font></b></td>
      <td width="10%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Page 3 and<br>Attached CVs</center></font></b></td>
      <td width="10%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Page 3 and<br>Pasted CVs</center></font></b></td>
      <td width="8%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Modified Resumes</center></font></b></td>
      <td width="10%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Avg. New Resumes<br>(per hour)</center>  </font></b></td>
      <td width="10%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Avg. Modified Resumes<br>(per hour)</center> </font></b></td>
      <td width="10%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Resdex Ready Count</center> </font></b></td>
      <td width="10%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Daily Translation Count</center> </font></b></td>
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
      <?php echo '<tr><td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['datecriteriaval']; ?><?php echo '</center></font></b></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php if ($this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['resnewcv'] != '0'): ?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['DASHBOARD_PATH']; ?><?php echo '/dashboard_resumeview.php?date='; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['preview_date']; ?><?php echo '&src='; ?><?php echo $this->_tpl_vars['src']; ?><?php echo '" target="_blank">'; ?><?php endif; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['resnewcv']; ?><?php echo '</a></center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['respage1']; ?><?php echo '</center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['respage1attached']; ?><?php echo '</center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['respage1pasted']; ?><?php echo '</center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['respage2']; ?><?php echo '</center>  </font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['respage2attached']; ?><?php echo '</center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['respage2pasted']; ?><?php echo '</center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['respage3']; ?><?php echo '</center>  </font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['respage3attached']; ?><?php echo '</center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['respage3pasted']; ?><?php echo '</center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['resmodcv']; ?><?php echo '</center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['resavgnew']; ?><?php echo '</center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['resavgmod']; ?><?php echo '</center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['resreadyount']; ?><?php echo '</center></font></td><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>'; ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['mysec']['index']]['restranscount']; ?><?php echo '</center></font></td></tr>'; ?>

    <?php endfor; endif; ?>
  </table>
  <?php else: ?>
    <center><font color="Maroon"><h3>No Records Found</h3></font></center>
  <?php endif; ?>
  <br />
</html>