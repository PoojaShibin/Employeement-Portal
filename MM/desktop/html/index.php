<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Employee Leave Status</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/logo.png" />
</head>

<body style="background-image:url(b4.jpg);">


  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth login-full-bg" >
        <div class="row w-100" >
          <div class="col-lg-4 mx-auto" >
            <div class="auth-form-dark text-left p-5">
            <center><h3>Media Monitoring</h3></center>
              <h2>Login</h2>
              <h4 class="font-weight-light">Check Your Leave Status</h4>
              <form class="pt-5"  action="login.php?job=1" method="post">
              
                <form method="post">
                  <div class="form-group">
                    <label >Employee Code</label>
                    <input type="text" class="form-control" placeholder="Employee Code" name="t1" required>
                    <i class="mdi mdi-account"></i>
                  </div>
                  <div class="form-group">
                    <label >Password</label>
                    <input type="password" class="form-control" placeholder="Username" name="t2" required>
                    <i class="mdi mdi-eye"></i>
                  </div>
                  <div class="mt-5">
                   <input type="submit" class="btn btn-block btn-warning btn-lg font-weight-medium"  value="Login"/>
                  </div>
                
                </form>                  
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
