<?php

    $u = $_POST['username'];
    $p = $_POST['password'];
    
    $configs = include('config.php');
    $conn = new mysqli($configs['host'], $configs['username'], $configs['password'], $configs['dbname']);
    mysqli_set_charset($conn,'utf8');
    
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM user WHERE Username='{$u}'";
    $result = $conn->query($sql);
    if(!$result->num_rows>0){
        $error = "Username not found";
    }
    else{
        $userData = $result->fetch_assoc();
        if (!password_verify($p,$userData['Password'])){
            $error = "Password is not correct";
        }
        else{
            header("Location: dashboard.php");
        }
    }

?>