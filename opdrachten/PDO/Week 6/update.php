<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updato</title>
</head>

<body>
<?php
     $host = 'localhost:3307';
     $db   = 'winkel';
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

        <form method="POST" action="update.php">
            <input type="text" name="product_naam" placeholder="product naam">
            <input type="float" name="prijs_per_stuk" placeholder="prijs per stuk">
            <input type="text" name="omschrijving" placeholder="omschrijving">

            <input type="submit" name="voltooien" value="voltooien">
        </form>

<?php
    //Zorg ervoor dat de informatie over het 2e product wordt vervangen met de data uit je formulier.
    if (isset($_POST["voltooien"])) 
    {
    $sql = "UPDATE producten SET product_naam=?, prijs_per_stuk=?, omschrijving=? WHERE product_code=2";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$product_naam, $prijs_per_stuk, $omschrijving, $product_code]);
    }
?>
    </body>
</html>