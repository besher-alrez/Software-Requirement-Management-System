<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

	 <link rel = "stylesheet"
   type = "text/css"
   href = "style.css" />
	
	
</head>
<body>

<!-- <div class="bg"> -->

	<div style="width: 100%; height: 13%; background-color:  #009999; "><p style="position :absolute; margin-top: 40px; margin-left: 60px; font-weight: bold; font-family: Lucida Sans Unicode;color: white; font-size: 200%;">SRM <span style="font-size: 60%">Software Requirement Management System</span></p></div>





	<div class="login-form">
	<p >LOGIN</p>
	<hr>





		<form method="post" action="checkadminlogin.php">

		<p><label>Username:
			<input  type="text" name="username"></label></p>

		<p><label>Password:
			<input  type="password" name="password"></label></p>
		
		
			
	<!-- 	<input style="width: 100px; height: 25px; background-color: #696969; border:0px; " type="submit" name="login">
			 -->
	<button id="loginButton" name="adminlogin">Login</button>
	

	
			
		
		</form>
		

<!-- 	</div> -->
</div>
</body>
</html>