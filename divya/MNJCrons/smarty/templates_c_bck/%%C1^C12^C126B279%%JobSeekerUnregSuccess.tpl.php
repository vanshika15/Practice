<?php /* Smarty version 2.6.19, created on 2014-06-09 12:00:48
         compiled from /home/vikasa/cron/SendQueryCron/templates/JobSeekerUnregSuccess.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
  <title>Naukri Job Alert</title>

  
</head><body>
<table style="border: 1px solid rgb(233, 233, 233);" align="center" border="0" cellpadding="0" cellspacing="0" width="600">

  <tbody>
    <tr>
      <td height="20" width="20"><br>
      </td>
      <td><br>
      </td>
      <td width="20"><br>
      </td>
    </tr>
    <tr>
      <td><br>
      </td>
      <td>
      <table border="0" cellpadding="0" cellspacing="0" width="560">
        <tbody>
          <tr>
            <td align="left" width="200">
            <table align="left" border="0" cellpadding="0" cellspacing="0" width="175">
              <tbody>
                <tr>
                  <td width="22"><a href="http://www.naukri.com/" target="_blank"><img src="http://w10.naukri.com/naukrimailers/rvm/images/logo_curve.gif" alt="Naukri.com" border="0" height="27" width="22"></a></td>
                  <td style="font-family: Verdana,Arial; line-height: 19px; padding-top: 8px;" align="right" valign="top" width="167"><a href="http://www.naukri.com/" target="_blank" style="text-decoration: none;"><strong><span style="font-size: 24px; color: rgb(1, 171, 239);">naukri<span style="color: rgb(236, 24, 34);">.</span><span style="color: rgb(0, 108, 183);">com</span></span></strong></a><br>
                  <a href="http://www.naukri.com/" target="_blank" style="text-decoration: none;"><span style="font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 9px; color: rgb(61, 61, 61);">India's
No.1 Job Site</span></a></td>
                </tr>
              </tbody>
            </table>
            </td>
            <td align="right" width="360">
            <div style="border: 1px solid rgb(229, 229, 229); padding: 5px; float: right; font-family: Arial; font-size: 12px; color: rgb(100, 100, 100); background-color: rgb(239, 239, 239);">Stop
worrying about remembering your username<br>
Simply <a href="<?php  echo LOGIN_URL; ?>" target="_blank" style="text-decoration: none; font-size: 12px;">login to Naukri</a>
with you Email ID!</div>
            </td>
          </tr>
        </tbody>
      </table>
      </td>
      <td><br>
      </td>
    </tr>
    <tr>
      <td colspan="3" height="16"><br>
      </td>
    </tr>
    <tr>
      <td>
      </td>
      <td background="http://w10.naukri.com/mailers/2012/naukri/newja25jan/images/hline.gif" bgcolor="#e9e9e9" height="2">
      </td>
      <td>
      </td>
    </tr>
    <tr>
      <td><br>
      </td>
      <td height="28"><br>
      </td>
      <td><br>
      </td>
    </tr>
    <tr>
      <td><br>
      </td>
      <td>
      <table border="0" cellpadding="0" cellspacing="0" width="560">
        <tbody>
          <tr>
            <td style="font-family: Arial;" align="left" width="200"><span style="font-size: 18px;">Query</span><span style="font-size: 18px;">
Confirmation</span></td>
            <td style="font-family: Tahoma; font-size: 11px; color: rgb(114, 114, 114); line-height: 16px; letter-spacing: normal;" align="right" width="360">Please add <a href="mailto:info@naukri.com" style="text-decoration: none;">info@naukri.com</a>
to your contact list <br>
to prevent future mails from going into Junk/Spam folder.</td>
          </tr>
        </tbody>
      </table>
      </td>
      <td><br>
      </td>
    </tr>
    <tr>
      <td colspan="3" height="20"><br>
      </td>
    </tr>
    <tr>
      <td><br>
      </td>
      <td style="font-family: Arial; font-size: 12px; color: rgb(25, 25, 25); line-height: 17px;"><strong>Dear
Jobseeker,</strong><br>
You have posted a query on the following job through Naukri.com on <?php echo $this->_tpl_vars['queryDate']; ?>
.<br>
      <br>
Your query will be forwarded to the recruiter. They will soon contact
you on&nbsp; <strong><?php echo $this->_tpl_vars['jsEmail']; ?>
</strong>.</td>
      <td><br>
      </td>
    </tr>
    <tr>
      <td colspan="3" height="20"><br>
      </td>
    </tr>
    <tr>
      <td>
      </td>
      <td background="http://w10.naukri.com/mailers/2012/naukri/newja25jan/images/hline.gif" bgcolor="#e9e9e9" height="2">
      </td>
      <td>
      </td>
    </tr>
    <tr>
      <td colspan="3" height="20"><br>
      </td>
    </tr>
    <tr>
      <td><br>
      </td>
      <td>
      <table border="0" cellpadding="0" cellspacing="0" width="560">
        <tbody>
          <tr>
            <td style="font-family: Arial; font-size: 12px;" width="70%"><strong><a href="<?php echo $this->_tpl_vars['jdUrl']; ?>
"><?php echo $this->_tpl_vars['jdDetail']; ?>
</a></strong> <?php if ($this->_tpl_vars['jdYears'] != ''): ?><span style="color: rgb(71, 74, 75);">(<?php echo $this->_tpl_vars['jdYears']; ?>
 yrs.)</span><?php endif; ?></td>
            <td width="30%">&nbsp;</td>
          </tr>
          <tr>
            <td style="font-family: Arial; font-size: 12px; color: rgb(71, 74, 75);" width="70%"><?php echo $this->_tpl_vars['jdCompany']; ?>
 <span style="color: rgb(46, 164, 10);"><?php echo $this->_tpl_vars['jdLoc']; ?>
</span></td>
            <td align="right" width="30%"><a href="<?php echo $this->_tpl_vars['jdLikeUrl']; ?>
" target="_blank" style="text-decoration: none; font-size: 12px; font-family: Arial;"><strong>Send
me jobs like this</strong></a></td>
          </tr>
        </tbody>
      </table>
      </td>
      <td><br>
      </td>
    </tr>
    <tr>
      <td colspan="3" height="20"><br>
      </td>
    </tr>
    <tr>
      <td>
      </td>
      <td background="http://w10.naukri.com/mailers/2012/naukri/newja25jan/images/hline.gif" bgcolor="#e9e9e9" height="2">
      </td>
      <td>
      </td>
    </tr>
    <tr>
      <td><br>
      </td>
      <td>
      <table style="font-family: Arial; font-size: 12px; color: rgb(25, 25, 25); line-height: 17px;" border="0" cellpadding="0" cellspacing="0" width="560">
        <tbody>
          <tr>
            <td width="150"><br>
            </td>
            <td width="20"><br>
            </td>
            <td width="390"><br>
            </td>
          </tr>
          <tr>
            <td colspan="3" style="font-size: 13px; color: rgb(25, 25, 25);"><strong>Your query
sent to recruiters:</strong></td>
          </tr>
          <tr>
            <td colspan="3" height="15"><br>
            </td>
          </tr>
          <tr>
            <td align="left" valign="top">Email </td>
            <td align="center" valign="top">:</td>
            <td align="left" valign="top"><?php echo $this->_tpl_vars['jsEmail']; ?>
</td>
          </tr>
          <tr>
            <td align="left" valign="top">Query</td>
            <td align="center" valign="top">:</td>
            <td align="left" valign="top"><?php echo $this->_tpl_vars['jsQuery']; ?>
<br>
            </td>
          </tr>
        </tbody>
      </table>
      </td>
      <td><br>
      </td>
    </tr>
    <tr>
      <td colspan="3" height="20"><br>
      </td>
    </tr>
    <tr>
      <td>
      </td>
      <td background="http://w10.naukri.com/mailers/2012/naukri/newja25jan/images/hline.gif" bgcolor="#e9e9e9" height="2">
      </td>
      <td>
      </td>
    </tr>
    <tr>
      <td colspan="3" height="15"><br>
      </td>
    </tr>
    <tr>
      <td><br>
      </td>
      <td style="border: 1px solid rgb(226, 226, 226);" bgcolor="#f1f1f1">
      <table style="font-family: Arial; font-size: 12px; color: rgb(25, 25, 25);" border="0" cellpadding="0" cellspacing="0" width="560">
        <tbody>
          <tr>
            <td width="20"><br>
            </td>
            <td width="20"><br>
            </td>
            <td width="365"><br>
            </td>
            <td width="110"><br>
            </td>
            <td width="45"><br>
            </td>
          </tr>
          <tr>
            <td colspan="5" height="13"><br>
            </td>
          </tr>
          <tr>
            <td><br>
            </td>
            <td colspan="2" style="font-size: 18px; color: rgb(71, 74, 75);">Get the Naukri
Advantage</td>
            <td align="center">&nbsp;</td>
            <td><br>
            </td>
          </tr>
          <tr>
            <td colspan="5" height="15"><br>
            </td>
          </tr>
          <tr>
            <td><br>
            </td>
            <td><br>
            </td>
            <td style="color: rgb(25, 25, 25);" height="20">&#8226;&nbsp;
Apply to jobs in one-click</td>
            <td><br>
            </td>
            <td><br>
            </td>
          </tr>
          <tr>
            <td><br>
            </td>
            <td><br>
            </td>
            <td style="color: rgb(25, 25, 25);" height="25">&#8226;&nbsp; Get
exclusive access to confidential jobs</td>
            <td><br>
            </td>
            <td><br>
            </td>
          </tr>
          <tr>
            <td><br>
            </td>
            <td><br>
            </td>
            <td style="color: rgb(25, 25, 25);" height="25">&#8226;&nbsp;
Search and apply to jobs on the go from your mobile <br>
            </td>
            <td style="border: 1px solid rgb(255, 194, 31); text-align: center;" align="center" bgcolor="#fde25e" height="25" width="110"><a href="<?php  echo REGISTER_URL; ?>" style="padding: 4px 0px; font-family: Arial; color: rgb(0, 0, 0); text-decoration: none; font-size: 12px; display: block;"><strong>Register
Now</strong></a></td>
            <td><br>
            </td>
          </tr>
          <tr>
            <td colspan="5" height="10"><br>
            </td>
          </tr>
        </tbody>
      </table>
      </td>
      <td><br>
      </td>
    </tr>
    <tr>
      <td colspan="3" height="20"><br>
      </td>
    </tr>
    <tr>
      <td><br>
      </td>
      <td>
      <table style="font-family: Arial;" border="0" cellpadding="0" cellspacing="0" width="560">
        <tbody>
          <tr>
            <td colspan="2" style="font-size: 12px; color: rgb(71, 74, 75);"><a href="http://my.naukri.com/faq/faq.php?pgid=2&amp;id=" target="_blank" style="text-decoration: none;">Frequently Asked Questions about how
Naukri.com works</a></td>
          </tr>
          <tr>
            <td colspan="2" style="font-size: 12px; color: rgb(71, 74, 75);">&nbsp;</td>
          </tr>
          <tr>
            <td style="font-size: 12px; color: rgb(71, 74, 75);">Wish
you good luck in your job search.<br>
            <br>
Regards,<br>
            <strong><span style="color: rgb(24, 155, 214);">naukri</span><span style="color: rgb(223, 41, 42);">.</span><span style="color: rgb(17, 105, 172);">com</span></strong> team</td>
          </tr>
          <tr>
            <td height="33"><br>
            </td>
          </tr>
          <tr>
            <td style="color: rgb(25, 25, 25); font-size: 12px;"><strong><a href="<?php  echo ResumeWritingService_URL; ?>" style="text-decoration: none;">Apply for your next job with
an effective CV that gets you noticed.</a></strong><br>
Call<strong> 1800-102-5557</strong> (toll free) now!</td>
          </tr>
        </tbody>
      </table>
      </td>
      <td><br>
      </td>
    </tr>
    <tr>
      <td colspan="3" height="20"><br>
      </td>
    </tr>
    <tr>
      <td>
      </td>
      <td background="http://w10.naukri.com/mailers/2012/naukri/newja25jan/images/hline.gif" bgcolor="#e9e9e9" height="2">
      </td>
      <td>
      </td>
    </tr>
    <tr>
      <td colspan="3" height="20"><br>
      </td>
    </tr>
    <tr>
      <td><br>
      </td>
      <td style="font-family: Tahoma; color: rgb(157, 157, 157); font-size: 10px;"><span style="font-size: 11px;"><a href="<?php  echo JobseekerReportProblem_URL; ?>" style="text-decoration: none;">Report
a Problem</a></span><br>
      <br>
This is a system generated e-mail, please do not reply to this message.
The jobs sent in this mail have been posted by the <br>
clients of Naukri.com. IEIL has taken all reasonable steps to ensure
that the information in this mailer is authentic. Users are <br>
advised to research bonafides of advertisers independently. IEIL shall
not have any responsibility in this regard. We <br>
recommend that you visit <span style="font-size: 11px;"><a href="<?php  echo TNC_URL; ?>" style="text-decoration: none;">Terms &amp; Conditions</a></span> and
the <span style="font-size: 11px;"><a href="<?php  echo JobseekerSecurityAdvice_URL; ?>" style="text-decoration: none;">Security Advice</a></span> for more
comprehensive information.</td>
      <td><br>
      </td>
    </tr>
    <tr>
      <td height="20" width="20"><br>
      </td>
      <td><br>
      </td>
      <td width="20"><br>
      </td>
    </tr>
  </tbody>
</table>

</body></html>