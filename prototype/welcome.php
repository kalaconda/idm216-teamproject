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
<!-- top bar -->
<div class="logo">
            <img src="images/prime_logo.svg" class="logoimg">
            <h4>Welcome</h4>
    </div>
    <div class="center_setup">
        <div class="welcome">
            <p id="yourname">Hi "Your Name"!</p>
            <div class="setup_img">
                <img src="images/icons/handwave.svg" id="handwave">
            </div>
            <div>
            <p id="welcometxt">Tell us what you're into so we can create a personalized
            homepage <span id="jfy">Just For You!</span></p>
            </div>
            <div class="start">
            <button>
                <h1><a href="genrerank.php">Start</a></h1>
            </button>
            </div>
            <div class="maybelater">
                <p><a href="setup.php">Maybe Later</a></p>
            </div>
        </div>
    </div>
</body>
</html>