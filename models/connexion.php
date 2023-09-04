<?php

include_once("../inc/database.php");

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];


    // etablir la connexion avec la base de données : 

    $db = dbConnexion();

    // préparer la requête : 

    $request = $db->prepare("SELECT * FROM users WHERE email= ?");

    // execute la requête : 

    try {
        $request->execute(array($email));

        // Récuperer le résultat de la requête pour le convertir en tableau : fetch
        // Le résultat d'une requête est toujours un objet

        $userInfo = $request->fetch(PDO::FETCH_ASSOC);

        if (empty($userInfo)) {
            echo "Utilisateur inconnu";
        } else {
            if (password_verify($password, $userInfo["password"])) {
                if ($userInfo["role"] == "admin") {
                    header("Location : admin/admin.php");
                } else {
                    header("Location : ../user_home.php");
                }
            } else {
                echo "Mot de passe inconnu";
            }
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

?>