<?php
    require "config.php";

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    }


     else{
            $sql = "SELECT * FROM users WHERE username=:username";
            $insertSql = $conn -> prepare ($sql);
            $insertSql -> bindParam(':username', $username);
            $insertSql -> execute(); 

        {}