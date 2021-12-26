<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <h1>Processing Input from HTML Forms</h1>

    <?php
        if (isset($_POST['loginSubmit'])) {
            $email = $_POST['txtEmail'];
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            $password = $_POST['txtPass'];
            
            if(!empty($email)){
                echo "<b>Email: ".$email."  Password: ".$password."</b><br/>";
            }
            else{
                echo "<b>Email must not be empty </b><br/>";
            }
        }
        
        echo "<br/>";
    ?>

    <?php
        if (isset($_POST['commentSubmit'])){
            $email = $_POST['email'];
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            $comment = $_POST['comment'];
            if (isset($_POST['chkConfirm'])){
                $confirm='Agreed<br />';
            }
            else{
                $confirm='Not Agreed<br />';
            }
            if(!empty($email)){
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<br/>Email: ".$email."<br/>";
                    echo "Comments: ".$comment."<br/>";
                    echo "Confirm: ".$confirm."<br/>";
                }
                else {
                    echo "$email is not a vadid email address";
                }
                
            }
            else{
                echo "Email must not be empty <br/>";
            }
        }
    ?>

    <h2>Login Form using GET</h2>
    <form method="POST" action="">
        <fieldset>
            <legend> Login </legend>
            <label for="email">Email: </label>
            <input type="text" name="txtEmail" value="<?php if(isset($_POST['txtEmail'])) echo $_POST['txtEmail']; ?>"/><br />
            <label for="passwd">Password: </label>
            <input type="password" name="txtPass" /><br />
            <input type="submit" value="Submit" name="loginSubmit" />
            <input type="reset" value="Clear" />
        </fieldset>
    </form>

    <h2>More Form Handling</h2>
    <form method="POST" action="">
        <fieldset>
            <legend>Comments</legend>
            <label>Email: </label>
            <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"/><br />
            <textarea rows="4" cols="50" name="comment"><?php if(isset($_POST['comment'])) echo $comment ?></textarea><br />
            <label>Click to Confirm: </label>
            <input type="checkbox" name="chkConfirm"><br />
            <input type="submit" value="Submit" name="commentSubmit"/>
            <input type="reset" value="Clear" />
        </fieldset>
    </form>

    <h2>Tax Calculator</h2>
    <form method="POST" action="">
        <fieldset>
            <legend>Without TAX calculator</legend>
            <label>After Tax Price: </label>
            <input type="text" name="afterPrice">
            <label>Tax Rate: </label>
            <input type="text" name="rate">
            <input type="submit" name="taxSubmit">
            <input type="reset" name="taxReset">
        </fieldset>
    </form>

    <?php
        if (isset($_POST['taxSubmit'])) {
            $afterPrice = $_POST['afterPrice'];
            $rate = $_POST['rate'];

            $pattern =  '/^\d+(:?[.]\d{2})$/';

            if ( ( (preg_match($pattern, $afterPrice)) && (preg_match($pattern, $rate)) ) ||
                ( (filter_var($afterPrice, FILTER_VALIDATE_INT)) && (filter_var($rate, FILTER_VALIDATE_INT)) ) ||
                ( (preg_match($pattern, $afterPrice)) && (filter_var($rate, FILTER_VALIDATE_INT)) ) ||
                ( (filter_var($afterPrice, FILTER_VALIDATE_INT)) && (preg_match($pattern, $rate)) ) ) {

                $beforePrice = (100*$afterPrice)/(100+$rate);
                $beforePrice = number_format($beforePrice, 2);
                echo "Price before tax = £$beforePrice";
            }
            else {
                echo "invalid After Tax Price or Tax Rate";
            }
        }
    ?>

    <h1>Passing Data Appended to an URL</h1>
    <h2>Pick a category</h2>
    <a href="forms.php?cat=Films">Films</a>
    <a href=" forms.php?cat=Books">Books</a>
    <a href=" forms.php?cat=Music">Music</a>

    <?php
        if (isset($_GET['cat'])) {
            echo "<br/><b>The category chosen is </b>"."<b>".$_GET['cat']."</b>";
        }
    ?>

    <h2><b><a href="formsExtension.php">Extension Exercise</a></b></h2>

    <footer> 
        <small> <a href="../watIndex.html">Home</a></small>
    </footer>
</body>
</html>
