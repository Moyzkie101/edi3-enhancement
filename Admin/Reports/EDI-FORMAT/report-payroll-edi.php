<?php
    include '../config/connection.php';
    session_start();

    if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] === 'user') {
        header("Location: ../../../../../Auth/login.php");
        session_destroy();
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Open Graph (For better sharing on social media and Google Chat) -->
        <meta property="og:title" content="Your Page Title" />
        <meta property="og:description" content="A short and engaging description of your page." />
        <meta property="og:image" content="https://yourwebsite.com/image.jpg" />
        <meta property="og:url" content="https://yourwebsite.com" />
        <meta property="og:type" content="website" />

        <!-- Twitter Card (Improves sharing on Twitter & some messaging apps) -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Your Page Title" />
        <meta name="twitter:description" content="A short and engaging description of your page content." />
        <meta name="twitter:image" content="https://yourwebsite.com/image.jpg" />
        <!-- Header -->
        <?php include '../models/templates/header.php' ?>
        <!-- End of Header -->
    </head>
    <body>
        
    </body>
</html>