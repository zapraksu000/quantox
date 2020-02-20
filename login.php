<?php session_start(); ?>
<?php include "includes/header.php"; ?>
<?php include "includes/functions.php"; ?>
<?php include "includes/navbar.php"; ?>
    <title>Login</title>

<?php

login();

?>

<div class="container">
<form action="login.php" method="post">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-primary" name="login">Submit</button>
</form>
</div>


<?php include "includes/footer.php"; ?>