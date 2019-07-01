<?php /* Smarty version 2.6.19, created on 2012-01-24 17:05:12
         compiled from ni/nidashboard/dashboard_res_deleteaccount.tpl */ ?>
<html>
<head><title>Delete Jobseeker Account</title></head>

<h3><center><font color=Red> <?php echo $this->_tpl_vars['ErrorMsg']; ?>
</font></center></h3><br>

<?php if ($this->_tpl_vars['DELETEURL'] != ""): ?>

<?php echo $this->_tpl_vars['DELETEURL']; ?>

<br><font color="Gray" size="-1"><a href="dashboard_res_deleteaccount.php">Go back</a> and delete another account.</font>

<?php else: ?>

<form name="myform" action="dashboard_res_deleteaccount.php" method="post">
Enter Username (Email Id): <input type="text" value="<?php echo $this->_tpl_vars['USERNAME']; ?>
" name="username"><br><br>
<input type="submit" value="Delete Account" name="btndelete">
</form	>
<?php endif; ?>


</body>
</html>