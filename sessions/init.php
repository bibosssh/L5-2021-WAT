<?php
    session_start();
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "77261081";
    $connection = mysqli_connect($host, $dbuser, $dbpass, $dbname)
    or die("Unable to connect to datbase.");
?>