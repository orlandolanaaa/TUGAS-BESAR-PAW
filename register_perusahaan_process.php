<?php
include('config.php');

if(isset($_SESSION['id_perusahaan']))
{
	header("location:home.php");
}

$message = '';

if(isset($_POST["register"]))
{
	$query = "
	SELECT * FROM user_perusahaan 
	WHERE user_email = :user_emailP
	";
	$statement = $connect->prepare($query);
	$statement->execute(
		array(
			':user_emailP'	=>	$_POST['user_emailP']
		)
	);
	$no_of_row = $statement->rowCount();
	if($no_of_row > 0)
	{
		$message = '<label class="text-danger">Email Already Exits</label>';
	}
	else
	{
		$user_passP = rand(100000,999999);
		$user_encrypted_password = password_hash($user_passP, PASSWORD_DEFAULT);
		$user_activeP = md5(rand());
		$insert_query = "
		INSERT INTO user_perusahaan 
		(user_namaP, user_emailP, user_passP, user_activeP, user_statusP) 
		VALUES (:user_namaP, :user_emailP, :user_passP, :user_activeP, :user_statusP)
		";
		$statement = $connect->prepare($insert_query);
		$statement->execute(
			array(
				':user_namaP'			=>	$_POST['user_namaP'],
				':user_emailP'			=>	$_POST['user_emailP'],
				':user_passP'		=>	$user_encrypted_password,
				':user_active'	=>	$user_active,
				':user_statusP'	=>	'not verified'
			)
		);
		$result = $statement->fetchAll();
		if(isset($result))
		{
			$base_url = "http://localhost/tutorial/email-address-verification-script-using-php/";  //change this baseurl value as per your file path
			$mail_body = "
			<p>Hi ".$_POST['user_namaP'].",</p>
			<p>Thanks for Registration. Your password is ".$user_passP.", This password will work only after your email verification.</p>
			<p>Please Open this link to verified your email address - ".$base_url."email_verification.php?activation_code=".$user_activeP."
			<p>Best Regards,<br />Webslesson</p>
			";
			require 'class/class.phpmailer.php';
			$mail = new PHPMailer;
			$mail->IsSMTP();								//Sets Mailer to send message using SMTP
			$mail->Host = 'smtpout.secureserver.net';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
			$mail->Port = '80';								//Sets the default SMTP server port
			$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
			$mail->Username = 'xxxxxxxx';					//Sets SMTP username
			$mail->Password = 'xxxxxxxx';					//Sets SMTP password
			$mail->SMTPSecure = '';							//Sets connection prefix. Options are "", "ssl" or "tls"
			$mail->From = 'info@kerja.info';			//Sets the From email address for the message
			$mail->FromName = 'infoKerja';					//Sets the From name of the message
			$mail->AddAddress($_POST['user_emailP'], $_POST['user_namaP']);		//Adds a "To" address			
			$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
			$mail->IsHTML(true);							//Sets message type to HTML				
			$mail->Subject = 'Email Verification';			//Sets the Subject of the message
			$mail->Body = $mail_body;							//An HTML or plain text message body
			if($mail->Send())								//Send an Email. Return true on success or false on error
			{
				$message = '<label class="text-success">Register Done, Please check your mail.</label>';
			}
		}
	}
}

?>