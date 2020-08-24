<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prime Video</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>"> <!-- force css to work -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- input script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
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
        <form>
            <span class="notvalid"><input type="text" placeholder="Enter your name..." 
            name="enteryourname" pattern="^[a-zA-Z]{1,20}$" title="Must Include Characters Only" required>
            &nbsp;</span>
        </form>
    </div>

    <!-- bottom navigation -->
    <div class="skipanddone">
        <div class="skip">
            <a href="index.php"><h3>BACK</h3> </a>
        </div>
        <div class="done">
            <a href="genrerank.php"><h3>NEXT</h3></a>
        </div>

    <div class="next">
            <a href="age.php"><h3>NEXT</h3></a>
    </div>

    <!-- input script -->
    <script>
    $('[name=enteryourname]').keyup(function(){

        if($('form').valid()){
            $(this).parent().removeClass().addClass('isvalid'
    );
        }else{
                $(this).parent().removeClass().addClass('notvalid');
            
        }

    })
    </script>

</body>
</html>
