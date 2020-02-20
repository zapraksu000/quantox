<?php

function register() {

    if(isset($_POST['register'])) {

        global $conn;

        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $repeat = $_POST['repeat'];
    
        if($email && $name && $password && $repeat) {
    
            $query = "INSERT INTO user(email, name, password) VALUES ('$email', '$name', '$password')";
            $result = mysqli_query($conn, $query);
        
            if(!$result) {
                die ("neuspelo");
            } else {
                echo "uspesno uneto u bazu";
            }
    
        } else {
            echo "polja ne smeju biti prazna <br>";
        }
    
    }

}

function login() {

    if(isset($_POST['login'])) {

        global $conn;

        $email = $_POST['email'];
        $password = $_POST['password'];
    
        if ($email && $password) {
            $query = "SELECT * FROM user WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
    
            while($row = mysqli_fetch_array($result)) {
                $db_email = $row['email'];
                $db_name = $row['name'];
                $db_password = $row['password'];
            }
    
            if ($email == $db_email && $password == $db_password) {
                $_SESSION['user'] = $db_name;
                echo "<h3> Welcome " . $_SESSION['user'] . "!<h3>";
            } else {
                echo "Error logging you in (wrong email and/or password)";
            }
        } else {
            echo "polja ne smeju biti prazna <br>";
        }
    }

}

?>