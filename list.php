<!DOCTYPE html>
<html>
<head>
	<title>Doctors List</title>
	<?php require __DIR__."/PARTIAL/head.php"; ?>

	<link rel="stylesheet" type="text/css" href="CSS/list.css">
	<link rel="stylesheet" type="text/css" href="CSS/rating.css">
	<!-- <script src="../JS/main.js"></script> -->
</head>
<body>
	<?php require __DIR__."/PARTIAL/nav.php" ?>

	<section id="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<div class="left">
						<input class="form-control filter" type="text" placeholder="Masukkan lokasi Anda" name="location"><i class="fa fa-map-marker fa-fw" id="icon-map"></i>

						<!-- dropdown list -->
						<div class="dropdown" id="drop">
						    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Jenis Kelamin
						    <span class="caret"></span></button>
						    <ul class="dropdown-menu">
						      <li><a class="male" href="#">Pria</a></li>
						      <li><a class="female" href="#">Wanita</a></li>
						    </ul>
						</div>

						<!-- collapse list -->
						<div id="expand_and_collapse">
					    	<a id="expcoll" data-toggle="collapse" data-target="#thelist" href="#"> Jenis Dokter <i class="fa fa-plus fa-fw exp"></i>
						    </a>
						  	<div id="thelist" class="collapse">
							    <div class="checkbox">
									<label><input type="checkbox" value="">Dokter Umum</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Dokter Gigi</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Ahli Saraf</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Ahli Penyakit Dalam</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Ahli Jantung</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Dokter Mata</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Dokter Kandungan</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Dokter THT</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Psikiater</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Ahli Bedah</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Ahli Nutrisi</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Dokter Penyakit Anak</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Ahli Akupuntur</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Fisioterapis</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Dokter Tulang</label>
								</div>
						  	</div>
						</div>
					</div>
					<!-- end of left -->
				</div>
				<!-- start of query -->
				<div class="col-sm-9">
					<div class="right list_dokter">
						<div class="row">
							<div class="col-sm-3">
								<img class="doctors" src="img/user.jpg">
							</div>
							<div class="col-sm-5 profil_singkat">
								<h2 class="nama"><a href="#lamanprofildokternya">dr. Dokter 1</a></h2>
								<h3 class="bidang">Spesialis : Ahli Bedah</h3>
								<h4 class="pengalaman">Pengalaman : 100 Tahun</h4>
								<!-- rating system -->
								<div class="stars">
								  	<form action="">
								    	<input class="star star-5" id="star-51" type="radio" name="star"/>
									    <label class="star star-5" for="star-51"></label>
									    <input class="star star-4" id="star-41" type="radio" name="star"/>
									    <label class="star star-4" for="star-41"></label>
									    <input class="star star-3" id="star-31" type="radio" name="star"/>
									    <label class="star star-3" for="star-31"></label>
									    <input class="star star-2" id="star-21" type="radio" name="star"/>
									    <label class="star star-2" for="star-21"></label>
									    <input class="star star-1" id="star-11" type="radio" name="star"/>
									    <label class="star star-1" for="star-11"></label>
									 </form>
								</div>
								<!-- end of rating system -->
								<div class="hargadanwaktu">
									<div class="harga">
										<i class="fa fa-money fa-fw"></i> <span class="nilai"><strong>Rp 100.000,-</strong></span>
									</div>
									<div class="waktu">
										<i class="fa fa-clock-o fa-fw"></i>
										<div class="jadwal nilai">Senin - Jumat</div>
										<div class="waktu_kerja">08.00 - 22.00</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="lokasi">
									<h4>Tempat Praktek</h4>
									<img class="gbr_lokasi" src="img/location.png">
									<img class="gbr_lokasi" src="img/location.png">
									<img class="gbr_lokasi" src="img/location.png">
								</div>
							</div>
						</div>
						<!-- end of dokter1 -->
						<div class="row">
							<div class="col-sm-3">
								<img class="doctors" src="img/user.jpg">
							</div>
							<div class="col-sm-5 profil_singkat">
								<h2 class="nama"><a href="#lamanprofildokternya">dr. Dokter 2</a></h2>
								<h3 class="bidang">Spesialis : Ahli Bedah</h3>
								<h4 class="pengalaman">Pengalaman : 100 Tahun</h4>
								<!-- rating system -->
								<div class="stars">
								  	<form action="">
								    	<input class="star star-5" id="star-52" type="radio" name="star"/>
									    <label class="star star-5" for="star-52"></label>
									    <input class="star star-4" id="star-42" type="radio" name="star"/>
									    <label class="star star-4" for="star-42"></label>
									    <input class="star star-3" id="star-32" type="radio" name="star"/>
									    <label class="star star-3" for="star-32"></label>
									    <input class="star star-2" id="star-22" type="radio" name="star"/>
									    <label class="star star-2" for="star-22"></label>
									    <input class="star star-1" id="star-12" type="radio" name="star"/>
									    <label class="star star-1" for="star-12"></label>
									 </form>
								</div>
								<!-- end of rating system -->
								<div class="hargadanwaktu">
									<div class="harga">
										<i class="fa fa-money fa-fw"></i> <span class="nilai"><strong>Rp 100.000,-</strong></span>
									</div>
									<div class="waktu">
										<i class="fa fa-clock-o fa-fw"></i>
										<div class="jadwal nilai">Senin - Jumat</div>
										<div class="waktu_kerja">08.00 - 22.00</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="lokasi">
									<h4>Tempat Praktek</h4>
									<img class="gbr_lokasi" src="img/location.png">
									<img class="gbr_lokasi" src="img/location.png">
									<img class="gbr_lokasi" src="img/location.png">
								</div>
							</div>
						</div>
						<!-- end of dokter2 -->
						<div class="row">
							<div class="col-sm-3">
								<img class="doctors" src="img/user.jpg">
							</div>
							<div class="col-sm-5 profil_singkat">
								<h2 class="nama"><a href="#lamanprofildokternya">dr. Dokter 3</a></h2>
								<h3 class="bidang">Spesialis : Ahli Bedah</h3>
								<h4 class="pengalaman">Pengalaman : 100 Tahun</h4>
								<!-- rating system -->
								<div class="stars">
								  	<form action="">
								    	<input class="star star-5" id="star-53" type="radio" name="star"/>
									    <label class="star star-5" for="star-53"></label>
									    <input class="star star-4" id="star-43" type="radio" name="star"/>
									    <label class="star star-4" for="star-43"></label>
									    <input class="star star-3" id="star-33" type="radio" name="star"/>
									    <label class="star star-3" for="star-33"></label>
									    <input class="star star-2" id="star-23" type="radio" name="star"/>
									    <label class="star star-2" for="star-23"></label>
									    <input class="star star-1" id="star-13" type="radio" name="star"/>
									    <label class="star star-1" for="star-13"></label>
									 </form>
								</div>
								<!-- end of rating system -->
								<div class="hargadanwaktu">
									<div class="harga">
										<i class="fa fa-money fa-fw"></i> <span class="nilai"><strong>Rp 100.000,-</strong></span>
									</div>
									<div class="waktu">
										<i class="fa fa-clock-o fa-fw"></i>
										<div class="jadwal nilai">Senin - Jumat</div>
										<div class="waktu_kerja">08.00 - 22.00</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="lokasi">
									<h4>Tempat Praktek</h4>
									<img class="gbr_lokasi" src="img/location.png">
									<img class="gbr_lokasi" src="img/location.png">
									<img class="gbr_lokasi" src="img/location.png">
								</div>
							</div>
						</div>
						<!-- end of dokter 3 -->
					</div>
				</div>


				<!-- end of query -->
			</div>
		</div>
	</section>
	<script>
	$(document).ready(function(){
	  $("#thelist").on("hide.bs.collapse", function(){
	    $("#expcoll").html('Jenis Dokter <i class="fa fa-plus fa-fw exp"></i>');
	  });
	  $("#thelist").on("show.bs.collapse", function(){
	    $("#expcoll").html('Jenis Dokter <i class="fa fa-minus fa-fw exp"></i>');
	  });
	});
	</script>

</body>
</html>