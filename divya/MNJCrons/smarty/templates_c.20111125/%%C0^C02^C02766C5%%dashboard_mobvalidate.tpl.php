<?php /* Smarty version 2.6.19, created on 2008-12-02 13:54:42
         compiled from /usr/local/apache/htdocs//smarty/templates/dashboard/dashboard_mobvalidate.tpl */ ?>
<html>
<head>
<title>F-mark Mailer MIS for <?php echo $this->_tpl_vars['misdate']; ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>


<form name="form1" method="post" action="dashboard_mobvalidate.php">
<center><b><u>Mis of mailer sent to page 1 filled users </u</b></center>
<table width="95%" border="0" align="center">
<tr> 


<td width="29%" class="headingtext1"><b>Date</b></td>
      <td class="text"> 
<select name="day">
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arr_day']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<option value="<?php echo $this->_tpl_vars['arr_day'][$this->_sections['i']['index']]; ?>
"<?php if ($this->_tpl_vars['day'] == $this->_tpl_vars['arr_day'][$this->_sections['i']['index']]): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['arr_day'][$this->_sections['i']['index']]; ?>
</option>
<?php endfor; endif; ?>
</select>&nbsp;

<select name="month">
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arr_month']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<option value="<?php echo $this->_tpl_vars['arr_month'][$this->_sections['i']['index']]; ?>
"<?php if ($this->_tpl_vars['month'] == $this->_tpl_vars['arr_month'][$this->_sections['i']['index']]): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['arr_month'][$this->_sections['i']['index']]; ?>
</option>
<?php endfor; endif; ?>
</select>&nbsp;

<select name="year">
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arr_year']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<option value="<?php echo $this->_tpl_vars['arr_year'][$this->_sections['i']['index']]; ?>
"<?php if ($this->_tpl_vars['year'] == $this->_tpl_vars['arr_year'][$this->_sections['i']['index']]): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['arr_year'][$this->_sections['i']['index']]; ?>
</option>
<?php endfor; endif; ?>
</select>
       </td>
 </tr>
 <tr> 
      <td width="29%" class="text1">&nbsp;</td>

      <td width="71%" class="text1"> 
        <input type="submit" name="showdata" value="Show result">
      </td>
</tr>
<br><br>
<?php if ($this->_tpl_vars['showresult'] == 'true'): ?>
<br>
<br>
<tr> 
 <td width="29%" class="headingtext1"><b>Date of mis result</b></td>
  <td width="71%" class="text"> 
  <b><?php echo $this->_tpl_vars['misdate']; ?>
</b>
</td>
</tr>
<tr> 
 <td width="29%" class="headingtext1"><b>Total number of mails sent<br>(on this date to data of previous day) </b></td>
  <td width="71%" class="text"> 
  <b><?php echo $this->_tpl_vars['numsent']; ?>
</b>
</td>
</tr>
<tr> 
 <td width="29%" class="headingtext1"><b>Total number of times a mail was opened</b></td>
  <td width="71%" class="text"> 
  <b><?php echo $this->_tpl_vars['numopened']; ?>
</b>
</td>
</tr>
<tr> 
 <td width="29%" class="headingtext1"><b>Number of unique users who clicked on the validate link</b></td>
  <td width="71%" class="text"> 
  <b><?php echo $this->_tpl_vars['usersclicked']; ?>
</b>
</td>
</tr>
<tr> 
 <td width="29%" class="headingtext1"><b>Number of unique users who validate through the link</b></td>
  <td width="71%" class="text"> 
  <b><?php echo $this->_tpl_vars['usersvalidated']; ?>
</b>
</td>
</tr>

 <?php endif; ?>

 </tr>
</table>
</form>
<p>&nbsp; </p>
</body>
</html>
 