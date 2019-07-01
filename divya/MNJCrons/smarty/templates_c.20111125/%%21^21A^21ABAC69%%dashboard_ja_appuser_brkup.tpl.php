<?php /* Smarty version 2.6.19, created on 2008-12-04 12:19:45
         compiled from /usr/local/apache/htdocs/smarty/templates/dashboard/dashboard_ja_appuser_brkup.tpl */ ?>
<table border="1">
<tr>
   <th>FAREA LABEL</th><?php unset($this->_sections['reqdate']);
$this->_sections['reqdate']['name'] = 'reqdate';
$this->_sections['reqdate']['loop'] = is_array($_loop=$this->_tpl_vars['date']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['reqdate']['show'] = true;
$this->_sections['reqdate']['max'] = $this->_sections['reqdate']['loop'];
$this->_sections['reqdate']['step'] = 1;
$this->_sections['reqdate']['start'] = $this->_sections['reqdate']['step'] > 0 ? 0 : $this->_sections['reqdate']['loop']-1;
if ($this->_sections['reqdate']['show']) {
    $this->_sections['reqdate']['total'] = $this->_sections['reqdate']['loop'];
    if ($this->_sections['reqdate']['total'] == 0)
        $this->_sections['reqdate']['show'] = false;
} else
    $this->_sections['reqdate']['total'] = 0;
if ($this->_sections['reqdate']['show']):

            for ($this->_sections['reqdate']['index'] = $this->_sections['reqdate']['start'], $this->_sections['reqdate']['iteration'] = 1;
                 $this->_sections['reqdate']['iteration'] <= $this->_sections['reqdate']['total'];
                 $this->_sections['reqdate']['index'] += $this->_sections['reqdate']['step'], $this->_sections['reqdate']['iteration']++):
$this->_sections['reqdate']['rownum'] = $this->_sections['reqdate']['iteration'];
$this->_sections['reqdate']['index_prev'] = $this->_sections['reqdate']['index'] - $this->_sections['reqdate']['step'];
$this->_sections['reqdate']['index_next'] = $this->_sections['reqdate']['index'] + $this->_sections['reqdate']['step'];
$this->_sections['reqdate']['first']      = ($this->_sections['reqdate']['iteration'] == 1);
$this->_sections['reqdate']['last']       = ($this->_sections['reqdate']['iteration'] == $this->_sections['reqdate']['total']);
?>
                  <th colspan="2"><?php echo $this->_tpl_vars['date'][$this->_sections['reqdate']['index']]; ?>
</th>
                <?php endfor; endif; ?>
</tr>
<?php $_from = $this->_tpl_vars['fareaArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['datef']):
?>
  <?php $_from = $this->_tpl_vars['datef']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['count']):
?>
<tr>
<td><?php echo $this->_tpl_vars['label']; ?>
</td><td><?php echo $this->_tpl_vars['count']; ?>
</td>
</tr>
  <?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
</table>




<table border="1">
<tr>
   <th>IND LABEL</th><?php unset($this->_sections['reqdate']);
$this->_sections['reqdate']['name'] = 'reqdate';
$this->_sections['reqdate']['loop'] = is_array($_loop=$this->_tpl_vars['date']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['reqdate']['show'] = true;
$this->_sections['reqdate']['max'] = $this->_sections['reqdate']['loop'];
$this->_sections['reqdate']['step'] = 1;
$this->_sections['reqdate']['start'] = $this->_sections['reqdate']['step'] > 0 ? 0 : $this->_sections['reqdate']['loop']-1;
if ($this->_sections['reqdate']['show']) {
    $this->_sections['reqdate']['total'] = $this->_sections['reqdate']['loop'];
    if ($this->_sections['reqdate']['total'] == 0)
        $this->_sections['reqdate']['show'] = false;
} else
    $this->_sections['reqdate']['total'] = 0;
if ($this->_sections['reqdate']['show']):

            for ($this->_sections['reqdate']['index'] = $this->_sections['reqdate']['start'], $this->_sections['reqdate']['iteration'] = 1;
                 $this->_sections['reqdate']['iteration'] <= $this->_sections['reqdate']['total'];
                 $this->_sections['reqdate']['index'] += $this->_sections['reqdate']['step'], $this->_sections['reqdate']['iteration']++):
$this->_sections['reqdate']['rownum'] = $this->_sections['reqdate']['iteration'];
$this->_sections['reqdate']['index_prev'] = $this->_sections['reqdate']['index'] - $this->_sections['reqdate']['step'];
$this->_sections['reqdate']['index_next'] = $this->_sections['reqdate']['index'] + $this->_sections['reqdate']['step'];
$this->_sections['reqdate']['first']      = ($this->_sections['reqdate']['iteration'] == 1);
$this->_sections['reqdate']['last']       = ($this->_sections['reqdate']['iteration'] == $this->_sections['reqdate']['total']);
?>
                  <th colspan="2"><?php echo $this->_tpl_vars['date'][$this->_sections['reqdate']['index']]; ?>
</th>
                <?php endfor; endif; ?>
</tr>

<?php $_from = $this->_tpl_vars['indArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['date'] => $this->_tpl_vars['datei']):
?>
  <?php $_from = $this->_tpl_vars['datei']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['count']):
?>
<tr>
<td><?php echo $this->_tpl_vars['label']; ?>
</td><td><?php echo $this->_tpl_vars['count']; ?>
</td>
</tr>
  <?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>

</table>