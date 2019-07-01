<?php /* Smarty version 2.6.19, created on 2011-07-26 16:27:07
         compiled from be_myaccounts.htm */ ?>
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
            function page_load()
            {
                document.form1.submit();
            }
            function change_color(ide,pointer)
            {
                var docF = document.form1;
                var row_id = 'row_'+ide;

                var row = document.getElementById(row_id);
                if(pointer.checked)
                    row.style.background='#E0ECFF';
                else
                    row.style.background='#FFFFFF';
            }

            function select_all(pointer)
            {
                var docF = document.form1;

                var tb = document.getElementById('select_tb');
                var prof_rows = tb.getElementsByTagName('tr');

                for(var row_no=1; row_no<prof_rows.length; row_no++)
                {
                    if(prof_rows[row_no].id.match("row"))
                    {
                        if(pointer.checked)
                        {
                            prof_rows[row_no].style.background='#E0ECFF';
                            var cb_id = prof_rows[row_no].id.replace(/row/,"cb");
                            document.getElementById(cb_id).checked=true;
                        }
                        else
                        {
                            prof_rows[row_no].style.background='#FFFFFF';
                            var cb_id = prof_rows[row_no].id.replace(/row/,"cb");
                            document.getElementById(cb_id).checked=false;
                        }
                    }
                }

            }

        </script>
    </head>
    <body>
        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td colspan="2"> <?php echo $this->_tpl_vars['headerLink']; ?>
 </td>
            </tr>
            <tr>
                <td width="16%" height="98" align="left"><?php echo $this->_tpl_vars['headerImage']; ?>
</td>
                <td width="84%" align="left" class="hd"> Accounts with Me </td>
            </tr>
            <tr>
                <td height="21" colspan="2" bgcolor="#0264D3">
                	<table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0" class="et">
                        <tr>
                            <td align="center">&nbsp;</td>
                        </tr>
                    </table></td>
            	</tr>
        </table>
        <table width="100%" align="center" class="txt" id="select_tb">
            <tr align="left" valign="bottom">
                <form name="form1" method=post <?php if ($this->_tpl_vars['AFLAG'] == '1' || $this->_tpl_vars['RFLAG'] == '1'): ?>action="be_assignkeyaccounts.php"<?php else: ?> action="be_myaccounts.php" <?php endif; ?> >
                   	<td>Refine results:</td>
                    <td>Company Name Keyword:<br><input name=xcompany_name type=text class=txt value='<?php echo $this->_tpl_vars['XCOMPANY_NAME']; ?>
'> </td>
					<?php if ($this->_tpl_vars['NO_SALES_DD'] != '1'): ?>
                    <td>Executive:<br><select name=xexec_name class=txt><option value=''>All</option><?php echo $this->_tpl_vars['SALES_DD']; ?>
</select></td>
					<?php endif; ?>
                    <td><input type=submit value=Go name=go class="txt">
         	</tr>
            <tr>
            	<td colspan=100%><p  align="CENTER">
	        	        <a href="be_myaccounts.php?xexec_name=<?php echo $this->_tpl_vars['XEXEC_NAME']; ?>
&xcompany_name=<?php echo $this->_tpl_vars['XCOMPANY_NAME']; ?>
&checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
&start=<?php echo $this->_tpl_vars['START']; ?>
&download=<?php echo 1; ?>
"><span class="blue">Download Excel</span></a>
            	</td>
            </tr>
			<tr><td colspan=100%>&nbsp;</td></tr>
			<tr>
            	<?php if ($this->_tpl_vars['NO_ASSIGNTO_DD'] != '1'): ?>
               		<td colspan="1" class=txt align="center"><input type=checkbox class=txt name=selectall value=1 onClick="select_all(this);"><strong>Select All</strong></td>
               		<td class=txt align="center" colspan=2><strong>Assign selected to: </strong><select name=assign_to class=txt><?php echo $this->_tpl_vars['ASSIGNTO_DD']; ?>
</select>
               		<input type=submit name=assign value="Assign" class="txt">
                	</td>
               	<?php else: ?>
               		<td>
               		<input type=submit name=relieve_button value="Relieve Accounts" class="txt"></td>
                <?php endif; ?>

                <!--Code for navigation starts-->
                <?php if ($this->_tpl_vars['TOTAL'] == '0'): ?>
                	<td colspan="100%" class=txt align="right">No results found&nbsp;&nbsp;&nbsp;
                <?php else: ?>
                	<?php if ($this->_tpl_vars['START']+$this->_tpl_vars['NUM'] > $this->_tpl_vars['TOTAL']): ?>
		                <td colspan="100%" class=txt align="right">Showing <?php echo $this->_tpl_vars['START']+1; ?>
 to <?php echo $this->_tpl_vars['TOTAL']; ?>
 of <?php echo $this->_tpl_vars['TOTAL']; ?>
&nbsp;&nbsp;&nbsp;
        	        <?php else: ?>
            		    <td colspan="100%" class=txt align="right">Showing <?php echo $this->_tpl_vars['START']+1; ?>
 to <?php echo $this->_tpl_vars['START']+$this->_tpl_vars['NUM']; ?>
 of <?php echo $this->_tpl_vars['TOTAL']; ?>
&nbsp;&nbsp;&nbsp;
	                <?php endif; ?>
                	<?php if ($this->_tpl_vars['START'] == '0'): ?>First<?php else: ?>
		                <a href=" be_myaccounts.php?go=1&xexec_name=<?php echo $this->_tpl_vars['XEXEC_NAME']; ?>
&xcompany_name=<?php echo $this->_tpl_vars['XCOMPANY_NAME']; ?>
&checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
&start=0"><span class="blue">First</span></a>
        	        <?php endif; ?>
            	    &nbsp;|&nbsp;
                	<?php if ($this->_tpl_vars['START'] == '0'): ?>Previous<?php else: ?>
	        	        <a href="be_myaccounts.php?go=1&xexec_name=<?php echo $this->_tpl_vars['XEXEC_NAME']; ?>
&xcompany_name=<?php echo $this->_tpl_vars['XCOMPANY_NAME']; ?>
&checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
&start=<?php echo $this->_tpl_vars['START']-$this->_tpl_vars['NUM']; ?>
"><span class="blue">Previous</span></a>
    	            <?php endif; ?>
        	        &nbsp;|&nbsp;
                	<?php if ($this->_tpl_vars['START'] == $this->_tpl_vars['TOTAL']-$this->_tpl_vars['TOTAL']%$this->_tpl_vars['NUM'] || $this->_tpl_vars['START'] == $this->_tpl_vars['TOTAL']-$this->_tpl_vars['NUM']): ?>Next<?php else: ?>
		                <a href="be_myaccounts.php?go=1&xexec_name=<?php echo $this->_tpl_vars['XEXEC_NAME']; ?>
&xcompany_name=<?php echo $this->_tpl_vars['XCOMPANY_NAME']; ?>
&checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
&start=<?php echo $this->_tpl_vars['START']+$this->_tpl_vars['NUM']; ?>
"><span class="blue">Next</span></a>
        	        <?php endif; ?>
            	    &nbsp;|&nbsp;
                	<?php if ($this->_tpl_vars['START'] == $this->_tpl_vars['TOTAL']-$this->_tpl_vars['TOTAL']%$this->_tpl_vars['NUM'] || $this->_tpl_vars['START'] == $this->_tpl_vars['TOTAL']-$this->_tpl_vars['NUM']): ?>Last<?php else: ?>
                		<?php if ($this->_tpl_vars['TOTAL']%$this->_tpl_vars['NUM'] == 0): ?>
		                	<a href="be_myaccounts.php?go=1&xexec_name=<?php echo $this->_tpl_vars['XEXEC_NAME']; ?>
&xcompany_name=<?php echo $this->_tpl_vars['XCOMPANY_NAME']; ?>
&checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
&start=<?php echo $this->_tpl_vars['TOTAL']-$this->_tpl_vars['NUM']; ?>
"><span class="blue">Last</span></a>
		                <?php else: ?>
		                	<a href="be_myaccounts.php?go=1&xexec_name=<?php echo $this->_tpl_vars['XEXEC_NAME']; ?>
&xcompany_name=<?php echo $this->_tpl_vars['XCOMPANY_NAME']; ?>
&checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
&start=<?php echo $this->_tpl_vars['TOTAL']-$this->_tpl_vars['TOTAL']%$this->_tpl_vars['NUM']; ?>
"><span class="blue">Last</span></a>
		                <?php endif; ?>
        	        <?php endif; ?>
        	        </td>
                <?php endif; ?>
         	</tr>
			<!--Code for navigation ends-->

            <tr align="center" valign="top">
            	<td width="8%" height="20" align="center" bgcolor="#E0ECFF"><b>Select</b></td>
                <td width="25%" height="20" align="left" bgcolor="#E0ECFF"><b>Company Name</b></td>
                <td width="46%" height="20" align="left" bgcolor="#E0ECFF"><b>RPC</b></td>
                <td width="11%" height="20" align="left" bgcolor="#E0ECFF"><b>Assigned To</b></td>
                <td width="10%" height="20" align="left" bgcolor="#E0ECFF"><b>Assignment Date</b></td>
            </tr>


            <?php unset($this->_sections['index']);
$this->_sections['index']['name'] = 'index';
$this->_sections['index']['loop'] = is_array($_loop=$this->_tpl_vars['ACCOUNT']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            	<tr align="left" id="row_<?php echo $this->_tpl_vars['ACCOUNT'][$this->_sections['index']['index']]['ACCOUNTID']; ?>
">
                	<td height="40" align="center"><input class="txt" type="checkbox" name=account_cb[] id=cb_<?php echo $this->_tpl_vars['ACCOUNT'][$this->_sections['index']['index']]['ACCOUNTID']; ?>
 value=<?php echo $this->_tpl_vars['ACCOUNT'][$this->_sections['index']['index']]['ACCOUNTID']; ?>
 onClick="change_color(<?php echo $this->_tpl_vars['ACCOUNT'][$this->_sections['index']['index']]['ACCOUNTID']; ?>
,this);"></td>
					<td height="40" class="link">
                   		<a href="#" onclick="MM_openBrWindow('view_accountdetails.php?accountid=<?php echo $this->_tpl_vars['ACCOUNT'][$this->_sections['index']['index']]['ACCOUNTID']; ?>
&checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
','','width=800,height=600,scrollbars=yes,resizable=yes'); return false;" <?php if ($this->_tpl_vars['ACCOUNT'][$this->_sections['index']['index']]['KEY_NOP'] == 'K'): ?>style=color:#006400 title="Key Account" <?php elseif ($this->_tpl_vars['ACCOUNT'][$this->_sections['index']['index']]['KEY_NOP'] == 'P'): ?>style=color:#ff0000 title="No corresponding profile on site"<?php elseif ($this->_tpl_vars['ACCOUNT'][$this->_sections['index']['index']]['KEY_NOP'] == 'KP'): ?> style=color:#800080 title="Key Account with no corresponding profile on site" <?php endif; ?>><?php if ($this->_tpl_vars['ACCOUNT'][$this->_sections['index']['index']]['COMPANY_NAME'] == ''): ?><font color=black><b>N O&nbsp;&nbsp;&nbsp;C O M P A N Y&nbsp;&nbsp;&nbsp;N A M E</b></font><?php else: ?><?php echo $this->_tpl_vars['ACCOUNT'][$this->_sections['index']['index']]['COMPANY_NAME']; ?>
<?php endif; ?></a>
                   	</td>
                   	<td height="">
						<?php echo $this->_tpl_vars['ACCOUNT'][$this->_sections['index']['index']]['RPC'][0]['NAME']; ?>
<br/><?php echo $this->_tpl_vars['ACCOUNT'][$this->_sections['index']['index']]['RPC'][0]['DESIGNATION']; ?>
<br/><?php echo $this->_tpl_vars['ACCOUNT'][$this->_sections['index']['index']]['RPC'][0]['EMAIL']; ?>
<br/><?php echo $this->_tpl_vars['ACCOUNT'][$this->_sections['index']['index']]['RPC'][0]['MOBILE']; ?>

					</td>	
                    <td height="40"><?php echo $this->_tpl_vars['ACCOUNT'][$this->_sections['index']['index']]['EXEC_NAME']; ?>
 </td>
                    <td height="40"><?php echo $this->_tpl_vars['ACCOUNT'][$this->_sections['index']['index']]['ASSIGN_DATE']; ?>
</td>
				</tr>
                <tr><td colspan=100%><hr size=1></td></tr>

        	<?php endfor; endif; ?>
        	<tr>
                <!--Code for navigation starts-->
                <?php if ($this->_tpl_vars['TOTAL'] == '0'): ?>
                	<td colspan="100%" class=txt align="right">No results found&nbsp;&nbsp;&nbsp;
                <?php else: ?>
                	<?php if ($this->_tpl_vars['START']+$this->_tpl_vars['NUM'] > $this->_tpl_vars['TOTAL']): ?>
		                <td colspan="100%" class=txt align="right">Showing <?php echo $this->_tpl_vars['START']+1; ?>
 to <?php echo $this->_tpl_vars['TOTAL']; ?>
 of <?php echo $this->_tpl_vars['TOTAL']; ?>
&nbsp;&nbsp;&nbsp;
        	        <?php else: ?>
            		    <td colspan="100%" class=txt align="right">Showing <?php echo $this->_tpl_vars['START']+1; ?>
 to <?php echo $this->_tpl_vars['START']+$this->_tpl_vars['NUM']; ?>
 of <?php echo $this->_tpl_vars['TOTAL']; ?>
&nbsp;&nbsp;&nbsp;
	                <?php endif; ?>
                	<?php if ($this->_tpl_vars['START'] == '0'): ?>First<?php else: ?>
		                <a href=" be_myaccounts.php?go=1&xexec_name=<?php echo $this->_tpl_vars['XEXEC_NAME']; ?>
&xcompany_name=<?php echo $this->_tpl_vars['XCOMPANY_NAME']; ?>
&checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
&start=0"><span class="blue">First</span></a>
        	        <?php endif; ?>
            	    &nbsp;|&nbsp;
                	<?php if ($this->_tpl_vars['START'] == '0'): ?>Previous<?php else: ?>
	        	        <a href="be_myaccounts.php?go=1&xexec_name=<?php echo $this->_tpl_vars['XEXEC_NAME']; ?>
&xcompany_name=<?php echo $this->_tpl_vars['XCOMPANY_NAME']; ?>
&checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
&start=<?php echo $this->_tpl_vars['START']-$this->_tpl_vars['NUM']; ?>
"><span class="blue">Previous</span></a>
    	            <?php endif; ?>
        	        &nbsp;|&nbsp;
                	<?php if ($this->_tpl_vars['START'] == $this->_tpl_vars['TOTAL']-$this->_tpl_vars['TOTAL']%$this->_tpl_vars['NUM'] || $this->_tpl_vars['START'] == $this->_tpl_vars['TOTAL']-$this->_tpl_vars['NUM']): ?>Next<?php else: ?>
		                <a href="be_myaccounts.php?go=1&xexec_name=<?php echo $this->_tpl_vars['XEXEC_NAME']; ?>
&xcompany_name=<?php echo $this->_tpl_vars['XCOMPANY_NAME']; ?>
&checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
&start=<?php echo $this->_tpl_vars['START']+$this->_tpl_vars['NUM']; ?>
"><span class="blue">Next</span></a>
        	        <?php endif; ?>
            	    &nbsp;|&nbsp;
                	<?php if ($this->_tpl_vars['START'] == $this->_tpl_vars['TOTAL']-$this->_tpl_vars['TOTAL']%$this->_tpl_vars['NUM'] || $this->_tpl_vars['START'] == $this->_tpl_vars['TOTAL']-$this->_tpl_vars['NUM']): ?>Last<?php else: ?>
                		<?php if ($this->_tpl_vars['TOTAL']%$this->_tpl_vars['NUM'] == 0): ?>
		                	<a href="be_myaccounts.php?go=1&xexec_name=<?php echo $this->_tpl_vars['XEXEC_NAME']; ?>
&xcompany_name=<?php echo $this->_tpl_vars['XCOMPANY_NAME']; ?>
&checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
&start=<?php echo $this->_tpl_vars['TOTAL']-$this->_tpl_vars['NUM']; ?>
"><span class="blue">Last</span></a>
		                <?php else: ?>
		                	<a href="be_myaccounts.php?go=1&xexec_name=<?php echo $this->_tpl_vars['XEXEC_NAME']; ?>
&xcompany_name=<?php echo $this->_tpl_vars['XCOMPANY_NAME']; ?>
&checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
&start=<?php echo $this->_tpl_vars['TOTAL']-$this->_tpl_vars['TOTAL']%$this->_tpl_vars['NUM']; ?>
"><span class="blue">Last</span></a>
		                <?php endif; ?>
        	        <?php endif; ?>
        	        </td>
                <?php endif; ?>
         	</tr>
			<!--Code for navigation ends-->

            	<input type="hidden" name="checksum" value="<?php echo $this->_tpl_vars['CHECKSUM']; ?>
">
            	<input type="hidden" name="relieve" value="<?php echo $this->_tpl_vars['relieve']; ?>
">
            </form>
            <tr>
            	<td colspan="100%" height="21">&nbsp;</td>
            </tr>
     	</table>
        <br />
        <?php echo $this->_tpl_vars['footer']; ?>
	
        <p>&nbsp;</p>
	</body>
</html>