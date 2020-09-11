<?php 

	include '../config.php';
	include CTRL_FRONT.'orderController.php';
	$order = show();
	include '../admin/admin_dashboard.php';

?>

		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Order Detail</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Order</a></li>
				<li><a href="index.php"> Order List</a></li>
				<li class="active"> Order Detail</li>
			</ol>
		</section>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box">
				<div class="box-body">
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>Order ID:</th>
								<td><?php echo $order[0]->id?></td>
							</tr>
							<tr>
								<th>Menu ID:</th>
								<td><?php echo $order[0]->menu_id?></td>
							</tr>
							<tr>
								<th>Unit Price:</th>
								<td><?php echo $order[0]->unit_price?></td>
							</tr>
							<tr>
								<th>Quantity:</th>
								<td><?php echo $order[0]->quantity?></td>
							</tr>
							<tr>
								<th>Price:</th>
								<td><?php echo $order[0]->price?></td>
							</tr>
							<tr>
								<th>Transaction ID:</th>
								<td><?php echo $order[0]->trans_id?></td>
							</tr>
						</table>
						<div class="box-footer">
							<a href="index.php" class="btn btn-danger">Back To List</a>
							<a href="update.php?id=<?php echo $order[0]->id?>" class="btn btn-primary" style="float: right;">Edit</a>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php 

	include '../admin/admin_footer.php';

?>		  