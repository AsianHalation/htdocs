<!DOCTYPE HTML>
<HTML>

<head>
    <title>databaselink</title>
</head>

<body>
    <?php

        $host = 'localhost:3307';
        $db   = 'kledingwinkel';
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
            echo "balls";
        } catch (Exception $e) {
            die("Failed to open database connection, did you start it and configure the credentials properly?");
        }

    ?>
    </body>
</HTML>