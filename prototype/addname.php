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
    <div class="logo">
            <img src="images/prime_logo.svg" class="logoimg">
            <h4>Profile Name</h4>
    </div>
    <div id="add_name">
        <h5>What is your name?</h5> <br>
        <input type="text" placeholder="Enter your name" id="name_input">
    </div>

    <!-- bottom navigation -->
    <div class="next">
            <a href="age.php"><h3>NEXT</h3></a>
    </div>

</body>
</html>