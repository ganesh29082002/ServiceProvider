<?php



   include("config.php");
   if(isset($_POST['register'])) {

   $NAME = $_POST['Name'];
   $USERNAME = $_POST['Username'];
   $EMAIL = $_POST['Email'];
   $PASSWORD = $_POST['Password'];
   $CPASSWORD = $_POST['Repeatpassword'];
   $ADDRESS = $_POST['Address'];
   
   
   
   $db = mysqli_connect("localhost","root","","miniproject") or die("connectiion Failed");

   $sql="INSERT INTO user (Uid, Name, Email, Passworduser, Cpassword,Address) VALUES('{$USERNAME}','{$NAME}','{$EMAIL}','{$PASSWORD}','{$CPASSWORD}','{$ADDRESS}')";
   $Result= mysqli_query($db,$sql) or die("unSUCCESS");
   // $result = mysqli_query($conn, $sql) or die("unSUCCESS");

   echo "<SCRIPT> alert('hiiii')  </SCRIPT> "; 
   }




   session_start();
   
   // if($_SERVER["REQUEST_METHOD"] == "POST") {
   if(isset($_POST['login'])) {


      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $ROLE = mysqli_real_escape_string($db,$_POST['role']);
      
      if($ROLE="User") {
      $sql = "SELECT * FROM user WHERE Email = '{$myusername}' and Passworduser = '{$mypassword}'";
      $res = mysqli_query($db,$sql) or die("result failed");
      if(mysqli_num_rows($res) >0)
      {
         $row=mysqli_fetch_assoc($res);
         echo "<SCRIPT> alert('You are logIn as User')  </SCRIPT> ";  
		$_SESSION['UID']=$row['Uid'];
		$_SESSION['UNAME']=$row['Name'];


         header("Location: http://localhost/MiniProject%20V.1/Pages/HomePage.php");
      }
      else {
         $error = "Your Login Name or Password is invalid";
      }

   } 
   elseif($ROLE="ServiceProvider") {
      $sql = "SELECT * FROM serviceprovider WHERE gmail = '{$myusername}' and Password = '{$mypassword}'";
      $res = mysqli_query($db,$sql) or die("result failed");
      if(mysqli_num_rows($res) >0)
      {
         $row=mysqli_fetch_assoc($res);
         echo "<SCRIPT> alert('You are logIn as User')  </SCRIPT> ";  
		$_SESSION['UID']=$row['Uid'];
		$_SESSION['UNAME']=$row['Name'];


         header("Location: http://localhost/MiniProject%20V.1/Pages/HomePage.php");
      }
      else {
         $error = "Your Login Name or Password is invalid";
      }

      echo "<SCRIPT> alert('You are logIn as User')  </SCRIPT> ";  

   }
   else {
      $sql = "SELECT * FROM admin WHERE Email = '{$myusername}' and Passworduser = '{$mypassword}'";
      $res = mysqli_query($db,$sql) or die("result failed");
      if(mysqli_num_rows($res) >0)
      {
         $row=mysqli_fetch_assoc($res);
         echo "<SCRIPT> alert('You are logIn as User')  </SCRIPT> ";  
		$_SESSION['UID']=$row['Uid'];
		$_SESSION['UNAME']=$row['Name'];


         header("Location: http://localhost/MiniProject%20V.1/Pages/HomePage.php");
      }
      else {
         $error = "Your Login Name or Password is invalid";
      }

   }
      // $result = mysqli_query($db,$sql) or die("unsuccessful");
      // $row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die("unsuccessful");
      // $active = $row['active'];
      
      // $count = mysqli_num_rows($result) or die("unsuccessful");
      
      $res = mysqli_query($db,$sql) or die("result failed");
      if(mysqli_num_rows($res) >0)
      {
         $row=mysqli_fetch_assoc($res);
         echo "<SCRIPT> alert('hiiii')  </SCRIPT> ";  
		$_SESSION['UID']=$row['Uid'];
		$_SESSION['UNAME']=$row['Name'];


         header("Location: http://localhost/MiniProject%20V.1/Pages/HomePage.php");
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