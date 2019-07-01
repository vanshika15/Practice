<?php /* Smarty version 2.6.19, created on 2009-09-18 16:24:18
         compiled from /usr/local/apache/htdocs/fbapps/tpl/invite.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['_HEADER_TPL'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<fb:title>This is Naukri Search</fb:title>
<fb:request-form action="<?php echo $this->_tpl_vars['APP_URL']; ?>
" method="POST" invite="true" type="Naukri India" content="<?php echo $this->_tpl_vars['content']; ?>
">
<fb:multi-friend-selector showborder="true" max="20" rows="3" actiontext="<?php echo $this->_tpl_vars['msgTop']; ?>
">
</fb:request-form>