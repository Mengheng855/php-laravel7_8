<?php
    require '../connection/conn.php';
    session_start();
    global $conn;
    if(isset($_POST['btnSubmit'])){
        $pro_name=$_POST['pro_name'];
        $cate_id=$_POST['cate_id'];
        $qty=$_POST['qty'];
        $price=$_POST['price'];
        $des=$_POST['des'];
        $user_id=$_SESSION['user_id'];
        if(!is_dir('products')){
            mkdir('products',0777,true);
        }
        $fileName=$_FILES['file']['name'];
        $tmpName=$_FILES['file']['tmp_name'];
        $path='products/'.time().'_'.$fileName;
        move_uploaded_file($tmpName,$path);
        $insert="INSERT INTO tbl_product (pro_name,description,price,qty,image,cate_id,user_id)
        VALUES ('$pro_name','$des','$price','$qty','$path','$cate_id','$user_id')";
        $ex=$conn->query($insert);
        if($ex){
            header('location: add-product.php');
        }
    }
