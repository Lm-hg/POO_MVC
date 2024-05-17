<?php
class BaseDD{
     function connexion(){
        try {
            $conn = new PDO("mysql:host=localhost;dbname=DBNAME", 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        } 
    }
}
