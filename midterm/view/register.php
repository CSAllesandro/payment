<?php
session_start();
require_once 'user.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User();
    if ($user->register($username, $password)) {
        $_SESSION['message'] = "Registration successful! You can now log in.";
        header("Location: view/login.php");
    } else {
        $_SESSION['message'] = "Registration failed!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>
    <p><?php echo isset($_SESSION['message']) ? $_SESSION['message'] : ''; ?></p>
    <a href="view/login.php">Already have an account? Login here.</a>
</body>
</html>