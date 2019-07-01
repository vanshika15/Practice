<?php /* Smarty version 2.6.19, created on 2011-07-26 16:25:03
         compiled from managebackend.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>CRM</title>
        <link href="<?php echo $this->_tpl_vars['IMG_BASE_URL']; ?>
/firstNaukriCrm/css/oadstyle.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td colspan="2"><?php echo $this->_tpl_vars['headerLink']; ?>
</td>
            </tr>
            <tr>
                <td width="16%" height="98" align="left"><?php echo $this->_tpl_vars['headerImage']; ?>
</td>
                <td width="84%" align="left" class="hd">Manage Backend</td>
            </tr>
            <tr>
                <td height="21" colspan="2" bgcolor="#0264D3">
                    <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0" class="et">
                        <tr>
                            <td align="center">&nbsp;</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <br />
        <table width="80%" align="center" class="txt">
			<?php unset($this->_sections['sec']);
$this->_sections['sec']['name'] = 'sec';
$this->_sections['sec']['loop'] = is_array($_loop=$this->_tpl_vars['linkarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sec']['show'] = true;
$this->_sections['sec']['max'] = $this->_sections['sec']['loop'];
$this->_sections['sec']['step'] = 1;
$this->_sections['sec']['start'] = $this->_sections['sec']['step'] > 0 ? 0 : $this->_sections['sec']['loop']-1;
if ($this->_sections['sec']['show']) {
    $this->_sections['sec']['total'] = $this->_sections['sec']['loop'];
    if ($this->_sections['sec']['total'] == 0)
        $this->_sections['sec']['show'] = false;
} else
    $this->_sections['sec']['total'] = 0;
if ($this->_sections['sec']['show']):

            for ($this->_sections['sec']['index'] = $this->_sections['sec']['start'], $this->_sections['sec']['iteration'] = 1;
                 $this->_sections['sec']['iteration'] <= $this->_sections['sec']['total'];
                 $this->_sections['sec']['index'] += $this->_sections['sec']['step'], $this->_sections['sec']['iteration']++):
$this->_sections['sec']['rownum'] = $this->_sections['sec']['iteration'];
$this->_sections['sec']['index_prev'] = $this->_sections['sec']['index'] - $this->_sections['sec']['step'];
$this->_sections['sec']['index_next'] = $this->_sections['sec']['index'] + $this->_sections['sec']['step'];
$this->_sections['sec']['first']      = ($this->_sections['sec']['iteration'] == 1);
$this->_sections['sec']['last']       = ($this->_sections['sec']['iteration'] == $this->_sections['sec']['total']);
?>
            <tr align="left">
                <td height="23"><strong>&rsaquo;</strong><?php echo $this->_sections['sec']['index_next']; ?>
. <?php echo $this->_tpl_vars['linkarr'][$this->_sections['sec']['index']]; ?>
 </td>
            </tr>
			<?php endfor; endif; ?>
        </table>
        <br />
        <?php echo $this->_tpl_vars['footer']; ?>

        <p>&nbsp;</p>
    </body>
</html>