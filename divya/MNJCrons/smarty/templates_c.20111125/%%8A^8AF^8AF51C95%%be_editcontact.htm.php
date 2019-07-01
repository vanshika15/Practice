<?php /* Smarty version 2.6.19, created on 2011-07-27 14:35:02
         compiled from be_editcontact.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<script type="text/javascript" language="javascript">
			function check_mobile_ajax()
			{
		        docF=document.form1;
		        var mobilearr=(docF.mobile.value).split(",");
        		if(mobilearr.length != 1 || trim(mobilearr[0]) != "")
        		{
                	for(var i=0; i<mobilearr.length; i++)
                	{
                        if(isNaN(+trim(mobilearr[i])) || trim(mobilearr[i])=="")
                        {
							var mobile_div=document.getElementById('mobile_div');
                            mobile_div.innerHTML="Mobile number<br>(Mobile No. entered is not valid!)";
                            mobile_div.style.color="red";
                            return;
                        }
                	}
        		}
			}
			function check_phone_ajax()
			{
		    	docF=document.form1;
        		if(isNaN(+trim(docF.phone.value)))
        		{
					var phone_div=document.getElementById('phone_div');
                	phone_div.innerHTML="Phone number<br>(Phone No. entered is not valid!)";
                	phone_div.style.color="red";
                	return;
        		}
			}
            function validate()
            {
                var docF = document.form1;

				var name = trim(docF.name.value);
				var designation = trim(docF.designation.value);
				var city = docF.city.value; 
				var email = docF.email.vallue ;
				var phone = docF.phone.value;
				var mobile = docF.mobile.value;

                if (name == "")
                {
                    alert("Please specify Name");
                    docF.name.focus();
                    return false;
                }
				var invalid=invalid_user(name);
				var length = name.length;
				if(invalid)
				{
					alert("Invalid name");
                    docF.name.focus();
					return false;
				}	
				if (length < 6 || length > 30 )
				{
					alert("Enter name of length greater than 6 and less than 30 ");
                    docF.name.focus();
					return false;
				}
                if (designation == "")
                {
                    alert("Please specify Designation");
                    docF.designation.focus();
                    return false;
                }
                if (city == "")
                {
                    alert("Please specify City");
                    docF.city.focus();
                    return false;
                }
                if (email == "")
                {
                    alert("Please specify Email");
                    docF.email.focus();
                    return false;
                }    
                if(!checkemail(email))
                {
                    alert(docF.email.value + " is not a valid Email ID");
                    docF.email.focus();
                    return false;
                }
                if(isNaN(+trim(phone)))
                {
                    alert("Phone No. entered is not valid!");
                    docF.pbone.focus();
                    return false;
                }
                var mobilearr=(mobile).split(",");
                if(mobilearr.length != 1 || trim(mobilearr[0]) != "")
                {
                    for(var i=0; i<mobilearr.length; i++)
                    {
                        if(isNaN(+trim(mobilearr[i])) || trim(mobilearr[i])=="")
                        {
                            alert("Mobile No. entered is not valid!");
                            docF.mobile.focus();
                            return false;
                        }
                    }
                }
                return true;
            }
        </script>    	
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" >
        <title>CRM</title>
        <link href="<?php echo $this->_tpl_vars['IMG_BASE_URL']; ?>
/firstNaukriCrm/css/oadstyle.css" rel="stylesheet" type="text/css" >
    </head>
    <body>
    	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
        	<tr>
            	<td width="16%" height="98" align="left"><?php echo $this->_tpl_vars['headerImage']; ?>
</td>
                <td width="84%" align="left" class="hd">
					Edit Contact
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

        <form name=form1 method=post action="be_editcontact.php">

        	<table width="80%" border=0 align="center" cellpadding=5 cellspacing=1 class="txt">
            	<tr><td colspan=100%>&nbsp;</td></tr>
                <tr bgcolor="#E0ECFF"><th colspan=100%>CONTACT DETAILS</th></tr>

                <tr>
                	<td>
                    	<table width="80%" border=0 align="center" cellpadding=5 cellspacing=1 class="txt">
                            <tr>
                                <td width="50%"><?php if ($this->_tpl_vars['CHECK_NAME'] == 'Y'): ?><font color=red>Name</font><?php else: ?>Name<?php endif; ?></td>
                                <td>
                                    <input name="name" value="<?php echo $this->_tpl_vars['NAME']; ?>
" type="text" class="textboxes1" id="name" size="18" maxlength="40">
                                </td>
                            </tr>
                            <tr>
                                <td width="50%"><?php if ($this->_tpl_vars['CHECK_DESIGNATION'] == 'Y'): ?><font color=red>Designation</font><?php else: ?>Designation<?php endif; ?></td>
                                <td>
                                    <input name="designation" value="<?php echo $this->_tpl_vars['DESIGNATION']; ?>
" type="text" class="textboxes1" id="designation" size="18" maxlength="40">
                                </td>
                            </tr>
                            <tr>
                                <td width="50%"><?php if ($this->_tpl_vars['CHECK_CITY'] == 'Y'): ?><font color=red>City</font><?php else: ?>City<?php endif; ?></td>
                                <td>
                                    <select name="city" id="city"><option value="" selected="selected">Select</option>
					                <?php echo $this->_tpl_vars['CITY_DD']; ?>

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%"><?php if ($this->_tpl_vars['INVALID_EMAIL'] == 'Y'): ?><font color=red>Email</font><?php else: ?> Email <?php endif; ?></td>
                                <td><input type=text name=email class=txt size=30 value='<?php echo $this->_tpl_vars['EMAIL']; ?>
' id="email"></td>
                            </tr>
                            <tr>
                            	<td width="50%"><div align="left" id="mobile_div"> 	<?php if ($this->_tpl_vars['CHECK_MOBILE'] == 'Y' || $this->_tpl_vars['MOBILE_EXIST'] == 'Y' || $this->_tpl_vars['MOBILE_EXIST_CRM'] == 'Y'): ?> <font color="red">Mobile Number <?php if ($this->_tpl_vars['INVALID_MOBILE'] == 'Y'): ?> (Please enter valid Mobile Number) <?php elseif ($this->_tpl_vars['MOBILE_EXIST'] == 'Y'): ?> (This Mobile number already exists) <?php elseif ($this->_tpl_vars['MOBILE_EXIST_CRM'] == 'Y'): ?> (This Mobile number already exists in Account) <?php endif; ?></font> <?php else: ?> Mobile Number <?php endif; ?> <br><span class="bottom">(Use comma as a seperator for multiple mobile numbers)</span>  </div></td>
                               	<td >
                               		<input name="mobile" type="text" value="<?php echo $this->_tpl_vars['MOBILE']; ?>
" class="textboxes1" id="mobile" size="15" maxlength="40"  onBlur="check_mobile_ajax()" >
                            	</td>
                         	</tr>
                            <tr>
                                <td width="50%"><div align="left" id="phone_div"> <?php if ($this->_tpl_vars['VALID_PHONE']): ?> <font color="red">Phone Number <?php if ($this->_tpl_vars['PHONE_EXIST'] == 'Y'): ?> (This Phone number already exists) <?php elseif ($this->_tpl_vars['PHONE_EXIST_CRM'] == 'Y'): ?>(This Phone number already exists in Account) <?php elseif (! $this->_tpl_vars['PHONE_EMPTY']): ?> (Please enter valid Phone Number) <?php elseif ($this->_tpl_vars['CHECK_PHONE'] == 'Y'): ?> (Please enter valid Phone Number) <?php endif; ?></font>  <?php else: ?> Phone Number  <?php endif; ?><br>   </div></td>
                                <td>
                                    <input name="phone" type="text" value="<?php echo $this->_tpl_vars['PHONE']; ?>
" class="textboxes1" id="phone" size="5" maxlength="40" onBlur="check_phone_ajax()">
                              	</td>
                         	</tr>
                     	</table>
                   	</td>
                </tr>

           		<tr align="right"><td colspan="100%"><input type=submit name=edit class="txt" value="Edit"></td></tr>
           	</table>

           	<input type=hidden name=checksum value=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
>
           	<input type=hidden name=rpcid value=<?php echo $this->_tpl_vars['RPCID']; ?>
>
       		<input type=hidden name=flag value=<?php echo $this->_tpl_vars['FLAG']; ?>
>
    	</form>

    <br>
    <?php echo $this->_tpl_vars['footer']; ?>

    <p>&nbsp;</p>
    <script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['IMG_BASE_URL']; ?>
/firstNaukriCrm/js/common.js"></script>
	</body>
</html>