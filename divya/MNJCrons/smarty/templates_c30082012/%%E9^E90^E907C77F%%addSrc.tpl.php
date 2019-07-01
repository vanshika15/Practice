<?php /* Smarty version 2.6.19, created on 2012-08-13 16:12:28
         compiled from /usr/local/apache/htdocs/mis/tpl/addSrc.tpl */ ?>
<html>
<head>
</head>
<body>
	<br/><br/>
	<h3 align="center">Source Management</h3>
	<br/><br/>
	<form name="srcLst">
	<table border=0 align="center" width="27%">
	<tr>
		<td>Source Name</td>
		<td>Source Id</td>
	</tr>
	<tr>
		<td>
		<select id="srcList" onchange="listSourceID(this)">
		<option value="-1">Select</option>
		<optgroup label="Add New">
		<option value="__NEW__">Add New Source</option>
		</optgroup>
		<optgroup label="Existing">
		<?php $_from = $this->_tpl_vars['arrSourceName']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['srcName']):
?>
		<option value="<?php echo $this->_tpl_vars['srcName']; ?>
"><?php echo $this->_tpl_vars['srcName']; ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
		<optgroup>
		</select>
		</td>
		<td>
		<select id="srcIdList">
		<option value="-1">Select</option>
		</select>
		</td>
	</tr>
	</table>
	</form>
	<br/><br/>
	<form name="frmAddNew" method="post" action="" onsubmit="return checkAddNew()">
	<table id="addNew" border=0 align="center" width="27%" style="display:none;">
	<tr>
		<td><input type="text" name="newSrcName" maxLength="100"></td>
		<td><input type="text" name="newSrcId" /></td>
	</tr>
	<tr style="font-size:12px;"><td>&nbsp;specify name</td><td>&nbsp;Comma separated ids</td></tr>
	<tr>
		<td align="center"><input type="submit" value="Save" name="save"></td>
		<td><input type="button" value="Cancel" onclick="gbi('addNew').style.display='none';gbi('srcList').selectedIndex=0;;"></td>
	</tr>
	</table>
	</form>
</body>
<script>
var arrSrcIdList = new Array();
<?php $_from = $this->_tpl_vars['srcIdList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['srcName'] => $this->_tpl_vars['srcIds']):
?>
arrSrcIdList['<?php echo $this->_tpl_vars['srcName']; ?>
'] = new Array(<?php echo $this->_tpl_vars['srcIds']; ?>
);
<?php endforeach; endif; unset($_from); ?>
function listSourceID(objSel) {
		var srcIdList = gbi('srcIdList');
		srcIdList.length = 1;
	if ( objSel.value == -1){
	} else if ( objSel.value == '__NEW__') {
		var frmAddNew = document.frmAddNew;
		gbi('addNew').style.display = 'block';
		frmAddNew.newSrcName.focus();
	} else  {
		var arrNewId = arrSrcIdList[objSel.value];
		for(var i=0; i<arrNewId.length; i++) {
			var opt = document.createElement('OPTION');
			opt.text = opt.value = arrNewId[i];
			srcIdList.options.add(opt);
		}
	}
}
function checkAddNew() {
	var frmAddNew = document.frmAddNew;
	if ( frmAddNew.newSrcName.value.trim().length == 0 )
	{
		alert('Please specify the source name'); 
		frmAddNew.newSrcName.focus();
		return false;
	} else if ( frmAddNew.newSrcId.value.trim().length == 0 ) {
		alert('Please specify the source id(s)'); 
		frmAddNew.newSrcId.focus();
		return false;
	}
	return true;
}
function gbi(eleId) { return document.getElementById(eleId); }
String.prototype.trim = function(){ return this.replace(/^\s+|\s+$/, ''); };
</script>
</html>