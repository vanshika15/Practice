<?php /* Smarty version 2.6.19, created on 2011-08-02 17:15:18
         compiled from /usr/local/apache/htdocs/naukrijobsonfb/tpl/searchband.tpl */ ?>
<div class="">
<form name="naukrisearch" method="post" action="naukrijobs.php" onsubmit="return checkForm()">
<div class="cls  srchpanel topbg">
<div class="fleft pdrt10"> <label for="keywords">Keywords</label><br />
  <input type="text" value="<?php echo $this->_tpl_vars['keywords']; ?>
" name="keywords" id="keywords" class="inputtext" style="width: 160px" />
  <br/>
job title, keywords or company name
</div>
<div class="fleft pdrt10">
<label for="exp">Exp.</label> <br /> 
<select style="font-family: Tahoma; font-size: 11px;" name="expYear" id="exp">
<option value="-1" <?php if ($this->_tpl_vars['expYear'] == -1): ?>selected="selected"<?php endif; ?>>Select</option>
<?php $_from = $this->_tpl_vars['arrExpYear']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['year']):
?>
<option value="<?php echo $this->_tpl_vars['year']; ?>
" <?php if ($this->_tpl_vars['expYear'] == $this->_tpl_vars['year']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['year']; ?>
 year</option>
<?php endforeach; endif; unset($_from); ?>
</select></div>
<div class="fleft pdrt10">  <label for="location">Locations </label> <br />
<input type="text" value="<?php echo $this->_tpl_vars['location']; ?>
" name="location" id="location" class="inputtext" style="width: 120px" />   </div>
<div class="fleft pdrt10">  <label for="farea">Functional Area</label>  <br /> 
<select id="farea" name="farea" style="font-family: Tahoma; font-size: 11px; width: 200px ">      
<?php $_from = $this->_tpl_vars['arrFarea']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Farea']):
?>
<option value="<?php echo $this->_tpl_vars['Farea']['VALUE']; ?>
" <?php if ($this->_tpl_vars['farea'] == $this->_tpl_vars['Farea']['VALUE']): ?>selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['Farea']['LABEL']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>     
</div>
 <div class="fleft pdtp15">
<input type="submit" class="inputSub" id="Search" name="Search" value="Search"/>
</div>
</form>
<div class="spacer1" style=" height: 22px"> </div>
<div class="cl mlr5 <?php if ($this->_tpl_vars['totalJobs'] == 0): ?>dispNone<?php endif; ?>">
<div class="lf w300"><span class="jF">Jobs Found <?php echo $this->_tpl_vars['totalJobs']; ?>
</span> Displaying <?php echo $this->_tpl_vars['jobStartIdx']; ?>
 - <?php echo $this->_tpl_vars['jobEndIdx']; ?>
</div>
</div>
</div>
<script>
function checkForm()
{
	var keywords = document.getElementById('keywords').getValue();
	var city = document.getElementById('location').getValue();
	var farea = document.getElementById('farea').getValue();
	if ( keywords.length > 0 || farea > -1 )
	{
		return true;
	}
	else
	{
		new Dialog().showMessage('Dialog', 'Please specify the keywords or choose a Functional Area'); return false;
	}
}
</script>