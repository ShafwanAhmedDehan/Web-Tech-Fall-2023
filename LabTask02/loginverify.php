<?php 
	$name = $_REQUEST['uname'];
	$pass = $_REQUEST['pass'];
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(empty($name) and empty($pass))
		{
			echo "Please enter the username<br>";
			echo "Please enter the password<br>";
		}
		elseif(empty($pass)) 
		{
			echo "Please enter the password";
		}
		elseif (empty($name)) 
		{
			echo "Please enter the username";
		}
		else
		{
			echo "Log in Successfully";
		}
	}
	else
	{
		echo "Vul hoicy";
	}
	function refining($data)
	{
		$data = htmlspecialchars($data);
		$data = trim($data);
		$data = stripslashes($data);
	}
?>

