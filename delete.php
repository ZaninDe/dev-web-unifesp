<?php
   // db connection
   require('DBconnection.php');

   //variables
   $id=$_POST['id'];
  
   $stmt = $conn->prepare("DELETE FROM PROJECTS WHERE id = ?");
   $stmt->bind_param('i',$id);
   $stmt->execute();

   if($stmt) {
    echo "<br>Project ".$id ." was deleted successfully!";
   } else {
    echo "<br> Error to delete!";
   } 
   
   $conn->close();

?>