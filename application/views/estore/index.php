<!DOCTYPE HTML>
<html>
<head>
	<title>Avocado | Avocado`s Store</title>
	<?php echo $header; ?>

	<!--CSS-->
	<?php echo link_tag('assets/css/estore/estore.css') ?>
	<?php echo link_tag('assets/css/estore/estore-custom.css') ?>

	<script src="<?php echo base_url('assets/js/estore/estore.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/estore/cart.js'); ?>"></script>
	<script type="application/x-javascript">
		addEventListener("load", function() {
				setTimeout(hideURLbar, 0);
			} , false);
			function hideURLbar(){
				window.scrollTo(0,1);
			}
	</script>
</head>
<body>
	<?php echo $enav; ?>
	<!-- CAROUSEL -->
	<div class="container">
		<div id="carousel_wrapper">
			<!-- Slider -->
			<div class="row">
				<div class="col-xs-12" id="slider">
					<!-- Top part of the slider -->
					<div class="row">
						<div class="col-sm-8" id="carousel-bounding-box">
							<div class="carousel slide" id="myCarousel">
								<!-- Carousel items -->
								<div class="carousel-inner">
									<?php
										$i=0;
										foreach($carousel_prod as $prod):
											if($i == 0) $active = 'active';
											else $active = '';
											// if($prod['PROD_IMG'] == 'noimage.jpg') continue;
									?>
									<div class="item <?php echo $active; ?>" data-slide-number="<?php echo $i; ?>">
										<img src="<?php echo base_url('assets/img/estore-img/'.$prod['PROD_IMG']); ?>" class="carousel-img">
									</div>
									<?php
										$i++;
										endforeach;
									?>
								</div><!-- Carousel nav -->
								<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
								</a>
								<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
								</a>
								</div>
						</div>

						<div class="col-sm-4" id="carousel-text"></div>

						<div id="slide-content" style="display: none;">
							<?php
								$i=0;
								foreach($carousel_prod as $prod):
									if($i == 0) $active = 'active';
									else $active = '';
									// if($prod['PROD_IMG'] == 'noimage.jpg') continue;
							?>
							<div id="slide-content-<?php echo $i; ?>">
								<h2><?php echo $prod['PROD_NAME']; ?></h2>
								<br>
								<p><?php echo word_limiter($prod['PROD_DESC'], 30); ?></p>
								<br>
								<p class="sub-text"><?php echo nice_date($prod['CREATED_AT'], 'F d, Y'); ?> - <a href="<?php echo base_url('estore/detail/'. $prod['PROD_ID']); ?>">Read more</a></p>
							</div>
							<?php
								$i++;
								endforeach;
							?>
						</div>
					</div>
				</div>
			</div><!--/Slider-->

			<div class="row hidden-xs" id="slider-thumbs">
				<!-- Bottom switcher of slider -->
				<ul class="hide-bullets">
					<?php
						$i=0;
						foreach($carousel_prod as $prod):
							if($i == 0) $active = 'active';
							else $active = '';
							// if($prod['PROD_IMG'] == 'noimage.jpg') continue;
					?>
					<li class="col-sm-2">
						<a class="thumbnail carousel-thumbnail" id="carousel-selector-<?php echo $i; ?>"><img src="<?php echo base_url('assets/img/estore-img/'.$prod['PROD_IMG']); ?>"></a>
					</li>
					<?php
						$i++;
						endforeach;
					?>
				</ul>
			</div>
		</div>
	</div>
	<!-- CAROUSEL -->

	<!--content-->
	<div class="content">
		<!--banner-bottom-->
		<div class="ban-bottom-w3l">
			<div class="container">
				<div class="row">
					<h3 class="tittle1">TRENDING</h3>
					<div class="col-md-6 ban-bottom">
						<div class="ban-top">
							<img src="<?php echo base_url('assets/img/e-img/treadmill.jpg'); ?>" class="img-responsive" alt=""/>
							<div class="ban-text">
								<h4>GYM Equipment</h4>
							</div>
						</div>
						<div class="ban-img">
							<div class=" ban-bottom1">
								<div class="ban-top">
									<img src="<?php echo base_url('assets/img/e-img/emergency.jpg'); ?>" class="img-responsive" alt=""/>
									<div class="ban-textsupplement">
										<h4>Emergency</h4>
									</div>
								</div>
							</div>
							<div class="ban-bottom2">
								<div class="ban-top">
									<img src="<?php echo base_url('assets/img/estore-img/glasses.jpg'); ?>" class="img-responsive" alt=""/>
									<div class="ban-text1">
										<h4>Accessories</h4>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-6 ban-bottom3">
						<div class="ban-top">
							<img src="<?php echo base_url('assets/img/e-img/fitness outfit.jpg'); ?>" class="img-responsive" alt=""/>
							<div class="ban-texttreatment">
								<h4>Apparel</h4>
							</div>
						</div>
						<div class="ban-img">
							<div class=" ban-bottom1">
								<div class="ban-top">
									<img src="<?php echo base_url('assets/img/estore-img/antibiotic1.jpg'); ?>" class="img-responsive" alt=""/>
									<div class="ban-textsupplement">
										<h4>Supplement</h4>
									</div>
								</div>
							</div>
							<div class="ban-bottom2">
								<div class="ban-top">
									<img src="<?php echo base_url('assets/img/estore-img/900.jpg'); ?>" class="img-responsive" alt=""/>
									<div class="ban-text1">
										<h4>Nutrition</h4>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!--banner-bottom-->

		<!-- new-arrivals -->
		<div class="new-arrivals-w3agile">
			<div class="container">
				<h2 class="tittle">New Arrivals</h2>
				<div class="arrivals-grids">
					<?php foreach($newest_arrival as $item) { ?>
					<div class="col-md-3 arrival-grid simpleCart_shelfItem">
						<div class="grid-arr">
							<div class="grid-arrival">
								<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal">
									<div class="grid-img">
										<img src="<?php echo base_url('assets/img/estore-img/'. $item['PROD_IMG']); ?>" class="img-responsive newest_arrival_foto" alt="">
									</div>
								</a>
							</div>

							<div class="desc">
								<h6><a href="<?php echo base_url('estore/detail/'. $item['PROD_ID']); ?>"><?php echo character_limiter($item['PROD_NAME'], 20); ?></a></h6>
								<!-- <span class="size">XL / XXL / S </span> -->
								<p ><em class="item_price">RP <?php echo number_format($item['PROD_PRICE'],0,',','.'); ?></em></p>
								<!-- <button href="#" data-text="Add To Cart" class="btn btn-primary">Add To Cart</button> -->
							</div>
						</div>
					</div>
					<?php } ?>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!--new-arrivals-->

		<!--accessories-->
		<div class="accessories-w3l">
			<div class="container">
				<h3 class="tittle">20% Discount on</h3>
				<span>SPORT EQUIPMENT</span>
				<div class="button">
					<a href="<?php echo base_url('estore/products/19'); ?>" class="button1"> Shop Now</a>
				</div>
			</div>
		</div>
		<!--accessories-->

		<!--Products-->
		<div class="product-agile">
			<div class="container">
				<h3 class="tittle1"> New Products</h3>
				<div class="slider">
					<div class="callbacks_container">
						<div class="caption">
							<?php foreach($newest_arrival as $item) { ?>
							<div class="col-md-3 cap-left simpleCart_shelfItem">
								<div class="grid-arr">
									<div class="grid-arrival">
										<a href="" class="new-gri" data-toggle="modal" data-target="#myModal">
											<div class="grid-img">
												<img src="<?php echo base_url('assets/img/estore-img/'. $item['PROD_IMG']); ?>" class="img-responsive newest_arrival_foto" alt="">
											</div>
										</a>
									</div>

									<div class="desc">
										<h6><a href="<?php echo base_url('estore/detail/'. $item['PROD_ID']); ?>"><?php echo character_limiter($item['PROD_NAME'], 20); ?></a></h6>
										<!-- <span class="size">XL / XXL / S </span> -->
										<p><em class="item_price">RP <?php echo number_format($item['PROD_PRICE'],0,',','.'); ?></em></p>
										<!-- <button href="#" data-text="Add To Cart" class="btn btn-primary">Add To Cart</button> -->
									</div>
								</div>
							</div>
							<?php } ?>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Products-->

		<div class="latest-w3">
			<div class="container">
				<h3 class="tittle1">Most Favourite Category</h3>
				<div class="latest-grids">
					<div class="col-md-4 latest-grid">
						<div class="latest-top">
							<img src="<?php echo base_url('assets/img/e-img//l4.jpg'); ?>" class="img-responsive"  alt="">
							<div class="latest-text">
								<h4>Men`s Apparel</h4>
							</div>
							<div class="latest-text2 hvr-sweep-to-top">
								<h4>-50%</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 latest-grid">
						<div class="latest-top">
							<img src="<?php echo base_url('assets/img/e-img//l4.jpg'); ?>" class="img-responsive"  alt="">
							<div class="latest-text">
								<h4>Bottles</h4>
							</div>
							<div class="latest-text2 hvr-sweep-to-top">
								<h4>-20%</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 latest-grid">
						<div class="latest-top">
							<img src="<?php echo base_url('assets/img/e-img//l4.jpg'); ?>" class="img-responsive"  alt="">
							<div class="latest-text">
								<h4>desc`s Apparel</h4>
							</div>
							<div class="latest-text2 hvr-sweep-to-top">
								<h4>-50%</h4>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="latest-grids">
					<div class="col-md-4 latest-grid">
						<div class="latest-top">
							<img src="<?php echo base_url('assets/img/e-img//l4.jpg'); ?>" class="img-responsive"  alt="">
							<div class="latest-text">
								<h4>Sport Watch</h4>
							</div>
							<div class="latest-text2 hvr-sweep-to-top">
								<h4>-45%</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 latest-grid">
						<div class="latest-top">
							<img src="<?php echo base_url('assets/img/e-img//l4.jpg'); ?>" class="img-responsive"  alt="">
							<div class="latest-text">
								<h4>Sport Bag</h4>
							</div>
							<div class="latest-text2 hvr-sweep-to-top">
								<h4>-10%</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 latest-grid">
						<div class="latest-top">
							<img src="<?php echo base_url('assets/img/e-img//l4.jpg'); ?>" class="img-responsive"  alt="">
							<div class="latest-text">
								<h4>Medical Equipment</h4>
							</div>
							<div class="latest-text2 hvr-sweep-to-top">
								<h4>-30%</h4>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

		<!-- BEST SELLER -->
		<div class="new-arrivals-w3agile">
			<div class="container">
				<h3 class="tittle1">Best Sellers</h3>
				<div class="arrivals-grids">
					<div class="col-md-3 arrival-grid simpleCart_shelfItem">
						<div class="grid-arr">
							<div class="grid-arrival">
								<a href="#">
									<div class="grid-img">
										<img src="<?php echo base_url('assets/img/e-img/p28.jpg'); ?>" class="img-responsive" alt="">
									</div>
								</a>
							</div>

							<div class="desc">
								<h6><a href="#">Jacket</a></h6>
								<!-- <span class="size">XL / XXL / S </span> -->
								<p><em class="item_price"><em>Rp 200.000,-</em></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 arrival-grid simpleCart_shelfItem">
						<div class="grid-arr">
							<div class="grid-arrival">
								<a href="#">
									<div class="grid-img">
										<img src="<?php echo base_url('assets/img/e-img/p30.jpg'); ?>" class="img-responsive" alt="">
									</div>
								</a>
							</div>

							<div class="desc">
								<h6><a href="#">Sport Watch</a></h6>
								<!-- <span class="size">XL / XXL / S </span> -->
								<p><em class="item_price"><em>Rp 200.0000,-</em></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 arrival-grid simpleCart_shelfItem">
						<div class="grid-arr">
							<div class="grid-arrival">
								<a href="#">
									<div class="grid-img">
										<img src="<?php echo base_url('assets/img/e-img/s2.jpg'); ?>" class="img-responsive" alt="">
									</div>
								</a>
							</div>

							<div class="desc">
								<h6><a href="#">Bag</a></h6>
								<!-- <span class="size">XL / XXL / S </span> -->
								<p><em class="item_price"><em>Rp 200.000,-</em></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 arrival-grid simpleCart_shelfItem">
						<div class="grid-arr">
							<div class="grid-arrival">
								<a href="#">
									<div class="grid-img">
										<img src="<?php echo base_url('assets/img/e-img/s2.jpg'); ?>" class="img-responsive" alt="">
									</div>
								</a>
							</div>
							<div class="desc">
								<h6><a href="#">Bag</a></h6>
								<!-- <span class="size">XL / XXL / S </span> -->
								<p><em class="item_price"><em>Rp 200.0000,-</em></p>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- BEST SELLER -->
	</div>
	<!--content-->

	<?php echo $efooter; ?>

</body>
</html>
