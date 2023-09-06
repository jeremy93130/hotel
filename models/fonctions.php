<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/hotel/inc/database.php";


function hotelList()
{
    // se connecter à la base de données : 
    $db = dbConnexion();

    // Préparer la requête :
    $request = $db->prepare("SELECT * FROM hotels");

    try {
        // Executer la requête :
        $request->execute();
        // Récuperer le resultat et convertir en tableau :
        return $listHotel = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $error) {
        $error->getMessage();
    }

}


function roomList()
{
    // Se connecter à la base de données : 
    $db = dbConnexion();

    // Préparer la requête :
    $request = $db->prepare("SELECT * FROM rooms");

    // Executer la requête :
    try {
        $request->execute();
        // Récuperer le résultat de la requête et la convertir en tableau :
        return $roomList = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $error) {
        $error->getMessage();
    }
}

function bookList($idUser)
{
    // Se connecter à la base de données : 
    $db = dbConnexion();

    // Préparer la requête :
    $request = $db->prepare("SELECT * FROM bookings WHERE user_id= ? AND booking_state = ?");

    // Executer la requête :
    try {
        $request->execute(array($idUser, "in progress"));
        // Récuperer le résultat de la requête et la convertir en tableau :
        return $bookList = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $error) {
        $error->getMessage();
    }
}

?>