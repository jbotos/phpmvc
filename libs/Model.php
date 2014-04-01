<?php

class Model {
	

	public function __construct() 
	{
		$this->db = new Database();
	}
	
	public function get($id = NULL, $single = FALSE) {
	
	}
	
	public function save($data, $id = NULL) {
		
		$set_items = '';
		$set_values = '';
		$array_items = '';
			
		// Insert
		if ($id === NULL) {
			
			// create the items to set dynamically 
			foreach($data as $key => $item) {
				if($item !== '') { 
					$set_items .= '`' . $key . '`, ';
					$set_values .= ':' . $key . ', ';
					$array_items[':' . $key] =  $item;
				}
			} 
			$set_items = rtrim($set_items, ', ');
			$set_values = rtrim($set_values, ', ');
			$sth = $this->db->prepare('INSERT INTO ' . $this->_table_name . ' (' . $set_items . ') VALUES (' . $set_values . ')');
			$sth->execute($array_items);
		}
		
		// Update
		else {
			// create the items to set dynamically 
			foreach($data as $key => $item) {
				if($item !== '') { 
					$set_items .= '`' . $key . '` = :' . $key . ', ';
					$array_items[':' . $key] =  $item;
				}
			} 
			$set_items = rtrim($set_items, ', ');	
			$sth = $this->db->prepare('UPDATE ' . $this->_table_name . ' SET ' . $set_items . ' WHERE `id` = :id'); 
			$sth->execute($array_items);			
		}
 
	}
	
 
	public function delete($id)
	{
		if (!$id) {
            return FALSE;
        }
		$sth = $this->db->prepare('DELETE FROM ' . $this->_table_name . ' WHERE id = :id');
		$sth->execute(array(
			':id' => $id, 
		));
	}
 	
}	