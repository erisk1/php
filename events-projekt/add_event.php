<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $date = $_POST['event_date'];

    $stmt = $conn->prepare("INSERT INTO events (title, description, event_date) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $desc, $date);
    $stmt->execute();
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Event</title>
</head>
<body>
    <h1>Add a New Event</h1>
    <form method="POST">
        <label>Title:</label><br>
        <input type="text" name="title" required><br>
        <label>Description:</label><br>
        <textarea name="description"></textarea><br>
        <label>Date:</label><br>
        <input type="date" name="event_date" required><br>
        <button type="submit">Add Event</button>
    </form>
</body>
</html>