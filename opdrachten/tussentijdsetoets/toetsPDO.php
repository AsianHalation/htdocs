<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Camping Homepage</title>
        <style>
            form {
                margin: 20px;
                padding: auto;
            }

            body {
                    font-family: Arial, Helvetica, sans-serif;
                }

            input {
                margin: 10px;
                border-style: ridge;
            }

        </style>
    </head>

    <body>

        <h1>Studenten Overzicht</h1>
        <?php
            // Maak een database aan waarin je de volgende studenten informatie opslaat;
            // studentennummer, naam, achternaam en telefoonnummer
            // Maak daarna een connectie met je database.
            $host = 'localhost:3307';
                    $db   = 'studenten';
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
            // Zorg ervoor dat ik via een formulier een student kan toevoegen in je tabel.
        ?>
            <h2>Student toevoegen</h2>
            <form method="POST" action="toetsPDO.php">

                <input type="text" name="naam" placeholder="Naam"><br>
                <input type="text" name="achternaam" placeholder="Achternaam"><br>
                <input type="text" name="telefoonnummer" placeholder="Telefoon"><br>

                <input type="submit" value="Voltooien" name="Voltooien">

            </form>

        <?php
            if (isset($_POST["Voltooien"])) {
                $sql = "INSERT INTO `student` (`studentennummer`, `naam`, `achternaam`, `telefoonnummer`) VALUES (NULL, :naam, :achternaam, :telefoonnummer)";
                $stmt = $pdo->prepare($sql);
                
                $data = [
                    "naam" => $_POST['naam'],
                    "achternaam" => $_POST['achternaam'],
                    "telefoonnummer" => $_POST['telefoonnummer']
                ];
                $stmt->execute($data);
            }

            // Laat ten slotte alle info van de studenten zien uit je tabel.
            $stmt = $pdo->query("SELECT * FROM studenten.student");
            $result = $stmt->fetchAll();

            foreach ($result as $row) {
               echo $row['studentennummer'] . $row['naam'] . $row['achternaam'] . $row['telefoonnummer'] . "<br>";
            }

            // inleveren; Exporteer je database via phpmyadmin en lever het ook in.
            // Hoe een db te exporteren;
            // Selecteer aan de linkerkant je database,
            // In het midden van de bovenbalk vind je de knop Exporteren.
        ?>
    </body>
</html>
