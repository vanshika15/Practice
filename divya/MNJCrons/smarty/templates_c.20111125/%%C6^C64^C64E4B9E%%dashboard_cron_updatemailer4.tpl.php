<?php /* Smarty version 2.6.19, created on 2008-09-09 04:40:10
         compiled from ./dashboard/dashboard_cron_updatemailer4.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Get more Interview calls with an Updated CV</title>
</head>

<body>
<a href="http://www.naukri.com" target="_blank" style="cursor:pointer">
<table width="600" border="0" cellpadding="0" cellspacing="0"  align="center">
<tr>
<td colspan="3" background="<?php echo $this->_tpl_vars['Images_Path']; ?>
/topmailer4.jpg" width="600" height="68"></td>
<!--<td valign="bottom"><img src="<?php echo $this->_tpl_vars['Images_Path']; ?>
/man1.jpg" alt="" width="273" height="68" border="0" /></td>
<td width="193">&nbsp;</td>
<td valign="bottom" align="right"><a href="http://www.naukri.com" target="_blank"><img src="<?php echo $this->_tpl_vars['Images_Path']; ?>
/logo.gif" alt="" width="248" height="68" border="0" /></a></td>-->
</tr>
</table>
</a>
<table width="600" border="0" cellpadding="0" cellspacing="0"  align="center"  >
<tr>
<td bgcolor="#2783C6" valign="top"><img src="<?php echo $this->_tpl_vars['Images_Path']; ?>
/man2.jpg" alt="" width="273" height="112" /></td>

<td colspan="2" bgcolor="#2783C6">
<a href="http://my.naukri.com/AL/interUpdate/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/msrc/<?php echo $this->_tpl_vars['MSRC']; ?>
" style="color:#FFFFFF; text-decoration:none;" target="_blank"><div align="right" style="font:normal 29px Tahoma; color:#FFFFFF; line-height:31px; padding-right:7px;"><font color="#FFFFFF">
Make best use of what
Naukri.com has to offer</font><br /></div>
<div align="right" style="font:normal 20px Tahoma; color:#FFFFFF;  padding-right:7px;"><font color="#FFFFFF">Update your Resume Now</font></div>
</a></td>
</tr>
</table>
<table width="600" border="0" cellpadding="0" cellspacing="0"  align="center" >
<tr>
<td background="<?php echo $this->_tpl_vars['Images_Path']; ?>
/leftbg.gif" width="14">&nbsp;</td>
<td>
<table width="95%" border="0" cellpadding="0" cellspacing="0"  align="center" >
<tr>
<td>
<div style="font:normal 11px Verdana; padding-top:9px; padding-left:7px; padding-bottom:8px; line-height:18px;">

 Dear <strong><?php if ($this->_tpl_vars['NAME']): ?><?php echo $this->_tpl_vars['NAME']; ?>
<?php else: ?><?php echo $this->_tpl_vars['USERNAME']; ?>
<?php endif; ?></strong>,
<p>It&rsquo;s been almost one year since your last resume update. As a result, your resume is currently
  being ignored by the recruiters. </p>

<p>It is recommended that you update your resume. This will help you make use of resources on
  offer at Naukri.com in its capacity as the leading web portal for jobs. With a database of more
  than <strong>2,00,000 jobs</strong> and a pool of about <strong>25,000 recruiters</strong>, finding that perfect job is never too
  difficult.</p>
<p>You last updated your resume on <strong><?php echo $this->_tpl_vars['MOD_DT_STR']; ?>
</strong><br />

  Be a part of those successful candidates for whom Naukri.com has made the difference by
  helping them find that perfect job. </p>
</div>
 </td>
</tr>
<tr>
<td bgcolor="#FFFEC5" background="<?php echo $this->_tpl_vars['Images_Path']; ?>
/testimonialbg.gif" width="548" height="131" style="font:normal 11px Verdana; padding-left:45px; padding-right:8px; line-height:16px; background-repeat:no-repeat;">
<p>"All I did was, update my resume on naukri.com. They connected me with some of the Top
  recruiters. Now I am working with one of the leading MNCs.
<br />Thanks naukri.com,<br />
  <strong>Karan Kapoor</strong>, Delhi"
</td>
</tr>
<tr>
<td height="10"></td></tr>
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
<td width="25%" height="25" style="font:normal 11px Verdana; padding-top:3px;  padding-bottom:3px;"><strong>Email Id </strong></td>
<td width="2%" style="font:normal 11px Verdana;">:</td>
<td width="73%" style="font:normal 11px Verdana;"><?php if ($this->_tpl_vars['EMAIL'] != ""): ?><?php echo $this->_tpl_vars['EMAIL']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></td>
</tr>
<tr>
<td width="25%" height="25" style="font:normal 11px Verdana; padding-top:3px;  padding-bottom:3px;"><strong>Telephone number</strong></td>
<td width="2%" style="font:normal 11px Verdana;">:</td>
<td width="73%" style="font:normal 11px Verdana;">(M) <?php if ($this->_tpl_vars['MPHONE'] != ""): ?><?php echo $this->_tpl_vars['MPHONE']; ?>
<?php else: ?>Not Mentioned<?php endif; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(R) <?php if ($this->_tpl_vars['RPHONE'] != ""): ?><?php echo $this->_tpl_vars['RPHONE']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></td>

</tr>
<tr>
<td width="25%" height="25" style="font:normal 11px Verdana; padding-top:3px;  padding-bottom:3px;"><strong>Location</strong></td>
<td width="2%" style="font:normal 11px Verdana;">:</td>
<td width="73%" style="font:normal 11px Verdana;"><?php if ($this->_tpl_vars['CITY']): ?><?php echo $this->_tpl_vars['CITY']; ?>
<?php if ($this->_tpl_vars['COUNTRY']): ?>, <?php echo $this->_tpl_vars['COUNTRY']; ?>
<?php endif; ?><?php elseif ($this->_tpl_vars['COUNTRY']): ?><?php echo $this->_tpl_vars['COUNTRY']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></td>
</tr>
<tr>
<td width="25%" height="25" style="font:normal 11px Verdana; padding-top:3px;  padding-bottom:3px;"><strong>CTC</strong></td>
<td width="2%" style="font:normal 11px Verdana;">:</td>
<td width="73%" style="font:normal 11px Verdana;"><?php if ($this->_tpl_vars['CTC'] != ""): ?><?php echo $this->_tpl_vars['CTC']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></td>

</tr>
<tr>
<td width="25%" height="25" style="font:normal 11px Verdana; padding-top:3px;  padding-bottom:3px;"><strong>Role</strong></td>
<td width="2%" style="font:normal 11px Verdana;">:</td>
<td width="73%" style="font:normal 11px Verdana;"><?php if ($this->_tpl_vars['ROLE'] != ""): ?><?php echo $this->_tpl_vars['ROLE']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></td>
</tr>
<tr>
<td width="25%" height="25" style="font:normal 11px Verdana; padding-top:3px;  padding-bottom:3px;"><strong>Functional Area</strong></td>
<td width="2%" style="font:normal 11px Verdana;">:</td>
<td width="73%" style="font:normal 11px Verdana;"><?php if ($this->_tpl_vars['FAREA'] != ""): ?><?php echo $this->_tpl_vars['FAREA']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></td>
</tr>

<tr>
<td width="25%" height="25" style="font:normal 11px Verdana; padding-top:3px;  padding-bottom:3px;"><strong>Industry Type</strong></td>
<td width="2%" style="font:normal 11px Verdana;">:</td>
<td width="73%" style="font:normal 11px Verdana;"><?php if ($this->_tpl_vars['IND_TYPE'] != ""): ?><?php echo $this->_tpl_vars['IND_TYPE']; ?>
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
  <td  align="left" style=" font:normal 11px verdana;  padding: 9px; color:#000000;  line-height:18px;"><p>Your naukri account username is :<strong> <?php echo $this->_tpl_vars['USERNAME']; ?>
</strong></p></td>
  </tr>

<tr>
    <td valign="bottom" colspan="2">
	<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>

    <td width="7">&nbsp;</td>
    <td bgcolor="#FFD953" >
	<table width="100%"  align="center" border="0" cellspacing="0" cellpadding="0" style="   BORDER-RIGHT: #FFC148 1px groove; BORDER-TOP: #FFC148 1px groove; BORDER-LEFT: #FFC148 1px groove;  BORDER-BOTTOM: #FFC148 1px groove; background:url(<?php echo $this->_tpl_vars['Images_Path']; ?>
/bg.gif)">
	  <tr>
	 	  <td height="18">
	 <div align="center" style="font-family:verdana; line-height:19px; font-size:13px; "> <a href="http://my.naukri.com/AL/interUpdate/alid/<?php echo $this->_tpl_vars['ALID']; ?>
/msrc/<?php echo $this->_tpl_vars['MSRC']; ?>
" target="_blank" style="text-decoration:none; color:#FF0000"><strong><font color="#FF0000">Update your CV to get on top of the Employer's CV Search</font></strong></a></div></td>
	   </tr>
</table>
</td>


    <td width="80">&nbsp;</td>
  </tr>
</table>


	</td>
  </tr>
<tr><td>&nbsp;</td></tr>
<tr><td align="left" style="font:normal 9px verdana;  padding: 9px; color:#000000;  line-height:15px;">We are sending this mail as you have registered with naukri.com. <a href="<?php echo $this->_tpl_vars['UNSUBSCRIBE_URL']; ?>
" target="_blank">Use this link</a>, if you do not want to receive any further mails.</td></tr>
<tr><td align="left" style="font:normal 11px verdana;  padding: 9px; color:#000000;  line-height:18px;">To ensure you get all correspondence from recruiters and companies who may contact you through naukri.com, please add this email id (info@naukri.com) to your address book.</td></tr>
   <tr>
  <td height="10"></td>
  </tr>

</table>
</td>
<td background="<?php echo $this->_tpl_vars['Images_Path']; ?>
/rightbg.gif" width="16">&nbsp;</td>
</tr>
</table>

<table width="600" border="0" cellpadding="0" cellspacing="0"  align="center" >
<tr>
<td><img src="<?php echo $this->_tpl_vars['Images_Path']; ?>
/btm.gif" alt="" width="600" height="25" /></td>
</tr>
</table>
</body>
</html>