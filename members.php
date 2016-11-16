<?php
require 'admin/resources/conn.php';
$sql = "SELECT * FROM Members LIMIT 1";
$result = $connection->query($sql);
// now we check if data is null or NOT
if ($result->num_rows > 0) {
	// now proceed to show to users
	$data = $result->fetch_assoc();
	$text_data = $data['text_value'];
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
			<li><a href="members.php" class="active">Members</a></li>
			<li><a href="music.php">Music</a></li>
			<li><a href="contactus.php">Contact Us</a></li>
		</ul>
		<br /><br />
		<center>
			<table width="80%">
				<?php
				echo $text_data;
				?>
				<tr>
					<!--
					<td width="35%"><img src="resources/images/Serj Tankian.jpg" height="200px" width="200px"></td>
					<td><p>Serj Tankian is a Lebanese-born Armenian-American singer-songwriter, composer, multi-instrumentalist, record producer, poet, and political activist.</p></td>
 -->
				</tr>
				<tr>
					<!-- <td width="35%"><img src="resources/images/Daron Malakian.jpg" height="300px" width="200px"></td>
					<td><p>Daron Vartan Malakian is an Armenian-American singer-songwriter, multi-instrumentalist, and record producer.</p></td> -->
				</tr>
				<tr>
					<!-- <td width="35%"><img src="resources/images/Shavo Odadjian.png" height="200px" width="200px"></td>
					<td><p>Shavarsh "Shavo" Odadjian is an Armenian American songwriter, multi-instrumentalist, music video director/editor, music producer, and artist/painter.</p></td> -->
				</tr>
				<tr>
					<!-- <td width="35%"><img src="resources/images/John Dolmayan.jpg" height="200px" width="200px"></td>
					<td><p>John Hovig Dolmayan is a Lebanese-born Armenian-American songwriter and drummer. He is best known as the drummer of System of a Down. Dolmayan is also the drummer for the band Indicator and former drummer for Scars on Broadway.</p></td> -->
				</tr>
			</table>
		</center>

	</div>
</body>
</html>
