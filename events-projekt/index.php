<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Events Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Upcoming Events</h1>
    <a href="add_event.php">Add New Event</a>
    <ul>
        <?php
        $sql = "SELECT * FROM events ORDER BY event_date ASC";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<li><strong>{$row['title']}</strong> ({$row['event_date']})<br>{$row['description']}
                  <form method='POST' action='delete_event.php' style='display:inline;'>
                      <input type='hidden' name='id' value='{$row['id']}'>
                      <button type='submit'>Delete</button>
                  </form>
                  </li>";
        }
        ?>
    </ul>
</body>
</html>