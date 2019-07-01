<?php

function __autoload($class_name) 
{
	//echo "--".$class_name;
	require(NC_AUTOLOAD_CONFIG."all_class_map.php");
	$class_file = $all_class_map[$class_name];
	if($class_file)
		require_once ($class_file);
	elseif($class_name)
		trigger_error("Class $class_name is not defined.", E_USER_ERROR);

}

?>
