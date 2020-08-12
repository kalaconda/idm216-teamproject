<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prime Video</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://use.fontawesome.com/cce24d2a9e.js"></script>
</head>
<body>
    <!-- top bar -->
    <div class="logo">
            <img src="images/prime_logo.svg" class="logoimg">
            <h4>Age</h4>
    </div>
    
    <div id="add_name">
        <h5>What is your age range?</h5> <br>

        <div class="age_range">

            <button type="button">
                <p><span class="bullet_dots"></span>Below 13</p>
            </button>

            <button type="button">
                <p><span class="bullet_dots"></span>Between 13 and 17</p>
            </button>

            <button type="button">
                <p><span class="bullet_dots"></span>Above 18</p>
            </button>

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
    </script>


    <!-- bottom navigation -->
    <div class="skipanddone">
        <div class="skip">
            <a href="addname.php"><h3>BACK</h3></a>
        </div>
        <div class="done">
            <a href="home.php"><h3>NEXT</h3></a>
        </div>
    </div>

</body>
</html>