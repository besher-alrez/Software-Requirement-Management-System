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

<form method="post" action="addProcessBackend.php">

		<input type="hidden" name="type" value="process_model"/>
		<input type="hidden" name="project_id" value="<?php echo $projectID; ?>"/>
		<p><label>Requirement Name:</label>
			<input type="text" name="req_name"></p>



		<p><label >Process Model Name:</label>
			<input type="text" name="process_name"></p>

			<p><label >Process Model  Description:</label></p>
			<textarea  style="width: 50%;" name="process_desc" min="20"; max="240";>Description</textarea>

		<p><label>Process Model Purpose:</label>
			<input  type="text" name="process_purpose"></label></p>


            <p><label>Process Model Outcomes:</label>
			<input  type="text" name="process_outcomes"></label></p>

				<p><label >Main  Scenario:</label>
			<input  type="text" name="mScenario"></p>

            <p><label> Complexity</label></p>
           <label> High <input type="checkBox" name="complexity" value="High"/></label>
           <label> Mediuem <input type="checkBox" name="complexity" value="Mediuem"/></label>
           <label> Low <input type="checkBox" name="complexity" value="Low"/></label>
            <button id="addReq" name="addprocess" >Add</button>
 </form>
    </div>