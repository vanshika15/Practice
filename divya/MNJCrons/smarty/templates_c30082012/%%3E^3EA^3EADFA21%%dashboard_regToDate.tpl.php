<?php /* Smarty version 2.6.19, created on 2012-08-22 10:22:03
         compiled from ni/nidashboard/dashboard_regToDate.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Client Information - Client Registered MIS</title>
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


<div STYLE="padding-left:120px;padding-right:100px;">
	<b>Date : <?php echo $this->_tpl_vars['ENTRYDATE']; ?>
</b>&nbsp;&nbsp;&nbsp;
	<a href="dashboard_clientregister.php?action=download&date=<?php echo $this->_tpl_vars['ENTRYDATE']; ?>
&section=<?php echo $this->_tpl_vars['SECTION']; ?>
"><b>DOWNLOAD XLS</b></a>
</div>
<table width="80%" border="1" align="center" bordercolor="#CCCCFF">
	<tr align="center" class="style1">
		<td width="12%">Company ID</td>
		<td>Company Name</td>
		<td>Username</td>
		<td width="12%" title="Job Post Count is over the period of last 3 months">Job Posted</td>
	</tr>
<?php unset($this->_sections['reg']);
$this->_sections['reg']['name'] = 'reg';
$this->_sections['reg']['loop'] = is_array($_loop=$this->_tpl_vars['CLIENTINFO_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['reg']['show'] = true;
$this->_sections['reg']['max'] = $this->_sections['reg']['loop'];
$this->_sections['reg']['step'] = 1;
$this->_sections['reg']['start'] = $this->_sections['reg']['step'] > 0 ? 0 : $this->_sections['reg']['loop']-1;
if ($this->_sections['reg']['show']) {
    $this->_sections['reg']['total'] = $this->_sections['reg']['loop'];
    if ($this->_sections['reg']['total'] == 0)
        $this->_sections['reg']['show'] = false;
} else
    $this->_sections['reg']['total'] = 0;
if ($this->_sections['reg']['show']):

            for ($this->_sections['reg']['index'] = $this->_sections['reg']['start'], $this->_sections['reg']['iteration'] = 1;
                 $this->_sections['reg']['iteration'] <= $this->_sections['reg']['total'];
                 $this->_sections['reg']['index'] += $this->_sections['reg']['step'], $this->_sections['reg']['iteration']++):
$this->_sections['reg']['rownum'] = $this->_sections['reg']['iteration'];
$this->_sections['reg']['index_prev'] = $this->_sections['reg']['index'] - $this->_sections['reg']['step'];
$this->_sections['reg']['index_next'] = $this->_sections['reg']['index'] + $this->_sections['reg']['step'];
$this->_sections['reg']['first']      = ($this->_sections['reg']['iteration'] == 1);
$this->_sections['reg']['last']       = ($this->_sections['reg']['iteration'] == $this->_sections['reg']['total']);
?>
	<tr align="left"> 
		<td>&nbsp;<?php echo $this->_tpl_vars['CLIENTINFO_ARR'][$this->_sections['reg']['index']]['companyId']; ?>
</td>
		<td>&nbsp;<?php echo $this->_tpl_vars['CLIENTINFO_ARR'][$this->_sections['reg']['index']]['compName']; ?>
</td>
		<td>&nbsp;<?php echo $this->_tpl_vars['CLIENTINFO_ARR'][$this->_sections['reg']['index']]['clientUsername']; ?>
</td>
		<td title="Click here to get the job posted break up">&nbsp;
			<?php if ($this->_tpl_vars['CLIENTINFO_ARR'][$this->_sections['reg']['index']]['cnt'] == ""): ?>
				0 
			<?php else: ?>
				<b><a href="dashboard_search.php?action=compdata&id=<?php echo $this->_tpl_vars['CLIENTINFO_ARR'][$this->_sections['reg']['index']]['companyId']; ?>
&name=<?php echo $this->_tpl_vars['CLIENTINFO_ARR'][$this->_sections['reg']['index']]['compName']; ?>
&section=<?php echo $this->_tpl_vars['SECTION']; ?>
"><?php echo $this->_tpl_vars['CLIENTINFO_ARR'][$this->_sections['reg']['index']]['cnt']; ?>
</a></b> 
			<?php endif; ?>
		</td>
	</tr>
<?php endfor; endif; ?>   
</table>
<br />

</body>
</html>