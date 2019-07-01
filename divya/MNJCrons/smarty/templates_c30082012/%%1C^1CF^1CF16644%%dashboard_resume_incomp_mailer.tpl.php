<?php /* Smarty version 2.6.19, created on 2012-08-28 12:14:53
         compiled from ni/nidashboard/dashboard_resume_incomp_mailer.tpl */ ?>
<html>
<br />
<?php if ($this->_tpl_vars['ERROR_MSG']): ?>
<center><font color="Maroon"><h3><?php echo $this->_tpl_vars['ERROR_MSG']; ?>
</h3></font></center>
<?php endif; ?>
<br />

<?php if ($this->_tpl_vars['INFO_ARR']): ?>
<table width="95%" border="1" align="center" bordercolor="#CCCCFF">

<tr>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Date <font color="red"><i>for</i></font> which the Mailer was Sent</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Date <font color="red"><i>on</i></font> which the Mailer was Sent</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>No. of Mails Sent</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>No. of Mails Sent-Arabic</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>No. of unique users who clicked on the validate link</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>No. of unique users who clicked on the validate link-Arabic</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>No. of unique users who validated through the link</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>No. of unique users who validated through the link-Arabic</center></font></b></td>
</tr>

<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['INFO_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['INFO_ARR'][$this->_sections['i']['index']]['firedForDate']): ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['i']['index']]['firedForDate']; ?>
<?php else: ?>0<?php endif; ?></center></font></td>
 <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['INFO_ARR'][$this->_sections['i']['index']]['firedOnDate']): ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['i']['index']]['firedOnDate']; ?>
<?php else: ?>0<?php endif; ?></center></font></td>
 <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['INFO_ARR'][$this->_sections['i']['index']]['firedCount']): ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['i']['index']]['firedCount']; ?>
<?php else: ?>0<?php endif; ?></center></font></td>
 <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['INFO_ARR'][$this->_sections['i']['index']]['firedCountAr']): ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['i']['index']]['firedCountAr']; ?>
<?php else: ?>0<?php endif; ?></center></font></td>
 <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['INFO_ARR'][$this->_sections['i']['index']]['clickCount']): ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['i']['index']]['clickCount']; ?>
<?php else: ?>0<?php endif; ?></center></font></td>
 <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['INFO_ARR'][$this->_sections['i']['index']]['clickCountAr']): ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['i']['index']]['clickCountAr']; ?>
<?php else: ?>0<?php endif; ?></center></font></td>
 <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['INFO_ARR'][$this->_sections['i']['index']]['submitCount']): ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['i']['index']]['submitCount']; ?>
<?php else: ?>0<?php endif; ?></center></font></td>
 <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['INFO_ARR'][$this->_sections['i']['index']]['submitCountAr']): ?><?php echo $this->_tpl_vars['INFO_ARR'][$this->_sections['i']['index']]['submitCountAr']; ?>
<?php else: ?>0<?php endif; ?></center></font></td>
</tr>
<?php endfor; endif; ?>

</table>
<?php endif; ?>

<br />

</body>
</html>