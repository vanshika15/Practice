<?php /* Smarty version 2.6.18, created on 2016-11-16 16:46:35
         compiled from /usr/local/apache/htdocs/smarty/templates/ud/ud_retrieveinfo.tpl */ ?>
<html>
<head><title>Retrieve Info</title></head>
<body>

<?php if ($this->_tpl_vars['sm_error'] != ''): ?>
<font color="red">
<?php echo $this->_tpl_vars['sm_error']; ?>
 <br>
</font>
<?php endif; ?>

<h1><b> user information</b></h1>
<form name="form1" method="POST" action="../ud/ud_retrieveinfo.php">
Email:<input type="Text" name="email" value="<?php echo $this->_tpl_vars['sm_email']; ?>
" maxlength="100"><br>
<input type="hidden" name="submit" value="EnterEmail">
<input type="Submit" name="cmdSubmit" value="EnterEmail">
</form>

<?php if ($this->_tpl_vars['FLAG'] == 'true'): ?>

 <?php if ($this->_tpl_vars['sm_row'] == ''): ?>
 <p>Sorry!,no records found.<br>
 <?php else: ?>
 Email: <strong><?php echo $this->_tpl_vars['sm_email']; ?>
</strong>
 <table border="1">
 <tr><th>S.no:</th><th>Username</th><th>Password</th><th>SERVICE</th></tr>
 <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = Smarty::is_array($_loop=$this->_tpl_vars['sm_row']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 <td><?php echo $this->_sections['i']['index_next']; ?>
</td>
 <td><?php echo $this->_tpl_vars['sm_row'][$this->_sections['i']['index']]['USERNAME']; ?>
</td>
 <td><?php echo $this->_tpl_vars['sm_row'][$this->_sections['i']['index']]['PASSWORD']; ?>
</td>
 <td><?php echo $this->_tpl_vars['sm_row'][$this->_sections['i']['index']]['SERVICE']; ?>
</td>
 </tr>
 <?php endfor; endif; ?>
 </table>
 <?php endif; ?>

<?php endif; ?>
</body>
</html>
