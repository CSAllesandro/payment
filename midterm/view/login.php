<?php
session_start();
require_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User();
    $loggedInUser  = $user->login($username, $password);
    if ($loggedInUser ) {
        $_SESSION['user_id'] = $loggedInUser ['id'];
        $_SESSION['username'] = $loggedInUser ['username'];
        header("Location: view_menu_items.php");
        exit();
    } else {
        $_SESSION['message'] = "Login failed! Invalid credentials.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Optional: Link to your CSS file -->
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p><?php echo isset($_SESSION['message']) ? $_SESSION['message'] : ''; ?></p>
        <a href="register.php">Don't have an account? Register here.</a>
    </div>
</body>
</html>