<?php 

    include_once 'baseController.php';

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

        $sql = "select * from menu_category";
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);

        return $arrData;
    }

    function store()
    {
        checkSession();

        $id = $_REQUEST["id"];
        $name = $_REQUEST["food_name"];
        $category = $_REQUEST["cat_id"];
        $price = $_REQUEST["price"];
        $ingredient = $_REQUEST["ingredient"];
        $status = "AVAILABLE";

        $oldValues = ["" => "",
                        "food_name" => $name,
                        "cat_id" => $category,
                        "price" => $price,
                        "ingredient" => $ingredient
                    ];

        $err = [""];
        $var = true;

        if($name == "")
        {
            $var = false;
            array_push($err,"Name cannot be empty");
        }
        if($category == "")
        {
            $var = false;
            array_push($err,"Choose a category");
        }
        if($price == "")
        {
            $var = false;
            array_push($err,"Enter price");
        }
        if($ingredient == "")
        {
            $var = false;
            array_push($err,"Enter ingredients");
        }
        if($var == false)
        {
            $old = http_build_query(array('old' => $oldValues));
            $errData = http_build_query(array('err' => $err));
            header('Location: create.php?err='.$errData.'&'.$old);
            return;
        }

        $permited = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']['tmp_name'];
    
        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $image =  CTRL_ROOT."resources/images/menu/".$unique_image;
        $image_data =  "images/menu/".$unique_image;

        if ($file_size >3145728) 
        {
            echo "<p>Image Size should be less then 3MB!</p>";
        } 
        else if (in_array($file_ext, $permited) === false) 
        {
            echo "<p>You can upload only: ".implode(', ', $permited)."</p>";
        } 
        else
        {
            move_uploaded_file($file_temp, $image);

            $sql = "INSERT INTO `menu`(`food_name`,`cat_id`, `price`, `ingredient`, `image`,`status`) VALUES ('".$name."','".$category."','".$price."','".$ingredient."','".$image_data."','".$status."')";
        
            $id = executeQuery($sql);
            var_dump($id);

            header('Location: single.php?id='.$id.' ');
        }
    }

    function show()
    {
        $id = $_REQUEST["id"];
        $sql = "SELECT * from menu_category where id ='".$id."'";  
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);
        
        return $arrData;
    }

    function update()
    {
        checkSession();

        $id = $_REQUEST["id"];
        $cat = $_REQUEST["cat_id"];
        $name = $_REQUEST["food_name"];
        $price = $_REQUEST["price"];
        $ingredient = $_REQUEST["ingredient"];
        $status= $_REQUEST["status"];
        //$oldImg = $_REQUEST["oldImage"];
       // print_r($GLOBALS);
        $permited = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']['tmp_name'];
    
        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $image =  CTRL_ROOT."resources/images/menu/".$unique_image;
        $image_data =  "images/menu/".$unique_image;
        
        if (!empty($file_name)) {
            if ($file_size >3145728) 
            {
                echo "<p>Image Size should be less then 3MB!</p>";
            } 
            else if (in_array($file_ext, $permited) === false) 
            {
                echo "<p>You can upload only: ".implode(', ', $permited)."</p>";
            } 
            else
            {
                move_uploaded_file($file_temp, $image);

            $sql = "UPDATE `menu` SET `cat_id`='".$cat."',`food_name`='".$name."',`price`='".$price."',`ingredient`='".$ingredient."',`image`='".$image_data."',`status`='".$status."' WHERE id='".$id."'";

            $result = updateANDdeleteQuery($sql);
            }
        }
        else
        {
            $sql = "UPDATE `menu` SET `cat_id`='".$cat."',`food_name`='".$name."',`price`='".$price."',`ingredient`='".$ingredient."',`status`='".$status."' WHERE id='".$id."'";

            $result = updateANDdeleteQuery($sql);
        }
        
        

        header('Location: '.VIEW_ROOT.'menu/index.php');
    }

    function getCategory()
    {
        
        $sql = "select * from category";
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);
        
        return $arrData;
    }

?>