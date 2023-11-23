<?php
    $host = 'localhost:3307';
    $db   = 'klanten';
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
        <link rel="stylesheet" href="read.css">
    <head>

    <body>
        <h2>Contactenlijst</h2>
            <table>
            <tr>
                <td>id</td>
                <td>Naam</td>
                <td>Achternaam</td>
                <td>Datum</td>
                <td>Email</td>
                <td>Telefoonnummer</td>
                <td>Action</td>
            </tr>
                <?php
                //Een webpagina waarop de gebruiker een lijst met alle contacten kan zien.

                //Op de lijstpagina moet elke contactvermelding
                //de naam, e-mail en telefoonnummer van het contact weergeven.   
                $result = $pdo->query("SELECT * FROM klanten.contacten")->fetchAll();

                    foreach ($result as $row) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>" . "<br>";
                        echo "<td>" . $row['Naam'] . "</td>" . "<br>";
                        echo "<td>" . $row['Achternaam'] . "</td>";
                        echo "<td>" . $row['Datum'] . "</td>";
                        echo "<td>" . $row['Email'] . "</td>";
                        echo "<td>" . $row['Telefoonnummer'] . "</td>";
                        echo "<td>" . ("<a href='edit.php?id=$row[0]'>edit</a>");
                        echo ("<a href='delete.php?id=$row[0]'>Delete</a>") . "</td>";             
                        echo "</tr>";

                    }

                ?>
        </table>

        <h2>Conctact Toevoegen</h2>

        <form method="POST">
            <input type="text" name="Naam" id="Naam" placeholder="Naam">
            <input type="text" name="Achternaam" id="Achternaam" placeholder="Achternaam">
            <input type="date" name="Datum" id="Datum">
            <input type="email" name="Email" id="Email" placeholder="Email">
            <input type="text" name="Telefoonnummer" id="Telefoonnummer" placeholder="Telefoon">
            
            <input type="submit" name="Toevoegen" value="Toevoegen">
        </form>
        

        <?php
            if (isset($_POST["Toevoegen"])) {
                $sql = "INSERT INTO `contacten` (`Naam`, `Achternaam`, `Datum`, `Email`, `Telefoonnummer`)
                VALUES (:Naam, :Achternaam, :Datum, :Email, :Telefoonnummer)";
                $stmt = $pdo->prepare($sql);
                
                $data = [
                    "Naam" => $_POST['Naam'],
                    "Achternaam" => $_POST['Achternaam'],
                    "Datum" => $_POST['Datum'],
                    "Email" => $_POST['Email'],
                    "Telefoonnummer" => $_POST['Telefoonnummer']
                ];
                $stmt->execute($data);
            }
        ?>
    </body>
</html>