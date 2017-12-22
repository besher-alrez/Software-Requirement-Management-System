<div class="createProject">
	
<p style="margin-top: -25px; font-weight: bold; font-family: sans-serif;">Create Project</p>
<hr>
<form method="Post" action="crateProjectBackend.php">
	 <?php

	 if(isset($_GET['inserted'])){

	 	echo "Inserted Succesffully";
	 }

	  if(isset($_GET['Notinserted'])){

	 	echo "Inserted Succesffully";
	 }


	?>


	<p><label>Project Name</label><input type="text" name="projectName"></p>
	<p><label style="margin-bottom: 40px;">Project Description</label> <textarea name="projectDes" placeholder="Project Description "></textarea></p>



	<button name="crateProject">Add Project</button>
	
</form>





</div>