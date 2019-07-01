<?php /* Smarty version 2.6.19, created on 2012-01-27 14:55:38
         compiled from /usr/local/apache/htdocs/smarty/templates/dashboard/dashboard_browse_dfttab.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', '/usr/local/apache/htdocs/smarty/templates/dashboard/dashboard_browse_dfttab.tpl', 60, false),)), $this); ?>
<br>
<table border="1">

  <tr><th>Date</th><?php unset($this->_sections['reqdate']);
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
               <td colspan="2"><?php echo $this->_tpl_vars['date'][$this->_sections['reqdate']['index']]; ?>
</td>
                   <?php endfor; endif; ?>
              </tr>
  <tr><th>Location wise details</th>
           <?php unset($this->_sections['reqdate']);
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
           <th>Clicks</th><th>Applies</th>
           <?php endfor; endif; ?>
         </tr>
  <tr><th>HomePage Right</th>
       <?php unset($this->_sections['reqdate']);
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
	<?php $this->assign('curdate', $this->_tpl_vars['date'][$this->_sections['reqdate']['index']]); ?>
       <td> 
        <?php echo $this->_tpl_vars['homeright_clicks'][$this->_tpl_vars['curdate']]; ?>

       </td>
         
       <td>
        <?php echo $this->_tpl_vars['homeright_applies'][$this->_tpl_vars['curdate']]; ?>

       </td>
      <?php endfor; endif; ?>
  </tr>
  <tr><th>HomePage Top</th>
       <?php unset($this->_sections['reqdate']);
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
        <?php $this->assign('curdate', $this->_tpl_vars['date'][$this->_sections['reqdate']['index']]); ?>
       <td>
        <?php echo $this->_tpl_vars['hometop_clicks'][$this->_tpl_vars['curdate']]; ?>

       </td>
       <td>
        <?php echo $this->_tpl_vars['hometop_applies'][$this->_tpl_vars['curdate']]; ?>

       </td>
      <?php endfor; endif; ?>
  </tr>
  <tr><th>Search Form</th>
      <?php unset($this->_sections['reqdate']);
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
        <?php $this->assign('curdate', $this->_tpl_vars['date'][$this->_sections['reqdate']['index']]); ?>
       <td>
        <?php echo $this->_tpl_vars['srchfrm_clicks'][$this->_tpl_vars['curdate']]; ?>

       </td>
       <td>
        <?php echo $this->_tpl_vars['srchfrm_applies'][$this->_tpl_vars['curdate']]; ?>

       </td>
      <?php endfor; endif; ?>
</tr>
</table>
<br>
<br>
<table border="1" align="left">

  <tr><th>Search Details</th><?php unset($this->_sections['reqdate']);
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
               <td><?php echo $this->_tpl_vars['date'][$this->_sections['reqdate']['index']]; ?>
</td>
                   <?php endfor; endif; ?>
              </tr>
  <tr><th>Total Searches</th>
       <?php unset($this->_sections['reqdate']);
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
        <?php $this->assign('curdate', $this->_tpl_vars['date'][$this->_sections['reqdate']['index']]); ?>
       <td>
        <?php echo smarty_function_math(array('equation' => "x+y",'x' => $this->_tpl_vars['browse_nonzero'][$this->_tpl_vars['curdate']],'y' => $this->_tpl_vars['browse_zero'][$this->_tpl_vars['curdate']]), $this);?>

       </td>
      <?php endfor; endif; ?>
  </tr>
  <tr><th>Total Zero Results</th>
       <?php unset($this->_sections['reqdate']);
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
        <?php $this->assign('curdate', $this->_tpl_vars['date'][$this->_sections['reqdate']['index']]); ?>
       <td>
        <?php echo $this->_tpl_vars['browse_zero'][$this->_tpl_vars['curdate']]; ?>

      </td> 
      <?php endfor; endif; ?>
  </tr>
  <tr><th>Search within Search(Total Count)</th>
      <?php unset($this->_sections['reqdate']);
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
         <?php $this->assign('curdate', $this->_tpl_vars['date'][$this->_sections['reqdate']['index']]); ?>
       <td>
        <?php echo $this->_tpl_vars['sws_nonzero'][$this->_tpl_vars['curdate']]; ?>

       </td>
      <?php endfor; endif; ?>
</tr>
   <tr><th>Search within Search(Zero Result Count)</th>
      <?php unset($this->_sections['reqdate']);
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
         <?php $this->assign('curdate', $this->_tpl_vars['date'][$this->_sections['reqdate']['index']]); ?>
       <td>
        <?php echo $this->_tpl_vars['sws_zero'][$this->_tpl_vars['curdate']]; ?>

       </td>
      <?php endfor; endif; ?>
</tr>

</table>




