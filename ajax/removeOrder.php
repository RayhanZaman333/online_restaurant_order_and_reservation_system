<?php 

    session_start();

    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];

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
                if($ord['id']!=$id)
                { 

                    //echo "if ".$ord['id'] ."=>".$id."<br>";
                    //$new = ["id" => $ord['id'], "qnty" => $qnty+$ord['qnty']];
                    // chek it
                    //$ovaluve = true;

                    echo "else <br>";
                    $new = ["id" => $ord['id'], "qnty" => $ord['qnty']];

                    array_push($orderNew,$new);
                    
                }
                
                //print_r( $orderNew);
                
            }
        }
        echo "<br> Final <br>";
        print_r( $orderNew);
        $_SESSION["orders"] = $orderNew;
    }

?>