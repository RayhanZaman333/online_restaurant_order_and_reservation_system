<?php 

	include '../config.php';
	include CTRL_FRONT.'reservationController.php';
	$reservation = show();
	include '../admin/admin_dashboard.php';

?>

		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Reservation Detail</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Reservation</a></li>
				<li><a href="index.php"> Reservation List</a></li>
				<li class="active"> Reservation Detail</li>
			</ol>
		</section>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box">
				<div class="box-body">
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
                                <th>Serial No.</th>
								<td><?php echo $reservation[0]->id?></td>
							</tr>
							<tr>
								<th>Name:</th>
								<td><?php echo $reservation[0]->name?></td>
							</tr>
							<tr>
								<th>Table:</th>
								<td><?php echo $reservation[0]->rt_name?></td>
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
								<th>Booking Date & Time:</th>
								<td><?php echo $reservation[0]->booked_datetime?></td>
							</tr>
							<tr>
								<th>Status</th>
								<?php 
									if($reservation[0]->status == "AVAILABLE")
									{ ?>
										<td style="color: green;"><?php echo $reservation[0]->status ?></td>
									<?php }
									else if($reservation[0]->status == "BOOKED")
									{ ?>
										<td style="color: orange;"><?php echo $reservation[0]->status ?></td>
									<?php }
									else
									{ ?>
										<td style="color: red;"><?php echo $reservation[0]->status ?></td>
									<?php }
								?>
							</tr>
						</table>
						<div class="box-footer">
							<a href="index.php" class="btn btn-danger">Back To List</a>
							<a href="update.php?id=<?php echo $reservation[0]->id?>" class="btn btn-primary" style="float: right;">Edit</a>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php 

	include '../admin/admin_footer.php';

?>		  