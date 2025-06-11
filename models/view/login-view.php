<?php
    include '../../config/connection.php';

    if(isset($_POST["submit"])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = md5($_POST['password']);

        $query = 'SELECT * FROM edi.user WHERE email = "'.$username.'" AND password = "'.$password.'"';

        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['admin_name'] = ucwords($row['first_name'].' '.$row['middle_name'].' '.$row['last_name']);
            $_SESSION['username'] = $row['email'];
            $_SESSION['user_type'] = $row['user_type'];
            $_SESSION['user_roles'] = $row['roles'];
            header('Location: ../../Dashboard/home.php');
            // Optionally, you can set other session variables here
            exit();
        } else {
            echo "Invalid username or password.";
        }
    }
?>