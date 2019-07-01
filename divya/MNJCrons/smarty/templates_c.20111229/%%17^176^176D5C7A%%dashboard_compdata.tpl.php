<?php /* Smarty version 2.6.19, created on 2011-12-08 11:32:41
         compiled from ni/nidashboard/dashboard_compdata.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<TITLE>Company Jobs & applies - Compnay MIS</TITLE>
<style>	
	.style1
	{
		font-weight:bold;
		background-color:#DDDDDD;
	}
</style>
</head>
<body>
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

<!--<div align="center">Counts shown are only for one month.</div><br>-->
<div  STYLE="padding-left:130px;padding-right:100px;">Company Name :&nbsp;<b><?php echo $this->_tpl_vars['COMPANYNAME']; ?>
</b></div>
<TABLE width="75%" border="1" align="center" bordercolor="#555555">
	<tr> 
		<td width="30%" align="center" class="style1"><b>Job Status</b></td>
		<td width="40%" align="center" class="style1"><b>Number of jobs Posted </b></td>
		<td width="30%" align="center" class="style1"><b>Applies Received </b></td>
	</tr>
 	<?php unset($this->_sections['job']);
$this->_sections['job']['name'] = 'job';
$this->_sections['job']['loop'] = is_array($_loop=$this->_tpl_vars['COMPDATA_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['job']['show'] = true;
$this->_sections['job']['max'] = $this->_sections['job']['loop'];
$this->_sections['job']['step'] = 1;
$this->_sections['job']['start'] = $this->_sections['job']['step'] > 0 ? 0 : $this->_sections['job']['loop']-1;
if ($this->_sections['job']['show']) {
    $this->_sections['job']['total'] = $this->_sections['job']['loop'];
    if ($this->_sections['job']['total'] == 0)
        $this->_sections['job']['show'] = false;
} else
    $this->_sections['job']['total'] = 0;
if ($this->_sections['job']['show']):

            for ($this->_sections['job']['index'] = $this->_sections['job']['start'], $this->_sections['job']['iteration'] = 1;
                 $this->_sections['job']['iteration'] <= $this->_sections['job']['total'];
                 $this->_sections['job']['index'] += $this->_sections['job']['step'], $this->_sections['job']['iteration']++):
$this->_sections['job']['rownum'] = $this->_sections['job']['iteration'];
$this->_sections['job']['index_prev'] = $this->_sections['job']['index'] - $this->_sections['job']['step'];
$this->_sections['job']['index_next'] = $this->_sections['job']['index'] + $this->_sections['job']['step'];
$this->_sections['job']['first']      = ($this->_sections['job']['iteration'] == 1);
$this->_sections['job']['last']       = ($this->_sections['job']['iteration'] == $this->_sections['job']['total']);
?>
		<tr> 
			<td width="30%" align="center"><?php echo $this->_tpl_vars['COMPDATA_ARR'][$this->_sections['job']['index']]['jobStatus']; ?>
</td>
			<td width="40%" align="center"><?php if ($this->_tpl_vars['COMPDATA_ARR'][$this->_sections['job']['index']]['jobCount']): ?><?php echo $this->_tpl_vars['COMPDATA_ARR'][$this->_sections['job']['index']]['jobCount']; ?>
 <?php else: ?> 0 <?php endif; ?></td>
			<td width="30%" align="center"><?php if ($this->_tpl_vars['COMPDATA_ARR'][$this->_sections['job']['index']]['appliesCount']): ?><?php echo $this->_tpl_vars['COMPDATA_ARR'][$this->_sections['job']['index']]['appliesCount']; ?>
 <?php else: ?> 0 <?php endif; ?></td>
		</tr>
  	<?php endfor; endif; ?>
</TABLE>
<br>

<TABLE width="75%" border="1" align="center" bordercolor="#555555">
	<tr> 
		<td width="30%" align="center" class="style1"><b>Impressions of the Logo</b></td>
		<td width="40%" align="center" class="style1"><b>Clicks on the Logo</b></td>
		<td width="30%" align="center" class="style1"><b>Applies Through Microsite</b></td>
	</tr>
	<TR align="center">
		<TD><?php if ($this->_tpl_vars['BMSDATA_ARR']['IMPRESSIONS']): ?> <?php echo $this->_tpl_vars['BMSDATA_ARR']['IMPRESSIONS']; ?>
 <?php else: ?>0<?php endif; ?></TD>
		<TD><?php if ($this->_tpl_vars['BMSDATA_ARR']['CLICKS']): ?> <?php echo $this->_tpl_vars['BMSDATA_ARR']['CLICKS']; ?>
 <?php else: ?>0<?php endif; ?></TD>
		<TD><?php echo $this->_tpl_vars['MICROSITE_ARR']['applyCountLogo']; ?>
</TD>
	</TR>
</TABLE>
<br>
<TABLE width="75%" border="1" align="center" bordercolor="#555555">
	<tr> 
		<td width="30%" align="center" class="style1"><b>Impressions of the Text Links</b></td>
		<td width="40%" align="center" class="style1"><b>Clicks on the Text Links</b></td>
		<td width="30%" align="center" class="style1"><b>Applies Through Microsite</b></td>
	</tr>
	<TR align="center">
		<TD><?php if ($this->_tpl_vars['BMSTEXTLINK_DATA_ARR']['IMPRESSIONS']): ?><?php echo $this->_tpl_vars['BMSTEXTLINK_DATA_ARR']['IMPRESSIONS']; ?>
<?php else: ?>0<?php endif; ?></TD>
		<TD><?php if ($this->_tpl_vars['BMSTEXTLINK_DATA_ARR']['CLICKS']): ?><?php echo $this->_tpl_vars['BMSTEXTLINK_DATA_ARR']['CLICKS']; ?>
<?php else: ?>0<?php endif; ?></TD>
		<TD><?php echo $this->_tpl_vars['MICROSITE_ARR']['applyCounTxtLink']; ?>
</TD>
	</TR>
</TABLE>
<br>
<div STYLE="padding-left:130px;padding-right:100px;">(NOTE : Data is for the last 3 months for Vanilla and 6 months for RM Job Postings)</div>
</BODY>
</HTML>