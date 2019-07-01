<?php /* Smarty version 2.6.19, created on 2012-08-30 11:54:30
         compiled from ni/nidashboard/dashboard_employerlogs_breakup.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<TITLE>Employer Report : Download Logs </TITLE>
<style>	
	.style1
	{
		font-weight:bold;
		background-color:#DDDDDD;
	}
</style>
</head>
<body >
<?php echo $this->_tpl_vars['TEMPLATE_HEADER']; ?>


<?php echo $this->_tpl_vars['TEMPLATE_DATE']; ?>




<script>

    var div = document.getElementById("fornouse");
    div.innerHTML = '<br><div ALIGN = "CENTER" style="color:red"><?php echo $this->_tpl_vars['ERROR_MSG']; ?>
</div>'+'<br><br>'+'<?php echo $this->_tpl_vars['LOG_OPTIONS']; ?>
';

</script>
</BODY>
</HTML>