<?php
    require '../connection/conn.php';
    session_start();
    global $conn;
    if(isset($_POST['btnLogin'])){
        $email=htmlspecialchars($_POST['email']);
        $pass=htmlspecialchars($_POST['password']);
        $select="SELECT id,is_admin,password FROM tbl_user WHERE email='$email'";
        $ex=$conn->query($select);
        $row=mysqli_fetch_assoc($ex);
        if(!password_verify($pass,$row['password'])){
            $_SESSION['msg']="password and email are not match";
            $_SESSION['color']="danger";
            header('location: login.php');
            exit;
        }
        $_SESSION['user_id']=$row['id'];
        $_SESSION['is_admin']=$row['is_admin'];
        if($row['is_admin']==0){
            header('location: ../index.php');
        }elseif($row['is_admin']==1){
            header('location: ../admin/home.php');
        }else{
            header('location: register.php');
        }
    }