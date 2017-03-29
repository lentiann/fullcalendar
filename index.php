<?php
	include('log.php');

	if ((isset($_SESSION['uname']) != '')) 
	{
		header('Location: orar.php');
	}	
?>
<!DOCTYPE html>
<head>
	<title>
		Login-Form
	</title>
</head>
<body>
<div style="width:200px;padding:30px 0px 0px 600px;">
	<form method="post" action="">
				<h3>Username</h3>
				<input type="text" name="uname" required>
			</br>
				<h3>Password</h3>
				<input type="password" name="pass" required>
			</br>
			</br>
	<input type="submit" name="reg" value="Login" style="border-radius:10px;margin-left:60px;padding:7px 15px 7px 15px;">
	</form>
</div>
</body>
</html>