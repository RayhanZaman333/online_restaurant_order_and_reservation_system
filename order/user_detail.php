<?php 

	include '../config.php';
	include CTRL_FRONT.'menuController.php';
	$menu = show();
	$category = getCategory();
	include '../layout/user_header.php';

?>

		
		<!-- Page Area Start -->
		<section class="page-area black-overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="page-title"> 
							<h1>Food Detail</h1>
							<p><a href="../index.php">Home</a> / <a href="user_detail.php">Food Detail</a></p>
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
						<div class="single-food">
							<table class="">
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
									<td><?php echo $menu[0]->status?></td>
								</tr>
							</table>
						</div>	
					</div>	
				</div>	
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label for="Quantity">Enter Quantity</label>
							<input type="number" id="qnty" name="quantity" min="1" value="1">
							<div class="cart-btn"> 
								<button class="btn btn-primary" onclick="order(<?php echo $menu[0]->id ?>)">Add to cart</button>
								<div id="snackbar">Item Added To Cart</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php 

	include '../layout/user_footer.php';

?>		  