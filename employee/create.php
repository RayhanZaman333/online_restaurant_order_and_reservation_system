<?php 

	include '../config.php';
	include CTRL_FRONT.'empController.php';
	include '../admin/admin_dashboard.php';

?>
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Add New Employee</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Employee</a></li>
				<li class="active"> Add Employee</li>
			</ol>
		</section>
		
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box box-info">
				<!-- form start -->
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="Employee Name" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Employee Name</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="emp_name" class="form-control" placeholder="Employee Name">
							</div>
						</div>
						<div class="form-group">
							<label for="Designation" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Designation</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<select name="designation" class="form-control">
									<option selected disabled value="null">----Select----</option>
									<option value="chef">Chef</option>
									<option value="waiter">Waiter</option>
									<option value="manager">Manager</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="Salary" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Salary</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="salary" class="form-control" placeholder="Salary">
							</div>
						</div>
						<div class="form-group">
							<label for="Phone Number" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Phone</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="emp_phn" class="form-control" placeholder="Phone Number">
							</div>
						</div>
						<div class="form-group">
							<label for="Address" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Address</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="emp_address" class="form-control" placeholder="Address">
							</div>
						</div>
						<div class="form-group">
							<label for="Join Date" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Join Date</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="date" name="emp_join" class="form-control" placeholder="Join Date">
							</div>
						</div>
						<div class="form-group">
							<label for="Employee Image" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Enter Image</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="file" name="image" id="exampleInputFile">
							</div>
						</div>
						<div class="box-footer">
							<a href="index.php" class="btn btn-danger">Back To List</a>
							<button type="submit" name="submit" class="btn btn-primary">Save</button>
						</div>
					</div>
				</form>
			</div>
        </div>
		  
<?php 

	include '../admin/admin_footer.php';

?>		  