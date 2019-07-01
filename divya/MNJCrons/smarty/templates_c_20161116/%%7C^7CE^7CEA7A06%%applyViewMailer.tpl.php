<?php /* Smarty version 2.6.19, created on 2016-09-06 18:30:02
         compiled from /usr/local/apache/htdocs/smarty/templates/mailers/mailer_revamp/applyViewMailer.tpl */ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Apply Mailer</title>
<link href="http://fonts.googleapis.com/css?family=Roboto:400,300fonts.googleapis.com" type="text/css" rel="stylesheet" />
</head>
<body style="margin:0;padding:0;width:100%;font-size:13px;font-family:Roboto,Arial;color:#959595;">
<table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin:auto;">
<tr>
<td style="width:10%;">
</td>
<td style="width:80%;">
<img src="http://static.naukimg.com/s/1/103/i/jobs-india-text.gif" />
</td>
<td style="width:10%;">
</td>
</tr>
<tr style="background:#e0e0e0;">
<td style="width:10%;height:20px;">

</td>

<td style="width:80%;height:20px;">



</td>

<td style="width:10%;height:50px;">



</td>

</tr>

<tr style="background:#e0e0e0;">

<td style="width:10%;">



</td>

<td style="width:80%;">

<table width="100%" cellspacing="0" cellpadding="0" border="0">

<tr style="background:#f8f8f8;">

<td style="font-size:22px;  color:#777777; padding:15px;">

Your Application has been viewed by Recruiter

</td>

</tr>

<tr style="background:#fff;">

<td style="padding:15px;">

Hi <?php if ($this->_tpl_vars['NAME']): ?> <?php echo $this->_tpl_vars['NAME']; ?>
 <?php else: ?> Jobseeker <?php endif; ?>,<br /><br />

Recruiter(s) have viewed your application to Naukri Job

<br/><br/>



<table width="100%" cellspacing="0" cellpadding="0" border="0">

<tr>

<td style="width:28%;"></td>
<td>
<table style="width:220px" align="center"> <tbody><tr> <td style="padding-top:15px;padding-bottom:15px;background-color:#0099cc;text-align:center"> <a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/ApplyHistoryView?alid=<?php echo $this->_tpl_vars['ALID']; ?>
" style="font-size:18px;border:0 none;text-decoration:none;color:#ffffff" target="_blank">View status of your application(s)</a></td></tr></tbody></table>
</td>
<!--<td style="width:40%;padding:15px;text-align:center;background:#1894c8;"><a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/AL/ApplyHistoryView?alid=<?php echo $this->_tpl_vars['ALID']; ?>
" id="simulator" style="color:#fff;font-size:14px;border-radius:3px;display:inline-block;border:0;text-decoration:none;text-align:center;"><span style="font-size:18px;">Click here to view Details</span><br/></a></td>
-->
<td style="width:35%;"></td>

</tr>

<tr>

<td colspan="3">
<br/><br/>

Please note: Recruiter has viewed your Application email. However, this does not necessarily mean that you will be contacted/shortlisted by the recruiter.

<br/><br/>

<br/><br/>

Wish you good luck in your job search.

<br/><br/>



Regards,<br/>

Naukri.com team

</td>

</tr>

</table>

</td>

</tr>

<tr style="background:#e0e0e0;">

<td>

<table width="100%" cellspacing="0" cellpadding="0" border="0">

<tr>

<td style="width:100%;">

<table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top:4%;">

<tr>

<td>



    <a href="<?php echo $this->_tpl_vars['arrPaths']['URL']; ?>
/Mailers/edit?<?php echo $this->_tpl_vars['GAPARAM']; ?>
&utm_content=footer&mail_cat=UP2" style="text-decoration:none;color:#2e77bd" target="_blank">Unsubscribe</a> | <a href="http://w5.naukri.com/fdbck/main/feedback.php?app_id=15&id=" style="text-decoration:none;color:#2e77bd;" target="_blank">Report a problem</a><br><br>



You are receiving this mailer because you or someone else has used your e-mail ID to receive jobs from us. <br><br>



This is a system-generated e-mail, please don't reply to this message. The jobs sent in this mail have been posted by the clients of <span class="il">Naukri</span>.com. IEIL has taken all reasonable steps to ensure that the information in this mailer is authentic. Users are advised to research bonafides of advertisers independently. IEIL shall not have any responsibility in this regard. We recommend that you visit our <a href="https://jobsearch.naukri.com/mynaukri/mn_termsconditions.php" style="text-decoration:none;color:#2e77bd;" target="_blank">Terms &amp; Conditions</a> and the <a href="https://my.naukri.com/faq/faq.php?pgid=9&amp;id=" style="text-decoration:none;color:#2e77bd;" target="_blank">Security Advice</a> for more comprehensive information </td>

</tr>

</table>

<td>

</tr>

	



</table>

</td>

</tr>

</table>

</td>

<td style="width:10%;">



</td>

</tr>

<tr style="background:#e0e0e0;">

<td style="width:10%;height:50px;">



</td>

<td style="width:80%;height:50px;">



</td>

<td style="width:10%;height:50px;">



</td>

</tr>

</table>
  
  <tr>
    <td height="13"><img height="0" width="0" src="<?php echo $this->_tpl_vars['arrPaths']['MAIL_TRACK_URL']; ?>
<?php echo $this->_tpl_vars['MID']; ?>
" style="display:none" /></td>
  </tr>


</body>

</html>