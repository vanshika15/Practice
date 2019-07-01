<?php /* Smarty version 2.6.19, created on 2014-06-10 06:02:48
         compiled from /usr/local/apache/htdocs/smarty/templates/mailers/ftd/ftd_survey.tpl */ ?>
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
    <td width="574"><table width="265" border="0" align="left" cellpadding="0" cellspacing="0" style="-webkit-text-size-adjust: 100%;">
        <tr>
          <td width="31" valign="bottom" rowspan="2" align="right"><a href="<?php echo $this->_tpl_vars['baseURL']; ?>
?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=homepagelogo" target="_blank"><img src="http://w10.naukri.com/mailers/2012/naukri/ftdoct/images/logo.gif" width="31" height="42" border="0" vspace="5" hspace="0" /></a></td>
          <td width="2230" align="right" valign="top"><strong><a href="<?php echo $this->_tpl_vars['baseURL']; ?>
?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=homepagelogo" target="_blank" style="font-family:Verdana; font-size:35px; color:#00adef; text-decoration:none;">naukri<font style="font-family:Georgia;" color="#ed1b24">.</font><font color="#0068b5">com</font></a></strong></td>
          <td valign="top" rowspan="2"><a href="<?php echo $this->_tpl_vars['baseURL']; ?>
?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=homepagelogo" target="_blank" style="font-size:9px; color:#3d3d3d; text-decoration:none; line-height:28px;">&reg;</a></td>
        </tr>
        <tr>
          <td valign="top" align="right"><a href="<?php echo $this->_tpl_vars['baseURL']; ?>
?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=homepagelogo" target="_blank" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:9px; color:#3d3d3d; line-height:10px; text-decoration:none;">India's No.1 Job Site</a></td>
        </tr>
      </table></td>
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
                <td width="389"><font face="Trebuchet MS" color="#5e82a7" style="font-size:35px; line-height:38px;">Tell us about your experience.</font></td>
                <td valign="bottom" width="110"><img src="http://w10.naukri.com/mailers/2012/naukri/ftdoct/images/img7.gif" width="110" height="105" vspace="0" hspace="0" align="right" /></td>
              </tr>
              <tr>
                <td><font face="Arial, Helvetica, sans-serif" color="#787878" style="font-size:14px;">Dear <?php if (empty ( $this->_tpl_vars['NAME'] )): ?><?php echo $this->_tpl_vars['USERNAME']; ?>
<?php else: ?><?php echo $this->_tpl_vars['NAME']; ?>
<?php endif; ?>,</font></td>
                <td><img src="http://w10.naukri.com/mailers/2012/naukri/ftdoct/images/img1a.gif" width="110" height="45" vspace="0" hspace="0" align="left" /></td>
              </tr>
            </table></td>
          <td width="46"></td>
        </tr>
        <tr>
          <td></td>
          <td style="font-family:Arial,Times New Roman,Times,serif;font-size:14px" valign="top">Its been <strong>over a month since you've joined Naukri</strong>. We hope that<br/>your Job-search is going well. Take this small survey to answer a<br/> few questions and <strong>help us make Naukri<span style="font-size:1px;"> </span>.com work better for you</strong>.</td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td height="25"></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><table width="214" border="0" cellspacing="0" cellpadding="0" background="http://w10.naukri.com/mailers/2012/naukri/ftdoct/images/butt_surv1.gif" bgcolor="#407ab6">
              <tr>
                <td height="33" align="center" style="font-family:Arial;"><a href="https://www.surveymonkey.com/s/KMK89G2?c=<?php echo $this->_tpl_vars['SID']; ?>
" target="_blank" style="font-size:15px; text-decoration:none; color:#FFFFFF; height:33px; line-height:33px;">Click here to take the survey</a></td>
              </tr>
            </table></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="3" height="32"></td>
        </tr>
        <tr>
          <td></td>
		  <td>We wish you good luck in your Job search.<br>
		<br>
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
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['mailerTplPath'])."/ftd/unsubscribe.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
    <td></td>
  </tr>
</table>
</body>
</html>