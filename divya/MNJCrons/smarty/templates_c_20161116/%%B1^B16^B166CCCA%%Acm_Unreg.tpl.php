<?php /* Smarty version 2.6.19, created on 2014-06-10 00:30:27
         compiled from /usr/local/apache/htdocs/smarty/templates/mailers/mailer_revamp/Acm_Unreg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', '/usr/local/apache/htdocs/smarty/templates/mailers/mailer_revamp/Acm_Unreg.tpl', 62, false),)), $this); ?>
<html>
<head>
<title>Naukri Job Alert</title>
</head>
<body>
<table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="border:1px solid #e9e9e9;">
  <tr>
    <td width="20" height="20"><img src="http://w10.naukri.com/mailers/2013/naukriff/mobileVersiion/Expertise/images/spacer.gif" width="20" height="1" vspace="0" hspace="0" border="0" /></td>
    <td></td>
    <td width="20"><img src="http://w10.naukri.com/mailers/2013/naukriff/mobileVersiion/Expertise/images/spacer.gif" width="20" height="1" vspace="0" hspace="0" border="0" /></td>
  </tr>
  <tr>
    <td></td>
    <td><table width="560" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="200" align="left"><table width="175" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td width="22"><a href="http://www.naukri.com/" target="_blank"><img src="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/mr/logo_curve_new.gif" alt="Naukri.com" width="22" height="27" border="0" /></a></td>
                <td width="167" align="right" valign="top" style="font-family:Verdana, Arial; line-height:19px; padding-top:8px;"><a href="http://www.naukri.com/" target="_blank" style="text-decoration:none;"><strong><span style="font-size:24px; color:#01abef;">naukri<span style="color:#ec1822;">.</span><span

style="color:#006cb7;">com</span></span></strong></a><br />
                  <a href="http://www.naukri.com/" target="_blank" 

style="text-decoration:none;"><span style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:9px; color:#3d3d3d;">India's No.1 Job Site</span></a></td>
              </tr>
            </table></td>
          <td width="360"></td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <tr>
    <td height="16" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td bgcolor="#e9e9e9" background="http://w10.naukri.com/mailers/2012/naukri/newja25jan/images/hline.gif" height="2"></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td height="28"></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td><table width="560" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="200" align="left" style="font-family:Arial; color:#191919;"><span style="font-size:18px;">Apply Confirmation</span></td>
          <td width="360" align="right" style="font-family:Tahoma; font-size:11px; color:#727272; line-height:16px; letter-spacing:normal;">Please add <a href="mailto:info@naukri.com" style="font-size:11px; text-decoration:none; color:#006eb3;">info@naukri.com</a> to your contact list <br />
            to prevent future mails from going into Junk/Spam folder.</td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <tr>
    <td height="20" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td width="560" style="font-family:Arial; font-size:12px; line-height:17px; color:#191919;"><font color="black"><strong style="color:#191919">Dear Jobseeker,</strong><br />
      <div style="color:#191919">You have applied to the below mentioned <?php echo $this->_tpl_vars['JOBCOUNT']; ?>
 job(s) through Naukri.com on <?php echo ((is_array($_tmp=$this->_tpl_vars['DATE'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B %e, %Y") : smarty_modifier_date_format($_tmp, "%B %e, %Y")); ?>
.<br />
      <br />
      Your application(s) to these job(s) have been sent to the recruiters. They will contact </div>
      you  at <?php if (! empty ( $this->_tpl_vars['USERDATA']['MPHONE'] )): ?><strong><?php echo $this->_tpl_vars['USERDATA']['MPHONE']; ?>
</strong> and/or <?php endif; ?><strong><?php echo $this->_tpl_vars['EMAIL']; ?>
</strong> if your profile matches their requirements.</font></td>
    <td></td>
  </tr>
  <tr>
    <td height="20" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td bgcolor="#e9e9e9" background="http://w10.naukri.com/mailers/2012/naukri/newja25jan/images/hline.gif" height="2"></td>
    <td></td>
  </tr>
  <tr>
    <td height="20" colspan="3"></td>
  </tr>
  <tr>
  <td colspan="3" align="left"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['mailerTplPath'])."/mailer_revamp/acm_non_premium_jobs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
  </tr>
  <tr>
    <td height="20" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td bgcolor="#e9e9e9" background="http://w10.naukri.com/mailers/2012/naukri/newja25jan/images/hline.gif" height="2"></td>
    <td></td>
  </tr>
  <tr>
    <td height="15" colspan="3"></td>
  </tr>
  <?php if ($this->_tpl_vars['USERDATA']['REG'] == '1'): ?>
  <tr>
    <td></td>
    <td style="border:1px solid #e2e2e2;" bgcolor="#f1f1f1"><table width="560" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial; font-size:12px; color:#191919;">
        <tr>
          <td width="20"></td>
          <td width="20"></td>
          <td width="365"></td>
          <td width="110"></td>
          <td width="45"></td>
        </tr>
        <tr>
          <td colspan="5" height="13"></td>
        </tr>
        
        <tr>
          <td></td>
          <td colspan="4" style="font-size:14px; color:#474a4b; line-height:20px;">You are already a registered member of Naukri.com.<br>
            We would strongly recommend you to apply using your Naukri Profile only because</td>
        </tr>
        <tr>
          <td colspan="5" height="15"></td>
        </tr>
        <tr>
          <td></td>
          <td>1.</td>
          <td height="20" colspan="2" style="color:#191919;">It saves your time and effort - just takes <strong>one click to apply for a job</strong></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td>2</td>
          <td height="25" colspan="2" style="color:#191919;">Your Naukri <strong>Profile gets you noticed</strong> among other applicants for the same job</td>
          <td></td>
        </tr>
        <tr>
          <td colspan="5" height="10"></td>
        </tr>
        <tr>
          <td></td>
          <td colspan="4" style="font-size:13px; color:#474a4b; line-height:20px;">In case you have forgotten you password, retrieve it <a href="<?php echo $this->_tpl_vars['arrPaths']['LOGINURL']; ?>
/forgotpass.php?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=forgotpasslink" title="retrieve password" style="text-decoration:none;" target="_blank"><span style="font-size:13px; text-decoration:none; color:#006eb3;">here</span></a></td>
        </tr>
        <tr>
          <td colspan="5" height="10"></td>
        </tr>
        <tr>
          <td></td>
          <td colspan="4"><table width="215" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="25" align="center" bgcolor="#FDE25E" style="border:solid 1px #ffc21f; text-align:center;"><a href="<?php echo $this->_tpl_vars['arrPaths']['RESETPASSURL']; ?>
?mtid=<?php echo $this->_tpl_vars['ALID']; ?>
&<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=registerlink" style="font-family:Arial; color:#000000; text-decoration:none; padding:4px 0px 4px 0px; font-size:12px; display:block; font-weight:bold;"><font color="black">Yes, reset my Naukri Password</font></a></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td colspan="5" height="15"></td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <tr>
    <td height="20" colspan="3"></td>
  </tr>
  <?php else: ?>
  <tr>
    <td></td>
    <td  style="border:1px solid #e2e2e2;" bgcolor="#f1f1f1"><table width="560" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial; font-size:12px; color:#191919;">
		<tr>
          <td width="20"></td>
          <td width="20"></td>
          <td width="365"></td>
          <td width="110"></td>
          <td width="45"></td>
        </tr>
		<tr>
          <td colspan="5" height="13"></td>
        </tr>
        <tr>
          <td></td>
          <td colspan="2" style="font-size:18px; color:#474a4b;">Get the Naukri Advantage</td>
          <td align="center"><a href="http://blogs.naukri.com/?p=1023" style="font-size:13px; text-decoration:none; color:#006eb3;">Learn More</a></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="5" height="15"></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td height="20" colspan="2" style="color:#191919;">&bull;&nbsp; Apply to jobs in one-click</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td height="25" colspan="2" style="color:#191919;">&bull;&nbsp; Get exclusive access to confidential jobs</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td height="25" style="color:#191919;">&bull;&nbsp; Search and apply to jobs on the go from your mobile <br /></td>
          <td width="110" height="25" align="center" bgcolor="#FDE25E" style="border:solid 1px #ffc21f; text-align:center;"><a href="http://my.naukri.com/manager/createacc2.php?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=registerlink" style="font-family:Arial; color:#000000; text-decoration:none; padding:4px 0px 4px 0px; font-size:12px; display:block; font-weight:bold;"><font color="black">Register Now</font></a></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="5" height="10"></td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <?php endif; ?>
  <tr>
    <td height="20" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td><table width="560" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial;">
        <tr>
          <td colspan="2" style="font-size:12px; color:#474a4b;"><a href="http://my.naukri.com/faq/faq.php?pgid=2&id=" target="_blank" style="font-size:12px; text-decoration:none; color:#006eb3;"><strong>Frequently Asked Questions about how Naukri.com works</strong></a></td>
        </tr>
        <tr>
          <td colspan="2" style="font-size:12px; color:#474a4b;">&nbsp;</td>
        </tr>
        <tr>
          <td style="font-size:12px; color:#474a4b;">Wish you good luck in your job search.<br />
            <br />
            Regards,<br />
            <strong><span style="color:#189BD6;">naukri</span><span style="color:#DF292A;">.</span><span style="color:#1169AC;">com</span></strong> team</td>
        </tr>
        <tr>
          <td height="33"></td>
        </tr>
        <tr>
          <td style="color:#191919; font-size:12px;"><strong><a href="http://resume.naukri.com/cv-for-freshers-entry-level?fftid=700011" style="font-size:12px; text-decoration:none; color:#006eb3;">Apply for your next job with an effective CV that gets you noticed.</a></strong><br />
            Call<strong> 1800-102-5557</strong> (toll free) now!</td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3" height="20"></td>
  </tr>
  <tr>
    <td></td>
    <td bgcolor="#e9e9e9" background="http://w10.naukri.com/mailers/2012/naukri/newja25jan/images/hline.gif" height="2"></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3" height="20"></td>
  </tr>
  <tr>
    <td></td>
    <td style="font-family:Tahoma; color:#9d9d9d; font-size:10px;"><span style="font-size:11px;"><a href="http://w5.naukri.com/fdbck/main/feedback.php?app_id=15&<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=footer" style="font-size:10px; text-decoration:none; color:#006eb3;">Report a Problem</a></span><br />
      <br />
      This is a system generated e-mail, please do not reply to this message. The jobs sent in this mail have been posted by the <br />
      clients of Naukri.com. IEIL has taken all reasonable steps to ensure that the information in this mailer is authentic. Users are <br />
      advised to research bonafides of advertisers independently. IEIL shall not have any responsibility in this regard. We <br />
      recommend that you visit <span style="font-size:11px;"><a href="<?php echo $this->_tpl_vars['arrPaths']['TCURL']; ?>
?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=footer" style="font-size:11px; text-decoration:none; color:#006eb3;">Terms &amp; Conditions</a></span> and the <span style="font-size:11px;"><a href="<?php echo $this->_tpl_vars['arrPaths']['FAQURL']; ?>
?pgid=9&<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=footer" style="font-size:11px; text-decoration:none; color:#006eb3;">Security Advice</a></span> for more comprehensive information.</td>
    <td></td>
  </tr>
  <tr>
    <td width="20" height="20"></td>
    <td></td>
    <td width="20"></td>
  </tr>
</table>
<tr>
  <td height="13"><img height="0" width="0" src="<?php echo $this->_tpl_vars['arrPaths']['MAIL_TRACK_URL']; ?>
<?php echo $this->_tpl_vars['MID']; ?>
" style="display:none" /></td>
</tr>
</body>
</html>