<?php /* Smarty version 2.6.19, created on 2012-08-18 08:08:02
         compiled from /usr/local/apache/htdocs/smarty/templates/seo_templates//seo_get_rules.tpl */ ?>
<form method="post" action="store_rules.php">
<table width="1000" border="0" cellpadding="1" cellspacing="1" class="box">
<?php if ($this->_tpl_vars['param']): ?>
<input type="hidden" name="param" value="<?php echo $this->_tpl_vars['param']; ?>
">
<?php else: ?>
<input type="hidden" name="param" value="<?php echo $this->_tpl_vars['myrow']['param']; ?>
">
<?php endif; ?>


<?php if ($this->_tpl_vars['param'] == 'excp' || $this->_tpl_vars['myrow']['param'] == 'excp'): ?>
<td width="330">
 <input type="checkbox" <?php if ($this->_tpl_vars['myrow']['noindex']): ?>checked <?php endif; ?> name="noindex" value="noindex">Noindex</input>
</td>

<tr>
  <td width="1000" align="left">
    <input type="text" name="url" <?php if ($this->_tpl_vars['myrow']['url']): ?> value='<?php echo $this->_tpl_vars['myrow']['url']; ?>
' <?php endif; ?> size="100"/>
    Url
</td>
</tr>
<?php endif; ?>


<tr>
  <td width="1000" align="left">
    <input type="text" name="title" <?php if ($this->_tpl_vars['myrow']['title']): ?> value="<?php echo $this->_tpl_vars['myrow']['title']; ?>
" <?php endif; ?> size="100"/>
    Title
</td>
</tr>

<tr>
  <td width="1000" align="left">
     <input type="text" name="descp" <?php if ($this->_tpl_vars['myrow']['descp']): ?> value="<?php echo $this->_tpl_vars['myrow']['descp']; ?>
" <?php endif; ?>  size="100"/>
     Description
</td>
</tr> 

<tr>
  <td width="1000" align="left">
     <input type="text" name="keyword" <?php if ($this->_tpl_vars['myrow']['keyword']): ?> value="<?php echo $this->_tpl_vars['myrow']['keyword']; ?>
" <?php endif; ?>  size="100"/>
    Keyword
</td>
</tr>

<tr>
  <td width="1000" align="left">
     <input type="text" name="classf" <?php if ($this->_tpl_vars['myrow']['classf']): ?> value="<?php echo $this->_tpl_vars['myrow']['classf']; ?>
" <?php endif; ?>  size="100"/>
    Classification
</td>
 </tr>

<tr>
  <td width="1000" align="left">
     <input type="text" name="bcrumb" <?php if ($this->_tpl_vars['myrow']['bcrumb']): ?> value="<?php echo $this->_tpl_vars['myrow']['bcrumb']; ?>
" <?php endif; ?>  size="100"/>
    BreadCrumb
</td>
 </tr>


<tr>
   <td width="1000" align="center">
    <input name="submit" type="submit" class="box" id="submit" value=" Submit ">
</td>
</tr>

<tr>
  <td width="100" align="left">
    <?php if ($this->_tpl_vars['errmsg']): ?>
    <font color="red"><?php echo $this->_tpl_vars['errmsg']; ?>
 <?php endif; ?></font>
  </td>

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
