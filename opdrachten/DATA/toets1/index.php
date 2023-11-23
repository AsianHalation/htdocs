<?php
    $host = 'localhost:3307';
    $db   = 'bedrijfx';
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
        $pdo = new PDO($dsn, $user, $pass, $options);
        echo("connectie succes");
    } catch (Exception $e) {
        echo("Failed to open database connection, did you start it and configure the credentials properly?");
    }
?>

<html>
    <head>
        <title>Read</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    <head>

    <body>
        <h2>Contactenlijst</h2>
            <table>
            <tr>
                <td>id</td>
                <td>Merk</td>
                <td>Model</td>
                <td>opslag in GB</td>
                <td>prijs</td>
                <td>Opties</td>
            </tr>
                <?php
                //Medewerkers van het bedrijf moeten een overzicht kunnen zien van alle telefoons
                $result = $pdo->query("SELECT * FROM bedrijfx.smartphones")->fetchAll();

                    foreach ($result as $row) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>" . "<br>";
                        echo "<td>" . $row['merk'] . "</td>" . "<br>";
                        echo "<td>" . $row['model'] . "</td>";
                        echo "<td>" . $row['opslag'] . "</td>";
                        echo "<td>" . $row['prijs'] . "</td>";
                        //Medewerkers van het bedrijf moeten de informatie van een bestaande telefoon kunnen aanpassen
                        echo "<td>" . ("input type='delete' name='delete'=$row>edit</a>") . 
                        ("<a href='delete.php?=$row[0]>Delete</a>") . "</td>";             
                        echo "</tr>";

                    }

                ?>
        </table>
        
        <h2>Smartphone toevoegen</h2>
        <!--Medewerkers van het bedrijf moeten nieuwe telefoons kunnen toevoegen -->
        <form method="POST">
            <input type="text" name="merk" id="merk" placeholder="Merk">
            <input type="text" name="model" id="model" placeholder="Model">
            <input type="text" name="opslag" id="opslag" placeholder="opslag in GB"> 
            <input type="float" name="prijs" id="prijs" placeholder="Prijs">
            
            <input type="submit" name="Invoeren" value="Invoeren">
        </form>
        

        <?php
            function check() {
                if (isset($_POST["Invoeren"])) {
                    $sql = "INSERT INTO `smartphones` (`merk`, `model`, `opslag`, `prijs`)
                    VALUES (:merk, :model, :opslag, :prijs)";
                    $stmt = $pdo->prepare($sql);
                    
                    $data = [
                        "merk" => $_POST['merk'],
                        "model" => $_POST['model'],
                        "opslag" => $_POST['opslag'],
                        "prijs" => $_POST['prijs'],
                    ];
                    $stmt->execute($data);
                }

                if (isset($_POST["delete"])) {
                    $sql = "DELETE FROM smartphones WHERE id=?";
                    $stmt= $pdo->prepare($sql);
                    $stmt->execute([$id]);
                }
            }
        ?>
    </body>
</html>