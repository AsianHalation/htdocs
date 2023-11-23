<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>

    <body>
        <?php

            // Maak een connectie met de database winkel.
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

        ?>

        <!--Maak een nieuw formulier aan in je insert.php file met een POST method -->
        <form method="POST" action="insert.php">

            <!--Voeg 3 input fields in je formulier en een button-->
            product_naam: <input type="text" name="product_naam"><br>
            prijs_per_stuk: <input type="float" name="prijs_per_stuk"><br>
            omscrijving: <input type="text" name="omschrijving"><br>

            <input type="submit" value="Voltooien" name="Voltooien">

        </form>

        <!--Schrijf daarna je PHP code zodat er een product wordt toegevoegd in de tabel producten met de gegevens die in het formulier worden ingevuld -->
        <?php

             if (isset($_POST["Voltooien"])) {
                $sql = "INSERT INTO `producten` (`product_code`, `product_naam`, `prijs_per_stuk`, `omschrijving`) VALUES (NULL, :product_naam, :prijs_per_stuk, :omschrijving)";
                $stmt = $pdo->prepare($sql);
                
                $data = [
                    "product_naam" => $_POST['product_naam'],
                    "prijs_per_stuk" => $_POST['prijs_per_stuk'],
                    "omschrijving" => $_POST['omschrijving']
                ];
                $stmt->execute($data);
            }

            //Print op de browser
            $stmt = $pdo->query("SELECT * FROM winkel.producten");
            $result = $stmt->fetchAll();

            foreach ($result as $row) {
                echo$row['product_naam'] . "" . $row['prijs_per_stuk'] . $row['omschrijving'] . "<br>";
            }
        ?>

    </body>
</html>