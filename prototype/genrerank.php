<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prime Video</title>
    <link rel="stylesheet" href="styles.css">
    <!-- link jquery -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <!-- font awesome -->
    <script src="https://use.fontawesome.com/20cbea2300.js"></script>
    <!-- script for genre rank -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
        $( "#sortable" ).sortable();
        $( "#sortable" ).disableSelection();
    } );
    </script>
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
    <div class="progress-wrap progress" data-progress-percent="35">
        <div class="progress-bar progress"></div>
    </div>

    <div id="culture-ques">
        <h5>
            Rank your favorite genres.
        </h5>
    </div>
<!-- genre rank -->
    <div class="center">
        <div class="rankings">
            <div class="numbers">
                <h2 class="num">1</h2>
                <h2 class="num">2</h2>
                <h2 class="num">3</h2>
                <h2 class="num">4</h2>
                <h2 class="num">5</h2>
                <h2 class="num">6</h2>
                <h2 class="num">7</h2>
                <h2 class="num">8</h2>
            </div>
            <ul id="sortable">
                <li>Romance<i class="fa fa-bars" aria-hidden="true"></i></li>
                <li>Horror<i class="fa fa-bars" aria-hidden="true"></i></li>
                <li>Action<i class="fa fa-bars" aria-hidden="true"></i></li>
                <li>Comedy<i class="fa fa-bars" aria-hidden="true"></i></li>
                <li>Fantasy<i class="fa fa-bars" aria-hidden="true"></i></li>
                <li>Sci-Fi<i class="fa fa-bars" aria-hidden="true"></i></li>
                <li>Documentary<i class="fa fa-bars" aria-hidden="true"></i></li>
                <li>Anime<i class="fa fa-bars" aria-hidden="true"></i></li>
            </ul>
        </div>
    </div>

    <!-- bottom navigation -->
    <div class="skipanddone">
        <div class="skip">
            <a href="welcome.php"><h3>BACK</h3></a>
        </div>
        <div class="done">
            <a href="subgenre.php"><h3>NEXT</h3></a>
        </div>
    </div>

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
</body>
</html>