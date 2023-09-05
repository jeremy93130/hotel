<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . "/hotel/inc/database.php";
if (isset($_POST["book"])) {
    // Récuperer les infos:
    $id_room = htmlspecialchars($_POST["id_room"]);
    $startDate = htmlspecialchars($_POST["start_date"]);
    $endDate = htmlspecialchars($_POST["end_date"]);
    $price = htmlspecialchars($_POST["price"]);


    $startDate = strtotime($startDate);
    $endDate = strtotime($endDate);

    $duration = $endDate - $startDate;

    $nbDay = $duration / 86400;
    // se connecter à la base de donnée :
    $db = dbConnexion();

    // Préparer la requête pour vérifier si la chambre est disponible :
    $request = $db->prepare("SELECT * FROM bookings WHERE room_id= ? AND booking_start_date < ? AND booking_end_date > ? ");

    // Executer la requête :
    try {
        $request->execute(array($id_room, $startDate, $endDate));

        //Récuperer le résultat :
        $books = $request->fetch(PDO::FETCH_ASSOC);
        if (empty($books)) {
            if ($startDate < $endDate) {
                // Préparer la requête :
                $request = $db->prepare("INSERT INTO bookings (booking_start_date,booking_end_date,user_id,room_id,booking_price,booking_state) VALUES (?,?,?,?,?,?)");
            }
        }
    } catch (PDOException $error) {
        $error->getMessage();
    }

}