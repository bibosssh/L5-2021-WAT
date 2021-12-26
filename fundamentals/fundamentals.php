<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Web Applications and Technologies</title>
    <link type="text/css" rel="stylesheet" href="main.css" />
 </head>
 <body>
 <header>
    <h1>Bibash Chaudhary 77261081</h1> 
 </header>
 
    <section id="container">
        <h1>Fundamentals of PHP</h1>    
        <?php
            echo "<h2>Selection</h2>";
            $day = date('l'); //that is a lower case L
            echo 'It\'s '.$day; 
            echo"<br/>";  
            if ($day == "Wednesday") {
                echo "It's midweek.";
            } 
            else echo"It's not midweek.";
            echo "<br/>";
            
            date_default_timezone_set('Asia/Kathmandu');
            $hour = date('H:i a');
            echo "The current time is ".$hour;
            echo "<br/>";
            if ($hour < 12) {
                echo "Good Morning!";
            }
            elseif ($hour>=18) {
                echo "Good Night!";
            }
            else echo"Good Afternoon!";
            echo"<br/>";
        ?>

        <?php
            $password = 'password';
            if (strlen($password)>4 && strlen($password)<10) {
                echo "Password length is valid. ";

                if ($password == 'password' || $password == 'username') {
                    echo "The password is valid.";
                }
                else echo"The password is invalid.";
            }
            else echo "Password length is invalid.";

            echo"<br/>";
        ?>

        <?php
            $price = 25;
            $age = 15;
            $membership = true;

            echo "<br/>Initial Ticket Price: $price <br/>";
            echo "Age: $age <br/>";
            if($membership == true){
                $member = 'Yes';
            }
            echo"Member: $member <br/>";

            $finalPrice = $price - ((35/100) * $price);
            echo"Final Ticket Price: $finalPrice <br/>";
        ?>

        <?php
            echo"<h2>Arrays</h2>";
            echo"<h3>Simple Arrays</h3>";

            $products = array('t-shirt', 'cap', 'mug');
            print_r($products);
            echo"<br/>";

            $products[1] = 'shirt';
            print_r($products);
            echo"<br/>";

            array_push($products, 'skirt');
            print_r($products);
            echo"<br/>";

            echo"The item at index[2] is: $products[2] <br/>";
            echo"The item at index[3] is: $products[3] <br/>";

            echo"<h3>Associative Arrays</h3>";

            $customer = array('CustID'=>12,'CustName'=>'Sarah', 'CustAge'=>23, 'CustGender'=>'F');
            print_r($customer);
            echo"<br/>";

            $customer['CustAge'] = 32;
            $customer['CustEmail']='sarah@gmail.com';
            print_r($customer);
            echo"<br/>";

            echo"The Item at index[CustName] is: $customer[CustName]<br/>";
            echo"The Item at index[CustEmail] is: $customer[CustEmail]<br/>";

            echo"<h3>Multi-Dimensional Arrays</h3>";

            $stock = array(
                'id1'=>array('description'=>'t-shirt', 'price'=>9.99, 'stock'=>100, 'color'=>array('blue', 'green', 'red')),
                'id2'=>array('description'=>'cap', 'price'=>4.99, 'stock'=>50, 'color'=>array('blue', 'black', 'grey')),
                'id3'=>array('description'=>'mug', 'price'=>6.99, 'stock'=>30, 'color'=>array('yellow', 'green', 'pink'))
            );
            
            echo"This is my order<br/>";
            echo $stock['id1']['color'][1]." ". $stock['id1']['description']. "<br/>";
            echo "Price: £".$stock['id1']['price']."<br/>";
            echo $stock['id2']['color'][2]." ".$stock['id2']['description']."<br/>";
            echo "Price: £".$stock['id2']['price']."<br/>";
        ?>

        <?php
            echo"<h2>Loops</h2>";
            echo"<h3>While Loop</h3>";

            $counter = 1;

            while ($counter<6) {
                echo"count=$counter <br/>";
                $counter++;
            }

            echo"<br/>";

            echo"<table border=1px>";
            echo"<thead>";
            echo"<th>Quantity</th>";
            echo"<th>Price</th>";
            echo"</thead>";
            echo"<tbody>";
            $shirtPrice = 9.99;
            $counter = 1;

            while($counter<=10){
                $total = $counter * $shirtPrice;
                echo"<tr>";
                echo"<td>$counter</td>";
                echo"<td>£". number_format($total,2). "</td>";
                echo"<tr>";
                $counter++;
            }
            echo"</tbody>";
            echo"</table>";
        ?>

        <?php
            echo "<h3>For Loop</h3>";

            $names = array('Peter', 'Kat', 'Laura', 'Ali', 'Popacatapetal');
            for ($i=0; $i < 5; $i++) { 
               echo $names[$i]."<br/>";
            }

            echo "<h3>Foreach Loop</h3>";

            $names = array ('Peter'=>'c123456', 'Kat'=>'c654321', 'Laura'=>'c987654', 'Ali'=>'c654987', 'Popacatapetal'=>'c765984');
            foreach ($names as $name => $id) {
                echo "Name: ".$name." ID: ".$id."<br/>";
            }
        ?>

        <?php
            echo"<br/>";
            $city = array('Peter'=>'LEEDS','Kat'=>'bradford','Laura'=>'wakeFIeld');
            print_r($city);
            echo"<br/>";

            foreach ($city as $name => $college) {
                $college = strtolower($college);
                $college = ucfirst($college);
                $city[$name] = $college;
            }
            print_r($city);
        ?>
    </section>
    <footer> 
        <small> <a href="../watIndex.html">Home</a></small>
    </footer>
</body>
</html>