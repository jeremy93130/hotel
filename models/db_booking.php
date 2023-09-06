<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . "/hotel/inc/database.php";
if (isset($_POST["book"])) {
    // Récuperer les infos:
    $id_room = htmlspecialchars($_POST["id_room"]);
    $startDate = htmlspecialchars($_POST["start_date"]);
    $endDate = htmlspecialchars($_POST["end_date"]);
    $price = htmlspecialchars($_POST["price"]);


    $dateStart = strtotime($startDate);
    $dateEnd = strtotime($endDate);

    $duration = $dateEnd - $dateStart;

    $nbDay = $duration / 86400;

    $today = date("Ymd"); // La date d'aujourd'hui

    // si $today est suppérieur à la date de début de réservation ou $today est inférieur à la date de fin de la réservation
    if (strtotime($today) > strtotime($startDate) || strtotime($today) > strtotime($endDate)) {
        echo '<script>alert("Votre date de début ou de fin de réservation ne peut pas être inférieure à la date d aujourd hui")</script>';
        echo '<script>window.location.href = "http://localhost/hotel/booking.php?room=' . $idRoom . '&price=' . $price . '";</script>';
    } else {
        // se connecter à la base de donnée :
        $db = dbConnexion();

        // Préparer la requête pour vérifier si la chambre est disponible :
        $request = $db->prepare("SELECT * FROM bookings WHERE room_id = ? AND ((booking_start_date <= ? AND booking_end_date >= ?) OR (booking_start_date <= ? AND booking_end_date >= ?))");

        // Executer la requête :
        try {
            $request->execute(array($id_room, $startDate, $startDate, $endDate, $endDate));
            //Récuperer le résultat :
            $books = $request->fetch(PDO::FETCH_ASSOC);
            if (empty($books)) {
                if ($startDate < $endDate) {
                    // Préparer la requête :
                    $request = $db->prepare("INSERT INTO bookings (booking_start_date,booking_end_date,user_id,room_id,booking_price,booking_state) VALUES (?,?,?,?,?,?)");
                    // executer la requête :
                    try {
                        $request->execute(array($startDate, $endDate, $_SESSION["id_user"], $id_room, $price * $nbDay, "in progress"));
                        header("Location: ../user_home.php");
                    } catch (PDOException $error) {
                        echo $error->getMessage();
                    }
                }
            } else {
                echo 'Chambre pas disponible à cette date';
            }
        } catch (PDOException $error) {
            $error->getMessage();
        }
    }

}

if (isset($_GET['id_book'])) {
    // se connecter à la bd
    $db = dbConnexion();


    // Préparer la requête:
    $request = $db->prepare("UPDATE bookings SET booking_state=? where id_booking = ?");

    // Executer la requête 
    try {
        $request->execute(array("cancel", $_GET['id_book']));
        header("Location: http://localhost/hotel/user_home.php");
    } catch (PDOException $error) {
        $error->getMessage();
    }
}