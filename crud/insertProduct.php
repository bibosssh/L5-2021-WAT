<?php
    if (isset($_POST['productRegister'])) {
        $productName = trim($_POST['productName']);
        $productPrice = trim($_POST['productPrice']);
        $imageName = trim($_POST['imageName']);

        if(filter_var($productPrice, FILTER_VALIDATE_FLOAT) || filter_var($productPrice, FILTER_VALIDATE_INT)) {
            $query = "INSERT INTO products(ProductName, ProductPrice, ProductImageName) 
                      VALUES ('$productName', '$productPrice', '$imageName')";

            include ('connection.php');
            $insert = mysqli_query($connection, $query) or die(mysqli_error($connection));
            if($insert) {
                header("Location: crud.php?insert=Product Added Successfully!");
            }

        }
        else {
            echo 'Invalid Price';
        }
    }
?>