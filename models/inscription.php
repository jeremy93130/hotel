<?php if (isset($_POST['submit'])) {
    // Récuperer les infos saisies par le user 
    $gender = htmlspecialchars($_POST['gender']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $firstName = htmlspecialchars($_POST['firstName']);
    $emailAddress = htmlspecialchars($_POST['emailAddress']);
    $password = htmlspecialchars($_POST['password']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $birthday = htmlspecialchars($_POST['birthday']);


    // Crypter le mdp : 

    password_hash($password, PASSWORD_DEFAULT);

    // se connecter à la base de données
}