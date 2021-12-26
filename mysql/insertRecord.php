<?php
    if (isset($_POST['register'])) {
        include ('connection.php');

        $firstname = $_POST['firstName'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];

        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if(filter_var($age, FILTER_VALIDATE_INT)) {
                $query = "INSERT INTO Customer (FirstName, LastName, Email, Password, Gender, Age) VALUES 
                ('$firstname', '$surname', '$email', '$password' , '$gender', '$age')";

                $qryconn = mysqli_query($connection, $query) or die(mysqli_error($connection));

                if($qryconn) {
                    echo "<b>Data inserted successfully</b>";
                }
            }
            else {
                echo "Age must be in number.";
            }
        }
        else {
            echo "$email is not the valid email address";
        }
        // echo $query;
        // exit();
    }
?>