<?php
	//Start session
	session_start();
	
	//Connect to mysql server
	include "connect.php";
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	 $monitoruname = clean($_POST['monitoruname']);
	$monitorpsw = clean($_POST['monitorpsw']);
	// $regno = clean($_POST['regno']);
	// $studentuname = clean($_POST['studentuname']);
	// $studentpsw = clean($_POST['studentpsw']);
	// // $corduname = clean($_POST['corduname']);
	// // $cordpsw = clean($_POST['cordpsw']);
	// // $supervisoruname = clean($_POST['supervisoruname']);
	// // $supervisorpsw = clean($_POST['supervisorpsw']);
	// $student_register = clean($_POST['student_register']);
	// $student_login = clean($_POST['student_login']);
	 $monitor_login = clean($_POST['monitor_login']);
	// // $supervisor_login = clean($_POST['supervisor_login']);
	// // $siwescordinator_login = clean($_POST['siwescordinator_login']);
 //    //$position = clean($_POST['position']);

  //   if (isset($student_register))
  //   {

  //   	$sql = "SELECT * FROM qualifiedstudent WHERE regno ='$regno'";
  //   	$result = $conn->prepare($sql);
  //   	$result->execute();
  //   	// $result = mysql_query("SELECT * FROM qualifiedstudent WHERE regno='$regno'");
  //   	// $result = mysql_fetch_array(result);
  //   	// header("location: registrationform.php");
  //   	$fetch = $result->fetch(PDO::FETCH_OBJ);
  //   	$reg_no = $fetch->regno;

  //   	if  ($regno === $reg_no)
  //   	{

  //   		header("Location: registrationform.php");
  //   	}
  //   	else 
  //   	{
  //   		echo "The Reg no you submitted is not registered";
  //   		header("Location: portal.php");
  //   	}
  //   }

  //   	// if(header("Location: studentportal/registrationform.php")) {
  //   	// echo "Login successful";
  //   	// }

  //   	// $fetch = $result->fetch(PDO::FETCH_OBJ);
  //   	// echo $fetch->regno;
    

  //   if (isset($student_login)) 
  //   {
  //   	$sql = "SELECT * FROM qualifiedstudent WHERE username='$studentuname' AND password = '$studentpsw' ";
  //   	$result = $conn->prepare($sql);
  //   	$result->execute();
  //   	$fetch = $result->fetch(PDO::FETCH_OBJ);


		// if(($fetch->username === $studentuname) && ($fetch->password === $studentpsw))
		// {
		// 	$_SESSION['student_reg_no'] = $fetch->regno;
  //   		$_SESSION['student_name'] = $fetch->name;
  //   		$_SESSION['user_name'] = $fetch->username;

		// 	header("Location: studentportal.php");
		// }
		// else
		// {
		// 	header("Location: portal.php");
		// }
  //   }

  	 if(isset($monitor_login)) 
  	 {
    	$sql = "SELECT * FROM monitors WHERE username='$monitoruname' AND password = '$monitorpsw' ";
   		$result = $conn->prepare($sql);
   		$result->execute();
  		$fetch = $result->fetch(PDO::FETCH_OBJ);


	 	if(($fetch->username === $monitoruname) && ($fetch->password === $monitorpsw))
	 	{
			$_SESSION['monitor_username'] = $fetch->username;
  			$_SESSION['monitor_name'] = $fetch->name;
  			$_SESSION['monitor_location'] = $fetch->location;

	 		header("Location: universitymonitorportal.php");
		}
		else
		{
			header("Location: portal.php");
		}

	}
    

 
	
	// while($row = mysql_fetch_array($result))
		// {
		// $position = $row['position'];
		// }
		// 
		// if (empty($position)) {
		 // echo '<script type="text/javascript">alert("Invalid Username and/or password"); window.location = "index.php";</script>';
		 // return;
       // }
	// if ($position=='admin')
	// {
		// Create query
		// $qry="SELECT * FROM user WHERE Username='$login' AND password='$password'";
		// $result=mysql_query($qry);
		// Check whether the query was successful or not
		// if($result) {
			// if(mysql_num_rows($result) > 0) {
				// Login Successful
				// session_regenerate_id();
				// $member = mysql_fetch_assoc($result);
				// $_SESSION['SESS_MEMBER_ID'] = $member['ID'];
				// $_SESSION['SESS_NAME'] = $member['Username'];
				// session_write_close();
				// if ($level="admin"){
				// header("location: home.php");
				// exit();
			// }else {
				// Login failed
				// header("location: index.php");
				// exit();
			// }
		// }else {
			// die("Query failed");
		// }
	// }
	?>