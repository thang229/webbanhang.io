<?php
include('../connect.php');
$tendanhmuc=$_POST['tendanhmuc'];
$thutu = $_POST['thutu'];

if(isset($_POST['themdanhmuc'])){
    $sql_them ="INSERT INTO db_danhmuc(tendanhmuc,thutu) VALUE ('$tendanhmuc','$thutu')";
    mysqli_query($mysqli,$sql_them);
    header("Location:../index_ad.php?action=quanlydanhmuc&query=them");
}elseif(isset($_POST['suadanhmuc'])){
    $sql_update ="UPDATE db_danhmuc SET tendanhmuc='$tendanhmuc',thutu='$thutu' WHERE id_dmuc = '$_GET[id]' ";
    mysqli_query($mysqli,$sql_update);
    header("Location:../index_ad.php?action=quanlydanhmuc&query=them");
}elseif(isset($_GET['query'])=='xoa'){
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM db_danhmuc WHERE  id_dmuc = '$id'";
    mysqli_query($mysqli,$sql_xoa);
    header("Location:../index_ad.php?action=quanlydanhmuc&query=them");
}

?>