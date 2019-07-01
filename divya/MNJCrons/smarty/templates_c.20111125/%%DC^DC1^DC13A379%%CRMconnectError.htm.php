<?php /* Smarty version 2.6.19, created on 2011-07-23 16:23:42
         compiled from CRMconnectError.htm */ ?>
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
                <td colspan="2"><table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" class="link">
                        <tr>
                            <td width="16%" height="19" align="right" bgcolor="#DFECF5">&nbsp;&nbsp;&nbsp;</td>
                            <td width="15%">&nbsp;</td>
                            <td width="69%" align="right">&nbsp;&nbsp;&nbsp; </td>
                        </tr>
                    </table></td>
            </tr>
            <tr>
                <td width="16%" height="98" align="left"><span class="smt"><img src="images/real-estates-india.gif" width="122" height="75" /><br />
                        India's Property Bazaar</span></td>
                <td width="84%" align="left" class="hd">Customer Relationship Management</td>
            </tr>
            <tr>
                <td height="21" colspan="2" bgcolor="#0264D3"><table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0" class="et">
                        <tr>
                            <td align="left">&nbsp;</td>
                        </tr>
                    </table></td>
            </tr>
        </table>
        <br />
        <table width="760" border="0" cellspacing="0" cellpadding="0" align="center" height="327">
            <tr>
                <td width="79%" valign="top" align="center"><br />
                    <b><font face="Verdana" size="2" color="#ff0000"><br />
                            <table width="100%" align="center" cellpadding="5" cellspacing="1" bgcolor="#FFFFFF">
                                <tr bgcolor="#E0ECFF">
                                    <form method="post" action="login.php">
                                        <td height="30" colspan="2" class="txt"><strong><font color="red">&#155;
	<?php if ($this->_tpl_vars['CHECKSUM'] != ''): ?>
                                                    Your session is Timed out. Please Login again
                                                    <?php else: ?>
                                                    Either the user name or password entered by you is incorrect !
                                                    <?php endif; ?>
                                                </font>
                                            </strong></td>
                                </tr>
                                <tr>
                                    <td width="20%" height="40" class="txt"><b>Username :</b></td>
                                    <td width="80%" height="40"><input type="text" name="userlogin" value="<?php echo $this->_tpl_vars['userlogin']; ?>
" size="30" maxlength="80" class="txt" />
                                    </td>
                                </tr>
                                <tr>
                                    <td height="40" class="txt"><strong>Password :</strong></td>
                                    <td height="40"><input type="password" name="password" value="" size="30" maxlength="128" class="txt" />
                                    </td>
                                </tr>
                                <tr align="right">
                                    <td>&nbsp;</td>
                                    <td align="left" height="30"><input type="submit" value=" Login " name="login" class="txt" />
                                    </td>
                                    </form>
                                </tr>
                            </table></td>
                            </tr>
                            </table>
                            <?php echo $this->_tpl_vars['footer']; ?>
	
                            </body>
                            </html>