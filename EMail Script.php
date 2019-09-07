<?php
if (!isset($POST['submit'])) {
	echo "Error; go to the enroll now page and submit the form"
}

//Import data from form
$school_email = $_POST['email'];
$name = $_POST['studentName'];
$other = $_POST['other'];

//Validate data fields
if (empty($school_email)||empty($name)||empty($other)) {
	echo "Please fill all data fields";
	exit;
}

//Set static variables
$email_from = ''
$subject = ''

mail($school_email, $subject, $message);