<?php /* Smarty version 2.6.19, created on 2012-08-13 18:07:03
         compiled from ni/nidashboard/dashboard_overview_new_mod.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'ni/nidashboard/dashboard_overview_new_mod.tpl', 45, false),)), $this); ?>
<html>
<head>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>


<?php echo $this->_tpl_vars['MESSAGE']; ?>

<table width="99%" border="1" align="center" bordercolor="#CCCCFF">
<tr align="center">
<?php if ($this->_tpl_vars['datefind'] == 'invalid'): ?>
  <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Server time : </font></b></td>
  <td colspan="2"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b>Note:
      Today's statistics(acc.to server time)</b></font><b></b></td>
<?php else: ?>
  <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Find Date : </font></b></td>
<?php endif; ?>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Number of new Registrations</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total applies</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total Jalert applies</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total unique applies</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total Relevant Searches  </font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total Job page views </font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total Jalert Job page Views</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total jobs on site</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total jobs posted on site</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total premium jobs</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Home Page Hits</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Home Page Hits-Arabic</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total New Clients </font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Web Search Jobs</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Jobseeker Logins</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Unique Jobseeker Logins</font></b></td>
</tr>

<?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=$this->_tpl_vars['RES_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
  <td>&nbsp;<?php echo $this->_tpl_vars['RES_ARR'][$this->_sections['cnt']['index']]['datecriteriaval']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['RES_ARR'][$this->_sections['cnt']['index']]['resnewcv']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['APPLY_ARR'][$this->_sections['cnt']['index']]['applytotal']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['JALERT1_ARR'][$this->_sections['cnt']['index']]['jalertApplies']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['APPLY_ARR'][$this->_sections['cnt']['index']]['applyuniqueuser']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['JOBS_ARR'][$this->_sections['cnt']['index']]['relevantsearch']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['JOBS_ARR'][$this->_sections['cnt']['index']]['jobpageview']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['JALERT2_ARR'][$this->_sections['cnt']['index']]['jalertJobs']; ?>
</td>
  <td>&nbsp;<?php echo smarty_function_math(array('equation' => "x+y",'x' => $this->_tpl_vars['JOBS_ARR'][$this->_sections['cnt']['index']]['totaljobs'],'y' => $this->_tpl_vars['WEBJOBS_ARR'][$this->_sections['cnt']['index']]['wjJobsLive']), $this);?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['JOBS_ARR'][$this->_sections['cnt']['index']]['totalpostedjobs']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['JOBS_ARR'][$this->_sections['cnt']['index']]['totalpremiumjobs']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['JOBS_ARR'][$this->_sections['cnt']['index']]['homepagehits']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['JOBS_ARR'][$this->_sections['cnt']['index']]['homepagehitsar']; ?>
</td>
  <td><?php echo $this->_tpl_vars['TOTAL_ARR'][$this->_sections['cnt']['index']]['recClientRegTotal']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['WEBJOBS_ARR'][$this->_sections['cnt']['index']]['wjJobsLive']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['MNJLOGINS_ARR'][$this->_sections['cnt']['index']]['mnjLogins']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['MNJLOGINS_ARR'][$this->_sections['cnt']['index']]['mnjUniqueLogins']; ?>
</td>
  </tr>
<?php endfor; endif; ?>


</table>
<br/>

</body>
</html>