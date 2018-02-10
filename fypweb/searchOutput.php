 
 <?php
include 'dbconnecion.php';
include 'sql.php';
//session_start();

include 'index.php';
?>
 <?php


$projectID = $_POST['project_id'];
$reqname=$_POST['search'];

 //$bringProjectInfo = $sql->bringProjectInfo($projectID);


 ?>
 <?php

    $sql = new sql();

    $searchReq= $sql->searchReq($projectID,$reqname);
    $projectreq= $sql->projectreq($projectID);
    //$userprojects= $sql->userprojects($_SESSION['username'][0]['user_name']);
  $projectinfo= $sql->projectinfo($projectID);
    

?>
 <div class="maincont">
   

	


   
<h3>Requirements</h3> 


  <?php

  $x = 0;

  ?>
  <div class="projects-fixed">

       <div id="projectID" class="pro-details" >ID</div>
     <div class="pro-details" style="width: 10px;">Name</div>
      <div class="pro-details" style="margin-left: 450px;">TYPE</div>


     </div>
    <!--  <div class="pull-right"><button>View</button></div> -->
<?php
// echo "<pre>";
// print_r($searchReq);
// die();

    if( $searchReq[2] < 1)
{

  echo "No requirements Match These Keywords";
}


else{  



  $x=0;
  do{

?>


  	<div class="projects">



     <div id="projectID" class="pro-details"><?php echo $searchReq[1][$x]["req_id"]; ?> </div>
     <div class="pro-details" style="width: 210px;"><?php echo $searchReq[1][$x]["req_name"]; ?> </div>
     <div class="pro-details" style="margin-left: 240px;"><?php echo $searchReq[1][$x]["req_type"]; ?>
     <?php $reqType= $projectreq[1][$x]["req_type"];?> </div>
     <div class="pull-right"><a href="index.php?page=<?php echo $searchReq[1][$x]["req_type"];?>&req_id=<?php echo $projectreq[1][$x]["req_id"];?>&req_type=<?php echo $projectreq[1][$x]["req_type"];?>"><button>View</button></a></div>





  	</div>






<?php
  $x++;

}while ($x < $searchReq[2]);


}
?>

</div>