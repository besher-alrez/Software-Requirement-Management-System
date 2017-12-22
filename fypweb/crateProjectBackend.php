


<?php

include 'dbconnecion.php';
include 'sql.php';
session_start();

$sql = new sql();
if(isset($_POST['crateProject'])){

// mysql function goes here

  $createProject = $sql->createProject($_SESSION['username'][0]['user_name'],$_POST['projectName'], $_POST['projectDes']);
  //$createProjectMember = $sql->createProjectMember($_SESSION['username'][0]['user_name'],$_POST['projectName']);





if($createProject[1] == true){


	header("Location:index.php?page=createProject&inserted=inserted");
}else{

   header("Location:index.php?page=createProject&Notinserted=Notinserted");
}


}