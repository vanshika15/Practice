<?php /* Smarty version 2.6.19, created on 2014-06-10 12:53:48
         compiled from /usr/local/apache/htdocs/smarty/templates/dashboard/dashboard_apply_realtime.tpl */ ?>
<html>
<head>
<title>
 Real Time apply MIS
</title>
</head>
<body>
 <table border="1" align="center">
  <tr><th colspan="3">Server Time</th><td colspan="3"><?php echo $this->_tpl_vars['curr_date']; ?>
</td>
  <tr><td colspan="6">Apply Online in last 24 hour</td></tr>
  <tr><th rowspan="2">Hours</th>
                            <th colspan="2">Normal</th>
                            <th colspan="2">Eapps</th>
      <th rowspan="2">Total</th></tr>
  <tr><th>Reg</th><th>Non-Reg</th><th>Reg</th><th>Non-Reg</th></tr>
  <?php $_from = $this->_tpl_vars['realtimeapply']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['hour'] => $this->_tpl_vars['column_heading']):
?>
   <tr><td><?php echo $this->_tpl_vars['hour']; ?>
</td><td><?php echo $this->_tpl_vars['column_heading']['normal_reg']; ?>
</td>
                              <td><?php echo $this->_tpl_vars['column_heading']['normal_nonreg']; ?>
</td>
                              <td><?php echo $this->_tpl_vars['column_heading']['eapps_reg']; ?>
</td>
                              <td><?php echo $this->_tpl_vars['column_heading']['eapps_nonreg']; ?>
</td>
                              <td><?php echo $this->_tpl_vars['column_heading']['total']; ?>

                              </tr>
   <?php endforeach; endif; unset($_from); ?>                             
  </table>
</body>
</html>