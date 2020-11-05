<?php

    function connectToDatabase() {

        $host = "localhost";
        $dbname = "acdief_db_old";
        $user = "root";
        $password = "";

        try {
            $pdo = new PDO('mysql:host=' . $host . ";dbname=" . $dbname . ";charset=utf8", $user, $password);
        } catch (Exception $e) {
            die('Unable to connect to database : ' . $e->getMessage());
        }
        return $pdo;
    }

?>