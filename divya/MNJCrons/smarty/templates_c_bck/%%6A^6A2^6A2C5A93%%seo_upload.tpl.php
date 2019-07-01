<?php /* Smarty version 2.6.19, created on 2015-12-09 17:33:28
         compiled from /usr/local/apache/htdocs/smarty/templates/seo_templates//seo_upload.tpl */ ?>
<form method="post" enctype="multipart/form-data">
<table width="1000" border="0" cellpadding="1" cellspacing="1" class="box">
<tr>
  <td width="1000" align="left">
    <?php if ($this->_tpl_vars['desig']): ?>
    <a href="upload.php?param=browseD" target="_blank">Browse Designation set</a>
    <?php else: ?>
    <a href="upload.php?param=browseS" target="_blank">Browse Skill set</a>
    <?php endif; ?>
  </td>
</tr>

<tr>
<td width="330">
 <input type="checkbox" name="Remove" value="Remove">Remove all previously added urls</input>
</td>
<td width="500">
<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
<input name="userfile" type="file" id="userfile">
</td>
<?php if ($this->_tpl_vars['desig']): ?>
 <td width="80"><input name="uploadD" type="submit" class="box" id="uploadD" value=" Upload Designation file"> <input name="param" type="hidden" value="desig"></td>
<?php else: ?>
<td width="80"><input name="uploadS" type="submit" class="box" id="uploadS" value=" Upload Skill file"> <input name="param" type="hidden" value="skill"></td>
<?php endif; ?>

<?php if ($this->_tpl_vars['mainurl']): ?>
<tr align="left">
<td height="60">
<a href="<?php echo $this->_tpl_vars['mainurl']; ?>
">back to main menu</a>
</td>
</tr>
<?php endif; ?>

</tr>
</table>
</form>
