<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
    <link rel="stylesheet" href="ServiceProviderRegistration.css" />

    <style>
        button {
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.35);
            padding: 0%;
        }
    </style>
</head>

<body>
    <div class="container outercontainer ">
        <div class="row ">
          <div
            class="h-100  d-flex align-items-center justify-content-center mt-5 w-100"
          >
  
          
            <form class="w-100" >
              <div class="form-row ">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">First Name</label>
                  <input
                    type="email" 
                    class="form-control"
                    id="inputEmail4"
                    placeholder="First Name"
                    name="fname"
                  />
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Last Name</label>
                  <input
                    type="password"
                    class="form-control"
                    id="inputPassword4"
                    placeholder="Last Name"
                    name="lname"
                  />
                </div>
              </div>
  
              <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Gmail">Gmail</label>
                  <input
                    type="Gmail"
                    class="form-control"
                    id="Gmail"
                    placeholder="Gmail"
                    name="gmail"
                  />  
                </div>
                <div class="form-group col-md-6">
                  <label for="inputState">Gender</label>
                  <select id="inputState" class="form-control">
                    <option selected disabled>Choose...</option>
                    <option value="male" >Male</option>
                    <option value="female" >Female</option>
                    <option value="other" >Other</option>
                  </select>
                </div>
              </div>
  
              <div class="form-group">
                <label for="inputAddress">Address</label>
                <input
                  type="text"
                  class="form-control"
                  id="inputAddress"
                  placeholder="1234 Main St"
                  name="address"
                />
              </div>
  
              <div class="form-group col">
                <input type="file" class="custom-file-input" value="adharfile" id="customFile" />
                <label class="custom-file-label" for="customFile"
                  >Upload Addhar Card</label
                >
              </div>
  
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Addhar Number</label>
                  <input type="Nuber" name="adharno" class="form-control" id="inputEmail4" />
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">DOB</label>
                  <input type="date" class="form-control" name="dbd" id="inputPassword4" />
                </div>
              </div>
  
  
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">Choose Category</button>
                </div>
                <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                  <option value="" disabled selected>select...</option>
                    <option value="Home & Services">Home & Services</option>
                    <option value="Home Improvment">Home Improvment</option>
                    <option value="Professional">Professional</option>
                    <option value="Health & Wellness">Health & Wellness</option>
                    <option value="Travel & Transport">Travel & Transport</option>
                    <option value="Events">Events</option>
                </select>
              </div>
  
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">Choose Service</button>
                </div>
                <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                
                    <option value="" disabled selected>select...</option>
                    <option value="">Air Cooler Dealers</option>
                    <option value="">Air Purifier Dealers</option>
                    <option value="">Exhaust Fan Dealers</option>
                    <option value="">Fan Dealers</option>
                    <option value="">Audio Visual Equipment Dealers</option>
                    <option value="">DVD Player Dealers</option>
                    <option value="">Home Theatre Dealers</option>
                  
                </select>
              </div>
  
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="inputEmail4"
                    placeholder="Password"
                  />
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Confirm Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="inputPassword4"
                    placeholder="Confirm Password"
                  />
                </div>
              </div>
  
              <div class="mb-3">
                <label for="validationTextarea">Textarea</label>
                <textarea class="form-control " id="validationTextarea" placeholder="Required example textarea" required></textarea>
                <div class="invalid-feedback">
                  Please enter a message in the textarea.
                </div>
              </div>
              
  
              <button type="submit" class="btn btn-primary my-2">Register</button>
            </form>
          </div>
        </div>
      </div>
</body>

</html>