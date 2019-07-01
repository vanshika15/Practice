<?php /* Smarty version 2.6.19, created on 2010-03-22 10:45:40
         compiled from ni/nidashboard/dashboard_clientinfo_change.tpl */ ?>
<html>
	<head>
	<title>	</title>
		<LINK REL="stylesheet" HREF="<?php echo $this->_tpl_vars['BASE_CSS_PATH']; ?>
/nkr_common_<?php echo $this->_tpl_vars['COMMON_CSS_VER']; ?>
.css" TYPE="text/css">
		<LINK REL="stylesheet"  HREF="<?php echo $this->_tpl_vars['BASE_CSS_PATH']; ?>
/jp_style_<?php echo $this->_tpl_vars['COMMON_CSS_VER']; ?>
.css" TYPE="text/css">
		<script language="Javascript">
			function mnr_enterPressed(event)
			{
				if((event && event.keyCode == 13))
		        {
					alert("Please click on the appropiate button to Update/Block Account");
					return false;
		        }
			}
		</script>
	</head>
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

	<br><br>
		<form name="frmclientinfo" action="" method="POST" onkeypress="return mnr_enterPressed(event);">
				
			<?php if ($this->_tpl_vars['CNFRM_MSG']): ?>
				<center><span class="confirm" style="color:#1A42D5; text-align:left;"><img src="<?php echo $this->_tpl_vars['RDX_IMAGES_PATH']; ?>
/conf.gif" align="absmiddle" vspace="4" hspace="4"><b><?php echo $this->_tpl_vars['CNFRM_MSG']; ?>
</b></span></center>
			<?php else: ?>
			<?php if ($this->_tpl_vars['ERROR_MSG']): ?>
				<center><span class="error"><b><?php echo $this->_tpl_vars['ERROR_MSG']; ?>
</b></span><?php endif; ?></center>
				<br/><center><TABLE WIDTH="777" BORDER="0" VSPACE="0" HSPACE="0" CELLPADDING="0" CELLSPACING="0">
					<TR>
        <TD HEIGHT="21" bgcolor="#d5ecfa" align="left"><span class="fmjp"><b>&nbsp;&nbsp; User Account Information</b></span><span class="mandlabeljp" style="padding-left:470px;"><?php if ($this->_tpl_vars['BLOCKED'] != 1): ?><input type="submit" class="buttons" name="btnBlock" value="Block Account" onclick="return confirm('Are you sure you want to block this account?');"><?php else: ?><span class="error">Account Blocked.</span><?php endif; ?></span></TD>
      </TR>
      <TR>
        <TD>
		<TABLE WIDTH="777" BORDER="0" VSPACE="0" HSPACE="0" CELLPADDING="5" CELLSPACING="0">
          <TR>
            <TD WIDTH="140" HEIGHT="30" align="left" valign="top">&nbsp; 
            <span id="span_username" class="fmjp">
             Username
            </span>
            </TD>
            <TD WIDTH="637" align="left" valign="top">
                       		<INPUT TYPE="TEXT" NAME="cpUserName1" id="id_username" class="inpbtsjp" SIZE="30" value="<?php echo $this->_tpl_vars['UNAME_ORIG']; ?>
" maxlength="50" readonly><INPUT TYPE="hidden" NAME="blocked" id="id_username" class="inpbtsjp" SIZE="30" value="<?php echo $this->_tpl_vars['BLOCKED']; ?>
">				<BR>
             </TD>
            <TD WIDTH="637" align="left" valign="top">
                       		<INPUT TYPE="TEXT" NAME="cpUserName2" id="id_username" class="inpbtsjp" SIZE="30" value="<?php echo $this->_tpl_vars['UNAME_CHNGD']; ?>
" maxlength="50" readonly>				<BR>
           		<span CLASS="fm1jp">Minimum 6 characters</span>
                         
             </TD>
          </TR>
                    <TR>

            <TD HEIGHT="30" align="left" valign="top">&nbsp; 
             <span id="span_password"  class="fmjp">
             Password             	<SPAN CLASS="error">*</SPAN>       
            </span>
            </TD>
            <TD align="left" valign="top">
            <INPUT TYPE="text" ID = "id_pswd" NAME="cpPassword1" class="inpbtsjp" SIZE="30" value="<?php echo $this->_tpl_vars['PSWD_ORIG']; ?>
" maxlength="50" readonly></span><BR>
            </TD>
            <TD align="left" valign="top">
            <INPUT TYPE="text" ID = "id_pswd" NAME="cpPassword2" class="inpbtsjp" SIZE="30" value="<?php echo $this->_tpl_vars['PSWD_CHNGD']; ?>
" maxlength="50"></span><BR>
           		<span CLASS="fm1jp">Minimum 6 characters</span>
            </TD>
            
          </TR>
          <TR>
            <TD HEIGHT="42" valign="top" align="left">&nbsp; 
            <span id="span_email" class="fmjp">
              Email ID            		<SPAN CLASS="error">*</SPAN>
			</span>
            </DIV></TD>

            <TD align="left" valign="top">
                   
           		<span class="fmjp"><?php echo $this->_tpl_vars['MASTEREMAIL_ORIG']; ?>
</span><BR>
                        </TD>
            <TD align="left" valign="top">
                   
           		<INPUT TYPE="hidden" NAME="cpMasterEmail1" id="id_email" class="inpbtsjp" SIZE="30" value="<?php echo $this->_tpl_vars['MASTEREMAIL_ORIG']; ?>
" maxlength="45"><INPUT TYPE="TEXT" NAME="cpMasterEmail2" id="id_email" class="inpbtsjp" SIZE="30" value="<?php echo $this->_tpl_vars['MASTEREMAIL_CHNGD']; ?>
" maxlength="50">            	<BR>
           		<span CLASS="fm1jp">This E-mail ID will be used for further communication </span>
                        </TD>
          </TR>
				</table>
				<TR>
        <TD HEIGHT="21" bgcolor="#d5ecfa" align="left"><span class="fmjp"><b>&nbsp;&nbsp;<input type="submit" class="actbutton2jp" name="btnUpdate" value="Update" onclick="return confirm('Are you sure you want to update account details?');">&nbsp;&nbsp;<input type="button" class="actbutton2jp" name="btnClose" value="Close" onclick="var ans = confirm('Are you sure you want to close?');if(ans == true) window.close(); else return false;"> </b></span><span class="mandlabeljp" style="padding-left:300px;"></span></TD>
      </TR>
				</center>
			<?php endif; ?>
		</form>
	</body>
</html>