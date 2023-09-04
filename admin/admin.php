<?php
include_once "../inc/header.php";
?>
<div class="d-flex container justify-content-around">
    <div class="card" style="width: 18rem;">
        <i class="fa-solid fa-plus"></i>
        <div class="card-body">
            <h5 class="card-title">Ajout hotel</h5>
            <p class="card-text">Cliquez ici pour ajouter un hotel</p>
            <a href="add_hotel.php" class="btn btn-primary">Ajouter un hotel</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <i class="fa-solid fa-plus"></i>
        <div class="card-body">
            <h5 class="card-title">Ajouter chambres</h5>
            <p class="card-text">Cliquez ici pour ajouter une chambre</p>
            <a href="add_room.php" class="btn btn-primary">Ajouter une chambre</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <i class="fa-solid fa-list"></i>
        <div class="card-body">
            <h5 class="card-title">Ajouter des réservations</h5>
            <p class="card-text">Cliquez ici pour la liste des réservations</p>
            <a href="#" class="btn btn-primary">Ajouter une réservation</a>
        </div>
    </div>

</div>




<?php
include_once "../inc/footer.php";
?>