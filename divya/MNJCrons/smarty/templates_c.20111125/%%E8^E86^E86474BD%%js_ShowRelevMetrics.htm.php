<?php /* Smarty version 2.6.19, created on 2010-09-06 17:06:41
         compiled from /usr/local/apache/htdocs/smarty/templates//dashboard/js_ShowRelevMetrics.htm */ ?>
<html>
<head>
<title>Relevance Search Metrics MIS</title>
<h2 align="center" ><u>Relevance Search Metrics From <?php echo $this->_tpl_vars['DATE_FROM']; ?>
 To <?php echo $this->_tpl_vars['DATE_TO']; ?>
</u></h2>
<table align=center border=1 >
<tr align=center bgcolor="lightblue">
<th ></th>
<th >Total Searches</th>
<th >Total Apply</th>
<tr>
<th rowspan="2" align=center bgcolor="lightblue">Relevance Search</th>
<th ><?php echo $this->_tpl_vars['TOT_SEARCH']; ?>
</th>
<th ><?php echo $this->_tpl_vars['TOT_APPLY']; ?>
</th>
</tr>
</table>
<hr/>
<table align=center border=1 >
<tr align=center bgcolor="lightblue">
<th></th>
<th>Company Jobs</th>
<th>Consultant Jobs</th>
<th>Spammer Jobs</th>
</tr>
<tr>
<th align=center bgcolor="lightblue">Clicks</th>
<th><?php echo $this->_tpl_vars['CL_COMP']; ?>
</th>
<th><?php echo $this->_tpl_vars['CL_CONS']; ?>
</th>
<th><?php echo $this->_tpl_vars['CL_SPAM']; ?>
</th>
</tr>
<tr>
<th align=center bgcolor="lightblue">Apply</th>
<th><?php echo $this->_tpl_vars['AP_COMP']; ?>
</th>
<th><?php echo $this->_tpl_vars['AP_CONS']; ?>
</th>
<th><?php echo $this->_tpl_vars['AP_SPAM']; ?>
</th>
</tr>

</table>
<hr/>

<table align=center border=1 >
<tr align=center bgcolor="lightblue">
<th rowspan="52">Relevance Search</th>
<th>Jobs on Page 1</th>
<th>Clicks</th>
<th>Applies</th>
</tr>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=50) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<?php $this->assign('iterate', $this->_sections['i']['iteration']); ?>
<tr align="center"><th bgcolor="lightblue"><?php echo $this->_sections['i']['iteration']; ?>
</th><td><?php  echo $this->_tpl_vars["CL_IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["AP_IM".$this->_tpl_vars["iterate"]] ?></td>
</tr>
<?php endfor; endif; ?>

</table>
</body>
</html>