<?php


    include_once('config.php'); 


    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];


        
        $sql = "insert into users (name, surname, email) values (:name, :surname, :email)";
        $sqlQuery = $conn->prepare($sql);
    
        $sqlQuery->bindParam(':name', $name); 
        $sqlQuery->bindParam(':surname', $surname); 
        $sqlQuery->bindParam(':email', $email);


        $sqlQuery->execute();


        echo "Data saved successfully ...<br>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="dashboard.php">
        dashboard
    </a>

    <form action="add.php" method="post">
        <input type="text" name="name">
        <input type="text" name="surname">
        <input type="email" name="email">
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>