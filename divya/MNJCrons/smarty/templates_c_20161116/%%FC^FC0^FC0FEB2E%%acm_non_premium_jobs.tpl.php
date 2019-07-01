<?php /* Smarty version 2.6.19, created on 2016-04-12 00:30:24
         compiled from /usr/local/apache/htdocs/smarty/templates/mailers//mailer_revamp/acm_non_premium_jobs.tpl */ ?>
<?php $_from = $this->_tpl_vars['JOBDATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Job']):
?>
<?php echo $this->_tpl_vars['JOBDATA'][0]; ?>

<table width="600" border="0" cellspacing="0" cellpadding="0" align="left">
  <tr>
  	<td width="20"></td>
    <td width="400"></td>
    <td width="160"></td>
    <td width="20"></td>
  </tr>
  <tr>
  <td></td>
    <td style="font-family:Arial; font-size:12px; text-align:left;" align="left"><strong><a href="http://jobsearch.naukri.com/mynaukri/mn_newminnernew.php?f=<?php echo $this->_tpl_vars['Job']['JOBID']; ?>
&js=1" style="text-decoration:none; color:#006eb3; font-size:12px;"><?php echo $this->_tpl_vars['Job']['POST']; ?>
</a></strong> <span style="color:#474a4b;">(<?php echo $this->_tpl_vars['Job']['MINEXP']; ?>
-<?php echo $this->_tpl_vars['Job']['MAXEXP']; ?>
 yrs.)</span></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td  style="font-family:Arial; font-size:12px; color:#474a4b; text-align:left;" align="left"><?php echo $this->_tpl_vars['Job']['COMNAME']; ?>
 <span style="color:#2ea40a;">(<?php echo $this->_tpl_vars['Job']['CITY']; ?>
)</span></td>
    <td align="right"><a href="<?php echo $this->_tpl_vars['arrPaths']['CJAURL']; ?>
?f=<?php echo $this->_tpl_vars['Job']['JOBID']; ?>
&ma=Save Messenger&qp=<?php echo $this->_tpl_vars['Job']['KEYWORDS']; ?>
&ql=<?php echo $this->_tpl_vars['Job']['CITY']; ?>
&mn=<?php echo $this->_tpl_vars['Job']['JOBALERTNAME']; ?>
&me=<?php echo $this->_tpl_vars['EMAIL']; ?>
&me2=<?php echo $this->_tpl_vars['EMAIL']; ?>
&nr=1&xz=1_0_4" target="_blank" style="text-decoration:none; font-size:12px; color:#006eb3;"><strong><span style="text-decoration:none; font-size:12px; font-family:Arial;">Send me jobs like this</span></strong></a></td>
    <td></td>
  </tr>
  <tr>
    <td height="20" colspan="4"></td>
    </tr>
</table>
<?php endforeach; endif; unset($_from); ?>