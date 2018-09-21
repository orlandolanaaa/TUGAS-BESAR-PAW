<?php
//index.php
include('database_connection.php');

if(!isset($_SESSION["user_id"]))
{
	header("location:login.php");
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
	<link rel="stylesheet" type="text/css" href="css/home.css">

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
            <a href="#" class="navbar-brand">LOGO</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right" style="text-align: center;">
                <li><a class="active" href="#" >Home</a></li>
				<li><a href="#" >Pasang Lowongan</a></li>
				<li><a href="#">Kontak</a></li>
				<li><a href="#" >Tentang Kami</a></li>
				<li style="padding-left: 10px; padding-right: 10px"><button class="btn btn-success navbar-btn" style="width: 100%;">Registrasi</button></li>
				<li style="padding-left: 10px; padding-right: 10px"><button class="btn btn-primary navbar-btn" style="width: 100%;">Login</button></li>
				<li style="padding-right: 40px"></li>
            </ul>
        </div>
    </nav>
</div>

<div class="image">
	<div class="content-text">
		<strong>
			<h1 >Cari Lowongan Pekerjaan</h1>
			<i>
				<h2 >Berdasarkan Lokasi Andaaaa</h2>
			</i>
		</strong>
	</div>
	<div class="search">
			<form role="form" class="advanced-search">
			<div class="row">
				<div class="col-md-11">
					<div class="row">
						<div class="col-md-9">
							<div class="form-group">
								<input type="text" name="q" value="" class="form-control" placeholder="Bidang Pekerjaan">
							</div>
						</div>
							<div class="col-md-3 col-bordered">
								<div class="form-group">
									<select  name="lokasi" id="lokasi" class="form-control" >
										<option value="" selected="selected"><strong>Lokasi</strong></option>
										<option class="level-0" value="aceh">Aceh</option>
										<option class="level-1" value="banda-aceh">&nbsp;&nbsp;&nbsp;Banda Aceh</option>
										<option class="level-1" value="sabang">&nbsp;&nbsp;&nbsp;Sabang</option>
										<option class="level-1" value="subulussalam">&nbsp;&nbsp;&nbsp;Subulussalam</option>
										<option class="level-0" value="bali">Bali</option>
										<option class="level-1" value="badung">&nbsp;&nbsp;&nbsp;Badung</option>
										<option class="level-1" value="denpasar">&nbsp;&nbsp;&nbsp;Denpasar</option>
										<option class="level-1" value="gianyar">&nbsp;&nbsp;&nbsp;Gianyar</option>
										<option class="level-1" value="karangasem">&nbsp;&nbsp;&nbsp;Karangasem</option>
										<option class="level-0" value="banten">Banten</option>
										<option class="level-1" value="cilegon">&nbsp;&nbsp;&nbsp;Cilegon</option>
										<option class="level-1" value="kabupaten-tangerang">&nbsp;&nbsp;&nbsp;Kabupaten Tangerang</option>
										<option class="level-1" value="serang">&nbsp;&nbsp;&nbsp;Serang</option>
										<option class="level-1" value="tangerang">&nbsp;&nbsp;&nbsp;Tangerang</option>
										<option class="level-1" value="tangerang-selatan">&nbsp;&nbsp;&nbsp;Tangerang Selatan</option>
										<option class="level-0" value="bengkulu">Bengkulu</option>
										<option class="level-0" value="jakarta">DKI Jakarta</option>
										<option class="level-1" value="jakarta-barat">&nbsp;&nbsp;&nbsp;Jakarta Barat</option>
										<option class="level-1" value="jakarta-pusat">&nbsp;&nbsp;&nbsp;Jakarta Pusat</option>
										<option class="level-1" value="jakarta-selatan">&nbsp;&nbsp;&nbsp;Jakarta Selatan</option>
										<option class="level-1" value="jakarta-timur">&nbsp;&nbsp;&nbsp;Jakarta Timur</option>
										<option class="level-1" value="jakarta-utara">&nbsp;&nbsp;&nbsp;Jakarta Utara</option>
										<option class="level-0" value="gorontalo">Gorontalo</option>
										<option class="level-0" value="jambi">Jambi</option>
										<option class="level-0" value="jawa-barat">Jawa Barat</option>
										<option class="level-1" value="bandung-barat">&nbsp;&nbsp;&nbsp;Bandung Barat</option>
										<option class="level-1" value="bandung-kabupaten">&nbsp;&nbsp;&nbsp;Bandung Kabupaten</option>
										<option class="level-1" value="bandung-kota">&nbsp;&nbsp;&nbsp;Bandung Kota</option>
										<option class="level-1" value="bekasi">&nbsp;&nbsp;&nbsp;Bekasi</option>
										<option class="level-1" value="bogor">&nbsp;&nbsp;&nbsp;Bogor</option>
										<option class="level-1" value="ciamis">&nbsp;&nbsp;&nbsp;Ciamis</option>
										<option class="level-1" value="cianjur">&nbsp;&nbsp;&nbsp;Cianjur</option>
										<option class="level-1" value="cimahi">&nbsp;&nbsp;&nbsp;Cimahi</option>
										<option class="level-1" value="cirebon">&nbsp;&nbsp;&nbsp;Cirebon</option>
										<option class="level-1" value="depok">&nbsp;&nbsp;&nbsp;Depok</option>
										<option class="level-1" value="garut">&nbsp;&nbsp;&nbsp;Garut</option>
										<option class="level-1" value="indramayu">&nbsp;&nbsp;&nbsp;Indramayu</option>
										<option class="level-1" value="karawang">&nbsp;&nbsp;&nbsp;Karawang</option>
										<option class="level-1" value="kuningan">&nbsp;&nbsp;&nbsp;Kuningan</option>
										<option class="level-1" value="majalengka">&nbsp;&nbsp;&nbsp;Majalengka</option>
										<option class="level-1" value="purwakarta">&nbsp;&nbsp;&nbsp;Purwakarta</option>
										<option class="level-1" value="subang">&nbsp;&nbsp;&nbsp;Subang</option>
										<option class="level-1" value="sukabumi">&nbsp;&nbsp;&nbsp;Sukabumi</option>
										<option class="level-1" value="sumedang">&nbsp;&nbsp;&nbsp;Sumedang</option>
										<option class="level-1" value="tasikmalaya">&nbsp;&nbsp;&nbsp;Tasikmalaya</option>
										<option class="level-0" value="jawa-tengah">Jawa Tengah</option>
										<option class="level-1" value="banyumas">&nbsp;&nbsp;&nbsp;Banyumas</option>
										<option class="level-1" value="batang">&nbsp;&nbsp;&nbsp;Batang</option>
										<option class="level-1" value="boyolali">&nbsp;&nbsp;&nbsp;Boyolali</option>
										<option class="level-1" value="brebes">&nbsp;&nbsp;&nbsp;Brebes</option>
										<option class="level-1" value="demak">&nbsp;&nbsp;&nbsp;Demak</option>
										<option class="level-1" value="grobogan">&nbsp;&nbsp;&nbsp;Grobogan</option>
										<option class="level-1" value="jepara">&nbsp;&nbsp;&nbsp;Jepara</option>
										<option class="level-1" value="karanganyar">&nbsp;&nbsp;&nbsp;Karanganyar</option>
										<option class="level-1" value="kebumen">&nbsp;&nbsp;&nbsp;Kebumen</option>
										<option class="level-1" value="kendal">&nbsp;&nbsp;&nbsp;Kendal</option>
										<option class="level-1" value="klaten">&nbsp;&nbsp;&nbsp;Klaten</option>
										<option class="level-1" value="kudus">&nbsp;&nbsp;&nbsp;Kudus</option>
										<option class="level-1" value="magelang">&nbsp;&nbsp;&nbsp;Magelang</option>
										<option class="level-1" value="pati">&nbsp;&nbsp;&nbsp;Pati</option>
										<option class="level-1" value="pekalongan">&nbsp;&nbsp;&nbsp;Pekalongan</option>
										<option class="level-1" value="pemalang">&nbsp;&nbsp;&nbsp;Pemalang</option>
										<option class="level-1" value="purbalingga">&nbsp;&nbsp;&nbsp;Purbalingga</option>
										<option class="level-1" value="purwodadi">&nbsp;&nbsp;&nbsp;Purwodadi</option>
										<option class="level-1" value="purwokerto">&nbsp;&nbsp;&nbsp;Purwokerto</option>
										<option class="level-1" value="purworejo">&nbsp;&nbsp;&nbsp;Purworejo</option>
										<option class="level-1" value="rembang">&nbsp;&nbsp;&nbsp;Rembang</option>
										<option class="level-1" value="salatiga">&nbsp;&nbsp;&nbsp;Salatiga</option>
										<option class="level-1" value="semarang">&nbsp;&nbsp;&nbsp;Semarang</option>
										<option class="level-1" value="sragen">&nbsp;&nbsp;&nbsp;Sragen</option>
										<option class="level-1" value="sukoharjo">&nbsp;&nbsp;&nbsp;Sukoharjo</option>
										<option class="level-1" value="surakarta">&nbsp;&nbsp;&nbsp;Surakarta / Solo</option>
										<option class="level-1" value="tegal">&nbsp;&nbsp;&nbsp;Tegal</option>
										<option class="level-1" value="ungaran">&nbsp;&nbsp;&nbsp;Ungaran</option>
										<option class="level-1" value="wonogiri">&nbsp;&nbsp;&nbsp;Wonogiri</option>
										<option class="level-0" value="jawa-timur">Jawa Timur</option>
										<option class="level-1" value="banyuwangi">&nbsp;&nbsp;&nbsp;Banyuwangi</option>
										<option class="level-1" value="blitar">&nbsp;&nbsp;&nbsp;Blitar</option>
										<option class="level-1" value="bojonegoro">&nbsp;&nbsp;&nbsp;Bojonegoro</option>
										<option class="level-1" value="gresik">&nbsp;&nbsp;&nbsp;Gresik</option>
										<option class="level-1" value="jember">&nbsp;&nbsp;&nbsp;Jember</option>
										<option class="level-1" value="jombang">&nbsp;&nbsp;&nbsp;Jombang</option>
										<option class="level-1" value="kediri">&nbsp;&nbsp;&nbsp;Kediri</option>
										<option class="level-1" value="kota-batu">&nbsp;&nbsp;&nbsp;Kota Batu</option>
										<option class="level-1" value="lamongan">&nbsp;&nbsp;&nbsp;Lamongan</option>
										<option class="level-1" value="madiun">&nbsp;&nbsp;&nbsp;Madiun</option>
										<option class="level-1" value="magetan">&nbsp;&nbsp;&nbsp;Magetan</option>
										<option class="level-1" value="malang">&nbsp;&nbsp;&nbsp;Malang</option>
										<option class="level-1" value="mojokerto">&nbsp;&nbsp;&nbsp;Mojokerto</option>
										<option class="level-1" value="nganjuk">&nbsp;&nbsp;&nbsp;Nganjuk</option>
										<option class="level-1" value="ngawi">&nbsp;&nbsp;&nbsp;Ngawi</option>
										<option class="level-1" value="pasuruan">&nbsp;&nbsp;&nbsp;Pasuruan</option>
										<option class="level-1" value="ponorogo">&nbsp;&nbsp;&nbsp;Ponorogo</option>
										<option class="level-1" value="probolinggo">&nbsp;&nbsp;&nbsp;Probolinggo</option>
										<option class="level-1" value="sidoarjo">&nbsp;&nbsp;&nbsp;Sidoarjo</option>
										<option class="level-1" value="surabaya">&nbsp;&nbsp;&nbsp;Surabaya</option>
										<option class="level-1" value="trenggalek">&nbsp;&nbsp;&nbsp;Trenggalek</option>
										<option class="level-1" value="tuban">&nbsp;&nbsp;&nbsp;Tuban</option>
										<option class="level-1" value="tulungagung">&nbsp;&nbsp;&nbsp;Tulungagung</option>
										<option class="level-0" value="kalimantan-barat">Kalimantan Barat</option>
										<option class="level-1" value="ketapang">&nbsp;&nbsp;&nbsp;Ketapang</option>
										<option class="level-1" value="pontianak">&nbsp;&nbsp;&nbsp;Pontianak</option>
										<option class="level-0" value="kalimantan-selatan">Kalimantan Selatan</option>
										<option class="level-1" value="banjarbaru">&nbsp;&nbsp;&nbsp;Banjarbaru</option>
										<option class="level-1" value="banjarmasin">&nbsp;&nbsp;&nbsp;Banjarmasin</option>
										<option class="level-1" value="tabalong">&nbsp;&nbsp;&nbsp;Tabalong</option>
										<option class="level-0" value="kalimantan-tengah">Kalimantan Tengah</option>
										<option class="level-0" value="kalimantan-timur">Kalimantan Timur</option>
										<option class="level-1" value="balikpapan">&nbsp;&nbsp;&nbsp;Balikpapan</option>
										<option class="level-1" value="bontang">&nbsp;&nbsp;&nbsp;Bontang</option>
										<option class="level-1" value="kutai-kartanegara">&nbsp;&nbsp;&nbsp;Kutai Kartanegara</option>
										<option class="level-1" value="kutai-timur">&nbsp;&nbsp;&nbsp;Kutai Timur</option>
										<option class="level-1" value="samarinda">&nbsp;&nbsp;&nbsp;Samarinda</option>
										<option class="level-0" value="kalimantan-utara">Kalimantan Utara</option>
										<option class="level-1" value="tanjung-selor">&nbsp;&nbsp;&nbsp;Tanjung Selor</option>
										<option class="level-1" value="tarakan">&nbsp;&nbsp;&nbsp;Tarakan</option>
										<option class="level-0" value="kepulauan-bangka-belitung">Kepulauan Bangka Belitung</option>
										<option class="level-1" value="bangka">&nbsp;&nbsp;&nbsp;Bangka</option>
										<option class="level-1" value="belitung">&nbsp;&nbsp;&nbsp;Belitung</option>
										<option class="level-1" value="pangkal-pinang">&nbsp;&nbsp;&nbsp;Pangkal Pinang</option>
										<option class="level-0" value="kepulauan-riau">Kepulauan Riau</option>
										<option class="level-1" value="batam">&nbsp;&nbsp;&nbsp;Batam</option>
										<option class="level-1" value="bintan">&nbsp;&nbsp;&nbsp;Bintan</option>
										<option class="level-1" value="tanjung-pinang">&nbsp;&nbsp;&nbsp;Tanjung Pinang</option>
										<option class="level-0" value="lampung">Lampung</option>
										<option class="level-1" value="bandar-lampung">&nbsp;&nbsp;&nbsp;Bandar Lampung</option>
										<option class="level-0" value="maluku">Maluku</option>
										<option class="level-1" value="ambon">&nbsp;&nbsp;&nbsp;Ambon</option>
										<option class="level-1" value="tual">&nbsp;&nbsp;&nbsp;Tual</option>
										<option class="level-0" value="nusa-tenggara-barat">Nusa Tenggara Barat</option>
										<option class="level-1" value="bima">&nbsp;&nbsp;&nbsp;Bima</option>
										<option class="level-1" value="dompu">&nbsp;&nbsp;&nbsp;Dompu</option>
										<option class="level-1" value="lombok">&nbsp;&nbsp;&nbsp;Lombok</option>
										<option class="level-1" value="mataram">&nbsp;&nbsp;&nbsp;Mataram</option>
										<option class="level-1" value="sumbawa">&nbsp;&nbsp;&nbsp;Sumbawa</option>
										<option class="level-0" value="nusa-tenggara-timur">Nusa Tenggara Timur</option>
										<option class="level-1" value="kupang">&nbsp;&nbsp;&nbsp;Kupang</option>

										<option class="level-1" value="manggarai">&nbsp;&nbsp;&nbsp;Manggarai</option>
										<option class="level-1" value="maumere">&nbsp;&nbsp;&nbsp;Maumere</option>
										<option class="level-0" value="papua">Papua</option>
										<option class="level-1" value="jayapura">&nbsp;&nbsp;&nbsp;Jayapura</option>
										<option class="level-1" value="merauke">&nbsp;&nbsp;&nbsp;Merauke</option>
										<option class="level-0" value="papua-barat">Papua Barat</option>
										<option class="level-1" value="manokwari">&nbsp;&nbsp;&nbsp;Manokwari</option>
										<option class="level-1" value="raja-ampat">&nbsp;&nbsp;&nbsp;Raja Ampat</option>
										<option class="level-1" value="sorong">&nbsp;&nbsp;&nbsp;Sorong</option>
										<option class="level-0" value="riau">Riau</option>
										<option class="level-1" value="bengkalis">&nbsp;&nbsp;&nbsp;Bengkalis</option>
										<option class="level-1" value="dumai">&nbsp;&nbsp;&nbsp;Dumai</option>
										<option class="level-1" value="pekanbaru">&nbsp;&nbsp;&nbsp;Pekanbaru</option>
										<option class="level-1" value="pelalawan">&nbsp;&nbsp;&nbsp;Pelalawan</option>
										<option class="level-0" value="sulawesi-selatan">Sulawesi Selatan</option>
										<option class="level-1" value="makassar">&nbsp;&nbsp;&nbsp;Makassar</option>
										<option class="level-1" value="palopo">&nbsp;&nbsp;&nbsp;Palopo</option>
										<option class="level-1" value="sengkang">&nbsp;&nbsp;&nbsp;Sengkang</option>
										<option class="level-1" value="sidenreng-rappang">&nbsp;&nbsp;&nbsp;Sidenreng Rappang</option>
										<option class="level-1" value="tana-toraja">&nbsp;&nbsp;&nbsp;Tana Toraja</option>
										<option class="level-0" value="sulawesi-tengah">Sulawesi Tengah</option>
										<option class="level-1" value="banggai">&nbsp;&nbsp;&nbsp;Banggai</option>
										<option class="level-0" value="sulawesi-utara">Sulawesi Utara</option>
										<option class="level-1" value="manado">&nbsp;&nbsp;&nbsp;Manado</option>
										<option class="level-0" value="sumatera-barat">Sumatera Barat</option>
										<option class="level-1" value="kepulauan-mentawai">&nbsp;&nbsp;&nbsp;Kepulauan Mentawai</option>
										<option class="level-1" value="padang">&nbsp;&nbsp;&nbsp;Padang</option>
										<option class="level-1" value="pasaman">&nbsp;&nbsp;&nbsp;Pasaman</option>
										<option class="level-1" value="payakumbuh">&nbsp;&nbsp;&nbsp;Payakumbuh</option>
										<option class="level-1" value="solok">&nbsp;&nbsp;&nbsp;Solok</option>
										<option class="level-0" value="sumatera-selatan">Sumatera Selatan</option>
										<option class="level-1" value="lahat">&nbsp;&nbsp;&nbsp;Lahat</option>
										<option class="level-1" value="musi-banyuasin">&nbsp;&nbsp;&nbsp;Musi Banyuasin</option>
										<option class="level-1" value="palembang">&nbsp;&nbsp;&nbsp;Palembang</option>
										<option class="level-1" value="prabumulih">&nbsp;&nbsp;&nbsp;Prabumulih</option>
										<option class="level-0" value="sumatera-utara">Sumatera Utara</option>
										<option class="level-1" value="binjai">&nbsp;&nbsp;&nbsp;Binjai</option>
										<option class="level-1" value="deli-serdang">&nbsp;&nbsp;&nbsp;Deli Serdang</option>
										<option class="level-1" value="kabanjahe">&nbsp;&nbsp;&nbsp;Kabanjahe</option>
										<option class="level-1" value="medan">&nbsp;&nbsp;&nbsp;Medan</option>
										<option class="level-1" value="nias">&nbsp;&nbsp;&nbsp;Nias</option>
										<option class="level-1" value="padangsidempuan">&nbsp;&nbsp;&nbsp;Padangsidempuan</option>
										<option class="level-1" value="pematang-siantar">&nbsp;&nbsp;&nbsp;Pematang Siantar</option>
										<option class="level-1" value="serdang-bedagai">&nbsp;&nbsp;&nbsp;Serdang Bedagai</option>
										<option class="level-1" value="sibolga">&nbsp;&nbsp;&nbsp;Sibolga</option>
										<option class="level-1" value="simalungun">&nbsp;&nbsp;&nbsp;Simalungun</option>
										<option class="level-0" value="yogyakarta">Yogyakarta</option>
										<option class="level-1" value="bantul">&nbsp;&nbsp;&nbsp;Bantul</option>
										<option class="level-1" value="sleman">&nbsp;&nbsp;&nbsp;Sleman</option>
										<option class="level-1" value="wonosari">&nbsp;&nbsp;&nbsp;Wonosari</option>
									</select>
								</div>
							</div>
					</div>
				</div>
				<div class="col-md-1">
					<button type="submit" class="btn btn-primary btn-block btn-search"><i class="glyphicon glyphicon-search desktop-only"></i>
					</button>
				</div>
			</div>
		</form>
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