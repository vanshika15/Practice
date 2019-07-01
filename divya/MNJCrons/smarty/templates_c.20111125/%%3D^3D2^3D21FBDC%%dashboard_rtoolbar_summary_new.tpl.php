<?php /* Smarty version 2.6.19, created on 2011-05-18 10:01:14
         compiled from ni/nidashboard/dashboard_rtoolbar_summary_new.tpl */ ?>
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
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">RCS pop
    up shown</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Clicks
    on RCS pop up</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Unique
    clicks on Collapse Button (Recruiter Toolbar)</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">RCS link
    shown</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Clicks
    on RCS link (Expanded)</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Clicks
    on RCS link (Collapsed)</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Do not
    show pop-ups</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Jobs
    Posted</font></b></td>
</tr>
<?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=$this->_tpl_vars['ARR_DATA']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
  <td>&nbsp;<?php echo $this->_tpl_vars['ARR_DATA'][$this->_sections['cnt']['index']]['logdate']; ?>
</td> 
  <td>&nbsp;<?php if ($this->_tpl_vars['ARR_DATA'][$this->_sections['cnt']['index']]['popupshown']): ?> <?php echo $this->_tpl_vars['ARR_DATA'][$this->_sections['cnt']['index']]['popupshown']; ?>
 <?php else: ?> 0 <?php endif; ?></td>
  <td>&nbsp;<?php if ($this->_tpl_vars['ARR_DATA'][$this->_sections['cnt']['index']]['popupclicks']): ?> <?php echo $this->_tpl_vars['ARR_DATA'][$this->_sections['cnt']['index']]['popupclicks']; ?>
 <?php else: ?> 0 <?php endif; ?></td>
  <td>&nbsp;<?php if ($this->_tpl_vars['ARR_DATA'][$this->_sections['cnt']['index']]['tlbrcollpsclicks']): ?> <?php echo $this->_tpl_vars['ARR_DATA'][$this->_sections['cnt']['index']]['tlbrcollpsclicks']; ?>
 <?php else: ?> 0 <?php endif; ?></td>
  <td>&nbsp;<?php if ($this->_tpl_vars['ARR_DATA'][$this->_sections['cnt']['index']]['explinkshown']): ?> <?php echo $this->_tpl_vars['ARR_DATA'][$this->_sections['cnt']['index']]['explinkshown']; ?>
 <?php else: ?> 0 <?php endif; ?></td>
  <td>&nbsp;<?php if ($this->_tpl_vars['ARR_DATA'][$this->_sections['cnt']['index']]['explinkclicks']): ?> <?php echo $this->_tpl_vars['ARR_DATA'][$this->_sections['cnt']['index']]['explinkclicks']; ?>
 <?php else: ?> 0 <?php endif; ?></td>
  <td>&nbsp;<?php if ($this->_tpl_vars['ARR_DATA'][$this->_sections['cnt']['index']]['collpslinkclicks']): ?> <?php echo $this->_tpl_vars['ARR_DATA'][$this->_sections['cnt']['index']]['collpslinkclicks']; ?>
 <?php else: ?> 0 <?php endif; ?></td>
  <td>&nbsp;<?php if ($this->_tpl_vars['ARR_DATA'][$this->_sections['cnt']['index']]['donotshow']): ?> <?php echo $this->_tpl_vars['ARR_DATA'][$this->_sections['cnt']['index']]['donotshow']; ?>
 <?php else: ?> 0 <?php endif; ?></td>
  <td>&nbsp;<?php if ($this->_tpl_vars['ARR_DATA'][$this->_sections['cnt']['index']]['jobsposted']): ?> <?php echo $this->_tpl_vars['ARR_DATA'][$this->_sections['cnt']['index']]['jobsposted']; ?>
 <?php else: ?> 0 <?php endif; ?></td>
  </tr>
<?php endfor; endif; ?>
</table>
<br/>
</body>
</html>