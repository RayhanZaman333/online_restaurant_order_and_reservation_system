<?php 

    include '../config.php';
	include CTRL_FRONT.'categoryController.php';
	include '../admin/admin_dashboard.php';

?>
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Add New Category</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Category</a></li>
				<li class="active"> Add Category</li>
			</ol>
		</section>
		
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box box-info">
				<!-- form start -->
				<div class="error"> 
					<?php
						$old = ["" => "",
									"cat_name" => ""
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
				
				<form class="form-horizontal" method="post">
					<div class="box-body">
						<div class="form-group">
							<label for="Category Name" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Category Name</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="cat_name" class="form-control" value="<?php echo $old['cat_name']; ?>">
							</div>
						</div>
						<div class="box-footer">
							<a href="index.php" class="btn btn-danger">Back To List</a>
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
			</div>
        </div>
		  
<?php 

	include '../admin/admin_footer.php';

?>		  