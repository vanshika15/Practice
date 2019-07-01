<?php /* Smarty version 2.6.19, created on 2018-02-06 20:35:04
         compiled from /usr/local/apache/htdocs/mis/tpl/mis.tpl */ ?>
<html>
  <body>
  <h3 align='center'>MIS Report</h3>
  
  <table border='1' align="center">
  <tr >
    <td><b>Source</b></td>
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['HEADER_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <td><b><?php if ($this->_tpl_vars['HEADER_ARR'][$this->_sections['i']['index']] == '-1'): ?>Fresher<?php else: ?><?php echo $this->_tpl_vars['HEADER_ARR'][$this->_sections['i']['index']]; ?>
<?php endif; ?></b></td>
    <?php endfor; endif; ?>
    <!-- <td><b>Total</b></td> -->
  </tr>
  <?php $_from = $this->_tpl_vars['RESULT']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['K1'] => $this->_tpl_vars['ITEM']):
?>
  <tr align="center">
    <td><?php if ($this->_tpl_vars['K1'] == '-1'): ?>Fresher<?php else: ?><?php echo $this->_tpl_vars['K1']; ?>
<?php endif; ?></td>
    <?php $_from = $this->_tpl_vars['ITEM']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['K2'] => $this->_tpl_vars['CNT']):
?>
    <td ><?php echo $this->_tpl_vars['CNT']; ?>
</td>
    <?php endforeach; endif; unset($_from); ?>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  </table>
  </body>
</html>