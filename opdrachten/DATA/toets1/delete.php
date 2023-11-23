<?php

    $id = 1;
    include "index.php";
    $pdo = require 'index.php';

    if (isset($_POST["delete"])) {
        $sql = 'DELETE FROM smartphones WHERE id=?';
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    header("index.php");
    ?>