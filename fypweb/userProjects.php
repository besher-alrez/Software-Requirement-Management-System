<?php
include 'dbconnecion.php';
include 'sql.php';
//ses//sion_start();


?>
<div class="userProjects">
	


<h3>Projects List</h3>
<?php

    $sql = new sql();
    $userprojects= $sql->userprojects($_SESSION['username'][0]['user_name']);
    
 
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
    if( $userprojects[2] < 1)
{

  echo "No projects at this moment";
}


else{  



  $x=0;
  do{

?>


  	<div class="projects">



     <div id="projectID" class="pro-details"><?php echo $userprojects[1][$x]["project_id"]; ?> </div>
     <div class="pro-details"><?php echo $userprojects[1][$x]["project_name"]; ?> </div>
     <div class="pull-right"><a href="index.php?page=ProjectContent&project_id=<?php echo $userprojects[1][$x]["project_id"]; ?>"><button>View</button></a></div>





  	</div>






<?php
  $x++;

}while ($x < $userprojects[2]);

}
?>
<?php if( $_SESSION['username'][0]['user_name'] != 'admin' ) {?>

<h3>Projects U are Member In</h3>
<?php

    $sql = new sql();
    $userprojects= $sql->memberprojects($_SESSION['username'][0]['user_name']);
    

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
    if( $userprojects[2] < 1)
{

   echo "<h4>No projects at this moment</h4>";
}


else{  



  $x=0;
  do{

?>


    <div class="projects">



     <div id="projectID" class="pro-details"><?php echo $userprojects[1][$x]["project_id"]; ?> </div>
     <div class="pro-details"><?php echo $userprojects[1][$x]["project_name"]; ?> </div>
     <div class="pull-right"><a href="index.php?page=memberProjectContent&project_id=<?php echo $userprojects[1][$x]["project_id"];?>"><button>View</button></a></div>





    </div>






<?php
  $x++;

}while ($x < $userprojects[2]);

} }
?>
</div>