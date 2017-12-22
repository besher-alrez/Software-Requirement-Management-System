


<?php

include 'dbconnecion.php';
include 'sql.php';
session_start();

$sql = new sql();
if(isset($_POST['addprocess'])){

// mysql function goes here
//$addreq=$sql->addreq($_POST['req_name'],$_POST['project_id'],$_POST['type']);
 $addProcess = $sql->addProcess($_POST['req_name'],$_POST['type'],$_POST['project_id'],$_POST['process_name'],$_POST['process_desc'],$_POST['process_purpose'],$_POST['process_outcomes'],$_POST['complexity']);





if($addProcess[1] == true){
$projectid=$_POST['project_id'];

	header("Location:index.php?page=ProjectContent&inserted=inserted&project_id=$projectid");
}else{
    $projectid=$_POST['project_id'];

   header("Location:index.php?page=ProjectContent&Notinserted=Notinserted&project_id=$projectid");
}


}