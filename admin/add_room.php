<?php
include_once("../inc/header.php");
require_once("../models/fonctions.php");
$listHotel = hotelList();
?>

<div class="container">
    <form method="post" action="../models/db_room.php" enctype="multipart/form-data">
        <div class="form-group">
            <label class="form-label">Hotel :</label>
            <select name="hotel" class="form-control">
                <option value="choose">Choose Hotel</option>
                <?php foreach ($listHotel as $hotel) { ?>
                    <option value="<?= $hotel["id_hotel"] ?>"> <?= $hotel["hotel_name"]; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label class="form-label">Room Number :</label>
            <input type="text" class="form-control" name="room_number" required>
        </div>

        <div class="form-group">
            <label class="form-label">Room Price : </label>
            <input type="text" class="form-control" name="room_price" required>
        </div>

        <div class="form-group">
            <label class="form-label">Persons :</label>
            <input type="number" class="form-control" name="person" required>
        </div>

        <div class="form-group">
            <label class="form-label">Category :</label>
            <select name="category" class="form-control">
                <option value="">Choose category</option>
                <option value="classic">Classic</option>
                <option value="vip">VIP</option>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label">Photo :</label>
            <input type="file" class="form-control" name="image">
        </div>

        <button type="submit" class="btn btn-primary mt-4" name="add_room">Add room</button>
    </form>
</div>

<?php include_once("../inc/footer.php"); ?>