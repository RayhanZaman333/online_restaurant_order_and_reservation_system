<?php 

	include '../config.php';
	include CTRL_FRONT.'categoryController.php';
	$category = show();
	include '../admin/admin_dashboard.php';

?>
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Edit Category</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Category</a></li>
				<li><a href="index.php"> Category List</a></li>
				<li class="active"> Edit Category</li>
			</ol>
		</section>
		
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box box-info">
				<!-- form start -->
				<form class="form-horizontal" method="post">
					<div class="box-body">
						<div class="form-group">
							<label for="Category ID" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Category ID</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="id" value="<?php echo $category[0]->id ?>" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="Category Name" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Category Name</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="cat_name" value="<?php echo $category[0]->cat_name ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="Status" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Status</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<select name="status" class="form-control">
									<?php if($category[0]->status == "ACTIVE"){ ?>
                            			<option value="ACTIVE" selected disabled>ACTIVE</option>
										<option value="HIDDEN">HIDDEN</option>
										<option value="REMOVED">REMOVED</option>
                       				<?php } ?>
									<?php if($category[0]->status == "HIDDEN"){ ?>
                            			<option value="HIDDEN" selected disabled>HIDDEN</option>
										<option value="ACTIVE">ACTIVE</option>
										<option value="REMOVED">REMOVED</option>
									   <?php } ?>
									<?php if($category[0]->status == "REMOVED"){ ?>
                            			<option value="REMOVED" selected disabled>REMOVED</option>
										<option value="ACTIVE">ACTIVE</option>
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