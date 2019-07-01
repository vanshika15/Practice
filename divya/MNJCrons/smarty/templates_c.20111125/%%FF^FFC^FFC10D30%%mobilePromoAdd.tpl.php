<?php /* Smarty version 2.6.19, created on 2011-03-25 16:35:49
         compiled from /usr/local/apache/htdocs/smarty/templates/mobilePromo//mobilePromoAdd.tpl */ ?>
<html>
<head>
<title>Mobile Promo Add Interface</title>
<script>
function validatePromo()
{
	var errorCount = 0;
	var errorString = "";
	var promoNameObj = document.getElementById('promoName');	
	var promoTextObj = document.getElementById('promoText');	
	var promoNameValue = promoNameObj.value;
	var promoTextValue = promoTextObj.value;
	promoNameValue = promoNameValue.replace(/^\s+|\s+$/,'');
	promoTextValue = promoTextValue.replace(/^\s+|\s+$/,'');
	if(promoNameValue == '')
	{
		errorCount += 1;	
		errorString += ",Promotion Name";
	}
	if(promoTextValue == "")
	{
		errorCount += 1;	
		errorString += ",Promotion Text";
	}
	if(errorString)
	{
		errorString = errorString.replace(/^,/,'');
		alert("Total Error "+errorCount +"\n"+errorString+" Can't Be Empty");
		return false;
	}
}
</script>
</head>
<body>
<form action="<?php echo $this->_tpl_vars['appURL']; ?>
" method="post" onsubmit="return validatePromo()">
<table border="1" align="center">
<tr><th>Promotion Name</th><td><input type="text" name="promoName" id="promoName" value="<?php echo $this->_tpl_vars['promoName']; ?>
" size="25"></td></tr>
<tr><th>Promotion Text on Mailer</th><td><textarea name="promoText" id="promoText" rows="10" cols="32"><?php echo $this->_tpl_vars['promoText']; ?>
</textarea></td></tr>
<!-- <tr><th>URL for landing page</th><td><input type="text" name="promoURL" id="promoURL" value="<?php echo $this->_tpl_vars['promoURL']; ?>
" size="25"></td></tr> -->
<tr><th>Promo On</th>
<td>
<select multiple="" size="5" id="promoON" name="promoON[]" style="width:250px">
<option value="1" <?php if ($this->_tpl_vars['jobAlert']): ?> selected <?php endif; ?>>Job Alert</option>
<option value="2" <?php if ($this->_tpl_vars['jobMessenger']): ?> selected <?php endif; ?>>Job Messenger</option>
<option value="4" <?php if ($this->_tpl_vars['applyJobseekerMailer']): ?> selected <?php endif; ?>>Apply Jobseeker Mailer</option>
<option value="8" <?php if ($this->_tpl_vars['jamxMailer']): ?> selected <?php endif; ?>>Jamx Mailer</option>
<option value="16" <?php if ($this->_tpl_vars['applyRecruiterMailer']): ?> selected <?php endif; ?>>Apply Recruiter Mailer</option>
<option value="32" <?php if ($this->_tpl_vars['recruiterViewMailer']): ?> selected <?php endif; ?>>Recruiter View Mailer</option>
</select>
</tr>
<tr>
<td colspan="2" align="right">
<?php if ($this->_tpl_vars['action'] == 'addPromo'): ?>
	<input type="submit" name="addPromo" value="Add Promo">
<?php elseif ($this->_tpl_vars['action'] == 'editPromo'): ?>
	<input type="submit" name="updatePromo" value="Update Promo">
<?php endif; ?>
</td>
</tr>
</table>
<input type="hidden" value=<?php echo $this->_tpl_vars['promoID']; ?>
 name="promoID">
</form>
</body>
</html>