<?php

	session_start();
	include ('db.php');
	$err="";
	if(isset($_POST["reg"]))
	{
			$uname=$_POST['uname'];
			$pass=$_POST['pass'];

			$sql="SELECT id_log FROM users WHERE uname='$uname' 
			and pass='$pass'";
			$result=mysqli_query($connection,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['uname'] = $uname;
				header("location: orar.php");
			}else
			{
				$err = "Incorrect username or password.";
			}

		}

?>