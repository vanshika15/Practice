<?php /* Smarty version 2.6.19, created on 2017-05-12 17:56:53
         compiled from /usr/local/apache/htdocs/smarty/templates/mailers/mailer_revamp/rvm_non_premiumStaging.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Naukri Job Alert</title>
</head>
<body>
<table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="border:1px solid #e9e9e9;">
  <tr>
    <td width="20" height="20"></td>
    <td></td>
    <td width="20"></td>
  </tr>
  <tr>
    <td ></td>
    <td align="left"><a href="https://www.naukri.com/" target="_blank"> <img src="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/mr/naukri-logo.gif" alt="Naukri.com" width="200" height="36" border="0"/> </a></td>
    <td></td>
  </tr>
  <tr>
    <td height="18" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td bgcolor="#e9e9e9" background="http://w10.naukri.com/mailers/2012/naukri/newja25jan/images/hline.gif" height="2"></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td height="30"></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td style="font-family:Arial; font-size:12px; color:#191919; line-height:17px;"><strong>Hi Jobseeker </strong> (Login ID: <?php echo $this->_tpl_vars['username']; ?>
), <br /></td>
    <td></td>
  </tr>
  <tr>
    <td height="18" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td><table width="560" cellspacing="0" cellpadding="0" style="border:2px solid #e8e8e8;">
        <tr>
          <td align="center" width="60" height="50" bgcolor="#778699" style="color:#ffffff;font-size:45px;font-family:Arial;"><?php echo $this->_tpl_vars['totalActivity']; ?>
</td>
          <td bgcolor="#f1f1f1" style="font-family:Arial; font-size:15px; color:#191919; line-height:17px;">&nbsp;&nbsp;time(s) recruiters viewed or expressed interest in your Naukri profile in the &nbsp;&nbsp;last 3 days.</td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <tr>
    <td height="30" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="150" height="25" align="center" bgcolor="#FDE25E" style="border:solid 1px #ffc21f; text-align:center;"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/viewProfilePerformance?alid=<?php echo $this->_tpl_vars['ALID']; ?>
&<?php echo $this->_tpl_vars['GAPARAM']; ?>
" style="font-family:Arial; color:#000000; text-decoration:none; padding:4px 0px 4px 0px; font-size:12px; display:block; color:black !important;"><strong>View details</strong></a></td>
          <td width="9" align="left"></td>
          <td width="360" align="left" style="font-size:11px;font-family:Arial;color:#727272;"><font face="Tahoma">(Note: This link will be functional for 72 hours and can only be used once.) </font></td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <tr>
    <td height="35" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="3" style="font-family:Arial;font-size:13px; color:#191919;"><strong>Your current profile information as seen by recruiters:</strong></td>
    <td></td>
  </tr>
  <tr>
    <td height="4" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td bgcolor="#e9e9e9" background="http://w10.naukri.com/mailers/2012/naukri/newja25jan/images/hline.gif" height="2"></td>
    <td></td>
  </tr>
  <tr>
    <td height="5" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td><table width="560" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial; font-size:12px; color:#191919; line-height:17px;">
        <tr>
          <td width="150"></td>
          <td width="20"></td>
          <td width="390"></td>
        </tr>
        <tr>
          <td align="left" valign="top">Key skills </td>
          <td align="center" valign="top">:</td>
          <?php if (! empty ( $this->_tpl_vars['KEYWORDS'] )): ?>
          <td align="left" valign="top"><?php echo $this->_tpl_vars['KEYWORDS']; ?>
</td>
          <?php else: ?>
          <td align="left" valign="top"><span style="color:#F00;">Not Mentioned</span></td>
          <?php endif; ?> </tr>
        <tr>
          <td align="left" valign="top">Experience <font color="#949494">|</font> CTC</td>
          <td align="center" valign="top">:</td>
          <td align="left" valign="top"> <?php if ($this->_tpl_vars['TOTAL_EXP'] != '' && $this->_tpl_vars['TOTAL_EXP'] != 'Not Mentioned'): ?> <?php echo $this->_tpl_vars['TOTAL_EXP']; ?>
 <?php else: ?> <span style="color:#F00;">Not Mentioned</span><?php endif; ?> <font color="#949494">|</font> <?php if ($this->_tpl_vars['CTC'] != '' && $this->_tpl_vars['CTC'] != 'Not Mentioned'): ?> <?php if ($this->_tpl_vars['CTC_TYPE'] != 'U'): ?> <span class="WebRupee"> &#x20B9;</span> <?php else: ?>(USD)  <?php endif; ?> <?php echo $this->_tpl_vars['CTC']; ?>
  <?php else: ?> <span style="color:#F00;">Not Mentioned</span><?php endif; ?></td>
        </tr>
        <tr>
          <td align="left" valign="top">Current Location</td>
          <td align="center" valign="top">:</td>
          <?php if (! empty ( $this->_tpl_vars['CITY'] )): ?>
          <td align="left" valign="top"><?php echo $this->_tpl_vars['CITY']; ?>
</td>
          <?php else: ?>
          <td align="left" valign="top"><span style="color:#F00;">Not Mentioned</span></td>
          <?php endif; ?> </tr>
        <tr>
          <td align="left" valign="top">Preferred Location</td>
          <td align="center" valign="top">:</td>
          <?php if (empty ( $this->_tpl_vars['LOC_PREF'] )): ?>
          <td align="left" valign="top"><span></span><span style="color:#F00;">Not Mentioned</span></td>
          <?php else: ?>
          <td align="left" valign="top"><span><?php echo $this->_tpl_vars['LOC_PREF']; ?>
</span></td>
          <?php endif; ?> </tr>
        <tr>
          <td align="left" valign="top">Functional Area</td>
          <td align="center" valign="top">:</td>
          <?php if (empty ( $this->_tpl_vars['FAREA'] )): ?>
          <td align="left" valign="top"><span style="color:#F00;">Not Mentioned</span></td>
          <?php else: ?>
          <td align="left" valign="top"><?php echo $this->_tpl_vars['FAREA']; ?>
</td>
          <?php endif; ?> </tr>
        <tr>
          <td align="left" valign="top">Role</td>
          <td align="center" valign="top">:</td>
          <?php if (empty ( $this->_tpl_vars['ROLE'] )): ?>
          <td align="left" valign="top"><span style="color:#F00;">Not Mentioned</span></td>
          <?php else: ?>
          <td align="left" valign="top"><?php echo $this->_tpl_vars['ROLE']; ?>
</td>
          <?php endif; ?> </tr>
        <tr>
          <td align="left" valign="top">Moblie</td>
          <td align="center" valign="top">:</td>
          <?php if (empty ( $this->_tpl_vars['MPHONE'] )): ?>
          <td align="left" valign="top"><span style="color:#F00;">Not Mentioned</span></td>
          <?php else: ?>
          <td align="left" valign="top"><?php echo $this->_tpl_vars['MPHONE']; ?>
  
            <?php if ($this->_tpl_vars['MPHONE'] && $this->_tpl_vars['MPHONE'] != '' && $this->_tpl_vars['MVERIFY'] != 1 && ISINTERNATIONAL != 1): ?> <span style="color:#F00;">(Not Verified)</span>. <a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/MobileVerify?alid=<?php echo $this->_tpl_vars['ALID']; ?>
&<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=verifymobilelink" target="_blank" style="text-decoration:none; font-size:12px; font-family:Arial;"><strong>Verify Now</strong></a> <?php endif; ?> </td>
          <?php endif; ?> </tr>
      </table></td>
    <td></td>
  </tr>
  <tr>
    <td height="20" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td style="font-family:Arial; font-size:12px; color:#191919;">Your last update was <strong> <?php echo $this->_tpl_vars['MOD_DT']; ?>
 ago.</strong> Please note, employers view recently updated profiles first. </td>
    <td></td>
  </tr>
  <tr>
    <td height="10" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="150" height="25" align="center" bgcolor="#FDE25E" style="border:solid 1px #ffc21f; text-align:center;"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/jamxUpdate?alid=<?php echo $this->_tpl_vars['ALID']; ?>
&<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=updateprofilelink" style="font-family:Arial; color:#000000; text-decoration:none; padding:4px 0px 4px 0px; font-size:12px; display:block; color:black !important;"><strong>Update your profile now</strong></a></td>
          <td width="9" align="left"></td>
          <td width="150" align="left"><font face="Tahoma"><a href="https://login.naukri.com/nLogin/forgotpass.php?<?php echo $this->_tpl_vars['GAPARAM']; ?>
" target="_blank" style="color:#0168ad;text-decoration:none; font-size:11px;">Forgot your Password?</a></font></td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <tr>
    <td height="20" colspan="3"></td>
  </tr>
  <tr>
    <td height="20" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td><table width="560" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial;">
        <tr>
          <td style="font-size:12px; color:#474a4b;">You can now login to your account using your e-mail id as well.<br />
            <br />
            Regards,<br />
            <strong><span style="color:#189BD6;">Naukri</span><span style="color:#DF292A;">.</span><span style="color:#1169AC;">com</span></strong> team</td>
        </tr>
        <tr>
          <td height="20"></td>
        </tr>
      </table></td>
    <td></td>
  </tr>

  <tr>
      <td></td>
<?php if (! empty ( $this->_tpl_vars['TLINK'] )): ?>
      <td><table width="560" border="0" cellspacing="0" cellpadding="0" >
         <tr>
          <td></td>
          <td bgcolor="#e9e9e9" width="555" background="http://w10.naukri.com/mailers/2012/naukri/newja25jan/images/hline.gif" height="2"></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="3" height="20"></td>
        </tr>
        <tr>
          <td colspan="3" style="font-family:Arial; font-size: 13px;">Suggested Courses (It is a paid service)</td>
        </tr>
        <tr>
          <td colspan="3" height="3"></td>
        </tr>
         <tr>
          <td colspan="3" style="font-family:Arial; font-size: 13px;"><a href="<?php echo $this->_tpl_vars['TLINK']->landingURL; ?>
"><?php echo $this->_tpl_vars['TLINK']->textLink; ?>
</a></td>
        </tr>
        <tr>
          <td colspan="3" height="12"></td>
        </tr>
<?php if (! empty ( $this->_tpl_vars['TLINK']->courses )): ?>
        <tr>
          <td colspan="3" style="font-family:Arial; font-size: 12px;">Add these skills to take advantage</td>
        </tr>        
         <tr>
          <td colspan="3" height="20"></td>
        </tr>
         <tr>
          <td colspan="3"><ul style="float:left; list-style-type: none; margin: 0px; padding: 0px;">
<?php if (! empty ( $this->_tpl_vars['TLINK'] ['courses'][0])): ?>
            <li style="float: left; padding:5px 10px; margin-right:10px; background-color: #f1f1f1; border: 1px solid #e8e8e8; font-family:Arial;"><a href=""></a></li>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['TLINK'] ['courses'][1])): ?>
            <li style="float: left; padding:5px 10px; margin-right:10px; background-color: #f1f1f1; border: 1px solid #e8e8e8; font-family:Arial;"><a href=""></a></li>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['TLINK'] ['courses'][2])): ?>
            <li style="float: left; padding:5px 10px; margin-right:10px; background-color: #f1f1f1; border: 1px solid #e8e8e8; font-family:Arial;"><a href=""></a></li>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['TLINK'] ['courses'][3])): ?>
            <li style="float: left; padding:5px 10px; margin-right:10px; background-color: #f1f1f1; border: 1px solid #e8e8e8; font-family:Arial;"><a href=""></a></li>
<?php endif; ?>
          </ul></td>
        </tr>
<?php endif; ?>
         <tr>
          <td colspan="3" height="20"></td>
        </tr>
        <tr>
          <td></td>
          <td bgcolor="#e9e9e9" width="555" background="http://w10.naukri.com/mailers/2012/naukri/newja25jan/images/hline.gif" height="2"></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="3" height="20"></td>
        </tr>
      </table></td>
<?php endif; ?>
      <td></td>
  </tr>

  <tr>
    <td></td>
    <td><table width="560" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial;">
        <tr>
          <td width="380" style="color:#191919;font-size:12px;"><strong><a href="https://resume.naukri.com/cv-for-freshers-entry-level?fftid=700011" style="color:#006fa7;text-decoration:none;">Apply for your next job with an effective CV that gets you noticed.</a></strong></td>
          <td align="right" style="color::#474A4B;font-size:12px;" valign="bottom">Join us on</td>
        </tr>
        <tr>
          <td style="color:#191919;font-size:12px;">Call<strong> 1800-102-5557</strong> (toll free) now!</td>
          <td align="right" width="180" style="font-family:Arial, Helvetica, sans-serif; color:#444; font-size:12px; padding:12px 0 0"><a href="https://www.facebook.com/Naukri" style="color:#5268a1; font-size:11px; text-decoration:none"> <img border="0" src="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/mr/fb-icon.gif" alt="" style="vertical-align:bottom" vspace="0" hspace="1" />  Facebook </a> &amp; <a href="https://twitter.com/#!/naukri" style="color:#70adb0; font-size:11px; text-decoration:none"> <img border="0" src="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/mr/twitter-icon.gif" alt="" vspace="0" hspace="1" style="vertical-align:bottom" /> Twitter </a></td>
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
    <td style="font-family:Arial; font-size:11px; color:#9d9d9d"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/Mailers/edit?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=footer&mail_cat=UP2" target="_blank" style="text-decoration:none; color:#1e82c1;">Unsubscribe</a> &nbsp;| &nbsp; <a href="http://w5.naukri.com/fdbck/main/feedback.php?app_id=15&id=" target="_blank" style="text-decoration:none; color:#1e82c1;">Report a problem</a></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3" height="12"></td>
  </tr>
  <tr>
    <td></td>
    <td style="font-family:Arial; font-size:11px; color:#9d9d9d;">You are receiving this mailer because you or someone else has used your e-mail ID to register with us. This is a system-generated e-mail,please don't reply to this message. We recommend that you visit our <a href="<?php echo $this->_tpl_vars['arrPaths']['TCURL']; ?>
" target="_blank" style="text-decoration:none; color:#1e82c1;">Terms &amp; Conditions</a> and the <a href="<?php echo $this->_tpl_vars['arrPaths']['FAQURL']; ?>
?pgid=9&<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=footer" target="_blank" style="text-decoration:none; color:#1e82c1;">Security Advice</a>for more comprehensive information</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3" height="13"></td>
  </tr>
</table>
<tr>
  <td height="13"><img height="0" width="0" src="<?php echo $this->_tpl_vars['arrPaths']['MAIL_TRACK_URL']; ?>
<?php echo $this->_tpl_vars['MID']; ?>
" style="display:none" /></td>
</tr>
</body>
</html>