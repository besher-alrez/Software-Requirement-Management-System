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
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<div style ="margin-left:20px" class="form-group">

<form method="post" action="addProcessBackend.php" enctype= "multipart/form-data">

		<input type="hidden" name="type" value="process_model"/>
		<input type="hidden" name="project_id" value="<?php echo $projectID; ?>"/>
		<p><label>Requirement Name:</label>
			<input type="text" class="form-control" name="req_name"></p>



		<p><label >Process Model Name:</label>
			<input type="text" class="form-control" name="process_name"></p>

			<p><label >Process Model  Description:</label></p>
			<textarea  class="form-control" style="width: 50%;" name="process_desc" min="20"; max="240";></textarea>

		<p><label>Process Model Purpose:</label>
			<input  type="text" class="form-control" name="process_purpose"></label></p>


            <p><label>Process Model Outcomes:</label>
			<input  type="text" class="form-control" name="process_outcomes"></label></p>

				<p><label >Main  Scenario:</label>
				<textarea  class="form-control" style="width: 50%;" name="mScenario" min="20"; max="240";></textarea></p>

		<label> Complexity</label>
		<p>
	 <div class="form-check form-check-inline">
            
           <label class="form-check-label"> High <input class="form-check-input" type="checkBox" name="complexity" value="High"/></label>
           <label class="form-check-label"> Mediuem <input  class="form-check-input"  type="checkBox" name="complexity" value="Mediuem"/></label>
           <label class="form-check-label"> Low <input class="form-check-input"  type="checkBox" name="complexity" value="Low"/></label>
	</div></p>
		   <p><input type="file" name="img_name" placeholder="Choose a File" accept="image/*" /></p>

            <button id="addReq" name="addprocess" >Add</button>
 </form>
    </div>