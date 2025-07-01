<?php
session_start();
require 'db.php';
if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hash);
        $stmt->fetch();
        if (password_verify($password, $hash)) {
            $_SESSION['user_id'] = $id;
            header('Location: index.php');
            exit();
        } else {
            $error = 'Incorrect password!';
        }
    } else {
        $error = 'User not found!';
    }
    $stmt->close();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Phone Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'nav.php'; ?>
<div class="container">
    <h1>Login</h1>
    <?php if (!empty($error)) echo '<p style="color:red;">'.$error.'</p>'; ?>
    <form action="login.php" method="POST">
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="signup.php">Sign up here</a>.</p>
</div>
</body>
</html>
