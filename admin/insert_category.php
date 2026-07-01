<?php
    require '../connection/conn.php';
    session_start();
    global $conn;
    if(isset($_POST['btnSubmit'])){
        $cate_name=$_POST['categoryName'];
        $user_id=$_SESSION['user_id'];
        $insert="INSERT INTO tbl_category (cate_name,user_id) VALUES ('$cate_name','$user_id')";
        $ex=$conn->query($insert);
        if($ex){
            header('location: add-category.php');
        }
    }