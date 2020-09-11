<?php 

    include '../config.php';
	include CTRL_FRONT.'tableController.php';
	include '../admin/admin_dashboard.php';

?>
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Add New Table</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Table</a></li>
				<li class="active"> Add Table</li>
			</ol>
		</section>
		
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box box-info">
				<!-- form start -->
				<form class="form-horizontal" method="post">
					<div class="box-body">
						<div class="form-group">
							<label for="Table Name" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Table Name</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="name" class="form-control" placeholder="table name">
							</div>
						</div>
						<div class="form-group">
							<label for="Max Accomodate" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Max Accomodate</label>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="text" name="max_accomodate" class="form-control" placeholder="max accomodate">
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<input type="hidden" name="status" class="form-control" placeholder="status">
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