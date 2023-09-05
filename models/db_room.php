<?php require_once("../inc/database.php");
session_start();

if (isset($_POST["add_room"])) {
    $hotel = htmlspecialchars($_POST["hotel"]);
    $roomNumber = htmlspecialchars($_POST["room_number"]);
    $roomPrice = htmlspecialchars($_POST["room_price"]);
    $person = htmlspecialchars($_POST["person"]);
    $category = htmlspecialchars($_POST["category"]);

    // Traitement de l'image :
    $imgName = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];

    $destination = $_SERVER["DOCUMENT_ROOT"] . '/hotel/assets/img/' . $imgName;

    if (move_uploaded_file($tmpName, $destination)) { // si l'image est bien chargée
        // se connecter à la base de données :
        $db = dbConnexion();

        // Préparer la requête :
        $request = $db->prepare("INSERT INTO rooms (room_number,price,room_img,persons,category,hotel_id) VALUES (?,?,?,?,?,?)");

        // Executer la requête : 
        try {
            $request->execute(array($roomNumber, $roomPrice, $imgName, $person, $category, $hotel));
            //Redirection vers list_room.php : 
            header("Location : http://localhost/hotel/admin/list_room.php");
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }
}