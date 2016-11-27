<!DOCTYPE html>
<html>
<head>
	<title>AVOCADO</title>
	<?php require_once __DIR__.'/templates/header.php'; ?>

	<script src="<?php echo base_url() ?>assets/js/main.js"></script>
</head>
<body>
	<?php require_once __DIR__."/templates/nav.php"; ?>
	<div class="jumbotron text-center">
	  <h1 class="blink_me">Avocado</h1><!--// Meikelwis 25/10/16-->
	  <h3>We specialize in Health Care Application</h3>
	  <form class="form-inline" action="list">
	    <input type="email" class="form-control" size="50" placeholder="Doctor`s Name or Hospital`s Name" required>
	    <a href="list" type="button" class="btn btn-info">Search</a>
	  </form>
	</div>
	<section id="startchange">
		<div class="container cmain">
			<div class="row">
			<h2 class="text-center"><i class="fa fa-newspaper-o fa-fw"></i> News</h2>
				<div class="col-sm-6 leftedge">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
					  	<div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img src="<?php echo base_url() ?>assets/img/stomach.jpg" alt="perut">
						      <div class="carousel-caption">
						        <h3>Kombinasi Tiga Penyakit yang Bisa Perpendek Usia</h3>
						        <a href="#">Read More...</a>
						      </div>
						      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						    </div>

						    <div class="item">
						      <img src="<?php echo base_url() ?>assets/img/jiwa.jpg" alt="jiwa">
						      <div class="carousel-caption">
						        <h3>Pertolongan Pertama untuk Masalah Kesehatan Jiwa</h3>
						        <a href="#">Read More...</a>
						      </div>
						      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						    </div>

						    <div class="item">
						      <img src="<?php echo base_url() ?>assets/img/hands.jpg" alt="tangan">
						      <div class="carousel-caption">
						        <h3>Manusia Hanya Bisa Mencapai Umur Maksimal Sampai 120 Tahun?</h3>
						        <a href="#">Read More...</a>
						      </div>
						      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						    </div>

						    <div class="item">
						      <img src="<?php echo base_url() ?>assets/img/october.jpg" alt="october">
						      <div class="carousel-caption">
						        <h3>Oktober, Bulan Terbaik untuk Mulai Berdiet</h3>
						        <a href="#">Read More...</a>
						      </div>
						      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						    </div>
						</div>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/9G95EYym4NM" frameborder="0" allowfullscreen></iframe>

						</div>
						<a href="#" class="news">Go to News Page &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a>
					</div>
				<div class="col-sm-6 rightedge">
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="<?php echo base_url() ?>assets/img/stomach.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Kombinasi Tiga Penyakit yang Bisa Perpendek Usia</a>
						</div>
					</div>
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="<?php echo base_url() ?>assets/img/hands.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Manusia Hanya Bisa Mencapai Umur Maksimal Sampai 120 Tahun?</a>
						</div>
					</div>
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="<?php echo base_url() ?>assets/img/jiwa.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Pertolongan Pertama untuk Masalah Kesehatan Jiwa</a>
						</div>
					</div>
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="<?php echo base_url() ?>assets/img/october.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Oktober, Bulan Terbaik untuk Mulai Berdiet</a>
						</div>
					</div>
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="<?php echo base_url() ?>assets/img/perfect.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Berita 5</a>
						</div>
					</div>
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="<?php echo base_url() ?>assets/img/health.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Berita 6</a>
						</div>
					</div>
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="<?php echo base_url() ?>assets/img/stomach.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Berita 7</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-sm-7">
					<h1>What is Avocado <i class="fa fa-question-circle" aria-hidden="true"></i></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-sm-5 img_about">
					<img src="<?php echo base_url() ?>assets/img/avocado.png">
				</div>
			</div>
		</div>

	</section>
	<footer class="foot">
		<!-- <h1 class="text-center"></h1> -->
		<!-- <h4 class="info text-center">This is our information</h4> -->
		<div class="row">
			<div class="col-sm-4 surel">		
				<ul class="list-unstyled">
					<li><i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Mikroskil Gedung B</a></li>
					<li><i class="fa fa-phone fa-3x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<a href="">(+62)812345678910</a></li>
					<li><i class="fa fa-envelope fa-3x"></i> <a href="">stephen.huang96@gmail.com</a></li>
					<li><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i> &nbsp;&nbsp;<a href="">Alpukat</a></li>
					<li><i class="fa fa-twitter fa-3x" aria-hidden="true"></i>  &nbsp;<a href="">Alpukat</a></li>
					<li><i class="fa fa-instagram fa-3x" aria-hidden="true"></i> &nbsp;<a href="">Alpukat</a></li>
				</ul>
			</div>
			<div class="col-sm-4 complain-form">
				<form class="complain">
				  	<div class="form-group">
				    	<label for="email">Email address:</label>
				    	<input type="email" class="form-control" id="email" required>
				  	</div>
				  	<div class="form-group">
				    	<label for="pwd">Password:</label>
				    	<input type="password" class="form-control" id="pwd" required>
				  	</div>
				  	<div class="checkbox">
				    	<label><input type="checkbox"> Remember me</label>
				  	</div>
				  	<div class="form-group">
				    	<label for="comment">Comment:</label>
      					<textarea class="form-control" rows="5" id="comment" required></textarea>
				  	</div>
				  	<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			<div class="col-sm-4 services">
				<h3>FAQ</h3>
				<ul class="list-unstyled">
					<li>Apakah Stephen sedang belajar ?</li>
					<li>Apakah yang sedang dilakukan Meikelwis ?</li>
					<li>Bagaimana caranya Stephen mendapatkan ilham ketika sedang berak ?</li>
					<li>Bagaimanakah caranya Meikelwis mendapat ilham ?</li>
					<li>Apa yang harus dilakukan agar dapat menghapal semua isi website w3schools ?</li>
				</ul>
			</div>
		</div>

	</footer>
	<div>
		<br>
		<br> 
		<br>
	</div>
</body>
</html>