<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM user WHERE Email = '{$myusername}' and Passworduser = '{$mypassword}'";

      // $result = mysqli_query($db,$sql) or die("unsuccessful");
      // $row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die("unsuccessful");
      // $active = $row['active'];
      
      // $count = mysqli_num_rows($result) or die("unsuccessful");
      
      $res = mysqli_query($db,$sql) or die("result failed");
      if(mysqli_num_rows($res) >0)
      {
         echo "<SCRIPT> alert('hiiii')  </SCRIPT> ";  
         header("Location: http://localhost/MiniProject%20V.1/Pages/ServiceProviderRegistration.php");
      }
      else {
         $error = "Your Login Name or Password is invalid";
      }






      // If result matched $myusername and $mypassword, table row must be 1 row
		
      // if($count == 1) {
      //   //  session_register("myusername");
      //     echo "<SCRIPT> alert('hiiii')  </SCRIPT> ";
      //    $_SESSION['login_user'] = $myusername;

         
      //    header("Location: http://localhost/MiniProject%20V.1/Pages/ServiceProviderRegistration.php");
      // }
   }
?>