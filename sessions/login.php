<?php
    include 'init.php';

    if (isset($_POST['subLogin'])) {
        $username = trim($_POST['txtUser']);
        $password = trim($_POST['txtPass']);

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

        if ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['user'] = $username;
            header ('location: sessions.php');
        } 
        else {
            $_SESSION['error'] = 'User not recognised';
            header ('location: sessions.php');
        } 
    }
?>