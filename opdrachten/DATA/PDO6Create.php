<?php

$host = 'localhost:3307';
$db   = 'supermarkt';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $conn = new PDO($dsn, $user, $pass, $options);
    echo("connectie succes");
} catch (Exception $e) {
    echo("Failed to open database connection, did you start it and configure the credentials properly?");
}

?>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Supermarkt</title>
    </head>

    <body>
        <form method="POST">
            <label for="Naam">Naam</label>
            <input type="text" name="Naam" id="Naam"><br>

            <label for="telefoonnummer">telefoonnummer</label>
            <input type="" name="telefoonnummer" id="telefoonnummer">
            
            <input type="submit" name="submit" id="submit" value="toevoegen">
        </form>

        <?php
           if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $naam = $_POST['Naam'];
            $telefoonnummer = $_POST['telefoonnummer'];
            $conn->query(
                "INSERT INTO `klanten`(`naam`, `telefoonnummer`) 
                                            VALUES ('$naam', '$telefoonnummer');"
            );
        }
        ?>
    </body>

</html>