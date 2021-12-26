<?php
    include 'connection.php';
    $query = "SELECT * FROM products";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

    echo '<table>';
    echo '<thead>';
    echo '<th><b> Product Name </b></th>';
    echo '<th><b> Price </b></th>';
    echo '<th><b> Image </b></th>';
    echo '<th><b> Amend </b></th>';
    echo '<th><b> Delete </b></th>';
    echo '</thead>';
    echo '<tbody>';

    while ($row=mysqli_fetch_array($result)){
        echo '<tr>';
        echo '<td>'. $row['ProductName']. '</td>';
        echo '<td>'. $row['ProductPrice']. '</td>';
        echo '<td><img src="images/'. $row['ProductImageName']. '" height=70px /></td>';
        echo '<td><a href="amendProduct.php?id='. $row['ProductID'].'">Amend </a></td>';
        echo '<td><a href="deleteProduct.php?id='. $row['ProductID'].'">Delete</a><br/></td>';
        echo '</tr>';
        echo '<style>
                td {
                    border: 1px solid black;
                }
                table{
                    width: 500px;
                }
            </style>';
    }

    echo '</tbody>';
    echo '</table>';
?>