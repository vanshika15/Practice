<?php /* Smarty version 2.6.19, created on 2011-02-02 16:26:34
         compiled from /usr/local/apache/htdocs/smarty/templates/fb/fnConnect.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mnj</title>
</head>

<body>


<h1>Login using  facebook</h1><br />

 




<!-- facebook connect button --> 
    <div align="center"><fb:login-button perms="email,user_work_history,user_education_history,user_work_history,friends_work_history,friends_education_history" v="2" size="large"><?php if ($this->_tpl_vars['logout']): ?>Login with Facebook <?php else: ?>Connect with Facebook<?php endif; ?></fb:login-button></div> 
<!-- facebook connect button --> 


<!-- facebook connect script --> 
<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript">
  FB.init({appId: '194688973890206', status: true, cookie: true, xfbml: true});
  FB.Event.subscribe('auth.sessionChange', function(response) {
    if (response.session) {
      // A user has logged in, and a new cookie has been saved
	facebook_onlogin_ready();
    } else {
      // The user has logged out, and the cookie has been cleared
	alert("Logged out");
    }
  });

function facebook_onlogin_ready()
{
  refresh_page();
}
 
function refresh_page() 
{
  var fbDataUrl = "http://lfvscp10067.dn.net/mini/nkFacebook/new_graph_api/connectsmarty.php";
  window.location = fbDataUrl;
}
</script> 
<!-- facebook connect script --> 
</body>
</html>
