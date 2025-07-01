<?php
require 'db.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin | Phone Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'nav.php'; ?>
<div class="container">
    <h1>Admin Panel</h1>
    <form action="admin.php" method="POST" enctype="multipart/form-data">
        <label>Phone Name:</label>
        <input type="text" name="name" required>
        <label>Description:</label>
        <textarea name="description" required></textarea>
        <label>Price (€):</label>
        <input type="number" name="price" step="0.01" required>
        <label>Photo:</label>
        <input type="file" name="photo" accept="image/*" required>
        <input type="submit" value="Add Phone">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $photo = null;
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
            $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
            $photo = uniqid('phone_', true) . '.' . $ext;
            move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/' . $photo);
        }
        $stmt = $conn->prepare("INSERT INTO phones (name, description, price, photo) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('ssds', $_POST['name'], $_POST['description'], $_POST['price'], $photo);
        $stmt->execute();
        echo '<p style="color:green;">Phone added!</p>';
    }
    ?>
    <h2>All Phones</h2>
    <?php
    $result = $conn->query("SELECT * FROM phones ORDER BY id DESC");
    while($row = $result->fetch_assoc()): ?>
    <div class="card">
        <img src="uploads/<?= htmlspecialchars($row['photo']) ?>" alt="<?= htmlspecialchars($row['name']) ?>" onerror="this.src='https://via.placeholder.com/120x120?text=No+Image'">
        <div class="info">
            <h2><?= htmlspecialchars($row['name']) ?></h2>
            <p><?= htmlspecialchars($row['description']) ?></p>
            <strong>Price: <?= htmlspecialchars($row['price']) ?> €</strong>
        </div>
    </div>
    <?php endwhile; ?>
</div>
</body>
</html>
