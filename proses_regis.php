<?php
require 'conn.class.php';
/**
* 
*/
class action_db extends database
{
	
	function __construct()
	{
		$this->connect();
	}

	public function create($user_code,$username,$pass,$email,$date_reg)
	{			
				$pass=md5($pass);
				$sql= "SELECT max(username) as kode FROM user where username='$username' OR email ='$email'ORDER BY user_code desc";
				$chek = $this->conn->query($sql);
				$user_id = mysqli_fetch_array($chek);
				$count= $chek->num_rows;


					if ($count == 0){
						$query = "INSERT INTO user VALUES ('$user_code','$username','$pass','$email','$date_reg')" ;
						$res =mysqli_query($this->conn ,$query) or die($this->conn->error);
						return $res;
						} else {
							return false;
						} 
							
						 
					
					
	}


}	


/**
* 
*/
class user extends database
{
	public function __construct()
	{
		$this->connect();
	}
	
			public function chek_user($username,$pass)
	{
				$sql = "SELECT* FROM user where username ='$username' AND pass='$pass";

				$chek = mysqli_query($this->conn, $sql);
				$result = mysqli_fetch_array($chek);
				$count = $result->num_rows;

				if ($count ==1) {
					session_register('username');
					session_register('pass');
					$_SESSION['username'] = true ;
					$_SESSION['username'] = $result['username'];
					$_SESSION['pass']=$result['pass'];

					return true;
				} else {
					return false;
				}
	}
	
			public function get_sesi()
				{
					return $_SESSION['username'];
				}
			public function logout()
				{
				$_SESSION['username']=false;
				session_destroy();
				}
}

?>		
