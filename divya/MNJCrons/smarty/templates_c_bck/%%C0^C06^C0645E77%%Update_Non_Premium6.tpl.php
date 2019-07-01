<?php /* Smarty version 2.6.19, created on 2016-09-07 05:37:46
         compiled from /usr/local/apache/htdocs/smarty/templates/mailers/mailer_revamp/Update_Non_Premium6.tpl */ ?>
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
/mr/naukri-logo.gif" alt="Naukri.com" width="200" height="36" border="0" vspace="0" hspace="0" align="left"/> </a></td>
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
    <td height="28"></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td style="font-family:Arial; font-size:12px; color:#191919; line-height:17px;"><strong>Dear <?php if (empty ( $this->_tpl_vars['NAME'] )): ?><?php echo $this->_tpl_vars['USERNAME']; ?>
<?php else: ?><?php echo $this->_tpl_vars['NAME']; ?>
<?php endif; ?></strong> (Login ID: <?php echo $this->_tpl_vars['USERNAME']; ?>
), <br /></td>
    <td></td>
  </tr>
  <tr>
    <td height="20" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td style="font-family:Arial; font-size:12px; color:#191919; line-height:17px;">Your resume is your face to thousands of recruiter hunting for the best talent. Keeping your Naukri profile updated is the most effortless way to stand out among others. Even if you are not looking for a job change now, we suggest you should be ready to get the best openings-always</td>
    <td></td>
  </tr>
  <tr>
    <td height="20" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td style="font-family:Arial; font-size:12px; color:#191919; line-height:17px;">How? Just keep your Naukri profile updated. We will do the rest for you!</td>
    <td></td>
  </tr>
  <tr>
    <td height="20" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['mailerTplPath'])."/mailer_revamp/exp_sum.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
  </tr>
  
  <!--bottom-->
  <tr>
    <td height="35" colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['mailerTplPath'])."/mailer_revamp/signature.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
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
    <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['mailerTplPath'])."/mailer_revamp/unsubscribe.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3" height="13"></td>
  </tr>
</table>
</body>
</html>