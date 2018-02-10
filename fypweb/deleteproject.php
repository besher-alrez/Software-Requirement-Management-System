


<?php

include 'dbconnecion.php';
include 'sql.php';


$sql = new sql();


$project_id=$_GET['project_id'];



$deleteProject = $sql->deleteProject($project_id);



// mysql function goes here

 

// echo "<pre>";
// print_r ($deleteProject);
// die();
if($deleteUser[0] == true){


    header("Location:index.php?page=userProjects");
}else{



    header("Location:index.php?page=userProjects");
}


