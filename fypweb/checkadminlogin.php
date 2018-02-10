<?php

include 'dbconnecion.php';
include 'sql.php';
session_start();

$sql = new sql();


if(isset($_POST['adminlogin'])){


  $checkadminLogin = $sql->checkadminLogin($_POST['username'], $_POST['password']);

    //   echo "<pre>";
    //   print_r($checkadminLogin);
    //   die();
  


   if($checkadminLogin[2] > 0){



   	$_SESSION['username'] = $checkadminLogin[1];




   	
   //
   	header("Location:index.php"); 





   
   }else{

   	echo "can not login";
   }


}


