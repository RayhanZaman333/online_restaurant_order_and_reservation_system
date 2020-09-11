<?php 

    session_start();

    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];
        $qnty = $_REQUEST['qnty'];
        $order = ["id" => $id, "qnty" => $qnty];

        $orders = [];
        $orderNew = [];
        $new = [];
        if(isset($_SESSION["orders"]))
        {
            
            $orders = $_SESSION["orders"];
            $orderNew = [];
            echo "order";
            print_r($orders);
            $ovaluve = false;
            foreach($orders as $ord)
            {

                echo $ord['id'] ."=>".$id."<br>";
                if($ord['id']==$id)
                { 

                    echo "if ".$ord['id'] ."=>".$id."<br>";
                    $new = ["id" => $ord['id'], "qnty" => $qnty+$ord['qnty']];
                    // chek it
                    $ovaluve = true;
                    
                }
                else
                {
                    echo "else <br>";
                    $new = ["id" => $ord['id'], "qnty" => $ord['qnty']];
                    
                }
                array_push($orderNew,$new);
                //print_r( $orderNew);
                
            }
            if($ovaluve == false)
            {
                array_push($orderNew,$order);
            }
        }
        else
        {
            $orderNew = [$order];
        }
        echo "<br> Final <br>";
        print_r( $orderNew);
        $_SESSION["orders"] = $orderNew;
    }

?>