<?php /* Smarty version 2.6.19, created on 2011-11-25 20:24:20
         compiled from /usr/local/apache/htdocs/smarty/templates/ud/ud_Page2.tpl */ ?>
<html>
<head><title>Reset Password</title></head>
<body>
<?php if ($this->_tpl_vars['sm_Confirm'] != ""): ?>
<?php echo $this->_tpl_vars['sm_Confirm']; ?>

<?php else: ?>
<?php echo $this->_tpl_vars['sm_MsgError']; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['sm_Confirm'] == "" && $this->_tpl_vars['sm_MsgError'] == ""): ?>

<h1><b> update password</b></h1><br>

  <form  method="POST" action="ud_validate.php">
<input type="hidden" name="username" value="<?php echo $this->_tpl_vars['sm_username']; ?>
">
Username: <strong><?php echo $this->_tpl_vars['sm_username']; ?>
</strong>
<table border="1">
<tr><th>Password</th><th>Email</th><th>Mobile</th>
<th>Resi. Phone</th><th>Date Created</th><th>Last Modified</th>
<th>Source</th><th>FLAG(Tsnotify)</th><th>Valid EMail</th></tr>
  <tr>
<td><?php echo $this->_tpl_vars['sm_row']['PASSWORD']; ?>
</td>
<td><?php echo $this->_tpl_vars['sm_row']['EMAIL']; ?>
</td>
<td><?php echo $this->_tpl_vars['sm_row']['MPHONE']; ?>
</td>
<td><?php echo $this->_tpl_vars['sm_row']['RPHONE']; ?>
</td>
<td><?php echo $this->_tpl_vars['sm_row']['ACC_CRT_DATE']; ?>
</td>
<td><?php echo $this->_tpl_vars['sm_row1']['MOD_DT']; ?>
</td>
<td><?php echo $this->_tpl_vars['sm_row']['SRC']; ?>
</td>
<td><?php echo $this->_tpl_vars['sm_row']['CV_STATUS']; ?>
</td>
<td><?php echo $this->_tpl_vars['sm_row']['VERIFY']; ?>
</td>
</tr>
</table><br>
<input type="Submit" name="update" value="Reset Password"> &nbsp; &nbsp;<a href="ud_validate.php">Back</a>
</form>
<?php endif; ?>
</body>
</html>

