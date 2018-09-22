<?php
include('config.php');

if(isset($_POST['register'])){
	$username    = $_POST['name'];
	$email       = $_POST['email'];
	$password  	 = $_POST['password'];
	
	$Email_check = $db->query("SELECT email  FROM user_pelamar WHERE email = '$email'");
	if($Email_check->num_rows == 0){

	}
	else
	
	{
			$errors['email_error'] = "Sorry this email is already exist";
			$email = "";
	}
	$errors    = array();
	
	}
	if(!empty($username) && !empty($email) && !empty($password)){
		$password = password_hash($password,PASSWORD_DEFAULT);
		$Query = $db->query("INSERT INTO user_perusahaan (user_nameP,user_emailP,user_passwP) VALUES 
        ('$username','$email','$password')");
		if($Query){
			header("location:success.php?signup_success='Your acccount is successfully created!'");
		}else{
			echo "<script>alert('Sorry query not work')</script>";
		}
		
	}


?>