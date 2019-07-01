<?php /* Smarty version 2.6.19, created on 2014-06-09 11:59:38
         compiled from /usr/local/apache/htdocs/smarty/templates/ud/ud_EnterUname.tpl */ ?>
<html>
<head>
<title>submit_details</title></head>
<body>
<?php echo $this->_tpl_vars['CONFIRM_MSG']; ?>

<?php if ($this->_tpl_vars['sm_bool'] == 1): ?>
Error: <br>
  <?php echo $this->_tpl_vars['sm_error']; ?>
 <br>

<?php endif; ?>

<h1><b> user information</b></h1>

  <form  method="POST" action="ud_validate.php">

Username:<input type="Text" name="username" value="<?php echo $this->_tpl_vars['sm_username']; ?>
" maxlength=100><br>

<input type="Submit" name="submit" value="submit entry">


  </form>

</body>
</html>