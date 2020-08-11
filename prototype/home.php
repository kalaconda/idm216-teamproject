<?php
    require '../config.php';
    
    // Step 2 perform a datbase table query
    $table = 'amazon';
    $query = "select * FROM {$table}";
    $result = mysqli_query($connection, $query);

    //Check for errors in SQL statement
    if (!$result) {
        die ('Databse query failed');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prime Video</title>
    <script src="https://use.fontawesome.com/20cbea2300.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="logo">
        <img src="images/prime_logo.svg" class="logoimg">
    </div>
    <!-- top nav -->
    <ul>
        <li><a href="#">For You</a></li>
        <li><a href="#">Originals</a></li>
        <li><a href="#">Movies</a></li>
        <li><a href="#">TV</a></li>
        <li><a href="#">Prime</a></li>
    </ul>
    <!-- script for nav active page links -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script type="application/javascript">
        $(document).ready(function(){
            $('ul li a').click(function(){
                $('li a').removeClass("active");
                $(this).addClass("active");
            })
        });
    </script>

    <!-- featured content -->
    <br>
    <!-- Swiper -->
    <div class="main">
    <div class="swiper-container">

   
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="images/thevastofnight_poster.jpg">
            </div>
            <div class="swiper-slide">
                <img src="images/paprika_poster.jpg">
            </div>
            <div class="swiper-slide">
                <img src="images/astarisborn_poster.jpg">
            </div>
            <div class="swiper-slide">
                <img src="images/aceofhearts_poster.jpg">
            </div>
            <div class="swiper-slide">
                <img src="images/trailofufos_poster.jpg">
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

     

    </div>
    
    
    <!-- DESCRIPTION MODAL BOX -->
    <div class="modal modal--hidden">
        <div class="modal_contents">
            <div id="main_img">
                <img src="images/thumbnail_notallofthem/blackbutler.jpg" alt="blackbutler">
            </div>

            <div class="media_content">
                <p id="title">Black Butler - Book of the Atlantic</p>
                <div class="genre">
                    <p>Anime</p>
                    <i class="fa fa-circle fa-lg" aria-hidden="true"></i>
                </div>

                <div class="stars">
                    <p>4.5</p>
                    <img src="images/icons/4.5stars.svg" alt="">
                </div>

                <div class="description">
                    <p id="description">All aboard to the next great adventure for Ciel and his demonic butler, Sebastian! After hearing rumors of a peculiar society bringing people back from the dead, the two board the luxury liner Campania on her maiden voyage to investigate.</p>
                </div>
            </div>

            <div class="modal_button">
                <p>Not Interested</p>
                <p>Add to "My Stuff"</p>
            </div>
        </div>  
    </div>

    <!-- categories -->
    <div class="item">
        <h3 class="categorytt">Continue Watching</h3>
        <div class="thumbnail poster_tn">
            <div>
                <img src="images/paprika_poster.jpg" alt="paprika">
                <div class="season_episode">
                    <hr id="s_e_1">
                    <p>S1: E4</p>
                </div>
            </div>
            <div>
                <img src="images/thevastofnight_poster.jpg" alt="forevermygirl">
                <div class="season_episode">
                    <hr id="s_e_2">
                    <p>S3: E6</p>
                </div>
            </div>
            <div>            
                <img src="images/astarisborn_poster.jpg" alt="crazystupidlove">
                <div class="season_episode">
                    <hr id="s_e_3">
                    <p>S1: E1</p>
                </div>
            </div>
        </div>
    </div>

    <div class="item">
        <h3 class="categorytt">View All</h3>
        <div class="thumbnail">
            <?php 
                while($row = mysqli_fetch_assoc($result)) {
            ?>

            <img src="images/thumbnail_notallofthem/<?php echo $row['thumbnail'];?>">

            <?php
                } 
                mysqli_free_result($result);
                mysqli_free_result($row);
            ?>
        </div>

    </div>    

    <div class="item">
        <h3 class="categorytt">Anime</h3>
        <div class="thumbnail">
            <?php
                $genre = "SELECT * FROM {$table} WHERE `genre` = 'Anime'";
                $result = mysqli_query($connection, $genre);
                while($row = mysqli_fetch_assoc($result)) {
            ?>

            <img src="images/thumbnail_notallofthem/<?php echo $row['thumbnail'];?>">

            <?php
                }
                mysqli_free_result($result);
                mysqli_free_result($row);
            ?>
        </div>
    </div>

    <div class="item">
        <h3 class="categorytt">Documentary</h3>
        <div class="thumbnail">

            <?php
                $genre = "SELECT * FROM {$table} WHERE `genre` = 'Documentary'";
                $result = mysqli_query($connection, $genre);
                while($row = mysqli_fetch_assoc($result)) {
            ?>    

            <img src="images/thumbnail_notallofthem/<?php echo $row['thumbnail'];?>">

            <?php
                }
                mysqli_free_result($result);
                mysqli_free_result($row);
            ?>
        </div>
    </div>

    <div class="item">
        <h3 class="categorytt">Action</h3>
        <div class="thumbnail">

            <?php
                $genre = "SELECT * FROM {$table} WHERE `genre` = 'Action'";
                $result = mysqli_query($connection, $genre);
                while($row = mysqli_fetch_assoc($result)) {
            ?>    

            <img src="images/thumbnail_notallofthem/<?php echo $row['thumbnail'];?>">

            <?php
                } // end php while loop

                // Step 4 Release returned data
                mysqli_free_result($result);
                mysqli_free_result($row);
    
                // Step 5 Close database connection
                mysqli_close($connection);
            ?>
        </div>
    </div>

    <!-- actors -->
    <div class="item">
        <h3 class="categorytt">Actors/Actresses</h3>
        <div class="thumbnail2">
            <div class="inlineflex">
                <img src="images/actors/annehathaway.jpg" alt="annehathaway">
                <p> Anne Hathaway </p>
            </div>
            <div class="inlineflex">
                <img src="images/actors/chadwickboseman.jpg" alt="chadwickboseman">
                <p> Chadwick Boseman </p>
            </div>
            <div class="inlineflex">
                <img src="images/actors/bradleycooper.jpg" alt="bradleycooper">
                <p> Bradley Cooper</p>
            </div>
        </div>
    </div>
    
    <!-- bottom navigation -->
    <div class="navbar">
        <a href="index.html"><img src="images/icons/home.svg" class="svg"></a>
        <a href="#"><img src="images/icons/store.svg" class="svg"></a>
        <a href="#"><img src="images/icons/search.svg" class="svg"></a>
        <a href="#"><img src="images/icons/downloads.svg" class="svg"></a>
        <a href="#"><img src="images/icons/myprofile.svg" class="svg"></a>
    </div>

     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper('.swiper-container', {
            slidesPerView: 'auto',
            spaceBetween: 40,
            centeredSlides: true,
            grabCursor: true,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            }, 
            });
        </script>
</body>
</html>