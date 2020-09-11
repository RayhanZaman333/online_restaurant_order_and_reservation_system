<?php 

	include_once '../config.php';
	include_once CTRL_FRONT.'reservationController.php';

    $id = $_REQUEST['id'];
    $date =  $_REQUEST['date'];
    //return 
    $getReserve = getReservationTime($id,$date);

    print_r($getReserve);
?>