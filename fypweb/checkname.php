<?php

include 'dbconnecion.php';
include 'sql.php';
session_start();

$sql = new sql();


if(isset($_POST['signup'])){


  $checkname = $sql->checkName($_POST['username']);

      // echo "<pre>";
      // print_r($checkLogin);
      // die();

   if($checkname[2] > 0){

   	$_SESSION['username'] = $_POST['username'];
   	
    //  echo "this name is already used";
      header("Location:signup.php?invalid=invalid");

   
   }else{
      $sql->signup($_POST['username'],$_POST['password'],$_POST['cname'],$_POST['p_num']);
   	header("Location:Login.php"); 
   }


}


