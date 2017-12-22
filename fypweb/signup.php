<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	 <link rel = "stylesheet"  type = "text/css" href = "style.css" />


</head>
<body>


	<div style="width: 100%; height: 13%; background-color:  #009999; "><p style="position :absolute; margin-top: 40px; margin-left: 60px; font-weight: bold; font-family: Lucida Sans Unicode;color: white; font-size: 200%;">SRM <span style="font-size: 60%">Software Requirement Management System</span></p></div>






	<div class="signup-form">
	<p >SIGNUP</p>
	<hr>





		<form method="post" action="checkname.php">

		
		<p><label>User Name:</label>
			<input type="text" name="username"></p>

		<p><label >Password:</label>
			<input type="password" name="password"></p>

				<p><label >Confirm Password:</label>
			<input  type="password" name="cpassword"></p>

		<p><label>Company Name:</label>
			<input  type="text" name="cname"></label></p>

				<p><label >Phone Number:</label>
			<input  type="text" name="p_num"></p>
		
		
			
	<!-- 	<input style="width: 100px; height: 25px; background-color: #696969; border:0px; " type="submit" name="login">
			 -->
	    <button id="signupButton" name="signup" >Signup</button>
		<a href="Login.php"><button type="button">Login</button></a>


	
			
		
		</form>


					
					<p>

					<?php
                   if(isset($_GET['invalid'])){

                   echo "This name is already used";

                   }
                  
					?></p>
		


</div>




</body>
</html>