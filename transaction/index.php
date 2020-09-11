<?php 

	include '../config.php';
	include CTRL_FRONT.'transactionController.php';
	$transaction = index();
	include '../admin/admin_dashboard.php';

?>

		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Transaction List</h1>
			<ol class="breadcrumb">
				<li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"> Transaction</a></li>
				<li class="active"> Transaction List</li>
			</ol>
		</section>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box">
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Transaction ID</th>
								<th>Name</th>
								<th>Total Price</th>
                                <th>Phone</th>
								<th>Date & Time</th>
								<th>Status</th>
								<th class="pull-right">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($transaction as $trans){ ?>
								<tr>
									<td><?php echo $trans->id ?></td>
									<td><?php echo $trans->name ?></td>
									<td><?php echo $trans->total_price ?></td>
									<td><?php echo $trans->phone ?></td>
									<td><?php echo $trans->date_time ?></td>
										<?php 
											if($trans->status == "DELIVERED")
											{ ?>
												<td style="color: green;"><?php echo $trans->status ?></td>
											<?php }
											else if($trans->status == "ON PROCESS")
											{ ?>
												<td style="color: orange;"><?php echo $trans->status ?></td>
											<?php }
											else
											{ ?>
												<td style="color: red;"><?php echo $trans->status ?></td>
											<?php }
										?>

									<td class="pull-right">
										<a href="detail.php?id=<?php echo $trans->id ?>" class="btn btn-success btn-xs">Details</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
        </div>

<?php 

	include '../admin/admin_footer.php';

?>	