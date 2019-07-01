<?php /* Smarty version 2.6.19, created on 2011-06-15 11:30:09
         compiled from ni/niservice/index.tpl */ ?>
<html>
    <head>
    <title>OPS SERVICE</title>
    <style type="text/css">
    body{font-family:arial; font-size:12px;}
    .wrapper{width:1000px; margin:5px 100px 10px 100px;}
    .ermsg{color:#ff0000;font-size:11px;}
    .hlptxt{color:#0000ff;font-size:11px;}
    .ttl{vertical-align:top; width:100px;}
    .w225{width:225px;}
    .tbcb{padding:0 10px 0 10px; width:150px;}
    .md{font-size:20px; color:#0000ff; margin-left:400px; margin-bottom:20px;}
    .md a{margin-right:20px;}
    .md a:visited{color:#0000ff; text-decoration:underline}
    .f15{font-size:15px;}
    /*table,td {border:1px solid red;}*/
    </style>

    </head>
    <body>
    <div class="wrapper">
    <div><span style="width:200px;"><img title="NaukriGulf" alt="NaukriGulf" class="ngimg" src="http://static.naukimg.com/ni/nistatic/nihome/images/naukri5yearlogo.gif"/></span>
    <span style="padding-left:600px; font-size:15px;"><a href="<?php echo $this->_tpl_vars['SERVICE_PATH']; ?>
/nis_logOut.php">Log Out</a></span>
    </div>
    <div class="md">
     <span>  :: OPS SERVICE:: </span>
    </div>
    <div id="nis_panel" class="md f15">
        <a href="<?php echo $this->_tpl_vars['SERVICE_PATH']; ?>
/nis_statusView.php" target="_blank">Status View</a>
    </div>
    <?php if ($this->_tpl_vars['CONFIRM_MSG'] != ""): ?>
        <div class="md f15"><?php echo $this->_tpl_vars['CONFIRM_MSG']; ?>
</div>
    <?php endif; ?>
        <form name="opsService" method="post">
        <div style="margin-left:300px;">
        <table>
        <tr><td class="ttl">
            Mailer List<span style="color:red">*</span>:
        </td><td>    
            <select name="leadMailer[]" id="leadMailerID" size ="3" multiple="multiple" class="w225">
                <option value="1"  <?php if ($this->_tpl_vars['PARAMS']['lm']['0'] == '1'): ?> selected <?php endif; ?>>Recruiter Registration Mailer</option>
                <option value="2"  <?php if ($this->_tpl_vars['PARAMS']['lm']['0'] == '2' || $this->_tpl_vars['PARAMS']['lm']['1'] == '2'): ?> selected <?php endif; ?>>Resdex CV Leads</option>
                <option value="3"  <?php if ($this->_tpl_vars['PARAMS']['lm']['0'] == '3' || $this->_tpl_vars['PARAMS']['lm']['1'] == '3' || $this->_tpl_vars['PARAMS']['lm']['2'] == '3'): ?>selected <?php endif; ?>>JP Leads</option>
            </select>
        </td>
        </tr><tr><td></td><td colspan=2>
        <span class="hlptxt">-Use CTRL for selecting multiple values.</span>
        <br />
        <span class="ermsg"><?php if ($this->_tpl_vars['ERR_MSG']['lm'] != ""): ?> <?php echo $this->_tpl_vars['ERR_MSG']['lm']; ?>
 <?php endif; ?></span>
        </td></tr><tr><td class="ttl">
            Country<span style="color:red">*</span>:
        </td><td> 
            <select name="cntry[]" id="cntryID" size="5" multiple="multiple" class="w225">
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['COUNTRY_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                <option value ="<?php echo $this->_tpl_vars['COUNTRY_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['COUNTRY_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['COUNTRY_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
            <?php endfor; endif; ?>
            </select>
        </td><td class="tbcb">
           ROW<input type="checkbox" name="othCntry" id="othCntryID" value="1800" <?php if ($this->_tpl_vars['PARAMS']['othCntry'] != ""): ?> checked<?php endif; ?>> 
        </td>
        </tr><tr><td></td><td colspan=2>
        <span class="hlptxt">-Use CTRL for selecting multiple values.<br/>
        -Select ROW for Rest of World(includes countries that are not explicitly mentioned).
        </span>
        <br />
        <span class="ermsg"><?php if ($this->_tpl_vars['ERR_MSG']['cntry'] != ""): ?> <?php echo $this->_tpl_vars['ERR_MSG']['cntry']; ?>
 <?php endif; ?></span>
        </td></tr><tr><td class="ttl">  
            Email Id<span style="color:red">*</span>:
        </td><td>    
            <input type="text" class="w225" name="email" id="emailID" value="<?php echo $this->_tpl_vars['PARAMS']['email']; ?>
"/>
        </td><td style="vertical-align:top"class="tbcb">    
            Add<input type="checkbox" name="add" id="addID" value="add" <?php if ($this->_tpl_vars['PARAMS']['add'] != ""): ?> checked<?php endif; ?>>
            Remove<input type="checkbox" name="rmv" id="rmvID" value="rmv" <?php if ($this->_tpl_vars['PARAMS']['rmv'] != ""): ?> checked<?php endif; ?>>
        </td>
        </tr><tr><td></td><td colspan=2>
        <span class="hlptxt">-Use "," or ";" as separators for more than one Email ID.<br />
        -Max No. of Email Ids = 10.<br />
        -Select Add to add Email Ids and Remove to remove them from existing list.
        </span>
        <br />
        <span class="ermsg"><?php if ($this->_tpl_vars['ERR_MSG']['email'] != ""): ?> <?php echo $this->_tpl_vars['ERR_MSG']['email']; ?>
 <br/> <?php endif; ?></span>
        <span class="ermsg"><?php if ($this->_tpl_vars['ERR_MSG']['emailadrmv'] != ""): ?> <?php echo $this->_tpl_vars['ERR_MSG']['emailadrmv']; ?>
 <?php endif; ?></span>
        </td></tr>
        </table>
        </div>
        <div class="md">
            <input type="submit" name="submit" value="Save"/>
        </div>
        </form>
        <div style="font-size:12px; margin-left:400px; color:red">
            All the fields marked with * are mandatory.
        </div>    
        </div>
    </body>
</html>
