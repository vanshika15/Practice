<?php /* Smarty version 2.6.19, created on 2012-02-02 17:28:12
         compiled from ni/nidashboard/dashboard_overview_arabic.tpl */ ?>
<html>
<head>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<?php echo $this->_tpl_vars['MESSAGE']; ?>

<table width="99%" border="1" align="center" bordercolor="#CCCCFF">
<tr align="center">
<?php if ($this->_tpl_vars['datefind'] == 'invalid'): ?>
  <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Server time : </font></b></td>
  <td colspan="2"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b>Note:
      Today's statistics(acc.to server time)</b></font><b></b></td>
<?php else: ?>
  <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Date : </font></b></td>
<?php endif; ?>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Home Page Hits</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Number of new Registrations</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total Searches</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Google Searches</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total Relevant Searches  </font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Job Page Views</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total applies</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total unique applicants</font></b></td>
    </tr>

<?php $_from = $this->_tpl_vars['FINAL_ARR']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['date'] => $this->_tpl_vars['data']):
?>
<tr align="center">
  <td>&nbsp;<?php echo $this->_tpl_vars['date']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['data']['homepagehitsar']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['data']['resnewcv']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['data']['sumCount']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['data']['srchGoogleCount']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['data']['sumRelCount']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['data']['jobpageview']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['data']['applyarabictotal']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['data']['applyarabic']; ?>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>

</table>
<br/>

</body>
</html>