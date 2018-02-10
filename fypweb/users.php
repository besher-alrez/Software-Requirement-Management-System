
<?php

include 'dbconnecion.php';
include 'sql.php';
// $Project_id =$_GET['project_id'];
 $sql = new sql();
$viewUsers= $sql->viewUsers();
    

?>

  <?php
   
   
		if(isset($_GET['deleted'])){
   
			echo "deleted Succesffully";
		}
   
		 if(isset($_GET['nondeleted'])){
   
			echo "not deleted ";
		}
   
   
	   

  $x = 0;

  ?>
  <div class="projects-fixed">

       <div id="projectID" class="pro-details" >User Name</div>
       <div id="projectID" class="pro-details" >Phonr Number</div>
       <div id="projectID" class="pro-details" >Company</div>


	 </div>

    <!--  <div class="pull-right"><button>View</button></div> -->
<?php
    if( $viewUsers[2] < 1)
{

  echo "No Users at this moment";
}


else{  



  $x=0;
  do{

?>


  	<div class="projects">



	  <div id="projectID" class="pro-details"><?php echo $viewUsers[1][$x]["user_name"]; ?> </div>
     <div style="width:2px; margin-left:100px;"  class="pro-details" id="projectID" ><?php echo $viewUsers[1][$x]["phone_number"]; ?> </div>
     <div style="width:5px; margin-left:150px;" class="pro-details" id="projectID"  ><?php echo $viewUsers[1][$x]["company"]; ?>
     </div><div class="pull-right"><a href="index.php?page=deleteUserBackend&member_name=<?php echo $viewUsers[1][$x]["user_name"]; ?>"><button name="deletemember">Delete</button></a></div>



  	</div>






<?php
  $x++;

}while ($x < $viewUsers[2]);

}
?>




