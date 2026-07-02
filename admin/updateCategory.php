<?php
    require '../connection/conn.php';
    session_start();
    global $conn;
    if(isset($_POST['btnSubmit'])){
        $id=$_POST['id'];
        $cate_name=$_POST['categoryName'];
        $user_id=$_SESSION['user_id'];
        $update="UPDATE tbl_category SET cate_name='$cate_name' WHERE id=$id";
        $ex=$conn->query($update);
        if($ex){
            header('location: categories.php');
        }
    }