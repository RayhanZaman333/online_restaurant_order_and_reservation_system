<?php 

	include '../config.php';
	include CTRL_FRONT.'reservationController.php';
	$reservation = show();
	$table = getTable();
	include '../admin/admin_dashboard.php';

?>
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Reservation Food</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Reservation</a></li>
				<li><a href="index.php"> Reservation List</a></li>
				<li class="active"> Reservation Food</li>
			</ol>
		</section>
		
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box box-info">
				<!-- form start -->
				<form class="form-horizontal" method="post">
					<div class="box-body">
						<div class="form-group">
							<label for="Reservation ID" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Serial ID</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="id" class="form-control" value="<?php echo $reservation[0]->id ?>" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="Name" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Name</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="name" class="form-control" value="<?php echo $reservation[0]->name ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="Table" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Table No.</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<select name="tableId" class="form-control">
									<?php foreach($table as $tbl){
										if($tbl->id == $reservation[0]->rt_id)
										{ ?>
											<option value=<?php echo $tbl->id; ?> selected><?php echo $tbl->name; ?></option>
										<?php } 
										else 
										{ ?>
											<option value=<?php echo $tbl->id; ?>><?php echo $tbl->name; ?></option>
									<?php } } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="Date" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Date</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="date" name="date" class="form-control" value="<?php echo $reservation[0]->date ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="Time" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Time</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="time" name="time" class="form-control" value="<?php echo $reservation[0]->time ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="Phone" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Phone</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="phone" class="form-control" value="<?php echo $reservation[0]->phone ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="Address" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Address</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="address" class="form-control" value="<?php echo $reservation[0]->address ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="Status" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Status</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<select name="status" class="form-control">
									<?php if($reservation[0]->status == "AVAILABLE"){ ?>
                            			<option value="AVAILABLE" selected>AVAILABLE</option>
										<option value="BOOKED">BOOKED</option>
										<option value="CANCEL">CANCEL</option>
                       				<?php } ?>
									<?php if($reservation[0]->status == "BOOKED"){ ?>
                            			<option value="BOOKED" selected>BOOKED</option>
										<option value="AVAILABLE">AVAILABLE</option>
										<option value="CANCEL">CANCEL</option>
									<?php } ?>
									<?php if($reservation[0]->status == "CANCEL"){ ?>
                            			<option value="CANCEL" selected>CANCEL</option>
										<option value="AVAILABLE">AVAILABLE</option>
										<option value="BOOKED">BOOKED</option>
                       				<?php } ?>
								</select>
							</div>
						</div>
						<div class="box-footer">
							<a href="index.php" class="btn btn-danger">Back To List</a>
							<button type="submit" name="update" class="btn btn-primary">Update</button>
						</div>
					</div>
				</form>
			</div>
        </div>
		  
<?php 

	include '../admin/admin_footer.php';

?>		  