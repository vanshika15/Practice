<?php /* Smarty version 2.6.19, created on 2016-11-17 13:48:40
         compiled from /usr/local/apache/htdocs/delAcc/tpl/delByMob.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/usr/local/apache/htdocs/delAcc/tpl/delByMob.tpl', 31, false),)), $this); ?>
<html>
<head>
<title>Naukri Techsupport</title>
<style>
.w70{ width:70px; }
.error{color:#ff0000; font-size:10px}
.bdrRight{border-right:1px solid black}
.bdrBtm{border-bottom:1px solid black}
.fs13{font-size:13px; font-family:verdana,arial}
</style>
</head>
<body>
<div><img src="http://static.naukimg.com/mynauk/images/jobs-india.gif" /></div>
<div align="center" style="font-weight:bold;font-size:25px;">Tech-Support ( Naukri )
</div>
<div style="clear:both" >
<hr/>
<div style="float:right;font-weight:normal;font-size:13px"><a href="viewLog.php?src=MOBILE">Today's Log</a></div>
<form name="frmGetData" method="post" action="<?php echo $this->_tpl_vars['formActionUrl']; ?>
" onsubmit="return validateForm()">
<table border=0 cellpadding=5 width="440">
  <tr><td colspan="2" align="left"><b><span style="font-size:20px">Get naukri account details &nbsp;<span style="font-size:11px;">(<a href="delAcc.php">By Email</a>)</span></span><b></td></tr>
  <tr >
    <td style="width:100px;" class="fs13" >Enter mobile :</td><td valign="top"><input type="text" maxlength="10" size="10" name="Mobile" id="Mobile" value="<?php echo $this->_tpl_vars['Mobile']; ?>
" autocomplete="off"></td>
  </tr>
  <tr>
    <td style="width:100px;" class="fs13">&nbsp;</td><td><input type="submit" name="GetData" value="Get Accounts"</td>
  </tr>
</table>
<input type="hidden" name="formValidated" value="0">
</form>
<?php if (count($this->_tpl_vars['arrUserDetails']) > 0): ?>
<br /><hr />
<h3>Naukri accounts details</h3>
<form name="DeleteAccount" method="Post" action="markAcc.php" onsubmit="return validateActionForm()">
<table class="fs13" border=0 cellpadding="3">
  <tr ><td class="bdrRight bdrBtm w70"><b><a href="#" onclick="return doSelectAll(this);">Check</a></b></td><td class="bdrRight bdrBtm"><b>Username</b></td><td class="bdrRight bdrBtm"><b>Regn. date</b></td><td class="bdrRight bdrBtm"><b>Last modified</b></td><td class="bdrBtm"><b>Status</b></td></tr>
  <?php $_from = $this->_tpl_vars['arrUserDetails']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['userDetails']):
?>
  <tr>
    <td class="bdrRight"><input type="checkbox" id="Username[]" name="Username[]" value="<?php echo $this->_tpl_vars['userDetails']['USERNAME']; ?>
" <?php if ($this->_tpl_vars['userDetails']['STATUS'] != ''): ?> disabled="disabled" <?php elseif ($this->_tpl_vars['userDetails']['CHECKED']): ?>checked='checked'<?php endif; ?>></td>
    <td class="bdrRight"><?php echo $this->_tpl_vars['userDetails']['USERNAME']; ?>
</td>
    <td class="bdrRight"><?php echo $this->_tpl_vars['userDetails']['ACC_CRT_DATE']; ?>
</td>
    <td class="bdrRight"><?php echo $this->_tpl_vars['userDetails']['MOD_DT']; ?>
</td>
    <td><?php echo $this->_tpl_vars['userDetails']['STATUS']; ?>
&nbsp;</td>
  </tr>
  <input type="hidden" name="Mobile[<?php echo $this->_tpl_vars['userDetails']['USERNAME']; ?>
]" value="<?php echo $this->_tpl_vars['userDetails']['Mobile']; ?>
">
  <?php endforeach; endif; unset($_from); ?>
  <tr height="50" valign="middle">
    <td colspan="2" align="left">
      <input type="submit" name="DELETE" value="DELETE ACCOUNT">&nbsp;
    </td>
    <td colspan="2" align="left">
      <input type="submit" name="UNSEARCHABLE" value="MARK UNSEARCHABLE">&nbsp;
    </td>
  </tr>
</table>
<input type="hidden" name="Mobile[]" value="" />
</form>
<?php endif; ?>
</div>
</body>
<script>
var arrRestrictedMobileNumbers = ["1234567890", "9999999999", "8888888888", "0123456789", "0000000000"];

Array.prototype.find = function(searchStr) {
         var returnArray = false;
         for (i=0; i<this.length; i++) {
           if (typeof(searchStr) == 'function') {
             if (searchStr.test(this[i])) {
               if (!returnArray) { returnArray = [] }
               returnArray.push(i);
             }
           } else {
             if (this[i]===searchStr) {
               if (!returnArray) { returnArray = [] }
               returnArray.push(i);
             }
           }
         }
         return returnArray;
       }

function validateForm()
{
  var form = document.frmGetData;
  form.GetData.disabled =  true;
  var boolValidMobile = false ;
  var mobileNumber = form.Mobile.value ;

  if (!mobileNumber.isValidMobile() || arrRestrictedMobileNumbers.find(mobileNumber))
  {
    alert('Please specify a valid Mobile number');
    document.frmGetData.Mobile.focus();
    form.GetData.disabled = false;
  }
  else
  {
    form.formValidated.value = 1;

    boolValidMobile = true;
  }
  return boolValidMobile;
}

/**
function validateForm()
{
  var form = document.frmGetData;
  form.GetData.disabled =  true;
  var boolValidMobile = form.Mobile.value.isValidMobile();
  if ( boolValidMobile == false )
  {
    alert('Please specify a valid Mobile number');
    document.frmGetData.Mobile.focus();
    form.GetData.disabled = false;
  }
  else
  {
    form.formValidated.value = 1;
  }
  return boolValidMobile;
}
*/
function validateActionForm()
{
  var form1 = document.DeleteAccount;
  //var cb = form1['Username[]'];
  var cb = document.getElementsByName('Username[]');
  var cbStatus = false;
  var i=0, j = cb.length;
  for(i=0;i<j;++i)
  {
     cbStatus = cbStatus || cb[i].checked;
  }
  if ( !cbStatus)
  {
    alert('Please select at least one account to perform action.');
  }
  return cbStatus;
}
function gbi(elementId){ return document.getElementById(elementId); }
String.prototype.isValidMobile = function () {
  var pattern = /^[0-9]{10}$/
  return pattern.test(this);
}
window.onload = function() 
{
  if ('<?php echo $this->_tpl_vars['confirmationMessage']; ?>
' != '') {
    alert('<?php echo $this->_tpl_vars['confirmationMessage']; ?>
');
  }
  if ( parseInt('<?php echo count($this->_tpl_vars['arrUserDetails']); ?>
') == 0 && document.frmGetData.Mobile.value != '' ) {
    alert('No accounts found.');
  }
  document.frmGetData.Mobile.focus();
}
function doSelectAll(objHref) {
  var cbox = document.getElementsByName('Username[]');
  var idx = 0;
  if ( objHref.innerHTML.toLowerCase() == 'check') {
    for(idx =0; idx < cbox.length; idx++) {
      if ( !cbox[idx].disabled) {
        cbox[idx].checked = true;
      }
    }
    objHref.innerHTML = 'Uncheck';
  } else {
    for(idx =0; idx < cbox.length; idx++) {
      if ( !cbox[idx].disabled) {
        cbox[idx].checked = false;
      }
    }
    objHref.innerHTML = 'Check';
  }
  return false;
}
</script>
</html>