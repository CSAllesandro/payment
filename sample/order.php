<?php
session_start();
include 'functions.php';
$pdo = pdo_connect_mysql();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process the order
    $cart_items = $_SESSION['cart'] ?? [];
    $payment_method = $_POST['payment_method'] ?? '';
    $delivery_method = $_POST['delivery_method'] ?? '';

    // Insert order into the database
    $stmt = $pdo->prepare("INSERT INTO orders (cart_items, payment_method, delivery_method) VALUES (?, ?, ?)");
    $stmt->execute([json_encode($cart_items), $payment_method, $delivery_method]);

    // Clear the cart
    $_SESSION['cart'] = [];
    echo "<h2>Order placed successfully!</h2>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Now</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Order Confirmation</h1>
    <form action="order.php" method="post">
        <h2>Select Payment Method:</h2>
        <input type="radio" name="payment_method" value="credit_card" required> Credit Card<br>
        <input type="radio" name="payment_method" value="cash_on_delivery" required> Cash on Delivery<br>

        <h2>Select Delivery Method:</h2>
        <input type="radio" name="delivery_method" value="vehicle_delivery" required> Vehicle Delivery<br>
        <input type="radio" name="delivery_method" value="bike_delivery" required> Bike Delivery<br>

        <input type="submit" value="Place Order">
    </form>
</body>
</html>