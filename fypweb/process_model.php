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
    $pmodelContent= $sql->pmodelContent($reqID);
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
<p style="margin-left: 70px; font-size: 30px ; font-weight: bold; font-family:sans-serif; color: #1abc9c;">Requirement ID:<span style="margin-left: 10px;"><?php echo $pmodelContent[1][0]["req_id"]; ?></span></p>
<hr style=" width:1000px ">
<p style="margin-left: 70px; font-size: 30px ; font-weight: bold; font-family:sans-serif; color: #1abc9c;">Author:<span style="margin-left: 10px;"><?php echo $grabReq[1][0]["author"]; ?></span></p>
<hr style=" width:1000px ">		<p > Process ID:<?php echo $pmodelContent[1][0]["process_id"]; ?>   </p>
		<p>Process Name:<?php echo $pmodelContent[1][0]["process_name"]; ?>    </p>
		<p >Process Description:<?php echo $pmodelContent[1][0]["process_desc"]; ?>  </p>
		<p >Process Purpose:<?php echo $pmodelContent[1][0]["process_purpose"]; ?>    </p>
		<p >Process Outcomes:<?php echo $pmodelContent[1][0]["process_outcomes"]; ?>   </p>
		<p >Complexity:<?php echo $pmodelContent[1][0]["complexity"]; ?>   </p>

    <div style="padding-bottom:20px;">
		<img style="height:400px; width:400px; margin-top:20px; " src="data:image;base64, <?php echo $pmodelContent[1][0]["img_name"]; ?>"> </div>

</div>

<form method = "POST"  action= "addcommentBackend.php">

<p><input type= "hidden" name="reqid" value="<?php echo $reqID?>"/></p>
<p><input type= "hidden" name="user_name" value="<?php echo $_SESSION['username'][0]['user_name']; ?>"/></p>
<p><textarea style=" width:300px; height:100px; margin-top:620px;" name="comment" max="470" placeholder="Comment"></textarea></p>
<p><button style= "float:left;" name="addComment">Add Comment</button></p>


</form><br>

<p style="margin-top :-110px; margin-right:50px; float:right;">Target Project</p>
<form  style="margin-top :-100px; float:right;"method = "POST"  action= "importBackend.php " enctype= "multipart/form-data">

<p><input type= "hidden" name="reqid" value="<?php echo $reqID?>"/></p>
<p><input type= "hidden" name="reqtype" value="<?php echo $reqType?>"/></p>
<p><input type= "hidden" name="process_name" value="<?php echo $pmodelContent[1][0]["process_name"]; ?>"/></p>
<p><input type= "hidden" name="process_desc" value="<?php echo $pmodelContent[1][0]["process_desc"]; ?>"/></p>
<p><input type= "hidden" name="process_purpose" value="<?php echo $pmodelContent[1][0]["process_purpose"]; ?> "/></p>
<p><input type= "hidden" name="process_outcomes" value="<?php echo $pmodelContent[1][0]["process_outcomes"]; ?>"/></p>
<p><input type= "hidden" name="complexity" value="<?php echo $pmodelContent[1][0]["complexity"]; ?>"/></p>
<p><input type= "hidden" name="author" value="<?php echo $_SESSION['username'][0]['user_name']; ?>"/></p>
<input type="hidden" name="old_img" value="<?php echo $pmodelContent[1][0]["img_name"]; ?>"/>   
             

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
    <p style="margin-left:20px; width:60%;"><?php echo $grabComment[1][$x]["user_name"]; ?> </p>
    <?php if (  $grabReq[1][0]["author"] == $_SESSION['username'][0]['user_name']){ ?>
	     <a href="index.php?page=deleteCommentBackend&req_id=<?php echo $reqID ?>&comment_id=<?php echo $grabComment[1][$x]["comment_id"]; ?>"> <button name="deleteComment" style=" margin-top:-25px;width:20%; float:right;">delete</button> </a></div>

	 <?php } ?>



  	</div>



	  <?php
  $x++;

}while ($x < $grabComment[2]);


}
?>

</body>