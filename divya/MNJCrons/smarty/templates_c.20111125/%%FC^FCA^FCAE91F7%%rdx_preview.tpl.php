<?php /* Smarty version 2.6.19, created on 2009-03-26 11:34:49
         compiled from /usr/local/apache/htdocs/smarty/templates/ni/nidashboard/rdx_preview.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title><?php echo $this->_tpl_vars['TITLEPREVIEW']; ?>
</title>
<LINK rel="stylesheet" href="<?php echo $this->_tpl_vars['BASE_CSS_PATH']; ?>
/rdx_style.css" type="text/css">
<LINK rel="stylesheet" href="<?php echo $this->_tpl_vars['BASE_CSS_PATH']; ?>
/nkr_common.css" type="text/css">
<style type="text/css">
<!--
body,td,th {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style4 {color: #cc0000}
-->
</style>

<SCRIPT TYPE="text/javascript" language="Javascript1.2" >
var customisePath="<?php echo $this->_tpl_vars['CUSTOMISE_PATH']; ?>
",con='<?php echo $this->_tpl_vars['CON']; ?>
',mapi="<?php echo $this->_tpl_vars['MAPI']; ?>
";
</SCRIPT>
<SCRIPT TYPE="text/javascript" language="Javascript1.2" src="<?php echo $this->_tpl_vars['CUSTOMISE_PATH']; ?>
/niresdex/js/rdx_ajaxcommonfunc.js?v=3"></SCRIPT>
<SCRIPT TYPE="text/javascript" language="Javascript1.2" src="<?php echo $this->_tpl_vars['CUSTOMISE_PATH']; ?>
/niresdex/js/rdx_ajaxmailnfolder.js?v=3"></SCRIPT>
<script language="javascript" src="<?php echo $this->_tpl_vars['BASE_JS_PATH']; ?>
/nkr_commonfunc.js?ver=1"></script>
<SCRIPT language="Javascript1.2" src="<?php echo $this->_tpl_vars['CUSTOMISE_PATH']; ?>
/niresdex/js/selectedtemplate.js?v=2"></SCRIPT>
</HEAD>

<BODY style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; color:#000000;">
<?php echo $this->_tpl_vars['HEADER']; ?>


<input type="hidden" name="selectedID" id="selectedID">
<input type="hidden" name="selectedLayer" id="selectedLayer">
<input type="hidden" name="resumeid" id="resumeid" value="<?php echo $this->_tpl_vars['RESID']; ?>
">

<?php if ($this->_tpl_vars['ERROR_MSG'] != ""): ?>
	<br><br><br><br>
	<div style="text-align: center;" align="center"><br><img src="<?php echo $this->_tpl_vars['CUSTOMISE_PATH']; ?>
/niresdex/gifs/error.gif" height="21" width="20"><span class="style7" style="text-align: center;"><b> <?php echo $this->_tpl_vars['ERROR_MSG']; ?>
</b><br><br><input class="browbutton" value="Close" onclick="javascript:window.close();" type="button"><br><br></span></div>
	<br><br><br>
<?php else: ?>
	<?php echo $this->_tpl_vars['RDX_MAILNFOLDERBOX']; ?>

<a name="focusmylabel"><asp:label id="mylabel"></a>	
	<?php echo $this->_tpl_vars['RDX_PREVIEWBOX']; ?>

	
	<a href="#" id="down_focus"></a>
<?php endif; ?>
<br>
<?php echo $this->_tpl_vars['FOOTER']; ?>

</BODY>
</HTML>