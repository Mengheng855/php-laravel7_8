<?php
    require 'conn.php';
    global $conn;
    $name=$_POST['name'];
    $position=$_POST['position'];
    $salary=$_POST['salary'];
    $file=$_FILES['file']['name'];
    if(!is_dir('images')){
        mkdir('images',0777,true);
    }
    $tmp_name=$_FILES['file']['tmp_name'];
    $path='images/'.time().'-'.$file;
    move_uploaded_file($tmp_name,$path);
    $insert="INSERT INTO tbl_employee (employee,position,salary,profile) 
    VALUES ('$name','$position','$salary','$path')";
    mysqli_query($conn,$insert);
    $select_id="SELECT id FROM tbl_employee ORDER BY id DESC LIMIT 1";
    $ex=mysqli_query($conn,$select_id);
    $row=mysqli_fetch_assoc($ex);
    echo $row['id'];
    