<!DOCTYPE html>
	<html lang="en-us">

		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title> Log Book </title>
			<link rel="stylesheet" href="asset/formstyle.css">
		</head>

		<body>
		<h2> LOG BOOK </h2>
		<form action=""method="post">
			<fieldset>
				<legend><b>STUDENT'S DAILY RECORD OF ACTIVITIES</b></legend>
				<ul>
					<li><p><label>DATE: <input type="date" name="date"required></p></li>
					<li><P><label>SELECT WEEK</label>
						<select name="week"required>
								<option value="week1" selected>WEEK 1</option>
								<option value="week2">WEEK 2</option>
								<option value="week3">WEEK 3</option>
								<option value="week4">WEEK 4</option>
								<option value="week5">WEEK 5</option>
						</select>  
						
						<label>SELECT MONTH</label>
						<select name="month"required>
								<option value="month1" selected>MONTH 1</option>
								<option value="month2">MONTH 2</option>
								<option value="month3">MONTH 3</option>
								<option value="month4">MONTH 4</option>
								<option value="month5">MONTH 5</option>
						</select>  
						</P>
					</li>
					<li><P><label>DESCRIPTION OF DAILY ACTIVITIES</label> 
						<ol>
							<li><label>MONDAY: <input type="text" name="monday" required><label></li>
							<li><label>TUESDAY: <input type="text" name="tuesday" required><label></li>
							<li><label>WEDNESDAY: <input type="text" name="wednesday" required><label></li>
							<li><label>THURSDAY: <input type="text" name="thursday" required><label></li>
							<li><label>FRIDAY: <input type="text" name="mfriday" required><label></li>
							<li><label>SATURDAY(PROJECT OF THE WEEK, IF ANY): <input type="text" name="saturday"><label></li>
						</ol>
					</li>
					<li><p><label>SECTION IN WHICH THE STUDENT IS BASED <input type="text" name="sectionbased"required></label>
						 
					</li>
			</fieldset>	
			<button name="submit"><b>SUBMIT LOG BOOK</b></button>
		</form>