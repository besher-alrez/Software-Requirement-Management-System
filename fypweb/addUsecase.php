<?php
$projectID = $_GET['project_id'];



?>
<?php

	 if(isset($_GET['inserted'])){

	 	echo "Inserted Succesffully";
	 }

	  if(isset($_GET['Notinserted'])){

	 	echo "Inserted Succesffully";
	 }


?>


<div class="addReq">
<form method="post" action="addUsecaseBackend.php">

		<input type="hidden" name="type" value="use case"/>
		<input type="hidden" name="project_id" value="<?php echo $projectID; ?>"/>
		<p><label>Requirement Name:</label>
			<input type="text" name="req_name"></p>



		<p><label >UseCase Name:</label>
			<input type="text" name="usecase_name"></p>

			<p><label >UseCase Description:</label></p>
			<textarea  style="width: 50%;" name="usecase_desc" min="20"; max="240";>Description</textarea>

		<p><label>Actors:</label>
			<input  type="text" name="actors"></label></p>

				<p><label >Main  Scenario:</label>
			<input  type="text" name="mScenario"></p>
            <button id="addReq" name="addReq" >Add</button>
 </form>
</div>
