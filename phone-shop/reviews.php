<?php
require 'db.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reviews | Phone Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'nav.php'; ?>
<div class="container">
    <h1>Reviews</h1>
    <form action="reviews.php" method="POST">
        <label>Phone:</label>
        <select name="phone_id" required>
            <option value="">Select a phone</option>
            <?php
            $phones = $conn->query("SELECT id, name FROM phones");
            while($p = $phones->fetch_assoc()): ?>
                <option value="<?= $p['id'] ?>"><?= htmlspecialchars($p['name']) ?></option>
            <?php endwhile; ?>
        </select>
        <label>Your Name:</label>
        <input type="text" name="name" required>
        <label>Rating (1-5):</label>
        <input type="number" name="rating" min="1" max="5" required>
        <label>Review:</label>
        <textarea name="review" required></textarea>
        <input type="submit" value="Submit Review">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $stmt = $conn->prepare("INSERT INTO reviews (phone_id, name, review, rating) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('issi', $_POST['phone_id'], $_POST['name'], $_POST['review'], $_POST['rating']);
        $stmt->execute();
        echo '<p style="color:green;">Review submitted!</p>';
    }
    ?>
    <h2>All Reviews</h2>
    <?php
    $result = $conn->query("SELECT r.*, p.name AS phone_name FROM reviews r JOIN phones p ON r.phone_id = p.id ORDER BY r.created_at DESC");
    while($row = $result->fetch_assoc()): ?>
    <div class="card">
        <div class="info">
            <strong><?= htmlspecialchars($row['phone_name']) ?></strong> -
            <span><?= htmlspecialchars($row['name']) ?> (<?= $row['rating'] ?>/5)</span>
            <p><?= htmlspecialchars($row['review']) ?></p>
            <small><?= htmlspecialchars($row['created_at']) ?></small>
        </div>
    </div>
    <?php endwhile; ?>
</div>
</body>
</html>
