<?php /* Smarty version 2.6.19, created on 2008-06-26 18:37:09
         compiled from /usr/local/apache/htdocs/smarty/templates/dashboard/applysummary_data.tpl */ ?>
<table border="1">
 <caption>Apply Summary Dashboard</caption>
 <tr><th colspan="9"><?php echo $this->_tpl_vars['title_apply_dashboard']; ?>
</th><tr>
 <tr><td align="center">Date</td><td>Single Applies</td><td>Multiple Applies</td><td>Total</td><td>Unique Users</td><td>Normal Applies</td>
<td>Eapps Applies</td><td>Total</td><td>Unique User</td></tr>
 <?php $_from = $this->_tpl_vars['apply']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['date'] => $this->_tpl_vars['columnheading']):
?>
   <tr><td><?php echo $this->_tpl_vars['date']; ?>
</td><td><?php echo $this->_tpl_vars['columnheading']['single']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['multiple']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['total_single_multiple']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['total_unique_single_multiple']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['normal']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['eapps']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['total_normal_eapps']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['total_unique_user']; ?>
</td></tr>
 <?php endforeach; endif; unset($_from); ?>
</table>
