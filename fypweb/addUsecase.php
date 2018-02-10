<?php
$projectID = $_GET['project_id'];



?>
<?php

	 if(isset($_GET['inserted'])){

	 	echo "Inserted Succesffully";
	 }

	  if(isset($_GET['Notinserted'])){

	 	echo "not Inserted ";
	 }


?>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<div style ="margin-left:20px" class="form-group">
<form method="post" action="addUsecaseBackend.php" enctype= "multipart/form-data">

		<input type="hidden" name="type" value="use case"/>
		<input type="hidden" name="project_id" value="<?php echo $projectID; ?>"/>
		<p><label>Requirement Name:</label>
			<input type="text" class="form-control" name="req_name"></p>
			
			<p><label >UseCase Name:</label>
			<input type="text" class="form-control" name="usecase_name"></p>

			
			<p><label >UseCase Description:</label></p>
			<textarea  class="form-control" style="width: 50%;" name="usecase_desc" min="20"; max="240" placeholder="Description";></textarea>

		<p><label>Actors:</label>
			<input  type="text" class="form-control" name="actors"></label></p>

				<p><label >Main  Scenario:</label>
			<input  type="text"class="form-control"  name="mScenario"></p>

			<p><input type="file" name="img_name" placeholder="Choose a File" accept="image/*" /></p>
            <button id="addReq" name="addReq" >Add</button>
 </form>
</div>


