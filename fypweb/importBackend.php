


<?php

include 'dbconnecion.php';
include 'sql.php';
session_start();


$req_type=$_POST['reqtype'];
$req_id=$_POST['reqid'];

$projectid=$_POST['project_id'];

$sql = new sql();



$grabReq = $sql->grabReq($req_id);
// echo "<pre>";
//  print_r($grabReq);
//  die();

if($req_type == 'use case'){
    

 
 $addUsecase = $sql->addUsecase($grabReq[1][0]['req_name'],$grabReq[1][0]['req_type'],$_POST['author'],$_POST['project_id'],$_POST['usecase_name'],$_POST['usecase_desc'],$_POST['actors'],$_POST['mScenario'],$_POST['old_img']);
 $ManagerName = $sql->projectinfo($projectid);
// echo "<pre>";
// print_r ($addUsecase);
// die();

 if($addUsecase[0] == true){
  
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

}

// ========================================================================= process model



elseif($req_type=='process_model'){
 
        
    // mysql function goes here
    //$addreq=$sql->addreq($_POST['req_name'],$_POST['project_id'],$_POST['type']);
     $addProcess = $sql->addProcess($grabReq[1][0]['req_name'],$grabReq[1][0]['req_type'],$_POST['author'],$_POST['project_id'],$_POST['process_name'],$_POST['process_desc'],$_POST['process_purpose'],$_POST['process_outcomes'],$_POST['complexity'],$_POST['old_img']);
    
     $ManagerName = $sql->projectinfo($projectid);
    
    
    
    
     if($addProcess[0] == true){
    
        $projectid=$_POST['project_id'];
    
          if( $_SESSION['username'][0]['user_name'] == $ManagerName[1][0]['manager_name']){
            header("Location:index.php?page=ProjectContent&inserted=inserted&project_id=$projectid");
        
          }else{
        
            header("Location:index.php?page=memberProjectContent&inserted=inserted&project_id=$projectid");
        }}else{ 
        
            if( $_SESSION['username'][0]['user_name'] == $ManagerName[1][0]['manager_name']){
            
                header("Location:index.php?page=ProjectContent&Notinserted=Notinserted&project_id=$projectid");
            
            }else{
            
                header("Location:index.php?page=memberProjectContent&Notinserted=Notinserted&project_id=$projectid");
           
                }
        }
    
}


// 

elseif($req_type=='Business'){
 
        
    // mysql function goes here
    //$addreq=$sql->addreq($_POST['req_name'],$_POST['project_id'],$_POST['type']);
    $addBusiness = $sql->addBusiness($grabReq[1][0]['req_name'],$grabReq[1][0]['req_type'],$_POST['author'],$_POST['project_id'],$_POST['business_name'],$_POST['business_desc'],$_POST['business_exm'],$_POST['business_source'],$_POST['relatedRules'],$_POST['complexity'],$_POST['priority'],$_POST['requestedBy'],$_POST['old_img']);
    
     $ManagerName = $sql->projectinfo($projectid);
    
//     echo "<pre>";
// print_r ($addBusiness);
// die();

    
    
     if($addProcess[0] == true){
    
        $projectid=$_POST['project_id'];
    
          if( $_SESSION['username'][0]['user_name'] == $ManagerName[1][0]['manager_name']){
            header("Location:index.php?page=ProjectContent&inserted=inserted&project_id=$projectid");
        
          }else{
        
            header("Location:index.php?page=memberProjectContent&inserted=inserted&project_id=$projectid");
        }}else{ 
        
            if( $_SESSION['username'][0]['user_name'] == $ManagerName[1][0]['manager_name']){
            
                header("Location:index.php?page=ProjectContent&Notinserted=Notinserted&project_id=$projectid");
            
            }else{
            
                header("Location:index.php?page=memberProjectContent&Notinserted=Notinserted&project_id=$projectid");
           
                }
        }
    
}

elseif($req_type=='data_model'){
 
        
    // mysql function goes here
    //$addreq=$sql->addreq($_POST['req_name'],$_POST['project_id'],$_POST['type']);
    $addData = $sql->addData($grabReq[1][0]['req_name'],$grabReq[1][0]['req_type'],$_POST['author'],$_POST['project_id'],$_POST['data_name'],$_POST['data_desc'],$_POST['entities'],$_POST['primary_keys'],$_POST['complexity'],$_POST['priority'],$_POST['old_img']);
    
     $ManagerName = $sql->projectinfo($projectid);
    
//     echo "<pre>";
// print_r ($addBusiness);
// die();

    
    
     if($addData[0] == true){
    
        $projectid=$_POST['project_id'];
    
          if( $_SESSION['username'][0]['user_name'] == $ManagerName[1][0]['manager_name']){
            header("Location:index.php?page=ProjectContent&inserted=inserted&project_id=$projectid");
        
          }else{
        
            header("Location:index.php?page=memberProjectContent&inserted=inserted&project_id=$projectid");
        }}else{ 
        
            if( $_SESSION['username'][0]['user_name'] == $ManagerName[1][0]['manager_name']){
            
                header("Location:index.php?page=ProjectContent&Notinserted=Notinserted&project_id=$projectid");
            
            }else{
            
                header("Location:index.php?page=memberProjectContent&Notinserted=Notinserted&project_id=$projectid");
           
                }
        }
    
}

elseif($req_type=='Declarative_Stm'){
 
        
    // mysql function goes here
    //$addreq=$sql->addreq($_POST['req_name'],$_POST['project_id'],$_POST['type']);
    $addData = $sql->addDclarative($grabReq[1][0]['req_name'],$grabReq[1][0]['req_type'],$_POST['project_id'],$_POST['declarative_name'],$_POST['declarative_desc'],$_POST['complexity'],$_POST['priority']);
    
     $ManagerName = $sql->projectinfo($projectid);
    
//     echo "<pre>";
// print_r ($addBusiness);
// die();

    
    
     if($addData[0] == true){
    
        $projectid=$_POST['project_id'];
    
          if( $_SESSION['username'][0]['user_name'] == $ManagerName[1][0]['manager_name']){
            header("Location:index.php?page=ProjectContent&inserted=inserted&project_id=$projectid");
        
          }else{
        
            header("Location:index.php?page=memberProjectContent&inserted=inserted&project_id=$projectid");
        }}else{ 
        
            if( $_SESSION['username'][0]['user_name'] == $ManagerName[1][0]['manager_name']){
            
                header("Location:index.php?page=ProjectContent&Notinserted=Notinserted&project_id=$projectid");
            
            }else{
            
                header("Location:index.php?page=memberProjectContent&Notinserted=Notinserted&project_id=$projectid");
           
                }
        }
    
}