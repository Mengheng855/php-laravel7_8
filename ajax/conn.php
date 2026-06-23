<?php
    try {
        $conn=mysqli_connect('localhost','root','','db_php_7_8');
        // echo 'success';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
