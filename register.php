<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="registercss.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg">
	<div >
		<h1 style="text-align: center; font-size: 70px; color: black;"><a href="Home.html" style="color: black;">Luxurious Landing</a></h1>
	</div>

  <center>
  
  <span style="">
 
  <form  action="credentials.php" name="personal" method="POST" style="height: 800px; width: 650px ; background-color: #fff;"> <br>

  <input type="text" name="name"  id="fname" size="18" placeholder="First Name" autocomplete="off"  >

   <input type="text" name="name"  id="lname" size="18" placeholder="Last Name"  autocomplete ="off"><br>
<br><br>           

  <label for="Addr" style="color:#2e4053; float: left; margin-left: 50px; margin-top: 5px;"> Address: <label style="color: red ;margin-left: 5px;">*</label></label><br><br><br>
           
      <input type="textarea" name="houseno"  id="usr" size="20" placeholder="House/Flat No , Building No."   autocomplete="off">

      <input type="textarea" name="area"  id="usr" size="20" placeholder="Street , area"  autocomplete="off"><br><br><br>

      <input type="textarea" name="city"  id="city" size="20" placeholder="City"   style=" " autocomplete ="off">
           
      <input type="textarea" name="pin"  id="pin" size="20" placeholder="pincode"  autocomplete="off" maxlength="6"><br>
      <br><br>    
       
   <label for="state"  id="state"> State <label style="color: red ;margin-left: 5px; ">*</label></label>

          <select  id="stateselect">
            
            <option>Maharashtra</option>
            <option>Goa</option>
            <option>Gujrat</option>
            <option>Uttar Pradesh</option>
            <option>Karnatak</option>
            <option>Telangana</option>
           <option>Kerla</option>
           <option>Tamilnadu</option>
           <option>Rajsthan</option>
           <option>Chattisgargh</option>
           <option>Odisha</option>
           <option>Madhya Pradesh</option>
           <option>Himachal Pradesh</option>
           <option>Jammu and Kashmir</option>
           <option>Aasam</option>
           <option>Punjab</option>
           <option>Hariyana</option>
           <option>manipur</option>
           <option>arunachal pradesh</option>
           <option>sikkim</option>
           <option>nagaland</option>
           <option>bihar</option>
           <option>west bengal</option>
           <option>mizoram</option>
           
          </select>
 
  <br><br>
   <label for="num" style="color:#2e4053; float: left; margin-left: 80px;  "> Mobile Number:</label><br>
           <input type="tel" name="mbnum"  id="num" size="25" placeholder="Mobile Number" maxlength="10"><br><br>

      <label for="mail" style="color:#2e4053; float: left;margin-left: 140px; "> Email:<label style="color: red ;margin-left: 3px;">*</label></label><br>
        <input type="text" name="mail" id="mail" placeholder="Email" autocomplete="off" size="25" >
          <br><br>
  <label for="dob" style="color:#2e4053; float: left; margin-left: 90px;  "> Date of Birth:<label style="color: red ;margin-left: 3px;">*</label></label><br>
  <input type="date" name="dob" id=dob  autocomplete="off"><br>           

  <p id="demo3"></p><br><br>
      


  <label for="usr" style="color:#2e4053; float: left; margin-left: 80px;">Gender: <label style="color: red ;margin-left: 5px;">*</label></label>

    <input type="radio" name="female" style="background-color: silver;">
    <img src="icons8-person-female-48.png" >
        &nbsp;&nbsp;    &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;
      <input type="radio" name="female" style="background-color: silver;">
  
      <img src="icons8-user-male-48.png">
      <br><br><br>

    <button type="reset" name="set" value="Reset" id="rst" style="background-color: blue ;height: 35px;width:90px; border-radius: 3px; color: white;">Reset</button>
    
    <input type="submit" name="next" value="Next" style="background-color: blue ;height: 35px;width:90px; border-radius: 3px; color: white; margin-left: 40px;" > <br>
    
<br>
<a href="login.html" style="color: #2e4053">Go back to Login?</a>    
  </form>

  
  </span>
</center>

</body>

</html>