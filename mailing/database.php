<?php

	require "resources.php";
	

	function INSERT($name, $email)
	{
		$con = mysqli_connect($hostname, $username, $password, $database) or die("Connection Failed !!!");
		$sql = "insert into contactdata(name, email) 
				values('$name', '$email')";
		if(!mysqli_execute($con, $sql))
		{
			mysqli_close($con);
			echo "false";
		}
		else
		{
			mysqli_close($con);
			echo "true";
		}
	}

	function SEARCH($email)
	{
		$con = mysqli_connect($hostname, $username, $password, $database) or die("Connection Failed !!!");
		$sql = "select * from contactdata where email='$email'";
		$result = mysqli_execute($con, $sql);
		$rows = mysqli_fetch_array($result);
		if($rows > 0)
		{
			mysqli_close($con);
			echo "true";
		}
		else
		{
			mysqli_close($con);
			echo "false";
		}
	}
?>