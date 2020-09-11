<?php 

	include '../config.php';
	include CTRL_FRONT.'orderController.php';
	$order = index();
	include '../admin/admin_dashboard.php';

?>

		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Order List</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Order</a></li>
				<li class="active"> Order List</li>
			</ol>
		</section>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box">
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Order ID</th>
								<th>Menu ID</th>
								<th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Price</th>
								<th>Transaction ID</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($order as $odr){ ?>
								<tr>
									<td><?php echo $odr->id ?></td>
									<td><?php echo $odr->menu_id ?></td>
									<td><?php echo $odr->unit_price ?></td>
									<td><?php echo $odr->quantity ?></td>
                                    <td><?php echo $odr->price ?></td>
									<td><?php echo $odr->trans_id ?></td>
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