<?php 

	include_once '../config.php';
	include_once CTRL_FRONT.'menuController.php';
	$category = getCategory();
	include '../admin/admin_dashboard.php';

?>
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Add New Food</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Food</a></li>
				<li class="active"> Add Food</li>
			</ol>
		</section>
		
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box box-info">
				<!-- form start -->
				<div class="error"> 
					<?php
						$old = ["" => "",
								"food_name" => "",
								"cat_id" => "",
								"price" => "",
								"ingredient" => ""
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
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="Food Name" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Food Name</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="food_name" class="form-control" value="<?php echo $old['food_name']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="Category" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Category</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<select name="cat_id" class="form-control">
									<?php
										if($old['cat_id'] == "")
										{ ?>
											<option value="null" disabled selected>--Select One--</option>
									<?php } ?>

									<?php foreach($category as $cat)
										{
											if($cat->id == $old['cat_id'])
											{ ?>
												<option value=<?php echo $cat->id; ?> selected><?php echo $cat->cat_name; ?></option>
											<?php }
											else
											{ ?>
												<option value=<?php echo $cat->id; ?>><?php echo $cat->cat_name; ?></option>
											<?php 
											}
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="Price" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Price</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="price" class="form-control" value="<?php echo $old['food_name']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="Ingredients" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Ingredients</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="ingredient" class="form-control" value="<?php echo $old['food_name']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="Food Image" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Enter Image</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="file" name="image" id="exampleInputFile">
							</div>
						</div>
						<div class="box-footer">
							<a href="index.php" class="btn btn-danger">Go To List</a>
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
			</div>
        </div>
		  
<?php 

	include '../admin/admin_footer.php';

?>		  