<?php /* Smarty version 2.6.19, created on 2011-01-03 15:20:46
         compiled from /usr/local/apache/htdocs/smarty/templates/dashboard/dashboard_analysis.tpl */ ?>
<html>
<title>--- DASHBOARD ANALYSIS ---</title>
<script type="text/javascript">
</script>

<body>

<h3>     .....DASHBOARD ANALYSIS..... </h3>
<form name="form1" action="dashboard_analysis_new.php" method="">

<table>
<tr width="100%">
<td>
<label>                   Select Date        : </label>  
</td>
<td>
<select name="date" id="date">                     
			<option <?php if ($this->_tpl_vars['sel_date'] == '01'): ?>selected='true'<?php endif; ?>>01
                        <option <?php if ($this->_tpl_vars['sel_date'] == '02'): ?>selected='true'<?php endif; ?>>02
                        <option <?php if ($this->_tpl_vars['sel_date'] == '03'): ?>selected='true'<?php endif; ?>>03
                        <option <?php if ($this->_tpl_vars['sel_date'] == '04'): ?>selected='true'<?php endif; ?>>04
                        <option <?php if ($this->_tpl_vars['sel_date'] == '05'): ?>selected='true'<?php endif; ?>>05
                        <option <?php if ($this->_tpl_vars['sel_date'] == '06'): ?>selected='true'<?php endif; ?>>06
                        <option <?php if ($this->_tpl_vars['sel_date'] == '07'): ?>selected='true'<?php endif; ?>>07
                        <option <?php if ($this->_tpl_vars['sel_date'] == '08'): ?>selected='true'<?php endif; ?>>08
                        <option <?php if ($this->_tpl_vars['sel_date'] == '09'): ?>selected='true'<?php endif; ?>>09
                        <option <?php if ($this->_tpl_vars['sel_date'] == '10'): ?>selected='true'<?php endif; ?>>10
                        <option <?php if ($this->_tpl_vars['sel_date'] == '11'): ?>selected='true'<?php endif; ?>>11
                        <option <?php if ($this->_tpl_vars['sel_date'] == '12'): ?>selected='true'<?php endif; ?>>12
                        <option <?php if ($this->_tpl_vars['sel_date'] == '13'): ?>selected='true'<?php endif; ?>>13
                        <option <?php if ($this->_tpl_vars['sel_date'] == '14'): ?>selected='true'<?php endif; ?>>14
                        <option <?php if ($this->_tpl_vars['sel_date'] == '15'): ?>selected='true'<?php endif; ?>>15
                        <option <?php if ($this->_tpl_vars['sel_date'] == '16'): ?>selected='true'<?php endif; ?>>16
                        <option <?php if ($this->_tpl_vars['sel_date'] == '17'): ?>selected='true'<?php endif; ?>>17
                        <option <?php if ($this->_tpl_vars['sel_date'] == '18'): ?>selected='true'<?php endif; ?>>18
                        <option <?php if ($this->_tpl_vars['sel_date'] == '19'): ?>selected='true'<?php endif; ?>>19
                        <option <?php if ($this->_tpl_vars['sel_date'] == '20'): ?>selected='true'<?php endif; ?>>20
                        <option <?php if ($this->_tpl_vars['sel_date'] == '21'): ?>selected='true'<?php endif; ?>>21
                        <option <?php if ($this->_tpl_vars['sel_date'] == '22'): ?>selected='true'<?php endif; ?>>22
                        <option <?php if ($this->_tpl_vars['sel_date'] == '23'): ?>selected='true'<?php endif; ?>>23
                        <option <?php if ($this->_tpl_vars['sel_date'] == '24'): ?>selected='true'<?php endif; ?>>24
                        <option <?php if ($this->_tpl_vars['sel_date'] == '25'): ?>selected='true'<?php endif; ?>>25
                        <option <?php if ($this->_tpl_vars['sel_date'] == '26'): ?>selected='true'<?php endif; ?>>26
                        <option <?php if ($this->_tpl_vars['sel_date'] == '27'): ?>selected='true'<?php endif; ?>>27
                        <option <?php if ($this->_tpl_vars['sel_date'] == '28'): ?>selected='true'<?php endif; ?>>28
                        <option <?php if ($this->_tpl_vars['sel_date'] == '29'): ?>selected='true'<?php endif; ?>>29
                        <option <?php if ($this->_tpl_vars['sel_date'] == '30'): ?>selected='true'<?php endif; ?>>30
                        <option <?php if ($this->_tpl_vars['sel_date'] == '31'): ?>selected='true'<?php endif; ?>>31
			</select> 
</td>
<td>
<select name="month" id="month">
                        <option <?php if ($this->_tpl_vars['sel_month'] == '01'): ?>selected='true'<?php endif; ?>>Jan
                        <option <?php if ($this->_tpl_vars['sel_month'] == '02'): ?>selected='true'<?php endif; ?>>Feb
                        <option <?php if ($this->_tpl_vars['sel_month'] == '03'): ?>selected='true'<?php endif; ?>>Mar
                        <option <?php if ($this->_tpl_vars['sel_month'] == '04'): ?>selected='true'<?php endif; ?>>Apr
                        <option <?php if ($this->_tpl_vars['sel_month'] == '05'): ?>selected='true'<?php endif; ?>>May
                        <option <?php if ($this->_tpl_vars['sel_month'] == '06'): ?>selected='true'<?php endif; ?>>Jun
                        <option <?php if ($this->_tpl_vars['sel_month'] == '07'): ?>selected='true'<?php endif; ?>>Jul
                        <option <?php if ($this->_tpl_vars['sel_month'] == '08'): ?>selected='true'<?php endif; ?>>Aug
                        <option <?php if ($this->_tpl_vars['sel_month'] == '09'): ?>selected='true'<?php endif; ?>>Sep
                        <option <?php if ($this->_tpl_vars['sel_month'] == '10'): ?>selected='true'<?php endif; ?>>Oct
                        <option <?php if ($this->_tpl_vars['sel_month'] == '11'): ?>selected='true'<?php endif; ?>>Nov
                        <option <?php if ($this->_tpl_vars['sel_month'] == '12'): ?>selected='true'<?php endif; ?>>Dec
                        </select> 
</td>
<td>
<select name="year" id="year">
			<option <?php if ($this->_tpl_vars['sel_year'] == '2006'): ?>selected='true'<?php endif; ?>>2006
			<option <?php if ($this->_tpl_vars['sel_year'] == '2007'): ?>selected='true'<?php endif; ?>>2007
                        <option <?php if ($this->_tpl_vars['sel_year'] == '2008'): ?>selected='true'<?php endif; ?>>2008
                        <option <?php if ($this->_tpl_vars['sel_year'] == '2009'): ?>selected='true'<?php endif; ?>>2009
                        <option <?php if ($this->_tpl_vars['sel_year'] == '2010'): ?>selected='true'<?php endif; ?>>2010
			<option <?php if ($this->_tpl_vars['sel_year'] == '2011'): ?>selected='true'<?php endif; ?>>2011
                        
</td>
</tr>
</table>
<br>
	<input type="submit" value="Submit" name="submit">
	<?php if ($this->_tpl_vars['show_download'] != ''): ?>
	<input type="hidden" value="<?php echo $this->_tpl_vars['date_chosen']; ?>
" name="complete_date">
        <input type="hidden" value="<?php echo $this->_tpl_vars['flag']; ?>
" name="flag">
	<input type="submit" value="Download in Excel" name="download">
	<?php endif; ?>
<br><br>
<hr>
<br><br>
<div align="right"><a href="dailydashboard-format.html" target=_blank>HELP FILE</a></div>

<?php if ($this->_tpl_vars['str'] != ''): ?>
	<?php echo $this->_tpl_vars['str']; ?>

<?php endif; ?>


</form>

</body>
</html>
