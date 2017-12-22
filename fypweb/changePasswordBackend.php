<?php

include 'dbconnecion.php';
include 'sql.php';
session_start();

$sql = new sql();


if(isset($_POST['changePassword'])){


  $changePassword = $sql->checkLogin( $_SESSION['username'][0]['user_name'],$_POST['oldpassword']);

     

   if($changePassword[2] > 0){

      $updatedPassword = $sql->updatePassword($_SESSION['username'][0]['user_name'],$_POST['newpassword'])  ;
      

      if($updatedPassword[0] == true){
      
         header("Location:index.php?page=changePassword&changed=changed");


      }	
 
    else{
             header("Location:index.php?page=changePassword&notchanged=notchanged");

     
        }
  }

else{
       header("Location:index.php?page=changePassword&wrongOldPassword=wrongOldPassword");

  }


  
}

