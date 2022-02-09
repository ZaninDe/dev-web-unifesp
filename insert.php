<?php
   // db connection
   require('DBconnection.php');

   //variables
   $name=$_POST['name'];
   $status=$_POST['status'];
   $endTime=$_POST['endTime'];


   $stmt = $conn->prepare("INSERT INTO PROJECTS(Name, Status, EndTime) VALUES (?,?,?)");
   $stmt->bind_param('sss',$name, $status, $endTime);

   $stmt->execute();

   $newID = $stmt->insert_id;
   echo "ID created = ".$newID;

   $conn->close();

   echo "<script>window.location
   .href='select.php';</script>";

?>