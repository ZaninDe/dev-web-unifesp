<?php
   // db connection
   require('DBconnection.php');

   //variables
   $user=$_POST['user'];
   $password=$_POST['password'];
   $checkPassword=$_POST['checkPassword'];


   if($password==$checkPassword) {

    $newPassword = MD5($password);

    $stmt = $conn->prepare("INSERT INTO USERS(User, Password) VALUES (?,?)");
    $stmt->bind_param('ss',$user, $newPassword);

    $stmt->execute();

    $newID = $stmt->insert_id;
    echo "User created ID  = ".$newID;
   } else {
       echo "The password not match";
       echo '<br><br>';

      echo '<form method="post" action="createAccountForm.html">';
        echo '<input type="submit" value="Back">';
      echo '</form>';
   }

   $conn->close();

?>