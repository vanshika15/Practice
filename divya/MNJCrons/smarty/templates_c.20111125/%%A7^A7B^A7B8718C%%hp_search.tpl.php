<?php /* Smarty version 2.6.19, created on 2010-01-27 17:17:12
         compiled from hp_search.tpl */ ?>
<html>
<head>
<title>Search For Companies' Subscriptions</title>
<link href="<?php echo $this->_tpl_vars['defaultcss']; ?>
" rel="stylesheet" type="text/css" /> 
</head>
<body>
<h1>Search For Companies</h1>
<form method="GET" action="hp_search.php">
<table class="search"><tr><td>
<label>Company Name</label>
</td><td>
<input type="text" name="company_name" />
</td></tr>
<td>
<label>Company ID</label>
</td><td>
<input type="text" name="company_id" />
<td></tr><td>
<label>Transaction ID</label>
</td><td>
<input type="text" name="transaction_id" />
</td><td>
<tr><td>
<input type="submit" value="search" />
</td></tr></table>
<input type="hidden" name="searching" value="1" />
</form>
<?php if ($this->_tpl_vars['searchDetails'][0]['company_id']): ?>
<h1>Search Result</h1>


<table class="sms">
<tr style="color:#ffff00">
	<td style="width:6%">Sr. No.</td>
        <td style="width:8%">Company Id</td>
        <td style="width:30%">Company Name</td>
        <td style="width:8%">Transaction Id</td>
        <td style="width:8%">Product</td>
        <td style="width:8%">Actual Start Date</td>
        <td style="width:8%">Start Date</td>
        <td style="width:8%">Actual End Date</td>
        <td style="width:8%">End Date</td>
        <td style="width:8%">Remove Date</td>

</tr>

<?php unset($this->_sections['mysec']);
$this->_sections['mysec']['name'] = 'mysec';
$this->_sections['mysec']['loop'] = is_array($_loop=$this->_tpl_vars['searchDetails']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mysec']['show'] = true;
$this->_sections['mysec']['max'] = $this->_sections['mysec']['loop'];
$this->_sections['mysec']['step'] = 1;
$this->_sections['mysec']['start'] = $this->_sections['mysec']['step'] > 0 ? 0 : $this->_sections['mysec']['loop']-1;
if ($this->_sections['mysec']['show']) {
    $this->_sections['mysec']['total'] = $this->_sections['mysec']['loop'];
    if ($this->_sections['mysec']['total'] == 0)
        $this->_sections['mysec']['show'] = false;
} else
    $this->_sections['mysec']['total'] = 0;
if ($this->_sections['mysec']['show']):

            for ($this->_sections['mysec']['index'] = $this->_sections['mysec']['start'], $this->_sections['mysec']['iteration'] = 1;
                 $this->_sections['mysec']['iteration'] <= $this->_sections['mysec']['total'];
                 $this->_sections['mysec']['index'] += $this->_sections['mysec']['step'], $this->_sections['mysec']['iteration']++):
$this->_sections['mysec']['rownum'] = $this->_sections['mysec']['iteration'];
$this->_sections['mysec']['index_prev'] = $this->_sections['mysec']['index'] - $this->_sections['mysec']['step'];
$this->_sections['mysec']['index_next'] = $this->_sections['mysec']['index'] + $this->_sections['mysec']['step'];
$this->_sections['mysec']['first']      = ($this->_sections['mysec']['iteration'] == 1);
$this->_sections['mysec']['last']       = ($this->_sections['mysec']['iteration'] == $this->_sections['mysec']['total']);
?>
<?php echo '<tr><td>'; ?><?php echo $this->_sections['mysec']['iteration']; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['searchDetails'][$this->_sections['mysec']['index']]['company_id']; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['searchDetails'][$this->_sections['mysec']['index']]['company_name']; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['searchDetails'][$this->_sections['mysec']['index']]['transaction_id']; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['searchDetails'][$this->_sections['mysec']['index']]['product']; ?><?php echo '</td>'; ?><?php if ($this->_tpl_vars['searchDetails'][$this->_sections['mysec']['index']]['actual_start_date']): ?><?php echo '<td>'; ?><?php echo $this->_tpl_vars['searchDetails'][$this->_sections['mysec']['index']]['actual_start_date']; ?><?php echo '</td>'; ?><?php else: ?><?php echo '<td><a href="dateedit.php?formaction=hp_search.php&startdate=1&id='; ?><?php echo $this->_tpl_vars['searchDetails'][$this->_sections['mysec']['index']]['id']; ?><?php echo '">add start date</a></td>'; ?><?php endif; ?><?php echo '<td>'; ?><?php echo $this->_tpl_vars['searchDetails'][$this->_sections['mysec']['index']]['start_date']; ?><?php echo '</td>'; ?><?php if ($this->_tpl_vars['searchDetails'][$this->_sections['mysec']['index']]['actual_end_date']): ?><?php echo '<td>'; ?><?php echo $this->_tpl_vars['searchDetails'][$this->_sections['mysec']['index']]['actual_end_date']; ?><?php echo '</td>'; ?><?php else: ?><?php echo '<td>require start date</td>'; ?><?php endif; ?><?php echo '<td>'; ?><?php echo $this->_tpl_vars['searchDetails'][$this->_sections['mysec']['index']]['end_date']; ?><?php echo '</td>'; ?><?php if ($this->_tpl_vars['searchDetails'][$this->_sections['mysec']['index']]['remove_date']): ?><?php echo '<td>'; ?><?php echo $this->_tpl_vars['searchDetails'][$this->_sections['mysec']['index']]['remove_date']; ?><?php echo '</td>'; ?><?php else: ?><?php echo ''; ?><?php if ($this->_tpl_vars['searchDetails'][$this->_sections['mysec']['index']]['start_date']): ?><?php echo '<td><a href="hp_search.php?formaction=hp_search.php&removedate=1&id='; ?><?php echo $this->_tpl_vars['searchDetails'][$this->_sections['mysec']['index']]['id']; ?><?php echo '">remove</a></td>'; ?><?php else: ?><?php echo '<td>Require Start Date</td>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</tr>'; ?>

<?php endfor; endif; ?>
</table>
<table class="pntable">
<tr class="nextprev">
<td class="pn">
<?php if ($this->_tpl_vars['prev']): ?>
<a href="hp_search.php?company_id=<?php echo $this->_tpl_vars['company_id']; ?>
&company_name=<?php echo $this->_tpl_vars['company_name']; ?>
&transaction_id=<?php echo $this->_tpl_vars['transaction_id']; ?>
&page=<?php echo $this->_tpl_vars['prev']; ?>
">prev</a>
<?php endif; ?>
</td>
<td class="pn">
<?php if ($this->_tpl_vars['next']): ?>
<a href="hp_search.php?company_id=<?php echo $this->_tpl_vars['company_id']; ?>
&company_name=<?php echo $this->_tpl_vars['company_name']; ?>
&transaction_id=<?php echo $this->_tpl_vars['transaction_id']; ?>
&page=<?php echo $this->_tpl_vars['next']; ?>
">next</a>
<?php endif; ?>
</td>

</td>
</table>
<?php endif; ?>
<?php if ($this->_tpl_vars['searching']): ?>
<?php if (! $this->_tpl_vars['searchDetails'][0]['company_id']): ?>
        <h2>No Result Found</h2>
<?php endif; ?>
<?php endif; ?>
</body>