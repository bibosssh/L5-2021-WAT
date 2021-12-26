<?php
    session_start();

    if (isset($_SESSION['user'])) {
        echo "Welcome ".$_SESSION['user']."<br/>";
        echo "<a href='protected.php'>Protected</a><br/>";
        echo "<a href='logout.php'>Logout</a>";
    }
    else {
        echo $_SESSION['error']."<br/>";
        include 'loginform.php';
        
    }
?>

<footer> 
    <small> <a href="../watIndex.html">Home</a></small>
</footer>