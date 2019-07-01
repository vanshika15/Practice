<?php /* Smarty version 2.6.19, created on 2011-07-26 17:28:59
         compiled from addnew_priv.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script language="JavaScript" type="text/JavaScript">

            function validate()
            {
                docF = document.form1;
                if(docF.LABEL.value == "")
                {
                    alert("Please enter label");
                    return false;
                }
                if(docF.VALUE.value == "")
                {
                    alert("Please enter value");
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
                <td width="84%" align="left" class="hd">Add new privilege</td>
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
        <form action="addnew_priv.php" method=POST name="form1" onsubmit="return validate();">
            <table width="80%" align="center" class="txt" cellpadding=5>

                <tr align="left" bgcolor="#E0ECFF">
                    <td height="23" width="20%"><?php if ($this->_tpl_vars['check_value'] == '1'): ?><font color="red">VALUE*<br>Invalid or not available</font><?php else: ?>VALUE*<?php endif; ?></td>
                    <td width="80%"><input class="txt" type=text name=VALUE value="<?php echo $this->_tpl_vars['VALUE']; ?>
"></td>
                </tr>

                <tr align="left" bgcolor="#E0ECFF">
                    <td height="23" width="20%"><?php if ($this->_tpl_vars['check_label'] == '1'): ?><font color="red">LABEL*</font><?php else: ?>LABEL*<?php endif; ?></td>
                    <td width="80%"><input class="txt" type=text name=LABEL size=50 value="<?php echo $this->_tpl_vars['LABEL']; ?>
"></td>
                </tr>

                <tr align="left" bgcolor="#E0ECFF">
                    <td class=txt>ACTIVE</td>
                    <td class=txt><input type=checkbox name=ACTIVE value="Y" <?php if ($this->_tpl_vars['ACTIVE'] != 'N'): ?> checked <?php endif; ?>></td>
                </tr>

                <tr align=center>
                    <td class=fieldsnew colspan=100%>
                        <input type=Hidden  name=checksum value=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
>
                            <input type=submit  name=submit value=ADD>
                                </td>
                                </tr>
                                </form>

                                </table>
                                <br />
                                <?php echo $this->_tpl_vars['footer']; ?>

                                <p>&nbsp;</p>
                                </body>
                                </html>