<?php /* Smarty version 2.6.19, created on 2012-08-28 10:29:14
         compiled from ni/nidashboard/opsMailer/login.tpl */ ?>
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
    <div style="width:200px;"><img title="NaukriGulf" alt="NaukriGulf" class="ngimg" src="http://static.naukimg.com/ni/nistatic/nihome/images/naukri5yearlogo.gif"/></div>
    <div class="md">
     <span>  :: OPS SERVICE:: </span>
    </div>
    <?php if ($this->_tpl_vars['CONFIRM_MSG'] != ""): ?>
        <div class="md f15"><?php echo $this->_tpl_vars['CONFIRM_MSG']; ?>
</div>
    <?php endif; ?>
        <form name="opsService" method="post">
        <div style="margin-left:300px;">
        <table>
        <tr><td class="ttl">
            Username<span style="color:red">*</span>:
        </td><td>    
            <input type="text" name="uname" id="unameID" />
        </td>
        </td></tr><tr><td class="ttl">
            Password<span style="color:red">*</span>:
        </td><td> 
            <input type="password" name="pwd" id="pwdID" />
        </td></tr> 
        </table>
        </div>
        <div class="md" style="padding-left:50px;">
            <input type="submit" name="submit" value="submit"/>
        </div>
        </form>
        <div style="font-size:12px; margin-left:400px; color:red">
            All the fields marked with * are mandatory.
        </div>    
        </div>
    </body>
</html>
