<?php
session_start();
include_once('./inc/header.php');
require_once("./models/fonctions.php");
$roomList = roomList();
?>

<div class="container d-flex flex-wrap">
    <?php foreach ($roomList as $room) { ?>
        <div class="card" style="width: 18rem;">
            <div class="img_room">
                <img src="./assets/img/<?= $room["room_img"]; ?>" class="card-img-top" alt="image">
            </div>
            <div class="card-body text-center">
                <p class="card-text">
                    <?= $room['price']; ?> €
                </p>
                <p class="card-text">
                    <?= $room['category']; ?>
                </p>
                <p class="card-text">
                    <?= $room['persons']; ?> Persons
                </p>
                <a href="booking.php?room=<?= $room["id_room"] ?> &price=<?= $room['price'] ?>" class="btn btn-info">Book
                    this room</a>
            </div>
        </div>
    </div>
<?php } ?>

<?php include_once('./inc/footer.php'); ?>