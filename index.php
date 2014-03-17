<?php

// Use an autoloader



define("APPPATH", $_SERVER['DOCUMENT_ROOT']);

/*function __autoload($classname) {
	if($classname !== 0) {
		$file = APPPATH	. 'libs/' . $classname . '.php';
		if(file_exists($file) && is_file($file)) {
			@require($file);
		}
	}
}

if(!function_exists('classAutoLoader')){
	function classAutoLoader($class){
		$class=strtolower($class);
		$classFile= APPPATH .'/lib/'.$class.'.php';
		if(is_file($classFile)&&!class_exists($class)) include $classFile;
		echo $classFile;
	}
}
spl_autoload_register('classAutoLoader');
*/
 
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/View.php';
require 'libs/Model.php';
$app = new Bootstrap();
	


?>














<?php /*?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
This is the index page
</body>
</html><?php */?>