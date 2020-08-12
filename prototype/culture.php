<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Video</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
</head>

<body>

    <!-- top bar -->
    <div class="logo">
        <img src="images/prime_logo.svg" class="logoimg">
        <h4>Personalization</h4>
    </div>

    <div id="culture-ques">
        <h5>
            Do you have any cultural preferences?
        </h5>
    </div>

    <!-- Images for each button item are inserted using the CSS background-image url -->

    <div class="culture-grid">

        <div class="single-grid">
            <button class="culture-but" id="west">
                <h4>
                    Western
                </h4>
            </button>
        </div>

        <div class="single-grid">
            <button class="culture-but" id="asian">
                <h4>
                    Asian
                </h4>
            </button>
        </div>

        <div class="single-grid">
            <button class="culture-but" id="dance">
                <h4>
                    Dance
                </h4>
            </button>
        </div>

        <div class="single-grid">
            <button class="culture-but" id="bolly">
                <h4>
                    Bollywood
                </h4>
            </button>
        </div>

        <div class="single-grid">
            <button class="culture-but" id="soap">
                <h4>
                    Soap Opera
                </h4>
            </button>
        </div>

        <div class="single-grid">
            <button class="culture-but" id="decades">
                <h4>
                    Decades
                </h4>
            </button>
        </div>



    </div>

    <!-- bottom navigation -->
    <div class="skipanddone">
        <div class="skip">
            <a href="addname.php">
                <h3>BACK</h3>
            </a>
        </div>
        <div class="done">
            <a href="welcome.php">
                <h3>NEXT</h3>
            </a>
        </div>
    </div>

</body>

</html>