<?php 
session_start();
include 'config.php';
if(isset($_POST['login'])){
	$user_emailP = $_POST['email'];
	$user_passP = $_POST['password'];
	$errors = array();
	$query = $db->query("SELECT * FROM user_perusahaan WHERE user_emailP = '$user_emailP'");
	 
	if($query->num_rows == 0){
		$errors['wrong_email'] = "Enter correct email";
	}else{
		$r = $query->fetch_assoc();
		$hash_password = $r['user_passP'];
		if(!password_verify($password, $hash_password)){
         $errors['password_wrong'] = "Your password is wrong";
		}else{
			$_SESSION['user_login'] = $user_emailP;
			header("location:home.php");
		}
	}
}

 ?>