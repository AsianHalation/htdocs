<?php
    //Maak in db.php een nieuwe Class waarin een database connectie.
        $host = 'localhost:3307';
        $db   = 'studenten';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = 
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $conn = new PDO($dsn, $user, $pass, $options);
            echo "database";
        } catch (Exception $e) {
            die("Failed to open database connection, did you start it and configure the credentials properly?");
        }
?>