<?php

$reqID = $_GET['req_id'];

 //$bringProjectInfo = $sql->bringProjectInfo($projectID);
echo $reqID;

 ?>
 <?php

    $sql = new sql();
    $reqContent= $sql->reqContent($reqID);
    

?>

		<p style="margin-left: 70px;">Name:<?php echo $_SESSION['username'][0]['user_name']; ?> <input type="hidden" name="username" value="<?php echo $_SESSION['username'][0]['user_name']; ?>">   </p>

		
		
		
			
	<!-- 	<input style="width: 100px; height: 25px; background-color: #696969; border:0px; " type="submit" name="login">
			 -->
	

	
			
		
		</form>