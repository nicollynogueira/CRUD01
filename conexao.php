<?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=social_network;charset=utf8mb4","root","");
        echo "deu certo";
    } catch (PDOException $e) {
        echo "erro: " . $e->getMessage();
    }
?>