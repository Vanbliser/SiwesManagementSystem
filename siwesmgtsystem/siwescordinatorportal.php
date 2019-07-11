<?php
session_start();
include 'connect.php';

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
			<title> Siwes Cordinator Portal </title>
			<link rel="stylesheet" href="asset/portalstyle.css">
		</head>

		<body>
			<nav>
				<ul>
					<li><a href="../../faqs.html">FAQs</a></li>
					<li><a href="../../about.html">Contacts</a></li>
					<li><a href="../logout.php">Log out</a></li>	
				</ul>
			</nav>


			<div id="std_information">
				<h1>Cordinator Information</h1>

				<div><span>Siwes cordinator Name: </span><span><?php echo $_SESSION["siwescordinator_name"]; ?></span></div>
			</div>

			<div id="style">
				<strong><h1> Registered Student</h1></strong>

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
	