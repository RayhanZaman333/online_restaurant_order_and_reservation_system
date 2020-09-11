<?php 

	include '../config.php';
	include CTRL_FRONT.'menuController.php';
	$menu = index();
	include '../admin/admin_dashboard.php';

?>

		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Food List</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Food</a></li>
				<li class="active"> Food List</li>
			</ol>
		</section>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box">
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Food ID</th>
								<th>Image</th>
								<th>Food Name</th>
								<th>Category</th>
								<th>Price</th>
								<th>Status</th>
								<th class="pull-right">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($menu as $food){ ?>
								<tr>
									<td><?php echo $food->id ?></td>
									<td><img src="<?php echo RSR.$food->image?>" alt="" width="50" height="50"></td>
									<td><?php echo $food->food_name ?></td>
									<td><?php echo $food->cat_name ?></td>
									<td><?php echo $food->price ?></td>
									<?php 
										if($food->status == "AVAILABLE")
										{ ?>
											<td style="color: green;"><?php echo $food->status ?></td>
										<?php }
										else
										{ ?>
											<td style="color: red;"><?php echo $food->status ?></td>
										<?php }
									?>
									<td class="pull-right">
										<a href="single.php?id=<?php echo $food->id ?>" class="btn btn-success btn-xs">Details</a>
										<a href="update.php?id=<?php echo $food->id ?>" class="btn btn-primary btn-xs">Edit</a>
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