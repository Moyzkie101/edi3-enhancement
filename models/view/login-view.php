<?php
    include 'config/connection.php';

    if(isset($_POST["submit"])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = md5($_POST['password']);

        $query = mysqli_query($conn,'SELECT * FROM edi.user WHERE email = "'.$username.'" AND password = "'.$password.'"');
    }


?>