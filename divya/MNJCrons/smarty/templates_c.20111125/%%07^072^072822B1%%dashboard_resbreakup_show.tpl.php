<?php /* Smarty version 2.6.19, created on 2008-06-30 10:48:39
         compiled from ni/nidashboard/dashboard_resbreakup_show.tpl */ ?>
<html>
<head>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

<?php echo $this->_tpl_vars['MESSAGE']; ?>

<table width="99%" border="1" align="center" bordercolor="#CCCCFF">
<tr align="center">
  <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Find Date : </font></b></td>
 <td>
 	<table width="100%"> <tr align="center"> <td width="50%"><b><?php echo $this->_tpl_vars['FIELD_TITLE']; ?>
</b></td> <td width="50%"><b>Count</b></td> 			</tr></table>
 </td>
 <!--<td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Count</font></b></td>-->
   
</tr>
<?php $_from = $this->_tpl_vars['COUNTRYCOUNT']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<tr align="center">
<td><?php echo $this->_tpl_vars['key']; ?>
</td>
<td>
	<table border=1 width="100%">
  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['COUNTRYCOUNT'][$this->_tpl_vars['key']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
  <tr align="center">
  <td valign="top" width="50%"><?php echo $this->_tpl_vars['COUNTRYCOUNT'][$this->_tpl_vars['key']][$this->_sections['i']['index']]['country']; ?>
</td>
  <td valign="top"width="50"><?php echo $this->_tpl_vars['COUNTRYCOUNT'][$this->_tpl_vars['key']][$this->_sections['i']['index']]['cnt']; ?>
</td>  
  </tr>
  <?php endfor; endif; ?>
  </table>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
<br/>
</table>
</body>
</html>