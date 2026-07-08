<?php
    require '../connection/conn.php';
    session_start();
    global $conn;
    if(isset($_POST['btnSubmit'])){
        $id=$_POST['id'];
        $pro_name=$_POST['pro_name'];
        $cate_id=$_POST['cate_id'];
        $qty=$_POST['qty'];
        $price=$_POST['price'];
        $des=$_POST['des'];
        $user_id=$_SESSION['user_id'];
        if($_FILES['file']['name']){
            $fileName=$_FILES['file']['name'];
            $tmpName=$_FILES['file']['tmp_name'];
            $path='products/'.time().'_'.$fileName;
            move_uploaded_file($tmpName,$path);
            $update="UPDATE tbl_product SET pro_name='$pro_name',description='$des',
            price='$price',qty='$qty',image='$path',cate_id='$cate_id',user_id='$user_id'
            WHERE id=$id";
        }else{
            $update="UPDATE tbl_product SET pro_name='$pro_name',description='$des',
            price='$price',qty='$qty',cate_id='$cate_id',user_id='$user_id'
            WHERE id=$id";
        }
       
        $ex=$conn->query($update);
        if($ex){
            header('location: products.php');
        }
    }
