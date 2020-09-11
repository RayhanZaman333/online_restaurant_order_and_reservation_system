<?php 

	include '../config.php';
	include CTRL_FRONT.'empController.php';
	$employee = show();
	include '../admin/admin_dashboard.php';

?>

		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Employee Detail</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Employee</a></li>
				<li><a href="index.php"> Employee List</a></li>
				<li class="active"> Employee Detail</li>
			</ol>
		</section>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box">
				<div class="box-body table-responsive no-padding">
            		<table class="table table-hover">
                		<tr>
							<th>Employee Image:</th>
                  			<td><img src="<?php echo RSR.$employee[0]->image?>" alt="" width="100" height="100"></td>
                		</tr>
						<tr>
                  			<th>Employee ID:</th>
							<td><?php echo $employee[0]->id?></td>
                		</tr>
						<tr>
							<th>Employee Name:</th>
                  			<td><?php echo $employee[0]->emp_name?></td>
                		</tr>
						<tr>
							<th>Designation:</th>
                  			<td><?php echo $employee[0]->designation?></td>
                		</tr>
						<tr>
							<th>Salary:</th>
                  			<td><?php echo $employee[0]->salary?></td>
                		</tr>
						<tr>
							<th>Phone:</th>
                  			<td><?php echo $employee[0]->emp_phn?></td>
                		</tr>
						<tr>
							<th>Addresss:</th>
                  			<td><?php echo $employee[0]->emp_address?></td>
                		</tr>
						<tr>
							<th>Join Date:</th>
                  			<td><?php echo $employee[0]->emp_join?></td>
                		</tr>
						<tr>
							<th>Status</th>
							<?php 
								if($employee[0]->status == "ACTIVE")
								{ ?>
									<td style="color: green;"><?php echo $employee[0]->status ?></td>
								<?php }
								else
								{ ?>
									<td style="color: red;"><?php echo $employee[0]->status ?></td>
								<?php }
							?>
                		</tr>
					  </table>
					  <div class="box-footer">
						<a href="index.php" class="btn btn-danger">Back To List</a>
						<a href="update.php?id=<?php echo $employee[0]->id?>" class="btn btn-primary" style="float: right;">Edit</a>
					</div>
          		</div>
			</div>
		</div>

<?php 

	include '../admin/admin_footer.php';

?>		  