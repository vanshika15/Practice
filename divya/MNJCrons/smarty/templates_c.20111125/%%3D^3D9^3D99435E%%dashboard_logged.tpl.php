<?php /* Smarty version 2.6.19, created on 2009-04-23 15:43:39
         compiled from /usr/local/apache/htdocs/smarty/templates/dashboard/dashboard_logged.tpl */ ?>
<html>
<head>
<title>Mobile Validation for <?php echo $this->_tpl_vars['MISDATE']; ?>
 </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>


<form name="form1" method="post" action="dashboard_logged.php">
<center><b><u>Mobile Validation MIS</u></b></center><br><br><br><br>
<table width="95%" border="0" align="center">
<tr>
<td width="29%" class="headingtext1"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>From Date</b></font></td>
<td class="text">
<select name="day">
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['DAY_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<option value="<?php echo $this->_tpl_vars['DAY_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['DAY_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['DAY_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
<?php endfor; endif; ?>
</select>

<select name="month">
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['MONTH_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<option value="<?php echo $this->_tpl_vars['MONTH_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['MONTH_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['MONTH_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
<?php endfor; endif; ?>
</select>

<!--
<select name="year">
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['YEAR_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<option value="<?php echo $this->_tpl_vars['YEAR_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['YEAR_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['YEAR_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
<?php endfor; endif; ?>
</select>
</td>
</tr-->

<tr>
<td width="29%" class="headingtext1"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>To Date</b></font></td>
<td class="text">

<select name="dayEnd">
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['DAY_END_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<option value="<?php echo $this->_tpl_vars['DAY_END_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['DAY_END_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['DAY_END_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
<?php endfor; endif; ?>
</select>

<select name="monthEnd">
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['MONTH_END_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<option value="<?php echo $this->_tpl_vars['MONTH_END_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['MONTH_END_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['MONTH_END_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
<?php endfor; endif; ?>
</select>

<!--
<select name="yearEnd">
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['YEAR_END_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<option value="<?php echo $this->_tpl_vars['YEAR_END_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['YEAR_END_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['YEAR_END_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
<?php endfor; endif; ?>
</select>
-->


</td>
</tr>

<tr>
<td width="29%" class="text1">&nbsp;</td>
<td width="71%" class="text1">
<input type="submit" name="showdata" value="Show Result"><br>
</td>
</tr>
<?php if ($this->_tpl_vars['SHOWRESULT']): ?>
<tr>
 <td width="29%" class="headingtext1"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>Date of mis result</b></font></td>
  <td width="71%" class="text">: <?php echo $this->_tpl_vars['MISDATE']; ?>
 </td>
</tr>
<tr>
 <td width="29%" class="headingtext1"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>Total Users with mobile num validated from tele-dialer</b></font></td>
  <td width="71%" class="text">: <?php echo $this->_tpl_vars['NUMAPPS']; ?>
 </td>
</tr>

<tr>
 <td width="29%" class="headingtext1"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>Total Users with mobile num validated from resbilling</b></font></td>
  <td width="71%" class="text">: <?php echo $this->_tpl_vars['NUMRES']; ?>
 </td>
</tr>

<tr>
 <td width="29%" class="headingtext1"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>Total Users with mobile num validated from resman</b></font></td>
  <td width="71%" class="text">: <?php echo $this->_tpl_vars['NUMMOBRM']; ?>
 </td>
</tr>

<tr>
 <td width="29%" class="headingtext1"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>Total Users with mobile num validated from MNJ</b></font></td>
  <td width="71%" class="text">: <?php echo $this->_tpl_vars['NUMMOBMNJ']; ?>
 </td>
</tr>

 <?php endif; ?>

 </tr>
</table>
</form>
<p>&nbsp; </p>
</body>
</html>
