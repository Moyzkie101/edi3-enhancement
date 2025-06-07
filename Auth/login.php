<?

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
    <?php include '../models/login/header.php' ?>
    <!-- End of Header -->

    <title>E D I</title>
</head>

<body>
    <div>
        <!-- Main Header -->
        <?php include '../models/templates/main-header.php' ?>
        <!-- End of Main Header -->
        <!-- Main Content -->
        <div class="form-container">
            <form action="models/view/login-view.php" method="post" id="">
                <div class="logo">
                    <img src="../assets/images/Diamante.png" alt="logo">
                </div>
                <h3>login</h3>
                <input type="text" name="username" placeholder="Enter your username" autocomplete="off" required>
                <input type="password" name="password" placeholder="Enter your password" autocomplete="off" required>
                <input type="submit" name="submit" value="login now" class="form-btn">

                <p onclick="window.location.href='../index.php'" style="cursor: pointer;"><span style="color: red;">◀</span> Back to Homepage</p>
            </form>
        </div>
        <!-- End of Main Content -->
        <!-- Main Footer -->
        <?php include '../models/templates/main-footer.php' ?> <!-- file code is empty, needs to be filled -->
        <!-- End of Main Footer -->
    </div>
    <!-- Footer -->
    <?php include '../models/templates/footer.php' ?> <!-- file code is empty, needs to be filled -->
    <!-- End of Footer -->
</body>

</html>