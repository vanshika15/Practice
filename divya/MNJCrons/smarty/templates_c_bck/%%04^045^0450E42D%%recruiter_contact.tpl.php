<?php /* Smarty version 2.6.19, created on 2014-06-10 05:31:24
         compiled from /usr/local/apache/htdocs/smarty/templates/mailers//ftd/recruiter_contact.tpl */ ?>
<?php if ($this->_tpl_vars['PROFILE_FLAG'] != 'z'): ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="border:1px solid #dfdfdf; font-size:13px; color:#737679; font-family:Arial, Helvetica, sans-serif;">
  <tr>
    <td width="20" height="47"></td>
    <td colspan="6"><strong>Recruiters will contact you at:</strong></td>
  </tr>
  <tr valign="top">
    <td height="25"></td>
    <td width="22"><img src="http://w10.naukri.com/mailers/2012/naukri/ftdoct/images/icon_m.gif" width="14" height="12" vspace="2" hspace="0" align="left" /></td>
    <td width="97">Email address</td>
    <td width="10">:</td>
    <td align="left" width="197">
    	<table border="0" cellspacing="0" cellpadding="0" align="left" width="197">
        <tr>
          <td><span style="font-size:13px; color:#737679; font-family:Arial, Helvetica, sans-serif;"><a style="text-decoration:none; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#737679;"><?php echo $this->_tpl_vars['EMAIL']; ?>
</a></span></td>
        </tr>
      </table>
      </td>
      <td width="90" align="left">
      <?php if ($this->_tpl_vars['VERIFY'] == 'B'): ?>
      <table width="15" border="0" cellspacing="0" cellpadding="0" align="left" style="">
        <tr>
          <td><img src="http://w10.naukri.com/mailers/2012/naukri/ftdoct/images/icon_t.gif" width="10" height="12" vspace="0" hspace="0" align="left" /></td>
        </tr>
      </table>
      <table width="60" border="0" cellspacing="0" cellpadding="0" align="left">
        <tr>
          <td width="60" style="color:#999b9d; font-size:11px;">(Verified)</td>
        </tr>
      </table>
      <?php else: ?>
      <table width="60" align="left" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="60" style="font-size:11px;"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/ManageEmail/showVerifyEmailSteps?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=verifyemaillink" target="_blank" style="text-decoration:none; color:#1e82c1; font-size:11px;">Verify now</a></td>
        </tr>
      </table>
      <?php endif; ?> </td>
    <td width="10"></td>
  </tr>
  <tr valign="top">
    <td height="35"></td>
    <td><img src="http://w10.naukri.com/mailers/2012/naukri/ftdoct/images/icon_p.gif" width="10" height="15" vspace="0" hspace="3" align="left" /></td>
    <td>Mobile</td>
    <td>:</td>
    <td align="left"><?php if (empty ( $this->_tpl_vars['MPHONE'] )): ?>
      <table border="0" cellspacing="0" cellpadding="0" align="left">
        <tr>
          <td><span style="font-size:13px; color:#737679; font-family:Arial, Helvetica, sans-serif;">Not Mentioned</span></td>
        </tr>
      </table>
      <?php else: ?>
      <table border="0" cellspacing="0" cellpadding="0" align="left" width="197">
        <tr>
          <td><span style="font-size:13px; color:#737679; font-family:Arial, Helvetica, sans-serif;"><?php echo $this->_tpl_vars['MPHONE']; ?>
</span></td>
        </tr>
      </table><?php endif; ?>
      </td>
    <td><?php if (! empty ( $this->_tpl_vars['MPHONE'] )): ?> <?php if ($this->_tpl_vars['MVERIFY'] == '1'): ?>
      <table width="15" border="0" cellspacing="0" cellpadding="0" align="left" style="">
        <tr>
          <td><img src="http://w10.naukri.com/mailers/2012/naukri/ftdoct/images/icon_t.gif" width="10" height="12" vspace="0" hspace="0" align="left" /></td>
        </tr>
      </table>
      <table width="60" border="0" cellspacing="0" cellpadding="0" align="left">
        <tr>
          <td width="60" style="color:#999b9d; font-size:11px;">(Verified)</td>
        </tr>
      </table>
      <?php else: ?>
      <table width="60" align="left" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="60" style="font-size:11px;"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/Mobile/verify?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=verifymobilelink" target="_blank" style="text-decoration:none; color:#1e82c1; font-size:11px;">Verify now</a></td>
        </tr>
      </table>
      <?php endif; ?><?php endif; ?></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="5" bgcolor="#e7e7e7" height="1" style="font-size:1px;"></td>
    <td></td>
  </tr>
  <tr>
    <td height="42"></td>
    <td colspan="6"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=recruitercontact" target="_blank" style="text-decoration:none; color:#1e82c1; font-size:12px;">Login to your profile</a></td>
  </tr>
</table>
<?php endif; ?>