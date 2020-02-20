<?php session_start(); ?>
<?php include "includes/header.php"; ?>
    <title>Home</title>
<?php include "includes/navbar.php"; ?>

<h3> Welcome <?php echo $_SESSION['user'] ?> <h3>

<?php include "includes/footer.php"; ?>