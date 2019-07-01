<?php /* Smarty version 2.6.19, created on 2009-03-09 15:28:10
         compiled from /usr/local/apache/htdocs/smarty/templates/ud/ud_alerts.tpl */ ?>
<html>
<head>
<title>Unsubscribe Log</title>
<style>
</style>
</head>
<body>
<form method="post" name="updtEmailForm" action="ud_alerts.php">
<center><font color="#999933"><h1>Unsubscribe Log</h1></font></center><hr>
<table width =100%>
<tr class="formhead">
<td> <font color="#0C4481" size=3><strong>Username</strong></td><td><input type="text" name="uname" value="<?php echo $this->_tpl_vars['uname']; ?>
" maxlength=100></td></tr>
<tr><td width="100">&nbsp;</td><td >
<tr class="formhead"> <td colspan=4 align=center><input type="submit" name="getemail" value="Unsubscribe Date"></td></tr>
</table>
<?php if ($this->_tpl_vars['err_uname'] != 'blank'): ?>
<font color="red">
<?php echo $this->_tpl_vars['err_uname']; ?>

</font>
<?php endif; ?>
<?php if (strlen ( $this->_tpl_vars['verify'] ) > 0): ?>
<span class="fieldsnew"><font color="#0C4481" size=3><strong>Unsubscribed On : </strong></font><font color="black"><?php echo $this->_tpl_vars['verify']; ?>

<?php endif; ?>
</form>
</body>
</html>
