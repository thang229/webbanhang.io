<?php
include('../connect.php');
$id =$_GET['id'];
$sql_xoa= "DELETE FROM db_danhmuc WHERE id_dmuc = $id";
 mysqli_query($mysqli,$sql_xoa);
 header("Location:../index_ad.php?action=quanlydanhmuc&query=them");


?>