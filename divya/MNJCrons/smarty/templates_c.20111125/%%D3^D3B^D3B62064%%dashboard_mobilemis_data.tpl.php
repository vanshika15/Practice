<?php /* Smarty version 2.6.19, created on 2010-08-16 12:24:55
         compiled from /usr/local/apache/htdocs/smarty/templates/dashboard/dashboard_mobilemis_data.tpl */ ?>
<?php if ($this->_tpl_vars['reminder'] || $this->_tpl_vars['hourlyreminder'] || $this->_tpl_vars['JOBMAIL'] || $this->_tpl_vars['RECRUITER_VIEW'] || $this->_tpl_vars['welcome'] || $this->_tpl_vars['mobVerify'] || $this->_tpl_vars['updateCTC'] || $this->_tpl_vars['completeProfile']): ?> 
<table border=1 align="center">
	 <th>Date</th><th>Reminder SMS</th><th>Mobile promo on Reg</th><th>JobMail on SMS</th><th>Resume Views alerts</th><th>Mobile Promo On Verification</th><th>Welcome SMS</th><th>Update CTC</th><th>Complete Profile</th>
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
                  <tr>
			<td><?php echo $this->_tpl_vars['date'][$this->_sections['reqdate']['index']]; ?>
</td>
        		<?php $this->assign('curdate', $this->_tpl_vars['date'][$this->_sections['reqdate']['index']]); ?>
       			<td><?php if ($this->_tpl_vars['reminder'][$this->_tpl_vars['curdate']]): ?> <?php echo $this->_tpl_vars['reminder'][$this->_tpl_vars['curdate']]; ?>
 <?php else: ?> -- <?php endif; ?></td>
			<td><?php if ($this->_tpl_vars['hourlyreminder'][$this->_tpl_vars['curdate']]): ?> <?php echo $this->_tpl_vars['hourlyreminder'][$this->_tpl_vars['curdate']]; ?>
<?php else: ?> -- <?php endif; ?></td>
			<td><?php if ($this->_tpl_vars['JOBMAIL'][$this->_tpl_vars['curdate']]): ?> <?php echo $this->_tpl_vars['JOBMAIL'][$this->_tpl_vars['curdate']]; ?>
 <?php else: ?> -- <?php endif; ?></td>
			<td><?php if ($this->_tpl_vars['RECRUITER_VIEW'][$this->_tpl_vars['curdate']]): ?> <?php echo $this->_tpl_vars['RECRUITER_VIEW'][$this->_tpl_vars['curdate']]; ?>
 <?php else: ?> -- <?php endif; ?></td>
			<td><?php if ($this->_tpl_vars['mobVerify'][$this->_tpl_vars['curdate']]): ?> <?php echo $this->_tpl_vars['mobVerify'][$this->_tpl_vars['curdate']]; ?>
 <?php else: ?> -- <?php endif; ?></td>
			<td><?php if ($this->_tpl_vars['welcome'][$this->_tpl_vars['curdate']]): ?> <?php echo $this->_tpl_vars['welcome'][$this->_tpl_vars['curdate']]; ?>
<?php else: ?> -- <?php endif; ?></td>
			<td><?php if ($this->_tpl_vars['updateCTC'][$this->_tpl_vars['curdate']]): ?> <?php echo $this->_tpl_vars['updateCTC'][$this->_tpl_vars['curdate']]; ?>
<?php else: ?> -- <?php endif; ?></td>
			<td><?php if ($this->_tpl_vars['completeProfile'][$this->_tpl_vars['curdate']]): ?> <?php echo $this->_tpl_vars['completeProfile'][$this->_tpl_vars['curdate']]; ?>
<?php else: ?> -- <?php endif; ?></td>
			<?php $this->assign('totalReminder', $this->_tpl_vars['totalReminder']+$this->_tpl_vars['reminder'][$this->_tpl_vars['curdate']]); ?>
			<?php $this->assign('totalhourlyreminder', $this->_tpl_vars['totalhourlyreminder']+$this->_tpl_vars['hourlyreminder'][$this->_tpl_vars['curdate']]); ?>
			<?php $this->assign('totalJOBMAIL', $this->_tpl_vars['totalJOBMAIL']+$this->_tpl_vars['JOBMAIL'][$this->_tpl_vars['curdate']]); ?>
			<?php $this->assign('totalRECRUITER_VIEW', $this->_tpl_vars['totalRECRUITER_VIEW']+$this->_tpl_vars['RECRUITER_VIEW'][$this->_tpl_vars['curdate']]); ?>
			<?php $this->assign('totalmobVerify', $this->_tpl_vars['totalmobVerify']+$this->_tpl_vars['mobVerify'][$this->_tpl_vars['curdate']]); ?>
			<?php $this->assign('totalwelcome', $this->_tpl_vars['totalwelcome']+$this->_tpl_vars['welcome'][$this->_tpl_vars['curdate']]); ?>
			<?php $this->assign('totalupdateCTC', $this->_tpl_vars['totalupdateCTC']+$this->_tpl_vars['updateCTC'][$this->_tpl_vars['curdate']]); ?>
			<?php $this->assign('totalcompleteProfile', $this->_tpl_vars['totalcompleteProfile']+$this->_tpl_vars['completeProfile'][$this->_tpl_vars['curdate']]); ?>
              	</tr>
              <?php endfor; endif; ?>
		<tr>
			<th>Total</th>
			<td><?php echo $this->_tpl_vars['totalReminder']; ?>
</td>
			<td><?php echo $this->_tpl_vars['totalhourlyreminder']; ?>
</td>
			<td><?php echo $this->_tpl_vars['totalJOBMAIL']; ?>
</td>
			<td><?php echo $this->_tpl_vars['totalRECRUITER_VIEW']; ?>
</td>
			<td><?php echo $this->_tpl_vars['totalmobVerify']; ?>
</td>
			<td><?php echo $this->_tpl_vars['totalwelcome']; ?>
</td>
			<td><?php echo $this->_tpl_vars['totalupdateCTC']; ?>
</td>
			<td><?php echo $this->_tpl_vars['totalcompleteProfile']; ?>
</td>
		</tr>
</table>
<?php endif; ?>