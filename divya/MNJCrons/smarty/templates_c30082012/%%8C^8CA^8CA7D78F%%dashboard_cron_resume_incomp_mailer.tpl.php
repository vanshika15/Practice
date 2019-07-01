<?php /* Smarty version 2.6.19, created on 2012-08-14 02:01:42
         compiled from ni/nidashboard/dashboard_cron_resume_incomp_mailer.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Your resume on naukri.com is incomplete</title>
</head>

<body>
<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border:#D1D1D1 1px solid;">
  <tr><td>
<table width="600" border="0" cellpadding="0" cellspacing="0"  align="center">
  <tr>
 	 <td colspan="2"><a href="http://www.naukrigulf.com/" style="color:#026CB5; text-decoration:none;" target="_blank"><img src="<?php echo $this->_tpl_vars['BASE_IMAGES_PATH']; ?>
/logo_mailer.gif" align="right" alt="naukrigulf.com" title="naukrigulf.com" width="229" height="68" border="0" /></a></td>
  </tr>

   <tr>
  <td colspan="2"><div align="center" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:26px; padding-top: 8px;  padding-bottom: 8px; color:#000000;">
  <a href="<?php echo $this->_tpl_vars['SERVER_DOMAIN_MAILER']; ?>
/nimanager/res_preview.php?conmailer=<?php echo $this->_tpl_vars['CONMAILER']; ?>
&mlid=<?php echo $this->_tpl_vars['MLID']; ?>
" style="color:#026CB5; text-decoration:none;" target="_blank">Complete your resume</a>  and make the difference
  </div></td>
  </tr>
     <tr>
  <td colspan="2"><div align="justify" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-right:9px; padding-top:9px; color:#000000;  line-height:18px; ">Dear <strong><?php echo $this->_tpl_vars['NAME']; ?>
</strong>,<br />

    <br />
    Thank you for registering on <a href="http://www.naukrigulf.com/" style="color:#026CB5; text-decoration:none;" target="_blank">naukrigulf.com</a>. Top companies are looking for talent like you <strong>but they cannot contact you because your CV on <a href="http://www.naukrigulf.com/" style="color:#026CB5; text-decoration:none;" target="_blank">naukrigulf.com</a> is incomplete.</strong> When you apply to jobs, an incomplete CV will be seen by recruiters. This will reduce your chances of getting short listed for job offers. <br />
        <br />
        Please take a few minutes to <strong><a href="<?php echo $this->_tpl_vars['SERVER_DOMAIN_MAILER']; ?>
/nimanager/res_preview.php?conmailer=<?php echo $this->_tpl_vars['CONMAILER']; ?>
&mlid=<?php echo $this->_tpl_vars['MLID']; ?>
" style="color:#026CB5" target="_blank">complete your CV</a></strong> and increase your chances of being contacted by recruiters.
<br />

<br />
<strong style="color:#026CB5;">Your Contact  Details: </strong></div></td>
  </tr>
       <tr>
  <td colspan="2">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="440">
	<div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-right:9px; padding-top:4px; padding-bottom:9px; color:#000000;  line-height:19px; ">&bull; <strong> Telephone : (M) </strong><?php if ($this->_tpl_vars['MPHONE'] != ""): ?><?php echo $this->_tpl_vars['MPHONE']; ?>
<?php else: ?>Not Mentioned<?php endif; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>(R) </strong><?php if ($this->_tpl_vars['RPHONE'] != ""): ?><?php echo $this->_tpl_vars['RPHONE']; ?>
<?php else: ?>Not Mentioned<?php endif; ?><br />

     &bull; <strong>Alternate Email : </strong><?php if ($this->_tpl_vars['OEMAIL'] != ""): ?><?php echo $this->_tpl_vars['OEMAIL']; ?>
<?php else: ?>Not Mentioned<?php endif; ?><br />
	       </div></td>

  </tr>
</table>


  </td>
  </tr>

  <tr>

  <td colspan="2"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-right:9px; padding-top:9px; color:#000000; ">Interested employers will not be able to reach you if your contact information is not accurate.
      <br />
      <br />
      <strong style="color:#026CB5;">Your CV  Details: </strong>
  </div></td>
  </tr>
       <tr>
  <td colspan="2">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>

    <td width="100%">
		<table width="652" border="0" cellspacing="0" cellpadding="0">
        <?php if (! $this->_tpl_vars['CUREMPLOYER']): ?>
  <tr>
    <td width="200"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; padding-top:6px; color:#000000;"><strong> > Current Employer </strong></div> </td>
    <td width="10"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-bottom:8px; padding-top:6px; color:#000000;">:</div></td>
    <td width="442"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-top:6px; padding-bottom:8px; color:#000000;">Not Mentioned</div></td>
    
  </tr>
        <?php endif; ?>
        <?php if (! $this->_tpl_vars['PREVDESIG']): ?>
   <tr>
    <td width="200"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; color:#000000;"><strong> > Previous Designation </strong></div> </td>
    <td width="10"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-bottom:8px; color:#000000;">:</div></td>
    <td width="442"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-bottom:8px; color:#000000;">Not Mentioned</div></td>
  </tr>
        <?php endif; ?>
        <?php if (! $this->_tpl_vars['PREVEMPLOYER']): ?>

   <tr>
    <td width="200"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; color:#000000;"><strong> > Previous Employer </strong></div> </td>
    <td width="10"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-bottom:8px; color:#000000;">:</div></td>
    <td width="442"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-bottom:8px; color:#000000;">Not Mentioned</div></td>
  </tr>
        <?php endif; ?>
        <?php if (! $this->_tpl_vars['EDUSPEC']): ?>
   <tr>

    <td width="200"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; color:#000000;"><strong> > Educational Specializations </strong></div> </td>
    <td width="10"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-bottom:8px; color:#000000;">:</div></td>
    <td width="442"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-bottom:8px; color:#000000;">Not Mentioned</div></td>
  </tr>
        <?php endif; ?>
        <?php if (! $this->_tpl_vars['ITSKILLS']): ?>
   <tr>
    <td width="200"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; color:#000000;"><strong> > Computer / IT Skills </strong></div> </td>

    <td width="10"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-bottom:8px; color:#000000;">:</div></td>
    <td width="442"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-bottom:8px; color:#000000;">Not Mentioned</div></td>
  </tr>
        <?php endif; ?>
        <?php if (! $this->_tpl_vars['LANGUAGE']): ?>
   <tr>
    <td width="200"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; color:#000000;"><strong> > Languages Known </strong></div> </td>
    <td width="10"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-bottom:8px; color:#000000;">:</div></td>

    <td width="442"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-bottom:8px; color:#000000;">Not Mentioned</div></td>
  </tr>
        <?php endif; ?>
        <?php if (! $this->_tpl_vars['DOB']): ?>
   <tr>
    <td width="200"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; color:#000000;"><strong> > Date of Birth </strong></div> </td>
    <td width="10"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-bottom:8px; color:#000000;">:</div></td>
    <td width="442"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-bottom:8px; color:#000000;">Not Mentioned</div></td>

  </tr>
        <?php endif; ?>
        <?php if (! $this->_tpl_vars['DRIVINGLIC']): ?>
   <tr>
    <td width="200"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; color:#000000;"><strong> > Driving License </strong></div> </td>
    <td width="10"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-bottom:8px; color:#000000;">:</div></td>
    <td width="442"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-bottom:8px; color:#000000;">Not Mentioned</div></td>
  </tr>
        <?php endif; ?>
        <?php if (! $this->_tpl_vars['VISASTATUS']): ?>

   <tr>
    <td width="200"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; color:#000000;"><strong> > Visa Status </strong></div> </td>
    <td width="10"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-bottom:8px; color:#000000;">:</div></td>
    <td width="442"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-bottom:8px; color:#000000;">Not Mentioned</div></td>
  </tr>
        <?php endif; ?>
        <?php if (! $this->_tpl_vars['OEMAIL']): ?>

  <tr>
    <td width="200"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; color:#000000;"><strong> > Alternate Email ID </strong></div> </td>
    <td width="10"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-bottom:8px; color:#000000;">:</div></td>
    <td width="442"><div align="left" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-bottom:8px; color:#000000;">Not Mentioned</div></td>
  </tr>
        <?php endif; ?>
</table>

	</td>
  </tr>
</table>


  </td>
  </tr>
     <tr>
  <td colspan="2" height="20"><div align="justify" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:9px; padding-right:9px; padding-top:5px; padding-bottom:5px; color:#000000;  line-height:18px; ">Your <a href="http://www.naukrigulf.com/" style="color:#026CB5; text-decoration:none;" target="_blank">naukrigulf.com</a> account username is : <strong><?php echo $this->_tpl_vars['USERNAME']; ?>
</strong></div></td>
  </tr>


  <tr>
    <td valign="bottom" colspan="2">
	<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td width="2%">&nbsp;</td>
    <td width="30%" bgcolor="#FFD953" >
	<table width="100%"  align="center" border="0" cellspacing="0" cellpadding="0" style="   BORDER-RIGHT: #FFC148 1px groove; BORDER-TOP: #FFC148 1px groove; BORDER-LEFT: #FFC148 1px groove;  BORDER-BOTTOM: #FFC148 1px groove; background:url(<?php echo $this->_tpl_vars['BASE_IMAGES_PATH']; ?>
/btnbg_mailer.gif)">
	  <tr>
	 	  <td>
	 <div align="center" style="font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; line-height:19px; font-size:13px; "> <a href="<?php echo $this->_tpl_vars['SERVER_DOMAIN_MAILER']; ?>
/nimanager/res_preview.php?conmailer=<?php echo $this->_tpl_vars['CONMAILER']; ?>
&mlid=<?php echo $this->_tpl_vars['MLID']; ?>
" target="_blank" style="text-decoration:none; color:#FF0000"><strong>Complete Your CV Now</strong></a></div></td>

	   </tr>
</table>
</td>

    <td width="68%">&nbsp;</td>
  </tr>
</table>


	</td>
  </tr>
  <tr>

  <td colspan="2" height="20"></td>
  </tr>
   <tr>
    <td colspan="2">
	<div style="padding-left:10px; padding-right:10px; font-family:tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:11px;">With Regards,<br>
The <span style="color:#00ADEE;"><strong>naukri</strong></span><span style="color:#4ab549;"><strong>gulf</strong></span><span style="color:#ED1E26;"><strong>.</strong></span><span style="color:#006CB5;"><strong>com</strong></span> team</div></td>

  </tr>
<tr><td>&nbsp;</td></tr>
<tr><td align="left" style="font:normal 9px verdana;  padding: 9px; color:#000000;  line-height:15px;">We are sending this mail as you have registered with <a href="http://www.naukrigulf.com" target="_blank">naukrigulf.com</a>. <a href="<?php echo $this->_tpl_vars['SERVER_DOMAIN_MAILER']; ?>
/nimanager/res_unsubscribe.php?conmailer=<?php echo $this->_tpl_vars['CONMAILER']; ?>
&umflag=CS" target="_blank">Use this link</a>, if you do not want to receive any further mails.</td></tr>
<tr><td align="left" style="font:normal 11px verdana;  padding: 9px; color:#000000;  line-height:18px;">To ensure you get all correspondence from recruiters and companies who may contact you through <a href="http://www.naukrigulf.com" target="_blank">naukrigulf.com</a>, please add this email id (info@naukrigulf.com) to your address book.</td></tr>
   <tr>
    <td colspan="2" height="10"></td>
  </tr>
  </table>
  </td></tr>
</table>
</body>
</html>