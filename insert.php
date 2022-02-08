<?php
    // db connection
    require('DBconnection.php');

    //variables
  //  $name=$_POST['name'];
  //  $status=$_POST['status'];
   // $endTime=$_POST['endTime'];

   $name="ZZanin";
   $status="in Progress";
   $endTime="10/10/2022";

   $stmt = $conn->prepare("INSERT INTO PROJECTS(Name, Status, EndTime) VALUES (?,?,?)");
   $stmt->bind_param('sss',$name, $status, $endTime);

   $stmt->execute();

   $newID = $stmt->insert_id;
   echo "ID created = ".$newID;

   $conn->close();

?>