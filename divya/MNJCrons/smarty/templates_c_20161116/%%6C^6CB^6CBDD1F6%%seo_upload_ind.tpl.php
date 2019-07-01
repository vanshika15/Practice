<?php /* Smarty version 2.6.19, created on 2015-01-14 13:24:44
         compiled from /usr/local/apache/htdocs/smarty/templates/seo_templates//seo_upload_ind.tpl */ ?>
<form method="post" enctype="multipart/form-data">
<table width="1000" border="0" cellpadding="1" cellspacing="1" class="box">
<tr>
  <td width="1000" align="left">
    <?php if ($this->_tpl_vars['desig']): ?>
    <input type="text" name="Dval" size="100"/>
    <input name="uploadIndD" type="submit" class="box" id="uploadIndD" value=" Add Designation url">
    <?php else: ?>
     <input type="text" name="Sval" size="100"/>
     <input name="uploadIndS" type="submit" class="box" id="uploadIndS" value=" Add Skill url">
    <?php endif; ?>
  </td>
</tr>
<tr>
  <td width="100" align="left">
    <?php if ($this->_tpl_vars['errmsg']): ?>
    <font color="red"><?php echo $this->_tpl_vars['errmsg']; ?>
 <?php endif; ?></font>
  </td>

<?php if ($this->_tpl_vars['mainurl']): ?>
<tr align="left">
<td height="60">
<a href="<?php echo $this->_tpl_vars['mainurl']; ?>
">back to main menu</a>
</td>
</tr>
<?php endif; ?>


</table>
</form>
