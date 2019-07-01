<?php /* Smarty version 2.6.19, created on 2011-10-25 12:36:51
         compiled from ni/nidashboard/je_daywiselist_show.tpl */ ?>
<html>
<head>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="777" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#66CCFF">
  <tr> 
    <td width="552"> 
      <div align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="5"><b><font color="#66CCFF">JOB EDIT</font>         :: Rereshed/Deleted Jobs  </b></font></div>
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

<table width="99%" border="1" align="center" bordercolor="#CCCCFF">
<tr align="center">
  <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Find Date : </font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Refreshed Jobs</font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Deleted Jobs</font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Rejected Jobs</font></b></td>
   
</tr>

<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['FINAL']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
  <td valign="top"><?php echo $this->_tpl_vars['FINAL'][$this->_sections['i']['index']]['date']; ?>
</td>
  <td valign="top"><?php echo $this->_tpl_vars['FINAL'][$this->_sections['i']['index']]['refreshed']; ?>
</td>
  <td valign="top"><?php echo $this->_tpl_vars['FINAL'][$this->_sections['i']['index']]['deleted']; ?>
</td>
  <td valign="top"><?php echo $this->_tpl_vars['FINAL'][$this->_sections['i']['index']]['rejected']; ?>
</td>
</tr>
<?php endfor; endif; ?>



   
</table>
<br/>

</body>
</html>