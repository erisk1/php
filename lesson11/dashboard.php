<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once("config.php");
        $sql = "SELECT * FROM users";
        $getUsers = $conn -> prepare($sql);
        $getUsers -> execute();

        $users = $getUsers -> fetchAll();
    ?>

    <table>
        <thead>
            <th>id</th>
            <th>name</th>
            <th>surname</th>
            <th>email</th>
            <th>delete</th>
            <th>update</th>
        </thead>

        <tbody>
            <?php
            foreach($users as $user){
            ?>

            <tr>
                <td>
                    <?=$user['id']?>
                </td>
                <td>
                    <?=$user['name']?>
                </td>
                <td>
                    <?=$user['surname']?>
                </td>
                <td>
                    <?=$user['email']?>
                </td>
                <td>
                    <?= "<a href='delete.php?id=$user[id]'>delete</a>" ?>
                </td>
            </tr>

            <?php

                         }
            ?>
        </tbody>
    </table>

    <a href="add.php">add</a>
</body>
</html>