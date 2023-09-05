<?php include_once("./inc/header.php");
session_start();
?>

<div class="container">
    <form action="./models/db_booking.php" method="post">
        <input type="text" name="id_room" value="<?= $_GET["room"]; ?>" hidden>
        <input type="text" name="price" value="<?= $_GET["price"]; ?>" hidden>
        <div class="form-group">
            <label>Start Date</label>
            <input type="date" class="form-control" name="start_date">
        </div>

        <div class="form-group">
            <label>End Date</label>
            <input type="date" class="form-control" name="end_date">
        </div>

        <button type="submit" class="btn btn-primary mt-5 mb-5" name="book" value="submit">Book this room</button>
    </form>
</div>


<?php include_once("./inc/footer.php"); ?>