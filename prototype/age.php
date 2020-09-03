<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prime Video</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php 
session_set_cookie_params(['samesite' => 'None']);
ini_set('session.cookie_samesite', 'Lax');
session_start();
$_SESSION['enteryourname'] = $_GET['enteryourname'];
// echo $_SESSION['enteryourname'];
?>

    <!-- Screen Orientation Change Alert -->
    <div class="screen_change">
                <img src="images/rotatephonealert.svg" alt="">
                <div id="background_screen"></div>
    </div>
    
    <!-- top bar -->
    <div class="logo">
            <img src="images/prime_logo.svg" class="logoimg">
            <h4>Age</h4>
    </div>
    <!-- jquery to select one button  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <div id="add_name">
        <h5>What is your age range?</h5> <br>

        <div class="agerange">

            <button type="button" class="agebtn">
                <p><span class="bulletdots"></span>-12</p>
            </button>

            <button type="button" class="agebtn">
                <p><span class="bulletdots"></span>12-17</p>
            </button>

            <button type="button" class="agebtn">
                <p><span class="bulletdots"></span>18-40</p>
            </button>

            <button type="button" class="agebtn">
                <p><span class="bulletdots"></span>40-65</p>
            </button>

            <button type="button" class="agebtn">
                <p><span class="bulletdots"></span>65+</p>
            </button>

        </div>
      
    </div>

    <!-- script to one button at a time -->
    <script>
        $('button').on('click', function(){
        $('button').removeClass('active');
        $(this).addClass('active');
    });
        $('span').on('click', function(){
        $('span').removeClass('active');
        $(this).addClass('active');
    });
    </script>


    <!-- bottom navigation -->
    <div class="skipanddone">
        <div class="skip">
            <a href="addname.php"><h3>BACK</h3></a>
        </div>
        <div class="done">
            <a href="welcome.php"><h3>NEXT</h3></a>
        </div>
    </div>

</body>
</html>