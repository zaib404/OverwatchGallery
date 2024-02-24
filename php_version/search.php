<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/styles.css"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Search</title>
        
    </head>
    
    <body>
        <!-- Page wrapper so everything is wrapped up -->
        <section id="pagewrapper">
        
        <!-- Start of header for Nav. Header nav is there as a wrapper for the nav since
              to layout and align the nav below. So the background wouldnt show-->
            <?php
            INCLUDE('phpStyle/nav.php')
            ?>
            <!-- End of header for nav -->
        
            <section id="banner-container">
            <!-- Banner container. Img is a banner within css the height and width is specified -->
            <img class="img-banner" src="../shared_assets/Images/Banner/lucio.png" />
            </section>
        
            <!-- This section is for the main content -->
            <section id="main">
                <header class="about-title-text-container">
                    <h1 class="header-text">Search</h1>
                </header>
                
                <section class="about-row">
                    <center>
                        <!-- action taking to script -->
                        <form action="search_script.php" method="post"><br>
                            Search for a hero:
                            <br><br>
                            <!-- name=search so php can get -->
                            <input type="text" name="search" id="hero"/>
                            <br><br>
                            <input type="submit" value="Search"/>
                        </form>
                    </center><br>
                </section>
            </section>
            <!-- This section is for the footer content -->
            <?php
            INCLUDE('phpStyle/footer.php')
            ?>
            <!-- This section is where the footer content ends -->
        </section>
    </body>
</html>

<!-- 

    Reference:

    Blizzard Entertainment (2015) Overwatch circle logo. Available at: https://commons.wikimedia.org/wiki/File:Overwatch_circle_logo.svg (Accessed: 31 December 2016).
    
    Blizzard Entertainment (2016) Overwatch™ - blizzard support. Available at: https://eu.battle.net/support/en/games/overwatch (Accessed: 24 December 2016).
    
    Blizzard Entertainment (2016) Overwatch. Available at: https://playoverwatch.com/en-us/heroes/ (Accessed: 28 December 2016).

    bytecodeminer (2016) Overwatch computer wallpapers, desktop backgrounds. Available at: https://wall.alphacoders.com/big.php?i=695787 (Accessed: 5 January 2017).

    Game 4 U (2017) Overwatch origins edition. Available at: http://game4u.co.za/shop/overwatch/ (Accessed: 5 January 2017).
    
    Jin Kim, Y. (2016) Overwatch computer wallpapers, desktop backgrounds. Available at: https://wall.alphacoders.com/big.php?i=704120 (Accessed: 5 January 2017).

    krisedge (2016) Overwatch computer wallpapers, desktop backgrounds | 1920x1080 | ID: 666091. Available at: https://wall.alphacoders.com/big.php?i=666091 (Accessed: 5 January 2017).

    Raylan13 (2016) Genji spray - icon. Available at: http://overwatch.wikia.com/wiki/File:Genji_Spray_-_Icon.png (Accessed: 31 December 2016).
    
    Raylan13 (2016) Hanzo spray - icon. Available at: http://overwatch.wikia.com/wiki/File:Hanzo_Spray_-_Icon.png (Accessed: 31 December 2016).
    
    Reddit (2016) Request can somebody get me a transparent image. Available at: https://www.reddit.com/r/Overwatch/comments/4g2fn7/request_can_somebody_get_me_a_transparent_image/ (Accessed: 31 December 2016).

    uberchain (2017) But First...! Available at: http://uberchain.deviantart.com/art/But-First-577221246 (Accessed: 5 January 2017).

    Javascript reference ▼
    W3schools.com (2016) How to create a Lightbox. Available at: http://www.w3schools.com/howto/howto_js_lightbox.asp (Accessed: 4 January 2017).
    
-->
