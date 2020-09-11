<?php 

	include_once('baseController.php');
	
	if (isset($_REQUEST["submit"]))
	{
		login();
	}
	
	function login()
	{
		$admin_email = $_REQUEST['email'];
		$admin_password = $_REQUEST['password'];
		$sql = "select * from login where email = '".$admin_email."' and password = '".$admin_password."' ";
		$sqlFunction = readQuery($sql);
		
		$jsonResult = json_decode($sqlFunction);
		
		if ($jsonResult != null)
		{
			$_SESSION["loggedUser"] = "true";
			$_SESSION["userID"] = $jsonResult[0]->id;
			$_SESSION["userEmail"] = $jsonResult[0]->email;
			
			header('Location: ' .VIEW_ROOT.'admin/index.php');
		}
		else
        {
            echo "email and password did not matched";
        } 
	}

?>