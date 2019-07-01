<?php /* Smarty version 2.6.19, created on 2014-06-10 00:30:17
         compiled from /usr/local/apache/htdocs/smarty/templates/mailers//mailer_revamp/acm_premium_jobs.tpl */ ?>
<?php $_from = $this->_tpl_vars['JOBDATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Job']):
?>
  <table width="90%" border="0" cellspacing="0" cellpadding="0" align="center" style="border:1px solid #d2d2d2; text-align:left;" bgcolor="#f3f3f3">
    <tr>
      <td width="22" height="15"></td>
      <td></td>
      <td></td>
      <td width="10"></td>
    </tr>
    <tr>
      <td height="30" width="22"></td>
      <td width="334" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:18px; color:#474a4b;"><a href="http://jobsearch.naukri.com/mynaukri/mn_newminnernew.php?f=<?php echo $this->_tpl_vars['Job']['JOBID']; ?>
&js=1" target="_blank" style="font-size:12px; text-decoration:none; color:#006eb3;"><strong><?php echo $this->_tpl_vars['Job']['POST']; ?>
</strong></a> (<?php echo $this->_tpl_vars['Job']['MINEXP']; ?>
-<?php echo $this->_tpl_vars['Job']['MAXEXP']; ?>
 yrs.)<br>
        <?php echo $this->_tpl_vars['Job']['COMNAME']; ?>
 <span style="color:#2ea40a;">(<?php echo $this->_tpl_vars['Job']['CITY']; ?>
)</span></td>
      <td valign="top" align="right" style="font-family:Arial, Helvetica, sans-serif;" width="125"><a href="http://jobsearch.naukri.com/mynaukri/mn_newsmartsearch.php?xz=1_7_25&qv=<?php echo $this->_tpl_vars['Job']['JOBID']; ?>
&js=1" target="_blank" style="font-size:12px; text-decoration:none; color:#006eb3;">View similar jobs</a></td>
      <td width="10"></td>
    </tr>
    <tr>
      <td width="22" height="15"></td>
      <td></td>
      <td></td>
      <td width="10"></td>
    </tr>
  </table>

<?php endforeach; endif; unset($_from); ?> 