<?php /* Smarty version 2.6.19, created on 2011-07-16 03:03:40
         compiled from ./mailers/critical_action/criticalActionMailer.tpl */ ?>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="border:solid 1px #CCCCCC; text-align:left;">
<tr><td><img src="http://static.naukimg.com/mynauk/images/jobs-india.gif" width="251" height="56" /></td></tr><tr> <td style="padding:30px 20px 15px 25px;" align="justify"><div style="font-family:Verdana, Arial; font-size:11px; color:#000000; line-height:16px;"><strong style="font-size:12px;">Dear <?php echo $this->_tpl_vars['salutation']; ?>
 </strong><br />
<br />You are missing out on some interview calls because your recently created profile does not contain some critical information. This information is important for recruiters when they shortlist candidates. Please login to your current Naukri.com account to make the following changes:<br /><br />(Clicking on any of the links below will log you in automatically the first time. The links will expire in the next 72 hours)<br /><ol>
 <?php if ($this->_tpl_vars['noCV']): ?>  
    <li style="padding:0px 0px 15px 0px;">You have not uploaded your resume document. Recruiters want to look at it before they can shortlist you. <a href="<?php echo $this->_tpl_vars['baseURL']; ?>
/AL/criticalMailer/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/msrc/CVD" target="_blank" style="color:#055cac; text-decoration:underline;"><strong>Upload your resume document now.</strong></a></li><?php endif; ?> <?php if ($this->_tpl_vars['mobileError']): ?><li style="padding:0px 0px 15px 0px;">Your mobile number is not verified. <a href="<?php echo $this->_tpl_vars['baseURL']; ?>
/AL/criticalMailer/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/msrc/VM" target="_blank" style="color:#055cac; text-decoration:underline;"><strong>Verify your mobile number now.</strong></a><br />
  <span style="color:#767676; font-size:10px; line-height:14px;">(An un-verified mobile number is not considered credible by recruiters. Recruiters prefer to contact candidates with verified numbers)<br /></span><?php endif; ?> <?php if ($this->_tpl_vars['emailNotVerified']): ?><li style="padding:0px 0px 15px 0px;">You have not verified your email address yet. <a href="<?php echo $this->_tpl_vars['baseURL']; ?>
/AL/validatePEmail?alid=<?php echo $this->_tpl_vars['ALID']; ?>
&email=<?php echo $this->_tpl_vars['email_encrypted']; ?>
&src=M" target="_blank" style="color:#055cac; text-decoration:underline;"><strong>Verify your email address now.</strong></a><br /><span style="color:#767676; font-size:10px; line-height:14px;">(A verified email address assures the recruiters that it is genuine, so candidates with verified e-mail IDs get more interview calls)</span></li><?php endif; ?> <?php if ($this->_tpl_vars['CTCError']): ?> <li style="padding:0px 0px 15px 0px;"><a href="<?php echo $this->_tpl_vars['baseURL']; ?>
/AL/criticalMailer/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/msrc/ES" target="_blank" style="color:#055cac; text-decoration:underline;"><strong>Enter your current salary</strong></a> to get the most relevant job offers.<br /> <span style="color:#767676; font-size:10px; line-height:14px;">(A few recruiters suspect that you may have entered an incorrect salary. This means that you will receive irrelevant job recommendations.)</span></li><?php endif; ?> <?php if ($this->_tpl_vars['fareaOther']): ?>  <li style="padding:0px 0px 15px 0px;"><a href="<?php echo $this->_tpl_vars['baseURL']; ?>
/AL/criticalMailer/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/msrc/ES" target="_blank" style="color:#055cac; text-decoration:underline;"><strong>Select the appropriate Functional Area</strong></a> in your profile to increase your chances of getting shortlisted. You have currently selected 'Others'<br /><span style="color:#767676; font-size:10px; line-height:14px;">(If you don't find the exact Functional Area then select the one that is closest)</span></li><?php endif; ?> 
  <?php if ($this->_tpl_vars['industryOther']): ?> <li style="padding:0px 0px 15px 0px;"><a href="<?php echo $this->_tpl_vars['baseURL']; ?>
/AL/criticalMailer/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/msrc/ES" target="_blank" style="color:#055cac; text-decoration:underline;"><strong>Select the appropriate Industry</strong></a> in your profile to increase your chances of getting shortlisted. You have currently selected 'Others'<br /><span style="color:#767676; font-size:10px; line-height:14px;">(If you don't find the exact Industry then select the one that is closest)<br /></span></li>  <?php endif; ?> <?php if ($this->_tpl_vars['roleOthersSpecified']): ?> <li style="padding:0px 0px 15px 0px;"><a href="<?php echo $this->_tpl_vars['baseURL']; ?>
/AL/criticalMailer/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/msrc/ES" target="_blank" style="color:#055cac; text-decoration:underline;"><strong>Select the appropriate Role</strong></a> in your profile to get relevant Job Alerts. You have currently selected 'Others’ .<br /> <span style="color:#767676; font-size:10px; line-height:14px;">(Select a role that reflects your nature of work most appropriately. If you don't find the exact Role then select the one that is closest)</span></li><?php endif; ?>
<?php if ($this->_tpl_vars['experienceNotValid']): ?>  <li style="padding:0px 0px 15px 0px;">It appears you have incorrectly entered your years of work experience. Please check, and <a href="<?php echo $this->_tpl_vars['baseURL']; ?>
/AL/criticalMailer/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/msrc/ES" target="_blank" style="color:#055cac; text-decoration:underline;"><strong>correct the number of years of work experience.</strong></a></span></li><?php endif; ?><?php if ($this->_tpl_vars['prefLocError']): ?>    <li style="padding:0px 0px 15px 0px;"><a href="<?php echo $this->_tpl_vars['baseURL']; ?>
/AL/criticalMailer/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/msrc/DJ" target="_blank" style="color:#055cac; text-decoration:underline;"><strong>Mention the Top 3 locations</strong></a> that you prefer to work in.<br /> <span style="color:#767676; font-size:10px; line-height:14px;">
(There would be certain locations that you would most prefer to work in or relocate to. Recruiters consider this information important. So make sure you mention your 3 Preferred Locations)</span></li><?php endif; ?> <?php if ($this->_tpl_vars['eduexpnotspecified']): ?>  <li style="padding:0px 0px 15px 0px;">There is a time-gap between your first job and when you completed your last education. Please check, you may want to add/edit your <a href="<?php echo $this->_tpl_vars['baseURL']; ?>
/AL/criticalMailer/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/msrc/EDUD" target="_blank" style="color:#055cac; text-decoration:underline;"><strong>education qualification</strong></a> or <a href="<?php echo $this->_tpl_vars['baseURL']; ?>
/AL/criticalMailer/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/msrc/EMPD" target="_blank" style="color:#055cac; text-decoration:underline;"><strong>employment details.</strong></a></li><?php endif; ?> <?php if ($this->_tpl_vars['compdetailnotspecified']): ?>   <li style="padding:0px 0px 15px 0px;">Your work experience details are not complete. <a href="<?php echo $this->_tpl_vars['baseURL']; ?>
/AL/criticalMailer/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/msrc/EMPD" target="_blank" style="color:#055cac; text-decoration:underline;"><strong>Mention your current company / designation and job profile details</strong></a> to complete the same.</li> <?php endif; ?></ol>
  We look forward to you completing this information so that you can get the right job at the earliest. We wish you all the best in your job search.<br /><br />
<div style="font-family:Verdana, Arial; font-size:12px; line-height:23px; color:#000000;">Regards,<br />
<strong><font color="#189BD6">Naukri</font><font color="#DF292A">.</font><font color="#1169AC">com</font></strong> Team <br /> <br /></div>This is  system generated mail. Please do not reply to this e-mail. To update the missing information on your profile, please click on any of the links above to login to your account. <br /><br />Do you think someone else created this account on your behalf? <a href="http://w5.naukri.com/fdbck/main/feedback.php?app_id=15" target=\"_blank\">Click here to report</a>. </div>
</td> </tr>
<tr>
<td height="10"><img height="0" width="0" src="<?php echo $this->_tpl_vars['mailOpenTrackUrl']; ?>
" style="display:none" /></td>
</tr>
</table>