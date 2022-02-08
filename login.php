<?php
   // db connection
   require('DBconnection.php');

   //variables
   $user=$_POST['user'];
   $password=$_POST['password'];
    
   //verificando se o usuario existe no BD
   $stmt = $conn->query("SELECT * FROM USERS WHERE user = ? LIMIT 1");
   $stmt->bind_param('s',$user);
   $stmt->execute();

   if($mysqli_num_rows($stmt) > 0) {
       echo "existe";
   else
       echo "Usuário inválido";
   }


   $conn->close();

?>