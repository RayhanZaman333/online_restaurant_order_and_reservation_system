<?php 

	include '../config.php';
	include CTRL_FRONT.'reservationController.php';
	include '../layout/user_header.php';

	$table = getTable();

?>

		
		<!-- Page Area Start -->
		<section class="page-area black-overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="page-title"> 
							<h1>Reservation</h1>
							<p><a href="../index.php">Home</a> / <a href="page.php">Reservation</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Page Area End -->
		
		<!-- Reservation Area Start -->
		<section class="reservation-area section-padding" id="reservation">
			<div class="reservation-header">
				<div class="container"> 
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
							<div class="section-title"> 
								<h2>book a table</h2>
								<img src="<?php echo RSR?>images/title-img.png" alt="TITLE-MARK" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="error"> 
								<?php
									$old = ["" => "",
												"name" => "",
												"phone" => "",
												"address" => "",
												"date" => "",
												"time" => "",
												"tableId" => "",
												"request" => ""
											];

									if(isset($_REQUEST["old"]))
									{
										$old =  $_REQUEST["old"];
									}
									
									if(isset($_REQUEST["err"]))
									{
										$err = $_REQUEST["err"];
										echo "<h2 style='color:red'>Errors: </h2>";
										foreach($err as $e)
										{ ?>	
											<ul style="color:red"><li><?php echo $e ?></li></ul>
										<?php }
									}	
								?>
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
												<input type="text" name="name" value="<?php echo $old['name']; ?>"  placeholder="Full Name" />
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="single-input"> 
												<input type="date" id="datepicker" name="date" value="<?php echo $old['date']; ?>"  placeholder="Date" />
											</div>
										</div>
									</div>
									<div class="row"> 
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="single-input"> 
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
									</div>
									<div class="row"> 
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="single-input"> 
												<textarea id="booked" cols="30" rows="2"></textarea>
											</div>
										</div>
									</div>
									<div class="row"> 
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="single-input"> 
												<input type="time" id="time" name="time" value="<?php echo $old['time']; ?>" class="timepicker"  placeholder="Time" />
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="single-input"> 
												<input type="text" name="phone" value="<?php echo $old['phone']; ?>"  placeholder="Phone Number" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="single-input"> 
												<input type="text" name="address" id="address" value="<?php echo $old['address']; ?>"  placeholder="Address" />
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
								<img src="<?php echo RSR?>images/reservation-chef.png" alt="RESERVATION" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- Reservation Area End -->
        
        <!-- Sponsor Area Start -->
		<section class="sponsor-area">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="all-sponsors owl-carousel">
							<div class="single-sponsor"> 
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<img src="<?php echo RSR?>images/sponsors/1.png" alt="SPONSOR" />
								</div>
							</div>
							<div class="single-sponsor"> 
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<img src="<?php echo RSR?>images/sponsors/2.png" alt="SPONSOR" />
								</div>
							</div>
							<div class="single-sponsor"> 
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<img src="<?php echo RSR?>images/sponsors/3.png" alt="SPONSOR" />
								</div>
							</div>
							<div class="single-sponsor"> 
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<img src="<?php echo RSR?>images/sponsors/4.png" alt="SPONSOR" />
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