<?php

    include("config.php");
    
    $active = $_GET['active'];

    $search = mysqli_query($db, "SELECT status FROM user_pelamar WHERE active='$active'") or die(mysqli_connect_error());
    //$row = mysqli_fetch_assoc($search);

    //if($row['status']=='0'){
        mysqli_query($db, "UPDATE user_pelamar SET statusP='1' WHERE active='$active'") or die(mysqli_connect_error());
        echo 'Akun anda sudah aktif!';
		header('Location:masuk.php');
    //}else{
        //echo 'Masih gagal untuk verifikasi';
    //}
?>