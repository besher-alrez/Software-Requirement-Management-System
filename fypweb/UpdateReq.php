
   
<?php

$reqID = $_GET['req_id'];
$reqType = $_GET['req_type'];




include 'dbconnecion.php';
include 'sql.php';
//session_start();


?>
 <?php

    $sql = new sql();
	$usecaseContent= $sql->usecaseContent($reqID);
	$pmodelContent= $sql->pmodelContent($reqID);
	$BRulesContent= $sql->BRulesContent($reqID);
	$DModelContent= $sql->DModelContent($reqID);
	$DeclarativeContent= $sql->DeclarativeContent($reqID);



	$grabReq= $sql->grabReq($reqID);
	//$deletereq= $sql->deletereq($reqID);
    
// echo "<pre>";
//  print_r($usecaseContent);
//  die();
?>

<?php if($reqType=='process_model') {     ?>

		<form method="post" action="UpdateProcessBackend.php" enctype= "multipart/form-data">
        <input type="hidden" name="req_type" value="<?php echo $reqType ?>">
		<p style="margin-left: 70px; font-size: 30px ; font-weight: bold; font-family:sans-serif; color: #1abc9c;">Requirement ID:<span style="margin-left: 10px;" > <?php echo $reqID ?> <input type="hidden" name="req_id" value= "<?php echo $reqID ?>"></span></p><hr>
        <p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Requirement Name:<span style="margin-left: 10px;"><input type="text" name="req_name" value="<?php echo $grabReq[1][0]["req_name"]; ?>"   </p></span>

		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Process Name:<span style="margin-left: 10px;"><input type="text" name="process_name" value= "<?php echo $pmodelContent[1][0]["process_name"]; ?>">    </p> </span>

		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Description:</p><p style="margin-left: 100px;"><textarea name="process_desc" ><?php echo $pmodelContent[1][0]["process_desc"]; ?></textarea> </p>

		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Process Purpose:<span style="margin-left: 70px;"><input type="text" name="process_purpose" value= "<?php echo $pmodelContent[1][0]["process_purpose"]; ?> " >  </p> </span>

		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Process Outcomes:<span style="margin-left: 10px;"><input type="text" name="process_outcomes" value= "<?php echo $pmodelContent[1][0]["process_outcomes"]; ?>">   </p> </span>
		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Complexity :<span style="margin-left: 10px;">
			<label> High <input type="checkBox" name="complexity" value="High"/></label>
           <label> Mediuem <input type="checkBox" name="complexity" value="Mediuem"/></label>
           <label> Low <input type="checkBox" name="complexity" value="Low"/></label>   </p> </span>

		   <img  style="height:200px; width:200px;"src="data:image;base64, <?php echo $pmodelContent[1][0]["img_name"]; ?>">
		   
		
		   <input type="hidden" name="old_img" value="<?php echo $pmodelContent[1][0]["img_name"]; ?>"/>                   
      
	    <p><input type="file" name="img_name" placeholder="Choose a File" accept="image/*"  /></p>
		


		
			
	<!-- 	<input style="width: 100px; height: 25px; background-color: #696969; border:0px; " type="submit" name="login">
			 -->
				<button id="manageAccount" name="UpdateProcess">Update</button>
	

	
			
		
	</form> 
<?php }  elseif($reqType=='use case'){ ?>
		
	<form method="post" action="UpdateUseCaseBackend.php" enctype= "multipart/form-data">
        <input type="hidden" name="req_type" value="<?php echo $reqType ?>">
		<p style="margin-left: 70px; font-size: 30px ; font-weight: bold; font-family:sans-serif; color: #1abc9c;">Requirement ID:<span style="margin-left: 10px;" > <?php echo $reqID ?> <input type="hidden" name="req_id" value= "<?php echo $reqID ?>"></span></p><hr>
        <p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Requirement Name:<span style="margin-left: 10px;"><input type="text" name="req_name" value="<?php echo $grabReq[1][0]["req_name"]; ?>"   </p></span>

		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">UseCase Name:<span style="margin-left: 10px;"><input type="text" name="usecase_name" value= "<?php echo $usecaseContent[1][0]["usecase_name"]; ?>">    </p> </span>

		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Description:</p><p style="margin-left: 100px;"><textarea name="usecase_desc" ><?php echo $usecaseContent[1][0]["usecase_desc"]; ?></textarea> </p>

		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Actord:<span style="margin-left: 70px;"><input type="text" name="actors" value= "<?php echo $usecaseContent[1][0]["actors"]; ?> " >  </p> </span>

		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Main Scenario:<span style="margin-left: 10px;"><input type="text" name="mScenario" value= "<?php echo $usecaseContent[1][0]["main_scenario"]; ?>">   </p> </span>

		<input type="hidden" name="old_img" value="<?php echo $usecaseContent[1][0]["img_name"]; ?>"/>                   

		<img style="height:200px; width:200px;"src="data:image;base64, <?php echo $usecaseContent[1][0]["img_name"]; ?>"> 
        <p><input type="file" name="img_name" placeholder="Choose a File" accept="image/*" /></p>
		
			
	<!-- 	<input style="width: 100px; height: 25px; background-color: #696969; border:0px; " type="submit" name="login">
			 -->
				<button id="manageAccount" name="Update">Update</button>
	

	
			
		
	</form> 

<?php }	elseif($reqType=='Business'){?>
			
	<form method="post" action="UpdateBusinessBackend.php"  enctype= "multipart/form-data">
	<input type="hidden" name="req_type" value="<?php echo $reqType ?>">
	<p style="margin-left: 70px; font-size: 30px ; font-weight: bold; font-family:sans-serif; color: #1abc9c;">Requirement ID:<span style="margin-left: 10px;" > <?php echo $reqID ?> <input type="hidden" name="req_id" value= "<?php echo $reqID ?>"></span></p><hr>
	<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Requirement Name:<span style="margin-left: 10px;"><input type="text" name="req_name" value="<?php echo $grabReq[1][0]["req_name"]; ?>"   </p></span>

	<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Business Rule Name:<span style="margin-left: 10px;"><input type="text" name="business_name" value= "<?php echo $BRulesContent[1][0]["business_name"]; ?>">    </p> </span>

	<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Description:</p><p style="margin-left: 100px;"><textarea name="business_desc" ><?php echo $BRulesContent[1][0]["business_desc"]; ?></textarea> </p>

	<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Business Rule Example:<span style="margin-left: 70px;"><input type="text" name="business_exm" value= "<?php echo $BRulesContent[1][0]["business_exm"]; ?> " >  </p> </span>

	<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Process Source:<span style="margin-left: 10px;"><input type="text" name="business_source" value= "<?php echo $BRulesContent[1][0]["business_source"]; ?>">   </p> </span>
	<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Related Rules:<span style="margin-left: 10px;"><input type="text" name="relatedRules" value= "<?php echo $BRulesContent[1][0]["related_rules"]; ?>">   </p> </span>
	<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Complexity :<span style="margin-left: 10px;">
		<label> High <input type="checkBox" name="complexity" value="High"/></label>
	   <label> Mediuem <input type="checkBox" name="complexity" value="Mediuem"/></label>
	   <label> Low <input type="checkBox" name="complexity" value="Low"/></label>   </p> </span>

	   <p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;"><label> Priority:</label></p>
	   <span style="margin-left: 70px;">  <select name="priority">
                <option selected>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select> </span>

         
	<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Requested By:<span style="margin-left: 10px;"><input type="text" name="requestedBy" value= "<?php echo $BRulesContent[1][0]["requested_by"]; ?>">   </p> </span>
	<input type="hidden" name="old_img" value="<?php echo $BRulesContent[1][0]["img_name"]; ?>"/>                   

	<img style="height:200px; width:200px;"src="data:image;base64, <?php echo $BRulesContent[1][0]["img_name"]; ?>"> 
        <p><input type="file" name="img_name" placeholder="Choose a File" accept="image/*" /></p>
		




	
		
<!-- 	<input style="width: 100px; height: 25px; background-color: #696969; border:0px; " type="submit" name="login">
		 -->
			<button id="manageAccount" name="UpdateBusiness">Update</button>



		
	
</form>
	
		
		
<?php }elseif($reqType=='data_model'){?>
			
			<form method="post" action="UpdateDataBackend.php" enctype= "multipart/form-data">
			<input type="hidden" name="req_type" value="<?php echo $reqType ?>">
			<p style="margin-left: 70px; font-size: 30px ; font-weight: bold; font-family:sans-serif; color: #1abc9c;">Requirement ID:<span style="margin-left: 10px;" > <?php echo $reqID ?> <input type="hidden" name="req_id" value= "<?php echo $reqID ?>"></span></p><hr>
			<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Requirement Name:<span style="margin-left: 10px;"><input type="text" name="req_name" value="<?php echo $grabReq[1][0]["req_name"]; ?>"   </p></span>
		
			<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Data Model Name:<span style="margin-left: 10px;"><input type="text" name="data_name" value= "<?php echo $DModelContent[1][0]["data_name"]; ?>">    </p> </span>
		
			<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Description:</p><p style="margin-left: 100px;"><textarea name="data_desc" ><?php echo $DModelContent[1][0]["data_desc"]; ?></textarea> </p>
		
			<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Entities:<span style="margin-left: 70px;"><input type="text" name="entities" value= "<?php echo $DModelContent[1][0]["entities"]; ?> " >  </p> </span>
		
			<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Primary Keys:<span style="margin-left: 10px;"><input type="text" name="primary_keys" value= "<?php echo $DModelContent[1][0]["primary_keys"]; ?>">   </p> </span>
			<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Complexity :<span style="margin-left: 10px;">
				<label> High <input type="checkBox" name="complexity" value="High"/></label>
			   <label> Mediuem <input type="checkBox" name="complexity" value="Mediuem"/></label>
			   <label> Low <input type="checkBox" name="complexity" value="Low"/></label>   </p> </span>
		
			   <p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;"><label> Priority:</label></p>
			 <p>  <span style="margin-left: 70px;">  <select name="priority">
						<option selected>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						</select> </span>
		</p>
				 
		
		
		
						<input type="hidden" name="old_img" value="<?php echo $DModelContent[1][0]["img_name"]; ?>"/>               	    

						<p><img style="height:200px; width:200px;"src="data:image;base64, <?php echo $DModelContent[1][0]["img_name"]; ?>"></p> 
						<p><input type="file" name="img_name" placeholder="Choose a File" accept="image/*" /></p>

		
			
				
		<!-- 	<input style="width: 100px; height: 25px; background-color: #696969; border:0px; " type="submit" name="login">
				 -->
					<button id="manageAccount" name="UpdateData">Update</button>
		
		
		
				
			
		</form>

				
<?php }elseif($reqType=='Declarative_Stm'){?>
			
			<form method="post" action="UpdateDeclarativeBackend.php">
			<input type="hidden" name="req_type" value="<?php echo $reqType ?>">
			<p style="margin-left: 70px; font-size: 30px ; font-weight: bold; font-family:sans-serif; color: #1abc9c;">Requirement ID:<span style="margin-left: 10px;" > <?php echo $reqID ?> <input type="hidden" name="req_id" value= "<?php echo $reqID ?>"></span></p><hr>
			<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Requirement Name:<span style="margin-left: 10px;"><input type="text" name="req_name" value="<?php echo $grabReq[1][0]["req_name"]; ?>"   </p></span>
		
			<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Declarative Statement Name:<span style="margin-left: 10px;"><input type="text" name="declarative_name" value= "<?php echo $DeclarativeContent[1][0]["declarative_name"]; ?>">    </p> </span>
		
			<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Description:</p><p style="margin-left: 100px;"><textarea name="declarative_desc" ><?php echo $DeclarativeContent[1][0]["declarative_desc"]; ?></textarea> </p>
		
		
			<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Complexity :<span style="margin-left: 10px;">
				<label> High <input type="checkBox" name="complexity" value="High"/></label>
			   <label> Mediuem <input type="checkBox" name="complexity" value="Mediuem"/></label>
			   <label> Low <input type="checkBox" name="complexity" value="Low"/></label>   </p> </span>
		
			   <p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;"><label> Priority:</label></p>
			   <span style="margin-left: 70px;">  <select name="priority">
						<option selected>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						</select> </span>
		
				 
		
		
		
		
		
			
				
		<!-- 	<input style="width: 100px; height: 25px; background-color: #696969; border:0px; " type="submit" name="login">
				 -->
					<button id="manageAccount" name="UpdateDeclarative">Update</button>
		
		
		
				
			
		</form>
<?php } ?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<?php
		if(isset($_GET['changed'])){
		echo "<p>information has been Upadted";
		}
		?>


		
			