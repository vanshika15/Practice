<?php /* Smarty version 2.6.19, created on 2012-08-14 10:00:53
         compiled from ni/nidashboard/dashboard_db_status.tpl */ ?>
<html>
<br />
<!--Code from dashboard_date.tpl Starts -->
<style>
  .style1
  {
    font-weight:bold;
    background-color:#DDDDDD;
  }
  .gobutton{color:#ffffff;background-color:#0E5BA8;font-weight:bold;CURSOR:hand;width:50px;margin-top:1px;margin-bottom:1px;}
</style>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<?php $_from = $this->_tpl_vars['IMG_PATH_ARR']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arrKey'] => $this->_tpl_vars['img_url']):
?>
<img src="<?php echo $this->_tpl_vars['img_url']; ?>
">
<br />
<br />
<?php endforeach; endif; unset($_from); ?>
<div align="center">DB status in decreasing order of total size.</div>
<br />
<br />
<table width="95%" border="1" align="center" bordercolor="#CCCCFF">
<tr>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Schema</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Rows(in million)</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Data Size</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Index Size</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Total Size</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Index Fraction(Index Size/Data Size)</center></font></b></td>
</tr>

<?php $_from = $this->_tpl_vars['STATUS_ARR']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arrKey'] => $this->_tpl_vars['data']):
?>
<tr>
   <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php echo $this->_tpl_vars['arrKey']; ?>
</center></font></td>
   <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['rows']): ?> <?php echo $this->_tpl_vars['data']['rows']; ?>
 <?php else: ?> - <?php endif; ?></center></font></td>
   <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['data_size']): ?> <?php echo $this->_tpl_vars['data']['data_size']; ?>
 <?php else: ?> - <?php endif; ?></center></font></td>

   <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['index_size']): ?> <?php echo $this->_tpl_vars['data']['index_size']; ?>
 <?php else: ?> - <?php endif; ?></center></font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['total_size']): ?> <?php echo $this->_tpl_vars['data']['total_size']; ?>
 <?php else: ?> - <?php endif; ?></center></font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['index_fraction']): ?> <?php echo $this->_tpl_vars['data']['index_fraction']; ?>
 <?php else: ?> - <?php endif; ?></center></font></td>
</tr>
<?php endforeach; endif; unset($_from); ?>

</table>
<br />
<br />
<div align="center">DB status in decreasing order of index size.</div>
<br />
<br />

<table width="95%" border="1" align="center" bordercolor="#CCCCFF">

<tr>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Schema</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Rows(in million)</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Data Size</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Index Size</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Total Size</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Index Fraction(Index Size/Data Size)</center></font></b></td>
</tr>

<?php $_from = $this->_tpl_vars['STATUS_ARR_IDX']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arrKey'] => $this->_tpl_vars['data']):
?>
<tr>
   <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php echo $this->_tpl_vars['arrKey']; ?>
</center></font></td>
   <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['rows']): ?> <?php echo $this->_tpl_vars['data']['rows']; ?>
 <?php else: ?> - <?php endif; ?></center></font></td>
   <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['data_size']): ?> <?php echo $this->_tpl_vars['data']['data_size']; ?>
 <?php else: ?> - <?php endif; ?></center></font></td>

   <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['index_size']): ?> <?php echo $this->_tpl_vars['data']['index_size']; ?>
 <?php else: ?> - <?php endif; ?></center></font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['total_size']): ?> <?php echo $this->_tpl_vars['data']['total_size']; ?>
 <?php else: ?> - <?php endif; ?></center></font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['index_fraction']): ?> <?php echo $this->_tpl_vars['data']['index_fraction']; ?>
 <?php else: ?> - <?php endif; ?></center></font></td>
</tr>
<?php endforeach; endif; unset($_from); ?>

</table>

<br />
<br />
<div align="center">DB status in decreasing order of data size.</div>
<br />
<br />
<table width="95%" border="1" align="center" bordercolor="#CCCCFF">
<tr>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Schema</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Rows(in million)</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Data Size</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Index Size</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Total Size</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Index Fraction(Index Size/Data Size)</center></font></b></td>
</tr>

<?php $_from = $this->_tpl_vars['STATUS_ARR_DAT']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arrKey'] => $this->_tpl_vars['data']):
?>
<tr>
   <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php echo $this->_tpl_vars['arrKey']; ?>
</center></font></td>
   <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['rows']): ?> <?php echo $this->_tpl_vars['data']['rows']; ?>
 <?php else: ?> - <?php endif; ?></center></font></td>
   <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['data_size']): ?> <?php echo $this->_tpl_vars['data']['data_size']; ?>
 <?php else: ?> - <?php endif; ?></center></font></td>

   <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['index_size']): ?> <?php echo $this->_tpl_vars['data']['index_size']; ?>
 <?php else: ?> - <?php endif; ?></center></font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['total_size']): ?> <?php echo $this->_tpl_vars['data']['total_size']; ?>
 <?php else: ?> - <?php endif; ?></center></font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['index_fraction']): ?> <?php echo $this->_tpl_vars['data']['index_fraction']; ?>
 <?php else: ?> - <?php endif; ?></center></font></td>
</tr>
<?php endforeach; endif; unset($_from); ?>

</table>
<br />
<br />
<div>Regards</div>
<div>NG Team</div>
</body>
</html>