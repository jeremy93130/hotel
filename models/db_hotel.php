<?php require_once("../inc/database.php");
session_start();

if (isset($_POST["add_hotel"])) {
    // Récupération des infos :
    $hotelName = htmlspecialchars($_POST["hotel_name"]);
    $location = htmlspecialchars($_POST["location_hotel"]);
    $capacity = htmlspecialchars($_POST["capacity_hotel"]);

    // Connexion à la base de données : 
    $db = dbConnexion();

    // Préparation de la requête : 
    $request = $db->prepare("INSERT INTO hotels (location,capacity,hotel_name) VALUES (?,?,?)");

    // Execution de la requête : 

    try {
        $request->execute(array($location, $capacity, $hotelName));
        header("Location: http://localhost/hotel/admin/hotel_list.php");
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

?>