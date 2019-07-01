<?php /* Smarty version 2.6.19, created on 2012-01-31 15:42:39
         compiled from apply/unregApply.tpl */ ?>
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
<td>Date : <?php echo $this->_tpl_vars['Date_day']; ?>
</td><td>Month : <?php echo $this->_tpl_vars['Date_month']; ?>
</td><td>Year : <?php echo $this->_tpl_vars['Date_year']; ?>
</td>
</tr>
</table>
<br>
<input type = "submit" name = "submit" value = "submit">
</form>
</body>
</html>

