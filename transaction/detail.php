<?php 

	include '../config.php';
	include CTRL_FRONT.'transactionController.php';
	$transaction = show();
	include '../admin/admin_dashboard.php';

?>

		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Transaction Detail</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Transaction</a></li>
				<li><a href="index.php"> Transaction List</a></li>
				<li class="active"> Transaction Detail</li>
			</ol>
		</section>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box">
				<div class="box-body">
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>Transaction ID:</th>
								<td><?php echo $transaction[0]->id?></td>
							</tr>
							<tr>
								<th>Name:</th>
								<td><?php echo $transaction[0]->name?></td>
							</tr>
							<tr>
								<th>Total Price:</th>
								<td><?php echo $transaction[0]->total_price?></td>
							</tr>
							<tr>
								<th>Phone:</th>
								<td><?php echo $transaction[0]->phone?></td>
							</tr>
							<tr>
								<th>Address:</th>
								<td><?php echo $transaction[0]->address?></td>
							</tr>
							<tr>
								<th>Status</th>
								<?php 
									if($transaction[0]->status == "DELIVERED")
									{ ?>
										<td style="color: green;"><?php echo $transaction[0]->status ?></td>
									<?php }
									else if($transaction[0]->status == "ON PROCESS")
									{ ?>
										<td style="color: orange;"><?php echo $transaction[0]->status ?></td>
									<?php }
									else
									{ ?>
										<td style="color: red;"><?php echo $transaction[0]->status ?></td>
									<?php }
								?>
							</tr>
						</table>
						<div class="box-footer">
							<a href="index.php" class="btn btn-danger">Back To List</a>
							<?php 
								if($transaction[0]->status != "DELIVERED")
								{ ?>
									<form action=""> 
										<input type="hidden" name="id" value="<?php echo $transaction[0]->id?>">
										<input type="submit" class="btn btn-success" name="confirmOrder" style="float: right;" value="Confirm Order" />
									</form>
									<form action=""> 
										<input type="hidden" name="id" value="<?php echo $transaction[0]->id?>">
										<input type="submit" class="btn btn-danger" name="cancelOrder" style="float: right;margin-right: 10px" value="Cancel Order" />
									</form>
							<?php	}

							?>
							
						</div>
					</div>
				</div>
			</div>
		</div>

<?php 

	include '../admin/admin_footer.php';

?>		  