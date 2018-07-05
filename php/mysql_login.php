<?php // login information and connection to mySql database

    $db_hostname = 'localhost'; //hostname for the server hosting the database
    $db_database = 'gabs';  //name of the database
    $db_username = 'root'; //username of the user with permissions of the database
    $db_password = ''; //password of the username

    $db_object = mysqli_connect($db_hostname, $db_username, $db_password, $db_database); //connect to the database with the login information
    if ($db_object->connect_error) die($db_object->connect_error); // if there is connection error then display error.
?>
