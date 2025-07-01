<?php
require 'db.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phone Shop | Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'nav.php'; ?>
<div class="container">
    <h1>Phones for Sale</h1>
    <?php
    $result = $conn->query("SELECT * FROM phones ORDER BY id DESC");
    while($row = $result->fetch_assoc()): ?>
    <div class="card">
        <img src="uploads/<?= htmlspecialchars($row['photo']) ?>" alt="<?= htmlspecialchars($row['name']) ?>" onerror="this.src='https://via.placeholder.com/120x120?text=No+Image'">
        <div class="info">
            <h2><?= htmlspecialchars($row['name']) ?></h2>
            <p><?= htmlspecialchars($row['description']) ?></p>
            <strong>Price: <?= htmlspecialchars($row['price']) ?> €</strong><br>
            <form action="cart.php" method="POST" style="display:inline;">
                <input type="hidden" name="phone_id" value="<?= $row['id'] ?>">
                <button type="submit">Add to Cart</button>
            </form>
        </div>
    </div>
    <?php endwhile; ?>
</div>
</body>
</html>
