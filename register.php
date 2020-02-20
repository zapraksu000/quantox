<?php include "includes/header.php"; ?>
<?php include "includes/functions.php"; ?>
<?php include "includes/navbar.php"; ?>
    <title>Register</title>

<?php

register();

?>

<div class="container">
<form action="register.php" method="post">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
    <div class="form-group">
        <label for="repeat">Repeat password</label>
        <input type="password" class="form-control" name="repeat" placeholder="Repeat password">
    </div>
    <button type="submit" class="btn btn-primary" name="register">Submit</button>
</form>
</div>

<?php include "includes/footer.php"; ?>