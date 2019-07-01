<?php /* Smarty version 2.6.19, created on 2011-12-15 15:03:06
         compiled from /usr/local/apache/htdocs/NaukriTms/tpl/addpixel.tpl */ ?>
<html>
<head>
</head>
<body>
<div>
<form name="AddPixel" method="POST" action="" onsubmit="return validateForm()">
<table border='0' width="600px;" style="font-size:12px;font-family:Verdana,Tahoma,Arial">
<tr ><td width="150px;";>&nbsp;</td><td width="450px;"><b>Add pixel code</b></td></tr>
<tr><td >&nbsp;</td><td >&nbsp;</td></tr>
<tr id="errMsg" ><td colspan='2' align="center" ><span style="color:#FF0000;font-size:10px;font-family:Verdana;Tahoma:Arial;"><?php echo $this->_tpl_vars['errMsg']; ?>
&nbsp;</span></td></tr>
<tr><td align='right'>Tieup Name*</td><td><input name="TIEUP" type="text" size="20" value="<?php echo $this->_tpl_vars['TIEUP']; ?>
"></td></tr>
<tr><td valign='top' align='right'>Pixel code*</td><td><textarea name="PCODE" rows='5' cols='50'><?php echo $this->_tpl_vars['PCODE']; ?>

</textarea></td></tr>
<tr><td>&nbsp;</td><td ><input type='submit' name='Save' value='Add Pixel Code' style="width:175px;"/></td></tr>
</table>
</form>
</div>
</body>
<script>
document.getElementById('errMsg').style.display = 'none';
function validateForm()
{
  var pForm = document.AddPixel;
  var sid = pForm.SID.value.trim();
  var pcode = pForm.PCODE.value.trim();

  var errMsg = '';

  errMsg += sid.length    == 0 ? "Please specify the source id.\n"  : (isValidSourceId(sid)     ? '' : "Please specify a valid source id.\n");
  errMsg += pcode.length  == 0 ? "Please specify the pixel code.\n" : (isValidPixelCode(pcode)  ? '' : "Please specify a valid pixel code.\n");

  if ( errMsg.length > 0 ) {
    alert(errMsg);
    return false;
  }
  return true;
}
function isValidSourceId(sid) 
{
  return sid.isNumeric();
}
function isValidPixelCode(pcode) 
{
  return true;
  //alert(pcode.hasHtmlImgTag());
}
String.prototype.hasHtmlImgTag = function() {return /^vishalraj$/.test(this)};
String.prototype.isNumeric = function() { return ! /[^0-9]+/.test(this); }
String.prototype.trim = function() { return this.replace(/^\s+|\s+$/g, '')};
var addErrMsg = '<?php echo $this->_tpl_vars['errMsg']; ?>
';
if ( addErrMsg.trim().length > 0 ) {
  alert(addErrMsg);
}
</script>
</html>