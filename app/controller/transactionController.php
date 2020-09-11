<?php 

    include_once 'baseController.php';

    checkSession();

    if(isset($_REQUEST["submit"]))
    {
        store();
    }
    if(isset($_REQUEST["update"]))
    {
        update();
    }
    if(isset($_REQUEST["confirmOrder"]))
    {
        confirmOrder();
    }
    if(isset($_REQUEST["cancelOrder"]))
    {
        cancelOrder();
    }

    function index()
    {
        $sql = "select * from transaction";
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);

        return $arrData;
    }

    function show()
    {
        $id = $_REQUEST["id"];
        $sql = "SELECT * from transaction where id ='".$id."'";  
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);
        
        return $arrData;
    }

    function confirmOrder()
    {
        $id = $_REQUEST["id"];
        $status= "DELIVERED";
        $sql = "UPDATE `transaction` SET `status`='".$status."' WHERE id='".$id."'";
        $result = updateANDdeleteQuery($sql);

        header('Location: '.VIEW_ROOT.'transaction/index.php');
    }

    function cancelOrder()
    {
        $id = $_REQUEST["id"];
        $status= "CANCELLED";
        $sql = "UPDATE `transaction` SET `status`='".$status."' WHERE id='".$id."'";
        $result = updateANDdeleteQuery($sql);

        header('Location: '.VIEW_ROOT.'transaction/index.php');
    }

?>