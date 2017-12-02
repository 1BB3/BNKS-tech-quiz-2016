<?php // login.php
    $db_hostname = 'localhost';
    $db_database = 'tz';
    $db_username = 'root';
    $db_password = '';
    $db_object = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
    if ($db_object->connect_error) die($db_object->connect_error);
?>
