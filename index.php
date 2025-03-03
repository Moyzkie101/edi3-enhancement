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
        <?php include 'models/index/header.php'?>
        <!-- End of Header -->

        <title>E D I</title>
    </head>
    <body>
        <div>
            <!-- Sidebar -->
            <?php //include 'Indexes-templates/sidebar.php'?>
            <!-- End of Sidebar -->
        </div>
        <div>
            <!-- Main Header -->
            <?php //include 'Indexes-templates/main-header.php'?>
            <!-- End of Main Header -->
            <!-- Main Content -->
            <div class="welcome-container">
                <div class="welcome-message">
                    <h1>Electronic Data Interchange </br><span>System</span></h1>
                    <p>We are glad to have you here.</p>
                <button id="exploreButton">Explore</button>
                </div>
            </div>
            <!-- End of Main Content -->
            <!-- Main Footer -->
            <?php //include 'Indexes-templates/main-footer.php'?>
            <!-- End of Main Footer -->
        </div>
        <!-- Footer -->
        <?php include 'models/index/footer.php'?>
        <!-- End of Footer -->
    </body>
</html>