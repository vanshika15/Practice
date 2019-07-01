<?php /* Smarty version 2.6.19, created on 2010-12-30 15:50:40
         compiled from ./dashboard/jamxmailer.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JAMX Mailer</title>
</head>
<body>
<img src="<?php echo $this->_tpl_vars['EmTrack_Path']; ?>
" height="0" width="0" style="display:none" />
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="text-align:left;">
  <tr>
    <td height="83" valign="bottom" background="<?php echo $this->_tpl_vars['Images_Path']; ?>
/top_blue_bg.gif" bgcolor="#065688"><table width="592" border="0" align="left" cellpadding="0" cellspacing="0">
        <tr>
          <td width="375" height="61" align="center" valign="top"><div style="font-family:ms sans serif, tahoma, arial ; font-size:13px; color:#FFFFFF; text-align:left; padding-left:10px; line-height:14px; margin:0px; width:360px;"><?php echo $this->_tpl_vars['PromoMessage']; ?>
</div>
          </td>
          <td width="217" align="right" valign="middle" background="<?php echo $this->_tpl_vars['Images_Path']; ?>
/logo_bg_new.gif" bgcolor="#FDFDFD"><table width="175" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="24"><a href="http://www.naukri.com/" target="_blank"><img src="<?php echo $this->_tpl_vars['Images_Path']; ?>
/logo_curve_new.gif" alt="Naukri.com" width="22" height="27" border="0" /></a></td>
                <td width="167" align="center" valign="top" style="font-family:Verdana, Arial; line-height:19px; padding-top:8px;"><a href="http://www.naukri.com/" target="_blank" style="text-decoration:none;"><b><span style="font-size:24px; color:#01abef;">naukri<span style="color:#ec1822;">.</span><span style="color:#006cb7;">com</span></span></b></a><br />
                  <a href="http://www.naukri.com/" target="_blank" style="text-decoration:none;"><span style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:9px; color:#3d3d3d;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; India's No.1 Job Site</span></a></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td align="center" valign="top" background="<?php echo $this->_tpl_vars['Images_Path']; ?>
/top_gray_bg.gif" bgcolor="#FCFCFC" style="font-family:Verdana, Arial; font-size:10px; color:#7d7d7d; line-height:14px; padding-top:9px; padding-bottom:10px;"><b>Please add</b> <a href="mailto:naukrialerts@naukri.com" style="text-decoration:underline; color:#0068b0;">naukrialerts@naukri.com</a> to your contact list to prevent your job alert<br /> 
    mails from going into spam/junk folder.</td>
  </tr>
  <tr>
    <td height="18" bgcolor="#eeeded"></td>
  </tr>
  <tr>
    <td bgcolor="#eeeded" style="font-family:Georgia, Times New Roman; arial; font-size:19px; padding:0px 0px 0px 23px; color:#444343;"><img src="<?php echo $this->_tpl_vars['Images_Path']; ?>
/alert_sign.gif" width="45" height="40" align="left" style="padding:4px 12px 4px 0px;" /><b>You last updated your resume on : <?php echo $this->_tpl_vars['mod_dt']; ?>
</b><br />
     We might as well stop sending you Job Alerts!</td>
  </tr>
  <tr>
    <td height="18" bgcolor="#eeeded"></td>
  </tr>
  <tr>
    <td height="20"></td>
  </tr>
  <tr>
    <td style="font-family:Verdana, Arial; font-size:12px; padding:0px 0px 0px 10px; color:#4f4e4e; line-height:19px;">Dear <?php echo $this->_tpl_vars['name']; ?>
,<br />
      <br />
      We have been recommending you jobs on the basis of your profile which is outdated by more than 2 years!<b> So we have decided to stop sending you irrelevant job alerts unless you update your profile in the next <?php echo $this->_tpl_vars['blockdays']; ?>
 day(s).</b>
      <br />
      <br />
      We are sure that in this time you have grown professionally - you may have learnt new skills and taken up new responsibilities. Then why not make all that really count by mentioning it in your online professional profile? There are two reasons for doing so: First, your profile on Naukri.com is what conveys your professional image to thousands of recruiters every day, so it is important to keep it in step with who you truly are. Second, regularly updating your profile gives you, or anyone for that matter, a sense of continuous professional growth.
     <br />
     <br />
     Thousands of professionals with a background similar to yours update their profiles every day with the information about who they are, what keeps them busy, and what their achievements are - so why should you stay behind? Login now with your username &quot;<?php echo $this->_tpl_vars['username']; ?>
&quot; or your emailID.
     <br />
     <br />
      <b>Your professional summary more than two years ago was:</b> </td>
  </tr>
  <tr>
    <td style="padding:0px 0px 0px 10px;"></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
  <tr>
    <td align="center" valign="top"><!-- Main Table For Applied Jobs -->
      <table width="580" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td bgcolor="#bdd0f2" height="2"></td>
        </tr>
        <tr>
          <td align="center" valign="top" bgcolor="#f2f6fd" style="padding:15px 0px 15px 0px;">
          <!-- Job1 Starts Here -->
            <table width="540" border="0" align="center" cellpadding="0" cellspacing="0" style="text-align:left; font-family:Verdana, Arial; font-size:11px; color:#474a4b;">
              <tr>
                <td width="524" colspan="3"><div style="font-family:Verdana, Arial; font-size:12px; line-height:17px; color:#006eb3;"><b><?php echo $this->_tpl_vars['summary']; ?>
</b></div></td>
              </tr>
              <tr>
                <td height="14" colspan="3"></td>
              </tr>
              <tr>
                <td><img src="<?php echo $this->_tpl_vars['Images_Path']; ?>
/zero.gif" width="109" height="1" hspace="0" vspace="0" align="left" /></td>
                <td><img src="<?php echo $this->_tpl_vars['Images_Path']; ?>
/zero.gif" width="17" height="1" hspace="0" vspace="0" align="left" /></td>
                <td><img src="<?php echo $this->_tpl_vars['Images_Path']; ?>
/zero.gif" width="380" height="1" hspace="0" vspace="0" align="left" /></td>

              <tr>
                <td valign="top" style="font-family:Verdana; font-size:11px; color:#6f6f6f;">Designation</td>
                <td valign="top">:</td>
                <td style="font-family:Verdana; font-size:11px; color:#1e1e1e;"><?php if ($this->_tpl_vars['designation']): ?><?php echo $this->_tpl_vars['designation']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></td>
              <tr>
                <td height="11" colspan="3"></td>
              <tr>
                <td valign="top" style="font-family:Verdana; font-size:11px; color:#6f6f6f;">Employer</td>
                <td valign="top">:</td>
                <td style="font-family:Verdana; font-size:11px; color:#1e1e1e;"><?php if ($this->_tpl_vars['organisation']): ?><?php echo $this->_tpl_vars['organisation']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></td>
              <tr>
                <td height="11" colspan="3"></td>
              </tr>
              <tr>
                <td style="font-family:Verdana; font-size:11px; color:#6f6f6f;">Total Experience</td>
                <td>:</td>
                <td style="font-family:Verdana; font-size:11px; color:#1e1e1e;"><?php if ($this->_tpl_vars['exp'] != ''): ?><?php echo $this->_tpl_vars['exp']; ?>
 yrs<?php else: ?>Not Mentioned<?php endif; ?></td>
              <tr>
                <td height="11" colspan="3"></td>
              </tr>
              <tr>
                <td style="font-family:Verdana; font-size:11px; color:#6f6f6f;">Annual Salary</td>
                <td>:</td>
                <td style="font-family:Verdana; font-size:11px; color:#1e1e1e;"><?php if ($this->_tpl_vars['ctc']): ?><?php if ($this->_tpl_vars['ctc_type'] == 'I'): ?><img src="<?php echo $this->_tpl_vars['Images_Path']; ?>
/rupee.gif" alt="Rupee" width="8" height="9" /><?php elseif ($this->_tpl_vars['ctc_type'] == 'U'): ?>USD<?php endif; ?> <?php echo $this->_tpl_vars['ctc']; ?>
 Lac(s)<?php else: ?>Not Mentioned<?php endif; ?></td>
              <tr>
                <td height="11" colspan="3"></td>
              </tr>
              <tr>
                <td valign="top" style="font-family:Verdana; font-size:11px; color:#6f6f6f;">Industry</td>
                <td>:</td>
                <td style="font-family:Verdana; font-size:11px; color:#1e1e1e;"><?php if ($this->_tpl_vars['industry']): ?><?php echo $this->_tpl_vars['industry']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></td>
              <tr>
                <td height="11" colspan="3"></td>
              </tr>
              <tr>
                <td valign="top" style="font-family:Verdana; font-size:11px; color:#6f6f6f;">Functional Area</td>
                <td>:</td>
                <td style="font-family:Verdana; font-size:11px; color:#1e1e1e;"><?php if ($this->_tpl_vars['farea']): ?><?php echo $this->_tpl_vars['farea']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></td>
              <tr>
                <td height="11" colspan="3"></td>
              </tr>
              <tr>
                <td valign="top" style="font-family:Verdana; font-size:11px; color:#6f6f6f;">Role</td>
                <td>:</td>
                <td style="font-family:Verdana; font-size:11px; color:#1e1e1e;"><?php if ($this->_tpl_vars['role']): ?><?php echo $this->_tpl_vars['role']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></td>
              <tr>
                <td height="11" colspan="3"></td>
              </tr>
              <tr>
                <td valign="top" style="font-family:Verdana; font-size:11px; color:#6f6f6f;">Current Location</td>
                <td>:</td>
                <td style="font-family:Verdana; font-size:11px; color:#1e1e1e;"><?php if ($this->_tpl_vars['city']): ?><?php echo $this->_tpl_vars['city']; ?>
<?php else: ?>Not Mentioned<?php endif; ?></td>
              <tr>
                <td height="18" colspan="3"></td>
              </tr>
              <tr>
                <td colspan="3"><table width="540" border="0" cellspacing="0" cellpadding="0">
          <tr>     <td width="211" height="25" align="center" background="<?php echo $this->_tpl_vars['Images_Path']; ?>
/button_bg.gif" bgcolor="#FDE25E" style="border:solid 1px #ffc21f; text-align:center;"><a href="http://my.naukri.com/AL/jamxUpdate/alid/<?php echo $this->_tpl_vars['ALID']; ?>
" style="font-family:Verdana, Arial; color:#000000; text-decoration:none; padding:4px 0px 4px 0px; display:block; font-size:11px;"><strong>Update Your Resume Now</strong></a></td>
            <td width="329" align="left" style="font-family:verdana; font-size:10px; color:#595959;">&nbsp; (*You will be automatically logged-in the first time)</td>
          </tr>
        </table></td>
              </tr>
            </table>
            <!-- Job1 Ends Here -->
            <!-- Job2 Starts Here -->
            <!-- Job2 Ends Here -->
            <!-- Job3 Starts Here -->
            <!-- Job3 Ends Here -->          </td>
        </tr>
        <tr>
          <td bgcolor="#bdd0f2" height="4"></td>
        </tr>
      </table>
      <!-- Main Table For Applied Jobs Ends Here -->    </td>
  </tr>
  <tr>
    <td height="18"></td>
  </tr>
  <tr>
    <td align="left" valign="top" style="font-family:Verdana, Arial; font-size:11px; color:#3b3b3b; line-height:17px; padding:0px 15px 0px 15px;">You can also <strong><a href="http://jobsearch.naukri.com/mynaukri/js_msngr.php?xz=0_0_18&ma=C&id=" target="_blank" style="color:#006eb3; text-decoration:underline;">Create your own Job Alerts</a></strong></td>
  </tr>
  <tr>
    <td height="20"></td>
  </tr>
  <tr>
    <td align="left" valign="top" style="font-family:Verdana, Arial; font-size:11px; color:#3b3b3b; line-height:17px; padding:0px 15px 0px 15px;"><strong>Note:</strong> If you do not wish to receive Job Alerts, you can <a href="http://www.naukri.com/customised/unsubscribe/unsubscribe.php?mail_cat=UP&mail_type=nja&mailer_id=8252" target="_blank" style="color:#006eb3; text-decoration:underline;">unsubscribe</a> from these after updating your professional information.</td>
  </tr>
</table>
</body>
</html>