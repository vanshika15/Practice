<?php /* Smarty version 2.6.19, created on 2017-06-24 16:30:05
         compiled from /usr/local/apache/htdocs/smarty/templates/mailers/mailer_revamp/cam_rp1.tpl */ ?>
<html>
<head>
<title>NaukriPremium.com</title>
</head>
<body>
<table border="0" cellspacing="0" cellpadding="0" align="center" style="max-width:600px; min-width:320px; border:1px solid #e9e9e9;-webkit-text-size-adjust: 100%;">
  <tr>
    <td colspan="3" height="13"></td>
  </tr>
  <tr>
    <td width="13"></td>
    <td><a href="https://www.naukri.com/premium.php" target="_blank"><img src="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/np_logo.gif" alt="naukripremium" title="naukripremium" style="font-family:Arial, Helvetica, sans-serif; font-size:25px; font-weight:bold; color:#00adef;" width="278" height="33" hspace="0" vspace="0" border="0" align="left" /></a></td>
    <td width="13"></td>
  </tr>
    <tr>
    <td colspan="3" height="16"></td>
  </tr>
  <tr>
    <td></td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="border:1px dashed #dbdbdb; font-family:Arial; color:#787878; font-size:14px; line-height:18px;">
        <tr>
          <td width="29"></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="121" width="389"><font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#5e82a7" style="font-size:30px; line-height:40px;">Your profile is incomplete- Complete it today </font></td>
                <td valign="bottom" width="110"><img src="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/img5.gif" width="110" height="105" vspace="0" hspace="0" align="left" /></td>
              </tr>
              <tr>
                <td><font face="Arial, Helvetica, sans-serif" color="#787878" style="font-size:14px;">Dear <?php echo $this->_tpl_vars['salutation']; ?>
,</font></td>
                <td><img src="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/img1a.gif" width="110" height="45" vspace="0" hspace="0" align="left" /></td>
              </tr>
            </table></td>
          <td width="46"></td>
        </tr>
        <tr>
          <td></td>
          <td width="499">We've noticed that <strong>your Current Naukri profile is only <span><?php echo $this->_tpl_vars['PERCENTAGE']; ?>
%</span> complete</strong>. We recommend you to perform the following actions:</td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td height="25"></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="border:1px solid #dfdfdf; font-size:13px; color:#737679; font-family:Arial;">
              <tr>
                <td width="28"></td>
                <td colspan="2" valign="top" style="border-bottom:1px solid #dcdee0;"><table align="left" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="45" width="290" style="font-size:15px; color:#737679;"><strong>Your Profile is <span><?php echo $this->_tpl_vars['PERCENTAGE']; ?>
%</span> complete</strong></td>
                    </tr>
                  </table><table align="left" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td height="45" width="157"><img src="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/<?php echo $this->_tpl_vars['imgName']; ?>
.gif" width="157" height="12" vspace="0" hspace="0" align="right" /></td>
  </tr>
</table></td>
                <td width="25"></td>
              </tr>
<?php if ($this->_tpl_vars['emailNotVerified']): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td height="30"></td>
                <td>Verify your email ID</td>
                <td align="right"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/validatePEmail?alid=<?php echo $this->_tpl_vars['ALID1']; ?>
&email=<?php echo $this->_tpl_vars['email_encrypted']; ?>
&src=M" target="_blank" style="color:#1e82c1; font-size:13px; text-decoration:none;">Verify Now</a></td>
                <td></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['noCV']): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>  
              <tr>
                <td height="30"></td>
                <td>Upload your Resume / CV</td>
                <td align="right"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID2']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/CVD/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
" target="_blank" style="color:#1e82c1; font-size:13px; text-decoration:none;">Upload Now</a></td>
                <td></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['mobileError']): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td height="30"></td>
                <td>Verify your mobile number</td>
                <td align="right"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID3']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/VM/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
" target="_blank" style="color:#1e82c1; font-size:13px; text-decoration:none;">Verify Now</a></td>
                <td></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['experienceNotValid'] || $this->_tpl_vars['eduexpnotspecified']): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td height="30"></td>
                <td>Update your years of Work Experience</td>
                <td align="right"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID4']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/ES/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
" target="_blank" style="color:#1e82c1; font-size:13px; text-decoration:none;">Update Now</a></td>
                <td></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['locationOther']): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td height="30"></td>
                <td>Specify your Current Location</td>
                <td align="right"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID5']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/BD/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
" target="_blank" style="color:#1e82c1; font-size:13px; text-decoration:none;">Specify Now</a></td>
                <td></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['keyskillsNotUpdated'] && $this->_tpl_vars['counter'] < 5): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td height="30"></td>
                <td>Showcase your Keyskills</td>
                <td align="right"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID6']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/KS/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
" target="_blank" style="color:#1e82c1; font-size:13px; text-decoration:none;">Update Here</a></td>
                <td></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['compdetailnotspecified'] && $this->_tpl_vars['counter'] < 5): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td height="30"></td>
                <td>Specify your Current Designation</td>
                <td align="right"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID7']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/BD/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
" target="_blank" style="color:#1e82c1; font-size:13px; text-decoration:none;">Specify Here</a></td>
                <td></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['ougcourseOther'] && $this->_tpl_vars['counter'] < 5): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td height="30"></td>
                <td>Specify your Educational Qualifications</td>
                <td align="right"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID8']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/EDUD/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
" target="_blank" style="color:#1e82c1; font-size:13px; text-decoration:none;">Specify Here</a></td>
                <td></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['resumeheadlineNone'] && $this->_tpl_vars['counter'] < 5): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td height="30"></td>
                <td>Improve your Resume Headline</td>
                <td align="right"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID9']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/RH/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
" target="_blank" style="color:#1e82c1; font-size:13px; text-decoration:none;">Edit Now</a></td>
                <td></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['prefLocError'] && $this->_tpl_vars['counter'] < 5): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td height="30"></td>
                <td>Specify your Preferred Location</td>
                <td align="right"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID10']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/PLC/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
" target="_blank" style="color:#1e82c1; font-size:13px; text-decoration:none;">Specify Now</a></td>
                <td></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['CTCError'] && $this->_tpl_vars['counter'] < 5): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td height="30"></td>
                <td>Mention your Salary correctly</td>
                <td align="right"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID11']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/BD/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
" target="_blank" style="color:#1e82c1; font-size:13px; text-decoration:none;">Specify Here</a></td>
                <td></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['fareaOther'] && $this->_tpl_vars['counter'] < 5): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td height="30"></td>
                <td>Specify your Functional Area / Department</td>
                <td align="right"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID12']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/DJ/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
" target="_blank" style="color:#1e82c1; font-size:13px; text-decoration:none;">Specify Here</a></td>
                <td></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['industryOther'] && $this->_tpl_vars['counter'] < 5): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td height="30"></td>
                <td>Specify your Industry / Sector</td>
                <td align="right"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID13']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/ES/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
" target="_blank" style="color:#1e82c1; font-size:13px; text-decoration:none;">Specify Here</a></td>
                <td></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['roleOthersSpecified'] && $this->_tpl_vars['counter'] < 5): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td height="30"></td>
                <td>Specify your Role / Job Title</td>
                <td align="right"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID14']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/ES/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
" target="_blank" style="color:#1e82c1; font-size:13px; text-decoration:none;">Specify Here</a></td>
                <td></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['itSkillsMissing'] && $this->_tpl_vars['counter'] < 5): ?>
              <tr>
                <td height="30"></td>
                <td>Update your IT Skills</td>
                <td align="right"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID15']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/ITSKL/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
" target="_blank" style="color:#1e82c1; font-size:13px; text-decoration:none;">Update Here</a></td>
                <td></td>
              </tr>
<?php endif; ?>
              <tr>
                <td height="75"></td>
                <td><table width="242" border="0" cellspacing="0" cellpadding="0" background="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/butt_cam1.gif" bgcolor="#407ab6">
                    <tr>
                      <td height="39" align="center" style="font-family:Arial;"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID16']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/PA/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
" target="_blank" style="font-size:15px; text-decoration:none; color:#FFFFFF; height:39px; line-height:39px; display:block;">Make your profile 100% complete</a></td>
                    </tr>
                  </table></td>
                <td></td>
                <td></td>
              </tr>
            </table></td>
          <td></td>
        </tr>
        <tr>
          <td height="95"></td>
          <td width="499">Recruiters are more likely to contact jobseekers who have completed their profile.<?php if ($this->_tpl_vars['emailorMobileError']): ?> We highly recommend you to <strong>complete your profile by more than <span>10%</span></strong> and <strong>verify your mobile number, email ID</strong>.<?php endif; ?></td>
          <td></td>
        </tr>
         <tr>
          <td colspan="3" height="10"></td>
        </tr>
        <tr>
          <td height="25"></td>
          <td style="font-family:Arial,Times New Roman,Times,serif;font-size:14px;">You can reach us from <strong>9:30 a.m.</strong> to <strong>6 p.m.</strong> at:<br></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="10"></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td width="30"><img src="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/icon1.gif" width="23" height="17" vspace="0" hspace="0" align="left" border="0" /></td>
                <td width="65"><font face="Arial, Helvetica, sans-serif" color="#787878" style="font-size:13px; line-height:25px;"><strong>Phone</strong>:</font></td>
                <td width="426"><font face="Arial, Helvetica, sans-serif" color="#787878" style="font-size:13px;"><strong>0120-3034141 | 09971175206</strong></font></td>
              </tr>
              <tr>
                <td><img src="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/icon2.gif" width="23" height="17" vspace="0" hspace="0" align="left" border="0" /></td>
                <td><font face="Arial, Helvetica, sans-serif" color="#787878" style="font-size:13px; line-height:25px;"><strong>Email</strong>:</font></td>
                <td style="font-family:Arial, Helvetica, sans-serif;"><a href="mailto:premiumhelpdesk@naukri.com" style="font-size:13px; color:#006eb3; text-decoration:none;">premiumhelpdesk@naukri.com</a></font></td>
              </tr>
            </table></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="3" height="20"></td>
        </tr>
	<?php if ($this->_tpl_vars['dispFF'] == 1): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['mailerTplPath'])."/".($this->_tpl_vars['ffServTpl']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<tr><td colspan="3" height="10"></td></tr>
        <?php endif; ?>
        <tr>
          <td></td>
          <td>We wish you good luck in your Job search<br/>
            Cheers,<br/><br>
             <a href="https://www.naukri.com/premium/" target="_blank"><img src="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/logo_sign.gif" width="140" height="17" vspace="0" hspace="0" align="left" border="0" alt="naukripremium" title="naukripremium" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold; color:#00adef;" /></a></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="3" height="22"></td>
        </tr>
      </table></td>
    <td></td>
  </tr>
    <tr>
    <td colspan="3" height="34"></td>
  </tr>
    <tr>
    <td></td>
    <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['mailerTplPath'])."/ftd/unsubscribe_caution.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
    <td></td>
  </tr>
</table>
</body>
</html>