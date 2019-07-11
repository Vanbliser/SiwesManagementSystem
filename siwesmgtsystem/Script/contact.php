<?php
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();

//Action of the CONTACT form is been carried out here
//Declearing a variable and assigning the form field_name to it
//And the isset($_POST['']) alerts the php of the field entering

    if (isset ($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text']))
    {
        $contact_name = $_POST['contact_name'];
       $contact_email = $_POST['contact_email'];
       $contact_text = $_POST['contact_text'];
       
    }
    
  if (!empty($contact_name) && !empty('$contact_email') && !empty('$contact_text')) {
      $to = 'chimaprosperukoma@gmail.com';
      $subject = 'contact form submitted';
      $message = '$contact_name. "\n" .$contact_text';
      $headers = '$contact_email';
      // if (strlen('contact_name')>10) {
      //     echo 'max text is 10';
      // }
  
      if (@mail($to, $subject, $message, $headers)) {
           'Thanks for contacting us.';
      } else{
           'Sorry an error occured';
      }
  } else {
           'All fields required';
  
  }
  //Connection to the database
  $db = new mysqli('localhost', 'root', '','databoard');
      
     
   $db->query("INSERT INTO `users` ( `contact_name`, `contact_email`, `contact_message`) 
   VALUES ('$contact_name', '$contact_email', '$contact_text')");
  ?>
