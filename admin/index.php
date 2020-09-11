<?php 

	include_once('../config.php'); 
	include_once(CTRL_FRONT.'dashboardController.php');
	include('admin_dashboard.php');

?>
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Hungry Station</h1>
			<ol class="breadcrumb">
				<li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			</ol>
		</section>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<section class="text-center">
			<h1>Welcome To Your Dashboard!!!</h1>
		</section>
		<section class="text-center">
			<a href="../order/index.php" class="btn btn-success">Order List</a>
			<a href="../reservation/index.php" class="btn btn-primary">Reservation List</a>
		</section>
<?php 

	include('admin_footer.php');

?>	