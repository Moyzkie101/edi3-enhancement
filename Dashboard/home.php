<?php
// Start the session
    include '../config/connection.php';
    session_start();
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
    <div class="sidebar">
        <h2>Sidebar</h2>
        <!-- Sidebar -->
        <?php include '../models/templates/sidebar.php' ?>
        <!-- End of Sidebar -->
    </div>
</body>
</html>