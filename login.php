<?php 

include 'config.php';
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	//buat ngecek ke tabel perusahaan
	$query="SELECT status FROM user_perusahaan where email='".$email."'";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($result);
	//buat ngecek ke tabel pelamar
	$query2="SELECT status FROM user_pelamar where email='".$email."'";
	$result2=mysqli_query($con,$query2);
	$row2=mysqli_fetch_assoc($result2);

	if(mysqli_num_rows($result) == 0 && mysqli_num_rows($result2) == 0 ){
		echo 'Anda belum register';
	}else{
		
			if($row['user_statusP']=='1'){
				//ini kalo misalnya dia masuk ke tabel user_perusahaan
				$query="SELECT password FROM user_perusahaan WHERE email='".$email."'";
                $result=mysqli_query($con,$query);
				$row=mysqli_fetch_assoc($result); 
				
					if(password_verify($password,$row['password'])){
                    $query="SELECT * FROM register WHERE email='".$email."'";
                    $result=mysqli_query($con,$query); 
                    $row=mysqli_fetch_assoc($result);

                    session_start();
                    $_SESSION["id"] = $row['id_perusahaan'];
                    $_SESSION["email"] = $row['user_emailP'];
					$_SESSION["nama"] = $row['user_namaP'];
                    $_SESSION["status"] = $row['status'];

					header("Location: after_login_perusahaan.php");
				}else{
					echo 'bukan di perusahaan';
				}
			}
			else if ($row2['status']=='1'){
				//ini kalo misalnya dia masuk ke tabel user_pelamar
					$query="SELECT password FROM user_pelamar WHERE email='".$email."'";
               	 	$result=mysqli_query($con,$query);
					$row=mysqli_fetch_assoc($result); 
				
					if(password_verify($password,$row['password'])){
                    $query="SELECT * FROM user_pelamar WHERE email='".$email."'";
                    $result=mysqli_query($con,$query); 
                    $row=mysqli_fetch_assoc($result);

                    session_start();
                    $_SESSION["id"] = $row['id_pelamar'];
                    $_SESSION["email"] = $row['email'];
					$_SESSION["nama"] = $row['nama'];
					$_SESSION["status"] = $row['status'];
					header("Location: after_login.php");
					
				}else{
					echo 'bukan di pelamar';
				}
			}

		}

}else{
	echo 'Gagal masuk phpnya';
}

 ?>