<?php
session_start();
require 'db.php';
if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $name, $email, $password);
    if ($stmt->execute()) {
        header('Location: login.php');
        exit();
    } else {
        $error = 'Email already exists!';
    }
    $stmt->close();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up | Phone Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'nav.php'; ?>
<div class="container">
    <h1>Sign Up</h1>
    <?php if (!empty($error)) echo '<p style="color:red;">'.$error.'</p>'; ?>
    <form action="signup.php" method="POST">
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <input type="submit" value="Sign Up">
    </form>
    <p>Already have an account? <a href="login.php">Login here</a>.</p>
</div>
</body>
</html>
