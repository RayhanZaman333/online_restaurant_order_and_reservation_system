<?php 

	include '../config.php';
	include CTRL_FRONT.'reservationController.php';
	$reservation = index();
	include '../admin/admin_dashboard.php';

?>

		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Reservation List</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Reservation</a></li>
				<li class="active"> Reservation List</li>
			</ol>
		</section>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box">
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Serial No.</th>
								<th>Name</th>
								<th>Table</th>
								<th>Date</th>
								<th>Time</th>
								<th>Phone</th>
								<th>Status</th>
								<th class="pull-right">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($reservation as $reserve){ ?>
								<tr>
									<td><?php echo $reserve->id ?></td>
									<td><?php echo $reserve->name ?></td>
									<td><?php echo $reserve->rt_id ?></td>
									<td><?php echo $reserve->date ?></td>
									<td><?php echo $reserve->time ?></td>
									<td><?php echo $reserve->phone ?></td>
									<?php 
										if($reserve->status == "AVAILABLE")
										{ ?>
											<td style="color: green;"><?php echo $reserve->status ?></td>
										<?php }
										else if($reserve->status == "BOOKED")
										{ ?>
											<td style="color: orange;"><?php echo $reserve->status ?></td>
										<?php }
										else
										{ ?>
											<td style="color: red;"><?php echo $reserve->status ?></td>
										<?php }
									?>
									<td class="pull-right">
										<a href="detail.php?id=<?php echo $reserve->id ?>" class="btn btn-success btn-xs">Details</a>
										<a href="update.php?id=<?php echo $reserve->id ?>" class="btn btn-primary btn-xs">Edit</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
        </div>

<?php 

	include '../admin/admin_footer.php';

?>	