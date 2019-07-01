<?php /* Smarty version 2.6.19, created on 2012-08-21 13:49:29
         compiled from ni/nidashboard/dashboard_clientview.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Company Search - Compnay MIS</title>
<style>	
	.style1
	{
		font-weight:bold;
		background-color:#DDDDDD;
	}
	.gobutton{color:#ffffff;background-color:#0E5BA8;font-weight:bold;CURSOR:hand;width:50px;margin-top:1px;margin-bottom:1px;}
</style>
</head>
<body>
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

<?php if ($this->_tpl_vars['Message']): ?><div STYLE="padding-left:120px;padding-right:100px;color:red;"><?php echo $this->_tpl_vars['Message']; ?>
</div><?php endif; ?>
<form name="formmain" action="dashboard_clientview.php" method="post">

<input type="hidden" name="section" value="<?php echo $this->_tpl_vars['SECTION']; ?>
">

<div STYLE="padding-left:120px;padding-right:100px;"><b>Enter one username please</b></div>

<TABLE align="center" border="1" bordercolor="#CCCCFF" width="60%" >
    <TR><TD ALIGN = "CENTER" class="style1">Enter Username</TD><TD width="50"><input type="textbox" name="uname" value = "<?php echo $this->_tpl_vars['uname']; ?>
"size=40></TD></TR>
    <TR><TD ALIGN = "CENTER" colspan="2"><input type="submit" name="btngo" value="GO" class="gobutton"></TD></TR>
  </table>
</form>

<br/>

<?php if ($this->_tpl_vars['countrow'] != 0): ?>
	<table width="95%" border="1" align="center" bordercolor="#EEEEEE">
		<tr> 
			<td width="25%"%" align="center" class="style1">Company Name</td>
			<td width="20%" align="center" class="style1">Master Email</td>
			<td width="20%" align="center" class="style1">User Name</td>
			<td width="20%" align="center" class="style1">Registration Date</td>
			<td width="10%" align="center" class="style1">View date</td>
			<td width="10%" align="center" class="style1">Contact date</td>
		</tr>
	<?php $_from = $this->_tpl_vars['COMPINFO_ARR']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arrKey'] => $this->_tpl_vars['data']):
?>
		<tr> 
			<td width="25%" align="center"><?php echo $this->_tpl_vars['data']['compName']; ?>
</td>
			<td width="20%" align="center"><?php echo $this->_tpl_vars['data']['compMasterEmail']; ?>
</td>
			<td width="20%" align="center"><?php echo $this->_tpl_vars['data']['clientUsername']; ?>
</td>
			<td width="20%" align="center"><?php echo $this->_tpl_vars['data']['clientEntryDate']; ?>
</td>
			<td width="10%" align="center"><?php echo $this->_tpl_vars['data']['viewdate']; ?>
</td>
			<td width="10%" align="center"><?php echo $this->_tpl_vars['data']['contdate']; ?>
</td>
		</tr>
	<?php endforeach; endif; unset($_from); ?>
	</table>
<?php endif; ?>
<br />

</body>
</html>