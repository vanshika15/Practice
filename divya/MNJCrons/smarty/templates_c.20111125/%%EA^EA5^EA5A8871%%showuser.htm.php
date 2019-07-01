<?php /* Smarty version 2.6.19, created on 2011-07-26 17:28:05
         compiled from showuser.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>CRM</title>
        <link href="<?php echo $this->_tpl_vars['IMG_BASE_URL']; ?>
/firstNaukriCrm/css/oadstyle.css" rel="stylesheet" type="text/css" />
        <script language="JavaScript" type="text/JavaScript">
            function MM_openBrWindow(theURL,winName,features)
            {
                window.open(theURL,winName,features);
            }
        </script>
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
                <td width="84%" align="left" class="hd">
                    User List
                </td>
            </tr>
            <tr>
                <td height="21" colspan="2" bgcolor="#0264D3"><table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0" class="et">
                        <tr>
                            <td align="center"><a href="managebackend.php?checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
">Manage Backend Home</a></td>
                        </tr>
                    </table></td>
            </tr>
        </table>
        <br />
        <table width="100%" align="center" class="txt" cellpadding=3>
            <tr align="center">
                <td width="3%" height="20" align="center" bgcolor="#E0ECFF"><b>ID</b></td>
                <td width="12%" height="20" align="center" bgcolor="#E0ECFF"><b>USERNAME</b></td>
                <td width="18%" height="20" align="center" bgcolor="#E0ECFF"><b>EMAIL</b></td>
                <td width="35%" height="20" align="center" bgcolor="#E0ECFF"><b>PRIVILEGES</b></td>
                <td width="12%" height="20" align="center" bgcolor="#E0ECFF"><b>CENTER</b></td>
                <td width="10%" height="20" align="center" bgcolor="#E0ECFF"><b>ROLE</b></td>
                <td width="5%" height="20" align="center" bgcolor="#E0ECFF"><b>EDIT</b></td>
                <td width="5%" height="20" align="center" bgcolor="#E0ECFF"><b>ACTIVATE / DE-ACTIVATE</b></td>
            </tr>

            <?php unset($this->_sections['index']);
$this->_sections['index']['name'] = 'index';
$this->_sections['index']['loop'] = is_array($_loop=$this->_tpl_vars['CLIENT']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['index']['show'] = true;
$this->_sections['index']['max'] = $this->_sections['index']['loop'];
$this->_sections['index']['step'] = 1;
$this->_sections['index']['start'] = $this->_sections['index']['step'] > 0 ? 0 : $this->_sections['index']['loop']-1;
if ($this->_sections['index']['show']) {
    $this->_sections['index']['total'] = $this->_sections['index']['loop'];
    if ($this->_sections['index']['total'] == 0)
        $this->_sections['index']['show'] = false;
} else
    $this->_sections['index']['total'] = 0;
if ($this->_sections['index']['show']):

            for ($this->_sections['index']['index'] = $this->_sections['index']['start'], $this->_sections['index']['iteration'] = 1;
                 $this->_sections['index']['iteration'] <= $this->_sections['index']['total'];
                 $this->_sections['index']['index'] += $this->_sections['index']['step'], $this->_sections['index']['iteration']++):
$this->_sections['index']['rownum'] = $this->_sections['index']['iteration'];
$this->_sections['index']['index_prev'] = $this->_sections['index']['index'] - $this->_sections['index']['step'];
$this->_sections['index']['index_next'] = $this->_sections['index']['index'] + $this->_sections['index']['step'];
$this->_sections['index']['first']      = ($this->_sections['index']['iteration'] == 1);
$this->_sections['index']['last']       = ($this->_sections['index']['iteration'] == $this->_sections['index']['total']);
?>
            <tr align="left">

                <td height="21" align="center" bgcolor="#E0ECFF"><?php echo $this->_sections['index']['index_next']; ?>
.</td>
                <td height="21" align="center" bgcolor="#E0ECFF"><?php echo $this->_tpl_vars['CLIENT'][$this->_sections['index']['index']]['USERNAME']; ?>
</td>
                <td height="21" align="center" bgcolor="#E0ECFF"><?php echo $this->_tpl_vars['CLIENT'][$this->_sections['index']['index']]['EMAIL']; ?>
</td>
                <td  align="left" height="21" bgcolor="#E0ECFF">
                    <?php unset($this->_sections['sec']);
$this->_sections['sec']['name'] = 'sec';
$this->_sections['sec']['loop'] = is_array($_loop=$this->_tpl_vars['PRIV'][$this->_sections['index']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <?php echo $this->_tpl_vars['CLIENT'][$this->_sections['index']['index']][$this->_sections['sec']['index']]['PRIVILEGE']; ?>
<br>
                        <?php endfor; endif; ?>
                </td>
                <td height="21" align="center" bgcolor="#E0ECFF"><?php echo $this->_tpl_vars['CLIENT'][$this->_sections['index']['index']]['CENTER']; ?>
</td>
                <td height="21" align="center" bgcolor="#E0ECFF"><?php if ($this->_tpl_vars['CLIENT'][$this->_sections['index']['index']]['ROLE'] == 'T'): ?>Tele Sales<?php endif; ?>
							<?php if ($this->_tpl_vars['CLIENT'][$this->_sections['index']['index']]['ROLE'] == 'DA'): ?>Data Acquisition<?php endif; ?>
							<?php if ($this->_tpl_vars['CLIENT'][$this->_sections['index']['index']]['ROLE'] == 'DE'): ?>Data Entry<?php endif; ?>
							<?php if ($this->_tpl_vars['CLIENT'][$this->_sections['index']['index']]['ROLE'] == 'CS'): ?>Corporate Sales<?php endif; ?>
							<?php if ($this->_tpl_vars['CLIENT'][$this->_sections['index']['index']]['ROLE'] == 'O'): ?>Other<?php endif; ?></td>
                <td height="21" align="center" bgcolor="#E0ECFF"><a href="edit_userlogin.php?checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
&ID=<?php echo $this->_tpl_vars['CLIENT'][$this->_sections['index']['index']]['ID']; ?>
">Edit</a></td>
                <td height="21" align="center" bgcolor="#E0ECFF"><?php if ($this->_tpl_vars['CLIENT'][$this->_sections['index']['index']]['ACTIVE'] == 'Y'): ?><a href="edit_userlogin.php?checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
&ID=<?php echo $this->_tpl_vars['CLIENT'][$this->_sections['index']['index']]['ID']; ?>
&ACT=N">De-Activate</a><?php else: ?><a href="edit_userlogin.php?checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
&ID=<?php echo $this->_tpl_vars['CLIENT'][$this->_sections['index']['index']]['ID']; ?>
&ACT=Y">Activate</a><?php endif; ?></td>

            </tr>
            <?php endfor; endif; ?>

            <tr>
                <td colspan="100%" height="21">&nbsp;</td>
            </tr>
        </table>
        <br />
        <?php echo $this->_tpl_vars['footer']; ?>

        <p>&nbsp;</p>
    </body>
</html>