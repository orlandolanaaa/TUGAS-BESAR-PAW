<?php
	session_start();
	include('config.php');
	
	$id=$_SESSION['id'];
	$name=$_SESSION['name'];
	
	$query="SELECT id_perusahaan from user_perusahaan where id_perusahaan='$id'  ";
	$result=mysqli_query($db,$query);

	if($result==NULL)
	{
		echo 'anda belom login sebagai perusahaan!';
		header("masuk.php");
	}else
	{
		//echo 'welcome perusahaan "'.$name.'"';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/pasang_lowongan.css">

</head> 
<body>
<div>
    <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
			<a href="#" class="navbar-brand"><img src="img/logo.png" style="width:85px;"></a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            
            <ul class="nav navbar-nav navbar-right" style="text-align: center;">
				<li><a class="active" href="index.php" >Home</a></li>
				<li><a href="pasang_lowongan.php" >Pasang Lowongan</a></li>
				<li><a href="contact_us.php">Kontak</a></li>
				<li><a href="tentang_kami.php" >Tentang Kami</a></li>
			<li>
				<img src="img/no_picture.gif" style="width: 30px; margin-left: 20px; margin-top: 10px;">
			
			</li>
			<li style="padding-right: 20px;">
				<div class="dropdown">
				<button class="btn btn-link dropdown-toggle" type="button" data-toggle="dropdown" style="text-decoration: none; color: white;margin-top:10px">Perusahaan A
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="profil_pelamar.php">Edit profile</a></li>
				  <li><a href="index.php">Logout</a></li>
				</ul>
			  </div>
			
			</li>
		</ul>
        </div>
    </nav>
</div>

<div class="image">
	<div class="content-text">
		<strong>
			<h1>Tambah Lowongan Pekerjaan</h1>
			<i>
				<h2>bagi para pelamar pekerjaan</h2>
			</i>
		</strong>
	</div>
			
			<a href="tambah_lowongan.php" style="margin: 0; padding: 0;">
			<button class="btn btn-success navbar-btn btn-center" >
				<strong>TAMBAH LOWONGAN >></strong>
			</button></a>

			<br>
			<a href="lihat_pelamar.php" style="margin: 0; padding: 0;">
			<button class="btn btn-primary navbar-btn btn-left">
				<strong>LIHAT PELAMAR >></strong>
			</button></a>

			<a href="edit_lowongan.php" style="margin: 0; padding: 0;">
			<button class="btn btn-primary navbar-btn btn-right">
				<strong>EDIT LOWONGAN >></strong>
			</button></a>

		<strong>
			<p class="p-left">Lihat Calon Pelamar</p>
			<p class="p-right">Edit Data Lowongan<br></p>
		</strong>
		
	
</div>
<div class="footer" >
	<div class="copyright">
		Hak Cipta © 2018 infoKerja.com
	</div>
	<div class="sosial">
		<ul>
			<li style="display: inline;">
				<a href="https://www.facebook.com/">
					<img class="icon" src="img/facebook-3-64.png">
				</a>
			</li>
			<li style="display: inline;">
				<a href="https://twitter.com">
					<img class="icon" src="img/twitter-3-64.png">
				</a>
			</li>
			<li style="display: inline;">
				<a href="https://www.linkedin.com">
					<img class="icon" src="img/linkedin-3-64.png">
				</a>
			</li>
			<li style="display: inline;">
				<a href="https://www.instagram.com">
					<img class="icon" src="img/instagram-64.png">
				</a>
			</li>
			<li style="display: inline;">
				<a href="https://www.gmail.com">
					<img class="icon" src="img/email-13-64.png">
				</a>
			</li>
			<li style="display: inline;">
				<a href="https://plus.google.com">
					<img class="icon" src="img/google-plus-4-32.ico">
				</a>
			</li>
		
		</ul>
	</div>
</div>

	
</body>
</html>                            