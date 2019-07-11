<?php
session_start();
require 'connect.php';

$location = $_SESSION["monitor_location"];

$std_sql = "SELECT * FROM registeredstudent WHERE location='$location'";
$result = $conn->prepare($std_sql);
$result->execute();
$fetch = $result->fetchAll(PDO::FETCH_OBJ);
$html = '';
?>

<!DOCTYPE html>
	<html lang="en-us">

		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title> Monitor Portal </title>
			<link rel="stylesheet" href="asset/portalstyle.css">
		</head>

		<body>
			<nav>
				<ul>
					<li><a href="../../faqs.html">FAQs</a></li>
					<li><a href="../../about.html">Contacts</a></li>
					<li><a href="logout.php">Log out</a></li>
				</ul>
			</nav>

			<div id="std_information" >
				<h1 class="prosper">Monitor Information</h1>

				<div><span>Monitor Name: </span><span><?php echo $_SESSION["monitor_name"]; ?></span></div>
				<div><span>Monitor location: </span><span><?php echo $_SESSION["monitor_location"]; ?></span></div>
			</div>

			<div id="style">
				<h1 class="prosper-h1">Students Registered under Me</h1>

				<ul id="stylelist">
					<?php
						foreach ($fetch as $key) {
							$html .= "<li>" 
							. $key->firstname . 

							"</li>";
							// echprint_r($key->firstname);
						}

						echo $html;
					?>
				</ul>
			</div>
		</body>
		
	<html>
	