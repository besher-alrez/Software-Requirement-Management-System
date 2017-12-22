 
 <?php
include 'dbconnecion.php';
include 'sql.php';
//session_start();


?>
 <?php

$projectID = $_GET['project_id'];


 //$bringProjectInfo = $sql->bringProjectInfo($projectID);


 ?>
 <?php

    $sql = new sql();
    $projectreq= $sql->projectreq($projectID);
    //$userprojects= $sql->userprojects($_SESSION['username'][0]['user_name']);
  $projectinfo= $sql->projectinfo($projectID);
    

?>

<div class="userProjects">
<!-- <a href="index.php?page=addMember&project_id=<?php echo $projectID; ?>"><button>Add MEmber</button></a> -->
<ul>
<li> <a href="index.php?page=addMember&project_id=<?php echo $projectID; ?>">Members</a></li>
<li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">Add Requiremet</a>
              <div class="dropdown-content">
		              <a href="index.php?page=addUsecase&project_id=<?php echo $projectID; ?>">Use Case</a>
		              <a href="index.php?page=addProcess&project_id=<?php echo $projectID; ?>">Process Model</a>
		              
             </div>
             </li>
             </ul>

	


   
<p style="font-weight:bold; font-family:sans-serif; margin-left:30px; font-size:20px">Project Name:  <?php echo $projectinfo[1][0]["project_name"]; ?> </p>
<h3>Requirements</h3>

  <?php

  $x = 0;

  ?>
  <div class="projects-fixed">

       <div id="projectID" class="pro-details" >ID</div>
     <div class="pro-details" style="width: 10px;">Name</div>
      <div class="pro-details" style="margin-left: 200px;">TYPE</div>


     </div>
    <!--  <div class="pull-right"><button>View</button></div> -->
<?php
// echo "<pre>";
// print_r($projectreq);
// die();

    if( $projectreq[2] < 1)
{

  echo "No requirements at this moment";
}


else{  



  $x=0;
  do{

?>


  	<div class="projects">



     <div id="projectID" class="pro-details"><?php echo $projectreq[1][$x]["req_id"]; ?> </div>
     <div class="pro-details" style="width: 110px;"><?php echo $projectreq[1][$x]["req_name"]; ?> </div>
     <div class="pro-details" style="margin-left: 100px;"><?php echo $projectreq[1][$x]["req_type"]; ?>
     <?php $reqType= $projectreq[1][$x]["req_type"];?> </div>
     <div class="pull-right"><a href="index.php?page=<?php echo $projectreq[1][$x]["req_type"];?>&req_id=<?php echo $projectreq[1][$x]["req_id"];?>&req_type=<?php echo $projectreq[1][$x]["req_type"];?>"><button>View</button></a></div>





  	</div>






<?php
  $x++;

}while ($x < $projectreq[2]);


}
?>

