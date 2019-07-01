<?php /* Smarty version 2.6.19, created on 2010-03-31 10:46:58
         compiled from /usr/local/apache/htdocs/smarty/templates//dashboard/blocked_companies.tpl */ ?>
<html>
<head><title>
Blocked Companies
</title>
<script language="javascript">
//Description: Validates an integer.
function rb_checkNum(iNumber)
{
        var i;
        for (i=0;i<iNumber.length;i++)
        {
                var c = iNumber.charAt(i);
                if (!rb_checkDigit(c))
                        return false;
        }

        return true;
}

//Description: Validates an integer between (0-9).
function rb_checkDigit(c)
{
        return ((c >= "0") && (c <= "9"))
}
function validate()
{
	if(document.getElementById('compid').value=='' || document.getElementById('compid').value=='Enter Company ID')
	{
		alert("Please Enter Company ID To Perform Action");
		return false;
	}
	else if(!rb_checkNum(document.getElementById('compid').value))
	{
		alert("Please Enter Valid Company ID");
		return false;
	}
	else
		return true;
}
</script>
</head>

<body bgcolor="f5f5f5">
<div align=center><font color=blue size=+2>Block Company Interface</font></div>

<strong>Please Enter Company id </strong><br />
<form action="block_companies.php" method="GET" onsubmit="return validate();">
	<input type="hidden" name="block" value="1" />
	<input type="textbox" name="company_id" id="compid" onclick="this.value ='';" value="Enter Company ID" />
	<input type="submit" value="Submit" />
<?php if ($this->_tpl_vars['msg']): ?>
        <font color='red'><?php echo $this->_tpl_vars['msg']; ?>
</font>
<?php endif; ?>
</form>
<table border="1" align="center">
<div align=center><font color=blue size=+1>List Of Blocked Companies</font></div>
<tr bgcolor="lightgray"><td>company id</td><td>Date</td><td>Click To Unblock</td></tr>
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