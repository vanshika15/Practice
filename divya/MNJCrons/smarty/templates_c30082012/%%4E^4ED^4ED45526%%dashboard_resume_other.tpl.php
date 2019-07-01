<?php /* Smarty version 2.6.19, created on 2012-08-23 17:07:01
         compiled from ni/nidashboard/dashboard_resume_other.tpl */ ?>
<html>
<br />
<?php if ($this->_tpl_vars['ERROR_MSG']): ?>
<center><font color="Maroon"><h3><?php echo $this->_tpl_vars['ERROR_MSG']; ?>
</h3></font></center>
<?php endif; ?>
<br />

<?php if ($this->_tpl_vars['ARR_SUMMARY']): ?>
<table width="95%" border="1" align="center" bordercolor="#CCCCFF">

<tr bgcolor="#EEEEEE">
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Name</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Other Functional Area</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Other Industry Type</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Email</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Landline</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Mobile</center></font></b></td>
</tr>

<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['ARR_SUMMARY']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><a href="<?php echo $this->_tpl_vars['CUSTOMISE_MASTER_PATH']; ?>
/nidashboard/dashboard_res_preview.php?resumeid=<?php echo $this->_tpl_vars['ARR_SUMMARY'][$this->_sections['i']['index']]['resId']; ?>
&uname=<?php echo $this->_tpl_vars['ARR_SUMMARY'][$this->_sections['i']['index']]['resUsername']; ?>
" target="_blank"><?php if ($this->_tpl_vars['ARR_SUMMARY'][$this->_sections['i']['index']]['resName']): ?><?php echo $this->_tpl_vars['ARR_SUMMARY'][$this->_sections['i']['index']]['resName']; ?>
<?php else: ?>-<?php endif; ?></a></center></font></td>
 <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['ARR_SUMMARY'][$this->_sections['i']['index']]['resOFarea']): ?><?php echo $this->_tpl_vars['ARR_SUMMARY'][$this->_sections['i']['index']]['resOFarea']; ?>
<?php else: ?>-<?php endif; ?></center></font></td>
 <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['ARR_SUMMARY'][$this->_sections['i']['index']]['resOIndType']): ?><?php echo $this->_tpl_vars['ARR_SUMMARY'][$this->_sections['i']['index']]['resOIndType']; ?>
<?php else: ?>-<?php endif; ?></center></font></td>
 <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['ARR_SUMMARY'][$this->_sections['i']['index']]['resUsername']): ?><?php echo $this->_tpl_vars['ARR_SUMMARY'][$this->_sections['i']['index']]['resUsername']; ?>
<?php else: ?>-<?php endif; ?></center></font></td>
 <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['ARR_SUMMARY'][$this->_sections['i']['index']]['resRPhone']): ?><?php echo $this->_tpl_vars['ARR_SUMMARY'][$this->_sections['i']['index']]['resRPhone']; ?>
<?php else: ?>-<?php endif; ?></center></font></td>
 <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['ARR_SUMMARY'][$this->_sections['i']['index']]['resMPhone']): ?><?php echo $this->_tpl_vars['ARR_SUMMARY'][$this->_sections['i']['index']]['resMPhone']; ?>
<?php else: ?>-<?php endif; ?></center></font></td>
</tr>
<?php endfor; endif; ?>

</table>
<?php endif; ?>
<br />

</body>
</html>