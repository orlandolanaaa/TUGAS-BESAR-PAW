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
    
	$query="INSERT INTO lowongan VALUES (NULL,'$nama','$bidangpekerjaan','$lokasi',
	'$pendidikan','$deskripsi','$id',NULL)";
	$result=mysqli_query($db,$query);
	
	echo 'data berhasil dimasukan';
}else {
    echo'tidak berhasil memasukan lowongan';

}
?>
