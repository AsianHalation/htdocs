<?php

    class database {
        public $pdo;

        public function _construct($host = 'localhost:3307', $db = "supermarkt", $user = 'root', $pass = '', $charset = 'utf8mb4') {
            try {
                $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "database $db";
            } catch (PDOException $e) {
                echo "geen databeest" . $e->getMessage();
            }
        }
        //1 Voeg een public function in je Database class toe.
        //2 De functie gaat over het toevoegen van data.
        public function pdo($pdo, $sql, $args = NULL)
        {
            
        }
    }
?>