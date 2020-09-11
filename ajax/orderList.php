<?php 

    include '../config.php';
	include CTRL_FRONT.'orderController.php';
	$orderList = orderList();

?>                        
                        
                        <table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Food ID:</th>
										<th>Food Name:</th>
										<th>Price:</th>
										<th>Quantity:</th>
										<th>Total Price:</th>
										<th>Action:</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										//$order = $_SESSION['orders'];
										//print_r($order);
										//print_r($orderList);
										foreach($orderList as $ordList)
										{ ?>
											<tr>
												<td><?php echo $ordList[0]->id; ?></td>
												<td><?php echo $ordList[0]->food_name; ?></td>
												<td><?php echo $ordList[0]->price; ?></td>
												<td><?php echo $ordList[1]; ?></td>
												<td><?php echo $ordList[1] * $ordList[0]->price; ?></td>
												<td>
												<button class="btn btn-danger" onclick="orderCancel(<?php echo $ordList[0]->id ?>)">Remove</button>
												</td>
											</tr>
										<?php } ?>
								</tbody>
							</table>