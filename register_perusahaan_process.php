<?php
include('config.php');

if(isset($_POST['register'])){
	$user_namaP      = $_POST['user_namaP'];
	$user_emailP     = $_POST['user_emailP'];
	$user_passP  = $_POST['user_passP'];
	
	
	$Email_check = $db->query("SELECT user_emailP  FROM user_perusahaan WHERE user_emailP = '$user_emailP'");
	if($Email_check->num_rows == 0){

	}
	else
	
	{
			$errors['email_error'] = "Sorry this email is already exist";
			$user_emailP = "";
	}
	$errors    = array();
	


	}
	if(!empty($user_namaP) && !empty($user_emailP) && !empty($user_passP)){
		$password = password_hash($user_passP,PASSWORD_DEFAULT);
		$Query = $db->query("INSERT INTO user_perusahaan (user_nameP,user_emailP,user_passwP) VALUES ('$user_nameP','$user_emailP','$user_passP')");
		if($Query){
			header("location:success.php?signup_success='Your acccount is successfully created!'");
		}else{
			echo "<script>alert('Sorry query not work')</script>";
		}
		
	}


?>