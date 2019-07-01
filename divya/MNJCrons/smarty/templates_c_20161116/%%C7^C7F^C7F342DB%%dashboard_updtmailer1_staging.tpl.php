<?php /* Smarty version 2.6.19, created on 2016-08-23 09:06:02
         compiled from ./dashboard/dashboard_updtmailer1_staging.tpl */ ?>
<html>
<head>
<title>Naukri Job Alert</title>
</head>
<body>
<img src="<?php echo $this->_tpl_vars['EmTrack_Path']; ?>
" height="0" width="0" style="display:none" />
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" align="left"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="83" colspan="2" valign="bottom" bgcolor="#065688"><table width="592" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td width="375" height="61" valign="top" align="left" style="padding-left:10px; line-height:20px; width:350px;"><div style="font-family:ms sans serif, tahoma, arial ; font-size:14px; color:#FFFFFF; text-align:left; padding-left:10px; line-height:20px; width:350px;"><strong><a href="https://my.naukri.com/AL/fmark/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/mailersource/<?php echo $this->_tpl_vars['mailersource']; ?>
" target="_blank" style="color:#ffffff; text-decoration:none; font-size:16px;">Complete Your Profile</a></strong><br>
<strong>and get contacted by top companies</strong></div></td>
                <td width="214" align="center" valign="middle" bgcolor="#FDFDFD"><table width="175" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="24"><a href="https://www.naukri.com/" 

target="_blank"><img

src="http://w10.naukri.com/mailers/template_revamp/job_mess/images/logo_curve_new.gif" 

alt="Naukri.com" width="22" height="27" border="0" /></a></td>
                      <td width="167" align="center" valign="top" style="font-family:Verdana, Arial; line-height:19px; padding-top:8px;"><a href="https://www.naukri.com/" target="_blank" style="text-decoration:none;"><strong><span style="font-size:24px; color:#01abef;">naukri<span style="color:#ec1822;">.</span><span

style="color:#006cb7;">com</span></span></strong></a><br />
                        <a href="https://www.naukri.com/" target="_blank" 

style="text-decoration:none;"><span style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:9px; color:#3d3d3d;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; India's No.1 Job Site</span></a></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td colspan="2" style="padding:10px 12px 0px 12px; line-height:19px; font-size:11px;"><font face="Verdana, Arial, Helvetica, sans-serif" color="#434343">
          <strong>Dear <?php if ($this->_tpl_vars['NAME'] != ""): ?> <?php echo $this->_tpl_vars['NAME']; ?>
<?php else: ?>Jobseeker<?php endif; ?>,</strong><br />
            Your profile has been created on naukri.com. But, <font color="#cc0000">top companies cannot contact you since your profile is incomplete</font>. Please <a href="https://my.naukri.com/AL/fmark/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/mailersource/<?php echo $this->_tpl_vars['mailersource']; ?>
" style="color:#006eb3;" target="_blank">complete your profile</a> now to get the most relevant job offers. Moreover, when you apply to jobs on naukri.com, recruiters will receive an incomplete profile. This will reduce your chances of getting short-listed.</font></td>
        </tr>
        <tr>
          <td colspan="2" height="25"></td>
        </tr>
        <tr>
          <td colspan="2"><table width="580" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#f2f6fd">
              <tr>
                <td height="2" colspan="5" bgcolor="#bdd0f2"></td>
              </tr>
              <tr><td height="12" width="24"></td><td width="145"></td><td width="26"></td><td></td><td width="24"></td></tr>
              <tr>
              	<td></td>
                <td colspan="3"><font face="Verdana, Arial" color="#1a1a1a" style="font-size:12px;"><strong>Current information in your profile:</strong></font></td>
                <td></td>
              </tr>
              <tr><td height="12"></td><td></td><td></td><td></td><td></td></tr>
			  <tr><td></td><td><font face="Verdana, Arial" color="#636363" style="font-size:11px;">Current Location</font></td>
			  <td><font face="Verdana, Arial" color="#636363" style="font-size:11px;">:</font></td><td><font face="Verdana, Arial" color="#1a1a1a" style="font-size:11px;"><?php if ($this->_tpl_vars['CITY'] != ""): ?><?php echo $this->_tpl_vars['CITY']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></font></td>
			  <td></td></tr>
			  <tr><td height="12"></td><td></td><td></td><td></td><td></td></tr>
			  <tr><td></td><td><font face="Verdana, Arial" color="#636363" style="font-size:11px;">Mobile</font></td>
			  <td><font face="Verdana, Arial" color="#636363" style="font-size:11px;">:</font></td><td><font face="Verdana, Arial" color="#1a1a1a" style="font-size:11px;"><?php if ($this->_tpl_vars['MPHONE'] != ""): ?><?php echo $this->_tpl_vars['MPHONE']; ?>
<?php else: ?> Not Mentioned<?php endif; ?></font></td>
			  <td></td></tr>
			  <tr><td height="12"></td><td></td><td></td><td></td><td></td></tr>
			  <tr><td></td><td><font face="Verdana, Arial" color="#636363" style="font-size:11px;">Total Experience</font></td>
			  <td><font face="Verdana, Arial" color="#636363" style="font-size:11px;">:</font></td>
			  <td><font face="Verdana, Arial" color="#1a1a1a" style="font-size:11px;"><?php if ($this->_tpl_vars['totalexp'] != ""): ?><?php echo $this->_tpl_vars['totalexp']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></font></td>
			  <td></td></tr>
			  <tr><td height="12"></td><td></td><td></td><td></td><td></td></tr>
			  <tr><td></td><td><font face="Verdana, Arial" color="#636363" style="font-size:11px;">Current Industry</font></td>
			  <td><font face="Verdana, Arial" color="#636363" style="font-size:11px;">:</font></td><td><font face="Verdana, Arial" color="#1a1a1a" style="font-size:11px;"><?php if ($this->_tpl_vars['INDTYPE'] != ""): ?> <?php echo $this->_tpl_vars['INDTYPE']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></font></td>
			  <td></td></tr>
			  <tr><td height="12"></td><td></td><td></td><td></td><td></td></tr>
			  <tr><td></td><td><font face="Verdana, Arial" color="#636363" style="font-size:11px;">Functional Area</font></td>
			  <td><font face="Verdana, Arial" color="#636363" style="font-size:11px;">:</font></td><td><font face="Verdana, Arial" color="#1a1a1a" style="font-size:11px;"><?php if ($this->_tpl_vars['FAREA'] != ""): ?> <?php echo $this->_tpl_vars['FAREA']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></font></td>
			  <td></td></tr>
              <tr><td height="30"></td><td></td><td></td><td></td><td></td></tr>
              <tr>
              	<td></td>
                <td colspan="3"><font face="Verdana, Arial" color="#cc0000" style="font-size:12px;"><strong>Missing information in your profile:</strong></font></td>
                <td></td>
              </tr>
              
              <tr><td height="12"></td><td></td><td></td><td></td><td></td></tr>
              <tr>
                <td></td>
                <td><font face="Verdana, Arial" color="#636363" style="font-size:11px;">Education Details</font></td>
                <td><font face="Verdana, Arial" color="#636363" style="font-size:11px;">:</font></td>
                <td><font face="Verdana, Arial" color="#cc0000" style="font-size:11px;">Not Mentioned</font></td>
                <td></td>
              </tr>
              <tr><td height="12"></td><td></td><td></td><td></td><td></td></tr>
			  <tr><td></td><td><font face="Verdana, Arial" color="#636363" style="font-size:11px;">Company Name</font></td>
			  <td><font face="Verdana, Arial" color="#636363" style="font-size:11px;">:</font></td><td><font face="Verdana, Arial" color="#cc0000" style="font-size:11px;">Not Mentioned</font></td>
			  <td></td></tr>
			  <tr><td height="12"></td><td></td><td></td><td></td><td></td></tr>
			  <tr><td></td><td><font face="Verdana, Arial" color="#636363" style="font-size:11px;">Designation</font></td>
			  <td><font face="Verdana, Arial" color="#636363" style="font-size:11px;">:</font></td><td><font face="Verdana, Arial" color="#cc0000" style="font-size:11px;">Not Mentioned</font></td>
			  <td></td></tr>
			  <tr><td height="12"></td><td></td><td></td><td></td><td></td></tr>
			  <tr><td></td><td><font face="Verdana, Arial" color="#636363" style="font-size:11px;">Job Profile</font></td>
			  <td><font face="Verdana, Arial" color="#636363" style="font-size:11px;">:</font></td>
			  <td><font face="Verdana, Arial" color="#cc0000" style="font-size:11px;">Not Mentioned</font></td>
			  <td></td></tr>
			  <tr><td height="25"></td><td></td><td></td><td></td><td></td></tr>
              <tr>
                <td></td>
                <td colspan="3"><table width="215" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="215" height="25" align="center" bgcolor="#FDE25E" style="border:solid 1px #ffc21f; text-align:center;"><a href="https://my.naukri.com/AL/fmark/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/mailersource/<?php echo $this->_tpl_vars['mailersource']; ?>
" style="font-family:Verdana, Arial; color:#000000; text-decoration:none; padding:4px 0px 4px 0px; font-size:12px; display:block;"><strong>Complete Your Profile Now</strong></a></td>
                          </tr>
                        </table></td>
                <td></td>
              </tr>
              <tr><td height="27"></td><td></td><td></td><td></td><td></td></tr>
          </table></td>
        </tr>
        <tr>
          <td colspan="2"><table width="580" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="5" bgcolor="#bdd0f2"></td>
              </tr>
            </table></td>
        </tr>
              <tr><td height="16" colspan="2"></td></tr>
              <tr><td colspan="2" style="padding:0px 0px 0px 10px; line-height:19px; font-size:11px;"><font face="Verdana, Arial, Helvetica, sans-serif" color="#434343">Regards,<br />
                  <strong><span style="color:#189BD6;">Naukri</span><span style="color:#DF292A;">.</span><span style="color:#1169AC;">com</span></strong> Team</font></td></tr>
                  </table>
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" color="#dddddd"><a href="https://w5.naukri.com/fdbck/main/feedback.php?app_id=15" target="_blank" style="color:#006eb3; text-decoration:underline; font-size:11px;">Report a problem</a></font></td>
        </tr>
        <tr>
          <td height="15"></td>
        </tr>
        <tr>
          <td align="center" valign="top"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#9d9d9d">This is a Computer-generated email, please do not reply to this message.</font></td>
        </tr>
        <tr>
          <td align="center" height="10"></td>
        </tr>
        <tr>
          <td style="font-family:Verdana, Arial, Helvetica, sans-serif; color:#666; font-size:10px; padding:0 28px;">You have received this mail because you are a member of Naukri.com. You can <a href="<?php echo $this->_tpl_vars['UNSUBSCRIBE_URL']; ?>
" target="_blank" style="color:#006eb3; font-size:11px; text-decoration:underline;">unsubscribe</a> from this mailer or other mails after logging in to your account.</td>
        </tr>
        <tr>
          <td height="16"></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>