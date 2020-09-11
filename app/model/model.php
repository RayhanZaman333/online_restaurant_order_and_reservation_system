<?php 

	//universal variables
	define("host","localhost");
	define("username","root");
	define("password","");
	define("database","restaurant");
	
	//function for reading queries(select statements)
	function readQuery($sql)
	{		
		$connect = new mysqli(host, username, password, database);
		
		if ($connect->connect_error)
		{
			die("Connection Failed: " . $connect->connect_error);			
		}
		
		$arr = [];
		$result = $connect->query($sql);
		
		if ($result == TRUE)
		{
			while($row = $result->fetch_assoc())
			{
				$arr[] = $row;
			}
		}
		else
		{
			echo "Error: " . $connect->error;
		}
		
		$json_data = json_encode($arr);
		$connect->close();
		
		return $json_data;
	}
	
	//function for adding queries(insert statements)
	function executeQuery($sql)
	{
		$connect = new mysqli(host, username, password, database);
		
		if ($connect->connect_error)
		{
			die("Connection Failed: " . $connect->connect_error);			
		}
		
		$result = $connect->query($sql);
		$last_id;
		
		if ($result == TRUE)
		{
			$last_id=$connect->insert_id;
		}
		else
		{
			$last_id = 0;
		}
		
		$connect->close();
		
		return $last_id;
	}

	//function for modifying and removing queries(update and delete statements)
	function updateANDdeleteQuery($sql)
	{
		$connect = new mysqli(host, username, password, database);
		
		if ($connect->connect_error)
		{
			die("Connection Failed: " . $connect->connect_error);			
		}
		
		$result = $connect->query($sql);
		$connect->close();
		
		return $result;
	}
	
?>