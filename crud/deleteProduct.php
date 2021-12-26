<?php
    if (isset($_GET['id'])){
        $id = trim($_GET['id']);
        include('connection.php');
        $delete = "DELETE FROM products WHERE ProductID = $id";
        mysqli_query($connection, $delete) or die (mysqli_error($connection));

        if (mysqli_affected_rows($connection) > 0) {
            header ("Location: crud.php?delete=Product Deleted Successfully!");
        } 
        else {
            // print error message
            echo "Error in query: $query. " . mysqli_error($connection);
            exit ;
        }
        mysqli_close($connection);
           
    }
?>