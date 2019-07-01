<?php /* Smarty version 2.6.19, created on 2008-11-25 10:46:16
         compiled from ./spammers/mn_spam_add.htm */ ?>
<html>
	<head>
		<h2><center>Add/Edit Spammers Data</center></h2>
		<script language="JavaScript" src="gifs/CalendarPopup.js"></script>
		<script language="JavaScript">
			function validate()
			{
				var d=document.form1;
				if(d.cid.value == "" || d.cname.value == "" || d.cons.value == "" || d.spamdate.value =="" || d.no.value == "" || d.reason.value == "" || d.prod.value == "" || d.subs.value == "" || d.exec.value == "")
				{
					alert("Please fill all mandatory fields");
					return false;
				}
				var a = checkfornum(d.no.value);
				if(a ==1)
				{
					if(parseInt(d.no.value) > 99999)
					{
						alert("no of jobs cannot be greater than 99999");
						return false;
					}
				}
				else
					return false;
				a = checkfornum(d.subs.value);
                                if(a  == 0)
					return false;
				if("<?php echo $this->_tpl_vars['editF']; ?>
" == "")
				{
					a= confirm("Do you really want to mark this client as a spammer");
					if(a)
						return true;
					else
						return false;
				}
				else
					return true;
			}
			function checkfornum(str1)
                        {
                                var numstr="1234567890";
                                 var intctr,intLen;
                                 intLen=str1.length;

                                 for(intCtr=0;intCtr <= intLen && numstr.indexOf(str1.charAt(intCtr))>=0 ;intCtr++);
                                if(intCtr > intLen)
                                        return 1;
                                 else
				{
					alert("No. of jobs & subscription value can only be an integer");
                                        return 0;
				}
                        }
		</script>

	</head>
	<body>
		<form name="form1" method=post action="mn_spam_search.php" onsubmit="return validate();">
		<font color=red><?php echo $this->_tpl_vars['err']; ?>
</font><br>
		<table border=1>
			<tr>
				<td>Company Id <font color=red>*</font></td>
				<td><input type=text id=cid name="arr[cid]" value="<?php echo $this->_tpl_vars['arr']['cid']; ?>
" READONLY></td>
			</tr>
			<tr>
				<td>Company Name <font color=red>*</font></td>
				<td><input type=text id=cname name="arr[cname]" value="<?php echo $this->_tpl_vars['arr']['cname']; ?>
" READONLY></td>
			</tr>
			<tr>
				<td>Registered as Company/Consultant <font color=red>*</font></td>
				<td><select name=arr[cons] id=cons>
					<option value="">Select</option>
					<option value=Y <?php if ($this->_tpl_vars['arr']['cons'] == 'Y'): ?> SELECTED <?php endif; ?>>Consultant</option>
					<option value=N <?php if ($this->_tpl_vars['arr']['cons'] == 'N'): ?> SELECTED <?php endif; ?>>Company</option>
				</select></td>
			</tr>
			<tr>
				<td>Spammer Since <font color=red>*</font></td>
				<td><input name="arr[spamdate]" id="spamdate" size="10" value="<?php echo $this->_tpl_vars['arr']['spamdate']; ?>
" READONLY>
                    <!-- calender control -->
                    <a href="#" onclick="cal1.select(document.forms['form1'].spamdate,'anchor1','yyyy-MM-dd');return false;" name="anchor1" id="anchor1"><img src="gifs/calender.gif" align="middle" border="0"></a> </td>
</td>
			</tr>
			<tr>
				<td>No. of jobs on site <font color=red>*</font></td>
				<td><input type=text name="arr[no]" id=no value="<?php echo $this->_tpl_vars['arr']['no']; ?>
" size=5></td>
			</tr>
			<tr>
				<td>Reason for classification as spammer <font color=red>*</font></td>
				<td><input type=text name="arr[reason]" id=reason value="<?php echo $this->_tpl_vars['arr']['reason']; ?>
"></td>
			</tr>
			<tr>
				<td>Product Purchased <font color=red>*</font></td>
				<td><input type=text name="arr[prod]" id=prod value="<?php echo $this->_tpl_vars['arr']['prod']; ?>
"></td>
			</tr>
			<tr>
				<td>Subscription value <font color=red>*</font></td>
				<td><input type=text name="arr[subs]" id=subs value="<?php echo $this->_tpl_vars['arr']['subs']; ?>
"></td>
			</tr>
			<tr>
				<td>Executive Name <font color=red>*</font></td>
				<td><input type=text name="arr[exec]" id=exec value="<?php echo $this->_tpl_vars['arr']['exec']; ?>
"></td>
			</tr>
			<tr>
				<td>Contact Details of relationship manager</td>
				<td><input type=text name="arr[rel]" id=rel value="<?php echo $this->_tpl_vars['arr']['rel']; ?>
"></td>
			</tr>
			<tr>
				<td colspan=2><input type=submit name=submit value="Add/Edit"></td>
			</tr>
		</table>
			<input type="hidden" name=editF value="<?php echo $this->_tpl_vars['editF']; ?>
">
		</form>
		<script language="JavaScript">
		var cal1 = new CalendarPopup();
		cal1.addDisabledDates(null,document.form1.spamdate.value);
		</script>
	</body>
</html>