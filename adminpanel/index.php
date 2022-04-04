<?php
ob_start();
session_start();
if (isset($_SESSION['adminid']) && isset($_SESSION['admin_username']) && isset($_SESSION['admintype'])) {
  header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center">Login</div>
      <div class="card-body">
        <form id="loginform" method="post" action="login.php" onsubmit="return verifylogin();">
          <div class="form-group">
            <div class="form-group">
              <center><label for="username">Username</label></center>
              <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username" required autofocus="autofocus">
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-group">
              <center><label for="inputPassword">Password</label></center>
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Enter Password" required>
              
            </div>
          </div>
          <!-- <a class="btn btn-primary btn-block" href="dashboard.php">Submit</a> -->
          <button class="btn btn-primary btn-block btn-submit" type="submit" name="login">Submit</button>
          <div class="alert-submit"></div><br>
          <center><p id="loading_spinner" style="display: none;"><img src="new-loader.gif"></p></center>
        </form>
        <!-- <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div> -->
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/customscript.js"></script>
</body>

</html>
