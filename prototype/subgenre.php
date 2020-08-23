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

    <!-- Progress bar -->
    <div class="progress-wrap progress" data-progress-percent="65">
        <div class="progress-bar progress"></div>
    </div>

<!-- jquery for multiple buttons selected -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
    <!-- desc text -->
    <div id="orangedesc">
        <h5> Let's dive deeper. </h5>
        <h5> Choose <b>3</b> topics you're into!</h5>
    </div>

    <!-- buttons -->
    <div class="flexgenrebtn">
        <button type="button" class="genrebtn" id="alignitems">
            <img src="images/subgenre/icon_detective.svg" id="subgenreicon">
            <p>Detective</p>
        </button>
        <button type="button" class="genrebtn" id="alignitems">
            <img src="images/subgenre/icon_adventure.svg" id="subgenreicon">
            <p>Adventure</p>
        </button>
        <button type="button" class="genrebtn" id="alignitems">
            <img src="images/subgenre/icon_crime.svg" id="subgenreicon">
            <p>Crime</p>
        </button>
    </div>
    <div class="flexgenrebtn">
        <button type="button" class="genrebtn" id="alignitems">
            <img src="images/subgenre/icon_military.svg" id="subgenreicon">
            <p>Military</p>
        </button>
        <button type="button" class="genrebtn" id="alignitems">
            <img src="images/subgenre/icon_romcom.svg" id="subgenreicon">
            <p>Rom Com</p>
        </button>
        <button type="button" class="genrebtn" id="alignitems">
            <img src="images/subgenre/icon_kdrama.svg" id="subgenreicon">
            <p>K-Drama</p>
        </button>
    </div>
    <div class="flexgenrebtn">
        <button type="button" class="genrebtn" id="alignitems">
            <img src="images/subgenre/icon_musical.svg" id="subgenreicon">
            <p>Musical</p>
        </button>
        <button type="button" class="genrebtn" id="alignitems">
            <img src="images/subgenre/icon_supernatural.svg" id="subgenreicon">
            <p>Supernatural</p>
        </button>
        <button type="button" class="genrebtn" id="alignitems">
            <img src="images/subgenre/icon_fantasy.svg" id="subgenreicon">
            <p>Fantasy</p>
        </button>
    </div>
    <div class="flexgenrebtn">
        <button type="button" class="genrebtn" id="alignitems">
            <img src="images/subgenre/icon_melodrama.svg" id="subgenreicon">
            <p>Melo-drama</p>
        </button>
        <button type="button" class="genrebtn" id="alignitems">
            <img src="images/subgenre/icon_medical.svg" id="subgenreicon">
            <p>Medical</p>
        </button>
        <button type="button" class="genrebtn" id="alignitems">
            <img src="images/subgenre/icon_gore.svg" id="subgenreicon">
            <p>Gore</p>
        </button>
    </div>

    <!-- script to select multiple buttons -->
    <script>
        $("button").click(function () {
      clicked = true;
      if (clicked) {
        $(this).toggleClass('active');
        clicked = true;
      } else {
        $(this).removeClass('active');
        clicked = false;
      }
    });
    </script>

    <script>
    // on page load...
    moveProgressBar();
    // on browser resize...
    $(window).resize(function() {
        moveProgressBar();
    });

    // PROGRESS SCRIPT
    function moveProgressBar() {
      console.log("moveProgressBar");
        var getPercent = ($('.progress-wrap').data('progress-percent') / 100);
        var getProgressWrapWidth = $('.progress-wrap').width();
        var progressTotal = getPercent * getProgressWrapWidth;
        // how long the animation is
        var animationLength = 1300;
        
        // on page load, animate percentage bar to data percentage length
        // .stop() used to prevent animation queueing
        $('.progress-bar').stop().animate({
            left: progressTotal
        }, animationLength);
    }
    </script>

<!-- bottom navigation -->
<div class="skipanddone">
        <div class="skip">
            <a href="genrerank.php"><h3>BACK</h3></a>
        </div>
        <div class="done">
            <a href="culture.php"><h3>NEXT</h3></a>
        </div>
    </div>

</body>
</html>