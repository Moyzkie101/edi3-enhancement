<?php
    // Start the session
    session_start();
    include '../config/connection.php';

    $allowed_types = ['admin', 'user', 'system'];

    // Check if user_type is set and allowed
    if (!isset($_SESSION['user_type']) || !in_array($_SESSION['user_type'], $allowed_types)) {
        // Redirect guests or unauthorized users to login page
        header('Location: ../Auth/login.php');
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
        <p>Hello, <?php echo $_SESSION['user_type']; ?></p>
        <div class="sidebar">
            <h2>Sidebar</h2>
            <!-- Sidebar -->
            <?php include '../models/templates/sidebar.php' ?>
            <!-- End of Sidebar -->
        </div>
    </body>
</html>