<?php /* Smarty version 2.6.19, created on 2014-11-03 13:08:12
         compiled from /usr/local/apache/htdocs/smarty/templates/seo_templates//seo_upload_main.tpl */ ?>
<form name="suds" method="post" action="upload.php">
<table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
<tr  align="center">
<td></td></tr>
<tr  align="center">
<td height="40"><?php if ($this->_tpl_vars['param'] == 'desig'): ?> Designation menu <?php else: ?> Skill menu <?php endif; ?></td></tr>
<tr align="center">
<td height="60"><input <?php if ($this->_tpl_vars['param'] == 'desig'): ?> name='uploadExcelD' <?php else: ?> name='uploadExcelS' <?php endif; ?> type="submit" class="box" <?php if ($this->_tpl_vars['param'] == 'desig'): ?> id='uploadExcelD' <?php else: ?> id='uploadExcelS' <?php endif; ?> value=" Upload Excel "></td>
</tr>

<tr align="center">
<td height="60"><input <?php if ($this->_tpl_vars['param'] == 'desig'): ?> name='uploadIndD' <?php else: ?> name='uploadIndS' <?php endif; ?> type="submit" class="box" <?php if ($this->_tpl_vars['param'] == 'desig'): ?> id='uploadIndD' <?php else: ?> id='uploadIndS' <?php endif; ?> value=" Add Individual url "></td>
</tr>

<tr align="center">
<td height="60"><input <?php if ($this->_tpl_vars['param'] == 'desig'): ?> name='manageD' <?php else: ?> name='manageS' <?php endif; ?>  type="submit" class="box" <?php if ($this->_tpl_vars['param'] == 'desig'): ?> id='manageD' <?php else: ?> id='manageS' <?php endif; ?>  value=" Manage "></td>
</tr>

<tr align="center">
<td height="60"><input <?php if ($this->_tpl_vars['param'] == 'desig'): ?> name='downloadD' <?php else: ?> name='downloadS' <?php endif; ?>  type="submit" class="box" <?php if ($this->_tpl_vars['param'] == 'desig'): ?> id='downloadD' <?php else: ?> id='downloadS' <?php endif; ?> value=" Download "></td>
</tr>

<?php if ($this->_tpl_vars['mainurl']): ?>
<tr align="center">
<td height="60">
<a href="<?php echo $this->_tpl_vars['mainurl']; ?>
">back to main menu</a>
</td>
</tr>
<?php endif; ?>

</table>
</form>
