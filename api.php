<?php
require_once('database.php');
$price = $_GET['price'];
$sql = "SELECT * FROM barham WHERE product_price = $price";
$anajm = mysqli_query($connect, $sql);
while($api = mysqli_fetch_assoc($anajm)) {
    $data[] = $api;
}

echo json_encode($data);

?> 