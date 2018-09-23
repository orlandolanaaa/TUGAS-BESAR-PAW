<?php


require 'phpmailer/PHPMailerAutoLoad.php';

if(isset($_POST['register'])){
	include('config.php');
	$name            = $_POST['name'];
	$email           = $_POST['email'];
	$password  	 	 = $_POST['password'];
	$password1 		 = password_hash($password,PASSWORD_DEFAULT);
	
	$bytes 			 = openssl_random_pseudo_bytes(2);
	$active			 = bin2hex($bytes);
	
	$Email_check = mysqli_query($con,"SELECT id_perusahaan from user_perusahaan WHERE email='$email'")or die (mysqli_connect_error());
	if(mysqli_num_rows($Email_check)>0){
		echo	'Maaf, Email sudah ada!';
			
	}
	else{
		$input=mysqli_query($con,"INSERT INTO user_perusahaan VALUES(NULL,'$nama', '$email', '$password1', '$active', 0)") or die(mysqli_connect_error());
		if($input)
		{

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


					
					$mail->isHTML(true);                                
					$mail->Subject = 'Dari:  INFOKERJA';
					$mail->Body = '

					Terima Kasih sudah mendaftar di INFOKERJA!
					Silahkan klik link di bawah untuk masuk menyelesaikan proses registrasi

					Klik link di bawah ini:
					https://infokerja.thekingcorp.org/verify.php?active='.$active.'&email='.$email.'

				
						'; 

						$mail->send();
						header("Location: masuk.php");
					return true;
				} catch (Exception $e) {
						
						return false;
						echo "Gagal mengirim";	
				}
			}
		}	
}else{	
	echo 'test';
	echo '<script>window.history.back()</script>';
}

	


	


?>