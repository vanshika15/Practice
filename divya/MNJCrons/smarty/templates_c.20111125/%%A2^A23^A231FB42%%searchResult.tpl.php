<?php /* Smarty version 2.6.19, created on 2009-10-05 13:26:38
         compiled from /usr/local/apache/htdocs/fbapps/tpl/searchResult.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', '/usr/local/apache/htdocs/fbapps/tpl/searchResult.tpl', 16, false),array('modifier', 'count', '/usr/local/apache/htdocs/fbapps/tpl/searchResult.tpl', 29, false),)), $this); ?>
<div class="cl" style=" width: 755px">
<div> 
<div class="cl">
<div id="bdrTpPos">
    
        <div class="bdrTpsc">&nbsp;</div>
        </div>
</div>
<?php $_from = $this->_tpl_vars['arrResult']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['jobid'] => $this->_tpl_vars['Result']):
?>
<div class="posAbs"><div class="jc"> <div class="chkAbs">  </div><div class="jd1">
<div class="fl nkBox">
<a href="<?php echo $this->_tpl_vars['Result']['LINK']; ?>
" target="_NEW" class="l_j" id="1" ><span class="lk1"><?php echo $this->_tpl_vars['Result']['POST']; ?>
</span>
<em><?php echo $this->_tpl_vars['Result']['EXP']; ?>
</em>
<br><em><?php echo $this->_tpl_vars['Result']['COMPANY']; ?>
</em>
<br><span id="l_1" class="grn"><?php echo $this->_tpl_vars['Result']['LOCATION']; ?>
</span>
<br><em><?php echo ((is_array($_tmp=$this->_tpl_vars['Result']['JOBDESC'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 250, "  [...]") : smarty_modifier_truncate($_tmp, 250, "  [...]")); ?>
</em>
</a>
<div class="pt3" id="ex_1">
<span class="ltGreyN1">Posted Date: <?php echo $this->_tpl_vars['Result']['DATE']; ?>
</span> &nbsp;&nbsp;&nbsp;  <div class="cls" id="d_1"></div> </div>
</div>
<div class="fright fbBox">
<div class="fright f11" style="width: 50px"><fb:share-button class="meta">
<meta name="title" content="<?php echo $this->_tpl_vars['Result']['POST']; ?>
"/>
<meta name="description" content="<?php echo $this->_tpl_vars['Result']['JOBDESC']; ?>
"/>
<link rel="target_url" href="<?php echo $this->_tpl_vars['Result']['LINK']; ?>
">
<link rel="image_src" href="<?php echo $this->_tpl_vars['IMAGES_PATH']; ?>
/naukriLogo.png" facebook-logo="true" size="thumb"/>
</fb:share-button></div>
<div class="spacer10"></div>
<?php if (count($this->_tpl_vars['Result']['FRIENDS']) > 0): ?>
<div class="invtFrnbox cls">
<h2 class="invtFriends">Your Friends in this company</h2>
<div style="width:180px; padding-left: 10px" class="ht90" id="<?php echo $this->_tpl_vars['jobid']; ?>
">
<?php $_from = $this->_tpl_vars['Result']['FRIENDS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['friend']):
?>
<span style="float: left; width: 42px; margin-right: 10px;">
<br><fb:name uid="<?php echo $this->_tpl_vars['friend']; ?>
" firstnameonly="true"/>
<br><fb:profile-pic uid="<?php echo $this->_tpl_vars['friend']; ?>
" width="50" height="50" linked="true" /></span>
<?php endforeach; endif; unset($_from); ?>
</div>
<?php if ($this->_tpl_vars['Result']['moreFriendCount'] > 0): ?>
<div style="clear: both; float: right; padding-right:10px"><a href="#" onclick="return removeClass('<?php echo $this->_tpl_vars['jobid']; ?>
', this)">(<?php echo $this->_tpl_vars['Result']['moreFriendCount']; ?>
) others in this list</a></div>
<?php endif; ?>
<div class="spacer1"> </div>
</div>
<?php endif; ?>
</div>
<div class="spacer"></div>
</div>
</div>
</div>
<?php endforeach; endif; unset($_from); ?>

<div class="bdrBtsc">&nbsp;</div>
<div class="posAbs1">
<?php if ($this->_tpl_vars['show_paging']): ?>
<div class="pagination"> 
<form name="paginate" method="post" action="naukrijobs.php">
<?php echo $this->_tpl_vars['paginationHtml']; ?>

<input type="hidden" name="Search" value="1" />
<input type="hidden" name="pg" value="<?php echo $this->_tpl_vars['pg']; ?>
">
</form>
</div>
<?php endif; ?>
</div>
</div>
</div>
<script>
function removeClass(divId, selfObj)
{
	document.getElementById(divId).removeClassName('ht90');
	selfObj.getParentNode().setStyle('display','none');
	return false;
}
</script>