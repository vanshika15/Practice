<?php /* Smarty version 2.6.19, created on 2017-06-24 16:18:12
         compiled from /usr/local/apache/htdocs/smarty/templates/mailers/mailer_revamp/cam_np2.tpl */ ?>
<html>
<head>
<title>Naukri.com</title>
</head>
<body>
<table style="max-width:600px; min-width:320px; border:1px solid #e9e9e9;-webkit-text-size-adjust: 100%;" align="center" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" height="13"></td>
  </tr>
  <tr>
    <td width="13"></td>
    <td width="574"><?php $_smarty_tpl_vars = $this->_tpl_vars;
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
    <td><table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#eeeeee" style="border:1px dashed #dbdbdb; font-family:Arial; color:#787878; font-size:14px; line-height:18px;-webkit-text-size-adjust: 100%;">
        <tr>
          <td width="29"></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0" style="-webkit-text-size-adjust: 100%;">
              <tr>
                <td colspan="2" height="16"></td>
              </tr>
              <tr>
                <td width="389"><font face="Trebuchet MS" color="#5e82a7" style="font-size:30px; line-height:35px;">Recruiters want you to provide the latest information</font></td>
                <td valign="bottom" width="110"><img src="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/img18.gif" width="110" height="105" vspace="0" hspace="0" align="right" /></td>
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
          <td width="499" style="font-family:Arial,Times New Roman,Times,serif;font-size:14px" valign="top">Did you know, a recently <strong>updated profile</strong> on Naukri<span style="font-size:1px;"> </span>.com has <strong>higher chances</strong> of getting contacted by a recruiter?<br/>
            <br/>
            Have you recently completed a project or learnt a new skill? If you are actively looking for a job, we advise you to <strong>constantly update your profile</strong> to <strong>increase your chances</strong> of getting contacted by recruiters on Naukri<span style="font-size:1px;"> </span>.com.<br/>
            <br/>
            At Naukri<span style="font-size:1px;"> </span>.com, recruiters are constantly looking for fresh profiles and over 100,000 jobseekers update their profile daily on Naukri<span style="font-size:1px;"> </span>.com. Update your profile regularly so that you don't fall behind. </td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td height="18"></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="border:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#737679;">
              <tr>
                <td width="15" height="50"></td>
                <td colspan="3" style="border-bottom:1px solid #e4e5e5;"><h4 style="font-size:14px; margin:0; padding:0;">Your profile, as seen by recruiters on Naukri.com:</h4></td>
                <td></td>
              </tr>
              <tr>
                <td height="20"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr valign="top">
                <td height="27"></td>
                <td width="140" valign="top">Resume Headline</td>
                <td width="5" valign="top">:</td>
<?php if ($this->_tpl_vars['resumeheadlineNone2']): ?>
                <td><font color="#c1645b"><span>Not Mentioned</span></font></td>
<?php else: ?>
                <td><span><?php echo $this->_tpl_vars['TITLE']; ?>
</span></td>
<?php endif; ?>
                <td width="15"></td>
              </tr>
              <tr valign="top">
                <td height="25"></td>
                <td valign="top">Name</td>
                <td valign="top">:</td>
<?php if (! $this->_tpl_vars['NAME']): ?>
                <td><font color="#c1645b"><span>Not Mentioned</span></font></td>
<?php else: ?>
                <td><span><?php echo $this->_tpl_vars['NAME']; ?>
</span></td>
<?php endif; ?>
                <td></td>
              </tr>
              <tr valign="top">
                <td height="25"></td>
                <td valign="top">Current Designation</td>
                <td valign="top">:</td>
<?php if (! $this->_tpl_vars['Designation']): ?>
                <td><font color="#c1645b"><span>Not Mentioned</span></font></td>
<?php else: ?>
                <td><span><?php echo $this->_tpl_vars['Designation']; ?>
</span></td>
<?php endif; ?>
                <td></td>
              </tr>
              <tr valign="top">
                <td height="25"></td>
                <td valign="top">Current Company</td>
                <td valign="top">:</td>
<?php if (! $this->_tpl_vars['Organization']): ?>
                <td><font color="#c1645b"><span>Not Mentioned</span></font></td>
<?php else: ?>
                <td><span><?php echo $this->_tpl_vars['Organization']; ?>
</span></td>
<?php endif; ?>
                <td align="center"></td>
                <td></td>
              </tr>
              <tr valign="top">
                <td height="25"></td>
                <td valign="top">Experience  |  Salary</td>
                <td valign="top">:</td>
                <td><span><?php echo $this->_tpl_vars['TOTAL_EXP']; ?>
</span> | <?php if ($this->_tpl_vars['CTC'] == '1'): ?><font color="#c1645b"><span>Not Mentioned</span><?php else: ?><span><?php echo $this->_tpl_vars['CTC']; ?>
</span><?php endif; ?></td>
                <td></td>
                <td></td>
              </tr>
              <tr valign="top">
                <td height="25"></td>
                <td valign="top">Educational Qualification</td>
                <td valign="top">:</td>
<?php if ($this->_tpl_vars['ougcourseOther'] || $this->_tpl_vars['UGCOURSE'] == ''): ?>
                <td><font color="#c1645b"><span>Not Mentioned</span></font></td>
<?php else: ?>
                <td><span><?php echo $this->_tpl_vars['UGCOURSE']; ?>
</span></td>
<?php endif; ?>
                <td></td>
                <td></td>
              </tr>
              <tr valign="top">
                <td height="25"></td>
                <td valign="top">Preferred Location</td>
                <td valign="top">:</td>
<?php if ($this->_tpl_vars['prefLocError']): ?>
                <td><font color="#c1645b"><span>Not Mentioned</span></font></td>
<?php else: ?>
                <td><span><?php echo $this->_tpl_vars['prefLoc']; ?>
</span></td>
<?php endif; ?>
                <td></td>
                <td></td>
              </tr>
              <tr valign="top">
                <td height="25"></td>
                <td valign="top">Keyskills</td>
                <td valign="top">:</td>
<?php if ($this->_tpl_vars['keyskillsNotUpdated2']): ?>
                <td><font color="#c1645b"><span>Not Mentioned</span></font></td>
<?php else: ?>
                <td><span><?php echo $this->_tpl_vars['KEYWORDS']; ?>
</span></td>
<?php endif; ?>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td colspan="4" bgcolor="#e7e7e7" height="1" style="font-size:1px;"></td>
                <td></td>
              </tr>
              <tr>
                <td height="60"></td>
                <td colspan="5"><table width="169" border="0" cellspacing="0" cellpadding="0" background="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/butt_mult1.gif" bgcolor="#407ab6">
                    <tr>
                      <td height="33" align="center" style="font-family:Arial;"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newCriticalMailer/alid/<?php echo $this->_tpl_vars['ALID1']; ?>
/email/<?php echo $this->_tpl_vars['email_encrypted']; ?>
/msrc/SS/gaflag/<?php echo $this->_tpl_vars['GAFLAG']; ?>
" target="_blank" style="font-size:15px; text-decoration:none; color:#FFFFFF; height:33px; line-height:33px; display:block;">Complete your profile</a></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="3" height="32"></td>
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
            <br/>
            Thanks &amp; Regards,<br/>
            <font color="#00adef">Naukri</font><span style="font-size:1px;"> </span><font color="#ed1b24">.</font><font color="#006cb7">com</font> Team</td>
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