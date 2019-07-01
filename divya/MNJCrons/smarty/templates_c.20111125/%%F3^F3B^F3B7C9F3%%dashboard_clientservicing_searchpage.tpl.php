<?php /* Smarty version 2.6.19, created on 2010-03-19 12:07:15
         compiled from ni/nidashboard/dashboard_clientservicing_searchpage.tpl */ ?>
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
<!--<SCRIPT LANGUAGE="JavaScript" SRC="js/CalendarPopUp.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript">
var cal = new CalendarPopup();
</SCRIPT>-->

<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['DASHBOARD_STATIC_PATH']; ?>
/js_calendar.css" media="screen"></link>
<SCRIPT type="text/javascript" src="<?php echo $this->_tpl_vars['DASHBOARD_STATIC_PATH']; ?>
/js_calendar.js"></script>

<title>www.naukrigulf.com-Client Servicing MIS</title>
</head>
<body>
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

<form name='form1' method='post' action="dashboard_clientservicingmis.php" onsubmit="return validateForm();">
  <table width="464" height="147" border="0" cellpadding="0" cellspacing="0" bgcolor="#F0F0F0" style=" border: 1px solid #ccc; padding:" align="center">
    <tr>
      <td width="144">Sale Type</td>
      <td width="132" align="center">Credit<input type="checkbox" name="saleType" id="credit" onclick="if(document.getElementById('credit').checked)document.getElementById('saleCredit').value=true;else document.getElementById('saleCredit').value='';"/></td>
      <td width="128" align="center"><input type="checkbox" name="product" id="jobposting" onclick="document.getElementById('productJP').value=true;"/>Job posting</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center">Full<input type="checkbox" name="saleType" id="full" onclick="if(document.getElementById('full').checked)document.getElementById('saleFull').value=true;else document.getElementById('saleFull').value='';"/></td>
      <td align="center"><input type="checkbox" name="product" id="resdex" disabled="true"/>Resdex</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center">Trial<input type="checkbox" name="saleType" id="trial" disabled="true" onclick="if(document.getElementById('trial').checked)document.getElementById('saleTrial').value=true;else document.getElementById('saleTrial').value='';"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center">Part<input type="checkbox" name="saleType" id="part" onclick="if(document.getElementById('part').checked)document.getElementById('salePart').value=true;else document.getElementById('salePart').value='';"/></td>
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

<form name='form2' method='post' action="dashboard_clientservicingmis.php">
  <table width="464" height="100" border="0" cellpadding="0" cellspacing="0" bgcolor="#F0F0F0" style=" border: 1px solid #ccc; padding:" align="center">
    <tr><td colspan="2" align="center"><b>Follow-up MIS</b></td></tr>
    <tr>
      <td>From : <input type="text" id="date1" name="date1" size="15" readonly /><img src="<?php echo $this->_tpl_vars['DASHBOARD_STATIC_PATH']; ?>
/images/calendar.gif" align="absmiddle" onclick="displayCalendar(document.forms[1].date1,'yyyy-mm-dd',this)"></td>
      <td>To : <input type="text" id="date2" name="date2" size="15" readonly /><img src="<?php echo $this->_tpl_vars['DASHBOARD_STATIC_PATH']; ?>
/images/calendar.gif" align="absmiddle" onclick="displayCalendar(document.forms[1].date2,'yyyy-mm-dd',this)"></td>
    </tr>
    <tr><td colspan="2" align="center"><input type="submit" name="displayMIS" id="button" value="Submit"></td></tr>
  </table>
</form>

<form name="formmain" action="dashboard_clientservicingmis.php" method="post">
  <table width="610" height="100" border="0" cellpadding="0" cellspacing="0" bgcolor="#F0F0F0" style=" border: 1px solid #ccc; padding:" align="center">
    <tr><td colspan="2" align="center"><b>Search</b></td></tr>
    <tr><td align = "center" colspan="2">Enter one of the three fields to perform search.(You can do a wild card search with use of '*'. For example to search for all companies start with letter 'a', enter 'a*' against Company Name. Similarly, to search for company names ending in 'a', enter '*a')</td></tr>
    <tr><td align = "center">Enter Username</td><td><input type="textbox" name="uname" size="25"></td></tr>
    <tr><td align = "center">Enter Master Email</td><td><input type="textbox" name="email" size="25"></td></tr>
    <tr><td align = "center">Enter Company Name</td><td><input type="textbox" name="compname" size="25"></td></tr>
    <tr><td align = "center" colspan="2"><input type="submit" name="displayMIS" id="button" value="Submit"></td></tr>
  </table>
</form>


</body>
</html>