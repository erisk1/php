<?php
session_start();
require 'db.php';
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['phone_id'])) {
    $id = $_POST['phone_id'];
    if (!isset($_SESSION['cart'][$id])) $_SESSION['cart'][$id] = 0;
    $_SESSION['cart'][$id]++;
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart | Phone Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'nav.php'; ?>
<div class="container">
    <h1>Your Cart</h1>
    <?php
    if (empty($_SESSION['cart'])) {
        echo '<p>Your cart is empty.</p>';
    } else {
        $ids = implode(',', array_keys($_SESSION['cart']));
        $result = $conn->query("SELECT * FROM phones WHERE id IN ($ids)");
        $total = 0;
        while($row = $result->fetch_assoc()):
            $qty = $_SESSION['cart'][$row['id']];
            $subtotal = $qty * $row['price'];
            $total += $subtotal;
    ?>
    <div class="card">
        <img src="uploads/<?= htmlspecialchars($row['photo']) ?>" alt="<?= htmlspecialchars($row['name']) ?>" onerror="this.src='https://via.placeholder.com/120x120?text=No+Image'">
        <div class="info">
            <h2><?= htmlspecialchars($row['name']) ?></h2>
            <p>Quantity: <?= $qty ?></p>
            <p>Subtotal: <?= $subtotal ?> €</p>
        </div>
    </div>
    <?php endwhile;
        echo "<h2>Total: $total €</h2>";
    }
    ?>
</div>
</body>
</html>
