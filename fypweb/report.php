
<?php
include 'dbconnecion.php';
include 'sql.php';
//session_start();


?>
 <?php
    $sql = new sql();

$projectID = $_GET['project_id'];

$totalreq= $sql->totalreq($projectID);

$reqTypeNum = $sql->reqTypeNum($projectID);
$useCaseNum = $sql->useCaseNum($projectID);
$ProcessModelNum = $sql->ProcessModelNum($projectID);
$DataModelNum = $sql->DataModelNum($projectID);
$BusinessNum = $sql->BusinessNum($projectID);
$DeclarativeNum = $sql->DeclarativeNum($projectID);
$viewMembers = $sql-> viewMembers($projectID);
//  $result = mysqli_fetch_array($totalreq);

// echo $projectID;
// echo "<pre>";
// print_r($reqTypeNum);
// die();

// $num_rows = mysql_num_rows($totalreq);


// $countReqType=$sql->countReqType($projectID);
 //$bringProjectInfo = $sql->bringProjectInfo($projectID);


 ?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
           
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Total Requirements</th>
        <th>Business Rules</th>
        <th>Data Model</th>
        <th>Declarative Statement</th>
       
        
        <th>Process Model</th>
        <th>Use Case</th>
        <th>Members</th>
        <th> </th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $totalreq[2]; ?></td>
        
       
        
   
        <td><?php echo $BusinessNum[2]; ?></td>
        <td><?php echo $DeclarativeNum[2]; ?></td>
        <td><?php echo $DataModelNum[2]; ?></td>
        <td><?php echo $ProcessModelNum[2]; ?></td>
        <td><?php echo $useCaseNum[2]; ?></td>
        <td><?php echo $viewMembers[2]; ?></td>
        
      </tr>

    </tbody>
  </table>
</div>

</body>
</html>