<?php /* Smarty version 2.6.19, created on 2011-11-28 16:44:04
         compiled from apply/apply_source.tpl */ ?>
<html>
<body>
<form method = "post" action = "">

<table>
<?php if ($this->_tpl_vars['err'] != ''): ?>
<tr>
<td colspan = 4><font color="red"><?php echo $this->_tpl_vars['err']; ?>
</font> </td>
</tr>
<?php endif; ?>
<tr>
<td colspan = 4> Please select the date for which you would like to see the report </td>
</tr>
<tr></tr>
<tr>
<td>Date : <?php echo $this->_tpl_vars['HtmDD_Date']; ?>
</td><td>Month : <?php echo $this->_tpl_vars['HtmDD_Month']; ?>
</td><td>Year : <?php echo $this->_tpl_vars['HtmDD_Year']; ?>
</td>
</tr>
</table>
<br>
<input type = "submit" name = "submit" value = "submit">
</form>
</body>
</html>
