<?php


include ('connect.php');

?>
<!DOCTYPE html>
	<html lang="en-us">

		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title> portal </title>
			<link rel="stylesheet" href="asset/portalstyle.css">
			<script>
				// Get the modal 
				var modal = document.getElementById('id01');
				// When the user clicks anywhereoutside of the modal, close it 
				window.onclick = function(event)
				{
					if (event.target == modal) 
					{
					 modal.style.display = "none";
					}
				}
			</script>
		</head>

		<body>
			<header>
				<nav>
					<ul>
						
						<li class="dropdown">
							<a href="#"class="dropbtn">University Monitor</a>
								<div class="dropdown-content">
								<button onclick="document.getElementById('id01').style.display='block'">Login</button>	
								</div>
						</li>
								
						<li class="dropdown">
							<a href="#"class="dropbtn">Student</a>
								<div class="dropdown-content">
									<button onclick="document.getElementById('id02').style.display='block'">Register</button>	
									<button onclick="document.getElementById('id03').style.display='block'">Login</button>
								</div>
						</li>
						
						<li class="dropdown">
							<a href="#"class="dropbtn">Siwes Cordinator</a>
								<div class="dropdown-content">
									<button onclick="document.getElementById('id04').style.display='block'">Login</button>
								</div>
						</li>
						
						<li class="dropdown">
							<a href="#"class="dropbtn">Industry Supervisor</a>
								<div class="dropdown-content">
									<button onclick="document.getElementById('id05').style.display='block'">Login</button>
								</div>
						</li>
					</ul>
				</nav>
			</header>
			
			<section>
			<div id="id01" class="modal"><!--universitylogin-->
				<form class="modal-content animate"action="logins.php"method="POST">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id01').style.display='none'"class="close" title="Close">&times;</span>
					</div>
					<div class="container">
						<label><b>Username</b></label>
						<input type="text" placeholder= "Enter Username" name="monitoruname" required>
						<label><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="monitorpsw" required>
						<button type="submit" name="monitor_login">Login</button>
						<input type="checkbox"checked="checked">Remember me
					</div>
					<div class="container" style="background-color:#f1f1f1"> 
						<button type="button" onclick="document.getElementById ('id01').style.display='none'" class="cancelbtn"> Cancel</button>
					</div>
				</form>
			</div>

			<div id="id02" class="modal"><!--studentregister -->
				<form class="modal-content animate">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id02').style.display='none'"class="close" title="Close">&times;</span>
					</div>
					<div class="container">
						<label><b>Registration number</b></label>
						<input type="text" placeholder= "Enter Reg No" name="regno" required>
						<a href="registrationform.php"><button>Login</button><a>
						<input type="checkbox"checked="checked">Remember me
					</div>

					<div class="container" style="background-color:#f1f1f1"> 
						<button type="button" onclick="document.getElementById ('id02').style.display='none'" class="cancelbtn"> Cancel</button>
					</div>
				</form>
			</div>

			<div id="id03" class="modal"><!--studentlogin -->
				<form class="modal-content animate">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id03').style.display='none'"class="close" title="Close">&times;</span>
					</div>
					<div class="container">
						<label><b>Username</b></label>
						<input type="text" placeholder= "Enter Username" name="studentuname" required>
						<label><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="studentpsw" required>
						<button type="submit" name="student_login">Login</button>
						<input type="checkbox"checked="checked">Remember me
					</div>
					<div class="container" style="background-color:#f1f1f1"> 
						<button  type="button" onclick="document.getElementById ('id03').style.display='none'" class="cancelbtn"> Cancel</button>
					</div>
				</form>
			</div>
			<div id="id04" class="modal"><!--siwescordlogin -->
				<form class="modal-content animate">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id04').style.display='none'"class="close" title="Close">&times;</span>
					</div>
					<div class="container">
						<label><b>Username</b></label>
						<input type="text" placeholder= "Enter Username" name="corduname" required>
						<label><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="cordpsw" required>
					<a href="siwescordinatorportal.php"	<button type="submit" name="siwescordinator_login">Login</button></a>
						<input type="checkbox"checked="checked">Remember me
					</div>
					<div class="container" style="background-color:#f1f1f1"> 
						<button type="button" onclick="document.getElementById ('id04').style.display='none'" class="cancelbtn"> Cancel</button>
					</div>
				</form>
			</div>
			<div id="id05" class="modal"><!--supervisorlogin -->
				<form class="modal-content animate">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id05').style.display='none'"class="close" title="Close">&times;</span>
					</div>
					<div class="container">
						<label><b>Username</b></label>
						<input type="text" placeholder= "Enter Username" name="supervisoruname" required>
						<label><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="supervisorpsw" required>
						<a href="industrysupervisorlogin.php"<button type="submit"name="supervisor_login">Login</button>
						<input type="checkbox"checked="checked">Remember me
					</div>
					<div class="container" style="background-color:#f1f1f1"> 
						<button type="button" onclick="document.getElementById ('id05').style.display='none'" class="cancelbtn"> Cancel</button>
					</div>
				</form>
			</div>
			</section>
		
		</body>
	</html>