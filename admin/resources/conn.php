<?php
session_start();
date_default_timezone_set( "Asia/Kuala_Lumpur" );

error_reporting(-1);
define( "DB_HOST", "localhost" ); //PUT YOUR LOCALHOST/REMOTE ADDRESS
define( "DB_USERNAME", "root" ); //PUT YOUR DB USERNAME
define( "DB_PASSWORD", "toor" ); //PUT YOUR DB PASSOWRD
define( "DB_NAME", "PBL2_WebProg" ); //PUT YOUR DATABASE NAME



$connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); // start connection. OOP style
if ($connection->connect_errno) {
  // check if any errors.
  echo "ERROR: ". $connection->connect_error;
}
else {
  //echo "GOOD";
}


// func to put value in main site

// function about_us() {
//   $sql = "SELECT * FROM About_Us LIMIT 1";
//   $result = $connection->query($sql);
//   // now we check if data is null or NOT
//   if ($result->num_rows > 0) {
//     // now proceed to show to users
//     $data = $result->fetch_assoc();
//     $text_data = $data['text_value'];
// }





?>
