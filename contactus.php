<?php
require 'admin/resources/conn.php';
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$messages = $_POST['messages'];


	// now filter
	$name = $connection->real_escape_string($name);
	$email = $connection->real_escape_string($email);
	$messages = $connection->real_escape_string($messages);

	// now INSERT
	$sql = "INSERT INTO ContactUs (name, email, messages) VALUES ('$name', '$email', '$messages')";
	$result = $connection->query($sql);
	if ($result) {
		// echo ok to user
		?>
		<script>
		alert("Thanks! We will contact you back as soon as possible");
		</script>
		<meta http-equiv="refresh" content="3; URL=./contactus.php">
		<?php
	}
	else
	{
		?>
		<script>
		alert("ERROR: Please do not hack us :')'");
		</script>
		<meta http-equiv="refresh" content="3; URL=./contactus.php">
		<?php
		// return error to users
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>System of A Down</title>
	<meta name="author" content="Tester2009">
	<link rel="stylesheet" type="text/css" href="resources/css/systemofadown.css">
	<link rel="icon" href="resources/images/icon.jpg">
</head>
<body bgcolor="black">
	<div class="bg_container">
		<center>
			<img src="resources/images/soad.png">
		</center>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About Us</a></li>
			<li><a href="members.php">Members</a></li>
			<li><a href="music.php">Music</a></li>
			<li><a href="contactus.php" class="active">Contact Us</a></li>
		</ul>
		<br /><br />
		<center>
		<form method="post" action="contactus.php">
			<table width="80%">
				<tr>
					<td><p>Name: </p></td>
					<td><input type="text" name="name" size="71"></td>
				</tr>
				<tr>
					<td><p>Email: </p></td>
					<td><input type="email" name="email" name="" size="71"></td>
				</tr>
				<tr>
					<td><p>Messages: </p></td>
					<td><textarea cols="70" rows="10" name="messages"></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<button type="submit" value="submit" name="submit">Submit</button>
						<button type="reset" value="reset">Reset</button>
					</td>
				</tr>
			</table>
		</form>
		</center>

	</div>
</body>
</html>
