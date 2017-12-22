<div class="login-form">

   

	<hr>





		<form method="post" action="changePasswordBackend.php">

		<p style="margin-left: 30px;">Old Password <input type="passsword" name="oldpassword">   </p>
		<p style="margin-left: 30px;">New Password <input type="passsword" name="newpassword">
		  </p>
		<p style="margin-left: 30px;">Confirm Password <input type="passsword" name="confirmpassword">
		  </p>
		<button name="changePassword" style="float: right; margin-right: 30px;">EDIT</button>
		
			
	<!-- 	<input style="width: 100px; height: 25px; background-color: #696969; border:0px; " type="submit" name="login">
			 -->
<!-- 				<button id="manageAccount" name="Update">Edit</button>
 -->	

	
			
		
		</form>
		<p style="margin-top: 40px"><?php
		if(isset($_GET['changed'])) 
			echo "<p>password has been changed";

		
		if(isset($_GET['notchanged']))
			echo "<p>password has not been changed";

		
		if(isset($_GET['wrongOldPassword']))
			echo "<p>wrong old password</p>";

		
		
			?>
</p>

		</div>
		
			