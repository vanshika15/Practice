<?php /* Smarty version 2.6.19, created on 2009-04-03 15:23:15
         compiled from /usr/local/apache/htdocs/smarty/templates/ud/EmailValidate.tpl */ ?>
<html>
<head>
<title>Validate Email</title>
<style>
</style>
</head>
<body>
<form method="post" name="updtEmailForm" action="EmailValidate.php">
<center><font color="#999933"><h1>Validate Email</h1></font></center><hr>
<table width =100%>
<tr class="formhead">
<td> <font color="#0C4481" size=3><strong>Username</strong></td><td><input type="text" name="uname" value="<?php echo $this->_tpl_vars['uname']; ?>
" maxlength=100></td></tr>
<tr><td width="100">&nbsp;</td><td >
<tr class="formhead"> <td colspan=4 align=center><input type="submit" name="getemail" value="Get EMAIL"></td></tr>
</table>
<?php if ($this->_tpl_vars['err_uname'] != 'blank'): ?>
<font color="red">
<?php echo $this->_tpl_vars['err_uname']; ?>

</font>
<?php endif; ?>
<?php if ($this->_tpl_vars['email'] != '' || $this->_tpl_vars['err_uname'] == 'blank'): ?>
<span class="fieldsnew"><font color="#0C4481" size=3><strong>Email :</strong></font><?php if ($this->_tpl_vars['err_uname'] == 'blank'): ?> <font color=
"red">Email of given user is blank !</font> <?php else: ?>  <?php echo $this->_tpl_vars['uname']; ?>
 <?php endif; ?> <p>

<span class="fieldsnew"><font color="#0C4481" size=3><strong>Validated :</strong></font><?php if ($this->_tpl_vars['verify'] != 'B'): ?> <font color=
"red">Account Not Validated !</font> <?php else: ?>  <font color= "green">Account already validated !</font><?php endif; ?> <p>

</span>
<?php if ($this->_tpl_vars['verify'] != 'B'): ?>
<center><input type="submit" name="updtemail" value="Validate EMAIL"></center>
<?php endif; ?>
<?php endif; ?>
</form>
</body>
</html>
