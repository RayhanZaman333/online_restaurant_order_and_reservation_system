<?php 

    $arr = [["id"=>"1", "quantity" => "2"],['id'=>"2", "quantity" => "4"]]; 
    //print_r ($arr);
    session_start();
    $_SESSION["cart"] = $arr;

?>

<form action="" method="post" onsubmit="return validateData();">
    <input type="submit" name="orderNow" class="order-btn" value = "Order Now">
</form>

<script> 
    function orderNow()
    {
        alert();
        return false;
    }
    alert();
</script>
 <form action="" id="form" onsubmit="return validateData();">
        
        <input type="submit" name="submit" id="" value="submit">
    </form>

    <script> 
        function validateData(){
    alert("validation");
    //alert(val);
    validate = false;
    // validateName();
    // validateEmail();
    // validateGender();
    if(validate == true)
    {
        return true;
    }
    else
    {
        return false;
    }
}
    </script>