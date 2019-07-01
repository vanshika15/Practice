<?php /* Smarty version 2.6.19, created on 2012-08-29 00:19:23
         compiled from ./dashboard/dashboard_cron_updatemailer_common.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Tdashboard_cron_updatemailer_common.tplransitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>6 months Old</title> 
</head>  
<body> 
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="text-align:left;"> 
  <tr> 
    <td height="74" valign="bottom" bgcolor="#065688"><table width="592" border="0" align="left" cellpadding="0" cellspacing="0"> 
        <tr> 
          <td width="375" height="61"><table width="350" border="0" align="center" cellpadding="0" cellspacing="0" style="text-align:left;"> 
              <tr> 
                <?php if ($this->_tpl_vars['MONTH_COUNT'] >= 3 && $this->_tpl_vars['MONTH_COUNT'] < 12): ?>
                <td><font face="Georgia, Times New Roman, Arial" color="#FFFFFF" size="2"><strong>It's been long since we heard from 
you...</strong></font></td> 
                <?php else: ?>
              <td><font face="Georgia, Times New Roman, Arial" color="#FFFFFF" size="2"><strong>It's been more than a year since we heard from you...</strong></font></td>
               <?php endif; ?>

              </tr> 
            </table></td> 
          <td width="217" align="center" valign="middle" bgcolor="#FDFDFD"><table width="175" border="0" align="center" cellpadding="0" cellspacing="0"> 
              <tr> 
                <td width="24"><a href="http://www.naukri.com/" target="_blank"><img 
src="http://w10.naukri.com/mailers/template_revamp/recruiter/job_apply/images/logo_curve_new.gif" alt="Naukri.com" width="22" height="27" border="0"></a></td> 
                <td width="167" align="center" valign="top" style="line-height:19px; padding-top:8px;"><a href="http://www.naukri.com/" target="_blank" 
style="text-decoration:none; font-family:Verdana, Arial;"><strong><span style="font-size:24px; color:#01abef;">naukri<span style="color:#ec1822;">.</span><span 
style="color:#006cb7;">com</span></span></strong></a><br> 
                  <a href="http://www.naukri.com/" target="_blank" style="text-decoration:none;"><span style="font-family:Verdana, Arial, Helvetica, 
sans-serif; font-size:9px; color:#3d3d3d; text-align:right;"> &nbsp; &nbsp; &nbsp; &nbsp; India's No.1 Job Site </span></a></td> 
              </tr> 
            </table></td> 
        </tr> 
      </table></td> 
  </tr> 
  <tr><td height="22"></td></tr> 
  <tr> 
    <td><table width="600" border="0" cellspacing="0" cellpadding="0"> 
        <tr> 
          <td width="20"></td> 

          <?php if ($this->_tpl_vars['MONTH_COUNT'] >= 3 && $this->_tpl_vars['MONTH_COUNT'] < 12): ?>
          <td height="60"><font face="Georgia, Times New Roman, Arial" color="#3c3c3c" size="4">...and we thought it's time you paid some attention to your resume.</font></td> 
          <?php else: ?>
         <td height="60"><font face="Georgia, Times New Roman, Arial" color="#3c3c3c" size="4">...and we thought its time you said hello to your own resume.</font></td> 
        <?php endif; ?>

        <td width="20"></td> 
        </tr> 
        <tr><td height="18"></td><td></td><td></td></tr> 
        <tr> 
          <td></td> 
        <?php if ($this->_tpl_vars['MONTH_COUNT'] >= 3 && $this->_tpl_vars['MONTH_COUNT'] < 12): ?>
        <td style="font-size:11px; line-height:17px;"><font face="Verdana, Arial, Helvetica" color="#727171">You may not be looking for jobs but there are 
employers looking for you. That is why your resume is not meant to be updated only when you are looking out for a new job.<br> 
<br> 
We are sure in this time you have learnt new skills, or attended trainings &amp; conferences, or completed new projects. Your resume is the most important 
place to record this - not just because it will attract better job opportunities, but also because it gives you a sense of continuous professional growth.<br> 
<br> 
Everyday thousands of professionals with a profile similar to yours update their resume on Naukri. So why should you be left behind?<br> 
    <br>

    <?php else: ?>
<td style="font-size:11px; line-height:17px;"><font face="Verdana, Arial, Helvetica" color="#727171">There are employers searching for candidates like you 
whether or not you are looking for a job change. That is why your resume is not meant to be updated only when you are looking out for a new job.<br />
<br />
Every year you learn new skills, attend trainings &amp; conferences, and take up new responsibilities. Your online resume is the most important place to note 
all this down - not just because it will attract better job opportunities, but also because it gives you a sense of continuous professional growth. That's why 
we recommend that you update your resume once every 6 months.<br />
<br />
Everyday thousands of professionals with a profile similar to yours update their resume on Naukri. So why should you be left behind?<br />
 <br />

 <?php endif; ?>
 <strong>Unsure of what needs to be updated on your resume? Let Naukri experts take over. <strong><a href="http://resume.naukri.com/resume-writing-services?fftid=700009">Click here</a><strong> to know more.</strong>
 <br /><br /><br />

    <strong><font color="#565656">Your Experience Summary <?php echo $this->_tpl_vars['MONTH_COUNT']; ?>
 Month ago</font></strong></font></td> 
          <td></td> 
        </tr> 
        <tr><td height="13"></td><td></td><td></td></tr> 
	</table></td></tr> 
  <tr><td height="2" bgcolor="#bdd0f2"></td></tr> 
  <tr> 
    <td align="center" valign="top" bgcolor="#f2f6fd"><table width="560" border="0" align="center" cellpadding="0" cellspacing="0"> 
      <tr><td height="18" colspan="3"></td></tr> 
      <tr> 
        <td colspan="3" style="font-size:11px; line-height:17px;"><font face="Verdana, Arial" color="#474a4b"><strong>Resume Headlines:</strong> <?php echo $this->_tpl_vars['TITLE']; ?>
</font></td> 
      </tr> 
      <tr><td height="14" colspan="3"></td></tr> 
      <tr> 
        <td width="146" style="font-size:11px;"><font face="Verdana, Arial" color="#474a4b"><strong>Total Experience</strong></font></td> 
        <td width="36">:</td> 
        <td width="378" style="font-size:11px;"><font face="Verdana, Arial" color="#474a4b"><?php echo $this->_tpl_vars['TOTAL_EXP']; ?>
</font></td>
      </tr>
	
       <?php if ($this->_tpl_vars['MONTH_COUNT'] >= 12): ?>
      <tr><td colspan="3" height="8"></td></tr>
      <tr>
        <td style="font-size:11px;"><font face="Verdana, Arial" color="#474a4b"><strong>Current Employer</strong></font></td>
        <td>:</td>
        <td style="font-size:11px;"><font face="Verdana, Arial" color="#474a4b"><?php echo $this->_tpl_vars['ORGANISATION']; ?>
</font></td>
      </tr>
      <tr><td colspan="3" height="8"></td></tr>
      <tr>
        <td style="font-size:11px;"><font face="Verdana, Arial" color="#474a4b"><strong>Designation</strong></font></td>
        <td>:</td>
        <td style="font-size:11px;"><font face="Verdana, Arial" color="#474a4b"><?php echo $this->_tpl_vars['DESIGNATION']; ?>
</font></td>
      </tr>
       <?php endif; ?>
      <tr><td colspan="3" height="8"></td></tr> 
      <tr> 
        <td style="font-size:11px;"><font face="Verdana, Arial" color="#474a4b"><strong>Functional Area</strong></font></td> 
        <td>:</td> 
        <td style="font-size:11px;"><font face="Verdana, Arial" color="#474a4b"><?php echo $this->_tpl_vars['FAREA']; ?>
</font></td> 
      </tr> 
      <tr><td colspan="3" height="8"></td></tr> 
      <tr> 
        <td style="font-size:11px;"><font face="Verdana, Arial" color="#474a4b"><strong>Industry</strong></font></td> 
        <td>:</td> 
        <td style="font-size:11px;"><font face="Verdana, Arial" color="#474a4b"><?php echo $this->_tpl_vars['INDUSTRYTYPE']; ?>
</font></td> 
      </tr> 
      <tr><td colspan="3" height="8"></td></tr> 
      <tr> 
        <td style="font-size:11px;"><font face="Verdana, Arial" color="#474a4b"><strong>Role</strong></font></td> 
        <td>:</td> 
        <td style="font-size:11px;"><font face="Verdana, Arial" color="#474a4b"><?php echo $this->_tpl_vars['ROLE']; ?>
</font></td>
      </tr> 
      <tr><td colspan="3" height="8"></td></tr> 
      <tr> 
        <td style="font-size:11px;"><font face="Verdana, Arial" color="#474a4b"><strong>CTC</strong></font></td> 
        <td>:</td> 
        <td style="font-size:11px;"><font face="Verdana, Arial" color="#474a4b"><?php echo $this->_tpl_vars['CTC']; ?>
</font></td> 
      </tr> 

      <tr><td colspan="3" height="8"></td></tr> 
      <tr> 
        <td style="font-size:11px;"><font face="Verdana, Arial" color="#474a4b"><strong>Current Location</strong></font></td> 
        <td>:</td> 
        <td style="font-size:11px;"><font face="Verdana, Arial" color="#474a4b"><?php echo $this->_tpl_vars['CITY']; ?>
</font></td> 
      </tr> 
      <tr><td colspan="3" height="12"></td></tr> 
      <tr> 
        <td colspan="3"><table width="188" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #ffc21f;"> 
          <tr> 
            <td height="27" align="center" valign="middle" bgcolor="#FEE779"><a href="http://my.naukri.com/AL/interUpdate/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/msrc/<?php echo $this->_tpl_vars['MSRC']; ?>
" 
style="font-family:Verdana, Arial; font-size:13px; 
text-decoration:none; color:#3b3b3b; display:block;"><strong>Update Resume Now</strong></a></td> 
          </tr> 
        </table></td> 
        </tr> 
      <tr><td height="8" colspan="3"></td></tr> 
      <tr> 
     <td width = "100%" colspan="3" style="font-size:11px; line-height:17px;"><font face="Verdana, Arial" color="#474a4b">*Access your account directly from here. Valid for a one-time login for the next 10 days.</font></td><br> 
      </tr>
       <tr>
       <td height="8" colspan="3">
       </tr>
       <tr>
       <td width = "100%" colspan="3" style="font-size:11px; line-height:17px;"><font face="Verdana, Arial" color="#474a4b">Your Profile with Username: <strong><?php echo $this->_tpl_vars['USERNAME']; ?>
</strong> was last modified on <strong><?php echo $this->_tpl_vars['MOD_DT_STR']; ?>
</strong></font></td> 
      </tr> 
      <tr> 
        <td height="15" colspan="3"></td> 
      </tr> 
    </table></td> 
  </tr> 
  <tr> 
    <td bgcolor="#bdd0f2" height="5"></td> 
  </tr> 
  <tr><td height="22"></td></tr> 
  <tr> 
    <td align="center" valign="top"><table width="570" border="0" align="center" cellpadding="0" cellspacing="0" style="text-align:left;"> 
      <tr> 
        <td width="270" height="2"><img src="http://w10.naukri.com/mailers/template_revamp/update_profile/images/zero.gif" width="270" height="1" /></td> 
        <td width="20"><img src="http://w10.naukri.com/mailers/template_revamp/update_profile/images/zero.gif" width="20" height="1" /></td> 
        <td width="292" height="2"><img src="http://w10.naukri.com/mailers/template_revamp/update_profile/images/zero.gif" width="280" height="1" /></td> 
      </tr> 
      <tr> 
        <td valign="top"><table width="279" border="0" cellspacing="0" cellpadding="0" style="border:solid 1px #f4f3f3; line-height:17px; text-align:justify;" 
bgcolor="#fcfbfb" align="center"> 
  <tr><td width="10"></td><td height="8"></td><td width="10"></td></tr> 
  <tr> 
    <td></td> 
    <td style="font-size:11px;"><font face="Verdana, Arial" color="#3b3b3b">Also, don't forget to update your contact details if they have changed. Recruiters 
will be trying to reach you on the following details:</font></td> 
    <td></td> 
  </tr> 
  <tr><td></td><td height="15"></td><td></td></tr>  
  <tr> 
    <td></td> 
    <td style="font-size:11px;"><font face="Verdana, Arial" color="#3b3b3b">Email: <strong> <?php echo $this->_tpl_vars['EMAIL']; ?>
 </strong></font></td> 
    <td></td> 
  </tr> 
  <tr><td></td><td height="7"></td><td></td></tr> 
  <tr> 
    <td></td> 
    <td style="font-size:11px;"><font face="Verdana, Arial" color="#3b3b3b">Phone Number: <strong><?php echo $this->_tpl_vars['CONTACT_NO']; ?>
</strong></font></td> 
    <td></td> 
  </tr> 
  <tr><td></td><td height="15"></td><td></td></tr> 
  <tr> 
    <td></td> 
    <td style="font-size:11px;"><a href="http://my.naukri.com/AL/interUpdate/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/msrc/CI" target="_blank" style="font-family:Verdana, Arial; color:#006eb3; text-decoration:underline;">Edit Contact 
Info</a></td> 
    <td></td> 
  </tr> 
  <tr><td></td><td height="12"></td><td></td></tr> 
</table></td> 
		<td></td> 
        <td valign="top" style="font-size:11px; line-height:17px; padding-top:8px;" align="left"><font face="Verdana, Arial" color="#2f2e2e">Have you been 
searching for jobs lately?<br> There are <strong><a href="<?php echo $this->_tpl_vars['JOB_SRCH_URL']; ?>
" target="_blank" style="font-size:12px; color:#cc0202; text-decoration:underline;"><?php echo $this->_tpl_vars['TOTAL_JOBS']; ?>
</a></strong> jobs in your category<br> on the site today!<br> 
          <img src="http://w10.naukri.com/mailers/template_revamp/update_profile/images/line.gif" width="260" height="31" />
<!--<br>Your Resume has been viewed 
<strong style="font-size:12px; color:#cc0202;"><?php echo $this->_tpl_vars['VIEWCOUNT']; ?>
 times</strong> by recruiters in the last 30 days. <br> 
<?php if ($this->_tpl_vars['VIEWCOUNT'] > 0): ?>
<a href="http://my.naukri.com/AL/interUpdate/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/msrc/VD" target="_blank" style="font-family:Verdana, Arial; color:#006eb3; text-decoration:underline;">View Details</a><br>
	<!-- if viewed is 0 times then this link will come	------> 
<?php else: ?>
<a href="http://blogs.naukri.com/?p=241" target="_blank" style="font-family:Verdana, Arial; color:#006eb3; text-decoration:underline;">See how you can increase your views</a> 
<?php endif; ?>
</font>-->
</td> 
      </tr> 
    </table></td> 
  </tr> 
  <tr><td height="30"></td></tr> 
  <tr> 
    <td style="font-size:11px; line-height:16px; padding:0px 15px 0px 15px;"><font face="Verdana, Arial" color="#444444">Wish you good luck in your job 
search.<br> 
        <br> 
      Regards, <br> 
      <strong><span style="color:#189BD6;">Naukri</span><span style="color:#DF292A;">.</span><span style="color:#1169AC;">com</span></strong> Team</font></td> 
  </tr> 
  <tr> 
    <td height="25"></td> 
  </tr> 
  <tr> 
    <td align="center" style="font-size:11px;"><font face="Verdana, Arial" color="#dddddd"><a href="<?php echo $this->_tpl_vars['UNSUBSCRIBE_URL']; ?>
" target="_blank" style="color:#006eb3; 
text-decoration:underline;">Unsubscribe</a> &nbsp; &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp;<a href="http://w5.naukri.com/fdbck/main/feedback.php?app_id=15" target="_blank" style="color:#006eb3; 
text-decoration:underline;">Report a problem</a></font></td> 
  </tr> 
  <tr><td height="15"></td></tr> 
  <tr> 
    <td align="center" style="font-size:10px;"><font face="Verdana, Arial" color="#9d9d9d">This is a Computer-generated email, please do not reply to this 
message.</font></td> 
  </tr> 
</table> 
<img src="<?php echo $this->_tpl_vars['MAIL_OPEN_TRACK_URL']; ?>
" height="0" width="0" />
</body> 
</html> 