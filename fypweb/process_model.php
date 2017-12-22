<?php

$reqID = $_GET['req_id'];

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
		<p>Requirement ID:<?php echo $pmodelContent[1][0]["req_id"]; ?>    </p>
		<p > Process ID:<?php echo $pmodelContent[1][0]["process_id"]; ?>   </p>
		<p>Process Name:<?php echo $pmodelContent[1][0]["process_name"]; ?>    </p>
		<p >Process Description:<?php echo $pmodelContent[1][0]["process_desc"]; ?>  </p>
		<p >Process Purpose:<?php echo $pmodelContent[1][0]["process_purpose"]; ?>    </p>
		<p >Process Outcomes:<?php echo $pmodelContent[1][0]["process_outcomes"]; ?>   </p>
		<p >Complexity:<?php echo $pmodelContent[1][0]["complexity"]; ?>   </p>
</div>
		
</body>