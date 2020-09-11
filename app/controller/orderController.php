<?php 

    include_once 'baseController.php';

    if(isset($_REQUEST["checkout"]))
    {
        checkout();
    }

    function index()
    {
        checkSession();
        
        $sql = "select * from invoice";
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);

        return $arrData;
    }

    function show()
    {
        $arrData = $_SESSION['orders'];

        return $arrData;
    }

    function orderList()
    {
        $arr = [];

        if(isset($_SESSION['orders']))
        {
            $order = $_SESSION['orders'];

            
            foreach($order as $ord)
            {
                $sql = "select * from menu_category where id =".$ord['id'];
                $jsonData = readQuery($sql);
                $arrData = json_decode($jsonData);

                // $qnty = ['qnty'=];
                array_push($arrData,$ord['qnty']);
                array_push($arr,$arrData);
                
            
            }
        }
        
        
        return $arr;
    }

    function totalPrice()
    {
        $orderList = orderList();
        $total = 0;

        foreach($orderList as $ordList)
        {
            $total += $ordList[0]->price * $ordList[1];
        }
        
        return $total;
    }

    function checkout()
    {
        $orderList = orderList();
        $total = totalPrice();

        $name = $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $address = $_REQUEST['address'];
        $status = "ON PROCESS";

        $oldValues = ["" => "",
                        "name" => $name,
                        "phone" => $phone,
                        "address" => $address
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
            array_push($err,"Phone cannot be empty");
        }
        if($address == "")
        {
            $var = false;
            array_push($err,"Address cannot be empty");
        }
        if($var == false)
        {
            $old = http_build_query(array('old' => $oldValues));
            $errData = http_build_query(array('err' => $err));
            header('Location: checkout.php?err='.$errData.'&'.$old);
            return;
        }

        $sql = "INSERT INTO `transaction`(`name`,`phone`, `address`, `total_price`,`status`) VALUES ('".$name."','".$phone."','".$address."','".$total."','".$status."')";

        $id = executeQuery($sql);

        foreach($orderList as $ordList)
        {
            $sql = "INSERT INTO `invoice`(`menu_id`,`unit_price`, `quantity`, `price`,`trans_id`) VALUES ('".$ordList[0]->id."','".$ordList[0]->price."','".$ordList[1]."','".$ordList[0]->price * $ordList[1]."','".$id."')";

            $invoice = executeQuery($sql);
        }
        
        session_destroy();


        header('Location: checkoutSuccess.php');
    }



?>