<?php /* Smarty version 2.6.19, created on 2011-09-13 12:22:40
         compiled from edit_userlogin.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script language="JavaScript" type="text/JavaScript">

            function validate()
            {
                docF = document.form1;
                if(docF.MOD_EMAIL.value == "")
                {
                    alert("Please enter an email id");
                    return false;
                }
                if(docF.MOD_EMPID.value == "")
                {
                    alert("Please enter an employee id");
                    return false;
                }
                else
                    return true;
            }

        </script>
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
                <td width="84%" align="left" class="hd">Edit user information</td>
            </tr>
            <tr>
                <td height="21" colspan="2" bgcolor="#0264D3"><table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0" class="et">
                        <tr>
                            <td align="center"><a href="showuser.php?checksum=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
">User List</a></td>
                        </tr>
                    </table></td>
            </tr>
        </table>
        <br />
        <form action="edit_userlogin.php" method=POST name="form1" onsubmit="return validate();">
            <table width="80%" align="center" class="txt" cellpadding=5>

                <tr align="left" bgcolor="#E0ECFF">
                    <td height="23" width="20%">USERNAME</td>
                    <td width="80%"><?php echo $this->_tpl_vars['USERNAME']; ?>
</td>
                </tr>
                <tr align="left" bgcolor="#E0ECFF">
                    <td height="23" width="20%">PASSWORD</td>
                    <td width="80%"><input class="txt" type=text name=MOD_PASSWD value="<?php echo $this->_tpl_vars['PASSWD']; ?>
"><font color=red>&nbsp;&nbsp;(Enter password only in case you wish to change your existing one)</font></td>
                </tr>
                <tr align="left" bgcolor="#E0ECFF">
                    <td height="23" width="20%">NAME</td>
                    <td width="80%"><input class="txt" type=text name=MOD_NAME value="<?php echo $this->_tpl_vars['NAME']; ?>
"></td>
                </tr>

                <tr align="left" bgcolor="#E0ECFF">
                    <td height="23" width="20%"><?php if ($this->_tpl_vars['check_email'] == '1'): ?><font color="red">E-MAIL*</font><?php else: ?>E-MAIL*<?php endif; ?></td>
                    <td width="80%"><input class="txt" type=text name=MOD_EMAIL value="<?php echo $this->_tpl_vars['EMAIL']; ?>
" id="MOD_EMAIl"></td>
                </tr>
                <tr align="left" bgcolor="#E0ECFF">
                    <td height="23" width="20%">ROLE</td>
                    <td width="80%"><select name="MOD_ROLE" class="txt">
                            <option value='T' <?php if ($this->_tpl_vars['ROLE'] == 'T'): ?>selected<?php endif; ?>>Tele Sales</option>
                            <option value='CS' <?php if ($this->_tpl_vars['ROLE'] == 'CS'): ?>selected<?php endif; ?>>Corporate Sales</option>
                            <option value='DA' <?php if ($this->_tpl_vars['ROLE'] == 'DA'): ?>selected<?php endif; ?>>Data Acquisition</option>
                            <option value='DE' <?php if ($this->_tpl_vars['ROLE'] == 'DE'): ?>selected<?php endif; ?>>Data Entry</option>
                            <option value='O' <?php if ($this->_tpl_vars['ROLE'] == 'O'): ?>selected<?php endif; ?>>Other</option>
                    </td>
                </tr>

                <tr align="left" bgcolor="#E0ECFF">
                    <td height="23" width="20%">PRIVILEGES</td>
                    <td class=txt><select name="MOD_PRIV[]" size="10" multiple class="txt"><?php echo $this->_tpl_vars['OPTIONS']; ?>
</td>
                </tr>

                <tr align="left" bgcolor="#E0ECFF">
                    <td height="23" width="20%">CENTER</td>
                    <td width="80%"><select name="MOD_CENTER" class="txt"><?php echo $this->_tpl_vars['CENTER']; ?>
</td>
                </tr>

                <tr align="left" bgcolor="#E0ECFF">
                    <td height="23" width="20%">PHONE</td>
                    <td width="80%"><input class="txt" type=text name=MOD_PHONE value="<?php echo $this->_tpl_vars['PHONE']; ?>
"></td>
                </tr>
                <tr align="left" bgcolor="#E0ECFF">
                    <td height="23" width="20%"><?php if ($this->_tpl_vars['check_empid'] == '1'): ?><font color="red">EMPLOYEE ID*<br>Invalid or not available</font><?php else: ?>EMPLOYEE ID*<?php endif; ?></td>
                    <td width="80%"><input class="txt" type=text name=MOD_EMPID value="<?php echo $this->_tpl_vars['EMP_ID']; ?>
" id="MOD_EMPID"></td>
                </tr>
                <tr align="left" bgcolor="#E0ECFF">
                    <td height="23" width="20%">IMMEDIATE HEAD</td>
                    <td width="80%"><select name="MOD_HEADID" class="txt"><?php echo $this->_tpl_vars['HEAD']; ?>
</td>
                </tr>

                <tr align="left" bgcolor="#E0ECFF">
                    <td class=txt>ACTIVE</td>
                    <td class=txt><input type=checkbox name=MOD_ACTIVE value="Y" <?php if ($this->_tpl_vars['ACTIVE'] == 'Y'): ?> checked <?php endif; ?>></td>
                </tr>

                <tr align=center>
                    <td class=fieldsnew colspan=100%>
                        <input type=Hidden  name=USERNAME value=<?php echo $this->_tpl_vars['USERNAME']; ?>
>
                            <input type=Hidden  name=ID value=<?php echo $this->_tpl_vars['ID']; ?>
>
                                <input type=Hidden  name=checksum value=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
>
                                    <input type=submit  name=submit value=MODIFY>
                                        </td>
                                        </tr>
                                        </form>

                                        </table>
                                        <br />
                                        <?php echo $this->_tpl_vars['footer']; ?>
	
                                        <p>&nbsp;</p>
                                        </body>
                                        </html>