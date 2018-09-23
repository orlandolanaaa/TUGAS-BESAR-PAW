<?php

    include("config.php");
    
    $active = $_GET['active'];

    $search = mysqli_query($db, "SELECT user_statusP FROM user_perusahaan WHERE user_activeP='$active'") or die(mysqli_connect_error());
    $row = mysqli_fetch_assoc($search);

    
	//if($row['status']=='0'){
        mysqli_query($db, "UPDATE user_perusahaan SET user_statusP='1' WHERE user_activeP='$active'") or die(mysqli_connect_error());
        echo 'Akun anda sudah aktif!';
		header('Location:masuk.php');
   // }else{
        //echo 'Masih gagal untuk verifikasi';
    //}
?>