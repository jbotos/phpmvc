<?php

class User extends Controller {

	function __construct() {
		parent::__construct();	
		Session::init();
		$logged = Session::get('loggedIn');
		$role = Session::get('role');
		if($logged == false || $role != 'owner') {
			Session::destroy();
			header('location: /login');
			exit;
		}
	}
	
	function index()
	{
		$this->view->userList = $this->model->userList();
		$this->view->render('user/index');	
	}	
	
	public function create()
	{
		$data = array();
		$data["login"] = $_POST['login'];
		$data["password"] = md5($_POST['password']);
		$data["role"] = $_POST['role'];
		
		// do your error checking
		
		$this->model->create($data);
		header('Location: /user/');
	}
	
	public function edit($id)
	{
		$this->view->user = $this->model->userSingleList($id);
		$this->view->render('user/edit');	
	}
	
	public function editSave($id)
	{
		$data = array();
		$data["id"] = $id;
		$data["login"] = $_POST['login'];
		$data["password"] = md5($_POST['password']);
		$data["role"] = $_POST['role'];
		
		// do error checking 
		$this->model->editSave($data);		
		header('Location: /user/');	
	}
	
	public function delete($id)
	{
		$this->model->delete($id);
		header('Location: /user/');
	}
}