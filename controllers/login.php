<?php

class Login extends Controller {

	function __construct() {
		parent::__construct();	
	}
	
	function index() 
	{
		if(session_id('loggedIn')) {
			header('Locaiton /dashbaord');
		} else {
			$this->view->render('login/index');
		}
		//echo '<pre>';
		//print_r($_SESSION);	
	}
 
	
	function run()
	{
		$this->model->run();
	}
	

}