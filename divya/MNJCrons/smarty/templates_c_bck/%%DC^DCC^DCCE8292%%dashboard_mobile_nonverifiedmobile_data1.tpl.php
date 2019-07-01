<?php /* Smarty version 2.6.19, created on 2015-10-20 17:07:13
         compiled from /usr/local/apache/htdocs/smarty/templates/dashboard/dashboard_mobile_nonverifiedmobile_data1.tpl */ ?>
<?php if ($this->_tpl_vars['NonVerifiedMobileArr']): ?>
"NumberOfAttempt","Mobile Phone"
<?php unset($this->_sections['NonVerifiedMobileRow']);
$this->_sections['NonVerifiedMobileRow']['name'] = 'NonVerifiedMobileRow';
$this->_sections['NonVerifiedMobileRow']['loop'] = is_array($_loop=$this->_tpl_vars['NonVerifiedMobileArr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['NonVerifiedMobileRow']['show'] = true;
$this->_sections['NonVerifiedMobileRow']['max'] = $this->_sections['NonVerifiedMobileRow']['loop'];
$this->_sections['NonVerifiedMobileRow']['step'] = 1;
$this->_sections['NonVerifiedMobileRow']['start'] = $this->_sections['NonVerifiedMobileRow']['step'] > 0 ? 0 : $this->_sections['NonVerifiedMobileRow']['loop']-1;
if ($this->_sections['NonVerifiedMobileRow']['show']) {
    $this->_sections['NonVerifiedMobileRow']['total'] = $this->_sections['NonVerifiedMobileRow']['loop'];
    if ($this->_sections['NonVerifiedMobileRow']['total'] == 0)
        $this->_sections['NonVerifiedMobileRow']['show'] = false;
} else
    $this->_sections['NonVerifiedMobileRow']['total'] = 0;
if ($this->_sections['NonVerifiedMobileRow']['show']):

            for ($this->_sections['NonVerifiedMobileRow']['index'] = $this->_sections['NonVerifiedMobileRow']['start'], $this->_sections['NonVerifiedMobileRow']['iteration'] = 1;
                 $this->_sections['NonVerifiedMobileRow']['iteration'] <= $this->_sections['NonVerifiedMobileRow']['total'];
                 $this->_sections['NonVerifiedMobileRow']['index'] += $this->_sections['NonVerifiedMobileRow']['step'], $this->_sections['NonVerifiedMobileRow']['iteration']++):
$this->_sections['NonVerifiedMobileRow']['rownum'] = $this->_sections['NonVerifiedMobileRow']['iteration'];
$this->_sections['NonVerifiedMobileRow']['index_prev'] = $this->_sections['NonVerifiedMobileRow']['index'] - $this->_sections['NonVerifiedMobileRow']['step'];
$this->_sections['NonVerifiedMobileRow']['index_next'] = $this->_sections['NonVerifiedMobileRow']['index'] + $this->_sections['NonVerifiedMobileRow']['step'];
$this->_sections['NonVerifiedMobileRow']['first']      = ($this->_sections['NonVerifiedMobileRow']['iteration'] == 1);
$this->_sections['NonVerifiedMobileRow']['last']       = ($this->_sections['NonVerifiedMobileRow']['iteration'] == $this->_sections['NonVerifiedMobileRow']['total']);
?>
"<?php echo $this->_tpl_vars['NonVerifiedMobileArr'][$this->_sections['NonVerifiedMobileRow']['index']]['NumberOfAttempt']; ?>
","<?php echo $this->_tpl_vars['NonVerifiedMobileArr'][$this->_sections['NonVerifiedMobileRow']['index']]['MobileNumber']; ?>
"
<?php endfor; endif; ?>
<?php endif; ?>