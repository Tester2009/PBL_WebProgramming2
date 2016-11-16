<?php
require 'resources/conn.php';
if (!isset($_SESSION['user_loggedin'])) {
  echo "<meta http-equiv='refresh' content='0; URL=./login.php' />";
}
if (isset($_POST['update'])) {
  // now get the textarea input
  // now filter the input. sanitizing..
  $about_us = $_POST['About_Us'];
  $about_us = $connection->real_escape_string($about_us);
  // $about = filter_var($about_us, FILTER_SANITIZE_STRING);
  //$about_us = trim($about_us);
  // now update
  $sql_update = "UPDATE About_Us SET text_value='$about_us' WHERE id='1'";
  $result = $connection->query($sql_update);
  if ($result) {
    // now refresh
    echo "<meta http-equiv='refresh' content='2; URL=./man_about.php'>";
    // echo "Updated";
    $text_data = "Updated. Refreshing...";
  }
  else {
    echo "ERROR ON UPDATING ABOUT US. <br />";
  }
}
else {
  // now we put the value based from database
  $sql = "SELECT * FROM About_Us LIMIT 1";
  $result = $connection->query($sql);
  // now we check if data is null or NOT
  if ($result->num_rows > 0) {
    // now proceed to show to users
    $data = $result->fetch_assoc();
    $text_data = $data['text_value'];
    // echo $text_data;
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    textarea {
      resize:none;
    }
    </style>
  </head>


  <body>

  <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./">Management</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="./">Home</a></li>
          <li class="active"><a href="man_about.php">About</a></li>
          <li><a href="man_members.php">Members</a></li>
          <li><a href="man_contactus.php">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <!-- Begin page content -->
  <div class="container">
    <!-- <div class="page-header">
      <h1>Welcome to Management Portal</h1>
    </div>
    <p class="lead">Here we manage our website</p> -->
    <div class="page-header">
      <h1>Manage your <u>About Us</u> here</h1>
    </div>

    <form method="post" action="man_about.php">
      <textarea class="form-control" rows="15" autofocus name="About_Us"><?php echo $text_data; ?></textarea>
      <br />
      <button class="btn btn-default" type="submit" name="update">Update</button>
    </form>

  </div>

  <footer class="footer">
    <div class="container">
      <p class="text-muted">Muhammad Aliff Muazzam bin Jaafar & Muhammad Fahim bin Shafie</p>
    </div>
  </footer>
