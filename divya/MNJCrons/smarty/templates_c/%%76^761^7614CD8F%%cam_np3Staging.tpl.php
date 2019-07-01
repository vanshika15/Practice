<?php /* Smarty version 2.6.19, created on 2017-06-23 17:31:06
         compiled from /usr/local/apache/htdocs/smarty/templates/mailers/mailer_revamp/cam_np3Staging.tpl */ ?>
<html>
<head>
<title>Naukri.com</title>
</head>
<body>
<table border="0" cellspacing="0" cellpadding="0" align="center" style="max-width:600px; min-width:320px; border:1px solid #e9e9e9;-webkit-text-size-adjust: 100%;">
  <tr>
    <td colspan="3" height="13"></td>
  </tr>
  <tr>
    <td width="13"></td>
    <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['mailerTplPath'])."/ftd/naukri_logo.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
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
                <td height="121" width="389"><font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#5e82a7" style="font-size:30px; line-height:40px;">Your profile is incomplete- Complete it today</font></td>
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
          <td width="499">Are you missing out on some interview calls because your recently created profile does not contain some information that recruiters are looking for? This information is important for recruiters when they shortlist candidates. Please login to your current Naukri.com account to make the following changes:</td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td height="25"></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="border:1px solid #dfdfdf;">
<?php if ($this->_tpl_vars['emailNotVerified']): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td><table border="0" cellspacing="0" width="100%" cellpadding="0" style="font-size:13px; color:#787878; font-family:Arial; line-height:25px;">
                    <tr>
                      <td height="10"></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td width="18"></td>
                      <td width="450"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/validatePEmail?alid=<?php echo $this->_tpl_vars['ALID1']; ?>
&email=<?php echo $this->_tpl_vars['email_encrypted']; ?>
&src=M"  target="_blank" style="font-size:13px; text-decoration:none; color:#1e82c1;">Verify your email ID</a></td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="30" width="18"></td>
                      <td width="450" style="line-height:19px; text-align:justify;">You have not verified your email ID, recruiters are more likely to contact you if you have a verified email ID.</td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="10"></td>
                      <td style="border-bottom:1px solid #dcdee0;"><font></font></td>
                      <td></td>
                    </tr>
                  </table></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['noCV']): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td><table border="0" cellspacing="0" width="100%" cellpadding="0" style="font-size:13px; color:#787878; font-family:Arial; line-height:25px;">
                    <tr>
                      <td height="10"></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td width="18"></td>
                      <td width="450"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID2']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/CVD/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
"  target="_blank" style="font-size:13px; text-decoration:none; color:#1e82c1;">Upload your Resume / CV</a></td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="30" width="18"></td>
                      <td width="450" style="line-height:19px; text-align:justify;">For effective and successful job search, we highly recommend that you upload your resume / CV.</td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="10"></td>
                      <td style="border-bottom:1px solid #dcdee0;"><font></font></td>
                      <td></td>
                    </tr>
                  </table></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['mobileError']): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td><table border="0" cellspacing="0" width="100%" cellpadding="0" style="font-size:13px; color:#787878; font-family:Arial; line-height:25px;">
                    <tr>
                      <td height="10"></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td width="18"></td>
                      <td width="450"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID3']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/VM/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
"  target="_blank" style="font-size:13px; text-decoration:none; color:#1e82c1;">Verify your mobile number</a></td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="30" width="18"></td>
                      <td width="450" style="line-height:19px; text-align:justify;">You have not verified your mobile number, recruiters are more likely to contact you if you have a verified mobile number.</td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="10"></td>
                      <td style="border-bottom:1px solid #dcdee0;"><font></font></td>
                      <td></td>
                    </tr>
                  </table></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['experienceNotValid'] || $this->_tpl_vars['eduexpnotspecified'] || compdetailnotspecified): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td><table border="0" cellspacing="0" width="100%" cellpadding="0" style="font-size:13px; color:#787878; font-family:Arial; line-height:25px;">
                    <tr>
                      <td height="10"></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td width="18"></td>
                      <td width="450"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID4']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/BD/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
"  target="_blank" style="font-size:13px; text-decoration:none; color:#1e82c1;">Update your years of Work Experience</a></td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="30" width="18"></td>
                      <td width="450" style="line-height:19px; text-align:justify;">Please review if duration of your work experience has been summarized correctly.</td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="10"></td>
                      <td style="border-bottom:1px solid #dcdee0;"><font></font></td>
                      <td></td>
                    </tr>
                  </table></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['locationOther']): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td><table border="0" cellspacing="0" width="100%" cellpadding="0" style="font-size:13px; color:#787878; font-family:Arial; line-height:25px;">
                    <tr>
                      <td height="10"></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td width="18"></td>
                      <td width="450"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID5']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/BD/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
"  target="_blank" style="font-size:13px; text-decoration:none; color:#1e82c1;">Specify  your Current Location</a></td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="30" width="18"></td>
                      <td width="450" style="line-height:19px; text-align:justify;">Your current location helps recruiters plan the selection process and later while relocating you to their workplace.</td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="10"></td>
                      <td style="border-bottom:1px solid #dcdee0;"><font></font></td>
                      <td></td>
                    </tr>
                  </table></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['keyskillsNotUpdated'] && $this->_tpl_vars['counter'] < 5): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td><table border="0" cellspacing="0" width="100%" cellpadding="0" style="font-size:13px; color:#787878; font-family:Arial; line-height:25px;">
                    <tr>
                      <td height="10"></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td width="18"></td>
                      <td width="450"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID6']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/KS/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
"  target="_blank" style="font-size:13px; text-decoration:none; color:#1e82c1;">Showcase your Keyskills</a></td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="30" width="18"></td>
                      <td width="450" style="line-height:19px; text-align:justify;">While shortlisting the candidates, recruiters pay particular attention to the keyskills that a candidate has specified. So make sure that your keyskills are updated and informative enough.</td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="10"></td>
                      <td style="border-bottom:1px solid #dcdee0;"><font></font></td>
                      <td></td>
                    </tr>
                  </table></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['ougcourseOther'] && $this->_tpl_vars['counter'] < 5): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td><table border="0" cellspacing="0" width="100%" cellpadding="0" style="font-size:13px; color:#787878; font-family:Arial; line-height:25px;">
                    <tr>
                      <td height="10"></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td width="18"></td>
                      <td width="450"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID7']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/EDUD/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
"  target="_blank" style="font-size:13px; text-decoration:none; color:#1e82c1;">Specify your Educational Qualifications</a></td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="30" width="18"></td>
                      <td width="450" style="line-height:19px; text-align:justify;">Currently your under-graduate course is chosen as 'Other'. Update if it is incorrect.</td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="10"></td>
                      <td style="border-bottom:1px solid #dcdee0;"><font></font></td>
                      <td></td>
                    </tr>
                  </table></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['resumeheadlineNone'] && $this->_tpl_vars['counter'] < 5): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td><table border="0" cellspacing="0" width="100%" cellpadding="0" style="font-size:13px; color:#787878; font-family:Arial; line-height:25px;">
                    <tr>
                      <td height="10"></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td width="18"></td>
                      <td width="450"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID8']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/RH/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
"  target="_blank" style="font-size:13px; text-decoration:none; color:#1e82c1;">Improve your Resume Headline</a></td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="30" width="18"></td>
                      <td width="450" style="line-height:19px; text-align:justify;">A good resume headline typically provides information regarding your current employer, educational background, current and / or preferred location and major professional achievements.<br>
                        <font style="font-size:12px; color:#8d8d8d; line-height:16px;"></font></td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="10"></td>
                      <td style="border-bottom:1px solid #dcdee0;"><font></font></td>
                      <td></td>
                    </tr>
                  </table></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['prefLocError'] && $this->_tpl_vars['counter'] < 5): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td><table border="0" cellspacing="0" width="100%" cellpadding="0" style="font-size:13px; color:#787878; font-family:Arial; line-height:25px;">
                    <tr>
                      <td height="10"></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td width="18"></td>
                      <td width="450"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID9']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/PLC/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
"  target="_blank" style="font-size:13px; text-decoration:none; color:#1e82c1;">Specify your Preferred Location</a></td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="30" width="18"></td>
                      <td width="450" style="line-height:19px; text-align:justify;">Your preferred location helps recruiters plan the selection process and later while relocating you to their workplace.</td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="10"></td>
                      <td style="border-bottom:1px solid #dcdee0;"><font></font></td>
                      <td></td>
                    </tr>
                  </table></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['CTCError'] && $this->_tpl_vars['counter'] < 5): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td><table border="0" cellspacing="0" width="100%" cellpadding="0" style="font-size:13px; color:#787878; font-family:Arial; line-height:25px;">
                    <tr>
                      <td height="10"></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td width="18"></td>
                      <td width="450"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID10']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/PLC/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
"  target="_blank" style="font-size:13px; text-decoration:none; color:#1e82c1;">Mention your Salary correctly</a></td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="30" width="18"></td>
                      <td width="450" style="line-height:19px; text-align:justify;">Your correct salary would help both you and recruiters make an informed decision about your expected salary level.</td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="10"></td>
                      <td style="border-bottom:1px solid #dcdee0;"><font></font></td>
                      <td></td>
                    </tr>
                  </table></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['fareaOther'] && $this->_tpl_vars['counter'] < 5): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td><table border="0" cellspacing="0" width="100%" cellpadding="0" style="font-size:13px; color:#787878; font-family:Arial; line-height:25px;">
                    <tr>
                      <td height="10"></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td width="18"></td>
                      <td width="450"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID11']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/ES/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
"  target="_blank" style="font-size:13px; text-decoration:none; color:#1e82c1;">Specify your Functional Area / Department</a></td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="30" width="18"></td>
                      <td width="450" style="line-height:19px; text-align:justify;">Functional area is identified by your department. Please choose a functional area which comes closest to your department, even if not exactly matching.</td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="10"></td>
                      <td style="border-bottom:1px solid #dcdee0;"><font></font></td>
                      <td></td>
                    </tr>
                  </table></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['industryOther'] && $this->_tpl_vars['counter'] < 5): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td><table border="0" cellspacing="0" width="100%" cellpadding="0" style="font-size:13px; color:#787878; font-family:Arial; line-height:25px;">
                    <tr>
                      <td height="10"></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td width="18"></td>
                      <td width="450"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID12']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/ES/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
"  target="_blank" style="font-size:13px; text-decoration:none; color:#1e82c1;">Specify your Industry / Sector</a></td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="30" width="18"></td>
                      <td width="450" style="line-height:19px; text-align:justify;">Industry is the sector of your employer. Please choose an industry which your company falls under. For a conglomerate you may choose the largest vertical / business unit of your company.</td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="10"></td>
                      <td style="border-bottom:1px solid #dcdee0;"><font></font></td>
                      <td></td>
                    </tr>
                  </table></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['roleOthersSpecified'] && $this->_tpl_vars['counter'] < 5): ?>
<?php if ($this->_tpl_vars['counter']++): ?> <?php endif; ?>
              <tr>
                <td><table border="0" cellspacing="0" width="100%" cellpadding="0" style="font-size:13px; color:#787878; font-family:Arial; line-height:25px;">
                    <tr>
                      <td height="10"></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td width="18"></td>
                      <td width="450"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID13']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/ES/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
"  target="_blank" style="font-size:13px; text-decoration:none; color:#1e82c1;">Specify your Role / Job Title</a></td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="30" width="18"></td>
                      <td width="450" style="line-height:19px; text-align:justify;">Pick a role / job title which best describes your current work profile.</td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="10"></td>
                      <td style="border-bottom:1px solid #dcdee0;"><font></font></td>
                      <td></td>
                    </tr>
                  </table></td>
              </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['itSkillsMissing'] && $this->_tpl_vars['counter'] < 5): ?>
              <tr>
                <td><table border="0" cellspacing="0" width="100%" cellpadding="0" style="font-size:13px; color:#787878; font-family:Arial; line-height:25px;">
                    <tr>
                      <td height="10"></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td width="18"></td>
                      <td width="450"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID14']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/ITSKL/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
"  target="_blank" style="font-size:13px; text-decoration:none; color:#1e82c1;">Update your IT Skills</a></td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="30" width="18"></td>
                      <td width="450" style="line-height:19px; text-align:justify;">Review your IT Skills if you have learnt new things.</td>
                      <td width="30"></td>
                    </tr>
                    <tr>
                      <td height="10"></td>
                      <td style="border-bottom:1px solid #dcdee0;"><font></font></td>
                      <td></td>
                    </tr>
                  </table></td>
              </tr>
<?php endif; ?>
              <tr>
                <td height="20"></td>
              </tr>
            </table></td>
          <td></td>
        </tr>
        <tr>
          <td height="45"></td>
          <td width="499"> Recruiters are more likely to contact complete &amp; rich profiles on Naukri<span style="font-size:1px;"> </span>.com.</td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td width="499"><table width="242" border="0" cellspacing="0" cellpadding="0" background="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/butt_cam1.gif" bgcolor="#407ab6">
              <tr>
                <td height="39" align="center" style="font-family:Arial;"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID15']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/PA/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
" target="_blank" style="font-size:15px; text-decoration:none; color:#FFFFFF; height:39px; line-height:39px; display:block;">Make your profile 100% complete</a></td>
              </tr>
            </table></td>
          <td></td>
        </tr>
	<?php if ($this->_tpl_vars['dispFF'] == 1): ?>
		<tr><td colspan="3" height="10"></td></tr>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['mailerTplPath'])."/".($this->_tpl_vars['ffServTpl']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
        <tr>
          <td height="105"></td>
          <td width="499">We wish you good luck in your Job search<br/>
            <br/>
            Thanks &amp; Regards,<br/>
            <font color="#00adef">Naukri</font><font color="#ed1b24">.</font><font color="#006cb7">com</font> Team</td>
          <td></td>
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