<?php include_once('./inc/header.php'); ?>

<div class="container">
    <form method="post" action="/models/inscription.php">
        <div class="mb-3">
            <label for="gendered" class="form-label">Civility</label>
            <select name="gender" id="gendered">
                <option value="sex">Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Others</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="firstName">
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" aria-describedby="emailHelp" name="lastName">
        </div>

        <div class="mb-3">
            <label for="emailaddress" class="form-label">Email address</label>
            <input type="email" class="form-control" id="emailaddress" aria-describedby="emailHelp" name="emailAddress">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="mb-3">
            <label for="phonetel" class="form-label">Phone</label>
            <input type="tel" class="form-control" id="phonetel" aria-describedby="emailHelp" name="phone">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" aria-describedby="emailHelp" name="address">
        </div>

        <div class="mb-3">
            <label for="birthdaydate" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="birthdaydate" aria-describedby="emailHelp" name="birthday">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>



<?php include_once('./inc/footer.php'); ?>