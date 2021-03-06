<!DOCTYPE html>
<html>
<head>
	<title>Doctors List</title>
	<?php echo $header; ?>

	<?php echo link_tag('assets/css/list.css') ?>

	<script src="<?php echo base_url('assets/js/list.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body>
	<?php echo $nav; ?>

	<section id="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<!-- <div class="col-sm-10 text-left"> -->
						<!-- <div class="row"> -->
		                	<legend>Search</legend>
		                	<div class="row">
								<div class="col-sm-12">
		                			<form action="list" id="profile_search" class="form-inline" method="get">
					                    <input type="text" class="form-control" size="50" name="src" placeholder="Search Your Doctor" id="findDoctor" value="<?php echo $this->input->get('src'); ?>"><button class="btn btn-default" id="icon-search"><i class="fa fa-search"></i></button>
	                				</form>
								</div>
							</div>
							<br>
						<!-- </div> -->
						<!-- <div class="row"> -->
							<!-- <legend>LOCATION</legend>
							<div class="col-sm-12">
								<input class="form-control filter" type="text" placeholder="Input your Location" name="location"><i class="fa fa-map-marker fa-fw" id="icon-map"></i>
							</div> -->
							<!-- dropdown list -->
							<div class="dropdown" id="drop">
								<form>
									<legend>Gender</legend>
								    <div class="radio">
										<label><input type="radio" name="optradio">Male</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio">Female</label>
									</div>
								</form>
							</div>
						<!-- </div> -->
						<!-- collapse list -->
						<div class="row">
							<div class="col-sm-12">
						    	<a id="expcoll" data-toggle="collapse" data-target="#thelist" href="#"> Doctor`s Specialty <i class="fa fa-plus fa-fw exp"></i>
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
			</div>
			<div class="col-sm-9">
				<div class="panel panel-info">
					<div class="panel panel-heading">
						<div class="row">
							<div class="col-sm-2 text-left">
								<h4>Picture</h4>
							</div>
							<div class="col-sm-4 text-left">
								<h4>Data</h4>
							</div>
							<div class="col-sm-6 text-left">
								<h4>Location</h4>
							</div>
						</div>
					</div>
					<div class="panel panel-body">
						<?php foreach($doctor_search as $dct): ?>
						<div class="row">
							<div class="col-sm-2 text-left">
								<div class="row">
						        	<div class="profile_image">
						        	<?php
					        			$img = $dct['USER_IMG'];
						        		if($img == NULL){
						        			$img = 'noimage.png';
						        		}
						        	?>
									<img src="<?php echo base_url('assets/img/doctor/certificate/'. $img); ?>">
									</div>
								</div>
								<div class="row text-center">
									<br>
									<a href="<?php echo base_url('booking'); ?>" type="button" class="btn btn-primary btnBooking">Booking</a>
									<a href="<?php echo base_url('profile/doctor/'. $dct['USER_ID']); ?>" type="button" class="btn btn-danger btnProfile">Profile</a>
								</div>
							</div>
							<div class="col-sm-4 profile_singkat">
								<h2 class="name"><a href="<?php echo base_url('profile/doctor/'. $dct['USER_ID']); ?>"><?php echo $dct['USER_NAME']; ?></a></h2>
								<h3 class="specialist">Specialist : <?php echo $dct['DCT_SPECIALTY']; ?></h3>
								<h4 class="experience">Experience : <?php echo $dct['DCT_EXP']; ?></h4>
								<div class="hargadanwaktu">
									<div class="harga">
										<i class="fa fa-money fa-fw"></i> <span class="nilai"><strong>Rp <?php echo $dct['CONSULT_FEE']; ?></strong></span>
									</div>
									<div class="waktu">
										<i class="fa fa-clock-o fa-fw"></i>
										<div class="jadwal nilai">Senin - Jumat</div>
										<div class="waktu_kerja">08.00 - 22.00</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6" id="lokasi">
								<div class="row">
									<div class="col-sm-6">
										<h4>Location</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-2">
										<img class="location" src="<?php echo base_url('assets/img/location.png'); ?>">
									</div>
									<div class="col-sm-2">
										<img class="location" src="<?php echo base_url('assets/img/location.png'); ?>">
									</div>
									<div class="col-sm-2">
										<img class="location" src="<?php echo base_url('assets/img/location.png'); ?>">
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="col-sm-1">

			</div>
		</div>
	</section>
</body>
</html>
