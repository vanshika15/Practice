<?php /* Smarty version 2.6.19, created on 2010-05-26 13:19:53
         compiled from /usr/local/apache/htdocs/NaukriTms/tpl/editpixel.tpl */ ?>
<html>
<head>
</head>
<body>
<div>
<form name="EditPixel" method="POST" action="" onsubmit="return validateForm()">
<table border='0' width="600px;" style="font-size:12px;font-family:Verdana,Tahoma,Arial">
<tr >
  <td width="150px;">&nbsp;</td><td width="450px;"><b>Edit pixel code</b></td>
</tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr>
  <td align='right'>TieUp Name*</td>
  <td><input type="text" name="TIEUP" value="<?php echo $this->_tpl_vars['TIEUP']; ?>
" <?php if ($this->_tpl_vars['PID']): ?>readonly="readonly" <?php endif; ?>/></td>
</tr>
<?php if ($this->_tpl_vars['PID']): ?>
<tr>
  <td valign='top' align='right'>Pixel code*</td>
  <td><textarea name="PCODE" rows='5' cols='50'><?php echo $this->_tpl_vars['PCODE']; ?>
</textarea></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td ><input type='submit' name='Save' value='Update Pixel Code' style="width:175px;"/></td>
</tr>
<?php else: ?>
<tr>
  <td>&nbsp;</td>
  <td ><input type='submit' name='FindPixel' value='Get Pixel Code' style="width:175px;"/></td>
</tr>
<?php endif; ?>
</table>
<input type="hidden" name="pid" value="<?php echo $this->_tpl_vars['PID']; ?>
" />
</form>
</div>
</body>
<script>
document.getElementById('errMsg').style.display = 'none';
function validateForm()
{
  var pForm = document.EditPixel;
  var sid = pForm.SID.value.trim();
  var tid = pForm.TID.value.trim();
  var pcode = pForm.PCODE.value.trim();

  var errMsg = '';

  errMsg += sid.length    == 0 ? "Please specify the source id.\n"  : (isValidSourceId(sid)     ? '' : "Please specify a valid source id.\n");
  errMsg += tid.length    == 0 ? "Please specify the tieup id.\n"   : (isValidTieUpId(tid)      ? '' : "Please specify a valid tieup id.\n");
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
function isValidTieUpId(tid)
{
  return tid.isNumeric();
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