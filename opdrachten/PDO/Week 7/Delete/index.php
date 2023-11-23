<?php

    $host = 'localhost:3307';
    $db   = 'winkel';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';
    
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try 
    {
        $pdo = new PDO($dsn, $user, $pass, $options);
        echo "Connected to database ($db)";
    } 
        catch (\PDOException $e) 
    {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    $stmt = $pdo->query("SELECT * FROM winkel.producten");
            $result = $stmt->fetchAll();

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['product_code'] . "</td>" . "<br>";
                echo "<td>" . $row['prijs_per_stuk'] . "</td>";
                echo "<td>" . $row['omschrijving'] . "</td>";
                echo "</tr>";

            }

    

?>