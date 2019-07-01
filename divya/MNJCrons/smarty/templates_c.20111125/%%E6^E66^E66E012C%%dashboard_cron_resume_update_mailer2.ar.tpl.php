<?php /* Smarty version 2.6.19, created on 2011-10-20 13:22:05
         compiled from ni/nidashboard/dashboard_cron_resume_update_mailer2.ar.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Get more Interview calls with an Updated CV</title>

</head>



<body>

<table width="600" border="0" cellpadding="0" cellspacing="0"  align="center"  >

  <tr>

    <td valign="bottom" style="padding:0px;margin:0px"><img src="http://static.naukimg.com/ni/nimanager/gifs/updatemailer2/hand1.jpg" alt="" width="184" height="68" border="0" style="float:left"/></td>

    <td width="193" style="padding:0px;margin:0px">&nbsp;</td>

    <td valign="bottom" style="padding:0px;margin:0px"><a href="http://www.naukrigulf.com" target="_blank"><img src="http://static.naukimg.com/ni/nimanager/gifs/updatemailer2/naukrigulf_logo.gif" alt="" width="200" height="54" border="0" /></a></td>

  </tr>

  <tr>

    <td valign="top" bgcolor="#2783C6" style="padding:0px;margin:0px"><img src="http://static.naukimg.com/ni/nimanager/gifs/updatemailer2/hand2.jpg" alt="" width="184" height="91" border="0" /></td>

    <td colspan="2" bgcolor="#2783C6"><a href="<?php echo $this->_tpl_vars['SERVER_DOMAIN_MAILER']; ?>
/nimanager/res_preview.php?conmailer=<?php echo $this->_tpl_vars['CONMAILER']; ?>
&mlid=<?php echo $this->_tpl_vars['MLID']; ?>
" target="_blank" style="color:#FFFFFF; text-decoration:none;">

      <div align="right" style="font:normal 40px Tahoma; color:#FFFFFF; line-height:40px; padding-right:15px;" dir="rtl" lang="ar">كن جزءا من الأفضل<br />

      </div>

      <div align="right" style="font:normal 23px Tahoma; color:#FFFFFF;  padding-right:15px;" dir="rtl" lang="ar">حدّث سيرتك الذاتية الآن</div>

      </a></td>

  </tr>

</table>

<table width="600" border="0" cellpadding="0" cellspacing="0"  align="center">

  <tr>

    <td background="http://static.naukimg.com/ni/nimanager/gifs/updatemailer2/leftbg.gif" width="14">&nbsp;</td>

    <td><table width="95%" border="0" cellpadding="0" cellspacing="0"  align="center" >

        <tr>

          <td><div style="font:normal 13px Verdana; padding-top:9px; padding-left:7px; padding-bottom:5px; line-height:18px; text-align:right;" dir="rtl" lang="ar">عزيزي <strong><?php echo $this->_tpl_vars['NAME']; ?>
</strong>،

              <p> تستخدم الشركات الكبرى قاعدة بياناتنا للوصول الى أفضل الموظفين الملائمين. وهذا فرصتك لتكون جزءا من تلك القوى العاملة المميزة.</p>

              <p>وكخطوة أولى في هذا الإتجاه بامكانك تحديث سيرتك الذاتية. هذا سيزيد من فرصتك بشكل ملحوظ للتوظيف لأن أصحاب العمل عادة يغفلون السير الذاتية الغير محدّثة منذ 6 أشهر.</p>

              <p>لقد قمت بتحديث سيرتك الذاتية في <span style="direction:ltr;display:inline-block;font-weight:700"><?php echo $this->_tpl_vars['MOD_DATE_STR']; ?>
 </span></p>

</p>

              <p>للحصول على أفضل الوظائف المقدمة يرجى تحديث المعلومات التالية:</p>

            </div></td>

        </tr>

        <tr>

          <td><table width="98%" border="0" cellpadding="0" cellspacing="0"  align="center" bgcolor="#F9FDFF" style="border:#B2E0FB solid 2px;">

              <tr>

                <td><table width="96%" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align:right;">

                    <tr>

                      <td colspan="3" height="5"></td>

                    </tr>

                    <tr>
                         <?php if ($this->_tpl_vars['TOTAL_EXP'] != ""): ?>
                      <td width="73%" style="font:normal 11px Verdana;text-align:right" dir="ltr"><?php echo $this->_tpl_vars['TOTAL_EXP']; ?>
</td>
                     <?php else: ?> 
                      <td width="73%" style="font:normal 11px Verdana;text-align:right" dir="rtl" lang="ar">غير مذكور</td>
                    <?php endif; ?>


                      <td width="2%" style="font:normal 11px Verdana;text-align:right" dir="rtl" lang="ar">:</td>

                      <td width="25%" height="25" style="font:normal 13px Verdana;text-align:right;padding-top:6px;  padding-bottom:3px;" dir="rtl" lang="ar"><strong>عددد سنين الخبرة </strong></td>

                    </tr>

                    <tr>

                      <td style="font:normal 11px Verdana;text-align:right" dir="rtl" lang="ar"><?php if ($this->_tpl_vars['INDUSTRY'] != ""): ?><?php echo $this->_tpl_vars['INDUSTRY']; ?>
<?php else: ?>غير مذكور<?php endif; ?></td>

                      <td style="font:normal 11px Verdana;text-align:right" dir="rtl" lang="ar">:</td>

                      <td height="25" style="font:normal 13px Verdana;text-align:right; padding-top:3px;  padding-bottom:3px;" dir="rtl" lang="ar"><strong>القطاع المهني الحالي</strong></td>

                    </tr>

                    <tr>

                      <td style="font:normal 11px Verdana;text-align:right" dir="rtl" lang="ar"><strong> (الجوال) </strong><?php if ($this->_tpl_vars['MPHONE'] != ""): ?><?php echo $this->_tpl_vars['MPHONE']; ?>
<?php else: ?>غير مذكور<?php endif; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>(المنزل) </strong><?php if ($this->_tpl_vars['RPHONE'] != ""): ?><?php echo $this->_tpl_vars['RPHONE']; ?>
<?php else: ?>غير مذكور<?php endif; ?></td>

                      <td style="font:normal 11px Verdana;text-align:right" dir="rtl" lang="ar">:</td>

                      <td height="25" style="font:normal 13px Verdana;text-align:right; padding-top:3px;  padding-bottom:3px;" div dir="rtl" lang="ar"><strong>الهاتف</strong></td>

                    </tr>

                    <tr>

                      <td style="font:normal 11px Verdana;text-align:right" dir="rtl" lang="ar"><?php if ($this->_tpl_vars['CITY'] != ""): ?><?php echo $this->_tpl_vars['CITY']; ?>
<?php if ($this->_tpl_vars['COUNTRY'] != ""): ?>, <?php echo $this->_tpl_vars['COUNTRY']; ?>
<?php endif; ?><?php else: ?><?php if ($this->_tpl_vars['COUNTRY'] != ""): ?><?php echo $this->_tpl_vars['COUNTRY']; ?>
<?php else: ?>غير مذكور<?php endif; ?><?php endif; ?></td>

                      <td style="font:normal 11px Verdana;text-align:right" dir="rtl" lang="ar">:</td>

                      <td height="25" style="font:normal 13px Verdana;text-align:right; padding-top:3px;  padding-bottom:3px;" dir="rtl" lang="ar"><strong>الموقع</strong></td>

                    </tr>

                    <tr>

                      <td colspan="3" height="5"></td>

                    </tr>

                  </table></td>

              </tr>

            </table></td>

        </tr>

        <tr>

          <td height="15" align="left"></td>

        </tr>

        <tr>

          <td valign="bottom" colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td width="80">&nbsp;</td>

                <td bgcolor="#FFD953"><table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" background="http://static.naukimg.com/ni/nimanager/gifs/updatemailer2/bg.gif" style="BORDER: #FFC148 1px groove;">

                    <tr>

                      <td height="18"><div align="center" style="font-family:verdana; line-height:19px; font-size:14px;" dir="rtl" lang="ar"><a href="<?php echo $this->_tpl_vars['SERVER_DOMAIN_MAILER']; ?>
/nimanager/res_preview.php?conmailer=<?php echo $this->_tpl_vars['CONMAILER']; ?>
&mlid=<?php echo $this->_tpl_vars['MLID']; ?>
" target="_blank" style="text-decoration:none; color:#FF0000"><strong>حدّث سيرتك الذاتية الآن للوصول الى أعلى قائمة البحث لأصحاب العمل. </strong></a></div></td>

                    </tr>

                  </table></td>

                <td width="10">&nbsp;</td>

              </tr>

            </table></td>

        </tr>

        <tr>

          <td>&nbsp;</td>

        </tr>

        <tr>

          <td align="right" style="font:normal 9px verdana; padding: 9px; color:#000000; line-height:15px;" dir="rtl" lang="ar">تستلم هذه الرسالة لأنك مسجّل مع <a href="http://www.naukrigulf.com" target="_blank">naukrigulf.com</a> .<a href="<?php echo $this->_tpl_vars['SERVER_DOMAIN_MAILER']; ?>
/nimanager/res_unsubscribe.php?conmailer=<?php echo $this->_tpl_vars['CONMAILER']; ?>
&umflag=CS" target="_blank">أنقر هنا</a> لحذف هذا الحساب واذا لا تريد استلام أي رسائل أخرى.

          </td>

        </tr>

        <tr>

          <td align="right" style="font:normal 11px verdana; padding: 9px; color:#000000; line-height:18px;" dir="rtl" lang="ar">

           لضمان استلامك على جميع المراسلات من المجندين والشركات الذين يمكن الإتصال بك من خلال <a href="http://www.naukrigulf.com" target="_blank">naukrigulf.com</a> يرجى إضافة البريد الإلكتروني التالي  (<a href="mailto:info@naukrigulf.com" target="_blank">info@naukrigulf.com</a>)  الى صفحة العناوين الخاص بك. </td>

        </tr>

        <tr>

          <td height="10"></td>

        </tr>

      </table></td>

    <td background="http://static.naukimg.com/ni/nimanager/gifs/updatemailer2/rightbg.gif" width="16">&nbsp;</td>

  </tr>

</table>

<table width="600" border="0" cellpadding="0" cellspacing="0"  align="center">

  <tr>

    <td><img src="http://static.naukimg.com/ni/nimanager/gifs/updatemailer2/btm.gif" width="600" height="25" /></td>

  </tr>

</table>

</body>

</html>