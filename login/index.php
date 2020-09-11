<?php 

	include_once '../config.php';
	include_once CTRL_FRONT.'loginController.php';

?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			
			<title>Sign in</title>
			
			<!-- Tell the browser to be responsive to screen width -->
			<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
			
			<!-- Bootstrap 3.3.7 -->
			<link rel="stylesheet" href="../../resources/bower_components/bootstrap/dist/css/bootstrap.min.css">
			<!-- Font Awesome -->
			<link rel="stylesheet" href="../../resources/bower_components/font-awesome/css/font-awesome.min.css">
			<!-- Ionicons -->
			<link rel="stylesheet" href="../../resources/bower_components/Ionicons/css/ionicons.min.css">
			<!-- Theme style -->
			<link rel="stylesheet" href="../../resources/dist/css/AdminLTE.min.css">
			<!-- iCheck -->
			<link rel="stylesheet" href="../../resources/plugins/iCheck/square/blue.css">

			<!-- Google Font -->
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	</head>
	
	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href="index.php"><b>LOGIN</b></a>
			</div>
			<div class="login-box-body">
				<form action="" method="post">
					<div class="form-group has-feedback">
						<input type="email" name="email" class="form-control" placeholder="Email">
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<input type="password" name="password" class="form-control" placeholder="Password">
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<input type="submit" name="submit" class="btn btn-primary btn-block btn-flat" value="Submit">
						</div>
					</div>
				</form>
			</div>
		</div>

		<!-- jQuery 3 -->
		<script src="../../resources/bower_components/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap 3.3.7 -->
		<script src="../../resources/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
	</body>
</html>
