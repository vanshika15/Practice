<?php /* Smarty version 2.6.19, created on 2009-06-12 11:57:43
         compiled from ni/nidashboard/dashboard_clientservicingmis.tpl */ ?>
<html>
<head>
	<script>
	// calculate the ASCII code of the given character
function CalcKeyCode(aChar) {
  var character = aChar.substring(0,1);
  var code = aChar.charCodeAt(0);
  return code;
}

function checkNumber(val) {
  var strPass = val.value;
  var strLength = strPass.length;
  var lchar = val.value.charAt((strLength) - 1);
  var cCode = CalcKeyCode(lchar);

  /* Check if the keyed in character is a number
     do you want alphabetic UPPERCASE only ?
     or lower case only just check their respective
     codes and replace the 48 and 57 */

  if (cCode < 48 || cCode > 57 ) {
    var myNumber = val.value.substring(0, (strLength) - 1);
    val.value = myNumber;
  }
  return false;
}
	function checkexpiry(val1) {
	document.forms['form1'].expirychck.value ='';
	var followvar ='followupdate'+val1;
	var expiryvar ='expirydate' +val1;
	var followdate = document.getElementById(followvar).value;
	var expirydate = document.getElementById(expiryvar).value;

	if(followdate =='')
	{
		return true;
	}
	else
	{
	followdate = followdate.replace(/\D+/g,'');
	expirydate = expirydate.replace(/\D+/g,'');
	if(followdate > expirydate)
	{
	 alert ("Follow up date cannot be greater than expiry date");
	document.forms['form1'].expirychck.value ='1';
	 return false;
	}
	else
	{
	return true;
	}
	}
	}
	function nkr_trim(inputString) {
	if (typeof inputString != "string") { return inputString; }
	
	var temp_str = '';
	temp_str = inputString.replace(/[\s]+/g,"");
	if(temp_str == '') {
		return "";	
	}

	var retValue = inputString;
	var ch = retValue.substring(0, 1);
	while (ch == " ") {
		retValue = retValue.substring(1, retValue.length);
		ch = retValue.substring(0, 1);
	}
	ch = retValue.substring(retValue.length-1, retValue.length);
	while (ch == " ") {
		retValue = retValue.substring(0, retValue.length-1);
		ch = retValue.substring(retValue.length-1, retValue.length);
	}
	while (retValue.indexOf("  ") != -1) {
		retValue = retValue.substring(0, retValue.indexOf("  ")) + retValue.substring(retValue.indexOf("  ")+1, retValue.length);
	}
	return retValue;
}

	function validateSaveRemarks() {
		if(document.forms['form1'].expirychck.value =='1')
			return false;
		var clientRemark = document.getElementById('clientRemark').value;
	  	clientRemark = clientRemark.replace(/^\s+|\s+$/g,"");
		if(document.getElementById('clientTick').value == 'false') {
			alert('Please check the entry box');
			return false;
		}	
		else if(clientRemark == '') {
			alert('Please enter in Remarks');	
			return false;
		}
		else if(clientRemark.length > 300) {
			alert('You have exceeded the maximum limit of 300 characters.');	
			return false;
		}
		else 
			return true;
	}
	</script>
	<SCRIPT LANGUAGE="JavaScript" SRC="js/CalendarPopUp.js"></SCRIPT>
	<SCRIPT LANGUAGE="JavaScript">
	var cal = new CalendarPopup();
	</SCRIPT>

<title>www.naukrigulf.com-Client Servicing MIS</title>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

    <br><br>
<form name='form1' method='post' action="dashboard_clientservicingmis.php" onsubmit="return validateSaveRemarks();">
<?php if ($this->_tpl_vars['CLIENT_DETAILS_ARR']): ?>
<table border="2">
	<tr align='center' bgcolor="#00BFFF"><td colspan='27'><b>Date &nbsp; &nbsp;<?php echo $this->_tpl_vars['displayDate']; ?>
</b></td></tr>
	<tr bgcolor="#00BFFF">
	  <td align="center"><b>S.No.</b></td>
	  <td align="center"><b>Company Name</b></td>
	  <td align="center"><b>Username</b></td>
	  <td align="center"><b>Password</b></td>
	  <td align="center"><b>Job Posting Pack</b></td>
	  <td align="center"><b>&nbsp;Start&nbsp;Date&nbsp;</b></td>
	  <td align="center"><b>Expiry&nbsp;Date</b></td>
	  <td align="center"><b>Used Credits</b></td>
	  <td align="center"><b>Remaining Credits</b></td>
	  <td align="center"><b>Total Responses Received</b></td>
	  <td align="center"><b>Average Responses Per Job</b></td>
	  <td align="center"><b>Active Resdex Subscription</b></td>
          <td align="center"><b>Company Type</b></td>
	  <td align="center"><b>Contact Person</b></td>
	  <td align="center"><b>Email</b></td>
	  <td align="center"><b>Landline</b></td>
	  <td align="center"><b>Mobile</b></td>
	  <td align="center"><b>Homepage Client</b></td>
	  <td align="center"><b>Sale Type</b></td>
	  <td align="center"><b>Sale By</b></td>
	  <td align="center"><b>Entry Tick</b></td>
	  <td align="center"><b>Follow-up Date</b></td>
	  <td align="center"><b>Entry Remarks</b></td>
	  <td align="center"><b>Jobs acquired</b></td>
	   <td align="center"><b>Jobs edited</b></td>
	  <td align="center"><b>Renewal Status</b></td>
	  <td align="center"><b>Save Details</b></td>
	</tr>
	<?php $_from = $this->_tpl_vars['CLIENT_DETAILS_ARR']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details'] => $this->_tpl_vars['a']):
?>
	<tr <?php if ($this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['isComments'] == 'y'): ?> style=" background-color: #949494; color:#515050" <?php endif; ?>>
	  <td align="center"><?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['serialNo']; ?>
</td>
	  <td align="center"><?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['companyName']; ?>
</td>
	  <td align="center"><?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['userName']; ?>
</td>
	  <td align="center"><?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['pswd']; ?>
</td>
	  <td align="center"><?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['jpTotalQty']; ?>
</td>
	  <td align="center"><?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['startDate']; ?>
</td>
	  <td align="center"><INPUT TYPE="text" ID="expirydate<?php echo $this->_tpl_vars['details']; ?>
" NAME="expiry_date_<?php echo $this->_tpl_vars['details']; ?>
" VALUE="<?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['endDate']; ?>
" SIZE=10 disabled=true></td>
	  <td align="center"><?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['jpQtyUsed']; ?>
</td>
	  <td align="center"><?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['jpQtyLeft']; ?>
</td>
	  <td align="center"><?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['totalResponse']; ?>
</td>
	  <td align="center"><?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['avgResponse']; ?>
</td>
	  <td align="center"><?php if ($this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['isResdex'] == 'y'): ?> Yes <?php else: ?> No <?php endif; ?></td>
	  <td align="center"><?php if ($this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['companytype'] == ''): ?> &nbsp; <?php else: ?> <?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['companytype']; ?>
 <?php endif; ?></td>
	  <td align="center"><?php if ($this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['contactName'] == ''): ?> &nbsp; <?php else: ?> <?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['contactName']; ?>
 <?php endif; ?></td>
	  <td align="center"><?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['email']; ?>
</td>
	  <td align="center"><?php if ($this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['landLine'] == '++'): ?> - <?php else: ?> <?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['landLine']; ?>
 <?php endif; ?></td>
	  <td align="center"><?php if ($this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['mobile'] == '++'): ?> - <?php else: ?> <?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['mobile']; ?>
 <?php endif; ?></td>
	  <td align="center"><?php if ($this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['homePageClient'] == ''): ?> NA <?php else: ?> <?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['homePageClient']; ?>
 <?php endif; ?></td>
	  <td align="center"><?php if ($this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['saleType'] == ''): ?> &nbsp; <?php else: ?> <?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['saleType']; ?>
 <?php endif; ?></td>
	  <td align="center"><?php if ($this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['saleBy'] == ''): ?> &nbsp; <?php else: ?> <?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['saleBy']; ?>
 <?php endif; ?></td>
	  <td align="center"><input type="checkbox" name="entryTick_<?php echo $this->_tpl_vars['details']; ?>
" id="entryTick_<?php echo $this->_tpl_vars['details']; ?>
" onclick="javascript:if(document.getElementById('entryTick_<?php echo $this->_tpl_vars['details']; ?>
').checked){document.getElementById('clientRemarks_<?php echo $this->_tpl_vars['details']; ?>
').disabled=false}else{document.getElementById('clientRemarks_<?php echo $this->_tpl_vars['details']; ?>
').disabled=true; document.getElementById('clientRemarks_<?php echo $this->_tpl_vars['details']; ?>
').value=''}"></td>
	<td align="center"><INPUT TYPE="text" ID="followupdate<?php echo $this->_tpl_vars['details']; ?>
" NAME="date1_<?php echo $this->_tpl_vars['details']; ?>
" VALUE="" SIZE=10>
<A HREF="#"
   onClick="cal.select(document.forms['form1'].date1_<?php echo $this->_tpl_vars['details']; ?>
,'anchor1','yyyy-MM-dd'); return false;"
	NAME="anchor1" ID="anchor1">select</A>
</td>
	  <td><textarea rows='2' cols="20" maxlength="300" name="clientRemarks_<?php echo $this->_tpl_vars['details']; ?>
" id="clientRemarks_<?php echo $this->_tpl_vars['details']; ?>
" value='' disabled=true></textarea><br><?php echo $this->_tpl_vars['CLIENT_DETAILS_ARR'][$this->_tpl_vars['details']]['serviceDate']; ?>
</td>
	

	  <td align="center"><INPUT TYPE="text" NAME="jobs_aquired_<?php echo $this->_tpl_vars['details']; ?>
" VALUE="" SIZE=5 onKeyUp="javascript:checkNumber(form1.jobs_aquired_<?php echo $this->_tpl_vars['details']; ?>
);"></td>
	  <td align="center"><INPUT TYPE="text" NAME="jobs_edited_<?php echo $this->_tpl_vars['details']; ?>
" VALUE="" SIZE=5 onKeyUp="javascript:checkNumber(form1.jobs_edited_<?php echo $this->_tpl_vars['details']; ?>
);"></td>
	<td align="center"><select name="renewalstatus_<?php echo $this->_tpl_vars['details']; ?>
">
<option selected="" value="select">Renewal Status</option>
<option value="Processed">Processed</option>
<option value="Possible/On Hold">Possible/On Hold</option>
<option value="Not Possible">Not Possible</option>
<option value="Not Applicable">Not Applicable</option>
</select></td>

	  <td><input type="submit" name="Save" value="Save" onclick="document.getElementById('saveRemark').value='<?php echo $this->_tpl_vars['details']; ?>
';document.getElementById('clientRemark').value=document.getElementById('clientRemarks_<?php echo $this->_tpl_vars['details']; ?>
').value;if(document.getElementById('entryTick_<?php echo $this->_tpl_vars['details']; ?>
').checked)document.getElementById('clientTick').value='true';else document.getElementById('clientTick').value='false';document.getElementById('displayMIS').value='true';checkexpiry(<?php echo $this->_tpl_vars['details']; ?>
);"></td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
</table>
<?php echo $this->_tpl_vars['PAGE_LINKS']; ?>

<?php else: ?>
<div style="color:#F00;font-size:150%" align="center">No Data found for the specified criteria..</div>
<?php endif; ?>
<input type="hidden" name="saveRemark" value="" id="saveRemark">
<input type="hidden" name="clientRemark" value="" id="clientRemark">
<input type="hidden" name="clientTick" value="" id="clientTick">
<input type="hidden" name="displayMIS" value="" id="displayMIS">
<input type="hidden" name="pageNo" value="<?php echo $this->_tpl_vars['pageNo']; ?>
" id="pageNo">
<input type="hidden" name="saleCredit" id="saleCredit" value="<?php echo $this->_tpl_vars['saleCredit']; ?>
" />
<input type="hidden" name="saleFull" id="saleFull" value="<?php echo $this->_tpl_vars['saleFull']; ?>
" />
<input type="hidden" name="saleTrial" id="saleTrial" value="<?php echo $this->_tpl_vars['saleTrial']; ?>
" />
<input type="hidden" name="salePart" id="salePart" value="<?php echo $this->_tpl_vars['salePart']; ?>
" />
<input type="hidden" name="expirychck" id="expirycheck" value="" />
<input type="hidden" name="uname" id="uname" value="<?php echo $this->_tpl_vars['uname']; ?>
" />
<input type="hidden" name="email" id="email" value="<?php echo $this->_tpl_vars['email']; ?>
" />
<input type="hidden" name="compname" id="compname" value="<?php echo $this->_tpl_vars['compname']; ?>
" />
</form>
</body>
</html>