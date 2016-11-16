<?php
require 'resources/conn.php';
if (!isset($_SESSION['user_loggedin'])) {
  echo "<meta http-equiv='refresh' content='0; URL=./login.php' />";
}
if (isset($_POST['update'])) {
}
else {
  // now show all data from database
  // $sql = "SELECT * FROM ContactUs";
  // $result = $connection->query($sql);
  // while ($data = $connection->fetch_assoc($result)) {
  //   echo $data['name']. "<br />";
  //   echo $data['email']."<br />";
  //   echo $data['messages']."<br />";
  // }

  $sql = "SELECT * FROM ContactUs";
  $result = $connection->query($sql);
  // if ($result->num_rows > 0) {
  $count = $result->num_rows;
      ?><!DOCTYPE html>
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
                <li><a href="man_about.php">About</a></li>
                <li><a href="man_members.php">Members</a></li>
                <li class="active"><a href="man_contactus.php">Contact</a></li>
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
            <h1>Manage your <u>Contact Us</u> here</h1>
          </div>

          <table class="table">
            <thead>
                <tr>
                  <th>
                    Name
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Messages
                  </th>
                  <th>
                    Function
                  </th>
                </tr>
            </thead>
            <tbody>
    <?php
    while ($data = $result->fetch_assoc()) {
    ?>
              <tr>
                <td>
                  <?php echo $data['name']; ?>
                </td>
                <td>
                  <?php echo $data['email']; ?>
                </td>
                <td>
                  <?php echo $data['messages']; ?>
                </td>
                <td>
                  <a href="man_delete_contactus.php?id=<?php echo $data['id']; ?>" onClick="return confirm('Sure to delete this?')">Delete</a>
                </td>
              </tr>
    <?php    }
    ?>
            </tbody>
          </table>
          <?php
          if ($count==0) {
            echo "<p>Empty</p>";
          }
      // }
      // else {
      //   echo "Failed";
      // }
    }

    ?>
    <br />
        </div>

        <footer class="footer">
          <div class="container">
            <p class="text-muted">Muhammad Aliff Muazzam bin Jaafar & Muhammad Fahim bin Shafie</p>
          </div>
        </footer>
