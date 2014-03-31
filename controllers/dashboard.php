<?php

class Dashboard extends Controller {

	function __construct() {
		parent::__construct();	
		Session::init();
		$logged = Session::get('loggedIn');
		if($logged == false) {
			Session::destroy();
			header('location: login');
			exit;
		}
		
		$this->view->js = array('public/js/default.js');
	}
	
	function index()
	{
		$this->view->render('dashbaord/index');	
	}
	
	function logout() 
	{
		Session::destroy();
		header('location: ../login');
		exit();
	}
	
	public function xhrInsert() 
	{
		$this->model->xhrInsert();
	}
	
	function xhrGetListings()
	{
		$this->model->xhrGetListings();
	}
	
	function xhrDeleteListing()
	{
		$this->model->xhrDeleteListing();
	}
	
}