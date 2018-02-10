


<?php

include 'dbconnecion.php';
include 'sql.php';
session_start();

$sql = new sql();
if(isset($_POST['Update'])){
    $reqID=$_POST['req_id'];
    $reqType=$_POST['req_type'];

    if($_FILES['img_name']['tmp_name']==null){
        $image=$_POST['old_img'];
      
      
       //echo "1";
       
       
        
       }


    
   else{ if(getimagesize($_FILES['img_name']['tmp_name'] == FALSE)){
        echo "please select an image";
      }else{
        $image = addslashes($_FILES['img_name']['tmp_name']); //PHP WILL RECIEVE THE NAME IN THE LEFT [] THE tmp_name is from the library
        $name = addslashes($_FILES['img_name']['name']);
        $image = file_get_contents($image);
        $image = base64_encode($image); // THE IMAGE IS SAVE IN $image
      }
    }
// mysql function goes here
//$addreq=$sql->addreq($_POST['req_name'],$_POST['project_id'],$_POST['type']);
 $UpdateUsecase = $sql->UpdateUsecase($_POST['req_id'],$_POST['usecase_name'],$_POST['usecase_desc'],$_POST['actors'],$_POST['mScenario'],$image);
 $UpdateReqName = $sql->UpdateReqName($_POST['req_id'],$_POST['req_name']);
// echo "<pre>";
// print_r ($addUsecase);
// echo $reqType;
// die();

if($UpdateUsecase[0] == true){
  
      
    header("Location:index.php?page=use case&changed=changed&req_type=$reqType&req_id=$reqID");



       
}else{ 

    
    header("Location:index.php?page=use case&Notchanged=Notchanged&req_type=$reqType&req_id=$reqID");
    
   
        
}
    

// if($addUsecase[1] == true){
// $projectid=$_POST['project_id'];

// 	header("Location:index.php?page=ProjectContent&inserted=inserted&project_id=$projectid");
// }else{
//     $projectid=$_POST['project_id'];

//    header("Location:index.php?page=ProjectContent&Notinserted=Notinserted&project_id=$projectid");
// }


}