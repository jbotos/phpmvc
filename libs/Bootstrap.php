<?php


class Bootstrap
{
	
	function __construct() {
		
		$url = isset($_GET['url']) ? $_GET['url'] : NULL; 
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		$file = 'controllers/' . $url[0] . '.php';
		
		if (empty($url[0])) {
			require 'controllers/index.php';
			$controller = new Index();
			$controller->index();
			return false;
		}
		
		if(file_exists($file)) {
			require $file;
		} else {
			//throw new Exeption("The file: $file Does not exist.");
			require 'controllers/error.php';
			$controller = new Error();
			return false;	
		}
		
		if (class_exists($url[0])) {
			$controller = new $url[0]();
		}
		/* else {
			header('Location: http://phpmvc/');
			exit;
		}*/
		
		if(isset($url[2])) {
			$controller->{$url[1]}($url[2]);	
		} else {
			
			if(isset($url[1]) && isset($controller)) {
			$controller->{$url[1]}();	
			}	
			
		}
	
	} // end construct
	
	
}