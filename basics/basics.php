<?php
    echo "Name: Bibash Chaudhary <br/> ID: 77261081 <br/>"; //My First PHP
    echo "\"most programmers say it's better to use 'echo' rather than 'print'\" says who?"
?>

<?php
    echo "<h2> Variables </h2>";
    $name = 'David';
    $age = 12;

    echo "Hi my name is ".$name." and I am ".$age." years old <br/>";
    echo "Mi nombre es $name y tengo $age anos de edad";
?>

<?php
    echo '<h2>Functions</h2>';

    //gettype()returns the data type of the variable
    echo gettype($name);
    echo '<br />';
    //strlen() returns string length
    echo strlen($name);
    echo '<br />';
    //strtoUpper()returns the string into uppercase
    echo strtoUpper($name);
?>

<?php
    echo "<h2>Arithmetic</h2>";

    $num1 = 9;
    $num2 = 12;

    echo "num1 = 9 <br/> num2 = 12 <br/>";
    echo "num1 x num2 = ".$num1*$num2;
    echo "<br/>num1 as percentage of num2 = ".(($num1/$num2)*100)."%";
    echo "<br/>num2 divided by num1 = ".number_format($num2/$num1). " remainder ". ($num2 % $num1);
?>

<?php
    $height = 1.8;

    echo "<br/>Name: $name <br/> Age: $age <br/>";
    echo "Height in Meters: $height";
    echo "<br/>Height in Feet and inches: ". floor((($height*100)/2.54)/12)."ft ". ((($height*100)/2.54)%12)."ins";
?>

<footer> 
    <small> <a href="../watIndex.html">Home</a></small>
</footer>