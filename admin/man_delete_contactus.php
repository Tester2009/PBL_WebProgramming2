<?php
require 'resources/conn.php';

if (isset($_GET['id'])) {
  // now can proceed
  $contact_us_id = $_GET['id'];
  // filter
  if (!filter_var($contact_us_id, FILTER_VALIDATE_INT) == false) {
    // variable is integer
    // now proceed to delete

    $sql = "DELETE FROM ContactUs WHERE id='$contact_us_id'";
    $result = $connection->query($sql);
    if ($result) {
      // result is succeed. now proceed.
      echo "
      <script>
      alert('Deleted! Returning to Contact Us');
      </script>
      ";
      echo "<meta http-equiv='refresh' content='0; URL=./man_contactus.php' />";
    }
  }
  else {
    // variable not integer. return to man_contactus
    echo "<meta http-equiv='refresh' content='0; URL=./man_contactus.php'>";
  }
}
else {
  // cannot proceed. return to man_contactus
  echo "<meta http-equiv='refresh' content='0; URL=./man_contactus.php'>";
}
?>
Returning...
