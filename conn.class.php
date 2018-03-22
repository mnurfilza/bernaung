<?php
/**
* 
*/
/**
* 
*/
define('db_host', 'localhost');
define('db_user', 'root');
define('db_pass', '');
define('db_name', 'bernaung');

class database 
{
	public $host = db_host;
	public $user = db_user;
	public $pass = db_pass;
	public $db = db_name;
	public $conn;
	public $error;
	
	public function connect(){
    $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
    if (!$this->conn ) {
    	$this->error = "Fatal Error: Can't connect to database" . $this->connect->connect_error();    
    	return false;
    }
  } 

}


?>