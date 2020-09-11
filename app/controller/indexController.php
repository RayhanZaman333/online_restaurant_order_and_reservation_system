<?php 

    include_once 'baseController.php';

   
    if(isset($_REQUEST["update"]))
    {
        update();
    }

    function menu($catName)
    {
        $sql = "select * from menu_category where cat_name='".$catName."' limit 10";
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);

        return $arrData;
    }

    function menuAll()
    {
        $sql = "select * from menu_category limit 10";
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);

        return $arrData;
    }

    function employee()
    {
        $sql = "select * from employee";
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);

        return $arrData;
    }