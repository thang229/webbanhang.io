<?php
include('../connect.php');
$tensanpham =$_POST['tensanpham'];
$masp =$_POST['masp'];
$giasp =$_POST['giasp'];
$mota =$_POST['mota'];
$soluong =$_POST['soluong'];

$hinh =$_FILES['hinh']['name'];
$hinh_tmp =$_FILES['hinh']['tmp_name'];
$danhmuc =$_POST['danhmuc'];


/*	id_sanpham	tensanpham	masp	mota	giasp	hinh	soluong */
 if(isset($_POST['themsanpham'])){
  $sql_them = "INSERT INTO db_sanpham(tensanpham,masp,hinh,giasp,mota,soluong,id_dmuc) 
  VALUE ('$tensanpham','$masp','$hinh','$giasp','$mota','$soluong','$danhmuc')";
    move_uploaded_file($hinh_tmp,"upload/".$hinh);
  mysqli_query($mysqli,$sql_them);
  header("Location:../index_ad.php?action=quanlysanpham&query=them");

}elseif(isset($_POST['suasanpham'])){
  if($hinh !=''){
   move_uploaded_file($hinh_tmp,"upload/".$hinh);
  $sql_update ="UPDATE db_sanpham SET tensanpham='$tensanpham',masp='$masp',mota='$mota',giasp='$giasp',hinh='$hinh',soluong ='$soluong' , id_dmuc ='$danhmuc' WHERE id_sanpham = '$_GET[idsanpham]' ";
  $id =$_GET['idsanpham'];
  $sql = "SELECT * FROM db_sanpham WHERE id_sanpham = '$id' LIMIT 1 ";
  $query = mysqli_query($mysqli,$sql);
  while($row = mysqli_fetch_array($query)){
    unlink('upload/' .$row['hinh']);}
    mysqli_query($mysqli,$sql_update);
   
  }else{ $sql_update ="UPDATE db_sanpham SET tensanpham='$tensanpham',masp='$masp',mota='$mota',giasp='$giasp',soluong ='$soluong' , id_dmuc ='$danhmuc' WHERE id_sanpham = '$_GET[idsanpham]' ";}
  mysqli_query($mysqli,$sql_update);
  header("Location:../index_ad.php?action=quanlysanpham&query=them");

}elseif(isset($_GET['query'])=='xoa'){
  
  $id =$_GET['idsanpham'];
  $sql = "SELECT * FROM db_sanpham WHERE id_sanpham = '$id' LIMIT 1 ";
  $query = mysqli_query($mysqli,$sql);
  while($row = mysqli_fetch_array($query)){
    unlink('upload/' .$row['hinh']);
  }
$sql_xoa= "DELETE FROM db_sanpham WHERE id_sanpham = $id";
 mysqli_query($mysqli,$sql_xoa);
 header("Location:../index_ad.php?action=quanlysanpham&query=them");

}
?>