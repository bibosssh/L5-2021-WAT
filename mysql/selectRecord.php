<?php
    //Make connection to database
    include 'connection.php';
    
    //Display heading
    echo '<h2>Select ALL from the Customer Table</h2>';
    //run query to select all records from customer table
    $query="SELECT * FROM Customer";
    //store the result of the query in a variable called $result
    $result=mysqli_query($connection, $query); 
    //Use a while loop to iterate through your $result array and display
    //the first name, last name and email for each record
    while ($row=mysqli_fetch_assoc($result)){
        echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';
    }

    echo '<h2>Select ALL from the Customer Table with Age>22</h2>';
    $query1="SELECT * FROM Customer WHERE Age>22";
    $result1=mysqli_query($connection, $query1); 
    while ($row=mysqli_fetch_assoc($result1)){
        echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br />';
    }

    echo '<h2>Select Females from the Customer Table with Age>=22</h2>';
    $query2="SELECT * FROM Customer WHERE Age>=22 AND Gender='F' ";
    $result2=mysqli_query($connection, $query2); 
    while ($row=mysqli_fetch_assoc($result2)){
        echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br />';
    }

    echo '<h2>Select Males from the Customer Table list by age descending</h2>';
    $query3="SELECT * FROM Customer WHERE Gender='M' ORDER BY Age DESC";
    $result3=mysqli_query($connection, $query3); 
    while ($row=mysqli_fetch_assoc($result3)){
        echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br />';
    }

    echo '<h2>Select All from the Customer Table with "a" in the first name</h2>';
    $query4="SELECT * FROM Customer WHERE FirstName LIKE '%a%' ";
    $result4=mysqli_query($connection, $query4); 
    while ($row=mysqli_fetch_assoc($result4)){
        echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br />';
    }
?>