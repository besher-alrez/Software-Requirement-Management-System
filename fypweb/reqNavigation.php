
<?php
$req_id=$_GET['req_id'];
$reqType = $_GET['req_type'];
$grabReq= $sql->grabReq($reqID);
$project_id= $grabReq[1][0]["project_id"];
if($_SESSION['username'][0]['user_name'] == $grabReq[1][0]["author"]){
?>
<div class="userProjects">
<!-- <a href="index.php?page=addMember&project_id=?><button>Add MEmber</button></a> -->
<ul>
<li> <a href="index.php?page=deleteReqBackend&req_id=<?php echo $req_id; ?>">Delete</a></li>
<li> <a href="index.php?page=UpdateReq&req_id=<?php echo $req_id; ?>&req_type=<?php echo $reqType; ?>">Update</a></li>

            
             
    </li>
     </ul>


<?php }else{ ?>
    <div class="userProjects">
<!-- <a href="index.php?page=addMember&project_id=?><button>Add MEmber</button></a> -->
<ul>

            
             
    </li>
     </ul>
<?php } ?>