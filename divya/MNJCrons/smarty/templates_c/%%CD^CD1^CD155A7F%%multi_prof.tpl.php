<?php /* Smarty version 2.6.19, created on 2016-11-17 12:31:52
         compiled from /usr/local/apache/htdocs/smarty/templates/mailers/ftd/multi_prof.tpl */ ?>
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
                <td width="389"><font face="Trebuchet MS" color="#5e82a7" style="font-size:32px; line-height:38px;">Create up to 5 profiles<br/>on Naukri<span style="font-size:1px;"> </span>.com</font></td>
                <td valign="bottom" width="110"><img src="http://w10.naukri.com/mailers/2012/naukri/ftdoct/images/img8.gif" width="110" height="105" vspace="0" hspace="0" align="right" /></td>
              </tr>
              <tr>
                <td><font face="Arial, Helvetica, sans-serif" color="#787878" style="font-size:14px;">Dear <a style="text-decoration:none; font-size:14px; font-family:Arial, Helvetica, sans-serif; color:#787878;"><?php if (empty ( $this->_tpl_vars['NAME'] )): ?><?php echo $this->_tpl_vars['USERNAME']; ?>
<?php else: ?><?php echo $this->_tpl_vars['NAME']; ?>
<?php endif; ?></a>,</font></td>
                <td><img src="http://w10.naukri.com/mailers/2012/naukri/ftdoct/images/img1a.gif" width="110" height="45" vspace="0" hspace="0" align="left" /></td>
              </tr>
            </table></td>
          <td width="46"></td>
        </tr>
        <tr>
          <td></td>
          <td width="499" style="font-family:Arial,Times New Roman,Times,serif;font-size:14px" valign="top">Did you know, you could <strong>create multiple profiles</strong> with one account on Naukri<span style="font-size:1px;"> </span>.com?<br/><br/>You can create up to <strong>5 profiles with different skillsets, resume, cover-letter</strong> etc. Creating a profile &amp; highlighting a skill-set can help you target Jobs that emphasize on that skill-set.</td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td height="18"></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><table width="169" border="0" cellspacing="0" cellpadding="0" background="http://w10.naukri.com/mailers/2012/naukri/ftdoct/images/butt_mult1.gif" bgcolor="#407ab6">
              <tr>
                <td height="33" align="center" style="font-family:Arial;"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/newProfile?alid=<?php echo $this->_tpl_vars['ALID']; ?>
&<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=newprofilelink" target="_blank" style="font-size:15px; text-decoration:none; color:#FFFFFF; height:33px; line-height:33px;">Create a new profile</a></td>
              </tr>
            </table></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td height="18"></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td width="499" style="font-family:Arial,Times New Roman,Times,serif;font-size:14px" valign="top">However, you can set only one primary profile. Primary profile is the profile that is visible to recruiters when they look for you.</td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td height="35"><h4 style="font-size:14px; margin:0; padding:0;">Your primary profile is:</h4></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td bgcolor="#ffffff"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['mailerTplPath'])."/ftd/profile_tupple.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br /> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['mailerTplPath'])."/ftd/multi_prof_button.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="3" height="10"></td>
        </tr>
        <tr>
          <td></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial; color:#787878; font-size:14px; line-height:18px;-webkit-text-size-adjust: 100%;">
  <tr>
    <td width="499">Once you have created multiple profiles, you can choose to apply to a Job with the primary profile, or choose at the time of applying.<br/><br/>This can be customized from the settings available in <a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/ManageProfiles/view?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=multipleprofilelink" target="_blank" style="font-size:13px; text-decoration:none; color:#1e82c1;">My Naukri</a></td>
  </tr>
</table>
</td>
          <td></td>
        </tr>
        <tr>
          <td colspan="3" height="20"></td>
        </tr>
        <tr>
          <td></td>
          <td>We wish you good luck in your Job search<br/><br/>Thanks &amp; Regards,<br/>
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
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['mailerTplPath'])."/ftd/unsubscribe.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
    <td></td>
  </tr>
</table>
</body>
</html>