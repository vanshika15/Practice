<?php /* Smarty version 2.6.19, created on 2011-07-27 14:29:21
         compiled from view_accountdetails.htm */ ?>
<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>FirstNaukri.com</title>
        <link href="<?php echo $this->_tpl_vars['IMG_BASE_URL']; ?>
/firstNaukriCrm/css/oadstyle.css" rel="stylesheet" type="text/css" />
        <script language="JavaScript">
            function MM_openBrWindow(theURL,winName,features)
            {
                window.open(theURL,winName,features);
            }

            function confirm_delete()
            {
                var response = confirm("Are you sure, you wanna delete this contact?");
                return response;
            }

        </script>
    </head>

    <body <?php if ($this->_tpl_vars['SHOW_PROP'] > '0'): ?>onLoad="toggle_properties();"<?php endif; ?>>
        <br>

        <!-- Options layer ends here -->

        <table width="90%" border=0 align="center" cellpadding=5 cellspacing=0 class="txt" style="border:1px solid #0264D3 ">
            <?php if ($this->_tpl_vars['KEY'] == 'Y'): ?>
            <tr bgcolor="#E0ECFF"><th colspan=100%>K&nbsp;&nbsp;E&nbsp;&nbsp;Y&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;C&nbsp;&nbsp;C&nbsp;&nbsp;O&nbsp;&nbsp;U&nbsp;&nbsp;N&nbsp;&nbsp;T</th>
                <?php endif; ?>
            <tr bgcolor="#E0ECFF"><th colspan=100%>ACCOUNT DETAILS</th>
            </tr>
            <tr>
                <th width="20%"><div align="left">FN Company Id</div></th>
                <td><?php echo $this->_tpl_vars['ACCOUNT']['FN_COMPANYID']; ?>
</td>
            </tr>
            <tr>
                <th><div align="left">Naukri Company Id</div></th>
                <td><?php echo $this->_tpl_vars['ACCOUNT']['N_COMPANYID']; ?>
</td>
            </tr>
            <tr>
                <th><div align="left">Company Name</div></th>
                <td><?php echo $this->_tpl_vars['ACCOUNT']['COMPANY_NAME']; ?>
</td>
            </tr>
            <tr>
                    <th><div align="left">Company Website</div></th>
                    <td><?php echo $this->_tpl_vars['ACCOUNT']['COMPANY_WEBSITE']; ?>
</td>
            </tr>
            <tr>
                    <th><div align="left">Status</div></th>
                    <td>
                    <?php if ($this->_tpl_vars['ACCOUNT']['STATUS'] == 'N'): ?>Not on Site
                    <?php elseif ($this->_tpl_vars['ACCOUNT']['STATUS'] == 'P'): ?>Paid
                    <?php elseif ($this->_tpl_vars['ACCOUNT']['STATUS'] == 'T'): ?>Trial
                    <?php endif; ?>

                    </td>
            </tr>

            <tr align="right"><td colspan="100%" class="link"><a href="javascript:#" onclick="MM_openBrWindow('be_editaccount.php?checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
&accountid=<?php echo $this->_tpl_vars['ACCOUNTID']; ?>
','','width=800,height=600,scrollbars=yes,resizable=yes'); return false;">Edit</a></td></tr>
            <tr><td colspan=100% bgcolor="#E0ECFF"></td></tr>
     	</table>
        <br>

        <table width="90%" border=0 align="center" cellpadding=5 cellspacing=0 class="txt" style="border:1px solid #0264D3 ">
            <tr bgcolor="#E0ECFF"><th colspan=100%>DETAILED STATUS</th>
            <tr><td colspan=100%><?php echo $this->_tpl_vars['ACCOUNT']['DETAILED_STATUS']; ?>
</td></tr>

            <tr bgcolor="#E0ECFF"><th colspan=2>CONTACT PERSONS</th><th align="right"><a href="javascript:#" onClick="MM_openBrWindow('be_addcontact.php?accountid=<?php echo $this->_tpl_vars['ACCOUNTID']; ?>
&checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
&fromDetails=1','','width=700,height=500,scrollbars=yes,resizable=yes'); return false;"><font color=blue>Add New Contact</blue></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
            </th>

            <?php unset($this->_sections['index']);
$this->_sections['index']['name'] = 'index';
$this->_sections['index']['loop'] = is_array($_loop=$this->_tpl_vars['CONTACT']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <tr>
                    <th><div align="left">Name</div></th>
                    <td><?php echo $this->_tpl_vars['CONTACT'][$this->_sections['index']['index']]['NAME']; ?>
</td>
            </tr>
            <tr>
                    <th><div align="left">Designation</div></th>
                    <td><?php echo $this->_tpl_vars['CONTACT'][$this->_sections['index']['index']]['DESIGNATION']; ?>
</td>
            </tr>
            <tr>
                    <th><div align="left">City</div></th>
                    <td><?php echo $this->_tpl_vars['CONTACT'][$this->_sections['index']['index']]['CITY']; ?>
</td>
            </tr>
            <tr>
                    <th><div align="left">Email</div></th>
                    <td><?php echo $this->_tpl_vars['CONTACT'][$this->_sections['index']['index']]['EMAIL']; ?>
</td>
            </tr>
            <tr>
                    <th><div align="left">Mobile</div></th>
                    <td><?php echo $this->_tpl_vars['CONTACT'][$this->_sections['index']['index']]['MOBILE']; ?>
</td>
            </tr>
            <tr>
                    <th><div align="left">Phone</div></th>
                    <td><?php echo $this->_tpl_vars['CONTACT'][$this->_sections['index']['index']]['PHONE']; ?>
</td>
            </tr>
            <tr align="right"><td colspan="100%" class="link"><a href="be_editcontact.php?checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
&rpcid=<?php echo $this->_tpl_vars['CONTACT'][$this->_sections['index']['index']]['RPCID']; ?>
&accountid=<?php echo $this->_tpl_vars['ACCOUNTID']; ?>
&flag=D" onClick="return confirm_delete()">Delete</a>&nbsp;&nbsp;&nbsp;<a href="javascript:#" onclick="MM_openBrWindow('be_editcontact.php?checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
&rpcid=<?php echo $this->_tpl_vars['CONTACT'][$this->_sections['index']['index']]['RPCID']; ?>
&flag=E','','width=800,height=600,scrollbars=yes,resizable=yes'); return false;">Edit</a></td></tr>

            <tr><td colspan=100% bgcolor="#E0ECFF"></td></tr>
            <?php endfor; endif; ?>
		</table>

        <br>

	</body>
</html>