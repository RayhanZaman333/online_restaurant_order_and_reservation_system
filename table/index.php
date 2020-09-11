<?php 

	include '../config.php';
	include CTRL_FRONT.'tableController.php';
	$table = index();
	include '../admin/admin_dashboard.php';

?>

		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Table List</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Table</a></li>
				<li class="active"> Table List</li>
			</ol>
		</section>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box">
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Table ID</th>
								<th>Table Name</th>
								<th>Max Accomodation</th>
								<th>Status</th>
								<th class="pull-right">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($table as $tbl){ ?>
								<tr>
									<td><?php echo $tbl->id ?></td>
									<td><?php echo $tbl->name ?></td>
									<td><?php echo $tbl->max_accomodate ?></td>
									<?php 
										if($tbl->status == "AVAILABLE")
										{ ?>
											<td style="color: green;"><?php echo $tbl->status ?></td>
										<?php }
										else
										{ ?>
											<td style="color: red;"><?php echo $tbl->status ?></td>
										<?php }
									?>
									<td class="pull-right">
										<a href="single.php?id=<?php echo $tbl->id ?>" class="btn btn-success btn-xs">Details</a>
										<a href="update.php?id=<?php echo $tbl->id ?>" class="btn btn-primary btn-xs">Edit</a>
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