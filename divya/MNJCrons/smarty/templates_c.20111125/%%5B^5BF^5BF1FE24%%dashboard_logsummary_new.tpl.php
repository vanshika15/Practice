<?php /* Smarty version 2.6.19, created on 2011-03-30 09:58:34
         compiled from ni/nidashboard/dashboard_logsummary_new.tpl */ ?>
<html>
<head>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>


<!--
changes made ->Ajay Sharma(13-oct-2010)
               Added Extra Field To Show The Count of Google Searches
-->
<?php echo $this->_tpl_vars['MESSAGE']; ?>

<table width="99%" border="1" align="center" bordercolor="#CCCCFF">
<tr align="center">
    <td width = "23%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Find Date : </font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total Relevance Searches</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Total Searches  For Logged in User</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total Searches</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Google Searches</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total Page Views</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total
    Page Views Premium Homepage</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Home
    Searches (Search bar + Browse job category(Real) + Browse job
    category(Google) + Job Zone + Top Employer + Featured Employer + Browse
    Location+ Premium jobs view all)</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Inner Searches (Quicksearch bar + Form + Location Cluster + Industry Cluster + Freshness Cluster + Employer Cluster)</font></b></td>
</tr>

<?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=$this->_tpl_vars['TOT_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
$this->_sections['cnt']['start'] = $this->_sections['cnt']['step'] > 0 ? 0 : $this->_sections['cnt']['loop']-1;
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = $this->_sections['cnt']['loop'];
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
?>
<tr align="center">
  <td>&nbsp;<?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['date']; ?>
</td> 
  <td>&nbsp;<?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['sumRelCount']): ?> <?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['sumRelCount']; ?>
 <?php else: ?> 0 <?php endif; ?></td>
  <td>&nbsp;<?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['sumLoggedCount']): ?> <?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['sumLoggedCount']; ?>
 <?php else: ?> 0 <?php endif; ?></td>
  <td>&nbsp;<?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['srchRealCount']): ?> <?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['srchRealCount']; ?>
 <?php else: ?> 0 <?php endif; ?></td>
  <td>&nbsp;<?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['srchGoogleCount']): ?> <?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['srchGoogleCount']; ?>
 <?php else: ?> 0 <?php endif; ?></td>
  <td>&nbsp;<?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['sumPrev']): ?> <?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['sumPrev']; ?>
 <?php else: ?> 0 <?php endif; ?></td>
  <td>&nbsp;<?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['premiumjob_homepage']): ?>
  <?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['premiumjob_homepage']; ?>
 <?php else: ?> 0 <?php endif; ?></td>
  <td>&nbsp;<?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['srchbar']): ?><?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['srchbar']; ?>
  <?php else: ?> 0 <?php endif; ?>
  &nbsp;|&nbsp; <?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['browsjcr']): ?><?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['browsjcr']; ?>
 <?php else: ?> 0
  <?php endif; ?>&nbsp;|&nbsp; <?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['browsjcg']): ?><?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['browsjcg']; ?>
 <?php else: ?>
  0 <?php endif; ?>&nbsp;|&nbsp; <?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['jbc']): ?><?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['jbc']; ?>
 <?php else: ?> 0
  <?php endif; ?>&nbsp;|&nbsp; <?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['fcompany']): ?><?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['fcompany']; ?>
 <?php else: ?>
  0 <?php endif; ?>&nbsp;|&nbsp; <?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['femployer']): ?><?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['femployer']; ?>

  <?php else: ?> 0 <?php endif; ?>&nbsp;|&nbsp; <?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['browseloc']): ?><?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['browseloc']; ?>
 <?php else: ?> 0 <?php endif; ?>&nbsp;|&nbsp; <?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['premViewAll']): ?> <?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['premViewAll']; ?>
 <?php else: ?> 0 <?php endif; ?></td>
  <td>&nbsp;<?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['qsbar']): ?><?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['qsbar']; ?>
  <?php else: ?> 0 <?php endif; ?> &nbsp;|&nbsp; <?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['qsform']): ?><?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['qsform']; ?>
 <?php else: ?> 0 <?php endif; ?> &nbsp;|&nbsp; <?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['clsLoc']): ?><?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['clsLoc']; ?>
 <?php else: ?> 0 <?php endif; ?> &nbsp;|&nbsp; <?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['clsInd']): ?><?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['clsInd']; ?>
 <?php else: ?> 0 <?php endif; ?> &nbsp;|&nbsp; <?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['clsFresh']): ?><?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['clsFresh']; ?>
 <?php else: ?> 0 <?php endif; ?> &nbsp;|&nbsp; <?php if ($this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['clsEmpl']): ?><?php echo $this->_tpl_vars['TOT_ARR'][$this->_sections['cnt']['index']]['clsEmpl']; ?>
 <?php else: ?> 0 <?php endif; ?></td>
  </tr>
<?php endfor; endif; ?>

   
</table>
<br/>

</body>
</html>