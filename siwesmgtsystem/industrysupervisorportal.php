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
<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title> Student Portal </title>
			<link rel="stylesheet" href="asset/portalstyle.css">
		</head>

		<body>
			<nav>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="portal.php">Portal</a></li>
					<li><a href="logout.php">Log out</a></li>
				</ul>
			</nav>
				
			<div id="std_information">
				<h1>supervisor Information</h1>

				<div><span>supervisor Name: </span><span><?php echo $_SESSION["monitor_name"]; ?></span></div>
			</div>

			<div id="style">
				<strong><h1>Students working under Me</h1></strong>

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
			
		<body>
			