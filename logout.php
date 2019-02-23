<?php 
session_start();

session_destroy();
session_unset();

header("Location:pages/sign_in.php");


?>
 