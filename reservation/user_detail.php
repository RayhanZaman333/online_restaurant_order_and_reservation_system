<?php 

	include '../config.php';
	include CTRL_FRONT.'reservationController.php';
	$reservation = show();
	include '../layout/user_header.php';

?>

		
		<!-- Page Area Start -->
		<section class="page-area black-overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="page-title"> 
							<h1>Reservation Detail</h1>
							<p><a href="../index.php">Home</a> / <a href="#">Reservation Detail</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Page Area End -->
		
		<section class="detail-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="single-food">
							<table class="">
								<tr>
									<th>Serial No:</th>
									<td><?php echo $reservation[0]->id?></td>
								</tr>
								<tr>
									<th>Name:</th>
									<td><?php echo $reservation[0]->name?></td>
								</tr>
								<tr>
									<th>Table No:</th>
									<td><?php echo $reservation[0]->rt_id?></td>
                                </tr>
                                <tr>
									<th>Date:</th>
									<td><?php echo $reservation[0]->date?></td>
								</tr>
								<tr>
									<th>Time:</th>
									<td><?php echo $reservation[0]->time?></td>
								</tr>
								<tr>
									<th>Phone:</th>
									<td><?php echo $reservation[0]->phone?></td>
								</tr>
								<tr>
									<th>Address:</th>
									<td><?php echo $reservation[0]->address?></td>
                                </tr>
                                <tr>
									<th>Special Request:</th>
									<td><?php echo $reservation[0]->special_req?></td>
								</tr>
								<tr>
									<th>Status:</th>
									<td><?php echo $reservation[0]->status?></td>
								</tr>
							</table>
							<div class="box-footer">
								<button class="btn btn-danger" onclick="reservationCancel()">Cancel Reservation</button>
								<a href="reservationSuccess.php" class="btn btn-success" style="float: right;">Confirm</a>
							</div>
						</div>	
					</div>	
				</div>	
			</div>
		</section>

<?php 

	include '../layout/user_footer.php';

?>		  