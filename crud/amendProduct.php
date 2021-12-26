<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM products WHERE ProductID=$id";
        include 'connection.php';
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        while ($row = mysqli_fetch_array($result)) {
            $oldProductID = $row['ProductID'];
            $oldProductName = $row['ProductName'];
            $oldProductPrice = $row['ProductPrice'];
            $oldImageName = $row['ProductImageName'];
        }
    
        echo "<form method='POST' action=''>";
        echo "<fieldset>";
        echo "<legend>Enter Product Details</legend>";
        echo "<input type='hidden' name='hideProductID' value='$oldProductID'/>";
        echo "<label>Product Name: </label>";
        echo "<input type='text' name='productName' value='$oldProductName'/> <br/><br/>";
        echo "<label>Price: </label>";
        echo "<input type='text' name='productPrice' value='$oldProductPrice'/> <br/><br/>";
        echo "<label>Image Filename: </label>";
        echo "<input type='text' name='imageName' value='$oldImageName'/>";
        echo "</fieldset><br/>";
        echo "<input type='submit' name='updateProduct' value='Update'/>";
        echo "<input type='reset' name='clear' value='Clear'/><br/><br/>";
        echo "</form>";
    }
    else {
        header("location: crud.php");
    }

    include 'updateProduct.php';
?>    