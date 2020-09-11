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
        $sql = "select * from employee";
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);

        return $arrData;
    }

    function store()
    {
        $name = $_REQUEST["emp_name"];
        $designation = $_REQUEST["designation"];
        $salary = $_REQUEST["salary"];
        $phone = $_REQUEST["emp_phn"];
        $address = $_REQUEST["emp_address"];
        $join_date = $_REQUEST["emp_join"];
        $status = "ACTIVE";

        $oldValues = ["" => "",
                        "emp_name" => $name,
                        "designation" => $designation,
                        "salary" => $salary,
                        "emp_phn" => $phone,
                        "emp_address" => $address,
                        "emp_join" => $join_date
                    ];

        $err = [""];
        $var = true;

        if($name == "")
        {
            $var = false;
            array_push($err,"Name cannot be empty");
        }
        if($designation == "")
        {
            $var = false;
            array_push($err,"Choose a designation");
        }
        if($salary == "")
        {
            $var = false;
            array_push($err,"Enter Salary");
        }
        if($phone == "")
        {
            $var = false;
            array_push($err,"Enter phone number");
        }
        if($address == "")
        {
            $var = false;
            array_push($err,"Enter address");
        }
        if($join_date == "")
        {
            $var = false;
            array_push($err,"Enter employee join date");
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
        $image =  CTRL_ROOT."resources/images/chefs/".$unique_image;
        $image_data =  "images/chefs/".$unique_image;

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

            $sql = "INSERT INTO `employee`(`emp_name`, `designation`, `salary`, `emp_phn`, `emp_address`, `emp_join`, `image`, `status`) VALUES ('".$name."','".$designation."','".$salary."','".$phone."','".$address."','".$join_date."','".$image_data."','".$status."')";
        
            $id = executeQuery($sql);
            var_dump($id);

            header('Location: single.php?id='.$id.' ');
        }
    }

    function show()
    {
        $id = $_REQUEST["id"];
        $sql = "select * from employee where id='".$id."'";
        $jsonData = readQuery($sql);
        $arrData = json_decode($jsonData);
        
        return $arrData;
    }

    function update()
    {
        $id = $_REQUEST["id"];
        $name = $_REQUEST["emp_name"];
        $designation = $_REQUEST["designation"];
        $salary = $_REQUEST["salary"];
        $phone = $_REQUEST["emp_phn"];
        $address = $_REQUEST["emp_address"];
        $join_date = $_REQUEST["emp_join"];
        $status = $_REQUEST["status"];
        //$oldImg = $_REQUEST["oldImage"];
       // print_r($GLOBALS);
        $permited = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']['tmp_name'];
    
        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $image =  CTRL_ROOT."resources/images/chefs/".$unique_image;
        $image_data =  "images/chefs/".$unique_image;
        
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

                $sql = "UPDATE `employee` SET `emp_name`='".$name."',`designation`='".$designation."',`salary`='".$salary."',`emp_phn`='".$phone."',`emp_address`='".$address."',`emp_join`='".$join_date."',`image`='".$image_data."',`status`='".$status."' WHERE id='".$id."'";

                $result = updateANDdeleteQuery($sql);
            }
        }
        else
        {
            $sql = "UPDATE `employee` SET `emp_name`='".$name."',`designation`='".$designation."',`salary`='".$salary."',`emp_phn`='".$phone."',`emp_address`='".$address."',`emp_join`='".$join_date."',`status`='".$status."' WHERE id='".$id."'";

            $result = updateANDdeleteQuery($sql);
        }
        
        

        header('Location: '.VIEW_ROOT.'employee/index.php');
    }


?>