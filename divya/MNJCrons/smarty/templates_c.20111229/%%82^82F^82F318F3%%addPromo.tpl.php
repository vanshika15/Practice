<?php /* Smarty version 2.6.19, created on 2011-12-09 10:42:52
         compiled from promobar/addPromo.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Naukri.com: Promo Bar Admin</title>
<link href="includes/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h1>Promo Bar Admin</h1><br /><br />
<form name="addPromo" method="POST" action="#" onsubmit="return validatePromo();">
<table width="98%" align="center" cellspacing="1">
	<tr>
	  <th colspan="3">Add / Edit Promo Bar Entry</th>
   	</tr>
	<tr>
	  <td width="200"><strong>Experience  range</strong></td>
    	<td width="10">:</td>
    	<td><label>
    	  <select id="exp" name="exp">
          	<option value="1" <?php if ($this->_tpl_vars['arrPromoData']['EXPRANGE'] == '1'): ?>selected<?php endif; ?>>0-1 years</option>
          	<option value="2" <?php if ($this->_tpl_vars['arrPromoData']['EXPRANGE'] == '2'): ?>selected<?php endif; ?>>1-7 years</option>
          	<option value="3" <?php if ($this->_tpl_vars['arrPromoData']['EXPRANGE'] == '3'): ?>selected<?php endif; ?>>7+ years</option>
  	    </select>
   	    </label></td>
    </tr>
    <tr>
      <td><strong>Type of category</strong></td>
    	<td>:</td>
   	<td><select id="category" name="category">
      <option value="1" <?php if ($this->_tpl_vars['arrPromoData']['CATEGORY'] == '1'): ?>selected<?php endif; ?>>New on Naukri</option>
      <option value="2" <?php if ($this->_tpl_vars['arrPromoData']['CATEGORY'] == '2'): ?>selected<?php endif; ?>>Jobs on Naukri</option>
      <option value="3" <?php if ($this->_tpl_vars['arrPromoData']['CATEGORY'] == '3'): ?>selected<?php endif; ?>>Features &amp; Tips</option>
    </select></td>
    </tr>
    <tr>
      <td><strong>Name (of the promotion)</strong></td>
      <td>:</td>
    <td><input type="text" id="promoname" name="promoname" value="<?php echo $this->_tpl_vars['arrPromoData']['PROMONAME']; ?>
" maxlength="40" /> 
    max 40 characters</td>
    </tr>
    <tr>
      <td><strong>Supporting text </strong></td>
      <td>:</td>
    <td><input type="text" name="promotext" id="promotext" value="<?php echo $this->_tpl_vars['arrPromoData']['PROMOTEXT']; ?>
" maxlength="40" />
      max 40 characters</td>
    </tr>
    <tr>
      <td><strong>URL  of landing page</strong></td>
      <td>:</td>
    <td><input type="text" name="promourl" id="promourl" value="<?php echo $this->_tpl_vars['arrPromoData']['PROMOURL']; ?>
" /></td></tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit" class="w100" />
      <!--<input type="reset" name="reset" id="reset" value="Reset" class="w100" /></td>-->
      <input type="button" name="cancel" id="cancel" value="Cancel" class="w100" onclick="window.location='<?php echo $this->_tpl_vars['listPath']; ?>
'"/></td>
    </tr>
</table>
<input type="hidden" name="promoid" value="<?php echo $this->_tpl_vars['arrPromoData']['PROMOID']; ?>
" />
</form>
<br />
<br />
<script type="text/javascript">
	var errorCount = 0;
	var errorMessage = "";
	var maxPromoInCategory = "<?php echo $this->_tpl_vars['maxPromoInCategory']; ?>
";
	var editCategory = "<?php echo $this->_tpl_vars['arrPromoData']['CATEGORY']; ?>
";
	var editExpRange = "<?php echo $this->_tpl_vars['arrPromoData']['EXPRANGE']; ?>
";
	var arrLimit = new Array();
	<?php $_from = $this->_tpl_vars['arrMaxCategory']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
		arrLimit[<?php echo $this->_tpl_vars['k']; ?>
] = "<?php echo $this->_tpl_vars['v']; ?>
";
	<?php endforeach; endif; unset($_from); ?>

	function rm_trim(inputText)
	{
		return inputText.replace(/^\s+|\s+$/, '');
	}

	function displayError(message)
	{
		alert(message);
	}

	function validatePromo()
	{
		if(! validateCategory())
		{
			displayError("You have reached your limit of " + maxPromoInCategory + ", please delete before putting the same");
			return false;
		}
		errorCount = 0;
		errorMessage = "";
		errorMessage += validatePromoName();
		errorMessage += validatePromoText();
		errorMessage += validatePromoUrl();
		if(errorCount > 0)
		{
			displayError(errorCount + " Error(s) Found !!!" + errorMessage);
			return false;
		}
		return true;
	}

	function validateCategory()
	{
		return true;
		var categoryId = document.getElementById("category").value;
	 	var expRange = document.getElementById("exp").value;	
		if(categoryId != editCategory || expRange != editExpRange)
		{
			if(arrLimit[expRange] && arrLimit[expRange].search(categoryId) != -1)
			{
				return false;
			}	
		}
		return true;
	}

	function validatePromoName()
	{
		var promoname = rm_trim(document.getElementById("promoname").value);
		
		if(promoname == "")
		{
			errorCount++;
			return "\nPlease enter the promo name";
		}
		return "";
	}

	function validatePromoText()
        {
                var promotext = rm_trim(document.getElementById("promotext").value);
                if(promotext == "")
                {
                        errorCount++;
                        return "\nPlease enter the supporting text";
                }
		return "";
        }

	function validatePromoUrl()
        {
		var toSearch = /\.naukri.com|\.infoedge.com|\.firstnaukri.com|\.shiksha.com|surveymonkey.com/;
                var promourl = rm_trim(document.getElementById("promourl").value);
                if(promourl == "")
                {
                        errorCount++;
                        return "\nPlease enter the landing url";
                }
		else
		{
			var temp = promourl;
			temp = temp.replace(/^http\:\/\/|^https\:\/\//,'');
			temp = temp.replace(/\?/,'/');
			var arrTemp = temp.split('/');
			if(arrTemp[0].search(toSearch) == -1)
			{
				errorCount++;
	                        return "\nPlease enter a valid landing url";
			}
		}
		return "";
        }
</script>
</body>
</html>