<?php
   // db connection
   require('DBconnection.php');

   //variables
   $user=$_POST['user'];
   $password=MD5($_POST['password']);
   $checkPassword=$_POST['checkPasswork'];

   if(password==checkPassword) {

    $stmt = $conn->prepare("INSERT INTO USERS(User, Password) VALUES (?,?)");
    $stmt->bind_param('ss',$user, $password);

    $stmt->execute();

    $newUser = $stmt->insert_user;
    echo "User created = ".$newUser;
   } else {
       echo "Retype the password";
       echo '<br><br>';

      echo '<form method="post" action="createAccountForm.html">';
        echo '<input type="submit" value="Back">';
      echo '</form>';
   }

   $conn->close();

?>