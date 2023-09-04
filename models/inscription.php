<?php
include_once("../inc/database.php");

if (isset($_POST['submit'])) {
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

    $mdpHash = password_hash($password, PASSWORD_DEFAULT);

    // se connecter à la base de données : 

    $db = dbConnexion();

    // préparer la requete : 

    $request = $db->prepare("INSERT INTO users (last_name,first_name,email,password,birthday,address,phone_number,gender) VALUES (?,?,?,?,?,?,?,?) ");

    // executer la requete : 

    try {
        $request->execute(array($lastName, $firstName, $emailAddress, $mdpHash, $birthday, $address, $phone, $gender));
        header("Location: ../login.php");
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}