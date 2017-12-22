<?php

include 'dbconnecion.php';
include 'sql.php';
session_start();

$sql = new sql();


if(isset($_POST['login'])){


  $checkLogin = $sql->checkLogin($_POST['username'], $_POST['password']);

      // echo "<pre>";
      // print_r($checkLogin);
      // die();
  


   if($checkLogin[2] > 0){



   	$_SESSION['username'] = $checkLogin[1];




   	
   //
   	header("Location:index.php"); 





   
   }else{

   	echo "can not login";
   }


}


