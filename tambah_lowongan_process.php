<?php

session_start();
include('config.php');
if(isset($_POST['tambah'])){

	$id=$_SESSION["id"];//nyimpen id session yang login buat masuk ke tabel lowongan
    //nyimpen semua inputan
    $nama               =$_POST['namaperusahaan'];
    $bidangpekerjaan    =$_POST['bidangpekerjaan']; 
    $lokasi             =$_POST['lokasi'];
    $pendidikan         =$_POST['pendidikan'];
    $deskripsi          =$_POST['deskripsi'];
    
	
	$result=mysqli_query($db,"INSERT INTO Lowongan VALUES (NULL,'$nama','$bidangpekerjaan','$lokasi',
	'$pendidikan','$deskripsi','$id')");
	
    echo 'data berhasil dimasukan';
    header('Location:after_login_perusahaan.php');
}else {
    echo'tidak berhasil memasukan lowongan';

}
?>
