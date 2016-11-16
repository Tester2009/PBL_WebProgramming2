<?php
require 'admin/resources/conn.php';
$sql = "SELECT * FROM About_Us LIMIT 1";
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
			<li><a href="about.php" class="active">About Us</a></li>
			<li><a href="members.php">Members</a></li>
			<li><a href="music.php">Music</a></li>
			<li><a href="contactus.php">Contact Us</a></li>
		</ul>
		<br /><br />
		<center>
		<table width="80%">
			<tr>
				<td>
					<?php
					echo $text_data;
					?>
					<!-- <p>System of a Down, sometimes shortened to SOAD or System, is a four-piece Armenian-American rock band formed in 1994 in Glendale, California, in the United States. The band currently consists of Serj Tankian (lead vocals, keyboards), Daron Malakian (vocals, guitar), Shavo Odadjian (bass, backing vocals) and John Dolmayan (drums).
						<br />
						<br />
						The band achieved commercial success with the release of five studio albums, three of which debuted at number one on the Billboard 200. System of a Down has been nominated for four Grammy Awards, and their song "B.Y.O.B." won the Best Hard Rock Performance of 2006. The group briefly disbanded in August 2006 and reunited in November 2010, embarking on a tour for the following three years. System of a Down has sold over 40 million records worldwide.
					</p> -->
			</td>
			</tr>
		</table>
		</center>
	</div>
</body>
</html>
