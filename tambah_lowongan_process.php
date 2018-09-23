<?php

include 'config.php';
if(isset($_POST['tambah'])){
	session_start();
	
    $id=$_SESSION["id"];//nyimpen id session yang login buat masuk ke tabel lowongan
    //nyimpen semua inputan
    $nama               =$_POST['namaperusahaan'];
    $bidangpekerjaan    =$_POST['bidangpekerjaan']; 
    $lokasi             =$_POST['lokasi'];
    $pendidikan         =$_POST['pendidikan'];
    $deskripsi          =$_POST['deskripsi'];
    
    
	$query="INSERT INTO Lowongan VALUES (NULL,'$nama','$bidangpekerjaan','$lokasi','$pendidikan','$deskripsi','$id')";
	echo 'data berhasil dimasukan';
}else {
    echo'tidak berhasil memasukan lowongan';

}
?>
