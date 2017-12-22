


<?php

include 'dbconnecion.php';
include 'sql.php';


$sql = new sql();


$project_id=$_GET['project_id'];
$member_name=$_GET['member_name'];



$deleteMember = $sql->deleteMember($member_name);



// mysql function goes here

 

// echo "<pre>";
// print_r ($deleteMember);
// die();
if($deleteMember[0] == true){


	header("Location:index.php?page=addMember&deletd=deleted&project_id=$project_id");
}else{



   header("Location:index.php?page=ProjectContent&notdeleted=notdeleted&project_id=$project_id");
}


