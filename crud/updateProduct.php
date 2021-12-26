<?php
    if (isset($_POST['updateProduct'])) {
        include 'connection.php';

        $ProductID = $_POST['hideProductID'];
        $newProductName = $_POST['productName'];
        $newProductPrice = $_POST['productPrice'];
        $newImageName = $_POST['imageName'];
    
        $query = "UPDATE products SET ProductName='$newProductName', ProductPrice='$newProductPrice', ProductImageName='$newImageName'
                  WHERE ProductID=$ProductID";

        $update = mysqli_query($connection, $query) or die(mysqli_error($connection));
        if ($update) {
            header("location: crud.php");
        }
    }
?>