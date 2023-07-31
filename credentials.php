<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="registercss.css">
<style type="text/css">
  #pass1,#pass2,#username{
    margin-top: -27px;
   height: 30px; 
  margin-left: 40px;
  border:solid;
   border-bottom-width: 2px;
   border-left-width: 0px;
   border-right-width: 0px;
   border-top-width: 0px; 
 float: left;
}

</style>

</head>
<body class="bg">
	<div >
		<h1 style="text-align: center; font-size: 70px; color: black;"><a href="Home.html" style="color: black;">Luxurious Landing</a></h1>
	</div>

  <center>
  

  
 
  <form action="reg-user.php" name="credential" method="POST" style="height: 400px; width: 650px ; background-color: #fff;" > <br>
<br><br>
 <label for="username" style="color:#2e4053; float: left; margin-left: 140px;  "> Username:</label><br>
  <input type="text" name="username"  id="username" size="20" placeholder="username" autocomplete="off"  >
  <br><br>
  <label for="pass1" style="color:#2e4053; float: left; margin-left: 140px;  "> Password:</label><br>
  <input type="text" name="pass1"  id="pass1" size="20" placeholder="Password"  autocomplete="off"  >
<br><br>
 
  <label for="pass2" style="color:#2e4053; float: left; margin-left: 80px;  "> Confirm Password:</label><br>
   <input type="text" class="pass1" name="pass2"  id="pass2" size="20" placeholder="Confirm Password:"  autocomplete ="off"><br>
     
<p id="Error" style="color: red"> 
        <?php
        if( isset($_SESSION['Error']) )
    {
          echo $_SESSION['Error'];

          unset($_SESSION['Error']);

    }
        ?>
      </p>

    <button type="reset" name="set" value="Reset" id="rst" style="background-color: blue ;height: 35px;width:90px; border-radius: 3px; color: white;">Reset</button>
      
    <input type="submit" name="reg" value="submit" style="background-color: blue ;height: 35px;width:90px; border-radius: 3px; color: white; margin-left: 40px;" > <br>
  
<br>
<a href="login.php" style="color: #2e4053">Go back to Login?</a>    
  </form>

  

</center>

</body>

</html>