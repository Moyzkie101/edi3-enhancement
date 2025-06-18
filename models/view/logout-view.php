<?php
    session_start();
	include '../../config/connection.php';
    unset($_SESSION['email']);
    unset($_SESSION['user_type']);	
    
    session_destroy();


    header('location: ../../Auth/login.php');
    exit();
?>