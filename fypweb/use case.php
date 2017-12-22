<?php

$reqID = $_GET['req_id'];

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
	//$deletereq= $sql->deletereq($reqID);
    
// echo "<pre>";
//  print_r($usecaseContent);
//  die();
include("reqNavigation.php")
?>


		<p style="margin-left: 70px; font-size: 30px ; font-weight: bold; font-family:sans-serif; color: #1abc9c;">Requirement ID:<span style="margin-left: 10px;"><?php echo $usecaseContent[1][0]["req_id"]; ?></span></p><hr>

		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">UseCase ID:<span style="margin-left: 10px;"><?php echo $usecaseContent[1][0]["usecase_id"]; ?>   </p></span>
 
		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">UseCase Name:<span style="margin-left: 10px;"><?php echo $usecaseContent[1][0]["usecase_name"]; ?>    </p> </span>

		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Description:<span style="margin-left: 30px;"><?php echo $usecaseContent[1][0]["usecase_desc"]; ?>  </p> </span>

		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Actord:<span style="margin-left: 70px;"><?php echo $usecaseContent[1][0]["actors"]; ?>    </p> </span>

		<p style="margin-left: 70px;font-weight: bold; font-family:sans-serif;margin-top: 40px;">Main Scenario:<span style="margin-left: 10px;"><?php echo $usecaseContent[1][0]["main_scenario"]; ?>   </p> </span>


		
		