<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL</title>
</head>
<body>
    <form method="POST" action="insertRecord.php">
        <fieldset>
            <legend>Enter Customer Detail</legend>
            <label>First Name: </label>
            <input type="text" name="firstName"/> <br/>
            <label>Surname: </label>
            <input type="text" name="surname"> <br/>
            <label>Email: </label>
            <input type="text" name="email"> <br/>
            <label>Password: </label>
            <input type="password" name="password"> <br/>
            
            <label>Gender: </label>
            <select name="gender">
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select> <br/>

            <label>Age: </label>
            <input type="text" name="age"> <br/>

            <input type="submit" name="register">
        </fieldset>
    </form>

    <?php
        include 'selectRecord.php';
    ?>

    <footer> 
        <small> <a href="../watIndex.html">Home</a></small>
    </footer>
</body>
</html>