<?php

class Controller {
	
	function __construct() 
	{
		//echo 'we are in the main controller <br>';
		$this->view = new View();
	}
	
	public function loadModel($name) {
		
		$path = 'models/' . $name . '_m.php';
		
		if(file_exists($path)) {
			if(file_exists($path)) {
				require $path;
				$modelName = $name . '_Model';
				$this->model = new $modelName();	
			}
		}
	}
		
}	