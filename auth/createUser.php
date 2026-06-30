<?php
    require '../connection/conn.php';
    global $conn;
    if(isset($_POST['btnSubmit'])){
        $name=htmlspecialchars($_POST['name']);
        $email=htmlspecialchars($_POST['email']);
        $pass=htmlspecialchars(password_hash($_POST['password'],PASSWORD_DEFAULT));
        $insert="INSERT INTO tbl_user (name,email,password) VALUES ('$name','$email','$pass')";
        $ex=$conn->query($insert);
        if($ex){
            header('location: login.php');
        }
    }