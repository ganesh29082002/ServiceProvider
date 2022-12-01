<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Provider</title>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="HomePage.css" />

    <style>
        button {
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.35);
            padding: 0%;
        }
    </style>
</head>
<body>
     <!-- NavBar  -->
     <section>
     <nav class="navbar navbar-expand-lg bg-white p-1 ">
        <a class="navbar-brand" href="#">
            <img src="images/logo.jpg" alt="" class="img-fluid" /> ServiceProvider
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse p-0" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto pr-md-3 p-0">
                <a class="nav-item nav-link pr-md-3 sm-bolder" href="aboutus.html">About
                </a>
                <a type="button" class="nav-item nav-link pr-md-3 sm-bold" href="serviceproviderdashboard.html">Register
                    As Service Provider</a>
            </div>
            <div class="pr-md-3">
                <button type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#Loginlogout">
                    SignIn/SignUp
                </button>
            </div>
            <div class="pr-md-">
            <i class="fa-solid fa-user-gear"> <p>  </p></i>
            
            </div>
        </div>
    </nav>
    </section>

    <!-- Log In Log Out Outer Model -->

    <section>
    <div class="modal fade" id="Loginlogout" tabindex="-10" role="dialog" aria-labelledby="Register" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id=""> SignIn / SignUp</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
  
              <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                    aria-controls="pills-login" aria-selected="true">Login</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="tab-register" type="button" data-toggle="modal" data-target="#pills-register"
                    href="#">Register</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                  <form action = "HomePagePhp.php" method = "post" >
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" id="loginName" name="username" class="form-control" />
                      <label class="form-label"  for="loginName">Email or username</label>
                    </div>
  
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" name="password" id="loginPassword" class="form-control" />
                      <label class="form-label" for="loginPassword">Password</label>
                    </div>
                    <!-- 2 column grid layout -->
                    <div class="row mb-4">
                      <div class="col-md-6 d-flex justify-content-center">
                        <!-- Checkbox -->
                        
  
                      <div class="col-md-6 d-flex justify-content-center">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                      </div>
                    </div>
  
                    <!-- Submit button -->
                    <input type="submit" name="login" class="btn btn-primary btn-block mb-4">Sign in</input>
  
                    <!-- Register buttons -->
                    <div class="text-center">
                      <p>Not a member? <a type="button" data-toggle="modal" data-target="#pills-register" href="#"
                          s>Register</a></p>
                    </div>
                  </form>
  
                  <!-- 
                  // if (ispost($_POST['login'])) {
                  //   include "config.php"
                  //   $username =$_POST['username'];
                  //   $password =$_POST['password'];
                  //   $use_role =$_POST['use_role'];
  
                  //    $sql = "SELECT userid,gmail,use_role from user where username='{$username}' AND Password='{$password}'";
                  //  $Result = mysqli_query($conn,$sql) or die("query feild");
  
                  //  if(mysqli_num_query($Result)>0){
                  //   while($row = mysqli_fetch_assoc($Result)){
                  //     session_start();
                  //     $_SESSION["username"] = $row['username'];
                  //     $_SESSION["password"] = $row['password'];
  
                  //     $_SESSION["use_role"] = $row['use_role'] ;
                    
                  //     header("Location: {$hostname}/admin/firstbpage.php")
                  //   }
                  //  }
                  //  else{
                  //   echo '<div class = "alert alert-denger> userbame and password invalid </div>"'
                  //  }
                  // }  
                  // ?>
                </div>
  
                -->
                <!-- <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register"> -->

                    
             <!-- User Register Dilog Box -->

                <div class="modal fade" id="pills-register" tabindex="-1" role="dialog" aria-labelledby="Register"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="">SignIn / SignUp</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <!-- Name input -->
                          <div class="form-outline mb-4">
                            <input type="text" id="registerName" class="form-control" />
                            <label class="form-label" for="registerName">Name</label>
                          </div>
  
                          <!-- Username input -->
                          <div class="form-outline mb-4">
                            <input type="text" id="registerUsername" class="form-control" />
                            <label class="form-label" for="registerUsername">Username</label>
                          </div>
                        
                          <!-- Email input -->
                          <div class="form-outline mb-4">
                            <input type="email" id="registerEmail" class="form-control" />
                            <label class="form-label" for="registerEmail">Email</label>
                          </div>
  
                          <!-- Password input -->
                          <div class="form-outline mb-4">
                            <input type="password" id="registerPassword" class="form-control" />
                            <label class="form-label" for="registerPassword">Password</label>
                          </div>
  
                          <!-- Repeat Password input -->
                          <div class="form-outline mb-4">
                            <input type="password" id="registerRepeatPassword" class="form-control" />
                            <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                          </div>
  
                          <!-- Checkbox -->
                          <div class="form-check d-flex justify-content-center mb-4">
                            <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                              aria-describedby="registerCheckHelpText" />
                            <label class="form-check-label" for="registerCheck">
                              I have read and agree to the terms
                            </label>
                          </div>
  
                          <!-- Submit button -->
                          <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
                        </form>
  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
  
  
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <!-- search box for mobile -->

    <section>

      <div class="row " id="search">
        <div class="col-md-7 sticky" id="insearch" >
    
            <div class="input-group mb-3 " >
              <div class="input-group-prepend ">
                <span class="input-group-text p-3 ">
                 
                  <select>
                    <option value=""> Location
                    </option>
                    <option value="nagpur"> nagpur
                    </option>
                    <option value="wardha"> wardha
                    </option>
                    <option value="pune"> pune
                    </option>
                    <option value="mumbai"> mumbai
                    </option>
                  </select>
                </span>
              </div>
              <input type="text" id="" class="form-control " placeholder="Type services">
              <div class="input-group-append ">
                <span id="input-group-append" type="button" class="input-group-text bg-success p-3">  Search </span>
              </div>
            </div>
        </div>
          </div>
    </section>

    <!-- BackGround Image Editing -->
   <section>
   <div id="BackGround" class="" >
    <br>
    <br>
    <br>
    
    <br>

    <h3 class="" id="Heading">Fast, FREE way to get experts.</h3>  <br>
    <div class="row " >
    <div class="col-md-5 " id="insearch">

        <div class="input-group mb-3 sticky-section " >
          <div class="input-group-prepend ">
            <span class="input-group-text p-3 ">
             
              <select>
                <option value=""> Location
                </option>
                <option value="nagpur"> nagpur
                </option>
                <option value="wardha"> wardha
                </option>
                <option value="pune"> pune
                </option>
                <option value="mumbai"> mumbai
                </option>
              </select>
            </span>
          </div>
          <input type="text" id="" class="form-control " placeholder="Type services">
          <div class="input-group-append ">
            <span id="input-group-append" type="button" class="input-group-text bg-success p-3">  Search </span>
          </div>
        </div>
    </div>
      </div>
</div>
   </section>

<!-- Float BOX -->

<section>

    <div class="container FloatBoxMain"> 
        <div class="row ">
          <div id="box-service" class=" container col-md-8 p-1 py-4 bg-white  ">
            <div class="row FloatBOX">
            <div class="boximg col-6 col-sm-2 FloatBOX1 " onClick="show_Home()">
               <img  class="img-fluid" src="../Images/HomeService.jpg" alt=""> 
               <span> <center> Home & Services </center> </span>
            </div>
      
            <div class="boximg col-6 col-sm-2  " onClick="show_HomeImprovement()">
                <img  class="img-fluid" src="../Images/HomeService.jpg" alt=""> 
                <span> <center> Home & Services </center> </span>
             </div> 
             
             <div class="boximg col-6 col-sm-2">
                <img  class="img-fluid" src="../Images/HomeService.jpg" alt="">
                <span> <center> Home & Services </center> </span>
             </div>

             <div class="boximg col-6 col-sm-2">
                <img  class="img-fluid" src="../Images/HomeService.jpg" alt="">
                <span> <center> Home & Services </center> </span>
             </div>

             <div class="boximg col-6 col-sm-2">
                <img  class="img-fluid" src="../Images/HomeService.jpg" alt="">
                <span> <center> Home & Services </center> </span>
             </div>

             <div class="boximg col-6 col-sm-2">
                <img  class="img-fluid" src="../Images/HomeService.jpg" alt="">
                <span> <center> Home & Services </center> </span>
             </div>

             <div class="boximg col-6 col-sm-2">
                <img  class="img-fluid" src="../Images/HomeService.jpg" alt="">
                <span> <center> Home & Services </center> </span>
             </div>
             
             <div class="boximg col-6 col-sm-2">
                <img  class="img-fluid" src="../Images/HomeService.jpg" alt="">
                <span> <center> Home & Services </center> </span>
             </div>
  
            
            
            </div>
        </div>
    </div></div>
</section>

<!-- HIDING MENU SECTION -->

<section class="hidemenu container ">

  <!-- dropdown_Home -->

        <div class="dropdown_Home"  id="dropdown_Home"  style="display:none" ;>
           

  <button type="button" class="btn-close btn-danger" onClick="close_menu()" aria-label="Close"></button>
  <div class="row col-data" >
    <div class="col-lg-4">
        <ul class="my-3 ">
            <li> <a href="dumy.html"> AC Dealers </li></a>  <br>
            <li><a href="dumy.html"> Air Cooler Dealers</li></a> <br>
            <li><a href="dumy.html"> Air Purifier Dealers</li></a> <br>
            <li><a href="dumy.html"> Exhaust Fan Dealers</li></a> <br>
            <li><a href="dumy.html"> Fan Dealers</li></a> <br>
            <li><a href="dumy.html"> Audio Visual Equipment Dealers</li></a> <br>
            <li><a href="dumy.html">DVD Player Dealers</li></a> <br>

            <li><a href="dumy.html"> Home Theatre Dealers</li></a> <br>



        </ul> 
      </div>

      <div class="col-lg-4">
        <ul class="my-3 ">
            <li> <a href="dumy.html"> AC Dealers</li></a>  <br>
            <li><a href="dumy.html"> Air Cooler Dealers</li></a> <br>
            <li><a href="dumy.html"> Air Purifier Dealers</li></a> <br>
            <li><a href="dumy.html"> Exhaust Fan Dealers</li></a> <br>
            <li><a href="dumy.html"> Fan Dealers</li></a> <br>
            <li><a href="dumy.html"> Audio Visual Equipment Dealers</li></a> <br>
            <li><a href="dumy.html">DVD Player Dealers</li></a> <br>

            <li><a href="dumy.html"> Home Theatre Dealers</li></a> <br>



        </ul> 
      </div>
      <div class="col-lg-4">
        <ul class="my-3 ">
            <li> <a href="dumy.html"> AC Dealers</li></a>  <br>
            <li><a href="dumy.html"> Air Cooler Dealers</li></a> <br>
            <li><a href="dumy.html"> Air Purifier Dealers</li></a> <br>
            <li><a href="dumy.html"> Exhaust Fan Dealers</li></a> <br>
            <li><a href="dumy.html"> Fan Dealers</li></a> <br>
            <li><a href="dumy.html"> Audio Visual Equipment Dealers</li></a> <br>
            <li><a href="dumy.html">DVD Player Dealers</li></a> <br>

            <li><a href="dumy.html"> Home Theatre Dealers</li></a> <br>
        </ul> 
      </div>

      </div>
        </div> 

  <!-- dropdown_Improvement -->

        <div class="dropdown_Improvement" id="dropdown_Improvement"  style="display:none ;">
           

          <button type="button" class="btn-close btn-danger" onClick="close_menu()" aria-label="Close"></button>
          <div class="row col-data" >
            <div class="col-lg-4">
                <ul class="my-3 ">
                    <li> <a href="dumy.html"> AC Dealers </li></a>  <br>
                    <li><a href="dumy.html"> Air Cooler Dealers</li></a> <br>
                    <li><a href="dumy.html"> Air Purifier Dealers</li></a> <br>
                    <li><a href="dumy.html"> Exhaust Fan Dealers</li></a> <br>
                    <li><a href="dumy.html"> Fan Dealers</li></a> <br>
                    <li><a href="dumy.html"> Audio Visual Equipment Dealers</li></a> <br>
                    <li><a href="dumy.html">DVD Player Dealers</li></a> <br>
    
                    <li><a href="dumy.html"> Home Theatre Dealers</li></a> <br>
    
    
    
                </ul> 
              </div>
    
              <div class="col-lg-4">
                <ul class="my-3 ">
                    <li> <a href="dumy.html"> AC Dealers</li></a>  <br>
                    <li><a href="dumy.html"> Air Cooler Dealers</li></a> <br>
                    <li><a href="dumy.html"> Air Purifier Dealers</li></a> <br>
                    <li><a href="dumy.html"> Exhaust Fan Dealers</li></a> <br>
                    <li><a href="dumy.html"> Fan Dealers</li></a> <br>
                    <li><a href="dumy.html"> Audio Visual Equipment Dealers</li></a> <br>
                    <li><a href="dumy.html">DVD Player Dealers</li></a> <br>
    
                    <li><a href="dumy.html"> Home Theatre Dealers</li></a> <br>
    
    
    
                </ul> 
              </div>
              <div class="col-lg-4">
                <ul class="my-3 ">
                    <li> <a href="dumy.html"> AC Dealers</li></a>  <br>
                    <li><a href="dumy.html"> Air Cooler Dealers</li></a> <br>
                    <li><a href="dumy.html"> Air Purifier Dealers</li></a> <br>
                    <li><a href="dumy.html"> Exhaust Fan Dealers</li></a> <br>
                    <li><a href="dumy.html"> Fan Dealers</li></a> <br>
                    <li><a href="dumy.html"> Audio Visual Equipment Dealers</li></a> <br>
                    <li><a href="dumy.html">DVD Player Dealers</li></a> <br>
    
                    <li><a href="dumy.html"> Home Theatre Dealers</li></a> <br>
                </ul> 
              </div>
    
              </div>
                </div> 
                
      </section>

  <!-- Footer -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<section>
   <footer class="text-center text-lg-start bg-dark ">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div class="icons">
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>ServiceProvider
            </h6>
            <p>
                This web portal will help the customer to get the personalized service according to their requirement
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Servicing In
            </h6>
            <p>
              <a href="#!" class="text-reset">Pune</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Thane</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Mumbai</a>
            </p>
            <p>
                <a href="#!" class="text-reset">Kolapur</a>
              </p>
            <p>
              <a href="#!" class="text-reset">Wardha</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            
            <p>
              <a href="https://www.urbancompany.com/blog" class="text-reset">Blog</a>
            </p>
            <p>
              <a href="https://www.urbancompany.com/reviews" class="text-reset">Review</a>
            </p>
            <p>
                <a href="https://www.urbancompany.com/aboutus" class="text-reset">About Us</a>
              </p>
            <p>
                <a href="https://www.urbancompany.com/privacy-policy" class="text-reset">Privacy Policy</a>
              </p>
            <p>
                <a href="https://www.urbancompany.com/terms" class="text-reset">Terms & Conditions</a>
              </p>
              
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Wardha, MH 42001, India</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              ggg@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 876 759 7469</p>
            <p><i class="fas fa-print me-3"></i> + 937 008 7594</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">ServiceProvider</a>
    </div>
    <!-- Copyright -->
  </footer>
</section>




<script>
  
  function show_Home(){
        var menu1 = document.getElementById('dropdown_Home');
    
        if(menu1.style.display == 'none'){
          menu1.style.display = 'block';
      }else {
          menu1.style.display = 'none';                    
      }
    }

    function show_HomeImprovement(){
        var menu1 = document.getElementById('dropdown_Improvement');
    
        if(menu1.style.display == 'none'){
          menu1.style.display = 'block';
      }else {
          menu1.style.display = 'none';                    
      }
    }

    </script>

    <script>
const navbar = document.querySelector('#insearch');
// const navbar = document.getElementById('#insearch');


let top = navbar.offsetTop;
function stickynavbar() {
  if (window.scrollY >= top) {    
    navbar.classList.add('sticky-section');
  } else {
    navbar.classList.remove('sticky-section');    
  }
}
window.addEventListener('scroll', stickynavbar);


    </script>


</body>
</html>