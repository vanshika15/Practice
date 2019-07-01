<?php /* Smarty version 2.6.19, created on 2011-11-26 02:00:05
         compiled from ni/nidashboard/dashboard_cron_resume_incomp_mailer.ar.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Your resume on naukri.com is incomplete</title>

</head>



<body>

<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border:#D1D1D1 1px solid;">

  <tr>

    <td colspan="2"><a href="http://www.naukrigulf.com/" style="color:#026CB5; text-decoration:none;" target="_blank"><img src="<?php echo $this->_tpl_vars['BASE_IMAGES_PATH']; ?>
/logo_mailer.gif" align="right" alt="naukrigulf.com" title="naukrigulf.com" width="229" height="68" border="0" /></a></td>

  </tr>

  <tr>

    <td colspan="2"><div align="center" style="font-family:tahoma, Verdana, Arial; font-size:26px; padding: 8px 0; color:#000000; text-align:center;" dir="rtl" lang="ar"><a href="<?php echo $this->_tpl_vars['SERVER_DOMAIN_MAILER']; ?>
/nimanager/res_preview.php?conmailer=<?php echo $this->_tpl_vars['CONMAILER']; ?>
&mlid=<?php echo $this->_tpl_vars['MLID']; ?>
&lang=ar" style="color:#026CB5; text-decoration:none;" target="_blank">أكمل سيرتك الذاتية</a> و اجعل تغييرا</div></td>

  </tr>

  <tr>

    <td colspan="2"><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-right:9px; padding-top:9px; color:#000000; line-height:18px;" dir="rtl" lang="ar">عزيزي <strong><?php echo $this->_tpl_vars['NAME']; ?>
</strong>,<br />

        <br />

        شكرا للتسجيل على <a href="http://www.naukrigulf.com/" style="color:#026CB5; text-decoration:none;" target="_blank">naukrigulf.com</a>. أكبر الشركات يبحثون عن مواهب مثلك ولكنهم لا يستطعون الإتصال بك لأن سيرتك الذاتية على <a href="http://www.naukrigulf.com/" style="color:#026CB5; text-decoration:none;" target="_blank">naukrigulf.com</a> ناقصة. سيشاهدوا أصحاب العمل سيرتك الذاتية الناقصة عندما تتقدم للوظائف ،وهذا سيقلل من فرصك للوصول الى القائمة النهائية لعروض العمل.<br />

        <br />

        يرجى أخذ بضع دقائق <a href="<?php echo $this->_tpl_vars['SERVER_DOMAIN_MAILER']; ?>
/nimanager/res_preview.php?conmailer=<?php echo $this->_tpl_vars['CONMAILER']; ?>
&mlid=<?php echo $this->_tpl_vars['MLID']; ?>
" style="color:#026CB5" target="_blank">لإكمال سيرتك الذاتية</a> وزيادة فرصك للاتصال بك من قبل أصحاب العمل. <br />

        <br />

        <strong style="color:#026CB5;">تفاصيل الإتصال الخاصة بك:</strong></div></td>

  </tr>

  <tr>

    <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">

        <tr>

          <td width="440"><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-right:9px; padding-top:4px; padding-bottom:9px; color:#000000;  line-height:19px;" dir="rtl" lang="ar">&bull; <strong> الهاتف: (الجوال) </strong><?php if ($this->_tpl_vars['MPHONE'] != ""): ?><?php echo $this->_tpl_vars['MPHONE']; ?>
<?php else: ?>غير مذكور<?php endif; ?>&nbsp;&nbsp;&nbsp;<strong style="display:inline-block;padding-right:4px;">(R) </strong><?php if ($this->_tpl_vars['RPHONE'] != ""): ?><?php echo $this->_tpl_vars['RPHONE']; ?>
<?php else: ?>غير مذكور<?php endif; ?><br />

              &bull; <strong>بريد الكتروني بديل: </strong><?php if ($this->_tpl_vars['OEMAIL'] != ""): ?><?php echo $this->_tpl_vars['OEMAIL']; ?>
<?php else: ?>غير مذكور<?php endif; ?><br />

            </div></td>

        </tr>

      </table></td>

  </tr>

  <tr>

    <td colspan="2"><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-right:9px; padding-top:9px; color:#000000;" dir="rtl" lang="ar">أصحاب العمل المهتمين لن يستطيعون الإتصال بك إذا معلومات الإتصال الخاصة بك غير دقيقة.<br />

        <br />

        <strong style="color:#026CB5;">تفاصيل سيرتك الذاتية :</strong> </div></td>

  </tr>

  <tr>

    <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">

        <tr>

          <td width="100%"><table width="596" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td width="415"><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-top:6px; padding-bottom:8px; color:#000000;" dir="ltr" lang="ar"><?php if ($this->_tpl_vars['TOTAL_EXP'] != ""): ?><?php echo $this->_tpl_vars['TOTAL_EXP']; ?>
<?php else: ?>غير مذكور<?php endif; ?></div></td>

                <td width="10"><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-bottom:8px; padding-top:6px; color:#000000;" dir="rtl" lang="ar">:</div></td>

                <td width="161"><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; padding-top:6px; color:#000000;" dir="rtl" lang="ar"><strong> إجمالي الخبرة </strong></div></td>

                <td width="10" rowspan="9"></td>

              </tr>

              <tr>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar"><?php if ($this->_tpl_vars['FAREA'] != ""): ?> <?php echo $this->_tpl_vars['FAREA']; ?>
<?php else: ?>غير مذكور<?php endif; ?></div></td>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar">:</div></td>

                <td width="161"><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar"><strong> المجال الوظيفي </strong></div></td>

              </tr>

              <tr>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar">غير مذكور</div></td>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar">:</div></td>

                <td width="161"><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar"><strong> القطاع المهني </strong></div></td>

              </tr>

              <tr>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar">غير مذكور</div></td>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar">:</div></td>

                <td width="161"><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar"><strong> الراتب الشهري </strong></div></td>

              </tr>

              <tr>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar">غير مذكور</div></td>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar">:</div></td>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar"><strong> صاحب العمل الحالي </strong></div></td>

              </tr>

              <tr>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar">غير مذكور</div></td>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar">:</div></td>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar"><strong> المسمى الوظيفي الحالي </strong></div></td>

              </tr>

              <tr>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar">غير مذكور</div></td>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar">:</div></td>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar"><strong> تفاصيل التعليم </strong></div></td>

              </tr>

              <tr>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar">غير مذكور</div></td>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar">:</div></td>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar"><strong> رخصة القيادة </strong></div></td>

              </tr>

              <tr>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar">غير مذكور</div></td>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar">:</div></td>

                <td><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-right:5px; padding-bottom:8px; color:#000000;" dir="rtl" lang="ar"><strong> وضع التأشيرة </strong></div></td>

              </tr>

            </table></td>

        </tr>

      </table></td>

  </tr>

  <tr>

    <td colspan="2" height="20"><div align="right" style="font-family:tahoma, Verdana, Arial; font-size:11px; padding-left:9px; padding-right:9px; padding-top:5px; padding-bottom:5px; color:#000000; line-height:18px;" dir="rtl" lang="ar">اسم المستخدم في حسابك مع <a href="http://www.naukrigulf.com/" style="color:#026CB5; text-decoration:none;" target="_blank">naukrigulf.com</a> هو : <strong><?php echo $this->_tpl_vars['USERNAME']; ?>
</strong></div></td>

  </tr>

  <tr>

    <td valign="bottom" colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">

        <tr>

          <td width="392">&nbsp;</td>

          <td width="196" bgcolor="#FFD953"><table width="196" align="center" border="0" cellspacing="0" background="<?php echo $this->_tpl_vars['BASE_IMAGES_PATH']; ?>
/btnbg_mailer.gif" cellpadding="0" style="BORDER: #FFC148 1px groove;">

              <tr>

                <td><div align="center" style="font-family:tahoma, Verdana, Arial; line-height:25px; font-size:13px;" dir="rtl" lang="ar"><a href="<?php echo $this->_tpl_vars['SERVER_DOMAIN_MAILER']; ?>
/nimanager/res_preview.php?conmailer=<?php echo $this->_tpl_vars['CONMAILER']; ?>
&mlid=<?php echo $this->_tpl_vars['MLID']; ?>
&lang=ar" target="_blank" style="text-decoration:none; color:#FF0000"><strong>أكمل سيرتك الذاتية الآن</strong></a></div></td>

              </tr>

            </table></td>

          <td width="10">&nbsp;</td>

        </tr>

      </table></td>

  </tr>

  <tr>

    <td colspan="2" height="20"></td>

  </tr>

  <tr>

    <td colspan="2"><div style="padding-right:10px; font-family:tahoma, Verdana, Arial; font-size:11px; text-align:right;" dir="rtl" lang="ar">مع أطيب التمنيات،<br>

        فريق <span style="text-align;right;" dir="ltr"><span style="color:#00ADEE;display:inline-block;"><strong>naukri</strong></span><span style="color:#4ab549;display:inline-block"><strong>gulf</strong></span><span style="color:#ED1E26;display:inline-block"><strong>.</strong></span><span style="color:#006CB5;display:inline-block"><strong>com</strong></span> </div></td>

  </tr>

  <tr>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td style="font:normal 9px verdana;  padding: 9px; color:#000000;  line-height:15px;tex-align:right;"><div dir="rtl" lang="ar" style="text-align:right">تستلم هذه الرسالة لأنك مسجّل مع <a href="http://www.naukrigulf.com" target="_blank" style="color:#026CB5;">naukrigulf.com</a> .<a href="<?php echo $this->_tpl_vars['SERVER_DOMAIN_MAILER']; ?>
/nimanager/res_unsubscribe.php?conmailer=<?php echo $this->_tpl_vars['CONMAILER']; ?>
&umflag=CS" target="_blank" style="color:#026CB5;">أنقر هنا </a>لحذف هذا الحساب واذا لا تريد استلام أي رسائل أخرى.</div></td>

  </tr>

  <tr>

    <td  style="font:normal 11px verdana;  padding: 9px; color:#000000;  line-height:18px;text-align:right;"><div dir="rtl" lang="ar" style="text-align:right">لضمان استلامك على جميع المراسلات من المجندين والشركات الذين يمكن الإتصال بك من خلال <a href="http://www.naukrigulf.com" target="_blank" style="color:#026CB5;">naukrigulf.com</a> يرجى إضافة البريد الإلكتروني التالي  (<a href="mailto:info@naukrigulf.com" target="_blank" style="color:#026CB5;">info@naukrigulf.com</a>)  الى صفحة العناوين الخاص بك.</div></td>

  </tr>

  <tr>

    <td colspan="2" height="10"></td>

  </tr>

</table>

</body>

</html>