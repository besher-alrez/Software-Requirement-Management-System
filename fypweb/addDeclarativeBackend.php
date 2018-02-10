


<?php

include 'dbconnecion.php';
include 'sql.php';
session_start();
$author =  $_SESSION['username'][0]['user_name'];

$sql = new sql();
if(isset($_POST['addDeclarative'])){
    $projectid=$_POST['project_id'];
// mysql function goes here
//$addreq=$sql->addreq($_POST['req_name'],$_POST['project_id'],$_POST['type']);
 $addDclarative = $sql->addDclarative($_POST['req_name'],$_POST['type'],$author,$_POST['project_id'],$_POST['declarative_name'],$_POST['declarative_desc'],$_POST['complexity'],$_POST['priority']);
 $ManagerName = $sql->projectinfo($projectid);
// echo "<pre>";
// print_r ($addDclarative);
// die();

 if($addData[0] == true){
  
      if( $_SESSION['username'][0]['user_name'] == $ManagerName[1][0]['manager_name'])
        header("Location:index.php?page=ProjectContent&inserted=inserted&project_id=$projectid");
    
      else
    
        header("Location:index.php?page=memberProjectContent&inserted=inserted&project_id=$projectid");
           
   }else{ 
    
        if( $_SESSION['username'][0]['user_name'] == $ManagerName[1][0]['manager_name'])
        
            header("Location:index.php?page=ProjectContent&Notinserted=Notinserted&project_id=$projectid");
        
        else
        
            header("Location:index.php?page=memberProjectContent&Notinserted=Notinserted&project_id=$projectid");
       
            
    }
    

// if($addUsecase[1] == true){
// $projectid=$_POST['project_id'];

// 	header("Location:index.php?page=ProjectContent&inserted=inserted&project_id=$projectid");
// }else{
//     $projectid=$_POST['project_id'];

//    header("Location:index.php?page=ProjectContent&Notinserted=Notinserted&project_id=$projectid");
// }


}