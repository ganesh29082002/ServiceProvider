<?php
session_start();
unset($_SESSION['UID']);
unset($_SESSION['UID']);

header('location:HomePage.php');
die();

?>
