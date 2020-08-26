<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Video</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
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
    <div class="progress-wrap progress" data-progress-percent="100">
        <div class="progress-bar progress"></div>
    </div>

    <div id="culture-ques">
        <h5>
            Do you have any cultural preferences?
        </h5>
    </div>

    <!-- Images for each button item are inserted using the CSS background-image url -->
    <!-- jquery for multiple buttons selected -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <div class="culture-grid">
     
        <div class="single-grid">
            <button class="culture-but"id="spanish">
                <h4>Spanish</h4>
            </button>
        </div>
     
        <div class="single-grid">
            <button class="culture-but"id="asian">
                <h4>Asian</h4>
            </button>
        </div>
        
        <div class="single-grid">
            <button class="culture-but"id="korean">
                <h4>Korean</h4>
            </button>
        </div>
        
        <div class="single-grid">
            <button class="culture-but"id="bolly">
                <h4>Bollywood</h4>
            </button>
        </div>
        
        <div class="single-grid">
            <button class="culture-but"id="african">
                <h4>African</h4>
            </button>
        </div>
        
        <div class="single-grid">
            <button class="culture-but"id="french">
                <h4>French</h4>
            </button>
        </div>
        
        <div class="single-grid">
            <button class="culture-but"id="italian">
                <h4>Italian</h4>
            </button>
        </div>
        
        <div class="single-grid">
            <button class="culture-but"id="japanese">
                <h4>Japanese</h4>
            </button>
        </div>    
    </div>

    <!-- script to select multiple buttons -->
    <script>
        $(".culture-but").click(function () {
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
            <a href="subgenre.php">
                <h3>BACK</h3>
            </a>
        </div>
        <div class="done">
            <a href="setup.php">
                <h3>NEXT</h3>
            </a>
        </div>
    </div>

</body>

</html>