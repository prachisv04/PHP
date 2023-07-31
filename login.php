<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="bg">

  <div >
    <h1 style="text-align: center; font-size: 70px; color: black; margin-top: 7px;"><a href="Home.html" style="color: black;">Luxurious Landing</a></h1>
  </div>

<div class="container">
  

  <center>  
  <form  action="login-action.php" name="myform"  method="post" onclick="sendInfo();">
    <div class="row">
    <div >
    <h1 style="text-align: center; font-size: 30px; color: black;"><a href="#" style="color: black;">Login</a></h1>
  </div>
      <div class="collogin">
        
        <a href="https://en-gb.facebook.com/login/"> <i class="fa fa-facebook-official" style="font-size:36px; color: blue; "></i></a>

       <a> <i class="fa fa-google-plus-square" style="font-size:36px; color: red ; padding-left: 20px;"></i></a>
       <a href=""> <i class="fa fa-twitter-square" style="font-size:36px;color: #3399ff ; padding-left: 20px;"></i></a>
      </div>
    
  <div class="collogin">
     
  
      <input type="text" name="username" id="username" placeholder="Username">
     
        <i6nput type="password" name="password"  placeholder="Password" id="password"><br>
      <p id="Error" style="color: red"> 
      	<?php
      	if( isset($_SESSION['Error']) )
		{
        	echo $_SESSION['Error'];
6
        	unset($_SESSION['Error']);

		}
      	?>
      </p>
        
       <input  type="submit" name="login" id="login" class="btn"  value="Sign In">
       
      </div>
    </div>
  </form>
  <br><br>
  <div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="credentials.php" style="color:white" class="btn ">Sign up</a>
    </div>

    <div class="col">
      <a href="forgot.php" style="color:white ;" class="btn">Forgot password?</a>
    </div>
  </div>
</div>


<span class="close">&times;</span>

</center>
</div>
</div>
</body>


</html>
