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


<div style="width: 100%; height: 13%; background-color:  #009999; "><p style="position :absolute; margin-top: 40px; margin-left: 60px; font-weight: bold; font-family: Lucida Sans Unicode;color: white; font-size: 200%;">SRM <span style="font-size: 60%">Software Requirement Management System</span></p></div>


<div class="bgl">
  

	<div style="width: 100%; height: 10%; background-color:  #009999;  overflow: hidden;"></div>





   <?php

   include("navigation.php")


   ?>





 <div class="maincont" >

      <?php
		   if(!isset($_GET['page'])) {
			//include("home.php");
		  } else {
			$page=$_GET['page'];
			include("$page.php");
		  }  ?>
</div>




   <?php

   //include("aside.php")


   ?>







</div>
</body>
</html>