<!DOCTYPE html>
<html>
    <head>
        <!-- Linking css stylesheet so it can grab and apply colour and ect.. -->
        <link rel="stylesheet" type="text/css" href="CSS/styles.css"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <!-- Title of the webpage -->
        <title>Overwatch Highlights</title>
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
                <img class="img-banner" src="../shared_assets/Images/Banner/Ow_Banner.jpg" />
            </section>
        
            <!-- This section is for the main content -->
            <section id="main">
                
                <!-- The heading and a little caption below. In big text showing what the website is about wrapped in a container -->
                <section class="title-text-container">
                    <h2 class="heading-title">CHOOSE YOUR HERO</h2>
                    <p class="caption-text">See information of your favourite hero in action.</p>
                </section>
                
                <!-- START OF OFFENCE HEROES -->
            <!-- Heroes are wrapped in a container in their categories. -->
            <section class="heroes-container">
                <!-- Hero Title acts as a sub heading for the categories -->
                <h1 class="hero-portait-title">Offence Heroes</h1>
                <!-- Image of hero when clicked takes you to their video page  -->
                <a href="heroName.php?name=genji" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Genji.png" class="portrait">
                    <!-- Text to show which hero it is. -->
                    <section class="text-container">
                        <section class="portrait-title">Genji</section>
                    </section>
                </a>
                
                <!-- Eveything below does the same exact thing but just grab different images. -->
                
                <a href="heroName.php?name=mccree" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Mccree.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">McCree</section>
                    </section>
                </a>
                
                <a href="heroName.php?name=pharah" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Pharah.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Pharah</section>
                    </section>
                </a>
                
                <a href="heroName.php?name=reaper" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Reaper.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Reaper</section>
                    </section>
                </a>
                
                <a href="heroName.php?name=Soldier: 76" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Soldier76.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Solider: 76</section>
                    </section>
                </a>
                
                <a href="heroName.php?name=sombra" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Sombra.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Sombra</section>
                    </section>
                </a>
                
                <a href="heroName.php?name=tracer" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Tracer.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Tracer</section>
                    </section>
                </a>
            </section>
            <!-- END OF OFFENCE HEROES -->
            
            <!-- START OF DEFENCE HEROES -->
            <section class="heroes-container">
                <h1 class="hero-portait-title">Defence Heroes</h1>
                <a href="heroName.php?name=bastion" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Bastion.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Bastion</section>
                    </section>
                </a>
                
                <a href="heroName.php?name=hanzo" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Hanzo.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Hanzo</section>
                    </section>
                </a>
                
                <a href="heroName.php?name=junkrat" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Junkrat.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Junkrat</section>
                    </section>
                </a>
                
                <a href="heroName.php?name=mei" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Mei.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Mei</section>
                    </section>
                </a>
                
                <a href="heroName.php?name=torbjorn" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Torbjorn.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Torbjorn</section>
                    </section>
                </a>
                
                <a href="heroName.php?name=widowmaker" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Widowmaker.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Widowmaker</section>
                    </section>
                </a>
            </section>
            <!-- END OF DEFENCE HEROES -->
            
            <!-- START OF TANK HEROES -->
            <section class="heroes-container">
                <h1 class="hero-portait-title">Tank Heroes</h1>
                <a href="heroName.php?name=dva" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/DVa.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">D.va</section>
                    </section>
                </a>
                
                <a href="heroName.php?name=reinhardt" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Reinhardt.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Reinhardt</section>
                    </section>
                </a>
                
                <a href="heroName.php?name=roadhog" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Roadhog.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Roadhog</section>
                    </section>
                </a>
                
                <a href="heroName.php?name=winston" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Winston.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Winston</section>
                    </section>
                </a>
                        
                <a href="heroName.php?name=zarya" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Zarya.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Zarya</section>
                    </section>
                </a>
            </section>
            <!-- END OF TANK HEROES -->
            
            <!-- START OF SUPPORT HEROES -->
            <section class="heroes-container">
                <h1 class="hero-portait-title">Support Heroes</h1>
                <a href="heroName.php?name=ana" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Ana.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Ana</section>
                    </section>
                </a>
                
                <a href="heroName.php?name=lucio" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Lucio.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Lucio</section>
                    </section>
                </a>
                
                <a href="heroName.php?name=mercy" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Mercy.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Mercy</section>
                    </section>
                </a>
                    
                <a href="heroName.php?name=symmetra" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Symmetra.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Symmetra</section>
                    </section>
                </a>
                
                <a href="heroName.php?name=zenyatta" class="hero-portrait">
                    <img src="../shared_assets/Images/Heroes/Zenyatta.png" class="portrait">
                    <section class="text-container">
                        <section class="portrait-title">Zenyatta</section>
                    </section>
                </a>
            </section>
            <!-- END OF SUPPORT HEROES -->
            
            </section>
            <!-- This section is where the main content ends -->
            
            <!-- This section is for the footer content -->
            <?php
            INCLUDE('phpStyle/footer.php')
            ?>
            <!-- This section is where the footer content ends -->
        </section>
        <!-- This section is where the page wrapper ends -->
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
