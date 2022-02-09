<?php
   // db connection
   require('DBconnection.php');

   //variables
   $user=$_POST['user'];
   $password=$_POST['password'];
   $checkPassword=$_POST['checkPasswork'];

   if(password==checkPassword) {

    $stmt = $conn->prepare("INSERT INTO USERS(User, Password) VALUES (?,?)");
    $stmt->bind_param('ss',$user, $password);

    $stmt->execute();

    $newUser = $stmt->insert_user;
    echo "User created = ".$newUser;
   } else {
       echo "Retype the password"
   }

   $conn->close();

?>