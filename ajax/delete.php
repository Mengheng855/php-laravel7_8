<?php
    require 'conn.php';
    global $conn;
    $id=$_POST['id'];
    $delete="DELETE FROM tbl_employee WHERE id=$id";
    $rs=$conn->query($delete);
    if($rs){
        echo 'success';
    }