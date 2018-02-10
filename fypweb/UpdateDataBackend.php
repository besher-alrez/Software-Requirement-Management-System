


<?php

include 'dbconnecion.php';
include 'sql.php';
session_start();

$sql = new sql();
if(isset($_POST['UpdateData'])){
    if($_FILES['img_name']['tmp_name']==null){
        $image=$_POST['old_img'];
      
      
       //echo "1";
       
       
        
       }
    else{
        if(getimagesize($_FILES['img_name']['tmp_name'] == FALSE)){
            echo "please select an image";
          }else{
            // print($_FILES['img_name']['tmp_name']);
            // die();
          //  echo "2";
            $image = addslashes($_FILES['img_name']['tmp_name']); //PHP WILL RECIEVE THE NAME IN THE LEFT [] THE tmp_name is from the library
            
            $name = addslashes($_FILES['img_name']['name']);
            $image = file_get_contents($image);
           
            $image = base64_encode($image); 
            // THE IMAGE IS SAVE IN $image
          }
        }
    $reqID=$_POST['req_id'];
    $reqType=$_POST['req_type'];
// mysql function goes here
//$addreq=$sql->addreq($_POST['req_name'],$_POST['project_id'],$_POST['type']);
 $UpdateData = $sql->UpdateData($_POST['req_id'],$_POST['data_name'],$_POST['data_desc'],$_POST['entities'],$_POST['primary_keys'],$_POST['complexity'],$_POST['priority'],$image);
 $UpdateReqName= $sql->UpdateReqName($_POST['req_id'],$_POST['req_name']);
// echo "<pre>";
// print_r ($UpdateData);
// die();

 if($UpdateProcesss[0] == true){
  
      
        header("Location:index.php?page=data_model&changed=changed&req_id=$reqID&req_type=$reqType");
    
  
    
           
   }else{ 
    
        
        header("Location:index.php?page=data_model&Notchanged=Notchanged&req_id=$reqID&req_type=$reqType");
        
       
            
    }
    



}