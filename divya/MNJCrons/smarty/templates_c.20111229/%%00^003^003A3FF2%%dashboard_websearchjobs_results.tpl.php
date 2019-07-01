<?php /* Smarty version 2.6.19, created on 2011-11-28 10:32:46
         compiled from ni/nidashboard/dashboard_websearchjobs_results.tpl */ ?>
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
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Posted jobs on Site</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">WS Jobs on Site</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">WS Jobs added</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">WS Jobs deleted</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total clicks on WS Jobs</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total clicks on Posted Jobs</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total Applies on WS Jobs</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Quick WS Jobs on Site</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Quick WS Jobs added</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Quick WS Jobs deleted</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total clicks on Quick WS Jobs</font></b></td>
</tr>

<?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=$this->_tpl_vars['ARR_DISPLAY']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
  <td>&nbsp;<?php echo $this->_tpl_vars['ARR_DISPLAY'][$this->_sections['cnt']['index']]['wjDate']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['ARR_DISPLAY'][$this->_sections['cnt']['index']]['postedJobs']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['ARR_DISPLAY'][$this->_sections['cnt']['index']]['wjJobsLive']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['ARR_DISPLAY'][$this->_sections['cnt']['index']]['wjJobsAdded']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['ARR_DISPLAY'][$this->_sections['cnt']['index']]['wjJobsDeleted']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['ARR_DISPLAY'][$this->_sections['cnt']['index']]['wjWebJobsClicks']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['ARR_DISPLAY'][$this->_sections['cnt']['index']]['wjPostedJobsClicks']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['ARR_DISPLAY'][$this->_sections['cnt']['index']]['wjApplies']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['ARR_DISPLAY'][$this->_sections['cnt']['index']]['wjQJobsLive']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['ARR_DISPLAY'][$this->_sections['cnt']['index']]['wjQJobsAdded']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['ARR_DISPLAY'][$this->_sections['cnt']['index']]['wjQJobsDeleted']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['ARR_DISPLAY'][$this->_sections['cnt']['index']]['wjQWebJobsClicks']; ?>
</td>
</tr>
<?php endfor; endif; ?>
</table>
<br/>
</body>
</html>