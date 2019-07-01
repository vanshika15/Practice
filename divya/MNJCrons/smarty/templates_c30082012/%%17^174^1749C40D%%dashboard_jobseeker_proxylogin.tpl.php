<?php /* Smarty version 2.6.19, created on 2012-08-29 16:32:48
         compiled from ni/nidashboard/dashboard_jobseeker_proxylogin.tpl */ ?>
<html>
  <br />
  <?php if ($this->_tpl_vars['INFO_ARR'] != ""): ?>
  <table width="95%" border="1" align="center" bordercolor="#CCCCFF">
    <tr> 
      <td width="10%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Date</center></font></b></td>
      <td width="8%"><b><font face="Verdana, Arial, Helvetica, sans-serif"
      size="2"><center>Count</center></font></b></td>
    </tr>
    <?php $_from = $this->_tpl_vars['INFO_ARR']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['date'] => $this->_tpl_vars['value']):
?>
      <tr>
        <td><b><font face="Verdana, Arial, Helvetica, sans-serif"
        size="2"><center><?php echo $this->_tpl_vars['date']; ?>
</center></font></b></td>
        <td><font face="Verdana, Arial, Helvetica, sans-serif"
        size="2"><center><?php echo $this->_tpl_vars['value']; ?>
</center></font></td>
      </tr>
    <?php endforeach; endif; unset($_from); ?>
  </table>
  <?php else: ?>
    <center><font color="Maroon"><h3>No Records Found</h3></font></center>
  <?php endif; ?>
  <br />
</html>