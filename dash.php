<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $connection = mysqli_connect($server, $username, $password) or die(mysql_error());

    // Create a database dynamically. (Helpful if loading on other hosts.)
    $database = "CREATE DATABASE IF NOT EXISTS dashboard";

    // Executing the create query.
    if(! mysqli_query($connection, $database)) {
        echo mysql_error();
    }
?>
