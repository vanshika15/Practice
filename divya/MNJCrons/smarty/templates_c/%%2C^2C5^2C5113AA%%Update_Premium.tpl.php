<?php /* Smarty version 2.6.19, created on 2016-11-17 05:35:25
         compiled from /usr/local/apache/htdocs/smarty/templates/mailers/mailer_revamp/Update_Premium.tpl */ ?>
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
          <td width="324" height="109" align="left"><font face="Georgia, Times New Roman, Times" color="#FFFFFF" style="font-size:30px; line-height:35px;">Jobs are passing you by.<br/>
            <font style="font-size:20px;">Time for a resume update.</font></font></td>
          <td width="224"><img src="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/mr/img4a_update.gif" width="224" height="109" vspace="0" hspace="0" align="right" border="0" /></td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="2" valign="top"><table width="100%" border="0" cellspacing="0" align="center" cellpadding="0" bgcolor="#e7e7e7" background="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/mr/img5.gif">
        <tr>
          <td colspan="3" height="24"></td>
        </tr>
        <tr>
          <td width="40"></td>
          <td width="491"><font face="Arial, Helvetica, sans-serif" color="#191919" style="font-size:13px; line-height:20px;">Dear <?php if (empty ( $this->_tpl_vars['NAME'] )): ?><?php echo $this->_tpl_vars['USERNAME']; ?>
<?php else: ?><?php echo $this->_tpl_vars['NAME']; ?>
<?php endif; ?>,<br>
            <br>
            <span style="font-size:14px;"><strong>Your absence is hurting your resume.</strong></span><br>
            <br>
            Updating your resume let's you keep a tab on the kind of opportunities that are out there, even if you're not actively seeking change. Why not take a minute  to fill out the missing links?</font></td>
          <td width="37"></td>
        </tr>
        <tr>
          <td colspan="3" height="25"></td>
        </tr>
        <tr>
          <td></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="border:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000000;">
              <tr>
                <td width="15" height="50"></td>
                <td colspan="3" style="border-bottom:1px solid #e4e5e5;"><h4 style="font-size:14px; margin:0; padding:0; color:#000000;">Your current profile on naukripremium<span style="font-size:1px;"> </span>.com:</h4></td>
                <td rowspan="5"></td>
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
                <td width="140">Resume Headline</td>
                <td width="5">:</td>
                <?php if (empty ( $this->_tpl_vars['TITLE'] )): ?>
                <td><font color="#c1645b"><span>Not Mentioned</span></font></td>
                <?php else: ?>
                <td><font color="#c1645b"><span><?php echo $this->_tpl_vars['TITLE']; ?>
</span></font></td>
                <?php endif; ?>
                <td width="15"></td>
              </tr>
              <tr valign="top">
                <td height="25"></td>
                <td>Name</td>
                <td>:</td>
                <?php if (empty ( $this->_tpl_vars['NAME'] )): ?>
                <td><span>Not Mentioned</span></td>
                <?php else: ?>
                <td><span><?php echo $this->_tpl_vars['NAME']; ?>
</span></td>
                <?php endif; ?>
                <td></td>
              </tr>
              <tr valign="top">
                <td height="25"></td>
                <td>Current Designation</td>
                <td>:</td>
                <?php if (empty ( $this->_tpl_vars['EXP']['DESIG'] )): ?>
                <td><span>Not Mentioned</span></td>
                <?php else: ?>
                <td><span><?php echo $this->_tpl_vars['EXP']['DESIG']; ?>
</span></td>
                <?php endif; ?>
                <td></td>
              </tr>
              <tr valign="top">
                <td height="25"></td>
                <td>Current Company</td>
                <td>:</td>
                <?php if (empty ( $this->_tpl_vars['EXP']['ORG'] )): ?>
                <td><font color="#c1645b"><span>Not Mentioned</span></font></td>
                <?php else: ?>
                <td><font color="#c1645b"><span><?php echo $this->_tpl_vars['EXP']['ORG']; ?>
</span></font></td>
                <?php endif; ?>
                <td align="center"></td>
                <td></td>
              </tr>
              <tr valign="top">
                <td height="25"></td>
                <td>Experience  |  CTC</td>
                <td>:</td>
                <td><span><?php echo $this->_tpl_vars['TOTAL_EXP']; ?>
</span> | <font color="#c1645b"><span><?php echo $this->_tpl_vars['CTC']; ?>
</span></font></td>
                <td></td>
                <td></td>
              </tr>
              <tr valign="top">
                <td height="25"></td>
                <td>Educational Qualification</td>
                <td>:</td>
                <?php if (empty ( $this->_tpl_vars['EDUCATION']['COURSE'] )): ?>
                <td><font color="#c1645b"><span>Not Mentioned</span></font></td>
                <?php else: ?>
                <td><font color="#c1645b"><span><?php echo $this->_tpl_vars['EDUCATION']['COURSE']; ?>
</span></font></td>
                <?php endif; ?>
                <td></td>
                <td></td>
              <tr valign="top">
                <td height="25"></td>
                <td>Preferred Location</td>
                <td>:</td>
                <?php if (empty ( $this->_tpl_vars['LOC_PREF'] )): ?>
                <td><font color="#c1645b"><span>Not Mentioned</span></font></td>
                <?php else: ?>
                <td><font color="#c1645b"><span><?php echo $this->_tpl_vars['LOC_PREF']; ?>
</span></font></td>
                <?php endif; ?>
                <td></td>
                <td></td>
              </tr>
              <tr valign="top">
                <td height="25"></td>
                <td>Key Skills</td>
                <td>:</td>
                <?php if (empty ( $this->_tpl_vars['KEYWORDS'] )): ?>
                <td><font color="#c1645b"><span>Not Mentioned</span></font></td>
                <?php else: ?>
                <td><font color="#c1645b"><span><?php echo $this->_tpl_vars['KEYWORDS']; ?>
</span></font></td>
                <?php endif; ?>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td height="10" colspan="4"></td>
                <td></td>
              </tr>
            </table></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="3" height="25"></td>
        </tr>
        <tr>
          <td></td>
          <td align="left"><table width="272" border="0" cellspacing="0" cellpadding="0" background="<?php echo $this->_tpl_vars['arrPaths']['IMGURL']; ?>
/mr/butt.gif" bgcolor="#282828">
              <tr>
                <td width="70"></td>
                <td height="46" width="198" style="font-family:Arial, Helvetica, sans-serif"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/jamxUpdate?alid=<?php echo $this->_tpl_vars['ALID']; ?>
&<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=updateprofilelink" title="Verify Email Address" target="_blank" style="text-decoration:none; font-size:14px; color:#ffffff; line-height:46px; height:46px;"><strong>Update your resume NOW!</strong></a></td>
              </tr>
            </table></td>
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
    <td colspan="4"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['mailerTplPath'])."/mailer_revamp/unsubscribe.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
  </tr>
</table>
</body>
</html>