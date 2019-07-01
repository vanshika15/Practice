<?php /* Smarty version 2.6.19, created on 2009-03-18 11:10:57
         compiled from ni/nidashboard/dashboard_tms.tpl */ ?>
<html>
<form name="form1" method="post" action="dashboard_tms.php">
<!--<h3><center><font color=Red><i> <?php echo $this->_tpl_vars['ErrorMsg']; ?>
</i></font></center></h3>-->
<table align="center" border="1">
<tr>
<td width="50%"> Enter TMS ID(s)</td> <td><input type="text" name="resSource" ></td>
</tr>
<tr>
<td width="50%"> &nbsp;</td> <td><input type="SUBMIT" value = "Go!!" name="go" ></td>
</tr>
</table>
</form>


<?php if ($this->_tpl_vars['JOBINFO_ARR'] != ''): ?>
<table width="70%" border="1" align="center" bordercolor="#CCCCFF">
  <tr>
  <td width="30%" align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> TMS ID  </font></b></td>
  <td width="40%" align-"center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Count</font></b></td>
 </tr>
<?php unset($this->_sections['jc']);
$this->_sections['jc']['name'] = 'jc';
$this->_sections['jc']['loop'] = is_array($_loop=$this->_tpl_vars['JOBINFO_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['jc']['show'] = true;
$this->_sections['jc']['max'] = $this->_sections['jc']['loop'];
$this->_sections['jc']['step'] = 1;
$this->_sections['jc']['start'] = $this->_sections['jc']['step'] > 0 ? 0 : $this->_sections['jc']['loop']-1;
if ($this->_sections['jc']['show']) {
    $this->_sections['jc']['total'] = $this->_sections['jc']['loop'];
    if ($this->_sections['jc']['total'] == 0)
        $this->_sections['jc']['show'] = false;
} else
    $this->_sections['jc']['total'] = 0;
if ($this->_sections['jc']['show']):

            for ($this->_sections['jc']['index'] = $this->_sections['jc']['start'], $this->_sections['jc']['iteration'] = 1;
                 $this->_sections['jc']['iteration'] <= $this->_sections['jc']['total'];
                 $this->_sections['jc']['index'] += $this->_sections['jc']['step'], $this->_sections['jc']['iteration']++):
$this->_sections['jc']['rownum'] = $this->_sections['jc']['iteration'];
$this->_sections['jc']['index_prev'] = $this->_sections['jc']['index'] - $this->_sections['jc']['step'];
$this->_sections['jc']['index_next'] = $this->_sections['jc']['index'] + $this->_sections['jc']['step'];
$this->_sections['jc']['first']      = ($this->_sections['jc']['iteration'] == 1);
$this->_sections['jc']['last']       = ($this->_sections['jc']['iteration'] == $this->_sections['jc']['total']);
?>
  <tr>
    <td width="30%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['ID']; ?>
</font></td>
    <td width="40%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['count']; ?>
</font></td>

  </tr>
<?php endfor; endif; ?>
</table>
<?php endif; ?>
<br/>



</body>
</html>