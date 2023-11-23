<!DOCTYPE HTML>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>

    <body>

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
            
            //Selecteer alle data uit je tabel en print op een mooie volgorde in je index.
            //Hoe je alles selecteert in een query zonder variabele
            $productenQuery='SELECT * FROM producten';

            //Selecteer alleen het product die de product_code 1 heeft. en print het in je index.php file
            echo "<h1>Winkel Data</h1>
            <h2>Product(en)</h2>
            <table>
            <tr>
            <th>Product</th>
            </tr>";
            $stmt = $pdo->query("SELECT * FROM producten WHERE product_code=1");
            $result = $stmt->fetchAll();

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['product_code'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

            //Selecteer alleen het product die de product_code 2 heeft. en print het in je index.php file
            //Zet een Comment boven je code van "Hoe je een single row selecteert met named parameters"
            $stmt = $pdo->query("SELECT * FROM producten WHERE product_code=2");
            $result = $stmt->fetchAll();

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['product_code'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            ?>

    </body>

</html>