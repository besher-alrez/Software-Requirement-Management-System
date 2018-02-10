


<?php

include 'dbconnecion.php';
include 'sql.php';


$sql = new sql();


$comment_id=$_GET['comment_id'];

$req_id= $_GET['req_id'];
$grabreqtype = $sql->grabProjectID($req_id);

$reqtype= $grabreqtype[1][0]['req_type'];

$deleteComment = $sql->deleteComment($comment_id);

echo "$comment_id";

echo "$req_id";
echo "$reqtype";

// mysql function goes here

 

// echo "<pre>";
// print_r ($deleteComment);
// die();
if($deleteComment[0] == true){


	header("Location:index.php?page=$reqtype&req_id=$req_id&req_type=$reqtype&deleted=deleted");
}else{



	header("Location:index.php?page=$reqtype&req_id=$req_id&req_type=$reqtype&nondeleted=nondeleted");
}


