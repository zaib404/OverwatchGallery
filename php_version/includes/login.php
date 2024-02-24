<! DOCTYPE html>
<html>
   <body>

    <?php

       //Set up the variables
       //Which are assigned to connect to the server and database.
       $db_hostname = 'localhost';
       $db_username = 'root'; //if no username then leave it empty //errmadmz_ow3
       $db_password = ''; //if there is no password then leave it empty //Overwatch
       $db_database = 'overwatch3'; //the database name //errmadmz__test01

       /*Connect to server and check connections 
       creating a variable so it holds the mysqli function which have 
       three parameters which are the host name, username and password. 
       This enables us to connect to the server*/
       
       $dbconnect = mysqli_connect("$db_hostname", "$db_username", "$db_password");
       if (!$dbconnect) 
       {
           //if unable to connect to server then show message 
           die("Unable to connect to host: " . mysqli_connect_error());
       }
       
       /*Connect to database and check
       Creating a new variable which holds a function to select the database. 
       The function needs two parameters which we use the server connect and 
       the other is the database name passed in*/
       
       $selectdb = mysqli_select_db($dbconnect, $db_database);    
       if (!$selectdb)
       {
           //if unable to connect to database show this message with the error type.
           die("Unable to connect to database: " . mysqli_connect_error());
       }
    ?>
  </body>
</html>
