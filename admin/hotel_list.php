<?php
include_once("../inc/header.php");
require_once("../models/fonctions.php");
$listHotel = hotelList();
?>

<table class="table text-center">
    <thead>
        <tr>
            <th>Id Hotel :</th>
            <th>Hotel Name :</th>
            <th>Hotel Location :</th>
            <th>Hotel Capacity :</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listHotel as $hotel) { ?>
            <tr>
                <td>
                    <?= $hotel["id_hotel"]; ?>
                </td>
                <td>
                    <?= $hotel["hotel_name"]; ?>
                </td>
                <td>
                    <?= $hotel["location"]; ?>
                </td>
                <td>
                    <?= $hotel["capacity"]; ?>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>

<?php include_once('../inc/footer.php'); ?>