<?php 

	include '../config.php';
	include CTRL_FRONT.'orderController.php';
	$total = totalPrice();
	//print_r($total);
	include '../layout/user_header.php';

?>

		
		<!-- Page Area Start -->
		<section class="page-area black-overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="page-title"> 
							<h1>Checkout</h1>
							<p><a href="../index.php">Home</a> / <a href="checkout.php">Checkout</a></p>
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
						<div class="error"> 
							<?php
								$old = ["" => "",
											"name" => "",
											"phone" => "",
											"address" => ""
										];

								if(isset($_REQUEST["old"]))
								{
									$old =  $_REQUEST["old"];
								}
								
								if(isset($_REQUEST["err"]))
								{
									$err = $_REQUEST["err"];
									echo "<h2 style='color:red'>Errors: </h2>";
									foreach($err as $e)
									{ ?>	
										<ul style="color:red"><li><?php echo $e ?></li></ul>
									<?php }
								}	
							?>
						</div>
						<form method="post">
							<div class="form-group">
								<label for="Total Price">Total Price: </label>
								<input type="text" name="total_price" class="form-control" value="৳<?php echo $total ?>" disabled>
                      	  	</div>
							<div class="form-group">
								<label for="Transaction Type">Transaction Type: </label>
								<input type="text" name="trans_type" class="form-control" value="CASH ON DELIVERY" disabled>
                      	  	</div>
							<div class="form-group">
								<label for="Name">Enter Your Name: </label>
								<input type="text" name="name" class="form-control"  value="<?php echo $old['name']; ?>">
                      	  	</div>
							<div class="form-group">
								<label for="Name">Phone/Mobile: </label>
								<input type="text" name="phone" class="form-control" value="<?php echo $old['phone']; ?>">
                      	  	</div>
							<div class="form-group">
								<label for="Name">Address: </label>
								<input type="text" name="address" class="form-control" value="<?php echo $old['address']; ?>">
                      	  	</div>
							<div class="box-footer">
								<button type="submit" name="checkout" class="btn btn-primary">Done</button>
							</div>
						</form>
                    </div>
				</div>	
			</div>
		</section>

<?php 

	include '../layout/user_footer.php';

?>		  