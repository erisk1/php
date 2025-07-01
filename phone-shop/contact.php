<?php
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us | Phone Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'nav.php'; ?>
<div class="container">
    <h1>Contact Us</h1>
    <form action="contact.php" method="POST">
        <label>Your Name:</label>
        <input type="text" name="name" required>
        <label>Your Email:</label>
        <input type="email" name="email" required>
        <label>Message:</label>
        <textarea name="message" required></textarea>
        <input type="submit" value="Send">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo '<p style="color:green;">Thank you for contacting us!</p>';
    }
    ?>
</div>
</body>
</html>
