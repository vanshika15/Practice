<?php /* Smarty version 2.6.18, created on 2015-10-20 17:45:40
         compiled from /usr/local/apache/htdocs/smarty/templates/ud/updt_privacy.tpl */ ?>
<html>
<head><title>Update Privacy Settings</title>
<style>
.sectionhead {font:normal 11px verdana,Arial; COLOR: #04519f; TEXT-DECORATION: none}
.sectionheadbold {PADDING-LEFT: 5px; FONT-WEIGHT: bold; FONT-SIZE: 11px; COLOR: #04519f; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; TEXT-DECORATION: none}
.bluemessagetext {font:normal 10px/12px verdana,Arial; COLOR: #04519f; TEXT-DECORATION: none}
.bodytext {font:normal 11px/16px verdana,Arial; COLOR: #000; TEXT-DECORATION: none}
.bodytextbig {PADDING-LEFT: 7px; FONT-WEIGHT: bold; FONT-SIZE: 12px; COLOR: #000000; LINE-HEIGHT: 16px; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; TEXT-DECORATION: none}
.bluetextbig {font: bold 11px verdana, Arial; COLOR: #095cc2; TEXT-DECORATION: none}
</style>
</head>
<body bgcolor="f5f5f5" onload="document.form1.uname.focus()">

<font color="#45679a"><h1><center><b> Update Privacy Settings</b></h1></center> </font>
<form name="form1"  method="POST" action="../ud/updt_privacy.php">
<font color="#45679a">Username:  </font> &nbsp;&nbsp;&nbsp;&nbsp; <input type="Text" name="uname" value="<?php echo $this->_tpl_vars['sm_uname']; ?>
" maxlength=40><br><br>
<input type="Submit" name="submit" value="Get Privacy Details">
<br><br>

<?php if ($this->_tpl_vars['sm_error'] != ''): ?>
<font color="red">
<?php echo $this->_tpl_vars['sm_error']; ?>
 <br>
</font>
<?php endif; ?>

<?php if ($this->_tpl_vars['FLAG'] == 'true'): ?>
 <?php if ($this->_tpl_vars['sm_err'] == 'true'): ?>
 <p><font color="red">Sorry! No records found..</font><br>
 <?php else: ?>

<table width="760"  border="0" align="center" cellpadding="5" cellspacing="0">
<tr bgcolor="lightblue">
        <td height="18" class="sectionheadbold"><a NAME="mail"></a>Mail Settings</td>
</tr>
<tr>
        <td>
        <table width="100%"  border="0" cellspacing="0" cellpadding="4">
        <tr valign="top">
                <td height="9"></td>
        </tr>
        <tr valign="top">
                <td class="bodytext"><span class="sectionhead"> </span>
                <table width="100%"  border="0" cellpadding="0" cellspacing="0" class="bodytext">
                <tr>
                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = Smarty::is_array($_loop=$this->_tpl_vars['MAILERFLAG']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['start'] = (int)0;
$this->_sections['i']['max'] = (int)3;
$this->_sections['i']['show'] = true;
if ($this->_sections['i']['max'] < 0)
    $this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
                                <td width="33%">
                                <span class="sectionhead">
                                <input type="checkbox" name="<?php echo $this->_tpl_vars['MAILERFLAG'][$this->_sections['i']['index']]['Value']; ?>
" value="<?php echo $this->_tpl_vars['MAILERFLAG'][$this->_sections['i']['index']]['Value']; ?>
" <?php if ($this->_tpl_vars['MAILERFLAG'][$this->_sections['i']['index']]['Check']): ?> checked <?php endif; ?>></span>
                                <?php echo $this->_tpl_vars['MAILERFLAG'][$this->_sections['i']['index']]['Display']; ?>

                                </td>
                                <?php endfor; endif; ?>
                <td width="34%">
                        <span class="sectionhead">
                        </span>
                        </td>
            </tr>
                </table>
                </td>
       </tr>
       <tr valign="top">
                <td class="bluetextbig">Promotional Mailers<br>
                <table width="100%"  border="0" cellpadding="0" cellspacing="0" class="bodytext">
            <tr>
		 <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = Smarty::is_array($_loop=$this->_tpl_vars['MAILERFLAG']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['start'] = (int)3;
$this->_sections['i']['max'] = (int)3;
$this->_sections['i']['show'] = true;
if ($this->_sections['i']['max'] < 0)
    $this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
                <td width="33%">
                <span class="sectionhead">
                <input type="checkbox" name="<?php echo $this->_tpl_vars['MAILERFLAG'][$this->_sections['i']['index']]['Value']; ?>
" value="<?php echo $this->_tpl_vars['MAILERFLAG'][$this->_sections['i']['index']]['Value']; ?>
" <?php if ($this->_tpl_vars['MAILERFLAG'][$this->_sections['i']['index']]['Check']): ?> checked <?php endif; ?>></span>
                <?php echo $this->_tpl_vars['MAILERFLAG'][$this->_sections['i']['index']]['Display']; ?>

                 </td>
                 <?php endfor; endif; ?>

                </tr>
                </table><br><br>
<table width="760"  border="0" align="center" cellpadding="5" cellspacing="0">
  <tr bgcolor="lightblue" >
    <td height="18" colspan=4><span class="sectionheadbold">Recruiter&rsquo;s Database(Resdex) Settings</span></td>
</tr>
<tr valign="top">
        <td>
        <input name="resumestatus" type="radio" value="a" <?php if ($this->_tpl_vars['RESUMESTATUS'] == 'a'): ?> checked <?php endif; ?>>
        </td>
        <td><span class="bluetextbig">Active</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
        <input name="resumestatus" type="radio" value="c" <?php if ($this->_tpl_vars['RESUMESTATUS'] == 'c'): ?> checked <?php endif; ?>>
        <span class="bluetextbig">Not Searchable </span></td>

</tr>
<tr valign="top">
        <td width="3%" align="center">

        <input name="resumestatus" type="radio" value="b" <?php if ($this->_tpl_vars['RESUMESTATUS'] == 'b'): ?> checked <?php endif; ?>>
        </td>
        <td width="96%"><span class="bluetextbig">Inactive</span></td>
</tr>

</table>
<center><input type="Submit" name="save" value="SAVE"></center>
 <?php endif; ?><?php endif; ?>
<input type="hidden" name="resid" value="<?php echo $this->_tpl_vars['resid']; ?>
">
<!--input type="hidden" name="uname" value="<?php echo $this->_tpl_vars['sm_uname']; ?>
"-->
</form>
</body>
</html>

