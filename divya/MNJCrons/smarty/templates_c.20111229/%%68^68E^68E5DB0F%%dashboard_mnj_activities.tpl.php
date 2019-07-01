<?php /* Smarty version 2.6.19, created on 2011-12-20 11:55:55
         compiled from ni/nidashboard/dashboard_mnj_activities.tpl */ ?>
<html>
<br />
<?php if ($this->_tpl_vars['ERROR_MSG']): ?>
<center><font color="Maroon"><h3><?php echo $this->_tpl_vars['ERROR_MSG']; ?>
</h3></font></center>
<?php endif; ?>
<br />
<?php if ($this->_tpl_vars['SUMMARY_ARR']): ?>
<b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Daywise Summary:</b></b><br>
<table width="95%" border="1" align="center" bordercolor="#CCCCFF">

<tr>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Date</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Unique users who clicked Application sent link</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Unique users who clicked CV Views Link</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Modifies from CV viewed page</center></font></b></td>
</tr>

<?php $_from = $this->_tpl_vars['SUMMARY_ARR']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['date'] => $this->_tpl_vars['data']):
?>
<tr>
 <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php echo $this->_tpl_vars['date']; ?>
</center></font></td>
 <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['appesentlnk'] > 0): ?> <?php echo $this->_tpl_vars['data']['appesentlnk']; ?>
 <?php else: ?>0<?php endif; ?></center></font></td>
 <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['cvviewslnk']): ?><?php echo $this->_tpl_vars['data']['cvviewslnk']; ?>
<?php else: ?>0<?php endif; ?></center></font></td>
 <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['updates']): ?><?php echo $this->_tpl_vars['data']['updates']; ?>
<?php else: ?>0<?php endif; ?></center></font></td>
</tr>
<?php endforeach; endif; unset($_from); ?>

</table>

<br />
<?php endif; ?>
</body>
</html>