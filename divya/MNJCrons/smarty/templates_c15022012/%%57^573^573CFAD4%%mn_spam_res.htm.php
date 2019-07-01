<?php /* Smarty version 2.6.19, created on 2012-02-08 17:06:23
         compiled from ./spammers/mn_spam_res.htm */ ?>
<html>
	<head>
		<title>Spammers Addition/Modification</title>
		<h2><center>Add/Modify/Delete Spammers</center></h2>
		<script language=javascript>
			function deleteConf(cid)
			{
				var conf=confirm("Are you sure you want to delete Company ID :"+cid);
				if(conf)
					window.open("mn_spam_search.php?delete="+cid,"_self");
			}
		</script>
	</head>
	<body>
		<table border=1 width=100%>
			<tr width=100% valign=top>			<!--Left Pane-->
				<td width=50%>
				<table width=100%>
					<tr>
						<td colspan=3><font color=red><center><u>List of Spammers</u></center></font></td>
					</tr>
				<?php if ($this->_tpl_vars['err_spam_details']): ?>
					<tr><td><font color=red><?php echo $this->_tpl_vars['err_spam_details']; ?>
</font></td></tr>
				<?php else: ?>
					<tr align=left>
                                                <th>Company Name</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                        </tr>
					<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['det']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<tr align=left>
						<td><?php echo $this->_tpl_vars['det'][$this->_sections['i']['index']]['cname']; ?>
</td>
						<td><a href="?edit=<?php echo $this->_tpl_vars['det'][$this->_sections['i']['index']]['cid']; ?>
">Edit</a></td>
						<td><a href="javascript:deleteConf('<?php echo $this->_tpl_vars['det'][$this->_sections['i']['index']]['cid']; ?>
');">Delete</a></td>
					</tr>
					<?php endfor; endif; ?>
					<?php if ($this->_tpl_vars['moreFoundLeft']): ?>
                                                <tr>
                                                        <td colspan=3><font color=red><?php echo $this->_tpl_vars['moreFoundLeft']; ?>
</font></td>
                                                </tr>
                                        <?php endif; ?>
				<?php endif; ?>	
				</table>
				</td>
				<td width=100%>
				<table width=100%>
					<tr>
						<td colspan=3><font color=red><center><u>List of Clients</u></center></font></td>
					</tr>
                                <?php if ($this->_tpl_vars['err_company']): ?>
                                        <tr><td><font color=red><?php echo $this->_tpl_vars['err_company']; ?>
</font></td></tr>
                                <?php else: ?>
					<tr align=left>
						<th>Company ID</th>
						<th>Company Name</th>
						<th>Add</th>
					</tr>
                                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['det_right']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                        <tr align=left>
                                                <td><?php echo $this->_tpl_vars['det_right'][$this->_sections['i']['index']]['cid']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['det_right'][$this->_sections['i']['index']]['cname']; ?>
</td>
                                                <td><?php if ($this->_tpl_vars['compidsArr'][0] == $this->_tpl_vars['det_right'][$this->_sections['i']['index']]['cid']): ?>Add<?php else: ?><a href="?add=<?php echo $this->_tpl_vars['det_right'][$this->_sections['i']['index']]['cid']; ?>
&cname=<?php echo $this->_tpl_vars['det_right'][$this->_sections['i']['index']]['cname']; ?>
">Add</a><?php endif; ?></td>
                                        </tr>
                                        <?php endfor; endif; ?>
					<?php if ($this->_tpl_vars['moreFoundRight']): ?>
						<tr>
							<td colspan=3><font color=red><?php echo $this->_tpl_vars['moreFoundRight']; ?>
</font></td>
						</tr>
					<?php endif; ?>
                                <?php endif; ?>
                                </table>
				</td>
			</tr>
		</table>
	</body>
</html>