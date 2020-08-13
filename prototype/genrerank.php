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
    <!-- script for genre rank -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
        $( "#sortable" ).sortable();
        $( "#sortable" ).disableSelection();
    } );
    </script>
    <script src="https://use.fontawesome.com/cce24d2a9e.js"></script>
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
            <a href="subgenre.php"><h3>SKIP</h3></a>
        </div>
        <div class="done">
            <a href="subgenre.php"><h3>NEXT</h3></a>
        </div>
    </div>

</body>
</html>