<?php require_once("../inc/database.php");



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

?>