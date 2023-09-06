<?php session_start();
require_once("./models/fonctions.php");
include_once("./inc/header.php");
$userBookList = bookList($_SESSION["id_user"]);
$price = 0;
?>

<div class="container">

    <table class="table text-center">
        <thead>
            <tr>
                <th>Id Reservation :</th>
                <th>Date d'arrivée :</th>
                <th>Date de départ :</th>
                <th>Prix/nuit</th>
                <th>Etat de la réservation :</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userBookList as $book) {
                $price += $book["booking_price"]; ?>
                <tr>
                    <td>
                        <?= $book["id_booking"]; ?>
                    </td>
                    <td>
                        <?= $book["booking_start_date"]; ?>
                    </td>
                    <td>
                        <?= $book["booking_end_date"]; ?>
                    </td>
                    <td>
                        <?= $book["booking_price"]; ?>
                    </td>
                    <td>
                        <?= $book["booking_state"]; ?>
                    </td>
                    <td>
                        <a class="btn btn-warning"
                            href="./models/db_booking.php?id_book=<?= $book['id_booking']; ?>">Cancel</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td>
                    Total de vos reservations:
                </td>
                <td colspan="5" class="bg-warning">
                    <?= $price ?> €
                </td>
            </tr>
        </tfoot>
    </table>
</div>

<?php include_once("./inc/footer.php"); ?>