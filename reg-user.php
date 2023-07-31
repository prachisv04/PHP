<?php
session_start();
$conn = mysqli_connect('localhost','prachi','Pict123','userdata');
if($conn)
{
	if (isset($_POST['reg'])) {
	# code...
		$username = $_POST['username'];
		$password1 = $_POST['pass1'];
		$password2 = $_POST['pass2'];
	if(!empty($_POST['username']) && !empty($_POST['pass1']) && !empty($_POST['pass2']))
	{
			//echo "connected to database";
			if($password1 == $password2){
				
			$sql = "INSERT INTO users (username,password) VALUES ('$username','$password1')";
			if(mysqli_query($conn,$sql))
			{
				echo "Data Inserted";
			}
			else
			{
					echo "Error while inserting";
			}
			}
			else
			{
					$_SESSION['Error'] = "password mismatch";
					header("Location:credentials.php");
			}
			
			//if(mysqli_num_rows($result) > 0){
 			//header("Location:Home.html");			
		//}
		//else
		//{
		//	$_SESSION['Error'] = "Wrong username or password";
		//	header("Location:login.php");
		//}
	}
	else
	{
		$_SESSION['Error'] = "you left required field blank";
			header("Location:credentials.php");
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

//echo "data parsed";
?>



