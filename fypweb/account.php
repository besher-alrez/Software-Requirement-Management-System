<div class="login-form">
	<p>Manage Account <span style="margin-left: 140px;"><a style="text-decoration: none;" href="index.php?page=changePassword"> Change Password</a></span></p>

   

	<hr>





		<form method="post" action="EditAccountBackend.php">
		<p style="margin-left: 70px;">Name:<?php echo $_SESSION['username'][0]['user_name']; ?> <input type="hidden" name="username" value="<?php echo $_SESSION['username'][0]['user_name']; ?>">   </p>

		<p><label>Company Name:
			<input  type="text" name="cname" value="<?php echo $_SESSION['username'][0]['company']; ?>"></label></p>

		<p><label>Phone Number:
			<input  type="text" name="p_num" value="<?php echo $_SESSION['username'][0]['phone_number']; ?>"></label></p>

		
		
			
	<!-- 	<input style="width: 100px; height: 25px; background-color: #696969; border:0px; " type="submit" name="login">
			 -->
				<button id="manageAccount" name="Update">Edit</button>
	

	
			
		
		</form>
		<?php
		if(isset($_GET['changed'])){
		echo "<p>information has been changed";
		}
		?>


		</div>
		
			