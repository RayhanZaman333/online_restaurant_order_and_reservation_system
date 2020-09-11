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

    function index()
    {
        $sql = "select * from reserve_table";
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);

        return $arrData;
    }

    function store()
    {
        $name = $_REQUEST["name"];
        $accomodate = $_REQUEST["max_accomodate"];
        $status = "AVAILABLE";
        $sql = "INSERT INTO `reserve_table`(`name`, `max_accomodate`, `status`) VALUES ('".$name."','".$accomodate."','".$status."')";
        
        $id = executeQuery($sql);

        header('Location: single.php?id='.$id.' ');
    }

    function show()
    {
        $id = $_REQUEST["id"];
        $sql = "select * from reserve_table where id='".$id."'";
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);
        
        return $arrData;
    }

    function update()
    {
        $id = $_REQUEST["id"];
        $name = $_REQUEST["name"];
        $accomodate = $_REQUEST["max_accomodate"];
        $status = $_REQUEST["status"];
        $sql = "UPDATE `reserve_table` SET `name`='".$name."',`max_accomodate`='".$accomodate."',`status`='".$status."' WHERE id='".$id."'";
        $result = updateANDdeleteQuery($sql);

        header('Location: '.VIEW_ROOT.'table/index.php');
    }

?>