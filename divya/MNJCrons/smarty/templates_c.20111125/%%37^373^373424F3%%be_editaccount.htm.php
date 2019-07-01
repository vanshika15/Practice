<?php /* Smarty version 2.6.19, created on 2011-07-27 14:34:22
         compiled from be_editaccount.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>CRM</title>
        <link href="<?php echo $this->_tpl_vars['IMG_BASE_URL']; ?>
/firstNaukriCrm/css/oadstyle.css" rel="stylesheet" type="text/css" />
        <script language="JavaScript" type="text/JavaScript">
            function validate()
            {
                var docF = document.form1;
				var fn_companyid = docF.fn_companyid.value;			
				var n_companyid = docF.n_companyid.value;			
				var company_name = docF.company_name.value;

                if(trim(fn_companyid) && isNaN(+trim(fn_companyid)))
                {
                    alert("First Naukri Company Id entered is not valid!");
                    docF.fn_companyid.focus();
                    return false;
                }
                if(trim(n_companyid) && isNaN(+trim(n_companyid)))
                {
                    alert("Naukri Company Id entered is not valid!");
                    docF.n_companyid.focus();
                    return false;
                }
                if(trim(company_name)== '')
                {
                    alert("No Company Name entered!");
                    docF.company_name.focus();
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body>
        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="16%" height="98" align="left"><?php echo $this->_tpl_vars['headerImage']; ?>
</td>
                <td width="84%" align="left" class="hd">
					Edit Account
                </td>
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

        <!--form starts-->
        <form name=form1 method=post action="be_editaccount.php" onsubmit="return validate();">
            <table width="80%" border=0 align="center" cellpadding=5 cellspacing=1 class="txt">
                <tr bgcolor="#E0ECFF"><th colspan=100%>COMPANY DETAILS</th></tr>

                <tr>
                	<td>
                		<table width="80%" border=0 align="center" cellpadding=5 cellspacing=1 class="txt">
                            <!--tr>
                                <td width="50%" valign="middle" class="label"><div align="left">
		                			<?php if ($this->_tpl_vars['CHECK_EXEC_NAME'] == 'Y'): ?> <font color="red">Executive Name </font>
			        		        <?php else: ?><font color="black">Executive Name </font>
		    			            <?php endif; ?></div>
                                </td>
                                <td  colspan="2" align="left" valign="middle" class="label">
                                    <select name="exec_name" id="exec_name"><option value="" selected="selected">Select</option>
					                <?php echo $this->_tpl_vars['EXEC_NAME_DD']; ?>

                                    </select>
                                </td>
                            </tr-->
                            <tr>
                                <td width="50%"><?php if ($this->_tpl_vars['CHECK_FN_COMPANYID'] == 'Y'): ?><font color=red>FN Company Id</font><?php else: ?>FN Company Id<?php endif; ?></td>
                                <td>
                                    <input name="fn_companyid" value="<?php echo $this->_tpl_vars['FN_COMPANYID']; ?>
" type="text" class="textboxes1" size="18" maxlength="40" id="fn_companyid" onBlur="ajax_fn_companyid_exists(this.value);">
                                </td>
                            </tr>    	
                            <tr>
                                <td width="50%"><?php if ($this->_tpl_vars['CHECK_N_COMPANYID'] == 'Y'): ?><font color=red>Naukri Company Id</font><?php else: ?>Naukri Company Id<?php endif; ?></td>
                                <td>
                                    <input name="n_companyid" value="<?php echo $this->_tpl_vars['N_COMPANYID']; ?>
" type="text" class="textboxes1" size="18" maxlength="40" id="n_companyid">
                                </td>
                            </tr>    	
                            <tr>
                                <td width="50%"><?php if ($this->_tpl_vars['CHECK_COMPANY_NAME'] == '1'): ?><font color=red>Company Name</font><?php else: ?>Company Name<?php endif; ?></td>
                                <td>
                                    <input type=text name=company_name class=txt size=30 value='<?php echo $this->_tpl_vars['COMPANY_NAME']; ?>
' id='company_name'>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%"><?php if ($this->_tpl_vars['CHECK_COMPANY_WEBSITE'] == '1'): ?><font color=red>Company Website</font><?php else: ?>Company Website<?php endif; ?></td>
                                <td>
                                    <textarea name=company_website rows=5 cols=30 class=txt><?php echo $this->_tpl_vars['COMPANY_WEBSITE']; ?>
</textarea>
                                </td>
                            </tr>
                           	<tr>
                           		<td width="50%">Account Status</td>
                                <td>
                                	<input type=radio name=status class=txt value="N" checked>None
                                   	<input type=radio name=status class=txt value="P" <?php if ($this->_tpl_vars['STATUS'] == 'P'): ?>checked<?php endif; ?>>Paid
                                   	<input type=radio name=status class=txt value="T" <?php if ($this->_tpl_vars['STATUS'] == 'T'): ?>checked<?php endif; ?>>Trial
                             	</td>
                       		</tr>
                            <tr>
                                <td width="50%"><?php if ($this->_tpl_vars['CHECK_DETAILED_STATUS'] == '1'): ?><font color=red>Detailed Status</font><?php else: ?>Detailed Status<?php endif; ?></td>
                                <td>
                                    <textarea name=detailed_status rows=5 cols=30 class=txt><?php echo $this->_tpl_vars['DETAILED_STATUS']; ?>
</textarea>
                                </td>
                            </tr>
							<tr align="right"><td colspan="100%"><input type=submit name=edit class="txt" value=Edit></td></tr>
						</table>
					</td>
				</tr>
         	</table>
			<input type=hidden name=checksum value=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
>
            <input type=hidden name=accountid value=<?php echo $this->_tpl_vars['ACCOUNTID']; ?>
>
     	</form>
        <!--form ends-->
		<?php echo $this->_tpl_vars['footer']; ?>

		<p>&nbsp;</p>
    	<script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['IMG_BASE_URL']; ?>
/firstNaukriCrm/js/common.js"></script>
	</body>
</html>