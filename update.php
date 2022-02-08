<?php
   // db connection
   require('DBconnection.php');

   //variables
   $id=$_POST['id'];

   $name=$_POST['name'];
   $status=$_POST['status'];
   $endTime=$_POST['endTime'];

   $stmt = $conn->prepare("UPDATE PROJECTS SET Name = ?, Status = ?, EndTime = ? WHERE Id = ?");
   $stmt->bind_param('sssi',$name, $status, $endTime, $id);
   $stmt->execute();

   if($stmt) {
    echo "<br> modify successfully!";
   } else {
    echo "<br> Error to modify!";
   } 
   
   $conn->close();

?>