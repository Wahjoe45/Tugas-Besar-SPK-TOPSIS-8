<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan Smartphone</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png"> 	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
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

		<!-- Daftar HP Start -->
        <div style="background-color: #efefef">
            <div class="container">
                <div class="section-card" style="padding: 32px 0px 20px 0px">
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col s3">
                                </div>
                                <div class="col s6">      
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="row">
                                                <center><h4>Masukkan Deskripsi HP</h4></center>
                                                <br>
                                                <form class = "col s12" method="POST" action="hasil.php">
                                                    <div class = "row">
                                                        <div class="col s12">

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Masukkan Range Harga</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="harga">
                                                                    <option value = "" disabled selected style="color: #eceff1;"><i>Range Harga</i></option>
                                                                    <option value = "5">< Rp. 1.000.000</option>
                                                                    <option value = "4">1.000.000 - 3.000.000</option>
                                                                    <option value = "3">3.000.000 - 4.000.000</option>
                                                                    <option value = "2">4.000.000 - 5.000.000</option>
                                                                    <option value = "1">> 5.000.000</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                            <b>Pilih RAM</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="ram">
                                                                    <option value = "" disabled selected>Pilihan RAM</option> 
                                                                    <option value = "1">0 - 1 Gb</option>
                                                                    <option value = "2">2 Gb</option>
                                                                    <option value = "3">3 Gb</option>
                                                                    <option value = "4">4 Gb</option>
                                                                    <option value = "5">> 5 Gb</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Kapasitas Memori</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="memori">
                                                                    <option value = "" disabled selected>Total Penyimpanan</option>
                                                                    <option value = "1">0 - 4 Gb</option>
                                                                    <option value = "2">8 Gb</option>
                                                                    <option value = "3">16 Gb</option>
                                                                    <option value = "4">32 Gb</option>
                                                                    <option value = "5">> 32 Gb</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Processor</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="processor">
                                                                    <option value = "" disabled selected>Kriteria Processor</option>
                                                                    <option value = "1">Dualcore</option>
                                                                    <option value = "3">Quadcore</option>
                                                                    <option value = "5">Octacore</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Kamera</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="kamera">
                                                                    <option value = "" disabled selected>Kriteria Kamera</option>
                                                                    <option value = "1">0 - 8 Mp</option>
                                                                    <option value = "3">8 - 13 Mp</option>
                                                                    <option value = "5">>13 Mp</option>
                                                                </select>
                                                            </div>
                                                            
                                                        </div>  
                                                    <center><button type="submit" class="waves-effect waves-light btn" style="margin-bottom:-46px;">Mulai Perhitungan</button></center>	
                                                </form>       
                                            </div>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="col s3">
                                </div>
                            </div>
                        </li>
                    </ul>	     
                </div>
            </div>
        </div>
        <!-- Rekomendasi HP End -->

    <!-- Modal Start -->
	<div id="about" class="modal">
        <div class="modal-content">
          <h4>Deskripsi Aplikasi</h4>
          <p>Aplikasi Sistem Pendukung Keputusan Pemilihan Smartphone ini menggunakan metode TOPSIS yang dibangun dengan menggunakan bahasa pemorgraman PHP.
				Sistem ini dibuat sebagai nilai Tugas Akhir Mata Kuliah Sistem Pendukung Keputusan Prodi Teknik Informatika Politeknik Negeri Malang.  <br>
				<br>
				1. ARYA WAHJOE SETIAWAN<br>
				2. KHOFIFAH AMANDA <br>
			</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
        </div>
    </div>
    <!-- Modal End -->

    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px; background-color: white">
      <div class="container">
        <p align="center" style="color: #999">&copy; Aplikasi Sistem Pendukung Keputusan Pemilihan Smartphone 2023.</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	  $(document).ready(function(){
	      $('.parallax').parallax();
          $('select').material_select();
          $('.modal').modal();
	    });
    </script>
</body>
</html>