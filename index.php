<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan Smartphone</title>
	<meta property="og:image" content="assets/image/laptop.jpg" />
	<meta name="description" content="SMAPSIS adalah aplikasi Sistem Pendukung Keputusan Laptop berbasis Metode Topsis">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<script>
	$(document).ready(function(){
	  $(".button-collapse").sideNav();
	  $(".dropdown-button").dropdown();
	});
	</script>
</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
						<div class="nav-wrapper">
								<ul class="left" style="margin-left: -52px;">
									<li><a class="active" href="index.php">HOME</a></li>
									<li><a href="rekomendasi.php">CARI SMARTPHONE</a></li>
									<li><a href="daftar_hp.php">LIST SMARTPHONE</a></li>
									<li><a href="#about">DESKRIPSI</a></li>
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
    <!-- Body Start -->

		<!-- Jumbotron Start -->
		<div id="index-banner" class="parallax-container">
			<div class="section no-pad-bot">
				<div class="container">
					<h1 class="header jarak center white-text" style="font-size: 40px">APLIKASI SISTEM PENDUKUNG KEPUTUSAN</h1>
					<div class="row center">
						<h5 class="header jarak-button col s12 light" style="margin-bottom: 0px; font-size: 26px">PEMILIHAN SMARTPHONE</h5>
					</div>
					<div class="row center" \>
								<a href="rekomendasi.php" id="download-button" class="waves-effect waves-light btn-large" style="margin-top: 40px">Masukkan Rekomendasi</a>
							</div>
				</div>
			</div>
			<div class="parallax"><img src="assets/image/pixel.jpg" alt="Laptop"></div>
		</div>
		<!-- Jumbotron End -->

	<!-- Info Start -->
	<div style="background-color: white">
		<div class="container">
		    <div class="section-card" style="padding: 36px 0px">
		    	<div class="row">
		    		<div class="col s6">
			    		<center><h5 class="header" style="margin-left: 0px; margin-bottom: 0px; margin-top: 25px; color: #635c73">PENJELASAN APLIKASI</h5></center><br>
			    		<p style="text-align: justify; padding-right: 16px;">Aplikasi ini digunakan sebagai sistem pendukung keputusan dalam pemilihan smartphone dengan menggunakan metode TOPSIS. Aplikasi ini dibangun dengan bahasa pemrograman PHP dan menggunakan mysql sebagai media penyimpanan data. Aplikasi ini dibuat untuk memenuhi nilai tugas akhir mata kuliah sistem pengambilan keputusan oleh kelompok 8 yang beranggotakan Arya Wahjoe Setiawan dan Khofifah Amanda. </p>
						</div>
			    	<div class="col s6">
			    		<center><h5 class="header" style="margin-left: 0px; margin-bottom: 0px; margin-top: 25px; color: #635c73">INFO METODE</h5></center><br>
							<p style="text-align: justify; padding-left: 16px;">Metode yang digunakan dalam aplikasi ini adalah metode TOPSIS. Metode TOPSIS merupakan salah satu metode yang digunakan dalam sistem pengambilan keputusan. Metode ini memiliki cara kerja dimana alternatif yang terpilih atau terbaik tidak hanya mempunyai  jarak terdekat dari solusi ideal positif, namun juga memiliki jarak terjauh dari solusi ideal negatif  dari sudut pandang geometris dengan menggunakan jarak Euclidean untuk menentukan kedekatan relatif dari  suatu alternatif dengan solusi optimal.
							</p>
							</div>
		    	</div>
	    	</div>
		</div>
	</div>
	<!-- Info End -->

	<div id="about" class="modal">
    <div class="modal-content">
      <h4>Deskripsi Aplikasi</h4>
      <p>Aplikasi Sistem Pendukung Keputusan Pemilihan Smartphone ini menggunakan metode TOPSIS yang dibangun dengan menggunakan bahasa pemorgraman PHP.
				Sistem ini dibuat sebagai nilai Tugas Akhir Mata Kuliah Sistem Pendukung Keputusan Prodi Teknik Informatika Politeknik Negeri Malang. <br>
				<br>
				1. ARYA WAHJOE SETIAWAN<br>
				2. KHOFIFAH AMANDA <br>
			</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Kembali</a>
    </div>
	</div>
	
    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px">
      <div class="container">
        <p align="center" style="color: #999">&copy; Aplikasi Sistem Pendukung Keputusan Pemilihan Smartphone 2023.</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	 			$(document).ready(function(){
	      $('.parallax').parallax();
				$('.modal').modal();
	    });
	</script>
</body>
</html>