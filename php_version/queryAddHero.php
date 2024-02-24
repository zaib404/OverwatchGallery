<html>
    <body>
        <?php
        include 'includes/login.php';
        //put the captured data into variable
        $roleid = $_POST['Role_ID']; 
        $affiliationid = $_POST['Affiliation_ID'];
        $heroname = $_POST['Hero_Name'];
        $description = $_POST['description'];
        
        //Escapes special characters in a string for use in an SQL statement, helps with sql injection
        $roleid = mysqli_real_escape_string($dbconnect, $roleid);
        $affiliationid = mysqli_real_escape_string($dbconnect, $affiliationid);
        $heroname = mysqli_real_escape_string($dbconnect, $heroname);
        $description = mysqli_real_escape_string($dbconnect, $description);
        //checking result and selects from hero to ensure there isnt already a hero with that name
        $checkresult = mysqli_query($dbconnect, "SELECT * FROM `hero` WHERE `Hero_Name` = '$heroname'");
        if (mysqli_num_rows($checkresult) > 0) 
        { 
            //Stop duplicate name
            echo "Duplicate hero name, $heroname already exists";
        }
        else
        {
            //if there is no name then input it into the table for hero
            $sql = "INSERT INTO hero (Hero_ID, Hero_Name, description, Role_ID, Affiliation_ID) values (NULL, '$heroname', '$description', '$roleid', '$affiliationid')"; //use NULL for auto number
            if (!mysqli_query($dbconnect,$sql))
            {
                die('Error: ' . mysqli_error($dbconnect));
            }
            echo "1 Hero added <br> Please wait 5 seconds for next page for abilities";
            
            //Reference:
            //Kumar, S. (2017). Redirect in PHP Without Using Header(). [Online] My Coding Tricks. Available at: http://mycodingtricks.com/snippets/php/redirect-php-without-using-header/ [Accessed 2 May 2017].    
            
            //redirecting to new page. Content are seconds which redirects after 5 seconds to the url
            $URL="FormAddAbilities.php";
            echo '<META HTTP-EQUIV="refresh" content="5;URL=' . $URL . '">';
            
        }
        mysqli_close($dbconnect);
        ?> 
    </body>
</html>
