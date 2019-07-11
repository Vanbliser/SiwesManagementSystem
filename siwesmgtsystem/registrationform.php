
<!DOCTYPE html>
	<html lang="en-us">

		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title> Registration Form </title>
			<link rel="stylesheet" href="asset/formstyle.css">
		</head>

		<body>
		<h2> REGISTRATION FORM </h2>
		<form action="formscript.php" method="post">
			<fieldset>
				<legend> <b>SECTION I (STUDENT PROFILE)</b> </legend>
				<p>
					<p><label>NAME OF STUDENT</label></p>
						<label>First Name: <input type="text" name="firstname" style="width:300px;" required></label>
						<label>Second Name: <input type="text" name="secondname"style="width:300px;" required></label>
						<label>Last Name:  <input type="text" name="lastname" style="width:300px;"required></label>
				</p>
				<p><label>REG NO: <input type="text"name="regno" required></label></p>
				<p><label>DEPARTMENT: <input type="text"name="dept"required></label></p>
				<p><label>MOBILE NO: <input type="tel" name="phone"></label></p>
				<p><label>YEAR OF STUDY: <select required>
					<option value="2016/2017">2016/2017</option>
					<option value="2017/2018">2017/2018</option>
					<option value="2018/2019">2018/2019</option>
				</select></label></p>
				<p><label>SCHOOL: <input type="text" name="school"required></label></p>
			</fieldset>
			<fieldset>
				<legend><b> SECTION II (INDUSRTY PROFILE)</b></legend>
				<p><label>LOCATION: <select name="location" required>
					<option value="Lagos">LAGOS</option>
					<option value="Portharcourt">PORTHARCOURT</option>
					<option value="Abuja">ABUJA</option>
				</select></label></p>
				<p><label>NAME OF INDUSTRY: <input type="text" name="company"></label></p>
				<p><p><label>ADDRESS:</label></p><textarea name="address"style="width:700px;"></textarea></p>
				<p><label>NAME OF REPORTING OFFICER: <input type="text"name="supervisorname"></label></p>
				<p><label>DESIGNATION OF REPORTING OFFICER: <input type="text" name="supevisordesignation"></label></p>
			</fieldset>
			<button name="submit"><b>SUBMIT FORM</b></button>
		</form>
		
		