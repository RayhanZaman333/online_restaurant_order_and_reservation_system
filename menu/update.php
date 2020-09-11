<?php 

	include '../config.php';
	include CTRL_FRONT.'menuController.php';
	$menu = show();
	$category = getCategory();
	include '../admin/admin_dashboard.php';

?>
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Edit Food</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Menu</a></li>
				<li><a href="index.php"> Food List</a></li>
				<li class="active"> Edit Food</li>
			</ol>
		</section>
		
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box box-info">
				<!-- form start -->
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="Food ID" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Food ID</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="id" class="form-control" value="<?php echo $menu[0]->id ?>" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="Food Name" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Food Name</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="food_name" class="form-control" value="<?php echo $menu[0]->food_name ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="Category" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Category</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<select name="cat_id" class="form-control">
									<?php foreach($category as $cat){
										if($cat->id == $menu[0]->cat_id)
										{ ?>
											<option value=<?php echo $cat->id; ?> selected><?php echo $cat->cat_name; ?></option>
										<?php } 
										else 
										{ ?>
											<option value=<?php echo $cat->id; ?>><?php echo $cat->cat_name; ?></option>
									<?php } } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="Ingredient" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Ingredients</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="ingredient" class="form-control" value="<?php echo $menu[0]->ingredient ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="Price" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Price</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="price" class="form-control" value="<?php echo $menu[0]->price ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="Price" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Previous Image</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
							<img src="<?php echo RSR.$menu[0]->image?>" alt="" height="80px" width="120px">
							</div>
						</div>
						<div class="form-group">
							<label for="Price" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">New Image</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="file" name="image" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="Status" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Status</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<select name="status" class="form-control">
									<?php if($menu[0]->status == "AVAILABLE"){ ?>
                            			<option value="AVAILABLE" selected>AVAILABLE</option>
										<option value="HIDDEN">HIDDEN</option>
										<option value="REMOVED">REMOVED</option>
                       				<?php } ?>
									<?php if($menu[0]->status == "HIDDEN"){ ?>
                            			<option value="HIDDEN" selected>HIDDEN</option>
										<option value="AVAILABLE">AVAILABLE</option>
										<option value="REMOVED">REMOVED</option>
									<?php } ?>
									<?php if($menu[0]->status == "REMOVED"){ ?>
                            			<option value="REMOVED" selected>REMOVED</option>
										<option value="AVAILABLE">AVAILABLE</option>
										<option value="HIDDEN">HIDDEN</option>
                       				<?php } ?>
								</select>
							</div>
						</div>
						<div class="box-footer">
							<a href="index.php" class="btn btn-danger">Back To List</a>
							<button type="submit" name="update" class="btn btn-primary">Update</button>
						</div>
					</div>
				</form>
			</div>
        </div>
		  
<?php 

	include '../admin/admin_footer.php';

?>		  