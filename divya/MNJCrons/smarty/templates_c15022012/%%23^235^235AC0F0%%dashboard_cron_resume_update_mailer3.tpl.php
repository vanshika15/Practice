<?php /* Smarty version 2.6.19, created on 2012-01-24 14:41:08
         compiled from ni/nidashboard/dashboard_cron_resume_update_mailer3.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Get more Interview calls with an Updated CV</title>
</head>

<body>
<table width="600" border="0" cellpadding="0" cellspacing="0"  align="center"  >
<tr>
<td valign="bottom"><img src="<?php echo $this->_tpl_vars['MANAGER_IMAGES_PATH']; ?>
/updatemailer3/exp1.jpg" alt="" width="165" height="68" border="0" /></td>
<td width="193">&nbsp;</td>
<td valign="bottom"><a href="http://www.naukrigulf.com" target="_blank"><img src="<?php echo $this->_tpl_vars['MANAGER_IMAGES_PATH']; ?>
/updatemailer3/naukrigulf_logo.gif" alt="" width="200" height="54" border="0" /></a></td>
</tr>
<tr>
<td bgcolor="#2783C6"><img src="<?php echo $this->_tpl_vars['MANAGER_IMAGES_PATH']; ?>
/updatemailer3/exp2.jpg" alt="" width="165" height="90" border="0" /></td>

<td colspan="2" bgcolor="#2783C6">
<a href="<?php echo $this->_tpl_vars['SERVER_DOMAIN_MAILER']; ?>
/nimanager/res_preview.php?conmailer=<?php echo $this->_tpl_vars['CONMAILER']; ?>
&mlid=<?php echo $this->_tpl_vars['MLID']; ?>
" target="_blank" style="color:#FFFFFF; text-decoration:none;"><div align="right" style="font:normal 28px Tahoma; color:#FFFFFF; line-height:40px; padding-right:5px;">
Let your experience speak for you<br /></div>
<div align="right" style="font:normal 23px Tahoma; color:#FFFFFF;  padding-right:5px;">Update your CV Now</div>
</a></td>
</tr>
</table>
<table width="600" border="0" cellpadding="0" cellspacing="0"  align="center" >
<tr>
<td background="<?php echo $this->_tpl_vars['MANAGER_IMAGES_PATH']; ?>
/updatemailer3/leftbg.gif" width="14">&nbsp;</td>
<td>
<table width="95%" border="0" cellpadding="0" cellspacing="0"  align="center" >
<tr>
<td>
<div style="font:normal 11px Verdana; padding-top:9px; padding-left:7px; padding-bottom:5px; line-height:18px;">

 Dear <strong><?php echo $this->_tpl_vars['NAME']; ?>
</strong>, 
<p>It has been almost 9 months since you updated your CV. It is possible that you might
  have missed out on opportunities which could have got you that dream job.</p>

<p>We believe that during all these months you have added on to your experience and expertise.
  It is therefore recommended that you update your CV. This will help you showcase your
  newly acquired skills to the recruiters, helping you find that perfect job in the process. </p>
<p>You last updated your CV on <strong><?php echo $this->_tpl_vars['MOD_DATE_STR']; ?>
</strong><br />
  To bag the best out of the jobs on offer, please update the following:</p>
</div>

 </td>
</tr>
<tr>
<td>
<table width="98%" border="0" cellpadding="0" cellspacing="0"  align="center" bgcolor="#F9FDFF" style="border:#B2E0FB solid 2px;">
<tr>
<td>
<table width="96%" border="0" cellpadding="0" cellspacing="0" align="center" >
<tr><td colspan="3" height="5"></td></tr>
<tr>
<td width="25%" height="25" style="font:normal 11px Verdana; padding-top:6px;  padding-bottom:3px;"><strong>Total Experience</strong></td>
<td width="2%" style="font:normal 11px Verdana;">:</td>
<td width="73%" style="font:normal 11px Verdana;"><?php if ($this->_tpl_vars['TOTAL_EXP'] != ""): ?><?php echo $this->_tpl_vars['TOTAL_EXP']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></td>

</tr>
<tr>
<td width="25%" height="25" style="font:normal 11px Verdana; padding-top:3px;  padding-bottom:3px;"><strong>Telephone number</strong></td>
<td width="2%" style="font:normal 11px Verdana;">:</td>
<td width="73%" style="font:normal 11px Verdana;"><strong> (M) </strong><?php if ($this->_tpl_vars['MPHONE'] != ""): ?><?php echo $this->_tpl_vars['MPHONE']; ?>
<?php else: ?>Not Mentioned<?php endif; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>(R) </strong><?php if ($this->_tpl_vars['RPHONE'] != ""): ?><?php echo $this->_tpl_vars['RPHONE']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></td>
</tr>
<tr>
<td width="25%" height="25" style="font:normal 11px Verdana; padding-top:3px;  padding-bottom:3px;"><strong>Location</strong></td>
<td width="2%" style="font:normal 11px Verdana;">:</td>
<td width="73%" style="font:normal 11px Verdana;"><?php if ($this->_tpl_vars['CITY'] != ""): ?><?php echo $this->_tpl_vars['CITY']; ?>
<?php if ($this->_tpl_vars['COUNTRY'] != ""): ?>, <?php echo $this->_tpl_vars['COUNTRY']; ?>
<?php endif; ?><?php else: ?><?php if ($this->_tpl_vars['COUNTRY'] != ""): ?><?php echo $this->_tpl_vars['COUNTRY']; ?>
<?php else: ?>Not Mentioned<?php endif; ?><?php endif; ?></td>
</tr>

<tr>
<td width="25%" height="25" style="font:normal 11px Verdana; padding-top:3px;  padding-bottom:3px;"><strong>Monthly Salary </strong></td>
<td width="2%" style="font:normal 11px Verdana;">:</td>
<td width="73%" style="font:normal 11px Verdana;"><?php if ($this->_tpl_vars['CTC'] != ""): ?><?php echo $this->_tpl_vars['CTC']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></td>
</tr>
<tr>
<td width="25%" height="25" style="font:normal 11px Verdana; padding-top:3px;  padding-bottom:3px;"><strong>Industry Type</strong></td>
<td width="2%" style="font:normal 11px Verdana;">:</td>
<td width="73%" style="font:normal 11px Verdana;"><?php if ($this->_tpl_vars['INDUSTRY'] != ""): ?><?php echo $this->_tpl_vars['INDUSTRY']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></td>
</tr>


<tr><td colspan="3" height="5"></td></tr>
</table>

</td>
</tr>
</table>
</td>
</tr>
 <tr>
  <td height="15" align="left"></td>
  </tr>
 

<tr>
    <td valign="bottom" colspan="2">
	<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td width="7">&nbsp;</td>
    <td bgcolor="#FFD953" >
	<table width="100%"  align="center" border="0" cellspacing="0" cellpadding="0" style="   BORDER-RIGHT: #FFC148 1px groove; BORDER-TOP: #FFC148 1px groove; BORDER-LEFT: #FFC148 1px groove;  BORDER-BOTTOM: #FFC148 1px groove; background:url(<?php echo $this->_tpl_vars['MANAGER_IMAGES_PATH']; ?>
/updatemailer3/bg.gif)">
	  <tr>
	 	  <td height="18">	 	
	 <div align="center" style="font-family:verdana; line-height:19px; font-size:13px; "> <a href="<?php echo $this->_tpl_vars['SERVER_DOMAIN_MAILER']; ?>
/nimanager/res_preview.php?conmailer=<?php echo $this->_tpl_vars['CONMAILER']; ?>
&mlid=<?php echo $this->_tpl_vars['MLID']; ?>
" target="_blank" style="text-decoration:none; color:#FF0000"><strong>Update your CV to get on top of the Employer's CV Search</strong></a></div></td>

	   </tr>
</table>
</td>
	 
    <td width="80">&nbsp;</td>
  </tr>
</table>


	</td>
  </tr>
  
   <tr>

<tr><td>&nbsp;</td></tr>
<tr><td align="left" style="font:normal 9px verdana;  padding: 9px; color:#000000;  line-height:15px;">We are sending this mail as you have registered with <a href="http://www.naukrigulf.com" target="_blank">naukrigulf.com</a>. <a href="<?php echo $this->_tpl_vars['SERVER_DOMAIN_MAILER']; ?>
/nimanager/res_unsubscribe.php?conmailer=<?php echo $this->_tpl_vars['CONMAILER']; ?>
&umflag=CS" target="_blank">Use this link</a>, if you do not want to receive any further mails.</td></tr>
<tr><td align="left" style="font:normal 11px verdana;  padding: 9px; color:#000000;  line-height:18px;">To ensure you get all correspondence from recruiters and companies who may contact you through <a href="http://www.naukrigulf.com" target="_blank">naukrigulf.com</a>, please add this email id (info@naukrigulf.com) to your address book.</td></tr>
<tr><td height="10"></td></tr>
</table>
</td>
<td background="<?php echo $this->_tpl_vars['MANAGER_IMAGES_PATH']; ?>
/updatemailer3/rightbg.gif" width="16">&nbsp;</td>
</tr>
</table>

<table width="600" border="0" cellpadding="0" cellspacing="0"  align="center" >
<tr>
<td><img src="<?php echo $this->_tpl_vars['MANAGER_IMAGES_PATH']; ?>
/updatemailer3/btm.gif" alt="" width="600" height="25" /></td>
</tr>
</table>
</body>
</html>
