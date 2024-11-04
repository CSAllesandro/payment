<?php
session_start();
include 'functions.php';
$pdo = pdo_connect_mysql();

$stmt = $pdo->query('SELECT * FROM products');
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Products</h1>
    <div class="products">
        <?php foreach ($products as $product): ?>
            <div class="product">
                <h2><?= $product['title'] ?></h2>
                <p><?= $product['description'] ?></p>
                <p>Price: $<?= $product['price'] ?></p>
                <form action="cart.php" method="post">
                    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                    <input type="number" name="quantity" value="1" min="1" max="<?= $product['quantity'] ?>">
                    <input type="submit" value="Add to Cart">
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>