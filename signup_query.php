<?php

    $u = $_POST['username'];
    $e = $_POST['email'];
    $p = $_POST['password'];
    $c = $_POST['confirm'];
    
    if($p!=$c){
        $error = "Passwords don't match";
    }
    else{
        $configs = include('config.php');
        $conn = new mysqli($configs['host'], $configs['username'], $configs['password'], $configs['dbname']);
        mysqli_set_charset($conn,'utf8');
        
        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM user WHERE Username='{$u}'";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            $error = "Username already exists";
        }
        else{
            $sql = "SELECT * FROM user WHERE Email='{$e}'";
            $result2 = $conn->query($sql);
            if($result2->num_rows>0){  
                $error = "Email already exists";
            }
            else{
                $hashed_p = password_hash($p, PASSWORD_DEFAULT);
                $sql = "INSERT INTO user (`Email`, `Username`, `Password`, `Status`, `Streak`) VALUES('{$e}','{$u}','{$hashed_p}','Basic','0')";
                echo $sql;
                $result3 = $conn->query($sql);
                header("Location: login.php");
            }
        }
    }

?>