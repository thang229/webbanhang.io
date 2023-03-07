<?php
include('../connect.php');

$id =$_GET['id'];

$sql = "SELECT * FROM db_sanpham WHERE id_sanpham = '$id' LIMIT 1 ";
$query = mysqli_query($mysqli,$sql);
while($row = mysqli_fetch_array($query)){
  unlink('upload/' .$row['hinh']);
}
$sql_xoa= "DELETE FROM db_sanpham WHERE id_sanpham = $id";
 mysqli_query($mysqli,$sql_xoa);
 header("Location:../index_ad.php?action=quanlysanpham&query=them");


?>