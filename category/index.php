<?php 

	include '../config.php';
	include CTRL_FRONT.'categoryController.php';
	$category = index();
	include '../admin/admin_dashboard.php';

?>

		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Category List</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Category</a></li>
				<li class="active"> Category List</li>
			</ol>
		</section>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box">
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Category ID</th>
								<th>Category Name</th>
								<th>Status</th>
								<th class="pull-right">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($category as $cat){ ?>
								<tr>
									<td><?php echo $cat->id ?></td>
									<td><?php echo $cat->cat_name ?></td>
									<?php 
										if($cat->status == "ACTIVE")
										{ ?>
											<td style="color: green;"><?php echo $cat->status ?></td>
										<?php }
										else
										{ ?>
											<td style="color: red;"><?php echo $cat->status ?></td>
										<?php }
									?>
									<td class="pull-right">
										<a href="single.php?id=<?php echo $cat->id ?>" class="btn btn-success btn-xs">Details</a>
										<a href="update.php?id=<?php echo $cat->id ?>" class="btn btn-primary btn-xs">Edit</a>
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