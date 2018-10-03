<?php
$dsn = 'mysql:host=localhost;dbname=sports_management_sw_db';
$username = 'root';
$password= '';

try{
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo "<p>An error occurred while connecting to the database: $error_message </p> ";
}

