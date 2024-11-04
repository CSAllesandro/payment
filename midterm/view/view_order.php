<?php include('../classes/order.php'); ?>
<?php $transact = new Orders(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <table class='table table-hover' border='1'>
        <thead>
            <th>No</th>
            <th>Data</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Sample</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Sample</td>
            </tr>
        </tbody>
    </table>
    <h1><?php $transact->processTransaction() ?></h1>
</body>
</html>