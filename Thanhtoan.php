
<?php
include('../b1809516/admin/connect.php');
session_start();
$id_khachhang = $_SESSION['id_khachhang'];
$code_oder = rand(0,999);
$insert_cart="INSERT INTO db_cart(id_khachhang,code_cart,cart_status) VALUE ('$id_khachhang','$code_oder',1)";
$cart_query = mysqli_query($mysqli,$insert_cart);
if($cart_query){
 foreach($_SESSION['cart'] as $key=>$value){
     $id_sanpham = $value['id'];
     $soluong =$value['soluong'];
     $insert_cart_details= "INSERT INTO db_cart_list(id_sanpham,code_cart,soluongmua) VALUE ('$id_sanpham','$code_oder','$soluong')";
     mysqli_query($mysqli,$insert_cart_details);
 }

}

unset($_SESSION['cart']);
header('Location: camon.php');
?>