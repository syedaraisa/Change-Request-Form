<?php
// Start the session
session_start();

if ($_SESSION["user_logged_in"] != 1) {
	header("Location: logIn.php?msg=Please log in!");
}
?>