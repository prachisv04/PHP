<?php
session_start();
$conn = mysqli_connect('localhost','prachi','Pict123','userdata');
if($conn)
{
	if (isset($_POST['login'])) {
	# code...
		$username = $_POST['username'];
		$password = $_POST['password'];
	if(!empty($_POST['username']) && !empty($_POST['password']))
	{
			echo "connected to database";
			$sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
			$result = mysqli_query($conn,$sql);
			if(mysqli_num_rows($result) > 0){
 			header("Location:Home.html");			
		}
		else
		{
			$_SESSION['Error'] = "Wrong username or password";
			header("Location:login.php");
		}
	}
	else
	{
		$_SESSION['Error'] = "you left required field blank";
			header("Location:login.php");
	}
}
else
{
	echo "button not clicked";
}
}
else
{
	echo "Connection failed";
}

echo "data parsed";
?>