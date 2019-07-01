<?php /* Smarty version 2.6.19, created on 2012-01-24 15:01:13
         compiled from ni/nidashboard/dashboard_jobseeker_details.tpl */ ?>
<html>
<body>
<br />
<?php if ($this->_tpl_vars['ERROR_MSG'] != ""): ?>
<center><font color="Maroon"><h3><?php echo $this->_tpl_vars['ERROR_MSG']; ?>
</h3></font></center>
<?php elseif ($this->_tpl_vars['INFO_ARR'] != ""): ?>
<b>Details of <?php echo $this->_tpl_vars['INFO_ARR']['resUsername']; ?>
:</b><br><br>
<table width="95%" border="1" align="center" bordercolor="#CCCCFF">
<tr> 
 <td width="15%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Password</center></font></b></td>
 <td width="10%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Creation Date</center></font></b></td>
 <td width="10%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Last Modified</center></font></b></td>
 <td width="15%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Source</center></font></b></td>
 <td width="10%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Profile Status</center></font></b></td>
 <td width="15%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Time Stamp</center></font></b></td>
 <td width="15%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>IP Address</center></font></b></td>
</tr>

<tr> 
 <td width="15%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php echo $this->_tpl_vars['INFO_ARR']['pswdPassword']; ?>
</center></font></td>
 <td width="10%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php echo $this->_tpl_vars['INFO_ARR']['resEntryDate']; ?>
</center></font></td>
 <td width="10%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php echo $this->_tpl_vars['INFO_ARR']['resModDate']; ?>
</center></font></td>
 <td width="15%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php echo $this->_tpl_vars['INFO_ARR']['resSource']; ?>
</center></font></td>
 <td width="10%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php echo $this->_tpl_vars['INFO_ARR']['resProfileStatus']; ?>
</center></font></td>
 <td width="15%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php echo $this->_tpl_vars['INFO_ARR']['resTimestamp']; ?>
</center></font></td>
 <td width="15%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php echo $this->_tpl_vars['INFO_ARR']['resIp']; ?>
</center></font></td>
</tr>
</table>
<br><br><input value="Go Back" onclick="javascript:history.go(-1);" type="button">
<?php else: ?>
<br>
<form name="myform" action="dashboard_jobseeker_details.php" method="post">
<b>Enter Username:</b> <input type="text" name="username"><br><br>
<input type="hidden" value="1" name="submit_djd">
<input type="submit" value="Get Details" name="submit_djd">
</form>
<?php endif; ?>
<br />

</body>
</html>