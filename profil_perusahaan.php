<!doctype html>
<html>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/profile_perusahaan.css">
<script type="text/javascript" src="js/perusahaan.js"></script>
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
			<li><a href="index.php" >Home</a></li>
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
					<li><a href="profile_perusahaan.php">Edit profile</a></li>
				  <li><a href="index.php">Logout</a></li>
				</ul>
			  </div>
			
			</li>
		</ul>
			
        </div>
    </nav>
</div>
	<div class="image5">
		<div class="content-text">
			<strong>
				<h1 style="padding-left: 10px; padding-right: 10px; margin-top:5px;">Profil Perusahaan</h1><br>
				<p width="200px"><img  src="img\no_picture.gif" class="img-circle" style="width:25%; margin-top:15px;"></p>
				
				<div>
					<form>
						<label  for="namaperusahaan" style="padding-left: 15px; padding-right: 15px">Nama Perusahaan</label>
						<input  type="text" id="namaperusahaan" name="namaperusahaan"><br>
						<label  for="emailperusahaan" style="padding-left: 15px; padding-right: 15px">Email</label>
						<input type="text" id="emailperusahaan" name="emailperusahaan"><br>
						<label  for="lokasiperusahaan" style="padding-left: 15px; padding-right: 15px">Lokasi</label>
						<input type="text" id="lokasiperusahaan" name="lokasiperusahaan"><br>

						<button class="btnSimpan_ProfilPerusahaan" style="left: 10%; ">Simpan >></button>	

					</form>
			</div>				
			</strong>
		</div>
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
