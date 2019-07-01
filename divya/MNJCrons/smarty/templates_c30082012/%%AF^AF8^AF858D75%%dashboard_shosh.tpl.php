<?php /* Smarty version 2.6.19, created on 2012-08-30 12:07:20
         compiled from ni/nidashboard/dashboard_shosh.tpl */ ?>
<html>
<head>
<title>Shosh Upload Interface</title>
<script language="javascript" src="http://static.naukimg.com/ni/nistatic/niincludes/commonjs/nkr_commonfunc_1.js"></script>
<script type="text/javascript">
function res_validateUpdateDetails()
    {
        var errnum = 0;
        document.getElementById("name_err_id").innerHTML="";
        document.getElementById("name_err_id").style.color="#FF0000";
        document.getElementById("url_err_id").innerHTML="";
        document.getElementById("url_err_id").style.color="#FF0000";
        document.getElementById("image_err_id").innerHTML="";
        document.getElementById("image_err_id").style.color="#FF0000";
        document.getElementById("stdate_err_id").innerHTML="";
        document.getElementById("stdate_err_id").style.color="#FF0000";
        document.getElementById("enddate_err_id").innerHTML="";
        document.getElementById("enddate_err_id").style.color="#FF0000";

        var shoshname = document.getElementById('shosh_name_id');
        if (nkr_trim(shoshname.value) == "")
            {   
                errnum+=1;
                document.getElementById("name_err_id").innerHTML="<br/>Please Enter The Shosh Name";
            }
        
        var shoshurl = document.getElementById('shosh_url_id');
        if (nkr_trim(shoshurl.value) == "")
            {   
                errnum+=1;
                document.getElementById("url_err_id").innerHTML="<br/>Please Enter The URL";
            }

        var shoshimage = document.getElementById('shosh_image_id');
        if (nkr_trim(shoshimage.value) == "")
            {   
                errnum+=1;
                document.getElementById("image_err_id").innerHTML="<br/>Please Enter The URL";
            }

        var startdate = document.getElementById('start_date_id');
        date1=startdate.value;
        if(date1.charAt(3)==0)
            month1=date1.charAt(4);
        else
            month1=date1.charAt(3)+date1.charAt(4);
        if (!nkr_checkDate(date1.charAt(0)+date1.charAt(1),month1,date1.charAt(6)+date1.charAt(7)+date1.charAt(8)+date1.charAt(9)))
            {   
                errnum+=1;
                document.getElementById("stdate_err_id").innerHTML="<br/>Please Enter a valid Start Date";
            }
        
        enddate = document.getElementById('end_date_id');
        date2=enddate.value;
        if(date2.charAt(3)==0)
            month2=date2.charAt(4);
        else
            month2=date2.charAt(3)+date2.charAt(4);
        if (!nkr_checkDate(date2.charAt(0)+date2.charAt(1),month2,date2.charAt(6)+date2.charAt(7)+date2.charAt(8)+date2.charAt(9)))
            {   
                errnum+=1;
                document.getElementById("enddate_err_id").innerHTML="<br/>Please Enter a valid End Date";
            }


        if (errnum==0)
            {
                return true;
            }
        else
            {
                return false;
            }
}

</script>
</head>  
<body>

<table width="99%" border="1" align="center" bordercolor="#CCCCFF">
<tr align="center">
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Banner Name</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Shosh URL</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Image URL</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Start Date</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">End Date</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Status</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Modify</font></b></td>
</tr>

<?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=$this->_tpl_vars['BANNER_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
$this->_sections['cnt']['start'] = $this->_sections['cnt']['step'] > 0 ? 0 : $this->_sections['cnt']['loop']-1;
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = $this->_sections['cnt']['loop'];
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
?>
<?php if ($this->_tpl_vars['BANNER_ARR'][$this->_sections['cnt']['index']]['status'] != Expired && $this->_tpl_vars['BANNER_ARR'][$this->_sections['cnt']['index']]['status'] != "Disabled, Expired"): ?>
<tr align="left">
  <td width="8%" align="left">&nbsp;<?php echo $this->_tpl_vars['BANNER_ARR'][$this->_sections['cnt']['index']]['name']; ?>
</td>
  <td width="30%" align="left">&nbsp;<?php echo $this->_tpl_vars['BANNER_ARR'][$this->_sections['cnt']['index']]['url']; ?>
</td>
  <td width="30%" align="left">&nbsp;<?php echo $this->_tpl_vars['BANNER_ARR'][$this->_sections['cnt']['index']]['image']; ?>
</td>
  <td width="8%" align="left">&nbsp;<?php echo $this->_tpl_vars['BANNER_ARR'][$this->_sections['cnt']['index']]['startdate']; ?>
</td>
  <td width="8%" align="left">&nbsp;<?php echo $this->_tpl_vars['BANNER_ARR'][$this->_sections['cnt']['index']]['enddate']; ?>
</td>
  <td width="7%" align="left">&nbsp;<?php echo $this->_tpl_vars['BANNER_ARR'][$this->_sections['cnt']['index']]['status']; ?>
</td>
  <td width="9%" align="left">&nbsp;<font face="Verdana, Arial, Helvetica, sans-serif" size="2"><a href="<?php echo $this->_tpl_vars['DASHBOARD_PATH']; ?>
/dashboard_shosh.php?submit=y&banner_id=<?php echo $this->_tpl_vars['BANNER_ARR'][$this->_sections['cnt']['index']]['autoid']; ?>
&action=edit">Edit</a><?php if ($this->_tpl_vars['BANNER_ARR'][$this->_sections['cnt']['index']]['status'] != 'Disabled' && $this->_tpl_vars['BANNER_ARR'][$this->_sections['cnt']['index']]['status'] != "Disabled, Expired"): ?> / <a href="<?php echo $this->_tpl_vars['DASHBOARD_PATH']; ?>
/dashboard_shosh.php?submit=y&banner_id=<?php echo $this->_tpl_vars['BANNER_ARR'][$this->_sections['cnt']['index']]['autoid']; ?>
&action=disable">Disable</a><?php endif; ?></font></td>
</tr>
<?php endif; ?>
<?php endfor; endif; ?>
</table>
<p></p>
<?php if (! $this->_tpl_vars['BANNER_ARR']): ?> 
    <table width="50%" border="1" align="center" bordercolor="#CCCCFF">
        <tr>
        <td width="20%" align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No Banners Found</font></b></td>
        </tr>
    </table>
    <br/>
<?php endif; ?>

<?php if ($this->_tpl_vars['MES']): ?>
    <table width="50%" border="1" align="center" bordercolor="#CCCCFF">
        <tr>
        <td width="20%" align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['MES']; ?>
</font></b></td>
        </tr>
    </table>
    <br/>
<?php endif; ?>
        <table width="50%" border="1" align="center" bordercolor="#CCCCFF">
        <tr>
        <td width="20%" align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Add/Edit Banner</font></b></td>
        </table>
<form name="myform" method="POST" action="<?php echo $this->_tpl_vars['DASHBOARD_PATH']; ?>
/dashboard_shosh.php" onsubmit="return res_validateUpdateDetails();">
        <table width="50%" border="1" align="center" bordercolor="#CCCCFF">
        <tr>
        <td width="20%" align="right"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Shosh Name</font></b></td>
        <td width="80%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><input type="text" name="shosh_name" id="shosh_name_id" maxlength="80" size="50"class="w260 txt" <?php if ($this->_tpl_vars['SHOSH_NAME']): ?> value="<?php echo $this->_tpl_vars['SHOSH_NAME']; ?>
" <?php endif; ?> /><label id="name_err_id"><br/></label></font></td>
        </tr>
        <tr>
        <td width="20%" align="right"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Shosh URL</font></b></td>
        <td width="80%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><input size="50" type="text" name="shosh_url" id="shosh_url_id" maxlength="80" class="w260 txt" <?php if ($this->_tpl_vars['SHOSH_URL']): ?> value="<?php echo $this->_tpl_vars['SHOSH_URL']; ?>
" <?php endif; ?> /><label id="url_err_id"><br/></label></font></td>
        </tr>
        <tr>
        <td width="20%" align="right"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Image URL</font></b></td>
        <td width="80%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><input size="50" type="text" name="shosh_image" id="shosh_image_id" maxlength="80" class="w260 txt" <?php if ($this->_tpl_vars['SHOSH_IMAGE']): ?> value="<?php echo $this->_tpl_vars['SHOSH_IMAGE']; ?>
" <?php endif; ?> /><label id="image_err_id"><br/></label></font></td>
        </tr>
        <tr>
        <td width="20%" align="right"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Start Date (DD-MM-YYYY)</font></b></td>
        <td width="80%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><input size="50" type="date" name="start_date" id="start_date_id" maxlength="80" class="w260 txt" <?php if ($this->_tpl_vars['SHOSH_STDATE']): ?> value="<?php echo $this->_tpl_vars['SHOSH_STDATE']; ?>
" <?php endif; ?> /><label id="stdate_err_id"><br/></label></font></td>
        </tr>
        <tr>
        <td width="20%" align="right"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">End Date (DD-MM-YYYY)</font></b></td>
        <td width="80%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><input size="50" type="text" name="end_date" id="end_date_id" maxlength="80" class="w260 txt" <?php if ($this->_tpl_vars['SHOSH_ENDDATE']): ?> value="<?php echo $this->_tpl_vars['SHOSH_ENDDATE']; ?>
" <?php endif; ?> /><label id="enddate_err_id"><br/></label></font></td>
        </tr>
        <tr>
        <td width="20%" align="right"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"></font></b></td>
        <td width="80%" align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><button type="submit" value="submit" name="submit">Submit</button></font></td>

</tr>
<?php if ($this->_tpl_vars['SHOSH_ID']): ?>
<input type="hidden" name="action" value="save"></input>
<input type="hidden" name="banner_id" value="<?php echo $this->_tpl_vars['SHOSH_ID']; ?>
"></input>
<?php endif; ?>
        </table>

  </form>
    

</html>
