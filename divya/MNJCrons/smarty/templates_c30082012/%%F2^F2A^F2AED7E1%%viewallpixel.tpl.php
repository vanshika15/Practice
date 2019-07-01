<?php /* Smarty version 2.6.19, created on 2012-08-24 15:13:05
         compiled from /usr/local/apache/htdocs/NaukriTms/tpl/viewallpixel.tpl */ ?>
<html>
<body style="font-size:12px;font-family:Verdana,Tahoma,Arial">
<table border='0' width='780px;' style="font-size:12px;font-family:Verdana,Tahoma,Arial">
<tr>
  <td width="100px;"><b>Tieup Name</b></td>
  <td width="80px;"><b>Add date</b></td>
  <td width="100px;"><b>Last modified</b></td>
  <td width="315px;"><b>Pixel code</b></td>
  <td width="40px;"><b>Edit</b></td>
  <td width="40px;"><b>Delete</b></td>
</tr>
<?php $_from = $this->_tpl_vars['arrPixelInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pixelInfo']):
?>
<tr valign="top">
  <td align="center";><?php echo $this->_tpl_vars['pixelInfo']['TIEUP']; ?>
</td>
  <td align="center";><?php echo $this->_tpl_vars['pixelInfo']['ADD_DATE']; ?>
</td>
  <td align="center";><?php echo $this->_tpl_vars['pixelInfo']['MOD_DATE']; ?>
</td>
  <td><?php echo $this->_tpl_vars['pixelInfo']['PIXEL_CODE']; ?>
</td>
  <td align="center" valign="center"><a href="editpixel.php?pid=<?php echo $this->_tpl_vars['pixelInfo']['ID']; ?>
"><img border='0' src="<?php echo $this->_tpl_vars['ImagesUrl']; ?>
/edit.png" /></a></td>
  <td align="center" valign="center"><a href="deletepixel.php?pid=<?php echo $this->_tpl_vars['pixelInfo']['ID']; ?>
"><img border='0' src="<?php echo $this->_tpl_vars['ImagesUrl']; ?>
/delete.png" /></a></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
<tr><td align="center">&nbsp;<?php if ($this->_tpl_vars['PrevPgId']): ?><a href="viewallpixel.php?pg=<?php echo $this->_tpl_vars['PrevPgId']; ?>
">&lt;&lt; Prev</a><?php endif; ?></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td colspan="2" align="center">&nbsp;<?php if ($this->_tpl_vars['NextPgId']): ?><a href="viewallpixel.php?pg=<?php echo $this->_tpl_vars['NextPgId']; ?>
">Next &gt;&gt;</a><?php endif; ?></td></tr>
</table>

</body>
<html>