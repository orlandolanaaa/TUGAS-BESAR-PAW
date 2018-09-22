<?php
include('config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';

if(isset($_POST['register'])){
	$user_namaP      = $_POST['user_namaP'];
	$user_emailP     = $_POST['user_emailP'];
	$user_passP  	 = $_POST['user_passP'];
	
	$Email_check = $db->query("SELECT user_emailP  FROM user_perusahaan WHERE user_emailP = '$user_emailP'");
	if($Email_check->num_rows == 0){

	}
	else{
			$errors['email_error'] = "Sorry this email is already exist";
			$user_emailP = "";
	}
	$errors    = array();
	
	if(!empty($user_namaP) && !empty($user_emailP) && !empty($user_passP)){
		$password = password_hash($user_passP,PASSWORD_DEFAULT);
		$Query = $db->query("INSERT INTO user_perusahaan (user_nameP,user_emailP,user_passwP) VALUES ('$user_nameP','$user_emailP','$user_passP')");
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
				$mail->Password = 'infokerja@TheKing~18';                           
				$mail->SMTPSecure = 'ssl';                            
				$mail->Port = 465 ;                                    		
				$mail->setFrom('infokerja@thekingcorp.org', 'Bequeen');
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
				https://bequuen.thekingcorp.org/verify.php?active='.$active.'&email='.$email.'

			
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