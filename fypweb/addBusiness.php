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

<form method="post" action="addBusinessBackend.php" enctype= "multipart/form-data">

		<input type="hidden" name="type" value="Business"/>
		<input type="hidden" name="project_id" value="<?php echo $projectID; ?>"/>
		<p><label>Requirement Name:</label>
			<input class="form-control"type="text" name="req_name"></p>



		<p><label >Business Rule Name:</label>
			<input class="form-control" type="text" name="business_name"></p>

			<p><label >Business Rule  Description:</label></p>
			<textarea  class="form-control" style="width: 50%;" name="business_desc" min="20"; max="240";>Description</textarea>

		<p><label>Business Rule Example:</label>
			<input  class="form-control" type="text" name="business_exm"></label></p>


            <p><label>Business Rule Sources:</label>
			<input  class="form-control" type="text" name="business_source"></label></p>

				<p><label >Related Rules:</label>
			<input  class="form-control" type="text" name="relatedRules"></p>

			<label> Complexity</label>
			<p>
		 <div class="form-check form-check-inline">
				
			   <label class="form-check-label"> High <input class="form-check-input" type="checkBox" name="complexity" value="High"/></label>
			   <label class="form-check-label"> Mediuem <input  class="form-check-input"  type="checkBox" name="complexity" value="Mediuem"/></label>
			   <label class="form-check-label"> Low <input class="form-check-input"  type="checkBox" name="complexity" value="Low"/></label>
		</div></p>
		
           <p><label> Priority</label></p>
           <select name="priority">
                <option selected>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select>

                <p><label>Requested By:</label>
    		<input  class="form-control" type="text" name="requestedBy"></label></p>
			<p><input type="file" name="img_name" placeholder="Choose a File" accept="image/*" /></p>


            <button id="addReq" name="addbusiness" >Add</button>
 </form>
    </div>