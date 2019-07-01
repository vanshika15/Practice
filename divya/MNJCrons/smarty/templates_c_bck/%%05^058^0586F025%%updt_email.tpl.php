<?php /* Smarty version 2.6.19, created on 2014-06-09 11:59:38
         compiled from /usr/local/apache/htdocs/smarty/templates/ud/updt_email.tpl */ ?>
<html>
<head>
<title>Update EMAIL</title>
<style>
</style>
</head>
<body>
<form method="post" name="updtEmailForm" action="EmailUpdate.php">
<center><font color="#999933"><h1>Retrieve/Update EMAIL ID</h1></font></center><hr>
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
"red">Email of given user is blank !</font> <?php else: ?>  <?php echo $this->_tpl_vars['email']; ?>
 <?php endif; ?> <p>
<font color="#0C4481" size=3><strong>New Email : </strong></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="new_email" value="<?php echo $this->_tpl_vars['new_email']; ?>
" maxlength=100></p></span>
<center><input type="submit" name="updtemail" value="Update EMAIL"></center>
<?php endif; ?>
</form>
</body>
</html>
