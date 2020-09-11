<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<title>Dashboard</title>
		
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		
		<!-- Bootstrap 3.3.7 -->
		<link rel="stylesheet" href="../../resources/bower_components/bootstrap/dist/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="../../resources/bower_components/font-awesome/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="../../resources/bower_components/Ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="../../resources/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="../../resources/dist/css/AdminLTE.min.css">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		   folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="../../resources/dist/css/skins/_all-skins.min.css">
		<!-- Custom styles Css -->
		<link href="../../resources/css/custom.css" rel="stylesheet">
	

		<!-- Google Font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	</head>
	
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<header class="main-header">
				<!-- Logo -->
				<a href="../admin/index.php" class="logo">
					<!-- mini logo for sidebar mini 50x50 pixels -->
					<span class="logo-mini"><b>ADM</b></span>
					<!-- logo for regular state and mobile devices -->
					<span class="logo-lg"><b>Admin</b></span>
				</a>
				<!-- Header Navbar: style can be found in header.less -->
				<nav class="navbar navbar-static-top"></nav>
			</header>
			
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				<!-- sidebar -->
				<section class="sidebar">
					<!-- sidebar menu -->
					<ul class="sidebar-menu" data-widget="tree">
						<li class="treeview">
							<a href="#">
								<i class="fa fa-delicious"></i>
								<span>Order</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<!-- <li><a href="../order/create.php"><i class="fa fa-list-alt"></i> New Order</a></li> -->
								<li><a href="../order/index.php"><i class="fa fa-list-alt"></i> Order List</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-bookmark"></i>
								<span>Reservation</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="../reservation/index.php"><i class="fa fa-list-alt"></i> Reservation List</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-calculator"></i>
								<span>Transaction</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<!-- <li><a href="../transaction/create.php"><i class="fa fa-plus"></i> New Transaction</a></li> -->
								<li><a href="../transaction/index.php"><i class="fa fa-list-alt"></i> Transaction List</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-cutlery"></i>
								<span>Menu</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="../menu/create.php"><i class="fa fa-plus"></i> Add Food</a></li>
								<li><a href="../menu/index.php"><i class="fa fa-list-alt"></i> Food List</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-certificate"></i>
								<span>Category</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="../category/create.php"><i class="fa fa-plus"></i> Add Category</a></li>
								<li><a href="../category/index.php"><i class="fa fa-list-alt"></i> Category List</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-table"></i>
								<span>Table</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="../table/create.php"><i class="fa fa-plus"></i> Add Table</a></li>
								<li><a href="../table/index.php"><i class="fa fa-list-alt"></i> Table List</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-users"></i>
								<span>Employee</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="../employee/create.php"><i class="fa fa-plus"></i> Add Employee</a></li>
								<li><a href="../employee/index.php"><i class="fa fa-list-alt"></i> Employee List</a></li>
							</ul>
						</li>
						 <li>
							<a href="../login/logout.php"><i class="fa fa-sign-out"></i> <span>Log Out</span></a>
						</li>
					</ul>
				</section>
			</aside>

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">

				<!-- Main content -->
				<section class="content">
					<div class="row">