<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prime Video</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>"> <!-- force css to work -->
</head>
<body>

<?php 
session_start();
$_SESSION['enteryourname'] 
?>

    <!-- Screen Orientation Change Alert -->
    <div class="screen_change">
                <img src="images/rotatephonealert.svg" alt="">
                <div id="background_screen"></div>
    </div>
<!-- top bar -->
<div class="logo">
            <img src="images/prime_logo.svg" class="logoimg">
            <h4>Personalization</h4>
    </div>
    <div class="center_setup">
        <div class="welcome">
            <p id="yourname">Hi <?php echo $_SESSION['enteryourname'] ?>!</p>

            <div class="setup_img">
                <div id="lottie"></div>
            </div>

            <div>
            <p id="welcometxt">Tell us what you're into so we can create a personalized
            homepage <span id="jfy">Just For You!</span></p>
            </div>
            <div class="start">
                <a href="genrerank.php">
                    <button>
                        <h1>Start</h1>
                    </button>
                </a>
            </div>
            <div class="maybelater">
                <p><a href="home.php">Maybe Later</a></p>
            </div>
        </div>
    </div>

<!-- Javascript for Handwave Animation -->
<script src="lottie.js" type="text/javascript"></script>
<script src="handwave.js"></script>
</body>
</html>