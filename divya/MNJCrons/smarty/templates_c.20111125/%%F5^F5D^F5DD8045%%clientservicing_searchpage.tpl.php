<?php /* Smarty version 2.6.19, created on 2009-02-20 12:37:31
         compiled from ni/nidashboard/clientservicing_searchpage.tpl */ ?>
<html>
<head>
	<script>
	function validateForm() {
		var arrSaleType = document.form1.saleType;
		var checkCount = 0;
		for(i=0; i<arrSaleType.length; i++) {
			if(arrSaleType[i].checked == true)
				checkCount++;
		}
		if(checkCount > 0);
		else {
			alert('Please select a Sale Type');
			return false;
		}
		
		var arrProduct = document.form1.product;
		var checkCount = 0;
		for(i=0; i<arrProduct.length; i++) {
			if(arrProduct[i].checked == true)
                checkCount++;
        }
        if(checkCount > 0);
        else {
            alert('Please select a product');
			return false;
		}
		return true;
	}
	</script>
	<SCRIPT LANGUAGE="JavaScript" SRC="js/CalendarPopUp.js"></SCRIPT>
	<SCRIPT LANGUAGE="JavaScript">
	var cal = new CalendarPopup();
	</SCRIPT>

<title>www.naukrigulf.com-Client Servicing MIS</title>
</head>
<body>
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

    <br><br>
<form name='form1' method='post' action="clientservicingmis.php" onsubmit="return validateForm();">
<table width="464" height="147" border="0" cellpadding="0" cellspacing="0" bgcolor="#F0F0F0" style=" border: 1px solid #ccc; padding:" align="center">
  <tr>
    <td width="144">Sale Type</td>
    <td width="132" align="center">Credit
      <input type="checkbox" name="saleType" id="credit" onclick="if(document.getElementById('credit').checked)document.getElementById('saleCredit').value=true;else document.getElementById('saleCredit').value='';"/></td>
    <td width="128" align="center"><input type="checkbox" name="product" id="jobposting" onclick="document.getElementById('productJP').value=true;"/>
      Job posting</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">Full
      <input type="checkbox" name="saleType" id="full" onclick="if(document.getElementById('full').checked)document.getElementById('saleFull').value=true;else document.getElementById('saleFull').value='';"/></td>
    <td align="center"><input type="checkbox" name="product" id="resdex" disabled="true"/>
      Resdex</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">Trial
      <input type="checkbox" name="saleType" id="trial" disabled="true" onclick="if(document.getElementById('trial').checked)document.getElementById('saleTrial').value=true;else document.getElementById('saleTrial').value='';"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">Part
      <input type="checkbox" name="saleType" id="part" onclick="if(document.getElementById('part').checked)document.getElementById('salePart').value=true;else document.getElementById('salePart').value='';"/></td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><input type="submit" name="displayMIS" id="button" value="Submit" /></td>
  </tr>
</table>
<input type="hidden" name="saleCredit" id="saleCredit" value="" />
<input type="hidden" name="saleFull" id="saleFull" value="" />
<input type="hidden" name="saleTrial" id="saleTrial" value="" />
<input type="hidden" name="salePart" id="salePart" value="" />
<input type="hidden" name="productJP" id="productJP" value="" />
</form>
<FORM name='form2' method='post' action="clientservicingmis.php">
<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Follow-up MIS<br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From : <INPUT TYPE="text" NAME="date1" VALUE="" SIZE=10>
<A HREF="#"
   onClick="cal.select(document.forms['form2'].date1,'anchor1','yyyy-MM-dd'); return false;"
   NAME="anchor1" ID="anchor1">select</A>
&nbsp;&nbsp;&nbsp;To : <INPUT TYPE="text" NAME="date2" VALUE="" SIZE=10>
<A HREF="#"
   onClick="cal.select(document.forms['form2'].date2,'anchor1','yyyy-MM-dd'); return false;"
   NAME="anchor1" ID="anchor1">select</A>
&nbsp;&nbsp;&nbsp;<input type="submit" name="displayMIS" id="button" value="Submit" />
</FORM>

</body>
</html>