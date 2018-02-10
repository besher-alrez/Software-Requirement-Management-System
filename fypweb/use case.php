<?php

$reqID = $_GET['req_id'];
$reqType = $_GET['req_type'];

 //$bringProjectInfo = $sql->bringProjectInfo($projectID);
//echo $reqID;

 ?>
  <?php
include 'dbconnecion.php';
include 'sql.php';
//session_start();


?>
 <?php

    $sql = new sql();
	$usecaseContent= $sql->usecaseContent($reqID);
	$grabReq= $sql->grabReq($reqID);
	
// echo "<pre>";
//  print_r($usecaseContent);
//  die();
    
// echo "<pre>";
//  print_r($usecaseContent);
//  die();
include("reqNavigation.php")
?>


		<p style="margin-left: 70px; font-size: 30px ; font-weight: bold; font-family:sans-serif; color: #1abc9c;">Requirement ID:<span style="margin-left: 10px;"><?php echo $usecaseContent[1][0]["req_id"]; ?></span></p><hr>
		<p style="margin-left: 70px; font-size: 30px ; font-weight: bold; font-family:sans-serif; color: #1abc9c;">Author:<span style="margin-left: 10px;"><?php echo $grabReq[1][0]["author"]; ?></span></p><hr>

		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Requirement Name:<span style="margin-left: 10px;"><?php echo $grabReq[1][0]["req_name"]; ?>   </p></span>
		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">UseCase ID:<span style="margin-left: 10px;"><?php echo $usecaseContent[1][0]["usecase_id"]; ?>   </p></span>
 
		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">UseCase Name:<span style="margin-left: 10px;"><?php echo $usecaseContent[1][0]["usecase_name"]; ?>    </p> </span>

		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Description:<span style="margin-left: 30px;"><?php echo $usecaseContent[1][0]["usecase_desc"]; ?>  </p> </span>

		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Actord:<span style="margin-left: 70px;"><?php echo $usecaseContent[1][0]["actors"]; ?>    </p> </span>

		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Main Scenario:<span style="margin-left: 10px;"><?php echo $usecaseContent[1][0]["main_scenario"]; ?>   </p> </span>
		<div >
		<img style="height:400px; width:400px; margin-left:40px; margin-top:30px;" src="data:image;base64, <?php echo $usecaseContent[1][0]["img_name"]; ?>"> </div>

		
		<form method = "POST"  action= "addcommentBackend.php">

		<p><input type= "hidden" name="reqid" value="<?php echo $reqID?>"/></p>
		<p><input type= "hidden" name="user_name" value="<?php echo $_SESSION['username'][0]['user_name']; ?>"/></p>
		<p><textarea style=" width:300px; height:100px; margin-top:80px;" name="comment" max="470" placeholder="Comment"></textarea></p>
		<p><button style= "float:left;" name="addComment">Add Comment</button></p>


		</form><br>
	<p style="margin-top :-110px; margin-right:50px; float:right;">Target Project</p>
		<form  style="margin-top :-100px; float:right;"method = "POST"  action= "importBackend.php" enctype= "multipart/form-data">

			<p><input type= "hidden" name="reqid" value="<?php echo $reqID?>"/></p>
			

			<p><input type= "hidden" name="reqtype" value="<?php echo $reqType?>"/></p>
			<p><input type= "hidden" name="usecase_name" value="<?php echo $usecaseContent[1][0]["usecase_name"]; ?> "/></p>
			<p><input type= "hidden" name="usecase_desc" value="<?php echo $usecaseContent[1][0]["usecase_desc"]; ?>"/></p>
			<p><input type= "hidden" name="actors" value="<?php echo $usecaseContent[1][0]["actors"]; ?>"/></p>
			<p><input type= "hidden" name="mScenario" value="<?php echo $usecaseContent[1][0]["main_scenario"]; ?>"/></p>
			<input type="hidden" name="old_img" value="<?php echo $usecaseContent[1][0]["img_name"]; ?>"/>   
			<p><input type= "hidden" name="author" value="<?php echo $_SESSION['username'][0]['user_name']; ?>"/></p>
                
	
			<p><input type= "text" name="project_id" placeholder="Project ID" /></p>
			<p><button style= "float:right;" name="import">Copy</button></p>

			</form><br>




 <p>Comments</p>

 <?php

    $sql = new sql();
    $grabComment= $sql->grabComment($reqID);
    //$userprojects= $sql->userprojects($_SESSION['username'][0]['user_name']);
 // $projectinfo= $sql->projectinfo($projectID);
    

?>

<?php

  $x = 0;

  ?>
  
    <!--  <div class="pull-right"><button>View</button></div> -->
<?php
// echo "<pre>";
// print_r($grabComment);
// die();

    if( $grabComment[2] < 1)
{

  echo "No comments at this moment";
}


else{  



  $x=0;
  do{

?>
	<div style=" height:100px; width:60%;" class="projects">



    <p style="margin-left:20px; width:60%;"><?php echo $grabComment[1][$x]["comment_desc"]; ?></p> 
    <p style="margin-left:20px; width:60%;"><?php echo $grabComment[1][$x]["user_name"]; ?>
	<?php if (  $grabReq[1][0]["author"] == $_SESSION['username'][0]['user_name']){ ?>
	<a href="index.php?page=deleteCommentBackend&req_id=<?php echo $reqID ?>&comment_id=<?php echo $grabComment[1][$x]["comment_id"]; ?>"> <button name="deleteComment" style=" width:20%; float:right;">delete</button> </a></div>

	 <?php } ?>

	 </p>
    


  	</div>



	  <?php
  $x++;

}while ($x < $grabComment[2]);


}
?>