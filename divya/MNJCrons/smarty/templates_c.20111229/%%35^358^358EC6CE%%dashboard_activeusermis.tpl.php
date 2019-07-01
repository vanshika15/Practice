<?php /* Smarty version 2.6.19, created on 2011-12-05 11:10:17
         compiled from /usr/local/apache/htdocs/smarty/templates/dashboard/dashboard_activeusermis.tpl */ ?>
<html>
<head>
<title>Active User MIS for <?php echo $this->_tpl_vars['MISDATE']; ?>
 </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>


<form name="form1" method="post" action="dashboard_activeusermis.php">
<center><b><u>Active User MIS</u></b></center><br><br><br><br>
<table width="95%" border="0" align="center">
<tr>
<td width="29%" class="headingtext1"><b>Date</b></td>
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
</tr>

<tr>
<td width="29%" class="text1">&nbsp;</td>
<td width="71%" class="text1">
<input type="submit" name="showdata" value="Show Result"><br><br><br>
</td>
</tr>
<?php if ($this->_tpl_vars['SHOWRESULT']): ?>
<tr>
 <td width="29%" class="headingtext1"><b>Date of mis result</b></td>
  <td width="71%" class="text"> <?php echo $this->_tpl_vars['MISDATE']; ?>
 </td>
</tr>
<tr>
 <td width="29%" class="headingtext1"><b>Total Unique Applicants for the day </b></td>
  <td width="71%" class="text"> <?php echo $this->_tpl_vars['NUMAPPS']; ?>
 </td>
</tr>
<tr>
 <td width="29%" class="headingtext1"><b>Total Unique Mods for the day </b></td>
  <td width="71%" class="text"> <?php echo $this->_tpl_vars['NUMMODS']; ?>
 </td>
</tr>

<tr>
 <td width="29%" class="headingtext1"><b>Unique Applicants who did not modify </b></td>
  <td width="71%" class="text"> <?php echo $this->_tpl_vars['NUMONLYAPPS']; ?>
 </td>
</tr>

<tr>
 <td width="29%" class="headingtext1"><b>Only Mods who did not apply </b></td>
  <td width="71%" class="text"> <?php echo $this->_tpl_vars['NUMONLYMODS']; ?>
 </td>
</tr>

<tr>
 <td width="29%" class="headingtext1"><b>Only Logs who did not Apply or Mod </b></td>
  <td width="71%" class="text"> <?php echo $this->_tpl_vars['NUMONLYLOGS']; ?>
 </td>
</tr>

 <?php endif; ?>

 </tr>
</table>
</form>
<p>&nbsp; </p>
</body>
</html>
