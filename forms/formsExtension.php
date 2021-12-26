<!DOCTYPE html>
<html lang = "en">
<head>
    <meta character = "UTF-8">
    <meta http-equiv="X-UA-Compatible" container="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form Extension </title>
</head>    
<body>

<?php
        if (isset($_POST['submit']))
        {
            if(!empty(trim($_POST['username'])))
            {
                $user = $_POST['username'];
            }

            if(!empty(trim($_POST['email'])))
            {
                $email = $_POST['email'];
            }

            if(isset($_POST['size']) && trim($_POST['size']) == '')
            {
                $size = 'No_Size';
            }
            else {
                $size = $_POST['size'];
            }

            if(trim($_POST['topping']) == '--select--')
            {
                $topping = 'No_Topping';
            }
            else {
                $topping = $_POST['topping'];
            }

            if(isset($_POST['extras']))
            {
                $extras = $_POST['extras'];
            }
            else {
                $extras = 'No_Extras';
            }   
            
        }
    ?>

    <h2>Order Form</h2>
    <p>Please fill out this form to place your order.</p>
    <form action="" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend> Enter your login details </legend>
            <label> User Name: </label>
            <input type="text" name="username" placeholder="Username" value="<?php if (isset($user)) echo $user; ?>" />

            <label>Email: </label>
            <input type="email" name="email" placeholder="you@email.com" value="<?php if (isset($email)) echo $email; ?>" />
        </fieldset>

        <fieldset>
            <legend>Pizza Selection</legend>
            <label>Size: </label>
            <label><input type="radio" name="size" value="Small" <?php if(isset($size) && $size == 'Small') echo 'checked'; ?> />
            small</label>

            <label><input type="radio" name="size" value="Medium" <?php if(isset($size) && $size == 'Medium') echo 'checked'; ?> />
            medium</label>

            <label><input type="radio" name="size" value="Large" <?php if(isset($size) && $size == 'Large') echo 'checked'; ?> />
            large</label>

            <br><label>Topping: </label>
            <select name="topping">
                <option>--select--</option>
                <option value="Seafood" <?php if(isset($topping) && $topping == 'Seafood') echo 'selected'; ?>>Seafood</option>
                <option value="Fruit" <?php if(isset($topping) && $topping == 'Fruit') echo 'selected'; ?>>Fruit</option>
                <option value="Vegetable" <?php if(isset($topping) && $topping == 'Vegetable') echo 'selected'; ?>>Vegetable</option>
            </select>

            <br><label>Extras: </label>
            <label><input type="checkbox" name="extras[]" value="Parmesan" <?php if(isset($extras) && in_array("Parmesan",$extras)) echo "checked = 'checked'"; ?>  />Parmesan</label>
            <label><input type="checkbox" name="extras[]" value="Olivers" <?php if(isset($extras) && in_array("Olivers",$extras)) echo "checked='checked'"; ?> />Olivers</label>
            <label><input type="checkbox" name="extras[]" value="Capers" <?php if(isset($extras) && in_array("Capers",$extras)) echo "checked='checked'"; ?> />Capers</label>
        </fieldset>
        <input type="submit" name="submit" value="Submit"/>
        <input type="reset" name="reset" value="Clear" />
    </form>

    <?php
        if(isset($_POST['submit']))
        {
            echo "<h3>Thank you for your order:</h3>";

            echo "Customer ID: $user";
            echo "<br> Email: $email";
            echo "<br> Your order: $size $topping";
            echo "<br> Extra toppings:";
            foreach ($extras as $e) {
                echo " $e ";
            }
        }
    ?>

    <footer> 
        <small> <a href="forms.php">Back to Forms</a></small>
    </footer>
</body>
</html>