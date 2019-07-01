<?php /* Smarty version 2.6.19, created on 2010-03-25 16:35:54
         compiled from ni/nidashboard/dashboard_spamcontrolMIS.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Spam Control Interface - nidashboard</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<LINK REL="stylesheet"  HREF="<?php echo $this->_tpl_vars['BASE_CSS_PATH']; ?>
/mnr_style_<?php echo $this->_tpl_vars['COMMON_CSS_VER']; ?>
.css" TYPE="text/css">
<SCRIPT LANGUAGE="JavaScript1.2" SRC="<?php echo $this->_tpl_vars['BASE_JS_PATH']; ?>
/nkr_calendar_<?php echo $this->_tpl_vars['COMMON_JS_VER']; ?>
.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript1.2">
function confirmAction(spamid, clientid, action) 
{
	if(confirm("Are you sure you want to " + action + " Email Template / company")) 
		window.location = "<?php echo $this->_tpl_vars['DASHBOARD_PATH']; ?>
/dashboard_spamcontrol.php?spamid=" + spamid + "&clientid=" + clientid + "&dateFrom=<?php echo $this->_tpl_vars['DATEFROM']; ?>
&action=" + action;
	else
		return false;
}
</SCRIPT>
<style>
	.style1
	{
		font-size:13px;
		background-color:#DDDDDD;
		line-height:18pt;
	}
	.gobutton{color:#ffffff;background-color:#0E5BA8;font-weight:bold;CURSOR:hand;width:50px;margin-top:1px;margin-bottom:1px;}
</style>
</head>

<body bgcolor="#EEEEEE" text="#000000">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

<h2 align="center"><u>Select the date range</u></h2>
<FORM action="<?php echo $this->_tpl_vars['DASHBOARD_PATH']; ?>
/dashboard_spamcontrolMIS.php" name="frmCountmis" method="POST">
	<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
	<TABLE align="center" border="1" bordercolor="BLUE" width="77%" >
		<TR>
			<TD class="style1">Please specify your date :</TD>
			<TD>
				From(yyyy-mm-dd) : &nbsp;<INPUT TYPE="text" NAME="dateFrom"value="<?php echo $this->_tpl_vars['DATEFROM']; ?>
" SIZE=10><A HREF="#" onClick="cal1.select(document.forms[0].dateFrom,'anchor1','yyyy-MM-dd'); return false;" TITLE="cal1.select(document.forms[0].dateFrom,'anchor1','yyyy-MM-dd'); return false;" NAME="anchor1" ID="anchor1"><b>Select</b></A>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				To(yyyy-mm-dd) : &nbsp;<INPUT TYPE="text" NAME="dateTo" value="<?php echo $this->_tpl_vars['DATETO']; ?>
" SIZE=10><A HREF="#" onClick="cal2.select(document.forms[0].dateTo,'anchor2','yyyy-MM-dd'); return false;" TITLE="cal2.select(document.forms[0].dateTo,'anchor2','yyyy-MM-dd'); return false;" NAME="anchor2" ID="anchor2"><b>Select</b></A>
			</TD>
		</TR>
		<TR>
			<TD colspan="2" align="center"><input type="submit" name="btnShow" class="gobutton" value="Show"></TD>
		</TR>
	</TABLE>
</FORM><br>
<DIV ID="testdiv1" STYLE="position:absolute;visibility:hidden;background-color:white;"></DIV>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['MSG']; ?>
<BR>
<?php echo $this->_tpl_vars['SPAMDATA_TPL']; ?>

</BODY>