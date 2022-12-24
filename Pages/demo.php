<?php

use LDAP\Result;

include "config.php";

$sql = "select * from serviceprovider ";

$result = mysqli_query($db,$sql) or die ("connection failed in card")  ;

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/d594306424.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
<div class="container ">
<div class="row">
  <?php 
  while($row= mysqli_fetch_assoc($result))
  {
  
  ?>
  
    <div class="col-md-6">
  <form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="card m-3 border-0 shadow " style="max-width: 490px;">
      <div class="row g-0 p-3 aling-item-center m-0">
        <div class="col-md-5">
          <img src="../Images/dhiraj.jpg" class="img-fluid rounded" alt="...">
        </div>
        <div class="col-md-7 ">


          <div class="card-body d-flex flex-column m-0">
            <h5 class="card-title"> <i class="fa-solid fa-user mx-2"></i> <?php echo $row['faname'], $row['lname'];; ?> </h5>
            <p class="card-title "> <i class="fa-solid fa-chalkboard-user mx-2"></i><strong> Service : </strong> <?php echo $row['sservice']; ?> </p>
            <p class="card-title "> <i class="fa-solid fa-sack-dollar mx-2"></i> <strong> Charge :</strong> <?php echo $row['charge']; ?> <i class="fa-solid fa-indian-rupee-sign"></i> /Hour</p>
            <p class="card-title "> <i class="fa-solid fa-star mx-2"></i> <strong> Rating: </strong> <?php echo"4" ?></p>
            <p class="card-title "> <i class="fa-solid fa-business-time mx-2"></i> <strong> Exprience </strong></p>
           
            <input type="submit" class="btn btn-success w-50 " name="appoint" value="Appoint" id="">
           


            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
          </div>
        </div>
      </div>
    </div>
    <!-- if(isset($_POST["Submit1"])) -->

  </form>
  </div>
  
  <?php 
  }
  ?>
  </div>
  </div>
 

</body>

</html>

<?php
if (isset($_POST["appoint"])) { ?>

echo "<script>alert("HIii")</script>";

  <script>
    window.location.href = 'HomePage.php';
  </script>
<?php
}
?>