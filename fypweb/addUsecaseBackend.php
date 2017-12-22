


<?php

include 'dbconnecion.php';
include 'sql.php';
session_start();

$sql = new sql();
if(isset($_POST['addReq'])){

// mysql function goes here
//$addreq=$sql->addreq($_POST['req_name'],$_POST['project_id'],$_POST['type']);
 $addUsecase = $sql->addUsecase($_POST['req_name'],$_POST['type'],$_POST['project_id'],$_POST['usecase_name'],$_POST['usecase_desc'],$_POST['actors'],$_POST['mScenario']);





if($addUsecase[1] == true){
$projectid=$_POST['project_id'];

	header("Location:index.php?page=ProjectContent&inserted=inserted&project_id=$projectid");
}else{
    $projectid=$_POST['project_id'];

   header("Location:index.php?page=ProjectContent&Notinserted=Notinserted&project_id=$projectid");
}


}