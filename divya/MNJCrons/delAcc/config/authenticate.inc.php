<?php
/******************"dashboard_authenticate.inc.php"*******************

     Last Modified By   : Rahul Batra, 2008-06-01
     Description        : Dashboard authetication script
**********************************************************************/
if (!isset($_SERVER["PHP_AUTH_USER"]))
{
echo "ooooo";
	// If empty, send header causing dialog box to appear
	header('WWW-Authenticate: Basic realm="Dashboard mis"');
	header('HTTP/1.0 401 Unauthorized');
	exit;
}
else if (isset($_SERVER["PHP_AUTH_USER"]))
{
	if ($_SERVER["PHP_AUTH_USER"] == "TechSupport@Naukri" && $_SERVER["PHP_AUTH_PW"] == "T3cHSuPp0rT@nauKr!Changed!")
	{
	}
	else
	{
		header('WWW-Authenticate: Basic realm="Dashboard mis"');
		header('HTTP/1.0 401 Unauthorized');
		echo 'Authorization Required.';
		exit;
	}
}
