


<?php

include 'dbconnecion.php';
include 'sql.php';
session_start();

$sql = new sql();
if(isset($_POST['UpdateDeclarative'])){
    $reqID=$_POST['req_id'];
    $reqType=$_POST['req_type'];
// mysql function goes here
//$addreq=$sql->addreq($_POST['req_name'],$_POST['project_id'],$_POST['type']);
 $UpdateDeclarative = $sql->UpdateDeclarative($_POST['req_id'],$_POST['declarative_name'],$_POST['declarative_desc'],$_POST['complexity'],$_POST['priority']);
 $UpdateReqName= $sql->UpdateReqName($_POST['req_id'],$_POST['req_name']);
// echo "<pre>";
// print_r ($UpdateDeclarative);
// die();

 if($UpdateDclarative[0] == true){
  
      
        header("Location:index.php?page=Declarative_Stm&changed=changed&req_id=$reqID&req_type=$reqType");
    
  
    
           
   }else{ 
    
        
        header("Location:index.php?page=Declarative_Stm&Notchanged=Notchanged&req_id=$reqID&req_type=$reqType");
        
       
            
    }
    



}