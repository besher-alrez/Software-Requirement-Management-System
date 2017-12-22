<?php

include 'dbconnecion.php';
include 'sql.php';
session_start();

$sql = new sql();


if(isset($_POST['Update'])){


     $checkedit = $sql->EditAccount($_POST['username'],$_POST['cname'],$_POST['p_num']);
       if($checkedit==true){

          //  echo "this name is already used";
      header("Location:index.php?page=account&changed=changed");} 
          

}