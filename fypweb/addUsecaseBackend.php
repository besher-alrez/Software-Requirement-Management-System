


<?php

include 'dbconnecion.php';
include 'sql.php';
session_start();
//echo $_SESSION['username'][0]['user_name'];

$author =  $_SESSION['username'][0]['user_name'];
$sql = new sql();

if(isset($_POST['addReq'])){
    $projectid=$_POST['project_id'];

    if(getimagesize($_authorFILES['img_name']['tmp_name'] == FALSE)){
        echo "please select an image";
      }else{
        $image = addslashes($_FILES['img_name']['tmp_name']); //PHP WILL RECIEVE THE NAME IN THE LEFT [] THE tmp_name is from the library
        $name = addslashes($_FILES['img_name']['name']);
        $image = file_get_contents($image);
        $image = base64_encode($image); // THE IMAGE IS SAVE IN $image
      }
// mysql function goes here
//$addreq=$sql->addreq($_POST['req_name'],$_POST['project_id'],$_POST['type']);
 $addUsecase = $sql->addUsecase($_POST['req_name'],$_POST['type'],$author,$_POST['project_id'],$_POST['usecase_name'],$_POST['usecase_desc'],$_POST['actors'],$_POST['mScenario'],$image);
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
    

// if($addUsecase[1] == true){
// $projectid=$_POST['project_id'];

// 	header("Location:index.php?page=ProjectContent&inserted=inserted&project_id=$projectid");
// }else{
//     $projectid=$_POST['project_id'];

//    header("Location:index.php?page=ProjectContent&Notinserted=Notinserted&project_id=$projectid");
// }


}