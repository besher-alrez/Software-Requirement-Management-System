


<?php

include 'dbconnecion.php';
include 'sql.php';
session_start();

$sql = new sql();
if(isset($_POST['addmember'])){

// mysql function goes here
$project_id=$_POST['project_id'];

  $AddMember = $sql->AddMember($_POST['membername'],$_POST['project_id']);





if($AddMember[1] == true){


	header("Location:index.php?page=AddMember&project_id=$project_id&inserted=inserted");
}else{

   header("Location:index.php?page=AddMember&project_id=$project_id&Notinserted=Notinserted");
}


}