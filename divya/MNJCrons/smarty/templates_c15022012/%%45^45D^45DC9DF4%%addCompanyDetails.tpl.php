<?php /* Smarty version 2.6.19, created on 2012-01-23 16:53:57
         compiled from seniorjobs/addCompanyDetails.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Naukri.com: 15 Lac Plus Admin</title>
<link href="includes/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h1>15 Lac Plus Admin</h1><br /><br />
<form name="addPromo" method="POST" action="#" onsubmit="return validateJobDetails();">
<table width="98%" align="center" cellspacing="1">
	<tr>
	  <th colspan="3">Add / Edit 15 Lac Plus Company Entry</th>
   	</tr>
    <tr>
      <td><strong><font color="red">*</font> Company Id</strong></td>
      <td>:</td>
    <td><input type="text" id="companyid" name="companyid" value="<?php echo $this->_tpl_vars['arrCompanyData']['COMID']; ?>
" <?php if ($this->_tpl_vars['arrCompanyData']['COMID']): ?>READONLY <?php endif; ?> /> 
    </td>
    </tr>
    <tr>
      <td><strong><font color="red">*</font> Company Name 1</strong></td>
      <td>:</td>
    <td><input type="text" id="companyname1" name="companyname1" value="<?php echo $this->_tpl_vars['arrCompanyData']['COMNAME1']; ?>
" maxlength="20" /> 
    max 20 characters</td>
    </tr>
    <tr>
      <td><strong>&nbsp;&nbsp;Company Name 2</strong></td>
      <td>:</td>
    <td><input type="text" id="companyname2" name="companyname2" value="<?php echo $this->_tpl_vars['arrCompanyData']['COMNAME2']; ?>
" maxlength="20" /> 
    max 20 characters</td>
    </tr>
    <tr>
      <td><strong>&nbsp;&nbsp;Company Name 3</strong></td>
      <td>:</td>
    <td><input type="text" id="companyname3" name="companyname3" value="<?php echo $this->_tpl_vars['arrCompanyData']['COMNAME3']; ?>
" maxlength="20" /> 
    max 20 characters</td>
    </tr>
    <tr>
      <td><strong><font color="red">*</font> Address Line 1</strong></td>
      <td>:</td>
    <td><input type="text" name="address1" id="address1" value="<?php echo $this->_tpl_vars['arrCompanyData']['COMADDR1']; ?>
" maxlength="35" />
      max 35 characters</td>
    </tr>
    <tr>
      <td><strong>&nbsp;&nbsp;Address Line 2</strong></td>
      <td>:</td>
    <td><input type="text" name="address2" id="address2" value="<?php echo $this->_tpl_vars['arrCompanyData']['COMADDR2']; ?>
" maxlength="35" />
      max 35 characters</td>
    </tr>
    <tr>
      <td><strong><font color="red">*</font> URL of Company Logo</strong></td>
      <td>:</td>
    <td><input type="text" name="logourl" id="logourl" value="<?php echo $this->_tpl_vars['arrCompanyData']['LOGOURL']; ?>
" /></td>
    </tr>
    <tr>
    <td width="200"><strong><font color="red">*</font> City</strong></td>
      <td width="10">:</td>
      <td><label>
        <select id="city" name="city">
          <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arrCity']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
            <option value="<?php echo $this->_tpl_vars['arrCity'][$this->_sections['i']['index']]['VALUE']; ?>
"  style="color:#000;background:<?php echo $this->_tpl_vars['arrCity'][$this->_sections['i']['index']]['BGCOLOR']; ?>
;" <?php echo $this->_tpl_vars['arrCity'][$this->_sections['i']['index']]['SELECTED']; ?>
 <?php echo $this->_tpl_vars['arrCity'][$this->_sections['i']['index']]['DISABLED']; ?>
><?php echo $this->_tpl_vars['arrCity'][$this->_sections['i']['index']]['LABEL']; ?>
</option>
          <?php endfor; endif; ?>
        </select>
        </label></td>
    </tr>
    <tr>
      <td><strong><font color="red">*</font> Industry</strong></td>
      <td>:</td>
    <td><select id="industry" multiple size=3 name="industry[]">
        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arrIndustry']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
        <option value="<?php echo $this->_tpl_vars['arrIndustry'][$this->_sections['i']['index']]['VALUE']; ?>
"  style="color:#000;background:<?php echo $this->_tpl_vars['arrIndustry'][$this->_sections['i']['index']]['BGCOLOR']; ?>
;" <?php echo $this->_tpl_vars['arrIndustry'][$this->_sections['i']['index']]['SELECTED']; ?>
 <?php echo $this->_tpl_vars['arrIndustry'][$this->_sections['i']['index']]['DISABLED']; ?>
><?php echo $this->_tpl_vars['arrIndustry'][$this->_sections['i']['index']]['LABEL']; ?>
</option>
        <?php endfor; endif; ?>
    </select></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit" class="w100" />
      <!--<input type="reset" name="reset" id="reset" value="Reset" class="w100" /></td>-->
      <input type="button" name="cancel" id="cancel" value="Cancel" class="w100" onclick="window.location='<?php echo $this->_tpl_vars['listPath']; ?>
'"/></td>
    </tr>
</table>
<input type="hidden" name="editjob" value="<?php if ($this->_tpl_vars['arrCompanyData']['COMID']): ?>1<?php endif; ?>" />
</form>
<br />
<br />
<script type="text/javascript">
	var errorCount = 0;
	var errorMessage = "";

	function rm_trim(inputText)
	{
		return inputText.replace(/^\s+|\s+$/, '');
	}

	function displayError(message)
	{
		alert(message);
	}

	function validateJobDetails()
	{
		errorCount = 0;
		errorMessage = "";
		errorMessage += validateCompanyId();
		errorMessage += validateCompanyName();
		errorMessage += validateAddress();
		errorMessage += validateLogoUrl();
		errorMessage += validateCity();
		errorMessage += validateIndustry();
		if(errorCount > 0)
		{
			displayError(errorCount + " Error(s) Found !!!" + errorMessage);
			return false;
		}
		return true;
	}

  function validateCompanyId()
  {
    var companyid = rm_trim(document.getElementById("companyid").value);
    if(companyid == "")
    {
      errorCount++;
      return "\nPlease enter the company id";
    }
    for (i = 0 ; i < companyid.length ; i++) 
    {
      if ((companyid.charAt(i) < '0') || (companyid.charAt(i) > '9')) 
      {
        errorCount++;
        return "\nPlease enter a valid company id";
      }
   }
   return ""; 
  }

	function validateCompanyName()
	{
		var companyname = rm_trim(document.getElementById("companyname1").value);
		
		if(companyname == "")
		{
			errorCount++;
			return "\nPlease enter the company name";
		}
		return "";
	}

	function validateAddress()
        {
                var address1 = rm_trim(document.getElementById("address1").value);
                if(address1 == "")
                {
                        errorCount++;
                        return "\nPlease enter the address";
                }
		return "";
        }

	function validateLogoUrl()
        {
            		//var toSearch = /\.naukri.com|\.infoedge.com/;
                var logourl = rm_trim(document.getElementById("logourl").value);
                if(logourl == "")
                {
                        errorCount++;
                        return "\nPlease enter the logo url";
                }
/**		else
		{
			var temp = logourl;
			temp = temp.replace(/^http\:\/\/|^https\:\/\//,'');
			temp = temp.replace(/\?/,'/');
			var arrTemp = temp.split('/');
			if(arrTemp[0].search(toSearch) == -1)
			{
				errorCount++;
	                        return "\nPlease enter a valid logo url";
			}
		}
*/
		return "";
        }

  function validateCity()
  {
    var city = rm_trim(document.getElementById("city").value);
    if(city == -1)
    {
				errorCount++;
        return "\nPlease enter the city";
    }
    return "";
  }

  function validateIndustry()
  {
    var industry = document.getElementById("industry");
    var industrycount = 0; 
    for( i=0; i<industry.length; i++) 
    {
      if(  industry.options[i].value != -1 && industry.options[i].selected == true ) 
      {
        industrycount++;
      }
    }
    if(industrycount == 0)
    {
      errorCount++;
      return "\nPlease enter the industry";
    }
    if ( industrycount > 3 ) 
    {
      errorCount++;
      return "\nYou cannot select more than 3 industry types";
    }
    return "";
  }
</script>
</body>
</html>