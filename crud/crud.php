<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h2>Manage Products</h2>

    <?php
        include 'displayProducts.php';

        if (isset($_GET['delete'])) {
            echo '<br/><b>'.$_GET['delete'].'</b><br/>';
        }

        if (isset($_GET['insert'])) {
            echo '<br/><b>'.$_GET['insert'].'</b><br/>';
        }

        echo '<br/>';
    ?>

    <form method="POST" action="insertProduct.php">
        <fieldset>
            <legend>Enter New Product Details</legend>
            <label>Product Name: </label><br/>
            <input type="text" name="productName"/> <br/><br/>
            <label>Price: </label><br/>
            <input type="text" name="productPrice"/> <br/><br/>
            <label>Image Filename: </label><br/>
            <input type="text" name="imageName"/><br/><br/>
            <input type="submit" name="productRegister"/>
            <input type="reset" name="clear" value="Clear"/><br/><br/>
        </fieldset>
    </form>

    <footer> 
        <small> <a href="../watIndex.html">Home</a></small>
    </footer>
</body>
</html>