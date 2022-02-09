<?php
 $user = $_POST['user'];
 $password = md5($_POST['password']);
 $connect = mysql_connect('localhost','352589','39667422');
 $db = mysql_select_db('352589');

   //variables
   $user=$_POST['user'];
   $password=$_POST['password'];


   $newPassword = MD5($password);


   $verify = mysql_query("SELECT * FROM USERS WHERE User =
   '$user' AND `Password` = '$newPassword'");

     if (mysql_num_rows($verify)<=0){
       echo"<script language='javascript' type='text/javascript'>
       alert('Login e/ou senha incorretos');
       window.location
       .href='index.html';</script>";
       die();
     }else{
       setcookie("User",$user);
       header("Location:select.php");
     }
    

   $conn->close();

?>