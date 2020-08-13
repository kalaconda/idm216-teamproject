<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prime Video</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>"> <!-- force css to work -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>

    <!-- Screen Orientation Change Alert -->
    <div class="screen_change">
                <img src="images/rotatephonealert.svg" alt="">
                <div id="background_screen"></div>
    </div>
    
    <div class="logo">
            <img src="images/prime_logo.svg" class="logoimg">
            <h4>Profile Name</h4>
    </div>
    <div id="add_name">
        <h5>What is your name?</h5> <br>
        <input type="text" placeholder="Enter your name" id="name_input">
    </div>

    <!-- bottom navigation -->
<<<<<<< HEAD:prototype/addname.php
    <div class="skipanddone">
        <div class="skip">
            <a href="index.php"><h3>BACK</h3> </a>
        </div>
        <div class="done">
            <a href="genrerank.php"><h3>NEXT</h3></a>
        </div>
=======
    <div class="next">
            <a href="age.php"><h3>NEXT</h3></a>
>>>>>>> 1d8cd92714186d22d2088caf4c00b93244f6ab92:prototype/addname.html
    </div>

</body>
</html>