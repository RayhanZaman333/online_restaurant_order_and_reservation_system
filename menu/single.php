<?php 

	include '../config.php';
	include CTRL_FRONT.'menuController.php';
	$menu = show();
	$category = getCategory();
	include '../admin/admin_dashboard.php';

?>

		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Food Detail</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Menu</a></li>
				<li><a href="index.php"> Food List</a></li>
				<li class="active"> Food Detail</li>
			</ol>
		</section>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box">
				<div class="box-body">
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>Food Image:</th>
								<td><img src="<?php echo RSR.$menu[0]->image?>" alt="" width="120" height="80"></td>
							</tr>
							<tr>
								<th>Food ID:</th>
								<td><?php echo $menu[0]->id?></td>
							</tr>
							<tr>
								<th>Food Name:</th>
								<td><?php echo $menu[0]->food_name?></td>
							</tr>
							<tr>
								<th>Category:</th>
								<td><?php echo $menu[0]->cat_name?></td>
							</tr>
							<tr>
								<th>Price:</th>
								<td><?php echo $menu[0]->price?></td>
							</tr>
							<tr>
								<th>Ingredient:</th>
								<td><?php echo $menu[0]->ingredient?></td>
							</tr>
							<tr>
								<th>Status</th>
								<?php 
									if($menu[0]->status == "AVAILABLE")
									{ ?>
										<td style="color: green;"><?php echo $menu[0]->status ?></td>
									<?php }
									else
									{ ?>
										<td style="color: red;"><?php echo $menu[0]->status ?></td>
									<?php }
								?>
							</tr>
						</table>
						<div class="box-footer">
							<a href="index.php" class="btn btn-danger">Back To List</a>
							<a href="update.php?id=<?php echo $menu[0]->id?>" class="btn btn-primary" style="float: right;">Edit</a>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php 

	include '../admin/admin_footer.php';

?>		  