<?php /* Smarty version 2.6.19, created on 2019-01-28 13:40:41
         compiled from /usr/local/apache/htdocs/delAcc/tpl/UploadResumeEmail.tpl */ ?>
<html>
<head>
<title>Naukri Techsupport</title>
<style>
.log { font-size:13px; font-family:verdana,arial,times}
</style>
</head>
<body>
<div><img src="http://static.naukimg.com/mynauk/images/jobs-india.gif" /></div>
<div align="center" style="font-weight:bold;font-size:25px;">Tech-Support ( Naukri )</div>
<div style="clear:both;" ></div><hr />
<div style="float:left"><a href="delAcc.php">Back to Search</a></div>
<div style="clear:both;" ></div><br />
<form name="frmGetData" method="post" onsubmit="return validateForm()">
<table border=0 cellpadding=5 width="440">
  <tr >
    <td style="width:100px;" class="fs13" >Enter Sender's Name :</td><td valign="top"><input type="text" required maxlength="100" size="30" name="SENDER_NAME" id="name" value="<?php echo $this->_tpl_vars['name']; ?>
" autocomplete="off"></td>
  </tr>
  <tr>
    <td style="width:100px;" class="fs13">&nbsp;</td><td><input type="submit" name="SENDMAIL" value="Send Email"</td>
  </tr>
    <?php if ($this->_tpl_vars['userDetails']): ?>
        <input type="hidden" name="NAME" value="<?php echo $this->_tpl_vars['userDetails']['NAME']; ?>
" />
        <input type="hidden" name="RESID" value="<?php echo $this->_tpl_vars['userDetails']['RESID']; ?>
" />
        <input type="hidden" name="USERID" value="<?php echo $this->_tpl_vars['userDetails']['USERID']; ?>
" />
        <input type="hidden" name="MOD_DT" value="<?php echo $this->_tpl_vars['userDetails']['MOD_DT']; ?>
" />
        <input type="hidden" name="GENDER" value="<?php echo $this->_tpl_vars['userDetails']['GENDER']; ?>
" />
        <input type="hidden" name="EMAIL" value="<?php echo $this->_tpl_vars['userDetails']['EMAIL']; ?>
" />
    <?php endif; ?>
</table>
</form>
</body>
</html>
