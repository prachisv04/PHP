<?php 
session_start(); 

			if($_POST['submit'])
			{
				$email = $_POST['email'];
				echo $email;
				$msg = "this is demo message";
				$msg = wordwrap($msg,70);
				$header = "From: prachisvavhal@gmail.com";
				if(mail($email,"TOW script sends email",$msg,$header))
				{
					echo "Mail sent, kindly check";
				}
				else
				{
					echo "Mail not sent";
				}
			}
			else
			{
				echo "Not set";
			}

?>