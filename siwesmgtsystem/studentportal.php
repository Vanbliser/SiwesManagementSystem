<?php
session_start();
include ('connect.php');
?>


<!DOCTYPE html>
	<html lang="en-us">

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
					<li><a href="../faqs.html">FAQs</a></li>
					<li><a href="../contacts.html">Contacts</a></li>
					<li class="dropdown">
							<a href="#"class="dropbtn">Log book</a>
								<div class="dropdown-content">
									<a href="logbook.html">Log book</a>
								</div>
					</li>
					<li><a href="../logout.php">Log out</a></li>
				</ul>
			</nav>


			<div id="std_information">
				<h1>Student Information</h1>

				<div><span>Student Name: </span><span><?php echo $_SESSION["student_name"]; ?></span></div>
				<div><span>Registration Number: </span><span><?php echo $_SESSION["student_reg_no"]; ?></span></div>
			</div>
		</body>
	<html>