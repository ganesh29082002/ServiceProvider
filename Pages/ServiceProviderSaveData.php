<?php 
 $SNAME =$_POST['sname'];
 $SADDRESS =$_POST['saddress'];
 $Sclass =$_POST['sclass'];
 $Sphone =$_POST['sphone'];

$conn= mysqli_connect("localhost","root","","crud") or die("connection feild");
$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$SNAME}','{$SADDRESS}','{$Sclass}','{$Sphone}') ";
$result = mysqli_query($conn,$sql) or die("query unsuccessful");
header("Location://localhost/DATABAS/crud_html/index.php");
mysqli_close($conn);
?>