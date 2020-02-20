<?php

$conn = mysqli_connect('localhost','root','','quantox');
if($conn) {
    // echo "povezano s bazom";
} else {
    die("nije povezano s bazom");
}

?>