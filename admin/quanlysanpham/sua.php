<?php
include('../connect.php');
$sql_sua_sanpham = "SELECT * FROM db_sanpham WHERE id_sanpham = '$_GET[id]' LIMIT 1 ";
$query_sua = mysqli_query($mysqli,$sql_sua_sanpham);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="/admin/css/style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form enctype="multipart/form-data" action="/admin/quanlysanpham/xuly.php?idsanpham=<?php echo $_GET['id'] ?>" method="POST" class="form_box">
<?php
while($row = mysqli_fetch_array($query_sua)){ ?>
<div class="box_1">
<p style="font-size: 30px;margin: 0 20px">Sửa sản phẩm</p>
   <tr> <th><p class="product-name">Tên sản phẩm</p></th>
   <th> <input type="text" name="tensanpham" class="product-type" value="<?php echo $row['tensanpham']?>"></th>
    <th><p class="product-name">Mã sp</p></th>
 <th> <input type="text" name="masp" class="product-type" value="<?php echo $row['masp']?>"></th>
   <th> <p class="product-name">Hình</p></th>
  <th><input type="file" name="hinh" class="product-type" >
  <img width="300px" src="/admin/quanlysanpham/upload/<?php echo $row['hinh']?>">
</th>
 <th> <p class="product-name">Mô tả</p></th>
 <th> <textarea  name="mota" class="product-type" rows="5" cols="10" style="resize: none;width:400px;height:250px"  value="<?php  $row['mota']?>"></textarea>
  <th><p class="product-name">Giá</p></th>
 <th> <input type="number" name="giasp" class="product-type" value="<?php echo $row['giasp']?>"></th>
  <th><p class="product-name">Số lượng</p></th>
  <th><input type="number" name="soluong" class="product-type" value="<?php echo $row['soluong']?>"></th>
  <select  style="font-size:20px;width: 240px;height:50px;margin-left: 35px; " name="danhmuc" >
  <?php
  $sql_danhmuc = "SELECT * FROM db_danhmuc ORDER BY id_dmuc ASC ";
  $query_danhmuc =mysqli_query($mysqli,$sql_danhmuc);
  while( $row_danhmuc = mysqli_fetch_array($query_danhmuc)){
    if($row_danhmuc['id_dmuc']== $row['id_dmuc']){
  ?>
  <option selected value="<?php echo $row_danhmuc['id_dmuc']?>" style="font-size:20px; "><?php echo $row_danhmuc['tendanhmuc']?></option>
  <?php
    }else{
  ?>
   <option  value="<?php echo $row_danhmuc['id_dmuc']?>" style="font-size:20px; "><?php echo $row_danhmuc['tendanhmuc']?></option>
  <?php
    }
  
  }
  ?>
  </select>
  <input type="submit" value="Sửa" name="suasanpham" class="btn-insert">
   </tr>

  
  <?php
}
  ?>
</div>
</form>
</body>
</html>
