<?php /* Smarty version 2.6.19, created on 2011-12-22 10:22:34
         compiled from ni/nidashboard/dashboard_modifycaplts.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Company Search - Compnay MIS</title>
<style>	
	.style1
	{
		font-weight:bold;
		background-color:#DDDDDD;
	}
	.gobutton{color:#ffffff;background-color:#0E5BA8;font-weight:bold;CURSOR:hand;width:50px;margin-top:1px;margin-bottom:1px;}
</style>
</head>
<body>
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

<?php if ($this->_tpl_vars['Message']): ?><div STYLE="padding-left:120px;padding-right:100px;color:red;"><?php echo $this->_tpl_vars['Message']; ?>
</div><?php endif; ?>
<form name="formmain" action="dash_rdx_modifycaplts.php" method="post">

<input type="hidden" name="section" value="<?php echo $this->_tpl_vars['SECTION']; ?>
">

<div STYLE="padding-left:120px;padding-right:100px;"><b>Enter one of the three fields to perform search</b>.(You can do a wild card search with use of '*'. For example to search for all companies start with letter 'a', enter 'a*' against Company Name. Similarly, to search for company names ending in 'a', enter '*a')</div>

<TABLE align="center" border="1" bordercolor="#CCCCFF" width="60%" >
    <TR><TD ALIGN = "CENTER" class="style1">Enter Username</TD><TD width="50"><input type="textbox" name="uname" value = "<?php echo $this->_tpl_vars['uname']; ?>
"size=40></TD></TR>
    <TR><TD ALIGN = "CENTER" class="style1">Enter Master Email</TD><TD><input type="textbox" name="email" <?php if ($this->_tpl_vars['uname'] == ""): ?>value = "<?php echo $this->_tpl_vars['email']; ?>
" <?php endif; ?> size=40></TD></TR>
    <TR><TD ALIGN = "CENTER" class="style1">Enter Company Name</TD><TD><input type="textbox" name="compname" <?php if ($this->_tpl_vars['email'] == "" && $this->_tpl_vars['uname'] == ""): ?> value = "<?php echo $this->_tpl_vars['compname']; ?>
" <?php endif; ?> size=40></TD></TR>
    <TR><TD ALIGN = "CENTER" colspan="2"><input type="submit" name="btngo" value="GO" class="gobutton"></TD></TR>
  </table>
</form>

<br/>

<?php if ($this->_tpl_vars['countrow'] != 0): ?>
	<table width="95%" border="1" align="center" bordercolor="#EEEEEE">
		<tr> 
			<td width="25%"%" align="center" class="style1">Company Name</td>
			<td width="20%" align="center" class="style1">Master Email</td>
			<td width="20%" align="center" class="style1">User Name</td>
			<td width="20%" align="center" class="style1">Registration Date</td>
			<td width="10%" align="center" class="style1">User Type</td>
		</tr>
	<?php unset($this->_sections['name']);
$this->_sections['name']['name'] = 'name';
$this->_sections['name']['loop'] = is_array($_loop=$this->_tpl_vars['COMPINFO_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['name']['show'] = true;
$this->_sections['name']['max'] = $this->_sections['name']['loop'];
$this->_sections['name']['step'] = 1;
$this->_sections['name']['start'] = $this->_sections['name']['step'] > 0 ? 0 : $this->_sections['name']['loop']-1;
if ($this->_sections['name']['show']) {
    $this->_sections['name']['total'] = $this->_sections['name']['loop'];
    if ($this->_sections['name']['total'] == 0)
        $this->_sections['name']['show'] = false;
} else
    $this->_sections['name']['total'] = 0;
if ($this->_sections['name']['show']):

            for ($this->_sections['name']['index'] = $this->_sections['name']['start'], $this->_sections['name']['iteration'] = 1;
                 $this->_sections['name']['iteration'] <= $this->_sections['name']['total'];
                 $this->_sections['name']['index'] += $this->_sections['name']['step'], $this->_sections['name']['iteration']++):
$this->_sections['name']['rownum'] = $this->_sections['name']['iteration'];
$this->_sections['name']['index_prev'] = $this->_sections['name']['index'] - $this->_sections['name']['step'];
$this->_sections['name']['index_next'] = $this->_sections['name']['index'] + $this->_sections['name']['step'];
$this->_sections['name']['first']      = ($this->_sections['name']['iteration'] == 1);
$this->_sections['name']['last']       = ($this->_sections['name']['iteration'] == $this->_sections['name']['total']);
?>
		<tr> 
			<td width="25%" align="center"><?php echo $this->_tpl_vars['COMPINFO_ARR'][$this->_sections['name']['index']]['compName']; ?>
</td>
			<td width="20%" align="center"><?php echo $this->_tpl_vars['COMPINFO_ARR'][$this->_sections['name']['index']]['compMasterEmail']; ?>
</td>
			<td width="20%" align="center"><a target='_balnk' href="dashboard_editCap.php?uname=<?php echo $this->_tpl_vars['COMPINFO_ARR'][$this->_sections['name']['index']]['clientUsername']; ?>
&section=PASSWORD&view='true'" title="click here to see the password"><?php echo $this->_tpl_vars['COMPINFO_ARR'][$this->_sections['name']['index']]['clientUsername']; ?>
</a></td>
			<td width="20%" align="center"><?php echo $this->_tpl_vars['COMPINFO_ARR'][$this->_sections['name']['index']]['clientEntryDate']; ?>
</td>
			<td width="10%" align="center"><?php echo $this->_tpl_vars['COMPINFO_ARR'][$this->_sections['name']['index']]['clientPrivilege']; ?>
</td>
		</tr>
	<?php endfor; endif; ?>
	</table>
<?php endif; ?>
<br />

</body>
</html>