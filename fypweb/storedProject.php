<?php
include 'dbconnecion.php';
include 'sql.php';
//ses//sion_start();


?>
<div class="userProjects">
	


<h3>Projects List</h3>
<?php

    $sql = new sql();
    $adminprojects= $sql->adminprojects();
//     echo "<pre>";
// print_r ($userprojects);
// die();
 
?>

  <?php

  $x = 0;

  ?>
  <div class="projects-fixed">

       <div id="projectID" class="pro-details" >ID</div>
     <div class="pro-details">Name</div>

     </div>
    <!--  <div class="pull-right"><button>View</button></div> -->
<?php
    if( $adminprojects[2] < 1)
{

  echo "No projects at this moment";
}


else{  



  $x=0;
  do{

?>


  	<div class="projects">



     <div id="projectID" class="pro-details"><?php echo $adminprojects[1][$x]["project_id"]; ?> </div>
     <div class="pro-details"><?php echo $adminprojects[1][$x]["project_name"]; ?> </div>
     <div class="pull-right"><a href="index.php?page=ProjectContent&project_id=<?php echo $adminprojects[1][$x]["project_id"]; ?>"><button>View</button></a></div>





  	</div>






<?php
  $x++;

}while ($x < $adminprojects[2]);

}
?>
