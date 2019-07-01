<?php /* Smarty version 2.6.19, created on 2010-03-31 09:44:24
         compiled from /usr/local/apache/htdocs/smarty/templates//dashboard/blocked_companies.htm */ ?>
<html>
<head><title>
Blocked Companies
</title></head>
<body>
<?php if ($this->_tpl_vars['msg']): ?>
	<h1><?php echo $this->_tpl_vars['msg']; ?>
</h1>
<?php endif; ?>
<h1>Please Enter The Company ID to block</h1>
<form action="block_companies.php" method="GET">
	<input type="hidden" name="block" value="1" />
	<input type="textbox" name="company_id" onclick="this.value ='';" value="Enter Company ID" />
	<input type="submit" value="Submit" />
</form>
<h1>List Of Blocked Companies</h1>
<table border="1">
<tr><td>company id</td><td>Date</td><td>Click To Unblock</td></tr>
         <?php unset($this->_sections['i']);
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['blocked_arr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['name'] = 'i';
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
		<tr><td><?php echo $this->_tpl_vars['blocked_arr'][$this->_sections['i']['index']]['COMPID']; ?>
</td><td><?php echo $this->_tpl_vars['blocked_arr'][$this->_sections['i']['index']]['DATE']; ?>
</td><td><a href="block_companies.php?block=0&company_id=<?php echo $this->_tpl_vars['blocked_arr'][$this->_sections['i']['index']]['COMPID']; ?>
">UNBLOCK</a></td></tr>
         <?php endfor; endif; ?>
</body>
</html>