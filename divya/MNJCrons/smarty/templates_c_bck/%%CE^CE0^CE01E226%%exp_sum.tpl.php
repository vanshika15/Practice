<?php /* Smarty version 2.6.19, created on 2014-06-10 03:19:00
         compiled from /usr/local/apache/htdocs/smarty/templates/mailers//mailer_revamp/exp_sum.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', '/usr/local/apache/htdocs/smarty/templates/mailers//mailer_revamp/exp_sum.tpl', 90, false),)), $this); ?>
<table width="560" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial; font-size:12px; color:#191919; border:1px solid #e2e2e2;" bgcolor="#f1f1f1">
  <tr>
    <td colspan="3" height="15"></td>
  </tr>
  <tr>
    <td width="20"></td>
    <td width="520"></td>
    <td width="20"></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="3" style="font-size:13px; color:#191919;"><strong>Your Experience Summary <?php echo $this->_tpl_vars['DAY_SENT']; ?>
 months ago:</strong></td>
    <td></td>
  </tr>
  <tr>
    <td height="15" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td><table border="0" cellspacing="0" cellpadding="0" width="520" style="font-family:Arial; font-size:12px; color:#191919;">
        <tr>
          <td width="120" align="left" valign="top"></td>
          <td width="20" align="center" valign="top"></td>
          <td align="left" valign="top"></td>
        </tr>
        <tr>
          <td valign="top">Resume Headlines </td>
          <td valign="top">:</td>
	<?php if (empty ( $this->_tpl_vars['TITLE'] )): ?>
	  <td>Not Mentioned</td>
	<?php else: ?>
          <td><?php echo $this->_tpl_vars['TITLE']; ?>
</td>
	<?php endif; ?>
        </tr>
        <tr>
          <td height="5" colspan="3"></td>
        </tr>
        <tr>
          <td valign="top">Key skills </td>
          <td valign="top">:</td>
        <?php if (empty ( $this->_tpl_vars['KEYWORDS'] )): ?>
	  <td>Not Mentioned</td>
	<?php else: ?>
          <td><?php echo $this->_tpl_vars['KEYWORDS']; ?>
</td>
	<?php endif; ?>
        </tr>
        <tr>
          <td height="5" colspan="3"></td>
        </tr>
        <tr>
          <td>Experience  |  CTC</td>
          <td>:</td>
          <td><?php echo $this->_tpl_vars['TOTAL_EXP']; ?>
  | <?php if ($this->_tpl_vars['CTC_TYPE'] == 'U'): ?>USD<?php else: ?>INR<?php endif; ?> <?php echo $this->_tpl_vars['CTC']; ?>
 </td>
        </tr>
        <tr>
          <td height="5" colspan="3"></td>
        </tr>
        <tr>
          <td>Preferred Location</td>
          <td>:</td>
        <?php if (empty ( $this->_tpl_vars['LOC_PREF'] )): ?>
    	<td>Not Mentioned</td>
	<?php else: ?>
    	<td><?php echo $this->_tpl_vars['LOC_PREF']; ?>
</td>
	<?php endif; ?>
        </tr>
        <tr>
          <td height="5" colspan="3"></td>
        </tr>
        <tr>
          <td>Functional Area</td>
          <td>:</td>
          <td><?php echo $this->_tpl_vars['FAREA']; ?>
</td>
        </tr>
        <tr>
          <td height="5" colspan="3"></td>
        </tr>
        <tr>
          <td>Role</td>
          <td>:</td>
          <td><?php echo $this->_tpl_vars['ROLE']; ?>
</td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="20" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td style="font-family:Arial; font-size:12px; color:#191919;">Your profile was last updated on <span style="color:#000;"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD_DT'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B %e, %Y") : smarty_modifier_date_format($_tmp, "%B %e, %Y")); ?>
 </strong></span>. Keep your CV up-to-date to get more recruiter views </td>
    <td></td>
  </tr>
  <tr>
    <td height="20" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="150" height="25" align="center" bgcolor="#FDE25E" style="border:solid 1px #ffc21f; text-align:center;"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/jamxUpdate?alid=<?php echo $this->_tpl_vars['ALID']; ?>
&<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=updateprofilelink" style="font-family:Arial; color:#000000; text-decoration:none; padding:4px 0px 4px 0px; font-size:12px; display:block;"><strong>Update your profile</strong></a></td>
          <td width="9" align="left"></td>
          <td width="150" align="left"><font face="Tahoma"><a href="https://login.naukri.com/nLogin/forgotpass.php?<?php echo $this->_tpl_vars['GAPARAM']; ?>
" target="_blank" style="text-decoration:none; font-size:11px;">Forgot your Password?</a></font></td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <tr>
    <td height="15" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td style="font-family:Arial; font-size:12px; color:#191919;">*Access your account directly from here. Valid for a one-time login for the next 10 days. </td>
    <td></td>
  </tr>
  <tr>
    <td height="15" colspan="3"></td>
  </tr>
</table>