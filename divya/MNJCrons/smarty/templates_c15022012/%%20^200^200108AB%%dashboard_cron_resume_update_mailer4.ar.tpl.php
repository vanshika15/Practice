<?php /* Smarty version 2.6.19, created on 2012-01-23 16:00:57
         compiled from ni/nidashboard/dashboard_cron_resume_update_mailer4.ar.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Get more Interview calls with an Updated CV</title>

</head>



<body>

<table width="600" border="0" cellpadding="0" cellspacing="0"  align="center"  >

  <tr>

    <td valign="bottom" style="padding:0px;margin:0px"><img src="http://static.naukimg.com/ni/nimanager/gifs/updatemailer4/man1.jpg" alt="" width="273" height="68" border="0" style="float:left"/></td>

    <td width="193" style="padding:0px;margin:0px">&nbsp;</td>

    <td valign="bottom" style="padding:0px;margin:0px"><a href="http://www.naukrigulf.com" target="_blank"><img src="http://static.naukimg.com/ni/nimanager/gifs/updatemailer4/naukrigulf_logo.gif" alt="" width="200" height="54" border="0"/></a></td>

  </tr>

  <tr>

    <td valign="top" bgcolor="#2783C6" style="padding:0px;margin:0px"><img src="http://static.naukimg.com/ni/nimanager/gifs/updatemailer4/man2.jpg" alt="" width="273" height="112" border="0" /></td>

    <td colspan="2" bgcolor="#2783C6"><a href="<?php echo $this->_tpl_vars['SERVER_DOMAIN_MAILER']; ?>
/nimanager/res_preview.php?conmailer=<?php echo $this->_tpl_vars['CONMAILER']; ?>
&mlid=<?php echo $this->_tpl_vars['MLID']; ?>
" target="_blank" style="color:#FFFFFF; text-decoration:none;">

      <div align="right" style="font:normal 24px Tahoma; color:#FFFFFF; line-height:31px; padding-right:7px;">استخدم بكفاءة ما يقدمها naukrigulf.com<br />

      </div>

      <div align="right" style="font:normal 18px Tahoma; color:#FFFFFF;  padding-right:7px;">حدّث سيرتك الذاتية الآن</div>

      </a></td>

  </tr>

</table>

<table width="600" border="0" cellpadding="0" cellspacing="0"  align="center" >

  <tr>

    <td background="http://static.naukimg.com/ni/nimanager/gifs/updatemailer4/leftbg.gif" width="14">&nbsp;</td>

    <td><table width="95%" border="0" cellpadding="0" cellspacing="0"  align="center" >

        <tr>

          <td dir="rtl" lang="ar"><div style="font:normal 11px Verdana; padding-top:9px; padding-left:7px; padding-bottom:8px; line-height:18px;">عزيزي <strong><?php echo $this->_tpl_vars['NAME']; ?>
</strong>،

              <p>بات تقريبا عام واحد منذ تحديث سيرتك الذاتية. ونتيجة ذلك ، أصحاب العمل يهملون سيرتك الذاتية حاليا.</p>

              <p>نعتقد إنك خلال هذه الفترة أضفت الى خبرتك و مهاراتك . لذا نوصي بتحديث سيرتك الذاتية . هذا سيعينك في عرض مهاراتك المكتسبة حديثا لأصحاب العمل مما سيساعدك في الحصول على الوظيفة المثالية خلال هذه العملية.</p>

              <p>لقد قمت بتحديث سيرتك الذاتية في <span style="direction:ltr;display:inline-block;font-weight:700"><?php echo $this->_tpl_vars['MOD_DATE_STR']; ?>
 </span><br />

                كن جزءا من تلك المرشحين الناجحين الذين حققت لهم <a href="http://static.naukimg.com" target="_blank">Naukrigulf.com</a> فرقا من خلال مساعدتهم للعثور على تلك الوظيفة المثالية. </p>

            </div></td>

        </tr>

        <tr>

          <td bgcolor="#FFFEC5" background="http://static.naukimg.com/ni/nimanager/gifs/updatemailer4/testimonialbg.gif" width="548" height="131" style="font:normal 11px Verdana; padding-left:45px; padding-right:8px; line-height:17px;" dir="rtl" lang="ar"><br />

            " كل ما عملت هو تحديث سيرتي الذاتية على <a href="http://www.naukrigulf.com" target="_blank">Naukrigulf.com</a> وارتبطت مع بعض أبرز أصحاب العمل . والآن، اعمل مع أحد الشركات الكبيرة الرائدة. شكرا <a href="http://www.naukrigulf.com" target="_blank">Naukrigulf.com</a>."<br />

            <strong>عبدالله قائد </strong>، دبي

            

            

            

            </td>

        </tr>

        <tr>

        <tr>

          <td height="10"></td>

        </tr>

        <tr>

          <td><table width="98%" border="0" cellpadding="0" cellspacing="0"  align="center" bgcolor="#F9FDFF" style="border:#B2E0FB solid 2px;">

              <tr>

                <td><table width="96%" border="0" cellpadding="0" cellspacing="0" align="center" dir="rtl" lang="ar">

                    <tr>

                      <td colspan="3" height="5"></td>

                    </tr>

                    <tr>

                      <td width="25%" height="25" style="font:normal 11px Verdana;text-align:right; padding-top:6px;  padding-bottom:3px;"><strong>أجمالي سنين الخبرة </strong></td>

                      <td width="2%" style="font:normal 11px Verdana;text-align:right;">:</td>

                    <?php if ($this->_tpl_vars['TOTAL_EXP'] != ""): ?>
                      <td width="73%" style="font:normal 11px Verdana;text-align:right;text-align:right" dir="ltr"><?php echo $this->_tpl_vars['TOTAL_EXP']; ?>
</td>
                     <?php else: ?> 
                      <td width="73%" style="font:normal 11px Verdana;text-align:right;" dir="rtl" lang="ar">غير مذكور</td>
                    <?php endif; ?>

                    </tr>

                    <tr>

                      <td width="25%" height="25" style="font:normal 11px Verdana;text-align:right; padding-top:3px;  padding-bottom:3px;"><strong>رقم الإتصال</strong></td>

                      <td width="2%" style="font:normal 11px Verdana;text-align:right;">:</td>

                      <td width="73%" style="font:normal 11px Verdana;text-align:right;"><strong> (الجوال) </strong><?php if ($this->_tpl_vars['MPHONE'] != ""): ?><?php echo $this->_tpl_vars['MPHONE']; ?>
<?php else: ?>غير مذكور<?php endif; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>(المنزل 

                        ) </strong><?php if ($this->_tpl_vars['RPHONE'] != ""): ?><?php echo $this->_tpl_vars['RPHONE']; ?>
<?php else: ?>غير مذكور<?php endif; ?></td>

                    </tr>

                    <tr>

                      <td width="25%" height="25" style="font:normal 11px Verdana;text-align:right; padding-top:3px;  padding-bottom:3px;"><strong>الموقع</strong></td>

                      <td width="2%" style="font:normal 11px Verdana;text-align:right;">:</td>

                      <td width="73%" style="font:normal 11px Verdana;text-align:right;"><?php if ($this->_tpl_vars['CITY'] != ""): ?><?php echo $this->_tpl_vars['CITY']; ?>
<?php if ($this->_tpl_vars['COUNTRY'] != ""): ?>, <?php echo $this->_tpl_vars['COUNTRY']; ?>
<?php endif; ?><?php else: ?><?php if ($this->_tpl_vars['COUNTRY'] != ""): ?><?php echo $this->_tpl_vars['COUNTRY']; ?>
<?php else: ?>غير مذكور<?php endif; ?><?php endif; ?></td>

                    </tr>

                    <tr>

                      <td width="25%" height="25" style="font:normal 11px Verdana;text-align:right; padding-top:3px;  padding-bottom:3px;"><strong>الراتب الشهري</strong></td>

                      <td width="2%" style="font:normal 11px Verdana;text-align:right;">:</td>

                      <td width="73%" style="font:normal 11px Verdana;text-align:right;"><?php if ($this->_tpl_vars['CTC'] != ""): ?><?php echo $this->_tpl_vars['CTC']; ?>
<?php else: ?>غير مذكور<?php endif; ?></td>

                    </tr>

                    <tr>

                      <td width="25%" height="25" style="font:normal 11px Verdana;text-align:right; padding-top:3px;  padding-bottom:3px;"><strong>الدور الوظيفي</strong></td>

                      <td width="2%" style="font:normal 11px Verdana;text-align:right;">:</td>

                      <td width="73%" style="font:normal 11px Verdana;text-align:right;"><?php if ($this->_tpl_vars['FAREA'] != ""): ?><?php echo $this->_tpl_vars['FAREA']; ?>
<?php else: ?>غير مذكور<?php endif; ?></td>

                    </tr>

                    <tr>

                      <td width="25%" height="25" style="font:normal 11px Verdana;text-align:right; padding-top:3px;  padding-bottom:3px;"><strong>القطاع المهني</strong></td>

                      <td width="2%" style="font:normal 11px Verdana;text-align:right;">:</td>

                      <td width="73%" style="font:normal 11px Verdana;text-align:right;"><?php if ($this->_tpl_vars['INDUSTRY'] != ""): ?><?php echo $this->_tpl_vars['INDUSTRY']; ?>
<?php else: ?>غير مذكور<?php endif; ?></td>

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

          <td valign="bottom" colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0" dir="rtl" lang="ar">

              <tr>

                <td width="7">&nbsp;</td>

                <td bgcolor="#FFD953"><table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" style="BORDER: #FFC148 1px groove;" background="http://static.naukimg.com/ni/nimanager/gifs/updatemailer4/bg.gif">

                    <tr>

                      <td height="18"><div align="center" style="font-family:verdana; line-height:19px; font-size:13px; "> <a href="<?php echo $this->_tpl_vars['SERVER_DOMAIN_MAILER']; ?>
/nimanager/res_preview.php?conmailer=<?php echo $this->_tpl_vars['CONMAILER']; ?>
&mlid=<?php echo $this->_tpl_vars['MLID']; ?>
" target="_blank" style="text-decoration:none; color:#FF0000"><strong>حدّث سيرتك الذاتية الآن للوصول الى أعلى قائمة البحث لأصحاب العمل.</strong></a></div></td>

                    </tr>

                  </table></td>

                <td width="80">&nbsp;</td>

              </tr>

            </table></td>

        </tr>

        <tr>

          <td>&nbsp;</td>

        </tr>

        <tr>

          <td align="right" style="font:normal 9px verdana; padding: 9px; color:#000000; line-height:15px;" dir="rtl" lang="ar"> تستلم هذه الرسالة لأنك مسجّل مع <a href="http://www.naukrigulf.com" target="_blank">naukrigulf.com</a> .<a href="<?php echo $this->_tpl_vars['SERVER_DOMAIN_MAILER']; ?>
/nimanager/res_unsubscribe.php?conmailer=<?php echo $this->_tpl_vars['CONMAILER']; ?>
&umflag=CS" target="_blank">أنقر هنا</a> لحذف هذا الحساب واذا لا تريد استلام أي رسائل أخرى.</td>

        </tr>

        <tr>

          <td align="right" style="font:normal 11px verdana; padding: 9px; color:#000000; line-height:18px;" dir="rtl" lang="ar">لضمان استلامك على جميع المراسلات من المجندين والشركات الذين يمكن الإتصال بك من خلال <a href="http://www.naukrigulf.com" target="_blank">naukrigulf.com</a> يرجى إضافة البريد الإلكتروني التالي  (<a href="mailto:info@naukrigulf.com" target="_blank">info@naukrigulf.com</a>)  الى صفحة العناوين الخاص بك. </td>

        </tr>

        <tr>

          <td height="10"></td>

        </tr>

      </table></td>

    <td background="http://static.naukimg.com/ni/nimanager/gifs/updatemailer4/rightbg.gif" width="16">&nbsp;</td>

  </tr>

</table>

<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">

  <tr>

    <td><img src="http://static.naukimg.com/ni/nimanager/gifs/updatemailer4/btm.gif" alt="" width="600" height="25" /></td>

  </tr>

</table>

</body>

</html>