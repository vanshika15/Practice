<?php /* Smarty version 2.6.19, created on 2012-08-28 16:27:42
         compiled from ni/nidashboard/dashboard_topsearches_show.tpl */ ?>
<html>
<head>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="777" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#66CCFF">
  <tr> 
    <td width="552"> 
      <div align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="5"><b><font color="#66CCFF">JOB EDIT</font>         :: Top Searches  </b></font></div>
    </td>
    <td width="225"> 
      <div align="right"><img src="<?php echo $this->_tpl_vars['BASE_IMAGES_PATH']; ?>
/nkr_logo.gif" width="220" height="55"></div>
    </td>
  </tr>
</table>
<BR />

<br />
<?php echo $this->_tpl_vars['MESSAGE']; ?>


<table border="1" >
<tr>
	<td>Date</td>	
	<td>
		<table border="1" >
		<tr>
			<td >Keywords</td>
			<td>Keywords Count</td>
			<td>Location</td>
			<td>Location Count</td>
			<td>Farea</td>
			<td>Farea Count</td>
			</tr>	
			</table>
	</td>
</tr>	
</table>

<table border="1">
<?php $_from = $this->_tpl_vars['OUTPUT']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<tr>
	<td><?php echo $this->_tpl_vars['key']; ?>
</td>
	<td>
			<table border="1" >
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['OUTPUT'][$this->_tpl_vars['key']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<td><?php echo $this->_tpl_vars['OUTPUT'][$this->_tpl_vars['key']][$this->_sections['i']['index']]['keywords']; ?>
</td>
				<td><?php echo $this->_tpl_vars['OUTPUT'][$this->_tpl_vars['key']][$this->_sections['i']['index']]['kcnt']; ?>
</td>
				<td><?php echo $this->_tpl_vars['OUTPUT'][$this->_tpl_vars['key']][$this->_sections['i']['index']]['location']; ?>
</td>
				<td><?php echo $this->_tpl_vars['OUTPUT'][$this->_tpl_vars['key']][$this->_sections['i']['index']]['lcnt']; ?>
</td>
				<td><?php echo $this->_tpl_vars['OUTPUT'][$this->_tpl_vars['key']][$this->_sections['i']['index']]['farea']; ?>
</td>
				<td><?php echo $this->_tpl_vars['OUTPUT'][$this->_tpl_vars['key']][$this->_sections['i']['index']]['fcnt']; ?>
</td>
			</tr>
			<?php endfor; endif; ?>
			</table>
	</td>
	
</tr>	
<?php endforeach; endif; unset($_from); ?>
</table>

<br/>

</body>
</html>