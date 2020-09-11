<?php 

	include '../config.php';
	include CTRL_FRONT.'empController.php';
	$employee = show();
	include '../admin/admin_dashboard.php';

?>
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Edit Employee</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Employee</a></li>
				<li><a href="index.php"> Employee List</a></li>
				<li class="active"> Edit Employee</li>
			</ol>
		</section>
		
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box box-info">
				<!-- form start -->
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="Employee ID" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Employee ID</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="id" class="form-control" value="<?php echo $employee[0]->id ?>" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="Employee Name" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Employee Name</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="emp_name" class="form-control" value="<?php echo $employee[0]->emp_name ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="Designation" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Designation</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<select name="designation" class="form-control">
									<?php if($employee[0]->designation == "chef"){ ?>
                            			<option value="chef" selected>Chef</option>
										<option value="waiter">Waiter</option>
                           				<option value="manager">Manager</option>
                       				<?php } ?>
									<?php if($employee[0]->designation == "waiter"){ ?>
                            			<option value="waiter" selected>Waiter</option>
										<option value="chef">Chef</option>
                           				<option value="manager">Manager</option>
                       				<?php } ?>
									<?php if($employee[0]->designation == "manager"){ ?>
										<option value="manager" selected>Manager</option>
										<option value="chef">Chef</option>
                            			<option value="waiter">Waiter</option>
                       				<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="Salary" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Salary</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="salary" class="form-control" value="<?php echo $employee[0]->salary ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="Phone Number" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Phone</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="emp_phn" class="form-control" value="<?php echo $employee[0]->emp_phn ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="Address" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Address</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="emp_address" class="form-control" value="<?php echo $employee[0]->emp_address ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="Join Date" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Join Date</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="date" name="emp_join" class="form-control" value="<?php echo $employee[0]->emp_join ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="Status" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Status</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<select name="status" class="form-control">
									<?php if($employee[0]->status == "ACTIVE"){ ?>
                            			<option value="ACTIVE" selected>ACTIVE</option>
										<option value="FIRED">FIRED</option>
										<option value="ON_VACATION">ON VACATION</option>
                       				<?php } ?>
									<?php if($employee[0]->status == "FIRED"){ ?>
                            			<option value="FIRED" selected>FIRED</option>
										<option value="ACTIVE">ACTIVE</option>
										<option value="ON_VACATION">ON VACATION</option>
									<?php } ?>
									<?php if($employee[0]->status == "ON_VACATION"){ ?>
                            			<option value="ON_VACATION" selected>ON VACATION</option>
										<option value="FIRED">FIRED</option>
										<option value="ACTIVE">ACTIVE</option>
                       				<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="Price" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Previous Image</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<img src="<?php echo RSR.$employee[0]->image?>" alt="" height="120px" width="120px">
							</div>
						</div>
						<div class="form-group">
							<label for="Price" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">New Image</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="file" name="image" class="form-control">
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