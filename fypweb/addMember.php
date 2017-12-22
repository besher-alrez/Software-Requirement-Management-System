
<?php

include 'dbconnecion.php';
include 'sql.php';
 $Project_id =$_GET['project_id'];
 $sql = new sql();
$viewMembers= $sql->viewMembers($Project_id);
    

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


	 </div>

    <!--  <div class="pull-right"><button>View</button></div> -->
<?php
    if( $viewMembers[2] < 1)
{

  echo "No member at this moment";
}


else{  



  $x=0;
  do{

?>


  	<div class="projects">



	 <div id="projectID" class="pro-details"><?php echo $viewMembers[1][$x]["user_name"]; ?> </div>
	 <div class="pull-right"><a href="index.php?page=deleteMemberBackend&project_id=<?php echo $Project_id?>&member_name=<?php echo $viewMembers[1][$x]["user_name"]; ?>"><button name="deletemember">Delete</button></a></div>



  	</div>






<?php
  $x++;

}while ($x < $viewMembers[2]);

}
?>




<div class="createProject">
	

<form method="Post" action="addMemberBackend.php">
	 <?php

	 if(isset($_GET['inserted'])){

	 	echo "inserted Succesffully";
	 }

	  if(isset($_GET['noninserted'])){

	 	echo " not inserted ";
	 }


	?>

	<input type="hidden" name="project_id" value="<?php echo $_GET['project_id'] ?>"> </p>
	<p><label>Member Name</label><input type="text" name="membername"></p>



	<button name="addmember">Add Member</button>
</form>





</div>