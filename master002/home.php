<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}

// echo "<h1>Welcome ".$_SESSION['name']."</h1>" ;
// echo "<h3>".$_SESSION['mail']."</h3>";
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_SESSION['name'])) {
	// Could not get the data that should have been sent.
	die ('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_SESSION['name']) ) {
	// One or more values are empty.
	die ('Please complete the registration form');
}

include_once 'header.php';
include_once 'nav.php';
include_once 'chat_content.php';
include_once 'footer.php'

?>
