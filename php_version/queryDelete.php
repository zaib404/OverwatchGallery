<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/styles.css"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Delete Ability</title>
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
                <br><section class="about-row"><br>
                    <center>
                        <?php
                            include 'includes/login.php';
                            //put the captured data into variable
                            $abilityname = $_POST['Abilities_Name'];
        
                            //Escapes special characters in a string for use in an SQL statement, helps with sql injection
                            $abilityname = mysqli_real_escape_string($dbconnect, $abilityname);
                            //selecting abilities where the name is the same as the one chosen from formdelete
                            $checkresult = mysqli_query($dbconnect, "SELECT * FROM `abilities` WHERE `Abilities_Name` = '$abilityname'");
                            if (mysqli_num_rows($checkresult) > 0) 
                            { 
                                //error deleting just in case
                                echo "<h1>Error deleting</h1>";
                            }
                            else
                            {
                                //delete ability 
                                $sql = "DELETE FROM `abilities` WHERE `Abilities_ID` = '$abilityname'"; //use NULL for auto number
                                if (!mysqli_query($dbconnect,$sql))
                                {
                                    die('Error: ' . mysqli_error($dbconnect));
                                }
                                //print out they deleted it if successful
                                echo "<h1>Deleted ability</h1>";
                            }
                            // close database  
                            mysqli_close($dbconnect);
                        ?> 
                    </center>
                    <br>
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
