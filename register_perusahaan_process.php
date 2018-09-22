<?php
include('config.php');

require 'phpmailer/PHPMailerAutoLoad.php';

if(isset($_POST['register'])){
	$user_namaP      = $_POST['user_namaP'];
	$user_emailP     = $_POST['user_emailP'];
	$user_passP  	 = $_POST['user_passP'];
	$password 		 = password_hash($user_passP,PASSWORD_DEFAULT);
	$bytes 			 = openssl_random_pseudo_bytes(2);
	$active			 = bin2hex($bytes);
	$Email_check = $db->query("SELECT user_emailP  FROM user_perusahaan WHERE user_emailP = '$user_emailP'");
	if($Email_check->num_rows == 0){
			
	}
	else{
			$errors['email_error'] = "Sorry this email is already exist";
			$user_emailP = "";
	}

	
	if(!empty($user_namaP) && !empty($user_emailP) && !empty($user_passP)){
		
		$Query = $db->query("INSERT INTO user_perusahaan  VALUES ('$user_nameP','$user_emailP','$user_passP')");
		if($Query){
			header("location:success.php?signup_success='Your acccount is successfully created!'");
		}else{
			echo "<script>alert('Sorry query not work')</script>";
		}

		$mail = new PHPMailer(true);                              
			try {
				$mail->SMTPDebug = 0;                                 
				$mail->isSMTP();                                      
				$mail->Host = 'kakuna.rapidplex.com;www.thekingcorp.org';  
				$mail->SMTPAuth = true;                              	
				$mail->Username = 'infokerja@thekingcorp.org';                 
				$mail->Password = 'infokerja12';                           
				$mail->SMTPSecure = 'ssl';                            
				$mail->Port = 465 ;                                    		
				$mail->setFrom('infokerja@thekingcorp.org', 'infokerja');
				$mail->addAddress($email);               
				$mail->addReplyTo('noreply@thekingcorp.org', 'noreply');
				$mail->addCC('infokerja@thekingcorp.org');
				$mail->addBCC('infokerja@thekingcorp.org');


				
				$mail->isHTML(true);                                 //set email format
				$mail->Subject = 'Dari:  INFOKERJA';
				$mail->Body = '

				Terima Kasih sudah mendaftar di INFOKERJA!
				Silahkan klik link di bawah untuk masuk menyelesaikan proses registrasi

				Klik link di bawah ini:
				https://infokerja.thekingcorp.org/verify.php?active='.$active.'&email='.$email.'

			
					'; 

					$mail->send();
					header("Location: login.php");
				return true;
			} catch (Exception $e) {
					
					return false;
					echo "gagal mengirim";	
			}


	}
}
	


?>