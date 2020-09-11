<?php 

	include 'config_index.php';
	include_once CTRL_FRONT.'indexController.php';
	include_once CTRL_FRONT.'reservationController.php';
	include 'layout/header.php';

	$menu_all = menuAll();
	$menu_special = menu('Specials');
	$menu_fastfood = menu('Fast Foods');
	$menu_combo = menu('Combos');
	$menu_desert = menu('Deserts');
	$menu_drink = menu('Drinks');

	$employee = employee();

	$table = getTable();
	//print_r ($menu_special);

?>
		
		<!-- Header Area Start -->
		<header class="header-area header-absolute">
			<div class="header-top">
				<div class="container">
					<div class="header-top-inner">
						<div class="row">
							<div class="col-lg-6 col-md-7 col-sm-12 col-xs-12"> 
								<div class="short-info"> 
									<ul>
										<li><i class="fa fa-phone"></i> +880-1955-181028</li>
										<li><i class="fa fa-clock-o"></i> opening hours: Everyday 10am - 10pm</li>
									</ul>
								</div>
							</div>
							<div class="offset-lg-2 col-lg-4 col-md-5 col-sm-12 col-xs-12"> 
								<div class="social-medias">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom" id="sticky-menu"> 
				<div class="container">
					<div class="header-bottom-inner">
						<div class="row">
							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
								<div class="logo"> 
									<a href="index.php"><img src="../resources/images/logo.png" alt="LOGO" /></a>
								</div>
							</div>
							<div class="offset-lg-1 col-lg-8 col-md-12 colsm-12 col-xs-12">
								<nav class="main-menu">
									<a href="#" class="toggle-menu">&#9776;</a>
									<ul class="nav-list nav-open" id="nav">
										<li><a class="js-scroll-trigger current-page" href="#home">home</a></li>
										<li><a class="js-scroll-trigger" href="#about">about</a></li>
										<li><a class="js-scroll-trigger" href="#menu">menu</a></li>
										<li><a class="js-scroll-trigger" href="#reservation">reservation</a></li>
										<li><a class="js-scroll-trigger" href="#review">reviews</a></li>
										<li><a class="js-scroll-trigger" href="#blog">blog</a></li>
										<li><a class="js-scroll-trigger" href="#contact">contact</a></li>
										<li><a href="order/orders.php"><i class="fa fa-shopping-cart"></i></a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Area End -->
		
		<!-- Banner Area Start -->
		<section class="banner-area owl-carousel" id="home">
			<div class="single-banner black-overlay"> 
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 colsm-12 col-xs-12 text-center">
							<div class="banner-title"> 
								<h1>welcome to <span>Hungry Station</span></h1>
							</div>
							<div class="banner-btn">
								<div class="single-btn"> 
									<a href="#menu" class="menu-btn js-scroll-trigger">our menu</a>
								</div>
								<div class="single-btn"> 
									<a href="#reservation" class="booking-btn js-scroll-trigger">book a table</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="single-banner black-overlay">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 colsm-12 col-xs-12 text-center">
							<div class="banner-title"> 
								<h1>welcome to <span>Hungry Station</span></h1>
							</div>
							<div class="banner-btn">
								<div class="single-btn"> 
									<a href="#menu" class="menu-btn">our menu</a>
								</div>
								<div class="single-btn"> 
									<a href="#reservation" class="booking-btn">book a table</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="single-banner black-overlay">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 colsm-12 col-xs-12 text-center">
							<div class="banner-title"> 
								<h1>welcome to <span>Hungry Station</span></h1>
							</div>
							<div class="banner-btn">
								<div class="single-btn"> 
									<a href="#menu" class="menu-btn">our menu</a>
								</div>
								<div class="single-btn"> 
									<a href="#reservation" class="booking-btn">book a table</i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Banner Area End -->
		
		<!-- About Area Start -->
		<section class="about-area" id="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="section-title"> 
							<h2>about us</h2>
							<img src="../resources/images/title-img.png" alt="TITLE-MARK" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
						<div class="about-text"> 
							<h4>We Make Delicious Foods Since 2015</h4>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop There are many variations of passages <span>web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved </span></p>
							<img src="../resources/images/sign.png" alt="SIGNATURE" />
						</div>
					</div>
					<div class="offset-lg-1 col-lg-5 col-md-6 col-sm-12 col-xs-12"> 
						<div class="about-img"> 
							<div class="single-about about-one"> 
								<img src="../resources/images/about/about-img1.jpg" alt="ABOUT" />
							</div>
							<div class="single-about about-two"> 
								<img src="../resources/images/about/about-img2.jpg" alt="ABOUT" />
							</div>
						</div>
						<div class="about-video"> 
							<div id="vidBox">
								<div id="videCont">
									<video id="demo" loop controls>
										<source src="../resources/videos/video.mp4" type="video/mp4">
									</video>
							   </div>
							</div>
							<div class="about-btn"> 
								<a href="javascript:void(0)" id="video-trigger"><i class="fa fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- About Area End -->
		
		<!-- Feature Area Start -->
		<section class="feature-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 sol-xs-6 text-center">
						<div class="single-feature"> 
							<img src="../resources/images/features/feature1.png" alt="FEATURE" />
							<h4>Home Delivery</h4>
							<p>Injected humour, or randomised words which don't look even slightly believable. If you are going </p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 sol-xs-6 text-center">
						<div class="single-feature"> 
							<img src="../resources/images/features/feature2.png" alt="FEATURE" />
							<h4>Tasty Crispy Items</h4>
							<p>Injected humour, or randomised words which don't look even slightly believable. If you are going </p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 sol-xs-6 text-center">
						<div class="single-feature"> 
							<img src="../resources/images/features/feature3.png" alt="FEATURE" />
							<h4>Fresh Organic Food</h4>
							<p>Injected humour, or randomised words which don't look even slightly believable. If you are going </p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 sol-xs-6 text-center">
						<div class="single-feature"> 
							<img src="../resources/images/features/feature4.png" alt="FEATURE" />
							<h4>Free Welcome Drinks</h4>
							<p>Injected humour, or randomised words which don't look even slightly believable. If you are going </p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Feature Area End -->
		
		<!-- Menu Area Start -->
		<section class="menu-area section-padding" id="menu">
			<div class="container"> 
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="section-title"> 
							<?php 
								if(isset($_REQUEST['msg']))
								{
									echo "<h4>".$_REQUEST['msg']."</h4>";
								}
							?>
							<h2>our menu</h2>
							<img src="../resources/images/title-img.png" alt="TITLE-MARK" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="tab-navbar">
							<ul>
								<li><button id="button1" >Specials</button></li>
								<li><button id="button2">Fast Foods</button></li>
								<li><button id="button3">Combos</button></li>
								<li><button id="button4">Deserts</button></li>
								<li><button id="button5">Drinks</button></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="all-tabs">
					<div class="tab-content" id="content1">
						<div class="row">
							<?php
								foreach($menu_all as $m)
								{ ?>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="single-item"> 
											<div class="item-thumb"> 
												<img src="<?php echo RSR.$m->image ?>" alt="MENU" />
											</div>
											<div class="item-detail"> 
												<input type="hidden" id="id_<?php echo $m->id ?>" value="<?php echo $m->id ?>">
												<input type="hidden" id="qnty" value="1">
												<h4><?php echo $m->food_name ?></h4>
												<h6>৳<?php echo $m->price ?></h6>
												<p><?php echo $m->ingredient ?></p>
												<a href="order/user_detail.php?id=<?php echo $m->id ?>" class="detail-btn" target="blank">details</a>
												<button id="btn" class="order-btn" onclick="order(<?php echo $m->id ?>)">order now</button>
												<div id="snackbar">Item Added To Cart</div>
											</div>
										</div>
									</div>
								<?php } 
							?>
						</div>
					</div>
					<div class="tab-content" id="content2">
						<div class="row">
							<?php
								foreach($menu_special as $m)
								{ ?>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="single-item"> 
											<div class="item-thumb"> 
												<img src="<?php echo RSR.$m->image ?>" alt="MENU" />
											</div>
											<div class="item-detail"> 
												<input type="hidden" id="id_<?php echo $m->id ?>" value="<?php echo $m->id ?>">
												<input type="hidden" id="qnty" value="1">
												<h4><?php echo $m->food_name ?></h4>
												<h6>৳<?php echo $m->price ?></h6>
												<p><?php echo $m->ingredient ?></p>
												<a href="order/user_detail.php?id=<?php echo $m->id ?>" class="detail-btn" target="blank">details</a>
												<button id="btn" class="order-btn" onclick="order(<?php echo $m->id ?>)">order now</button>
												<div id="snackbar">Item Added To Cart</div>
											</div>
										</div>
									</div>
								<?php } 
							?>
						</div>
					</div>
					<div class="tab-content" id="content3">
						<div class="row">
							<?php
								foreach($menu_fastfood as $m)
								{ ?>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="single-item"> 
											<div class="item-thumb"> 
												<img src="<?php echo RSR.$m->image ?>" alt="MENU" />
											</div>
											<div class="item-detail"> 
												<input type="hidden" id="id_<?php echo $m->id ?>" value="<?php echo $m->id ?>">
												<input type="hidden" id="qnty" value="1">
												<h4><?php echo $m->food_name ?></h4>
												<h6>৳<?php echo $m->price ?></h6>
												<p><?php echo $m->ingredient ?></p>
												<a href="order/user_detail.php?id=<?php echo $m->id ?>" class="detail-btn" target="blank">details</a>
												<button id="btn" class="order-btn" onclick="order(<?php echo $m->id ?>)">order now</button>
												<div id="snackbar">Item Added To Cart</div>
											</div>
										</div>
									</div>
								<?php } 
							?>
						</div>
					</div>
					<div class="tab-content" id="content4">
						<div class="row">
							<?php
								foreach($menu_combo as $m)
								{ ?>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="single-item"> 
											<div class="item-thumb"> 
												<img src="<?php echo RSR.$m->image ?>" alt="MENU" />
											</div>
											<div class="item-detail"> 
												<input type="hidden" id="id_<?php echo $m->id ?>" value="<?php echo $m->id ?>">
												<input type="hidden" id="qnty" value="1">
												<h4><?php echo $m->food_name ?></h4>
												<h6>৳<?php echo $m->price ?></h6>
												<p><?php echo $m->ingredient ?></p>
												<a href="order/user_detail.php?id=<?php echo $m->id ?>" class="detail-btn" target="blank">details</a>
												<button id="btn" class="order-btn" onclick="order(<?php echo $m->id ?>)">order now</button>
												<div id="snackbar">Item Added To Cart</div>
											</div>
										</div>
									</div>
								<?php } 
							?>
						</div>
					</div>
					<div class="tab-content" id="content5">
						<div class="row">
							<?php
								foreach($menu_desert as $m)
								{ ?>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="single-item"> 
											<div class="item-thumb"> 
												<img src="<?php echo RSR.$m->image ?>" alt="MENU" />
											</div>
											<div class="item-detail"> 
												<input type="hidden" id="id_<?php echo $m->id ?>" value="<?php echo $m->id ?>">
												<input type="hidden" id="qnty" value="1">
												<h4><?php echo $m->food_name ?></h4>
												<h6>৳<?php echo $m->price ?></h6>
												<p><?php echo $m->ingredient ?></p>
												<a href="order/user_detail.php?id=<?php echo $m->id ?>" class="detail-btn" target="blank">details</a>
												<button id="btn" class="order-btn" onclick="order(<?php echo $m->id ?>)">order now</button>
												<div id="snackbar">Item Added To Cart</div>
											</div>
										</div>
									</div>
								<?php } 
							?>
						</div>
					</div>
					<div class="tab-content" id="content6">
						<div class="row">
							<?php
								foreach($menu_drink as $m)
								{ ?>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="single-item"> 
											<div class="item-thumb"> 
												<img src="<?php echo RSR.$m->image ?>" alt="MENU" />
											</div>
											<div class="item-detail"> 
												<input type="hidden" id="id_<?php echo $m->id ?>" value="<?php echo $m->id ?>">
												<input type="hidden" id="qnty" value="1">
												<h4><?php echo $m->food_name ?></h4>
												<h6>৳<?php echo $m->price ?></h6>
												<p><?php echo $m->ingredient ?></p>
												<a href="order/user_detail.php?id=<?php echo $m->id ?>" class="detail-btn" target="blank">details</a>
												<button id="btn" class="order-btn" onclick="order(<?php echo $m->id ?>)">order now</button>
												<div id="snackbar">Item Added To Cart</div>
											</div>
										</div>
									</div>
								<?php } 
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Menu Area End -->
		
		<!-- Offer Area Start -->
		<section class="offer-area black-overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center"> 
						<div class="special-offer"> 
							<img src="../resources/images/special_logo.png" alt="OFFER" />
							<h4>SPECIAL DISCOUNT</h4>
							<h3>50%<span>off</span></h3>
							<h2>EID OFFER</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution </p>
							<div class="offer-social"> 
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Offer Area End -->
		
		<!-- Gallery Area Start -->
		<section class="gallery-area section-padding">
			<div class="container"> 
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="section-title"> 
							<h2>our gallery</h2>
							<img src="../resources/images/title-img.png" alt="TITLE-MARK" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="offset-lg-2 col-lg-10 offset-md-1 col-md-11 col-sm-12 col-xs-12"> 
						<div class="portfolio-nav"> 
							<ul id="work-list"> 
								<li class="active-portfolio" data-filter="*">all</li>
								<li data-filter=".specials">specials</li>
								<li data-filter=".fast">fast foods</li>
								<li data-filter=".combos">combos</li>
								<li data-filter=".deserts">deserts</li>
								<li data-filter=".drinks">drinks</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row all-gallery-items popup-gallery">
					<!-- Single Gallery -->
					<div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 fast specials single-gallery"> 
						<div class="portfolio-content"> 
							<img src="../resources/images/gallery/11.jpg" alt="Portfolio" />
						</div>
						<div class="portfolio-hover">
							<div class="portfolio-hover-inner">
								<div class="portfolio-hover-content"> 
									<a class="popup-link" title="Portfolio1" href="../resources/images/gallery/11.jpg"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Gallery -->
					<div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 combos deserts single-gallery"> 
						<div class="portfolio-content"> 
							<img src="../resources/images/gallery/22.jpg" alt="Portfolio" />
						</div>
						<div class="portfolio-hover">
							<div class="portfolio-hover-inner">
								<div class="portfolio-hover-content"> 
									<a class="popup-link" title="Portfolio2" href="../resources/images/gallery/22.jpg"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Gallery -->
					<div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 drinks specials single-gallery"> 
						<div class="portfolio-content"> 
							<img src="../resources/images/gallery/33.jpg" alt="Portfolio" />
						</div>
						<div class="portfolio-hover">
							<div class="portfolio-hover-inner">
								<div class="portfolio-hover-content"> 
									<a class="popup-link" title="Portfolio3" href="../resources/images/gallery/33.jpg"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Gallery -->
					<div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 combos deserts single-gallery"> 
						<div class="portfolio-content"> 
							<img src="../resources/images/gallery/44.jpg" alt="Portfolio" />
						</div>
						<div class="portfolio-hover">
							<div class="portfolio-hover-inner">
								<div class="portfolio-hover-content"> 
									<a class="popup-link" title="Portfolio4" href="../resources/images/gallery/44.jpg"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Gallery -->
					<div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 deserts drinks single-gallery"> 
						<div class="portfolio-content"> 
							<img src="../resources/images/gallery/55.jpg" alt="Portfolio" />
						</div>
						<div class="portfolio-hover">
							<div class="portfolio-hover-inner">
								<div class="portfolio-hover-content"> 
									<a class="popup-link" title="Portfolio5" href="../resources/images/gallery/55.jpg"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Gallery -->
					<div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 fast specials single-gallery"> 
						<div class="portfolio-content"> 
							<img src="../resources/images/gallery/66.jpg" alt="Portfolio" />
						</div>
						<div class="portfolio-hover">
							<div class="portfolio-hover-inner">
								<div class="portfolio-hover-content"> 
									<a class="popup-link" title="Portfolio6" href="../resources/images/gallery/66.jpg"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Gallery Area End -->
		
		<!-- Reservation Area Start -->
		<section class="reservation-area section-padding" id="reservation">
			<div class="reservation-header">
				<div class="container"> 
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
							<div class="section-title"> 
								<h2>book a table</h2>
								<img src="../resources/images/title-img.png" alt="TITLE-MARK" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="reservation-inner black-overlay"> 
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-7 col-sm-12 col-xs-12"> 
							<div class="reservation-form"> 
								<h3>Reservation Form</h3>
								<form method="post" id="reservationForm">
									<div class="row"> 
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="single-input"> 
												<input type="text" name="name" placeholder="Full Name" />
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="single-input"> 
												<input type="date" id="datepicker" name="date" placeholder="Date"/>
											</div>
										</div>
									</div>
									<div class="row"> 
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="single-input"> 
												<select name="tableId" id="tbl" onchange="tbl_id()"> 
													<option value="-1">--Select One--</option>
													<?php foreach($table as $tbl)
													{ ?>
														<option value="<?php echo $tbl->id?>"><?php echo $tbl->name?></option>
													<?php } ?>
												</select>
											</div>
										</div>
									</div>
									<div class="row"> 
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="single-input"> 
												<textarea name="request" id="booked" cols="30" rows="2"></textarea>
											</div>
										</div>
									</div>
									<div class="row"> 
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="single-input"> 
												<input type="time" id="time" name="time" placeholder="Time" class="timepicker"/>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="single-input"> 
												<input type="text" name="phone" placeholder="Phone Number" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="single-input"> 
												<input type="text" name="address" id="address" placeholder="Address" />
											</div>
										</div>
									</div>
									<div class="row"> 
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="single-input"> 
												<textarea name="request" id="" cols="30" rows="10">Special Request</textarea>
											</div>
										</div>
									</div>
									<div class="row"> 
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
											<div class="reservation-button"> 
												<input type="submit" class="reservation-btn" name="reservationStore" value="make a reservation" />
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="offset-lg-1 col-lg-5 col-md-5 col-sm-12 col-xs-12"> 
							<div class="reservation-img"> 
								<img src="../resources/images/reservation-chef.png" alt="RESERVATION" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Reservation Area End -->
		
		<!-- Chef Area Start -->
		<section class="chef-area section-padding">
			<div class="container"> 
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="section-title"> 
							<h2>our employees</h2>
							<img src="../resources/images/title-img.png" alt="TITLE-MARK" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="all-chefs owl-carousel"> 
							<?php
								foreach($employee as $emp)
								{ ?>
									<div class="single-chef">
										<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center">
											<div class="chef-img"> 
												<img src="<?php echo RSR.$emp->image ?>" alt="CHEF" />
											</div>
											<div class="chef-title"> 
												<h3><?php echo $emp->emp_name ?></h3>
												<h5><?php echo $emp->designation ?></h5>
											</div>
											<div class="chef-hover"> 
												<div class="chef-hover-inner"> 
													<ul>
														<li><a href="#"><i class="fa fa-facebook"></i></a></li>
														<li><a href="#"><i class="fa fa-twitter"></i></a></li>
														<li><a href="#"><i class="fa fa-instagram"></i></a></li>
														<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								<?php } 
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Chef Area End -->
		
		<!-- Testimonial Area Start -->
		<section class="testimonial-area section-padding" id="review">
			<div class="container"> 
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="section-title"> 
							<h2>Customer Satisfaction</h2>
							<img src="../resources/images/title-img.png" alt="TITLE-MARK" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="all-testimonials owl-carousel">
							<div class="single-testimonial"> 
								<p>“ It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text ” </p>
								<img src="../resources/images/testimonials/1.png" alt="Testimonial" />
								<h3>Robin Willium</h3>
								<h6>CEO at Thaifood</h6>
							</div>
							<div class="single-testimonial"> 
								  <p>“ It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text ” </p>
								<img src="../resources/images/testimonials/1.png" alt="Testimonial" />
								<h3>Robin Willium</h3>
								<h6>CEO at Thaifood</h6>
							</div>
							<div class="single-testimonial"> 
								  <p>“ It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text ” </p>
								<img src="../resources/images/testimonials/1.png" alt="Testimonial" />
								<h3>Robin Willium</h3>
								<h6>CEO at Thaifood</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Testimonial Area End -->
		
		<!-- Counter Area Start -->
		<section class="counter-area white-overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center">
						<div class="single-counter"> 
							<img src="../resources/images/counter/1.png" alt="" />
							<h2 class="counter-value">120</h2>
							<h4>Happy Customers</h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center">
						<div class="single-counter"> 
							<img src="../resources/images/counter/2.png" alt="" />
							<h2 class="counter-value">200</h2>
							<h4>Goals Achieved</h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center">
						<div class="single-counter"> 
							<img src="../resources/images/counter/3.png" alt="" />
							<h2 class="counter-value">82</h2>
							<h4>Cup Of Coffee</h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center">
						<div class="single-counter"> 
							<img src="../resources/images/counter/4.png" alt="" />
							<h2 class="counter-value">19</h2>
							<h4>Awards Won</h4>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Counter Area End -->
		
		<!-- Blog Area Start -->
		<section class="blog-area section-padding" id="blog">
			<div class="container"> 
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="section-title"> 
							<h2>Our Blogs</h2>
							<img src="../resources/images/title-img.png" alt="TITLE-MARK" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="blog-slider owl-carousel">
							<div class="row single-blog-slide">
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> 
									<div class="single-blog"> 
										<div class="blog-item"> 
											<img src="../resources/images/blogs/1.jpg" alt="BLOG" />
										</div>
										<div class="blog-writer"> 
											<p><a href="#"><i class="fa fa-user"></i> admin</a> <a href="#"><i class="fa fa-heart"></i> (200)</a> <a href="#"><i class="fa fa-comments"></i> (30)</a></p>
										</div>
										<div class="blog-title"> 
											<h4>Chicken Maskalai Most served recipie</h4>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered...</p>
											<a href="single-blog.php">read more</a>
										</div>
										<div class="blog-hover">
											<div class="blog-hover-inner"> 
												<h2>13 mar</h2>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> 
									<div class="single-blog"> 
										<div class="blog-item"> 
											<img src="../resources/images/blogs/2.jpg" alt="BLOG" />
										</div>
										<div class="blog-writer"> 
											<p><a href="#"><i class="fa fa-user"></i> admin</a> <a href="#"><i class="fa fa-heart"></i> (200)</a> <a href="#"><i class="fa fa-comments"></i> (30)</a></p>
										</div>
										<div class="blog-title"> 
											<h4>Our Best Recepies of the month</h4>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered...</p>
											<a href="single-blog.php">read more</a>
										</div>
										<div class="blog-hover">
											<div class="blog-hover-inner"> 
												<h2>20 apr</h2>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> 
									<div class="single-blog"> 
										<div class="blog-item"> 
											<img src="../resources/images/blogs/3.jpg" alt="BLOG" />
										</div>
										<div class="blog-writer"> 
											<p><a href="#"><i class="fa fa-user"></i> admin</a> <a href="#"><i class="fa fa-heart"></i> (200)</a> <a href="#"><i class="fa fa-comments"></i> (30)</a></p>
										</div>
										<div class="blog-title"> 
											<h4>Five layer chocklate Shake new item</h4>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered...</p>
											<a href="single-blog.php">read more</a>
										</div>
										<div class="blog-hover">
											<div class="blog-hover-inner"> 
												<h2>30 jun</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row single-blog-slide">
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> 
									<div class="single-blog"> 
										<div class="blog-item"> 
											<img src="../resources/images/blogs/1.jpg" alt="BLOG" />
										</div>
										<div class="blog-writer"> 
											<p><a href="#"><i class="fa fa-user"></i> admin</a> <a href="#"><i class="fa fa-heart"></i> (200)</a> <a href="#"><i class="fa fa-comments"></i> (30)</a></p>
										</div>
										<div class="blog-title"> 
											<h4>Chicken Maskalai Most served recipie</h4>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered...</p>
											<a href="single-blog.php">read more</a>
										</div>
										<div class="blog-hover">
											<div class="blog-hover-inner"> 
												<h2>13 mar</h2>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> 
									<div class="single-blog"> 
										<div class="blog-item"> 
											<img src="../resources/images/blogs/2.jpg" alt="BLOG" />
										</div>
										<div class="blog-writer"> 
											<p><a href="#"><i class="fa fa-user"></i> admin</a> <a href="#"><i class="fa fa-heart"></i> (200)</a> <a href="#"><i class="fa fa-comments"></i> (30)</a></p>
										</div>
										<div class="blog-title"> 
											<h4>Our Best Recepies of the month</h4>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered...</p>
											<a href="single-blog.php">read more</a>
										</div>
										<div class="blog-hover">
											<div class="blog-hover-inner"> 
												<h2>20 apr</h2>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> 
									<div class="single-blog"> 
										<div class="blog-item"> 
											<img src="../resources/images/blogs/3.jpg" alt="BLOG" />
										</div>
										<div class="blog-writer"> 
											<p><a href="#"><i class="fa fa-user"></i> admin</a> <a href="#"><i class="fa fa-heart"></i> (200)</a> <a href="#"><i class="fa fa-comments"></i> (30)</a></p>
										</div>
										<div class="blog-title"> 
											<h4>Five layer chocklate Shake new item</h4>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered...</p>
											<a href="single-blog.php">read more</a>
										</div>
										<div class="blog-hover">
											<div class="blog-hover-inner"> 
												<h2>30 jun</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row single-blog-slide">
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> 
									<div class="single-blog"> 
										<div class="blog-item"> 
											<img src="../resources/images/blogs/1.jpg" alt="BLOG" />
										</div>
										<div class="blog-writer"> 
											<p><a href="#"><i class="fa fa-user"></i> admin</a> <a href="#"><i class="fa fa-heart"></i> (200)</a> <a href="#"><i class="fa fa-comments"></i> (30)</a></p>
										</div>
										<div class="blog-title"> 
											<h4>Chicken Maskalai Most served recipie</h4>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered...</p>
											<a href="single-blog.php">read more</a>
										</div>
										<div class="blog-hover">
											<div class="blog-hover-inner"> 
												<h2>13 mar</h2>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="single-blog"> 
										<div class="blog-item"> 
											<img src="../resources/images/blogs/2.jpg" alt="BLOG" />
										</div>
										<div class="blog-writer"> 
											<p><a href="#"><i class="fa fa-user"></i> admin</a> <a href="#"><i class="fa fa-heart"></i> (200)</a> <a href="#"><i class="fa fa-comments"></i> (30)</a></p>
										</div>
										<div class="blog-title"> 
											<h4>Our Best Recepies of the month</h4>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered...</p>
											<a href="single-blog.php">read more</a>
										</div>
										<div class="blog-hover">
											<div class="blog-hover-inner"> 
												<h2>20 apr</h2>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> 
									<div class="single-blog"> 
										<div class="blog-item"> 
											<img src="../resources/images/blogs/3.jpg" alt="BLOG" />
										</div>
										<div class="blog-writer"> 
											<p><a href="#"><i class="fa fa-user"></i> admin</a> <a href="#"><i class="fa fa-heart"></i> (200)</a> <a href="#"><i class="fa fa-comments"></i> (30)</a></p>
										</div>
										<div class="blog-title"> 
											<h4>Five layer chocklate Shake new item</h4>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered...</p>
											<a href="single-blog.php">read more</a>
										</div>
										<div class="blog-hover">
											<div class="blog-hover-inner"> 
												<h2>30 jun</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Blog Area End -->
		
		<!-- Sponsor Area Start -->
		<section class="sponsor-area">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="all-sponsors owl-carousel">
							<div class="single-sponsor"> 
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<img src="../resources/images/sponsors/1.png" alt="SPONSOR" />
								</div>
							</div>
							<div class="single-sponsor"> 
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<img src="../resources/images/sponsors/2.png" alt="SPONSOR" />
								</div>
							</div>
							<div class="single-sponsor"> 
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<img src="../resources/images/sponsors/3.png" alt="SPONSOR" />
								</div>
							</div>
							<div class="single-sponsor"> 
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<img src="../resources/images/sponsors/4.png" alt="SPONSOR" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Sponsor Area End -->
		
<?php 

	include 'layout/footer.php';

?>		