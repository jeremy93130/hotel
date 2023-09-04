<?php include_once("../inc/header.php"); ?>

<div class="container">
    <form action="../models/db_hotel.php" method="post">

        <div class="form-group">
            <label for="hotelName">Name : </label>
            <input type="text" class="form-control" id="hotelName" name="hotel_name">
        </div>

        <div class="form-group">
            <label for="location">Location :</label>
            <input type="text" class="form-control" id="location" name="location_hotel">
        </div>

        <div class="form-group">
            <label for="capacity">Capacity :</label>
            <input type="number" class="form-control" id="capacity" name="capacity_hotel">
        </div>

        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="add_hotel" value="submit">Add
            Hotel</button>
    </form>
</div>

<?php include_once("../inc/footer.php"); ?>