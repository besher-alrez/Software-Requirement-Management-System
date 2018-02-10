


<?php

include 'dbconnecion.php';
include 'sql.php';


$sql = new sql();


$member_name=$_GET['member_name'];



$deleteUser = $sql->deleteUser($member_name);



// mysql function goes here

 

// echo "<pre>";
// print_r ($deleteMember);
// die();
if($deleteUser[0] == true){


	header("Location:index.php?page=users&deletd=deleted");
}else{



   header("Location:index.php?page=users&notdeleted=notdeleted");
}


