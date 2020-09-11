<?php 

    include_once 'baseController.php';

    if(isset($_REQUEST["reservationStore"]))
    {
        reservationStore();
    }

    if(isset($_REQUEST["submit"]))
    {
        store();
    }
    if(isset($_REQUEST["update"]))
    {
        update();
    }

    function index()
    {
        checkSession();
        
        $sql = "select * from reservation";
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);

        return $arrData;
    }

    function reservationStore()
    {
        $name = $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $address = $_REQUEST['address'];
        $date = $_REQUEST['date'];
        $time = $_REQUEST['time'];
        $tableNo = $_REQUEST['tableId'];
        $msg = $_REQUEST['request'];
        $status = "BOOKED";
        $date = date('Y-m-d',strtotime($date));

        $oldValues = ["" => "",
                        "name" => $name,
                        "phone" => $phone,
                        "address" => $address,
                        "date" => $date,
                        "time" => $time,
                        "tableId" => $tableNo
                    ];

        $err = [""];
        $var = true;

        if($name == "")
        {
            $var = false;
            array_push($err,"Name cannot be empty");
        }
        if($phone == "")
        {
            $var = false;
            array_push($err,"Enter Your Phone Number");
        }
        if($address == "")
        {
            $var = false;
            array_push($err,"Enter Your Address");
        }
        if($date == "")
        {
            $var = false;
            array_push($err,"Date cannot be empty");
        }
        if($time == "")
        {
            $var = false;
            array_push($err,"Time cannot be empty");
        }
        if($tableNo == "")
        {
            $var = false;
            array_push($err,"Choose a table");
        }
        if($var == false)
        {
            $old = http_build_query(array('old' => $oldValues));
            $errData = http_build_query(array('err' => $err));
            header('Location: '.VIEW_ROOT.'reservation/create.php?err='.$errData.'&'.$old);
            return;
        }

        //print_r($date);
        $sql = "INSERT INTO `reservation`(`id`, `rt_id`, `name`, `phone`, `address`, `special_req`, `date`, `time`, `status`) VALUES (NULL,".$tableNo.",'".$name."',".$phone.",'".$address."','".$msg."','".$date."','".$time."','".$status."')";
        $id = executeQuery($sql);

        //print_r($id);

        //return false;

        if($id != 0)
        {
            header('Location: '.VIEW_ROOT.'reservation/user_detail.php?id='.$id.' ');
            return true;
        }
        else{
            header('Location: '.VIEW_ROOT.'reservation/create.php');
            return true;
        }

    }

    function show()
    {
        $id = $_REQUEST["id"];
        $sql = "SELECT * from reservation_rt where id ='".$id."'";  
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);
        
        return $arrData;
    }

    function update()
    {
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $address = $_REQUEST['address'];
        $date = $_REQUEST['date'];
        $time = $_REQUEST['time'];
        $tableNo = $_REQUEST['tableId'];
        $status = $_REQUEST['status'];
        $date = date('Y-m-d',strtotime($date));
        $sql = "UPDATE `reservation` SET `rt_id`='".$tableNo."',`name`='".$name."',`phone`='".$phone."',`address`='".$address."',`date`='".$date."',`time`='".$time."',`status`='".$status."' where id='".$id."'";
        $result = updateANDdeleteQuery($sql);

        header('Location: '.VIEW_ROOT.'reservation/detail.php?id='.$id.' ');
    }

    function getTable()
    {
        $sql = "select * from reserve_table";
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);
        
        return $arrData;
    }

    function getReservation($date)
    {
        $sql = "Select * from reservation_table";
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);
        return $jsonData;
    }

    function getReservationTime($id,$date)
    {
        $sql = "SELECT * FROM `reservation_rt` where rt_id ='".$id."' and `date`='".$date."'";
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);
        return $jsonData;
    }



?>