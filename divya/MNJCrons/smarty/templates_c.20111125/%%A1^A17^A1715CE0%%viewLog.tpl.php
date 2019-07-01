<?php /* Smarty version 2.6.19, created on 2010-03-04 10:17:21
         compiled from /usr/local/apache/htdocs/delAcc/tpl/viewLog.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', '/usr/local/apache/htdocs/delAcc/tpl/viewLog.tpl', 12, false),)), $this); ?>
<html>
<head>
<title>Naukri Techsupport</title>
<style>
.log { font-size:13px; font-family:verdana,arial,times}
</style>
</head>
<body>
<div><img src="http://static.naukimg.com/mynauk/images/jobs-india.gif" /></div>
<div align="center" style="font-weight:bold;font-size:25px;">Tech-Support ( Naukri )</div>
<div style="clear:both;" ></div><hr />
<div style="width:49%;float:left"><b>Action Log for - <i><?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y")); ?>
</i></b></div>
<div style="width:49%;float:right;text-align:right"><a href="<?php echo $this->_tpl_vars['searchUrl']; ?>
">Back to Search</a></div>
<div style="clear:both;" ></div><br />
<table border="1" cellpadding="3" class="log">
<tr>
<th>S.No.</th><th>Username</th><th>Email / Mobile</th><th>Action</th><th>Undo</td>
</tr>
<?php $_from = $this->_tpl_vars['arrLogData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?>
<tr>
  <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
  <?php $_from = $this->_tpl_vars['i']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k2'] => $this->_tpl_vars['i2']):
?>
  <td>&nbsp;<?php echo $this->_tpl_vars['i2']; ?>
&nbsp;</td>
  <?php endforeach; endif; unset($_from); ?>
<tr>
<?php endforeach; endif; unset($_from); ?>
</table>
</body>
</html>