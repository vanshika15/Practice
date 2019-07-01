<?php /* Smarty version 2.6.19, created on 2010-05-11 17:37:09
         compiled from /home/vikasa/htdocs/NaukriTms/tpl/addpixel.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', '/home/vikasa/htdocs/NaukriTms/tpl/addpixel.tpl', 11, false),)), $this); ?>
<html>
<head></head>
<body>
<div>
<form name="AddPixel" method="POST" action="">
<table border='0' width="480px;">
<tr><td colspan='2' align="center" ><b>Add pixel code</b></td></tr>
<tr><td colspan='2' align="center" >&nbsp;</td></tr>
<tr><td align='right'>Source Id</td><td><input type="text" maxlength="20"size="20"></td></tr>
<tr><td align='right'>Tieup Id</td><td><input type="text" maxlength="20"size="20"></td></tr>
<tr><td align='right'>Pixel code</td><td><textarea rows='5' cols='50'><!-- Added on : <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
 --></textarea></td></tr>
<tr><td colspan='2' align="center" ><input type='submit' name='Save' value='Add Pixel Code' style="width:200px;"/></td></tr>
</table>
</form>
</div>
</body>
</html>