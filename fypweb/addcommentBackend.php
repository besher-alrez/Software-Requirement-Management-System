


<?php

include 'dbconnecion.php';
include 'sql.php';
session_start();

$sql = new sql();
if(isset($_POST['addComment'])){

// mysql function goes here
// $project_id=$_POST['project_id'];
  $req_id= $_POST['reqid'];
  $addComment = $sql->addComment($_POST['comment'],$_POST['user_name'],$_POST['reqid']);
  $grabreqtype = $sql->grabProjectID($_POST['reqid']);

  $reqtype= $grabreqtype[1][0]['req_type'];

// echo "<pre>";
// print_r ($addComment);
// die();



if($addComment[1] == true){


	header("Location:index.php?page=$reqtype&req_id=$req_id&req_type=$reqtype&inserted=inserted");
}else{

   header("Location:index.php?page=$reqtype&req_id=$req_id&req_type=$reqtype&Notinserted=Notinserted");
}


}