<?php
    require '../connection/conn.php';
    global $conn;
    $id=$_GET['id'];
    $delete="DELETE FROM tbl_product WHERE id=$id";
    $conn->query($delete);
    header('location: products.php');