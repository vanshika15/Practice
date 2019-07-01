<?php /* Smarty version 2.6.19, created on 2016-11-30 16:35:43
         compiled from /usr/local/apache/htdocs/smarty/templates/ud/ud_logDet_all.tpl */ ?>
<html>
<head>
<title>Retrieve Login Details</title>
<style>
.formhead {  font-family: Verdana; font-size: 12px; font-weight: bold; color: #333333; text-decoration: none; background-color: #EFEFD3}
.label { font-family: Verdana; font-size: 12px; font-weight: normal; color: #333333; text-decoration: none; background-color: #F3F3E0}
.fieldsnew {  font-family: Verdana; font-size: 13px; font-weight: normal; color: #000000; text-decoration: none; background-color: #F9F9F9}
</style>
</head>
<body>
<form method="post" name="loginDetForm" action="ud_logDet_all.php">
<center><font color="#999933"><h1>Retrieve Login Details</h1></font></center><hr>
<table width =100%>
<tr class="formhead">
<td> <font color="#0C4481" size=3><strong>Username</strong></td><td><input type="text" name="uname" value="<?php echo $this->_tpl_vars['uname']; ?>
" maxlength=40></td></tr>
<tr><td width="100">&nbsp;</td><td >
<tr class="formhead"> <td colspan=4 align=center><input type="submit" name="submit" value="Get Details"></td></tr>
</table>
<?php if ($this->_tpl_vars['err_uname'] != ''): ?>
<font color="red">
<?php echo $this->_tpl_vars['err_uname']; ?>

</font>
<?php else: ?>
<?php if ($this->_tpl_vars['result'] == 'true'): ?>
Username: <strong><?php echo $this->_tpl_vars['uname']; ?>
</strong>
<table border="1" align=center width=50%>
 <tr><th>Login DateTime</th><th>IP</th></tr>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arrUser_log']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<td><?php echo $this->_tpl_vars['arrUser_log'][$this->_sections['i']['index']]['LOGIN_DATETIME']; ?>
</td>
<td><?php echo $this->_tpl_vars['arrUser_log'][$this->_sections['i']['index']]['IP']; ?>
</td>
</tr>
<?php endfor; endif; ?>
</table>
<?php endif; ?>
<?php endif; ?>
</form>
</body>
</html>

