<?php /* Smarty version 2.6.19, created on 2010-06-29 15:46:05
         compiled from /usr/local/apache/htdocs/smarty/templates/dashboard/dashboard_mobile_applyerror_data.tpl */ ?>
<?php if ($this->_tpl_vars['ApplyErrorArr']): ?> 
<table border=1 align="center">
	 <th>RowId</th><th>Mobile Phone</th><th>Username</th><th>Number Of profiles</th>
		<?php unset($this->_sections['ApplyErrorRow']);
$this->_sections['ApplyErrorRow']['name'] = 'ApplyErrorRow';
$this->_sections['ApplyErrorRow']['loop'] = is_array($_loop=$this->_tpl_vars['ApplyErrorArr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ApplyErrorRow']['show'] = true;
$this->_sections['ApplyErrorRow']['max'] = $this->_sections['ApplyErrorRow']['loop'];
$this->_sections['ApplyErrorRow']['step'] = 1;
$this->_sections['ApplyErrorRow']['start'] = $this->_sections['ApplyErrorRow']['step'] > 0 ? 0 : $this->_sections['ApplyErrorRow']['loop']-1;
if ($this->_sections['ApplyErrorRow']['show']) {
    $this->_sections['ApplyErrorRow']['total'] = $this->_sections['ApplyErrorRow']['loop'];
    if ($this->_sections['ApplyErrorRow']['total'] == 0)
        $this->_sections['ApplyErrorRow']['show'] = false;
} else
    $this->_sections['ApplyErrorRow']['total'] = 0;
if ($this->_sections['ApplyErrorRow']['show']):

            for ($this->_sections['ApplyErrorRow']['index'] = $this->_sections['ApplyErrorRow']['start'], $this->_sections['ApplyErrorRow']['iteration'] = 1;
                 $this->_sections['ApplyErrorRow']['iteration'] <= $this->_sections['ApplyErrorRow']['total'];
                 $this->_sections['ApplyErrorRow']['index'] += $this->_sections['ApplyErrorRow']['step'], $this->_sections['ApplyErrorRow']['iteration']++):
$this->_sections['ApplyErrorRow']['rownum'] = $this->_sections['ApplyErrorRow']['iteration'];
$this->_sections['ApplyErrorRow']['index_prev'] = $this->_sections['ApplyErrorRow']['index'] - $this->_sections['ApplyErrorRow']['step'];
$this->_sections['ApplyErrorRow']['index_next'] = $this->_sections['ApplyErrorRow']['index'] + $this->_sections['ApplyErrorRow']['step'];
$this->_sections['ApplyErrorRow']['first']      = ($this->_sections['ApplyErrorRow']['iteration'] == 1);
$this->_sections['ApplyErrorRow']['last']       = ($this->_sections['ApplyErrorRow']['iteration'] == $this->_sections['ApplyErrorRow']['total']);
?>
                  <tr>
			<td><?php echo $this->_tpl_vars['ApplyErrorArr'][$this->_sections['ApplyErrorRow']['index']]['Id']; ?>
</td>
       			<td><?php echo $this->_tpl_vars['ApplyErrorArr'][$this->_sections['ApplyErrorRow']['index']]['Mphone']; ?>
</td>
			<td><?php echo $this->_tpl_vars['ApplyErrorArr'][$this->_sections['ApplyErrorRow']['index']]['Username']; ?>
</td>
			<td><?php echo $this->_tpl_vars['ApplyErrorArr'][$this->_sections['ApplyErrorRow']['index']]['NumOfProfiles']; ?>
</td>
              	</tr>
              <?php endfor; endif; ?>
</table>
<?php endif; ?>