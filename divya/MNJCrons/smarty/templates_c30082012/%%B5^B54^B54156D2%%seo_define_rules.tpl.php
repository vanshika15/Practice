<?php /* Smarty version 2.6.19, created on 2012-08-15 06:23:09
         compiled from /usr/local/apache/htdocs/smarty/templates/seo_templates//seo_define_rules.tpl */ ?>
<form name="suds" method="post">
<table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
<tr  align="center">
<td>Add Rules</td></tr>
<tr  align="center">
<td height="40"></td></tr>
<tr align="center">
<td height="60"><input name="addDRForK" type="submit" class="box" id="addDRForK" value=" Add/Edit Default Rules for Keywords "></td>
</tr>
<tr align="center">
<td height="60"><input name="addDRForDesig" type="submit" class="box" id="addDRForDesig" value=" Add/Edit Default Rules for Designation "></td>
</tr>

<tr align="center">
<td height="60"><input name="addDRForSkill" type="submit" class="box" id="addDRForSkill" value=" Add/Edit Default Rules for Skill "></td>
</tr>

<tr align="center">
<td height="60"><input name="addDRForLoc" type="submit" class ="box" id="addDRForLoc"  value=" Add/Edit Default Rules for Location "></td>
</tr>

<tr align="center">
<td height="60"><input name="addDRForKL" type="submit" class ="box" id="addDRForKL"  value=" Add/Edit Default Rules for Keyword+Location "></td>
</tr>

<tr align="center">
<td height="60"><input name="addExcp" type="submit" class ="box" id="addExcp"  value=" Add Exeception "></td>
</tr>

<tr align="center">
<td height="60"><input name="mngExcp" type="submit" class ="box" id="mngExcp"  value=" Manage Exeception "></td>
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
