<?php 

	include_once '../config.php';
	include_once CTRL_FRONT.'reservationController.php';

    $date = $_REQUEST['date'];
    
    //return 
    $getReserve = getReservation($date);

    print_r($getReserve);
?>