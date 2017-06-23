<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "dashboard";
    $connection = mysqli_connect($server, $username, $password, $database) or die(mysql_error());

    // Create table "users" if it does not exist. Don't create if it does already.
    // Uses timestamp to store the time of account creation.
    $table_query = "CREATE TABLE IF NOT EXISTS users
    (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    password varchar(100),
    reg_date TIMESTAMP)";

    // Executing the query of creating a table.
    $create_table = mysqli_query($connection, $table_query);

    /* if($create_table) {
        echo "Table created!";
    } else {
        echo "Error in table creation.";
    }
    */

    // User credentials acquired from the form.
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Inserting the details in the table. Encrypting the password for safety.
    $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', (PASSWORD('$password')))";
    $result = mysqli_query($connection, $sql) or die(mysql_error());

    // if($result) {
    //     echo "User created.";
    // }
?>
