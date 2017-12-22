<?php
include 'dbconnecion.php';
include 'sql.php';
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>User Projecs Page</title>

	 <link rel = "stylesheet"
   type = "text/css"
   href = "style.css" />
	
	
</head>
<body>

<div class="bg">
  

	<div style="width: 100%; height: 10%; background-color:  #009999;"><p style="position :absolute; margin-top: 30px; margin-left: 60px; font-weight: bold; font-family: Lucida Sans Unicode;color: white; font-size: 200%;">SRM <span style="font-size: 60%">Software Requirement Management System</span></p>
			

      

	</div>

	<div>
	<ul>
  <li><a href="login.php">Logout</a></li>
 
  <li><a href="index.php">Home</a></li>


  <li><a href="account.php">Manage Account</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Projects</a>
    <div class="dropdown-content">
      <a href="#">User Projects</a>
      <a href="#">Stored Projects</a>
      <a href="#">Create Project</a>

    </div>
  </li>
</ul>
</div>



<?php

		$sql = new sql();
		$userprojects= $sql->userprojects($_SESSION['username'][0]['user_name']);

?>


<?php

// echo "<pre>";
// print_r($userprojects);
// die();

if( $userprojects[2] < 1)
{

	echo "No projects at this moment";
}else{	



	$x=0;
	do{

?>
	
	<div class="tt">
	<?php echo $userprojects[1][$x]["project_name"]; ?> 
	</div>


<?php
	$x=$x+1;
	// }while($x < $userprojects[2]);
}while($x < 26);
}
?>





		
	
</div>
</div>


</body>
</html>




<!-- ----------------------------------------------ManageAccount.php------ -->




<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME Page</title>

	 <link rel = "stylesheet"
   type = "text/css"
   href = "style.css" />
	
	
</head>
<body>

<div class="bg">
  
	<div style="width: 100%; height: 10%; background-color:  #009999; "><p style="position :absolute; margin-top: 30px; margin-left: 60px; font-weight: bold; font-family: Lucida Sans Unicode;color: white; font-size: 200%;">SRM <span style="font-size: 60%">Software Requirement Management System</span></p>
			

      

	</div>

	<div>
	<ul>
  <li><a href="login.php">Logout</a></li>
  <li><a href="index.php">Home</a></li>
  <li><a href="account.php">Manage Account</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Projects</a>
    <div class="dropdown-content">
      <a href="#">User Projects</a>
      <a href="#">Stored Projects</a>
      <a href="#">Create Project</a>

    </div>
  </li>
</ul>
</div>


	<div class="lg">
	<p style="margin-top: 50px ;margin-left:30px ; font-family: sans-serif; font-weight: bold; font-size: 25px;">Mnage Account</p>



	<form method="POST" action="EditAccount.php">

		<p style="margin-left: 30px;">Name:<?php echo $_SESSION['username'][0]['user_name']; ?> <input type="hidden" name="username" value="<?php echo $_SESSION['username'][0]['user_name']; ?>">   </p>
		<p style="margin-left: 30px;">Password:****** <a href="editPassword.php"><button type="button" style="float: right; margin-right: 30px;">EDIT</button></a>
		  </p>
		<p style="margin-left: 30px;">Company: <input type="text" name="cname" value="<?php echo $_SESSION['username'][0]['company']; ?>">   </p>
		<p style="margin-left: 30px;">Phone Number: <input type="text" name="p_num" value=" <?php echo $_SESSION['username'][0]['phone_number']; ?>">  </p>
		<button name="edit" style="float: right; margin-right: 30px;">EDIT</button>
		</form>

		<?php
		if(isset($_GET['changed'])){
			echo "<p>information has been changed";
		}
		?>
		</div>

	
</body>

</html>








<!-- ----------------------------------------------Account.php------ -->





<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME Page</title>

	 <link rel = "stylesheet"
   type = "text/css"
   href = "style.css" />
	
	
</head>
<body>

<div class="bg">

	<div style="width: 100%; height: 10%; background-color:  #009999; "><p style="position :absolute; margin-top: 30px; margin-left: 60px; font-weight: bold; font-family: Lucida Sans Unicode;color: white; font-size: 200%;">SRM <span style="font-size: 60%">Software Requirement Management System</span></p>
			

      

	</div>

	<div>
	<ul>
  <li><a href="login.php">Logout</a></li>
  <li><a href="index.php">Home</a></li>
  <li><a href="account.php">Manage Account</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Projects</a>
    <div class="dropdown-content">
      <a href="#">User Projects</a>
      <a href="#">Stored Projects</a>
      <a href="#">Create Project</a>

    </div>
  </li>
</ul>
</div>


	<div class="lg">
	<p style="margin-top: 50px ;margin-left:30px ; font-family: sans-serif; font-weight: bold; font-size: 25px;">Mnage Account</p>





		<p style="margin-left: 30px;">Name:  <?php echo $_SESSION['username'][0]['user_name']; ?> </p>
		<p style="margin-left: 30px;">Password: ***** </p>
		<p style="margin-left: 30px;">Company:  <?php echo $_SESSION['username'][0]['company']; ?> </p>
		<p style="margin-left: 30px;">Phone Number:  <?php echo $_SESSION['username'][0]['phone_number']; ?> </p>
		<a href="mAccount.php"><button type="button" style="float: right; margin-right: 30px;">EDIT</button></a>

	</div>
</div>
</body>
</html>