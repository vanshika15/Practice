<?php /* Smarty version 2.6.19, created on 2011-07-26 16:25:05
         compiled from be_createaccount.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>CRM</title>
        <link href="<?php echo $this->_tpl_vars['IMG_BASE_URL']; ?>
/firstNaukriCrm/css/oadstyle.css" rel="stylesheet" type="text/css" />
        <script language="JavaScript" type="text/JavaScript">

			var ajaxRequestUri="/firstNaukriCrm/be_createaccount.php";
			var checksum = '<?php echo $this->_tpl_vars['CHECKSUM']; ?>
'	;

			function ajax_fn_companyid_exists(fn_companyid){
				var xmlhttp;
        		if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        		    xmlhttp=new XMLHttpRequest();
	            }
    	        else
                {// code for IE6, IE5
                	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                	if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                    	if(xmlhttp.responseText!=0) {
							alert("Company With This First Naukri Company ID Already Exists Or Invalid Id.") ;
						}
                    }
                }
				var params = "checksum="+checksum+"&ajax=fn_companyid_exists"+"&ajaxr="+new Date().getTime()+"&fn_companyid="+fn_companyid;
                xmlhttp.open("GET",ajaxRequestUri+"?"+params,true);
                xmlhttp.send();
			}

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
				
                if (docF.exec_name.value == "")
                {
                    alert("Please choose Executive Name");
                    docF.exec_name.focus();
                    return false;
                }
                if(trim(docF.fn_companyid.value) && isNaN(+trim(docF.fn_companyid.value)))
                {
                    alert("First Naukri Company Id entered is not valid!");
                    docF.fn_companyid.focus();
                    return false;
                }
                if(trim(docF.n_companyid.value) && isNaN(+trim(docF.n_companyid.value)))
                {
                    alert("Naukri Company Id entered is not valid!");
                    docF.n_companyid.focus();
                    return false;
                }
                if(trim(docF.company_name.value)== '')
                {
                    alert("No Company Name entered!");
                    docF.company_name.focus();
                    return false;
                }
                if (trim(docF.name.value) == "")
                {
                    alert("Please specify Name");
                    docF.name.focus();
                    return false;
                }
                var name = docF.name.value ;
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
                if (trim(docF.designation.value) == "")
                {
                    alert("Please specify Designation");
                    docF.designation.focus();
                    return false;
                }
                if (docF.city.value == "")
                {
                    alert("Please specify City");
                    docF.city.focus();
                    return false;
                }
                if (docF.email.value == "")
                {
                    alert("Please specify Email");
                    docF.email.focus();
                    return false;
                }    
                if(!checkemail(docF.email.value))
                {
                    alert(docF.email.value + " is not a valid Email ID");
                    docF.email.focus();
                    return false;
                }
                if(isNaN(+trim(docF.phone.value)))
                {
                    alert("Phone No. entered is not valid!");
                    docF.pbone.focus();
                    return false;
                }
                var mobilearr=(docF.mobile.value).split(",");
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
					Create a new Account
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
        <form name=form1 method=post action="be_createaccount.php" onsubmit="return validate();">
            <table width="80%" border=0 align="center" cellpadding=5 cellspacing=1 class="txt">
                <tr bgcolor="#E0ECFF"><th colspan=100%>COMPANY DETAILS</th></tr>

                <tr>
                    <td>
                        <table width="80%" border=0 align="center" cellpadding=5 cellspacing=1 class="txt">
                            <tr>
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
                            </tr>
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
                                <td width="50%"><?php if ($this->_tpl_vars['CHECK_NAME'] == 'Y'): ?><font color=red>RPC Name</font><?php else: ?>RPC Name<?php endif; ?></td>
                                <td>
                                    <input name="name" value="<?php echo $this->_tpl_vars['NAME']; ?>
" type="text" class="textboxes1" id="name" size="18" maxlength="40">
                                </td>
                            </tr>
                            <tr>
                                <td width="50%"><?php if ($this->_tpl_vars['CHECK_DESIGNATION'] == 'Y'): ?><font color=red>RPC Designation</font><?php else: ?>RPC Designation<?php endif; ?></td>
                                <td>
                                    <input name="designation" value="<?php echo $this->_tpl_vars['DESIGNATION']; ?>
" type="text" class="textboxes1" id="designation" size="18" maxlength="40">
                                </td>
                            </tr>
                            <tr>
                                <td width="50%"><?php if ($this->_tpl_vars['CHECK_CITY'] == 'Y'): ?><font color=red>RPC City</font><?php else: ?>RPC City<?php endif; ?></td>
                                <td>
                                    <select name="city" id="city"><option value="" selected="selected">Select</option>
					                <?php echo $this->_tpl_vars['CITY_DD']; ?>

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%"><?php if ($this->_tpl_vars['INVALID_EMAIL'] == 'Y'): ?><font color=red>RPC Email</font><?php else: ?>RPC Email <?php endif; ?></td>
                                <td><input type=text name=email class=txt size=30 value='<?php echo $this->_tpl_vars['EMAIL']; ?>
'></td>
                            </tr>
                            <tr>
                            	<td width="50%"><div align="left" id="mobile_div"> 	<?php if ($this->_tpl_vars['CHECK_MOBILE'] == 'Y' || $this->_tpl_vars['MOBILE_EXIST'] == 'Y' || $this->_tpl_vars['MOBILE_EXIST_CRM'] == 'Y'): ?> <font color="red">RPC Mobile <?php if ($this->_tpl_vars['INVALID_MOBILE'] == 'Y'): ?> (Please enter valid Mobile Number) <?php elseif ($this->_tpl_vars['MOBILE_EXIST'] == 'Y'): ?> (This Mobile number already exists) <?php elseif ($this->_tpl_vars['MOBILE_EXIST_CRM'] == 'Y'): ?> (This Mobile number already exists in Account) <?php endif; ?></font> <?php else: ?> RPC Mobile <?php endif; ?> <br><span class="bottom">(Use comma as a seperator for multiple mobile numbers)</span>  </div></td>
                               	<td >
                               		<input name="mobile" type="text" value="<?php echo $this->_tpl_vars['MOBILE']; ?>
" class="textboxes1" id="mobile" size="15" maxlength="40"  onBlur="check_mobile_ajax()" >
                            	</td>
                         	</tr>
                            <tr>
                                <td width="50%"><div align="left" id="phone_div"> <?php if ($this->_tpl_vars['VALID_PHONE']): ?> <font color="red">RPC Landline <?php if ($this->_tpl_vars['PHONE_EXIST'] == 'Y'): ?> (This Phone number already exists) <?php elseif ($this->_tpl_vars['PHONE_EXIST_CRM'] == 'Y'): ?>(This Phone number already exists in Account) <?php elseif (! $this->_tpl_vars['PHONE_EMPTY']): ?> (Please enter valid Phone Number) <?php elseif ($this->_tpl_vars['CHECK_PHONE'] == 'Y'): ?> (Please enter valid Phone Number) <?php endif; ?></font>  <?php else: ?> RPC Landline  <?php endif; ?><br>   </div></td>
                                <td>
                                    <input name="phone" type="text" value="<?php echo $this->_tpl_vars['PHONE']; ?>
" class="textboxes1" id="phone" size="5" maxlength="40" onBlur="check_phone_ajax()">
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
                            <tr align="center">
                            	<td colspan="100%"><input type="submit" name="Submit" class="txt" value="Submit"></td>
                        	</tr>
                    	</table>
                	</td>
             	</tr>
			</table>
       		<input type=hidden name=checksum value=<?php echo $this->_tpl_vars['CHECKSUM']; ?>
>
       	</form>
       	<!--form ends-->
		<?php echo $this->_tpl_vars['footer']; ?>

		<p>&nbsp;</p>
        <script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['IMG_BASE_URL']; ?>
/firstNaukriCrm/js/common.js"></script>
        <!--script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['IMG_BASE_URL']; ?>
/firstNaukriCrm/js/ajax_uncompressed.js"></script-->
	</body>
</html>