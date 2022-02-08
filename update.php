<?php
   // db connection
   require('DBconnection.php');

   //variables
   $nameProject=$_POST['nameProject'];

   $name=$_POST['name'];
   $status=$_POST['status'];
   $endTime=$_POST['endTime'];

   $stmt = $conn->prepare("UPDATE PROJECTS SET Name = ?, Status = ?, EndTime = ? WHERE Name = ?);
   $stmt->bind_param('ssss',$name, $status, $endTime, $nameProject);
   $stmt->execute();

   if($stmt) {
    echo 'ok';
   } else {
    echo 'error';
   } 

   $conn->close();

?>