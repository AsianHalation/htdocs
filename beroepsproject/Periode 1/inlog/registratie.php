<!DOCTYPE html>
<html>
    <head>
        <title>Registratie</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="registratie.css">
    </head>

    <?php
    $host = 'localhost:3307';
    $db   = 'kledingwinkel';
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

    if (isset($_POST["registreer"])) {
        $sql = "INSERT INTO `klanten` (`Naam`, `Email`, `Wachtwoord`)
                VALUES (:Naam, :Email, :Wachtwoord)";
                $stmt = $pdo->prepare($sql);
                
                $data = [
                    "Naam" => $_POST['Naam'],
                    "Email" => $_POST['Email'],
                    "Wachtwoord" => $_POST['Wachtwoord'],
                ];
                $stmt->execute($data);
                header("Location:../hoofdpagina/hoofdpagina.html"); 
            }                 
           
        ?>


    <body>
        <div class="container">

            <h2>Gebruiker Registratie</h2>

            <form method="POST">
                <div class="inputs">
                    <label for="Naam">Naam:</label>
                    <input type="text" id="naam" name="Naam" required>
                </div>

                <div class="inputs">
                    <label for="Email">E-mail:</label>
                    <input type="text" id="email" name="Email" required>
                </div>

                <div class="inputs">
                    <label for="Wachtwoord">Wachtwoord:</label>
                    <input type="password" id="wachtwoord" name="Wachtwoord" required>
                </div>

                <div class="inputs">
                    <input type="submit" name="registreer" value="Registreer">
                </div>
            </form>
        </div>

        
    </body>
</html>