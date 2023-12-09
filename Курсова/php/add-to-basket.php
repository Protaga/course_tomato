<?php
$mysql = new mysqli('localhost', 'ADMIN', 'ADMIN', 'ADMIN');

$email = $_COOKIE['cookieEmail'];
$productId = $_GET['productId']; 

$productQuery = "SELECT id FROM products WHERE id = $productId";
$productResult = $mysql->query($productQuery);
$product = ($productResult->num_rows > 0) ? $productResult->fetch_assoc()['id'] : null;

$result = $mysql->query("SELECT * FROM `basket`
  WHERE `email` = '$email' AND `product` = '$product'");

$mysql->close();

$basket = $result->fetch_assoc();

if (empty($basket)) {
    $mysql = new mysqli('localhost', 'ADMIN', 'ADMIN', 'ADMIN');

    $insertQuery = "INSERT INTO `basket` (`email`, `product`) VALUES ('$email', '$product')";
    $result = $mysql->query($insertQuery);

    $mysql->close();

    header('Location: ../html/main.php');
} else {
    header('Location: ../html/profile.php');
}
?>
