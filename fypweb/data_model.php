<?php

$reqID = $_GET['req_id'];
$reqType = $_GET['req_type'];

 //$bringProjectInfo = $sql->bringProjectInfo($projectID);


 ?>
  <?php
include 'dbconnecion.php';
include 'sql.php';
//session_start();


?>
 <?php

    $sql = new sql();
    $DModelContent= $sql->DModelContent($reqID);
    include("reqNavigation.php");
//  echo "<pre>";
//  print_r($pmodelContent);
//  die();
?>

<!DOCTYPE html>
<html>
<head>
	

	 <link rel = "stylesheet"
   type = "text/css"
   href = "style.css" />
	
	
</head>
<body>
<div class="viewReq">
<p style="margin-left: 70px; font-size: 30px ; font-weight: bold; font-family:sans-serif; color: #1abc9c;">Requirement ID:<span style="margin-left: 10px;"><?php echo $DModelContent[1][0]["req_id"]; ?></span></p>
<hr style=" width:1000px ">
<p style="margin-left: 70px; font-size: 30px ; font-weight: bold; font-family:sans-serif; color: #1abc9c;">Author:<span style="margin-left: 10px;"><?php echo $grabReq[1][0]["author"]; ?></span></p>
<hr style=" width:1000px ">		
			<p > Data Model ID:<?php echo $DModelContent[1][0]["data_id"]; ?>   </p>
		<p>Data Model Name:<?php echo $DModelContent[1][0]["data_name"]; ?>    </p>
		<p >Data Model Description:<?php echo $DModelContent[1][0]["data_desc"]; ?>  </p>
		<p >Entities:<?php echo $DModelContent[1][0]["entities"]; ?>    </p>
		<p >Primary Keys:<?php echo $DModelContent[1][0]["primary_keys"]; ?>   </p>
		<p >complexity:<?php echo $DModelContent[1][0]["complexity"]; ?>   </p>
		<p >Priority:<?php echo $DModelContent[1][0]["priority"]; ?>   </p>
		<img style="height:400px; width:400px; margin-left:40px; margin-top:30px;" src="data:image;base64, <?php echo $DModelContent[1][0]["img_name"]; ?>"> </div>

</div>

<form method = "POST"  action= "addcommentBackend.php">

		<p><input type= "hidden" name="reqid" value="<?php echo $reqID?>"/></p>
		<p><input type= "hidden" name="user_name" value="<?php echo $_SESSION['username'][0]['user_name']; ?>"/></p>
		<p><textarea style=" margin-top:650px; width:300px; height:100px;" name="comment" max="470" placeholder="Comment"></textarea></p>
		<p><button style= "float:left;" name="addComment">Add Comment</button></p>


		</form><br>
	<p style="margin-top :-110px; margin-right:50px; float:right;">Target Project</p>
		<form  style="margin-top :-100px; float:right;"method = "POST"  action= "importBackend.php">

			<p><input type= "hidden" name="reqid" value="<?php echo $reqID?>"/></p>
			<p><input type= "hidden" name="reqtype" value="<?php echo $reqType?>"/></p>
			<p><input type= "hidden" name="data_name" value="<?php echo $DModelContent[1][0]["data_name"]; ?> "/></p>
			<p><input type= "hidden" name="data_desc" value="<?php echo $DModelContent[1][0]["data_desc"]; ?>"/></p>
			<p><input type= "hidden" name="entities" value="<?php echo $DModelContent[1][0]["entities"]; ?>"/></p>
			<p><input type= "hidden" name="primary_keys" value="<?php echo $DModelContent[1][0]["primary_keys"]; ?>"/></p>
			<p><input type= "hidden" name="complexity" value="<?php echo $DModelContent[1][0]["complexity"]; ?>"/></p>
			<p><input type= "hidden" name="priority" value="<?php echo $DModelContent[1][0]["priority"]; ?>"/></p>
			<input type="hidden" name="old_img" value="<?php echo $DModelContent[1][0]["img_name"]; ?>"/>   
			<p><input type= "hidden" name="author" value="<?php echo $_SESSION['username'][0]['user_name']; ?>"/></p>
             
			<p><input type= "text" name="project_id" placeholder="Project ID"/></p>
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
    <p style="margin-left:20px; width:60%;">Name: <?php echo $grabComment[1][$x]["user_name"]; ?> </p>
    <?php if (  $grabReq[1][0]["author"] == $_SESSION['username'][0]['user_name']){ ?>
	<a href="index.php?page=deleteCommentBackend&req_id=<?php echo $reqID ?>&comment_id=<?php echo $grabComment[1][$x]["comment_id"]; ?>"> <button name="deleteComment" style=" width:20%; float:right;">delete</button> </a></div>

	 <?php } ?>



  	</div>



	  <?php
  $x++;

}while ($x < $grabComment[2]);


}
?>