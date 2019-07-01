<?php /* Smarty version 2.6.19, created on 2015-08-11 17:45:11
         compiled from /usr/local/apache/htdocs/smarty/templates/mailers/mailer_revamp/Acm_Non_Premium.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', '/usr/local/apache/htdocs/smarty/templates/mailers/mailer_revamp/Acm_Non_Premium.tpl', 62, false),)), $this); ?>
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
                <td width="167" align="right" valign="top" style="font-family:Verdana, Arial; line-height:19px; padding-top:8px;"><a href="http://www.naukri.com/" target="_blank" style="text-decoration:none;"><strong><span style="font-size:24px; color:#01abef;">naukri<span style="color:#ec1822;">.</span><span style="color:#006cb7;">com</span></span></strong></a><br />
                  <a href="http://www.naukri.com/" target="_blank" style="text-decoration:none;"><span style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:9px; color:#3d3d3d;">India's No.1 Job Site</span></a></td>
              </tr>
            </table></td>
          <td width="360" align="right"><div style="float:right; font-family:Arial; font-size:12px; color:#646464; background-color:#efefef; padding:5px; border:1px solid #e5e5e5;">Stop worrying about remembering your username<br />
              Simply <a href="https://login.naukri.com/nLogin/Login.php?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=loginlink" target="_blank" style="text-decoration:none; font-size:12px; color:#006eb3;">login to Naukri</a> with your Email ID!</div></td>
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
          <td width="200" align="left" style="font-family:Arial;"><span style="font-size:18px; color:#191919">Apply Confirmation</span></td>
          <td width="360" align="right" style="font-family:Tahoma; font-size:11px; color:#3d3d3d; line-height:16px; letter-spacing:normal;">Please add <a href="mailto:info@naukri.com" style="font-size:11px; text-decoration:none; color:#006eb3;">info@naukri.com</a> to your contact list <br />
            to prevent future mails from going into Junk/Spam folder.</td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <tr>
    <td height="20" colspan="3"></td>
  </tr>
  <tr>
    <td width="20"></td>
    <td width="560" style="font-family:Arial; font-size:12px; color:#191919; line-height:17px;">
	<table align="left" width="560" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial; font-size:12px; color:#191919; line-height:17px; text-align:left;">
	    <tr>
		<td width="270px" align="left;"><font color="black"><strong>Dear <?php if (empty ( $this->_tpl_vars['USERDATA']['NAME'] )): ?><?php echo $this->_tpl_vars['USERDATA']['USERNAME']; ?>
<?php else: ?><?php echo $this->_tpl_vars['USERDATA']['NAME']; ?>
<?php endif; ?></strong> (Login ID: <?php echo $this->_tpl_vars['USERDATA']['USERNAME']; ?>
), <br />
      You have applied to the below mentioned <?php echo $this->_tpl_vars['JOBCOUNT']; ?>
 job(s) through Naukri.com on <?php echo ((is_array($_tmp=$this->_tpl_vars['DATE'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B %e, %Y") : smarty_modifier_date_format($_tmp, "%B %e, %Y")); ?>
.</font></td>
<?php if ($this->_tpl_vars['TOPBANNER'] && $this->_tpl_vars['URLTOP']): ?>
		<td width="270px">
		    <a href="<?php echo $this->_tpl_vars['URLTOP']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['TOPBANNER']; ?>
" alt="" align="right" border="0" width="300" height="49"/></a>
		</td>
<?php endif; ?>
	    </tr>
	    <tr>
		<td height="20" colspan="2"></td>
	    </tr>
	    <tr>
		<td width="560" align="left;" colspan="2">
		    <font color="black">
      Your application(s) to these job(s) have been sent to the recruiters. They will contact <br />
      you  at <strong><?php if (! empty ( $this->_tpl_vars['USERDATA']['MPHONE'] )): ?> <?php echo $this->_tpl_vars['USERDATA']['MPHONE']; ?>
</strong> and/or <?php endif; ?><strong><?php echo $this->_tpl_vars['EMAIL']; ?>
</strong> if your profile matches their requirements</font>.
		</td>
	    </tr>
	</table>
	

	 <div style="color:#191919; width:560px;">
	   .
	 </div>
    </td>
    <td width="20"></td>
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
  <td colspan="3" align="center"><?php $_smarty_tpl_vars = $this->_tpl_vars;
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
  <tr>
    <td width="20"></td>
    <td><table align="center" width="560" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial; font-size:12px; color:#191919; line-height:17px; text-align:left;">
        <tr>
          <td width="150"></td>
          <td width="20"></td>
          <td width="390"></td>
        </tr>
        <tr>
          <td colspan="3" style="font-size:13px; color:#191919;"><strong>Your current profile information sent to recruiters:</strong></td>
        </tr>
        <tr>
          <td height="15" colspan="3"></td>
        </tr>
        <tr>
          <td align="left" valign="top">Key skills </td>
          <td align="center" valign="top">:</td>
          <?php if (empty ( $this->_tpl_vars['USERDATA']['KEYWORDS'] )): ?>
          <td align="left" valign="top"><span style="color:#F00;">Not Mentioned</span></td>
          <?php else: ?>
          <td align="left" valign="top"><?php echo $this->_tpl_vars['USERDATA']['KEYWORDS']; ?>
</td>
          <?php endif; ?> </tr>
        <tr>
          <td align="left" valign="top">Experience  |  CTC</td>
          <td align="center" valign="top">:</td>
          <td align="left" valign="top"><?php if (empty ( $this->_tpl_vars['USERDATA']['TOTAL_EXP'] )): ?><span style="color:#F00;">Not Mentioned</span><?php else: ?><?php echo $this->_tpl_vars['USERDATA']['TOTAL_EXP']; ?>
<?php endif; ?>  |  <?php if (empty ( $this->_tpl_vars['USERDATA']['CTC'] )): ?><span style="color:#F00;">Not Mentioned</span><?php else: ?><?php echo $this->_tpl_vars['USERDATA']['CTC']; ?>
<?php endif; ?></td>
        </tr>
        <tr>
          <td align="left" valign="top">Current Location</td>
          <td align="center" valign="top">:</td>
          <?php if (empty ( $this->_tpl_vars['USERDATA']['CITY'] )): ?>
          <td align="left" valign="top"><span style="color:#F00;">Not Mentioned</span></td>
          <?php else: ?>
          <td align="left" valign="top"><?php echo $this->_tpl_vars['USERDATA']['CITY']; ?>
</td>
          <?php endif; ?> </tr>
        <tr>
          <td align="left" valign="top">Preferred Location</td>
          <td align="center" valign="top">:</td>
          <?php if (empty ( $this->_tpl_vars['USERDATA']['LOC_PREF'] )): ?>
          <td align="left" valign="top"><span style="color:#F00;">Not Mentioned</span></td>
          <?php else: ?>
          <td align="left" valign="top"><?php echo $this->_tpl_vars['USERDATA']['LOC_PREF']; ?>
</td>
          <?php endif; ?> </tr>
        <tr>
          <td align="left" valign="top">Functional Area</td>
          <td align="center" valign="top">:</td>
	 <?php if (empty ( $this->_tpl_vars['USERDATA']['FAREA'] )): ?>
          <td align="left" valign="top"><span style="color:#F00;">Not Mentioned</span></td>
         <?php else: ?>
          <td align="left" valign="top"><?php echo $this->_tpl_vars['USERDATA']['FAREA']; ?>
</td>
	 <?php endif; ?>
        </tr>
        <tr>
          <td align="left" valign="top">Role</td>
          <td align="center" valign="top">:</td>
	 <?php if (empty ( $this->_tpl_vars['USERDATA']['ROLE'] )): ?>
          <td align="left" valign="top"><span style="color:#F00;">Not Mentioned</span></td>
          <?php else: ?>
          <td align="left" valign="top"><?php echo $this->_tpl_vars['USERDATA']['ROLE']; ?>
</td>
	 <?php endif; ?>
        </tr>
        <tr>
          <td align="left" valign="top">Moblie</td>
          <td align="center" valign="top">:</td>
	 <?php if (empty ( $this->_tpl_vars['USERDATA']['MPHONE'] )): ?>
          <td align="left" valign="top"><span style="color:#F00;">Not Mentioned</span></td>
          <?php else: ?>
          <td align="left" valign="top"><?php echo $this->_tpl_vars['USERDATA']['MPHONE']; ?>
  <?php if ($this->_tpl_vars['USERDATA']['MVERIFY'] == '0'): ?><span style="color:#F00;">(Not Verified)</span>. <a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/Mobile/verify?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=verifymobilelink" target="_blank" style="text-decoration:none; font-size:12px; font-family:Arial; color:#006eb3;"><strong>Verify Now</strong></a><?php endif; ?></td>
	 <?php endif; ?>
        </tr>
      </table></td>
    <td width="20"></td>
  </tr>
  <tr>
    <td height="20" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td style="font-family:Arial; font-size:12px; color:#191919;">Your last update was more than<strong> <?php echo $this->_tpl_vars['MOD_DT']; ?>
 ago</strong>. Remember, employers prefer recently updated profiles</td>
    <td></td>
  </tr>
  <tr>
    <td height="8" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="150" height="25" align="center" bgcolor="#FDE25E" style="border:solid 1px #ffc21f; text-align:center;"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/jamxUpdate?alid=<?php echo $this->_tpl_vars['ALID']; ?>
" style="font-family:Arial; color:#000000; text-decoration:none; padding:4px 0px 4px 0px; font-size:12px; display:block; font-weight:bold;"><font color="black">Update your profile now</font></a></td>
          <td width="9" align="left"></td>
          <td width="150" align="left"><font face="Tahoma"><a href="<?php echo $this->_tpl_vars['arrPaths']['LOGINURL']; ?>
/forgotpass.php?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=forgotpasslink" target="_blank" style="text-decoration:none; font-size:11px; color:#006eb3;">Forgot your Password?</a></font></td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <tr>
    <td height="20" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td><table width="560" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="450" align="left" style="font-family:Arial; font-size:12px; color:#191919;">Looking for a different kind of a job? Tell us,  and get  relevant jobs in your inbox.</td>
          <td width="110" height="25" align="center" bgcolor="#FDE25E" style="border:solid 1px #ffc21f; text-align:center;"><a href="<?php echo $this->_tpl_vars['arrPaths']['CJAURL']; ?>
?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=cjalink" style="font-family:Arial; color:#000000; text-decoration:none; padding:4px 0px 4px 0px; font-size:12px; display:block; font-weight:bold;"><font color="black">Set your Job Alert</font></a></td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <tr>
    <td height="20" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td><table width="560" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial;">
        <tr>
          <td style="font-size:12px; color:#191919;">Wish you good luck in your job search.<br />
            <br />
            Regards,<br />
            <strong><span style="color:#189BD6;">naukri</span><span style="color:#DF292A;">.</span><span style="color:#1169AC;">com</span></strong> team</td>
        </tr>
        <tr>
          <td height="33"></td>
        </tr>
        <tr>
          <td style="color:#191919; font-size:12px;"><strong><a href="http://resume.naukri.com/cv-for-freshers-entry-level?fftid=700011" style="text-decoration:none; color:#006eb3; font-size:12px;">Apply for your next job with an effective CV that gets you noticed.</a></strong><br />
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
<?php if ($this->_tpl_vars['BOTTOMBANNER'] && $this->_tpl_vars['URLBOTTOM']): ?>
  <tr>
    <td colspan="3"><a href="<?php echo $this->_tpl_vars['URLBOTTOM']; ?>
" target="_blank"><img width="600" height="303" src="<?php echo $this->_tpl_vars['BOTTOMBANNER']; ?>
" border="0"/></a>
  </tr>
<?php endif; ?>
  <tr>
    <td colspan="3" height="20"></td>
  </tr>
  <tr>
    <td></td>
    <td bgcolor="#e9e9e9" background="http://w10.naukri.com/mailers/2012/naukri/newja25jan/images/hline.gif" height="2"></td>
    <td></td>
  </tr>

  <tr>
    <td></td>
    <td style="font-family:Tahoma; color:#9d9d9d; font-size:10px;"><span style="font-size:11px;"><a href="http://w5.naukri.com/fdbck/main/feedback.php?app_id=15&<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=footer" style="text-decoration:none; color:#006eb3; font-size:10px;">Report a Problem</a></span><br />
      <br />
      <?php if ($this->_tpl_vars['APPLYTYPE'] == '1'): ?>
      The system has applied to this job on your behalf as a part of your subscription to Naukri FastForward's Resume Flash Service <br>
      <br>
      <?php endif; ?>
      This is a system generated e-mail, please do not reply to this message. The jobs sent in this mail have been posted by the <br />
      clients of Naukri.com. IEIL has taken all reasonable steps to ensure that the information in this mailer is authentic. Users are <br />
      advised to research bonafides of advertisers independently. IEIL shall not have any responsibility in this regard. We <br />
      recommend that you visit <span style="font-size:11px;"><a href="<?php echo $this->_tpl_vars['arrPaths']['TCURL']; ?>
?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=footer" style="text-decoration:none; color:#006eb3;">Terms &amp; Conditions</a></span> and the <span style="font-size:11px;"><a href="<?php echo $this->_tpl_vars['arrPaths']['FAQURL']; ?>
?pgid=9&<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=footer" style="text-decoration:none; color:#006eb3;">Security Advice</a></span> for more comprehensive information.</td>
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