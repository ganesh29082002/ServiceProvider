<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Permissions | Bootstrap Simple Admin Template</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- sidebar navigation component -->
        
        <?php 
       include "sessonforAdmin.php";
       include "sideNav.php";
       ?>
        
        <!-- end of sidebar component -->
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav1" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu" aria-labelledby="nav1">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> <span><?php echo $AName ?></span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">
                    <div class="page-title">
                        <h3>User Permissions
                            <a href="roles.html" class="btn btn-sm btn-outline-info float-end"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <form accept-charset="utf-8">
                                <div class="mb-3">
                                    <label for="email" class="form-label text-uppercase"><small>Dashboard</small></label>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="switch1">
                                      <label class="form-check-label" for="switch1">Open dashboard page</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="text-uppercase"><small>Users</small></label>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="switch2">
                                      <label class="form-check-label" for="switch2">Add User</label>
                                    </div>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="switch3">
                                      <label class="form-check-label" for="switch3">Edit User</label>
                                    </div>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="switch4">
                                      <label class="form-check-label" for="switch4">Delete User</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="text-uppercase"><small>Roles & Permissions</small></label>

                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="switch5">
                                      <label class="form-check-label" for="switch5">Add Roles</label>
                                    </div>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="switch6">
                                      <label class="form-check-label" for="switch6">Edit Roles</label>
                                    </div>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="switch7">
                                      <label class="form-check-label" for="switch7">Delete Roles</label>
                                    </div>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="switch8">
                                      <label class="form-check-label" for="switch8">Update Permissions</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Save</button>
                            <a href="roles.html" class="btn btn-secondary"><i class="fas fa-times"></i> Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>