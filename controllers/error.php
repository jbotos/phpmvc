<?php

class error extends Controller {
	
	function __construct() 
	{
		parent::__construct();
		
		echo 'error controller called <br>';
		$this->view->msg = 'This page does not exist';
		$this->view->render('error/index');
	}
		
}	