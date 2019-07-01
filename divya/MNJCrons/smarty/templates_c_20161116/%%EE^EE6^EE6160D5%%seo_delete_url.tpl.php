<?php /* Smarty version 2.6.19, created on 2014-07-14 10:45:49
         compiled from /usr/local/apache/htdocs/smarty/templates/seo_templates//seo_delete_url.tpl */ ?>


<?php if ($this->_tpl_vars['url_set']): ?>
   <?php echo $this->_tpl_vars['url_set']; ?>

<?php else: ?>
  EMPTY SET
<?php endif; ?>

<?php if ($this->_tpl_vars['pages']): ?>
   <?php echo $this->_tpl_vars['pages']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['mainurl']): ?>
<br><a href="<?php echo $this->_tpl_vars['mainurl']; ?>
">back to main menu</a>
<?php endif; ?>


