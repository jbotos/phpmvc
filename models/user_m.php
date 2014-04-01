<?php

class User_Model extends Model
{
	
	protected $_table_name = 'users';
	public $rules = array();	
 
	public function __construct()
	{
		parent::__construct();
	}
	
	public function userList() 
	{
		$sth = $this->db->prepare('SELECT id, login, role FROM users');
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();
		return $sth->fetchAll();
	}
	
	public function userSingleList($id) 
	{
		$sth = $this->db->prepare('SELECT id, login, role FROM users WHERE id = :id');
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute(array(
			':id' => $id, 
		));
		return $sth->fetch();
	}
}
 