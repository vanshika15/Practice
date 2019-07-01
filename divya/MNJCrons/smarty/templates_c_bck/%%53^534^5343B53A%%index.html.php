<?php /* Smarty version 2.6.19, created on 2016-04-26 12:24:36
         compiled from /usr/local/apache/htdocs/JAInterface/index.html */ ?>
<html>
<head>
<title>Manage Job Alerts</title>
</head>
<script>
function validateEmail(emailElem){
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (reg.test(emailElem.value) == false) 
    {
        return  printError(false, emailElem.id, 'Invalid Email');
    }
    return true;
}
	function printError(val, valId, msg) {
		if (!val) {
			var errorDiv = document.createElement('div');
			errorDiv.style.color = 'red';
			errorDiv.innerHTML = msg;
			errorDiv.style.display = 'inline';
			errorDiv.id=valId+'errorDiv';
			if(document.getElementById(valId+'errorDiv'))
				return val
				else
			document.getElementById(valId).parentElement.appendChild(errorDiv);
		}
		return val;
	}
	function removeErrorDiv(elem){
		if(document.getElementById(elem.id+'errorDiv'))
		elem.parentElement.removeChild(document.getElementById(elem.id+'errorDiv'));
		
	}
</script>
<body>
	<form name="details" id="details" action="index.php"
		method="get">
		<?php if (isset ( $this->_tpl_vars['Results'] ) && $this->_tpl_vars['Results'] == 'success'): ?>
				<div  style="color:green;display: inline;" >Email Added successfully </div>
				<?php endif; ?>
		<fieldset>
			<legend>Manage Job Alerts</legend>
			<div>
				Email: <input type="text" id="emailId" name="emailId"  value="<?php if ($this->_tpl_vars['Results'] != 'success'): ?><?php echo $this->_tpl_vars['History']['emailId']; ?>
<?php endif; ?>" onclick="removeErrorDiv(this)">
				<?php if (isset ( $this->_tpl_vars['Errors'] ) && count ( $this->_tpl_vars['Errors'] ) > 0 && isset ( $this->_tpl_vars['Errors']['emailId'] )): ?>
				<div  style="color:red;display: inline;" > <?php echo $this->_tpl_vars['Errors']['emailId']; ?>
 </div>
				<?php endif; ?>
				
			</div>
				<br> <br> <input type="submit" value="Delete Job Alerts for this email" name="submit"
				onclick="return validateEmail(document.getElementById('emailId'))">
			<!-- <button type="button" onclick=""></button> -->
		</fieldset>
	</form>
</body>
</html>