<?php 

	include '../config.php';
	include CTRL_FRONT.'empController.php';
	$employee = index();
	include '../admin/admin_dashboard.php';

?>

		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Employee List</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Employee</a></li>
				<li class="active"> Employee List</li>
			</ol>
		</section>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box">
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Employee ID</th>
								<th>Image</th>
								<th>Employee Name</th>
								<th>Designation</th>
								<th>Salary</th>
								<th>Phone</th>
								<th>Join Date</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($employee as $emp){ ?>
								<tr>
									<td><?php echo $emp->id ?></td>
									<td><img src="<?php echo RSR.$emp->image?>" alt="" width="50" height="50"></td>
									<td><?php echo $emp->emp_name ?></td>
									<td><?php echo $emp->designation ?></td>
									<td><?php echo $emp->salary ?></td>
									<td><?php echo $emp->emp_phn ?></td>
									<td><?php echo $emp->emp_join ?></td>
									<?php 
										if($emp->status == "ACTIVE")
										{ ?>
											<td style="color: green;"><?php echo $emp->status ?></td>
										<?php }
										else
										{ ?>
											<td style="color: red;"><?php echo $emp->status ?></td>
										<?php }
									?>
									<td>
										<a href="single.php?id=<?php echo $emp->id ?>" class="btn btn-block btn-success btn-xs">Details</a>
										<a href="update.php?id=<?php echo $emp->id ?>" class="btn btn-block btn-primary btn-xs">Edit</a>
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