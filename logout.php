<?php 
  session_start(); 
    
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: indexlogin.php");
  }

  $name = $_SESSION['username'];
  
?>
