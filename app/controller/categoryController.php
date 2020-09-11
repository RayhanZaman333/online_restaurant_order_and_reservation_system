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
        $sql = "select * from category";
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);

        return $arrData;
    }

    function store()
    {
        $name = $_REQUEST["cat_name"];
        $status = "ACTIVE";

        $oldValues = ["" => "",
                        "cat_name" => $name
                    ];

        $err = [""];
        $var = true;

        if($name == "")
        {
            $var = false;
            array_push($err,"Name cannot be empty");
        }
        if($var == false)
        {
            $old = http_build_query(array('old' => $oldValues));
            $errData = http_build_query(array('err' => $err));
            header('Location: create.php?err='.$errData.'&'.$old);
            return;
        }

        $sql = "INSERT INTO `category`(`cat_name`,`status`) VALUES ('".$name."','".$status."')";
        
        $id = executeQuery($sql);

        header('Location: single.php?id='.$id.' ');
    }

    function show()
    {
        $id = $_REQUEST["id"];
        $sql = "select * from category where id='".$id."'";
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);
        
        return $arrData;
    }

    function update()
    {
        $id = $_REQUEST["id"];
        $name = $_REQUEST["cat_name"];
        $status= $_REQUEST["status"];
        $sql = "UPDATE `category` SET `cat_name`='".$name."',`status`='".$status."' WHERE id='".$id."'";
        $result = updateANDdeleteQuery($sql);

        header('Location: '.VIEW_ROOT.'category/index.php');
    }

?>