<?php /* Smarty version 2.6.19, created on 2017-05-08 14:03:37
         compiled from /usr/local/apache/htdocs/smarty/templates/mailers/ftd/cja_prom.tpl */ ?>
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
                <td width="389"><font face="Trebuchet MS" color="#5e82a7" style="font-size:30px; line-height:37px;">Set the criteria for Jobs <br/>you are looking for.</font></td>
                <td valign="bottom" width="110"><img src="http://w10.naukri.com/mailers/2012/naukri/ftdoct/images/img9.gif" width="110" height="105" vspace="0" hspace="0" align="right" /></td>
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
          <td width="499" style="font-family:Arial,Times New Roman,Times,serif;font-size:14px" valign="top">Did you know, Naukri<span style="font-size:1px;"> </span>.com gives you the flexibility to <strong>set the criteria for your Job alerts?</strong> <br/><br/>Naukri<span style="font-size:1px;"> </span>.com allows you to quickly create Job Alerts that  help you keep track of new job opportunities of your interest. These jobs  will be delivered right into your Inbox.</td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td height="18"></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><table width="188" border="0" cellspacing="0" cellpadding="0" background="http://w10.naukri.com/mailers/2012/naukri/ftdoct/images/butt_veml.gif" bgcolor="#407ab6">
              <tr>
                <td height="39" align="center" style="font-family:Arial;"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/Jobalert/alid/<?php echo $this->_tpl_vars['ALID1']; ?>
/email/<?php echo $this->_tpl_vars['EMAIL_MD']; ?>
/<?php echo $this->_tpl_vars['GAPARAM']; ?>
/utm_content/cjabutton" target="_blank" style="font-size:15px; text-decoration:none; color:#FFFFFF; height:39px; line-height:39px;">Create Your Job Alert Now</a></td>
              </tr>
            </table></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td height="10"></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['mailerTplPath'])."/ftd/ftdrecruiter_contact.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="3" height="32"></td>
        </tr>
        <tr>
          <td height="35"></td>
          <td>We wish you good luck in your Job search.<br><br>
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