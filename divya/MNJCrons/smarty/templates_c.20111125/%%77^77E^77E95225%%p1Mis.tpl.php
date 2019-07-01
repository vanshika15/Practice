<?php /* Smarty version 2.6.19, created on 2008-10-23 11:11:10
         compiled from /usr/local/apache/htdocs/mis/tpl/p1Mis.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', '/usr/local/apache/htdocs/mis/tpl/p1Mis.tpl', 10, false),)), $this); ?>
<html>
<head>
</head>
<body>
<h3><strong>Page1 Dropout Details</strong></h3><br/><br/>
<table align="center" border="1">
<tr style="font-weight:bold">
<td>S.No.</td><td>USERNAME</td><td>PASSWORD</td><td>CPASSWORD</td><td>NAME</td><td>EMAIL</td><td>COUNTRY</td><td>CITY</td><td>RPHONE</td><td>MPHONE</td><td>SMS ALERT</td><td>TOTAL EXP</td><td>CTC</td><td>CTC TYPE</td><td>FAREA</td><td>IND_TYPE</td><td>KEYWORDS</td><td>TITLE</td><td>UG COURSE</td><td>PG COURSE</td><td>PPG COURSE</td><td>ENTRY DATE</td><td>SOURCE</td><td>IPs</td>
</tr>
<?php echo smarty_function_counter(array('start' => 0,'skip' => 1), $this);?>

<?php $_from = $this->_tpl_vars['arrUser']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
<tr>
<td><?php echo smarty_function_counter(array(), $this);?>
</td>
<td><?php echo $this->_tpl_vars['v']['USERNAME']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['PASSWORD']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['CPASSWORD']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['NAME']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['EMAIL']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['COUNTRY']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['CITY']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['RPHONE']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['MPHONE']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['SMS_ALERT']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['TOTAL_EXP']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['CTC']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['CTC_TYPE']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['FAREA']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['IND_TYPE']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['KEYWORDS']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['TITLE']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['UGCOURSE']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['PGCOURSE']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['PPGCOURSE']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['ENTRY_DT']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['SOURCE']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['IP_ADDR']; ?>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
</body>
</html>