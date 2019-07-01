<?php /* Smarty version 2.6.19, created on 2012-08-14 10:40:29
         compiled from ni/nidashboard/dashboard_employer_loginlogout.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<TITLE>Employer Report : Download Logs </TITLE>
<style>	
	.style1
	{
		font-weight:bold;
		background-color:#DDDDDD;
	}
</style>
</head>
<body >
<?php echo $this->_tpl_vars['TEMPLATE_HEADER']; ?>

<?php if ($this->_tpl_vars['SESSION_ARR']): ?><a href="dashboard_employer_loginMgmt.php?action=generate&compId=<?php echo $this->_tpl_vars['compId']; ?>
&name=<?php echo $this->_tpl_vars['companyName']; ?>
&clientId=<?php echo $this->_tpl_vars['clientId']; ?>
&del=1" STYLE="float:right;padding-right:36px">FORCE LOGOUT ALL</a>
<?php endif; ?>
<?php if ($this->_tpl_vars['MESSAGE']): ?><div STYLE="padding-left:120px;padding-right:100px;color:red;"><?php echo $this->_tpl_vars['MESSAGE']; ?>
</div><?php endif; ?>
<br>
<?php if ($this->_tpl_vars['SESSION_ARR']): ?>
<table width="95%" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#ccccff">
<tbody> 
<tr bgcolor="#c4c4c4"> 
 <td width="4%" align="center" ></td>   
 <td width="10%" align="center" >Concurrent Users.</td>
 <td width="25%"align="left" style="padding-left:100px" >Location (IP Address)</td> 
 <td width="25%"align="left" style="padding-left:100px" >Last Account activity (Abu Dhabi Time)</td>
 <td width="25%"align="left" style="padding-left:100px" ></td>
 </tr>

<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['SESSION_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<tr>
    <td width="4%" align="center" ></td>   
    <td width="10%" align="center" ><?php echo $this->_tpl_vars['SESSION_ARR'][$this->_sections['i']['index']]['users']; ?>
</td>
    <td width="25%"align="left" style="padding-left:100px" ><?php if ($this->_tpl_vars['SESSION_ARR'][$this->_sections['i']['index']]['clientIpCountryName']): ?> <?php echo $this->_tpl_vars['SESSION_ARR'][$this->_sections['i']['index']]['clientIpCountryName']; ?>
 (<?php echo $this->_tpl_vars['SESSION_ARR'][$this->_sections['i']['index']]['clientIp']; ?>
)<?php else: ?> <?php echo $this->_tpl_vars['SESSION_ARR'][$this->_sections['i']['index']]['clientIp']; ?>
 <?php endif; ?></td> 
    <td width="25%"align="left" style="padding-left:100px" ><?php echo $this->_tpl_vars['SESSION_ARR'][$this->_sections['i']['index']]['lastActiveTime']; ?>
 (<?php echo $this->_tpl_vars['SESSION_ARR'][$this->_sections['i']['index']]['activeTimeDiff']; ?>
 minutes ago)</td>
    <td width="10%" align="center" ><a href="dashboard_employer_loginMgmt.php?action=generate&compId=<?php echo $this->_tpl_vars['compId']; ?>
&name=<?php echo $this->_tpl_vars['companyName']; ?>
&clientId=<?php echo $this->_tpl_vars['clientId']; ?>
&sid=<?php echo $this->_tpl_vars['SESSION_ARR'][$this->_sections['i']['index']]['sessionId']; ?>
&del=">logout</a></td>
    
</tr>
<?php endfor; endif; ?>

</tbody></table>
<?php elseif ($this->_tpl_vars['MESSAGE'] == ''): ?>
<div STYLE="padding-left:120px;padding-right:100px;color:red;">NO RECORDS FOUND.</div>
 <?php endif; ?>
</BODY>
</HTML>