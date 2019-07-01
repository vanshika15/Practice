<?php /* Smarty version 2.6.19, created on 2011-07-26 16:24:55
         compiled from mainpage.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Customer Relationship Management</title>
        <link href="<?php echo $this->_tpl_vars['IMG_BASE_URL']; ?>
/firstNaukriCrm/css/oadstyle.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            .expire{font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;font-weight: normal;color: red}
        </style>
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
		        <td width="84%" align="left" class="hd">Customer Relationship Management</td>
		    </tr>
		    <tr>
        		<td height="21" colspan="2" bgcolor="#0264D3">
		            <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0" class="et">
        		        <tr>
                		    <td align="left">We found the following privileges for you</td>
		                </tr>
        		    </table>
		        </td>
		    </tr>
		</table>

        <br />
        <table width="80%" align="center" class="txt" >
		<?php if ($this->_tpl_vars['CRM_PRIV'] == 'N'): ?>
            <tr align="center"><td ><font color="red">YOU ARE NOT AUTHORIZED TO VIEW THIS PAGE</font> </td></tr>
		<?php endif; ?>
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
            <tr align="left"><td height="23"><strong>&rsaquo;</strong> <?php echo $this->_sections['sec']['index_next']; ?>
. <?php echo $this->_tpl_vars['linkarr'][$this->_sections['sec']['index']]; ?>
</td></tr>
		<?php endfor; endif; ?>
        </table>
        <br />

		<?php if ($this->_tpl_vars['TODAYS_SCHEDULE'] == '1'): ?>
        <br />
	        <table width="70%" border=0 align="center" cellpadding=5 cellspacing=1 class="txt" style="border:1px solid #0264D3 ">
    	        <tr bgcolor="#E0ECFF" align="center"><th colspan="100%">T O D A Y' S&nbsp;&nbsp;&nbsp;&nbsp;S C H E D U L E</th></tr>
        	    <tr bgcolor="#E0ECFF" align="center" valign="top">
            	    <td width="7%" height="20" align="center" bgcolor="#E0ECFF"><b>SNo.</b></td>
                	<td width="17%" height="20" align="center" bgcolor="#E0ECFF"><b>Company Name</b></td>
	                <td width="22%" height="20" align="center" bgcolor="#E0ECFF"><b>Address</b></td>
    	            <td width="11%" height="20" align="center" bgcolor="#E0ECFF"><b>Scheduled Time</b></td>
        	        <td width="13%" height="20" align="center" bgcolor="#E0ECFF"><b>Call Type</b></td>
            	    <td width="16%" height="20" align="center" bgcolor="#E0ECFF"><b>Scheduled By</b></td>
                	<td width="16%" height="20" align="center" bgcolor="#E0ECFF"><b>Action</b></td>
	            </tr>
				<?php unset($this->_sections['index']);
$this->_sections['index']['name'] = 'index';
$this->_sections['index']['loop'] = is_array($_loop=$this->_tpl_vars['ACTION_RECORD']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			    	<tr  <?php if ($this->_tpl_vars['ACTION_RECORD'][$this->_sections['index']['index']]['EXPIRES'] == '0'): ?>class="txt"<?php else: ?> class="expire" <?php endif; ?><?php if (!(1 & $this->_sections['index']['index_next'])): ?>bgcolor="#E0ECFF"<?php endif; ?>  onmouseover="return escape('Name: <?php echo $this->_tpl_vars['ACTION_RECORD'][$this->_sections['index']['index']]['NAME']; ?>
<br>Contact no: <?php echo $this->_tpl_vars['ACTION_RECORD'][$this->_sections['index']['index']]['PHONE']; ?>
')">
            			<td align="center"><?php echo $this->_sections['index']['index_next']; ?>
.</td>
			            <td class="link">
           					<a href="#" onclick="MM_openBrWindow('view_accountdetails.php?accountid=<?php echo $this->_tpl_vars['ACTION_RECORD'][$this->_sections['index']['index']]['ACCOUNTID']; ?>
&checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
','','width=800,height=600,scrollbars=yes,resizable=yes'); return false;" <?php if ($this->_tpl_vars['ACTION_RECORD'][$this->_sections['index']['index']]['KEY_NOP'] == 'K'): ?>style=color:#006400 title="Key Account" <?php elseif ($this->_tpl_vars['ACTION_RECORD'][$this->_sections['index']['index']]['KEY_NOP'] == 'P'): ?>style=color:#ff0000 title="No corresponding profile on site"<?php elseif ($this->_tpl_vars['ACTION_RECORD'][$this->_sections['index']['index']]['KEY_NOP'] == 'KP'): ?> style=color:#800080 title="Key Account with no corresponding profile on site" <?php endif; ?>><?php echo $this->_tpl_vars['ACTION_RECORD'][$this->_sections['index']['index']]['COMPANY_NAME']; ?>
</a>
			            </td>
            			<td><?php echo $this->_tpl_vars['ACTION_RECORD'][$this->_sections['index']['index']]['ADDRESS1']; ?>
<br><?php if ($this->_tpl_vars['ACTION_RECORD'][$this->_sections['index']['index']]['ADDRESS2'] != ''): ?><?php echo $this->_tpl_vars['ACTION_RECORD'][$this->_sections['index']['index']]['ADDRESS2']; ?>
<br><?php endif; ?><?php echo $this->_tpl_vars['ACTION_RECORD'][$this->_sections['index']['index']]['CITY']; ?>
<br></td>
			            <td align="center"><?php echo $this->_tpl_vars['ACTION_RECORD'][$this->_sections['index']['index']]['FTIME']; ?>
</td>
			            <td align="center"><?php echo $this->_tpl_vars['ACTION_RECORD'][$this->_sections['index']['index']]['FTYPE']; ?>
</td>
			            <td align="center"><?php echo $this->_tpl_vars['ACTION_RECORD'][$this->_sections['index']['index']]['ASSIGNED_BY']; ?>
</td>
						<td align="center" class="txt"><a href="javascript:#" onclick="MM_openBrWindow('be_followup.php?followupid=<?php echo $this->_tpl_vars['ACTION_RECORD'][$this->_sections['index']['index']]['FOLLOWUPID']; ?>
&checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
','','width=800,height=600,scrollbars=yes,resizable=yes'); return false;"><font color=blue>Complete Call</font></a><br></td>

			    	</tr>
				<?php endfor; endif; ?>
				<?php if ($this->_tpl_vars['expires'] == '1'): ?>
			    	<tr bgcolor="#E0ECFF" align="center" valign="top"><td colspan="100%"><font color=red>*Scheduled Calls Not attended till now</font></td></tr>
				<?php endif; ?>
		    </table>

		    <br />
		<?php endif; ?>
	
		<?php echo $this->_tpl_vars['footer']; ?>

    	<p>&nbsp;</p>
	</body>
</html>