<?php
session_start();
include_once "../inc/header.php";
// Si $_SESSION["role"] est definie mais que sa valeur est differente de "admin" (si c'est un utilisateur lambda qui tente d'aller sur cette page il sera redirigé vers la page de connexion)
if (!isset($_SESSION['role']) || $_SESSION["role"] != "admin") {
    header("Location: http://localhost/hotel/login.php");
}
?>
<div class="d-flex w-50 m-auto justify-content-around flex-wrap">
    <div class="card m-2" style="width: 18rem;">
        <i class="fa-solid fa-plus fs-2 text-center"></i>
        <div class="card-body">
            <h5 class="card-title">Ajout hotel</h5>
            <p class="card-text">Cliquez ici pour ajouter un hotel</p>
            <a href="add_hotel.php" class="btn btn-primary">Ajouter un hotel</a>
        </div>
    </div>
    <div class="card m-2" style="width: 18rem;">
        <i class="fa-solid fa-plus fs-2 text-center"></i>
        <div class="card-body">
            <h5 class="card-title">Ajouter chambres</h5>
            <p class="card-text">Cliquez ici pour ajouter une chambre</p>
            <a href="add_room.php" class="btn btn-primary">Ajouter une chambre</a>
        </div>
    </div>
    <div class="card m-2" style="width: 18rem;">
        <i class="fa-solid fa-list fs-2 text-center"></i>
        <div class="card-body">
            <h5 class="card-title">Ajouter des réservations</h5>
            <p class="card-text">Cliquez ici pour la liste des réservations</p>
            <a href="#" class="btn btn-primary">Ajouter une réservation</a>
        </div>
    </div>

    <div class="card m-2" style="width: 18rem;">
        <i class="fa-solid fa-list fs-2 text-center"></i>
        <div class="card-body">
            <h5 class="card-title">Liste des hotels</h5>
            <p class="card-text">Cliquez ici pour la liste des hotels</p>
            <a href="hotel_list.php" class="btn btn-primary">Liste hotels</a>
        </div>
    </div>

    <div class="card m-2" style="width: 18rem;">
        <i class="fa-solid fa-list fs-2 text-center"></i>
        <div class="card-body">
            <h5 class="card-title">Liste des chambres</h5>
            <p class="card-text">Cliquez ici pour la liste des chambres</p>
            <a href="room_list.php" class="btn btn-primary">Liste des chambres</a>
        </div>
    </div>


</div>




<?php
include_once "../inc/footer.php";
?>