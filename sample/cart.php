<?php
session_start();
include 'functions.php';
$pdo = pdo_connect_mysql();

if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Add to cart logic
    $_SESSION['cart'][$product_id] = $quantity;
}

$cart_items = $_SESSION['cart'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Your Cart</h1>
    <form action="order.php" method="post">
        <table>
            <tr>
                <th>Product ID</th>
                <th>Quantity</th>
            </tr>
            <?php foreach ($cart_items as $id => $qty): ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $qty ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <input type="submit" value="Order Now">
    </form>
</body>
</html>