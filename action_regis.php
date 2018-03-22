<?php
require_once 'proses_regis.php';
 
	if(isset($_POST['submit'])){	
		$username = $_POST['username'];
		$pass  = $_POST['pass'];
		$email  = $_POST['email'];
		$user_code='$user_code' ;
		$date_reg = date("Y-m-d H:i:s");

		$conn = new action_db();
		$regis= $conn->create($user_code,$username,$pass,$email,$date_reg);

		if ($regis) {
			echo 'Registration successful <a href="index.php">Click here</a> to login';
		} else {
			echo 'Registration unsuccessful <a href="register.php">Click here</a> to login';
		}



	}	

?>