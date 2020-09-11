<?php 

    include '../config.php';
	include CTRL_FRONT.'orderController.php';
	$orderList = orderList();
	
	include '../layout/user_header.php';

?>

		
		<!-- Page Area Start -->
		<section class="page-area black-overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="page-title"> 
                            <h1>Your Table Has Been Booked.</h1>
                        </div>
                        <div class="banner-btn">
                            <div class="single-btn"> 
                                <a href="../index.php" class="menu-btn">Back To Home</a>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</section>
		<!-- Page Area End -->

        <!-- Sponsor Area Start -->
		<section class="sponsor-area">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="all-sponsors owl-carousel">
							<div class="single-sponsor"> 
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<img src="<?php echo RSR?>/images/sponsors/1.png" alt="SPONSOR" />
								</div>
							</div>
							<div class="single-sponsor"> 
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<img src="<?php echo RSR?>/images/sponsors/2.png" alt="SPONSOR" />
								</div>
							</div>
							<div class="single-sponsor"> 
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<img src="<?php echo RSR?>/images/sponsors/3.png" alt="SPONSOR" />
								</div>
							</div>
							<div class="single-sponsor"> 
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<img src="<?php echo RSR?>/images/sponsors/4.png" alt="SPONSOR" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Sponsor Area End -->

<?php 

	include '../layout/user_footer.php';

?>		  