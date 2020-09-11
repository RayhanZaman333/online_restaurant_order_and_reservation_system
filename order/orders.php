<?php 

    include '../config.php';
	include CTRL_FRONT.'orderController.php';
	$orderList = orderList();
	
	include '../layout/user_header.php';

?>

		
		<!-- Page Area Start -->
		<section class="page-area black-overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="page-title"> 
							<h1>Order Detail</h1>
							<p><a href="../index.php">Home</a> / <a href="orders.php">Order Detail</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Page Area End -->
		
		<section class="detail-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="single-food" id="orders">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Food ID:</th>
										<th>Food Name:</th>
										<th>Price:</th>
										<th>Quantity:</th>
										<th>Total Price:</th>
										<th>Action:</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										//$order = $_SESSION['orders'];
										//print_r($order);
										//print_r($orderList);
										foreach($orderList as $ordList)
										{ ?>
											<tr>
												<td><?php echo $ordList[0]->id; ?></td>
												<td><?php echo $ordList[0]->food_name; ?></td>
												<td><?php echo $ordList[0]->price; ?></td>
												<td><?php echo $ordList[1]; ?></td>
												<td><?php echo $ordList[1] * $ordList[0]->price; ?></td>
												<td>
												<button class="btn btn-danger" onclick="orderCancel(<?php echo $ordList[0]->id ?>)">Remove</button>
												</td>
											</tr>
										<?php } ?>
								</tbody>
							</table>
						</div>	
						<div class="box-footer"> 
							<a href="../transaction/checkout.php" class="btn btn-success pull-right">Checkout</a>
						</div>
					</div>	
				</div>	
			</div>
		</section>

<?php 

	include '../layout/user_footer.php';

?>		  