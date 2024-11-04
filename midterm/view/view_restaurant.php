<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Restaurant Dashboard</title>
</head>
<body>
    <header>
        <h1>Welcome to Our Restaurant</h1>
    </header>
    
    <main>
        <section>
            <h2>Menu</h2>
            <ul>
                <?php foreach ($menu->getItems() as $item): ?>
                    <li><?php echo $item['name'] . ' - $' . number_format($item['price'], 2); ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section>
            <h2>Current Orders</h2>
            <ul>
                <?php foreach ($order->getOrders() as $item): ?>
                    <li><?php echo $item['name'] . ' - $' . number_format($item['price'], 2); ?></li>
                <?php endforeach; ?>
            </ul>
            <p>Total: $<?php echo number_format($order->getTotal(), 2); ?></p>
        </section>

        <section>
            <h2>Reservations</h2>
            <ul>
                <?php foreach ($reservation->getReservations() as $res): ?>
                    <li><?php echo $res['name'] . ' - ' . $res['time'] . ' - Party of ' . $res['partySize']; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Our Restaurant</p>
    </footer>
</body>
</html>