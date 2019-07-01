<?php /* Smarty version 2.6.19, created on 2008-06-28 17:20:25
         compiled from ni/nidashboard/dashboard_errorlog.tpl */ ?>
<html>
<head>
	<title>Dashboard :: Error Log</title>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>


<?php if ($this->_tpl_vars['Message']): ?>
<br><center><font color="red"><?php echo $this->_tpl_vars['Message']; ?>
</font></center><br>
<?php endif; ?>

<form name="formmain" action="dashboard_errorlog.php" method="post">
  <TABLE align="center" border="1" bordercolor="#CCCCFF" width="90%" >
    <TR> 
      <TD>Enter Duration</TD>
<TD>
        <select name="sday">
        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['FROM_DAY_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
        <option value="<?php echo $this->_tpl_vars['FROM_DAY_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['FROM_DAY_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['FROM_DAY_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
          <?php endfor; endif; ?>
        </select>
        <select name="smonth">
          <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['FROM_MONTH_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
        <option value="<?php echo $this->_tpl_vars['FROM_MONTH_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['FROM_MONTH_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['FROM_MONTH_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
          <?php endfor; endif; ?>
        </select>
        <select name="syear">
        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['FROM_YEAR_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
        <option value="<?php echo $this->_tpl_vars['FROM_YEAR_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['FROM_YEAR_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['FROM_YEAR_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
          <?php endfor; endif; ?>
        </select>

        &nbsp;&nbsp;TO&nbsp;
        <select name="eday">
         <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['TO_DAY_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
        <option value="<?php echo $this->_tpl_vars['TO_DAY_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['TO_DAY_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['TO_DAY_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
          <?php endfor; endif; ?>
        </select>
        <select name="emonth">
       <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['TO_MONTH_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
        <option value="<?php echo $this->_tpl_vars['TO_MONTH_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['TO_MONTH_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['TO_MONTH_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
          <?php endfor; endif; ?>
        </select>
        <select name="eyear">
        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['TO_YEAR_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
        <option value="<?php echo $this->_tpl_vars['TO_YEAR_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['TO_YEAR_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['TO_YEAR_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
          <?php endfor; endif; ?>
        </select>
      </TD>
    </TR>
    <TR> 
      <TD>AND (select duration criteria)</TD>
      <TD> 
        <select name="durcriteria">
          <option value="date">Datewise</option>
        </select>
      </TD>
    </TR>
    <TR> 
      <TD>AND (select projects)</TD>
      <TD> 
        <select name="project">
          <option value="All" <?php if ($this->_tpl_vars['SELECTED_PROJECT'] == 'All'): ?>selected<?php endif; ?>>All</option>
          <option value="Common"  <?php if ($this->_tpl_vars['SELECTED_PROJECT'] == 'Common'): ?>selected<?php endif; ?>>Common</option>
          <option value="Dashboard" <?php if ($this->_tpl_vars['SELECTED_PROJECT'] == 'Dashboard'): ?>selected<?php endif; ?>>Dashboard</option>
          <option value="MNR" <?php if ($this->_tpl_vars['SELECTED_PROJECT'] == 'MNR'): ?>selected<?php endif; ?>>MNR</option>
          <option value="MNJ" <?php if ($this->_tpl_vars['SELECTED_PROJECT'] == 'MNJ'): ?>selected<?php endif; ?>>MNJ</option>
          <option value="BMS" <?php if ($this->_tpl_vars['SELECTED_PROJECT'] == 'BMS'): ?>selected<?php endif; ?>>BMS</option>
        </select>
      </TD>
    </TR>
    <TR>  <TD><input type="submit" name="btngo" value="GO">  </TD> <TD>&nbsp;</TD> </TR>
  </table>
</form>


<?php if ($this->_tpl_vars['COMMON_LOGS_ARR'] != ""): ?>
<br><center><h3>Common Error Logs:</h3></center>
<table width="70%" border="1" align="center" bordercolor="#CCCCFF">
  <tr>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Date (YYYY-MM-DD)</font></th>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Server<br>(Lost Connection + Too Many Connections)</font></th>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Query</font></th>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></th>
 </tr>
 
  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['COMMON_LOGS_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
  <tr>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['COMMON_LOGS_ARR'][$this->_sections['i']['index']]['errLogDate']; ?>
</font></td>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['COMMON_LOGS_ARR'][$this->_sections['i']['index']]['lostConTooManyCon']; ?>
</font></td>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['COMMON_LOGS_ARR'][$this->_sections['i']['index']]['queryTotal']; ?>
</font></td>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['COMMON_LOGS_ARR'][$this->_sections['i']['index']]['total']; ?>
</font></td>
 </tr>
 <?php endfor; endif; ?>
</table>
<br>
<?php endif; ?>


<?php if ($this->_tpl_vars['DASHBOARD_LOGS_ARR'] != ""): ?>
<br><center><h3>Dashboard Error Logs:</h3></center>
<table width="70%" border="1" align="center" bordercolor="#CCCCFF">
  <tr>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Date (YYYY-MM-DD)</font></th>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Server<br>(Lost Connection + Too Many Connections)</font></th>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Query</font></th>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></th>
 </tr>
 
  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['DASHBOARD_LOGS_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
  <tr>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['DASHBOARD_LOGS_ARR'][$this->_sections['i']['index']]['errLogDate']; ?>
</font></td>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['DASHBOARD_LOGS_ARR'][$this->_sections['i']['index']]['lostConTooManyCon']; ?>
</font></td>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['DASHBOARD_LOGS_ARR'][$this->_sections['i']['index']]['queryTotal']; ?>
</font></td>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['DASHBOARD_LOGS_ARR'][$this->_sections['i']['index']]['total']; ?>
</font></td>
 </tr>
 <?php endfor; endif; ?>
</table>
<br>
<?php endif; ?>


<?php if ($this->_tpl_vars['MNR_LOGS_ARR'] != ""): ?>
<br><center><h3>MNR Error Logs:</h3></center>
<table width="70%" border="1" align="center" bordercolor="#CCCCFF">
  <tr>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Date (YYYY-MM-DD)</font></th>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Server<br>(Lost Connection + Too Many Connections)</font></th>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Query</font></th>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></th>
 </tr>
 
  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['MNR_LOGS_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
  <tr>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['MNR_LOGS_ARR'][$this->_sections['i']['index']]['errLogDate']; ?>
</font></td>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['MNR_LOGS_ARR'][$this->_sections['i']['index']]['lostConTooManyCon']; ?>
</font></td>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['MNR_LOGS_ARR'][$this->_sections['i']['index']]['queryTotal']; ?>
</font></td>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['MNR_LOGS_ARR'][$this->_sections['i']['index']]['total']; ?>
</font></td>
 </tr>
 <?php endfor; endif; ?>
</table>
<br>
<?php endif; ?>


<?php if ($this->_tpl_vars['MNJ_LOGS_ARR'] != ""): ?>
<br><center><h3>MNJ Error Logs:</h3></center>
<table width="70%" border="1" align="center" bordercolor="#CCCCFF">
  <tr>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Date (YYYY-MM-DD)</font></th>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Server<br>(Lost Connection + Too Many Connections)</font></th>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Query</font></th>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></th>
 </tr>
 
  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['MNJ_LOGS_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
  <tr>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['MNJ_LOGS_ARR'][$this->_sections['i']['index']]['errLogDate']; ?>
</font></td>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['MNJ_LOGS_ARR'][$this->_sections['i']['index']]['lostConTooManyCon']; ?>
</font></td>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['MNJ_LOGS_ARR'][$this->_sections['i']['index']]['queryTotal']; ?>
</font></td>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['MNJ_LOGS_ARR'][$this->_sections['i']['index']]['total']; ?>
</font></td>
 </tr>
 <?php endfor; endif; ?>
</table>
<br>
<?php endif; ?>


<?php if ($this->_tpl_vars['BMS_LOGS_ARR'] != ""): ?>
<br><center><h3>BMS Error Logs:</h3></center>
<table width="70%" border="1" align="center" bordercolor="#CCCCFF">
  <tr>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Date (YYYY-MM-DD)</font></th>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Server<br>(Lost Connection + Too Many Connections)</font></th>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Query</font></th>
    <th align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></th>
 </tr>
 
  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['BMS_LOGS_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
  <tr>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['BMS_LOGS_ARR'][$this->_sections['i']['index']]['errLogDate']; ?>
</font></td>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['BMS_LOGS_ARR'][$this->_sections['i']['index']]['lostConTooManyCon']; ?>
</font></td>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['BMS_LOGS_ARR'][$this->_sections['i']['index']]['queryTotal']; ?>
</font></td>
    <td align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['BMS_LOGS_ARR'][$this->_sections['i']['index']]['total']; ?>
</font></td>
 </tr>
 <?php endfor; endif; ?>
</table>
<br>
<?php endif; ?>

</body>
</html>