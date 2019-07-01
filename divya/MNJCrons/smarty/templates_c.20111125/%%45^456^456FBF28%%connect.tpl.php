<?php /* Smarty version 2.6.19, created on 2011-02-02 15:27:51
         compiled from /usr/local/apache/htdocs/smarty/templates/fb/connect.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Naukri Facebook Connect</title>
</head>

<body>


<h1>Login using  facebook</h1><br />

 

<!-- facebook connect button -->
    <script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php"></script>
    <div align="center"><fb:login-button perms="user_work_history,user_education_history,user_work_history,friends_work_history,friends_education_history" v="2" size="large" onlogin="facebook_onlogin_ready();">Login with Facebook</fb:login-button></div>
<!-- facebook connect button -->



<!-- facebook connect script --> 
<script type="text/javascript">

FB.init("908b2dcd369c6fbfaa0ee9e6ad805fed", "xd_receiver.htm");

function facebook_onlogin_ready()
{
  refresh_page();
}
 
function refresh_page() 
{
  var connectUrl = "http://lfvscp10067.dn.net/mini/nkFacebook/old_rest_api/connectsmarty.php";
  window.location = connectUrl;
}
</script> 
<!-- facebook connect script --> 
</body>
</html>
