<?php
require 'resources/conn.php';
if (isset($_SESSION['user_loggedin'])) {
  echo "<meta http-equiv='refresh' content='0; URL=./index.php' />";
}
if (isset($_POST['login'])) {
  // now get the data
  $u = $_POST['username'];
  $p = $_POST['password'];

  // filtering..
  $u = filter_var($u, FILTER_SANITIZE_STRING);
  $p = filter_var($p, FILTER_SANITIZE_STRING);
  $p = md5($p);
  // echo $u."<br />";
  // echo $p."<br />";

  // now check with database.
  $sql = "SELECT * FROM Users WHERE username = '$u' AND password = '$p'";
  $result = $connection->query($sql);

  if ($result->num_rows>0) {
    // users exist
    // proceed to management portal
    // echo "OK";

    // set user id as user session
    $qq = $connection->query($sql);
    $data = $qq->fetch_assoc();
    $u_id = $data['id'];
    $_SESSION['user_loggedin'] = $u.$u_id;
    // echo $_SESSION['user_loggedin'];
    echo "<meta http-equiv='refresh' content='0; URL=./index.php' />";
  }
  else {
    // display error.
    // echo "Failed";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="http://getbootstrap.com/favicon.ico"> -->
    <title>Management Portal</title>
    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->
    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->
    <link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <form class="form-signin" method="post" action="login.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="username" type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
      </form>
    </div> <!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
