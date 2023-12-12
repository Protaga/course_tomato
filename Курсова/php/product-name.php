<?php
    $conn = new mysqli('localhost', 'ADMIN', 'ADMIN', 'ADMIN');

    $sql = "SELECT name FROM products WHERE id = $productId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["name"];
        }
    } 
    
    $conn->close();
?>
