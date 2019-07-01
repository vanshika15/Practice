<?php /* Smarty version 2.6.19, created on 2008-07-04 16:03:59
         compiled from ni/nidashboard/je_fareaqced_show.tpl */ ?>
<html>
<head>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="777" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#66CCFF">
  <tr> 
    <td width="552"> 
      <div align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="5"><b><font color="#66CCFF">JOB EDIT</font>         :: FareaQCed Jobs  </b></font></div>
    </td>
    <td width="225"> 
      <div align="right"><img src="<?php echo $this->_tpl_vars['BASE_IMAGES_PATH']; ?>
/nkr_logo.gif" width="220" height="55"></div>
    </td>
  </tr>
</table>
<BR />

<br />
<?php echo $this->_tpl_vars['MESSAGE']; ?>

<table width="99%" border="1" align="center" bordercolor="#CCCCFF">
<tr align="center">
<?php if ($this->_tpl_vars['datefind'] == 'invalid'): ?>
  <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Server time : </font></b></td>
  <td colspan="2"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b>Note: 
      Today's statistics(acc.to server time)</b></font><b></b></td>
<?php else: ?>
  <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Find Date : </font></b></td>
<?php endif; ?>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Farea</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Jobs Uploaded</font></b></td>
   
</tr>

	<?php $_from = $this->_tpl_vars['NEWJOBS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
	
	<?php $_from = $this->_tpl_vars['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?>
<tr align="center">
  <td>&nbsp;<?php echo $this->_tpl_vars['key']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['k']; ?>
</td>
 <td>&nbsp;<?php echo $this->_tpl_vars['i']; ?>
</td>
</tr>
	<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>

   
</table>
<br/>

</body>
</html>