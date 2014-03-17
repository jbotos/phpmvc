<?php

class help extends Controller {
	
	function __construct() 
	{
		parent::__construct();
		//echo 'we are in help';
	}
	
	public function other($arg = false)
	{
		echo 'we are inside other <br>';
		echo 'optional: ' . $arg;	
		
		require 'models/help_m.php';
		$model = new Help_Model();
		
	}
	
	
	
}	