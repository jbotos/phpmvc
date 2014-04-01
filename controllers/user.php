<?php

class User extends Controller {

	public $error = array();
	
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
	
	public function edit($id)
	{
		$this->view->user = $this->model->userSingleList($id);
		$this->view->render('user/edit');	
	}
	
	public function save($id = NULL) {
		
		$data["id"] = $id;
		$data["login"] = $_POST['login'];
		$data["password"] = $_POST['password'];
		$data["role"] = $_POST['role'];
		
		if($data["login"] == '') {
			$this->error["validation"] = "Username is required.";	
			Session::set('error', $this->error);
		} else {		
			Session::set('error', '');
			$password = md5($password);
			$this->model->save($data, $id);
		}
		header('Location: /user/');	
	}
	
	public function delete($id)
	{
		$this->model->delete($id);
		header('Location: /user/');
	}
}