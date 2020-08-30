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
        <h5>What else do you watch?</h5>
    </div>

    <!-- buttons -->
    <div class="flexgenrebtn">
        <div class="alignitems">
            <button type="button" class="genrebtn">
                <img src="images/subgenre/icon_detective_light.svg" id="subgenreicon">
                <img src="images/subgenre/icon_detective.svg" id="subiconshow">
            </button>
            <p>Detective</p>
        </div>
        <div class="alignitems">
            <button type="button" class="genrebtn">
                <img src="images/subgenre/icon_adventure_light.svg" id="subgenreicon">
            </button>
            <p>Adventure</p>
        </div>
        <div class="alignitems">
            <button type="button" class="genrebtn">
                <img src="images/subgenre/icon_crime_light.svg" id="subgenreicon">
            </button>
            <p>Crime</p>
        </div>     
    </div>

    <div class="flexgenrebtn">
        <div class="alignitems">
            <button type="button" class="genrebtn">
                <img src="images/subgenre/icon_military_light.svg" id="subgenreicon">
            </button>
            <p>Military</p>
        </div>
        <div class="alignitems">
            <button type="button" class="genrebtn">
                <img src="images/subgenre/icon_romcom_light.svg" id="subgenreicon">
            </button>
            <p>Rom Com</p>
        </div>
        <div class="alignitems">
            <button type="button" class="genrebtn">
                <img src="images/subgenre/icon_kdrama_light.svg" id="subgenreicon">
            </button>
            <p>K-Drama</p>
        </div>
    </div>

    <div class="flexgenrebtn">
        <div class="alignitems">
            <button type="button" class="genrebtn">
                <img src="images/subgenre/icon_musical_light.svg" id="subgenreicon">
            </button>
            <p>Musical</p>
        </div>
        <div class="alignitems">
            <button type="button" class="genrebtn">
                <img src="images/subgenre/icon_supernatural_light.svg" id="subgenreicon">
            </button>
            <p>Supernatural</p>
        </div>
        <div class="alignitems">
            <button type="button" class="genrebtn">
                <img src="images/subgenre/icon_fantasy_light.svg" id="subgenreicon">
            </button>
            <p>Fantasy</p>
        </div>
    </div>

    <div class="flexgenrebtn">
        <div class="alignitems">
            <button type="button" class="genrebtn">
                <img src="images/subgenre/icon_melodrama_light.svg" id="subgenreicon">
            </button>
            <p>Melo-drama</p>
        </div>
        <div class="alignitems">
            <button type="button" class="genrebtn">
                <img src="images/subgenre/icon_medical_light.svg" id="subgenreicon">
            </button>
            <p>Medical</p>
        </div>
        <div class="alignitems">
            <button type="button" class="genrebtn">
                <img src="images/subgenre/icon_gore_light.svg" id="subgenreicon">
            </button>
            <p>Gore</p>
        </div>
    </div>

    <div class="flexgenrebtn">
        <div class="alignitems">
            <button type="button" class="genrebtn">
                <img src="images/subgenre/icon_LGBTQ_light.svg" id="subgenreicon">
            </button>
            <p>LGBTQA+</p>
        </div>
        <div class="alignitems">
            <button type="button" class="genrebtn">
                <img src="images/subgenre/icon_dance_light.svg" id="subgenreicon">
            </button>
            <p>Dance</p>
        </div>
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
        $("#subiconshow").click(function () {
      clicked = true;
      if (clicked) {
        $(this).toggleClass('active');
        clicked = true;
      } else {
        $(this).removeClass('active');
        clicked = false;
      }
    });
        $("#subgenreicon").click(function () {
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
