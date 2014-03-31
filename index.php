<?php
//define("APPPATH", $_SERVER['DOCUMENT_ROOT']);

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
 
// Use an autoloader 
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/View.php';
require 'libs/Model.php';

// Library 
require 'libs/Database.php';
require 'libs/Session.php';

// Config
require 'config/paths.php';
require 'config/database.php';

$app = new Bootstrap();
	


?>

 

 