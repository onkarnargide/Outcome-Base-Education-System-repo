<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT password from user WHERE username = '$myusername'";
      $result = mysqli_query($db,$sql);
      $hashedpass = mysqli_fetch_array($result,MYSQLI_ASSOC); 
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if(password_verify($mypassword, $hashedpass['password'])) {
         // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "$error";
      }
   }
?>