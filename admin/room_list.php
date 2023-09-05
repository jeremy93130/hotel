<?php include_once('../inc/header.php');
require_once("../models/fonctions.php");
$listRoom = roomList();

?>

<table class="table text-center">
    <thead>
        <tr>
            <th>Id Room :</th>
            <th>Room Number :</th>
            <th>Room Price/Night :</th>
            <th>Room img :</th>
            <th>Room Category :</th>
            <th>Room Capacity :</th>
            <th>Hotel Id :</th>
            <th>Availability :</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listRoom as $room) { ?>
            <tr>
                <td>
                    <?= $room["id_room"]; ?>
                </td>
                <td>
                    <?= $room["room_number"]; ?>
                </td>
                <td>
                    <?= $room["price"]; ?>
                </td>
                <td>
                    <?= $room["room_img"]; ?>
                </td>
                <td>
                    <?= $room["category"]; ?>
                </td>
                <td>
                    <?= $room["persons"]; ?>
                </td>
                <td>
                    <?= $room["hotel_id"]; ?>
                </td>
                <td>
                    <?= $room["room_state"]; ?>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>

<?php include_once('../inc/footer.php'); ?>