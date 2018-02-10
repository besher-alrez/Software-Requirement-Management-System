


<?php

include 'dbconnecion.php';
include 'sql.php';
session_start();

$sql = new sql();
if(isset($_POST['UpdateBusiness'])){
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

    $reqID=$_POST['req_id'];
    $reqType=$_POST['req_type'];
// mysql function goes here
//$addreq=$sql->addreq($_POST['req_name'],$_POST['project_id'],$_POST['type']);
$UpdateBusiness = $sql->UpdateBusiness($_POST['req_id'],$_POST['business_name'],$_POST['business_desc'],$_POST['business_exm'],$_POST['business_source'],$_POST['relatedRules'],$_POST['complexity'],$_POST['priority'],$_POST['requestedBy'],$image);
$UpdateReqName= $sql->UpdateReqName($_POST['req_id'],$_POST['req_name']);
// echo "<pre>";
// print_r ($UpdateBusiness);
// die();

 if($UpdateBusiness[0] == true){
  
      
        header("Location:index.php?page=Business&changed=changed&req_id=$reqID&req_type=$reqType");
    
  
    
           
   }else{ 
    
        
        header("Location:index.php?page=Business&Notchanged=Notchanged&req_id=$reqID&req_type=$reqType");
        
       
            
    }
    



}