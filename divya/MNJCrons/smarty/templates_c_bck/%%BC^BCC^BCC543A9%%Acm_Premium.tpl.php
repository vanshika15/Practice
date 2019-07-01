<?php /* Smarty version 2.6.19, created on 2014-06-10 00:30:16
         compiled from /usr/local/apache/htdocs/smarty/templates/mailers/mailer_revamp/Acm_Premium.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', '/usr/local/apache/htdocs/smarty/templates/mailers/mailer_revamp/Acm_Premium.tpl', 43, false),)), $this); ?>
<html>
<head>
<title>NaukriPremium.com</title>
</head>
<body>
<table border="0" cellspacing="0" cellpadding="0" align="center" style="border:3px solid #eaeaea; max-width:600px; min-width:320px; border:1px solid #e9e9e9;-webkit-text-size-adjust:100%;">
  <tr>
    <td colspan="4" height="26"></td>
  </tr>
  <tr>
    <td width="15"></td>
    <td width="278"><a href="http://www.naukri.com/premium/" target="_blank"><img src="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/mr/logo.gif" width="278" height="33" vspace="0" hspace="0" align="left" border="0" alt="naukripremium.com" title="naukripremium.com" /></a></td>
    <td width="290"></td>
    <td width="17"></td>
  </tr>
  <tr>
    <td height="25"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0" background="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/mr/img3.gif" bgcolor="#265c8a" style="background:url(<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/mr/img3.gif) repeat-x #4F72A8;">
        <tr>
          <td width="20"></td>
          <td width="382" height="109" align="left"><font face="Georgia, Times New Roman, Times" color="#FFFFFF" style="font-size:20px;">Your applications are on the move.</font></td>
          <td width="166"><img src="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/mr/img4a_acm.gif" width="166" height="109" vspace="0" hspace="0" align="right" border="0" /></td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="2" valign="top" bgcolor="#e7e7e7"><table width="100%" border="0" cellspacing="0" align="center" cellpadding="0" bgcolor="#e7e7e7" background="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/mr/img5.gif">
        <tr>
          <td colspan="3" height="24"></td>
        </tr>
        <tr>
          <td width="40"></td>
          <td width="503"><font face="Arial, Helvetica, sans-serif" color="#191919" style="font-size:13px; line-height:20px;">Dear <?php if (empty ( $this->_tpl_vars['USERDATA']['NAME'] )): ?><?php echo $this->_tpl_vars['USERDATA']['USERNAME']; ?>
<?php else: ?><?php echo $this->_tpl_vars['USERDATA']['NAME']; ?>
<?php endif; ?>,<br>
            <br>
            Your application(s) to the below mentioned job(s) through Naukripremium<span style="font-size:1px;"> </span>.com on <?php echo ((is_array($_tmp=$this->_tpl_vars['DATE'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B %e, %Y") : smarty_modifier_date_format($_tmp, "%B %e, %Y")); ?>
 has been sent to the recruiters</font></td>
          <td width="25"></td>
        </tr>
        <tr>
          <td colspan="3" height="25"></td>
        </tr>          
        <td colspan="3" align="center"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['mailerTplPath'])."/mailer_revamp/acm_premium_jobs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
        <tr>
          <td colspan="3" height="20"></td>
        </tr>
        <tr>
          <td height="35"></td>
          <td width="503" align="left"><font face="Arial, Helvetica, sans-serif" color="#191919" style="font-size:13px; line-height:20px; word-wrap:break-word;">Interested recruiters will reach you at <?php if (! empty ( $this->_tpl_vars['USERDATA']['MPHONE'] )): ?><strong><?php echo $this->_tpl_vars['USERDATA']['MPHONE']; ?>
</strong> and/or<br><?php endif; ?>
            <a style="text-decoration:none; font-size:13px; color:#191919;"><strong><?php echo $this->_tpl_vars['EMAIL']; ?>
</strong></a>. To change this, <a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/ManageEmail/view?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=changeemaillink" target="_blank" style="text-decoration:none; font-size:13px; color:#006eb3;">click here</a><br>
            <br>
            Increase the visibility of your profile and give your CV the edge by keeping it updated.
<a href="<?php echo $this->_tpl_vars['arrPaths']['PROFILEURL']; ?>
/subAction/ar?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&altresid=#ar" target="_blank" style="text-decoration:none; font-size:13px; color:#006eb3;">Click here</a> <br/>
            </font></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="3" height="25"></td>
        </tr>
        <tr>
          <td></td>
          <td><font face="Arial, Helvetica, sans-serif" color="#191919" style="font-size:13px; line-height:21px;">Wish you good luck in your job search.<br/>
            Cheers,</font></td>
          <td></td>
        </tr>
        <tr>
          <td height="40"></td>
          <td valign="top"><a href="http://www.naukri.com/premium/" target="_blank"><img src="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/mr/logo_sign.gif" width="140" height="17" vspace="0" hspace="0" align="left" border="0" alt="naukripremium" /></a></td>
          <td></td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="4"><table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
         <tr>
          <td></td>
          <td height="12"></td>
          <td></td>
        </tr>
        <tr>
          <td width="15"></td>
          <td width="568" style="font-family:Arial; font-size:11px; color:#9d9d9d"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/Mailers/edit?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=footer&mail_cat=<?php if ($this->_tpl_vars['APPLYTYPE'] == '1'): ?>CS<?php else: ?>UP2<?php endif; ?>" target="_blank" style="text-decoration:none; color:#006eb3;">Unsubscribe</a> &nbsp;| &nbsp; <a href="http://w5.naukri.com/fdbck/main/feedback.php?app_id=15&<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=footer" target="_blank" style="text-decoration:none; color:#006eb3;">Report a problem</a></td>
          <td width="17"></td>
        </tr>
        <tr>
          <td></td>
          <td height="12"></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td width="568" style="font-family:Arial; font-size:11px; color:#9d9d9d;">You have received this mail because your e-mail ID is registered with Naukri<span style="font-size:1px;"> </span>.com. <br>
<br>
<?php if ($this->_tpl_vars['APPLYTYPE'] == '1'): ?>
      The system has applied to this job on your behalf as a part of your subscription to Naukri FastForward's Resume Flash Service <br>
      <br>
      <?php endif; ?>
This is a system-generated e-mail, please don't reply to this message. The jobs sent in this mail have been posted by the clients of Naukri.com. IEIL has taken all reasonable steps to ensure that the information in this mailer is authentic. Users are advised to research bonafides of advertisers independently. IEIL shall not have any responsibility in this regard. We recommend that you visit our <a href="<?php echo $this->_tpl_vars['arrPaths']['TCURL']; ?>
?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=footer" target="_blank" style="text-decoration:none; color:#006eb3;">Terms &amp; Conditions</a> and the <a href="<?php echo $this->_tpl_vars['arrPaths']['FAQURL']; ?>
?pgid=9&<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=footer" target="_blank" style="text-decoration:none; color:#006eb3;">Security Advice</a> for more comprehensive information</td>
          <td></td>
        </tr>
      <tr>
          <td></td>
          <td height="12"></td>
          <td></td>
        </tr>
      </table></td>
  </tr>
</table>
<tr>
    <td height="13"><img height="0" width="0" src="<?php echo $this->_tpl_vars['arrPaths']['MAIL_TRACK_URL']; ?>
<?php echo $this->_tpl_vars['MID']; ?>
" style="display:none" /></td>
  </tr>
</body>
</html>