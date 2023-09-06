<?php
function dbConnexion()
{
    $connexion = null;
    try {
        $connexion = new PDO("mysql:host=localhost;dbname=id21228694_hotel_db", "id21228694_admin", "P@sser123");
    } catch (PDOException $e) {
        $connexion = $e->getMessage();
    }
    return $connexion;
}
?>