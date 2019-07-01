<?php /* Smarty version 2.6.19, created on 2016-11-17 12:31:52
         compiled from /usr/local/apache/htdocs/smarty/templates/mailers//ftd/profile_tupple.tpl */ ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="font-size:12px; color:#737679; font-family:Arial, Helvetica, sans-serif; border:1px solid #dfdfdf; line-height:22px;">
  <tr>
    <td width="15" height="15"></td>
    <td colspan="5"></td>
  </tr>
  <tr>
    <td></td>
    <td width="110" valign="top">Key skills</td>
    <td width="5" valign="top">:</td>
    <td width="257" valign="top"><span><?php echo $this->_tpl_vars['KEYWORDS']; ?>
</span></td>
	<?php if ($this->_tpl_vars['PHOTOSTATUS'] == '1'): ?>
    <td rowspan="6" valign="top">
    <table width="80" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="80" height="79"><img src="http://w10.naukri.com/mailers/2012/naukri/ftdoct/images/propic.gif" width="80" height="79" vspace="0" hspace="0" align="left" /></td>
      </tr>
      <tr>
      	<?php if ($this->_tpl_vars['PHOTOSTATUS'] == '1'): ?>
        <td align="center" height="15">
    	<a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/Photo/view?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=addphotolink" target="_blank" style="font-size:11px; text-decoration:none; color:#1e82c1;">Add Photo</a></td>
	<?php endif; ?>
      </tr>
	</table>
	</td>
	<?php endif; ?>
    <td width="15"></td>
  </tr>
  <tr>
    <td></td>
    <td valign="top">Experience  |  CTC</td>
    <td valign="top">:</td>
    <td valign="top"><span><?php echo $this->_tpl_vars['TOTAL_EXP']; ?>
</span> | <span><?php echo $this->_tpl_vars['CTC']; ?>
</span></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td valign="top">Preferred Location</td>
    <td valign="top">:</td>
	<?php if (empty ( $this->_tpl_vars['LOC_PREF'] )): ?>
    <td valign="top"><span>Not Mentioned</span></td>
	<?php else: ?>
    <td valign="top"><span><?php echo $this->_tpl_vars['LOC_PREF']; ?>
</span></td>
	<?php endif; ?>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td valign="top">Functional Area</td>
    <td valign="top">:</td>
    <td valign="top"><span><?php echo $this->_tpl_vars['FAREA']; ?>
</span></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td valign="top">Role</td>
    <td valign="top">:</td>
    <td valign="top"><span><?php echo $this->_tpl_vars['ROLE']; ?>
</span></td>
    <td></td>
  </tr>
  <tr valign="top">
    <td></td>
    <td valign="top">Email</td>
    <td valign="top">:</td>
    <td valign="top"><span><a style="text-decoration:none; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#737679;"><?php echo $this->_tpl_vars['EMAIL']; ?>
</a></span></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td valign="top">Mobile</td>
    <td valign="top">:</td>
	<?php if (empty ( $this->_tpl_vars['MPHONE'] )): ?>
    <td valign="top"><span>Not Mentioned</span></td>
	<?php else: ?>
    <td valign="top"><span><?php echo $this->_tpl_vars['MPHONE']; ?>
</span></td>
	<?php endif; ?>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="4" bgcolor="#e7e7e7" height="1" style="font-size:1px;"></td>
    <td></td>
  </tr>
</table>