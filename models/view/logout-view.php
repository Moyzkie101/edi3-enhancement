<?php
	include '../../config/connection.php';
    
    unset($_SESSION['email']);
    unset($_SESSION['user_type']);	
    
    $_SESSION['success'] = 'danger';
    session_destroy();


    header('location: ../../Auth/login.php');
    exit();
?>