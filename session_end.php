<?php
session_start();
session_unset();
session_destroy();

header("Location: logIn.php?msg=Logged Out!");
?>