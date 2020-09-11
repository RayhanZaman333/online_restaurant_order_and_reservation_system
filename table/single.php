<?php 

	include '../config.php';
	include CTRL_FRONT.'tableController.php';
	$table = show();
	include '../admin/admin_dashboard.php';

?>

		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Table Detail</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Table</a></li>
				<li><a href="index.php"> Table List</a></li>
				<li class="active"> Table Detail</li>
			</ol>
		</section>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box">
				<div class="box-body table-responsive no-padding">
            		<table class="table table-hover">
                		<tr>
                  			<th>Table ID:</th>
							<td><?php echo $table[0]->id?></td>
                		</tr>
                		<tr>
							<th>Table Name:</th>
                  			<td><?php echo $table[0]->name?></td>
                		</tr>
						<tr>
							<th>Max Accomodation:</th>
                  			<td><?php echo $table[0]->max_accomodate?></td>
                		</tr>
						<tr>
							<th>Status</th>
							<?php 
								if($table[0]->status == "AVAILABLE")
								{ ?>
									<td style="color: green;"><?php echo $table[0]->status ?></td>
								<?php }
								else
								{ ?>
									<td style="color: red;"><?php echo $table[0]->status ?></td>
								<?php }
							?>
                		</tr>
					</table>
					<div class="box-footer">
						<a href="index.php" class="btn btn-danger">Back To List</a>
						<a href="update.php?id=<?php echo $table[0]->id?>" class="btn btn-primary" style="float: right;">Edit</a>
					</div>
          		</div>
			</div>
		</div>

<?php 

	include '../admin/admin_footer.php';

?>		  