<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Default_Model extends ZP_Model {
	
	public function __construct() {
		$this->Db = $this->db();
		
		$this->helpers();
	
		$this->table = "contacts";
	}

	public function contact($id) {
		// return $this->Db->findBy("ID_Contact", $id, "contacts");
		return $this->Db->find($id, "contacts");
		return $this->Db->query("SELECT * FROM contacts WHERE ID_Contact = " . $id);
	}
	
	public function contacts() {
		return $this->Db->findAll($this->table, NULL, "ID_Contact DESC");
	}
	
	public function add() {
		
		if(!POST("name") or !POST("email")) {
			return getAlert("Incorrect Name and/or Email", "error");
		}	
		
		$data = array( 
			"Name"      =>  POST("name"),
			"Email"     =>  POST("email"),
			"Telephone" => POST("telephone"),
			"Address"   => POST("address")
		);
		
		$insert = $this->Db->insert($this->table, $data);
		
		
		if($insert) {
			return getAlert("The contact has been saved correctly", "success");
		}
		
		return $insert;
	}
	
}
