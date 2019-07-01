<?php /* Smarty version 2.6.19, created on 2012-08-28 10:29:20
         compiled from ni/nidashboard/opsMailer/statusView.tpl */ ?>
<html>
    <head>
 <title>OPS SERVICE</title>
   <style type="text/css">
    body{font-family:arial; font-size:12px;}
    .wrapper{width:1000px; margin:5px 100px 10px 100px;}
    .ermsg{color:#ff0000;font-size:11px;}
    .hlptxt{color:#0000ff;font-size:11px;}
    .ttl{vertical-align:top; width:100px;}
    .w250{width:250px;}
    .tbcb{padding:0 10px 0 10px; width:150px;}
    .md{font-size:20px; color:#0000ff; margin-left:400px; margin-bottom:20px;}
    .md a{margin-right:20px;}
    .md a:visited{color:#0000ff; text-decoration:underline}
    .f15{font-size:15px;}
    th{font-size:16px;}
    .dtltb tr{border:1px solid black; padding:5px 5px 5px 5px;}
    .dtltb th{border:1px solid black; padding:5px 5px 5px 5px;}
    .dtltb td{border:1px solid black; padding:5px 5px 5px 5px;}
    </style>
    </head>
  <body>
  <div class="wrapper">
    <div><span style="width:200px;"><img title="NaukriGulf" alt="NaukriGulf" class="ngimg" src="http://static.naukimg.com/ni/nistatic/nihome/images/naukri5yearlogo.gif"/></span>
    <span style="padding-left:600px; font-size:15px;"><a href="<?php echo $this->_tpl_vars['SERVICE_PATH']; ?>
/index.php?logout=true">Log Out</a></span>
    </div>
    <div class="md">
     <span>  :: OPS SERVICE:: </span>
    </div>
    <div id="nis_panel" class="md f15">
        <a href="<?php echo $this->_tpl_vars['SERVICE_PATH']; ?>
/nis_mainPage.php">Main Page</a>
    </div>
    <?php if ($this->_tpl_vars['GLOBAL_ERR_MSG'] != ""): ?>
        <div class="ermsg f15" style="margin-left:400px; margin-bottom:10px;"><?php echo $this->_tpl_vars['GLOBAL_ERR_MSG']; ?>
</div>
    <?php endif; ?>
        <form name="opsStatusView" method="post">
        <div style="margin-left:300px;">
        <table>
        <tr><td class="ttl">
            Mailer List<span style="color:red">*</span>:
        </td><td>    
            <select name="leadMailer[]" id="leadMailerID" class="w250" size ="3" multiple="multiple">
                <option value="1">Recruiter Registration Mailer</option>
                <option value="2">Resdex CV Leads</option>
                <option value="3">JP Leads</option>
            </select>
        </td></tr>
        </table>
        </div>
        <div class="md">
            <input type="submit" name="submit" value="submit"/>
        </div>
        </form>
        <?php if ($this->_tpl_vars['STATUS_ARR'] != ""): ?>
       <?php $_from = $this->_tpl_vars['STATUS_ARR']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['outer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['outer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ko'] => $this->_tpl_vars['i']):
        $this->_foreach['outer']['iteration']++;
?>
       <div class="md" style="margin-bottom:5px;">
       <?php if ($this->_tpl_vars['ko'] == 1): ?>
       Recruiter Registration Mailer
       <?php elseif ($this->_tpl_vars['ko'] == 2): ?>
       Resdex CV Leads
       <?php else: ?>
       JP Leads
       <?php endif; ?>
       </div> 
         <table style="margin-left:200px; margin-bottom:20px;table-layout:fixed;width:600px;" class="dtltb"> 
        <tr>
        <th width="150">Country</th>
        <th width="300">Email List</th>
        <th width="150">Date Modified</th>
        </tr>
        <?php $_from = $this->_tpl_vars['i']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['inner'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['inner']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['item']):
        $this->_foreach['inner']['iteration']++;
?>
       <tr>
       <td width="150"><?php echo $this->_tpl_vars['item']['opsLeadMailerCntry']; ?>
</td>
        <td width="300">
        <?php $_from = $this->_tpl_vars['item']['opsEmailList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['kl'] => $this->_tpl_vars['iteml']):
?>
        <?php echo $this->_tpl_vars['iteml']; ?>
 <br />
        <?php endforeach; endif; unset($_from); ?>
        </td>
        <td width="150"><?php echo $this->_tpl_vars['item']['opsDateModified']; ?>
</td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        </table>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        <div style="font-size:12px; margin-left:400px; color:red">
            All the fields marked with * are mandatory.
        </div>  
        </div>
       </body>
</html>
