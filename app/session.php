<?php 

	session_start();
	
	function checkSession()
    {
        $sess = $_SESSION["loggedUser"];
        if($sess != "true")
        {
            header('Location: '.VIEW_ROOT.'login/index.php');

        }
    } 

?>
