
<?php



//echo $_SESSION['username'][0]['user_name'];
?>


 <?php if($_SESSION['username'][0]['user_name'] =='admin'){?>
	<div>
	    <ul>
			  <li><a href="login.php">Logout</a></li>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="index.php?page=users">Users</a></li>


			  <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">Projects</a>
              <div class="dropdown-content">
		              <a href="index.php?page=adminuserProjects">User Projects</a>
		              <a href="index.php?page=adminstoredprojects">Stored Projects</a>
		              <a href="index.php?page=createProject">Create Project</a>
             </div>
             </li>
       </ul>
 </div>
   <?php }else{ ?>
	<div>
	    <ul>
			  <li><a href="login.php">Logout</a></li>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="index.php?page=account">Manage Account</a></li>
			  

			  <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">Projects</a>
              <div class="dropdown-content">
		              <a href="index.php?page=userProjects">User Projects</a>
		              <a href="index.php?page=storedProject">Stored Projects</a>
		              <a href="index.php?page=createProject">Create Project</a>
             </div>
             </li>
       </ul>
 </div>
 <?php } ?>

 