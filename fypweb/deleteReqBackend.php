


<?php

include 'dbconnecion.php';
include 'sql.php';
session_start();

$sql = new sql();


$req_id=$_GET['req_id'];



$grabProjectID = $sql->grabProjectID($req_id);

$projectID = $grabProjectID[1][0]['project_id'];

// mysql function goes here

  $deleteReq = $sql->deleteReq($req_id);

// echo "<pre>";
// print_r ($deleteReq);
// die();



if($deleteReq[0] == true){


	header("Location:index.php?page=ProjectContent&delete=deleted&project_id=$projectID");
}else{



   header("Location:index.php?page=ProjectContent&notdeleted=notdeleted&project_id=$projectID");
}


