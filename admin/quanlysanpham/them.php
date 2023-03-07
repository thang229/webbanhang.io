<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/admin/css/style.css">
</head>
<body>
  <form method="POST" action="quanlysanpham/xuly.php" enctype="multipart/form-data">
    <div class="box_1">
        <p style="font-size: 30px;margin: 0 20px">Thêm sản phẩm</p>
    <p class="product-name">Tên sản phẩm</p>
    <input type="text" name="tensanpham" class="product-type" >
    <p class="product-name">Mã sp</p>
  <input type="text" name="masp" class="product-type">
    <p class="product-name">Hình</p>
  <input type="file" name="hinh" class="product-type">
  <p class="product-name">Mô tả</p>
  <textarea  name="mota" class="product-type" rows="5" cols="10" style="resize: none;width:400px;height:250px"></textarea>
  <p class="product-name">Giá</p>
  <input type="number" name="giasp" class="product-type">
  <p class="product-name">Số lượng</p>
  <input type="number" name="soluong" class="product-type">
<!--   <p class="product-name">Thứ tự</p>
 <input type="number" name="thutu" class="product-type"><br>
  -->
  <p class="product-name">Danh mục sản phẩm</p>
  <select  style="font-size:20px;width: 240px;height:50px;margin-left: 35px; " name="danhmuc" >
  <?php
  $sql_danhmuc = "SELECT * FROM db_danhmuc ORDER BY id_dmuc ASC ";
  $query_danhmuc =mysqli_query($mysqli,$sql_danhmuc);
  while( $row_danhmuc = mysqli_fetch_array($query_danhmuc)){
  ?>
  <option value="<?php echo $row_danhmuc['id_dmuc']?>" style="font-size:20px; "><?php echo $row_danhmuc['tendanhmuc']?></option>
  <?php
  }
  ?>
  </select>
   <br><input type="submit" value="Thêm" name="themsanpham" class="btn-insert">
  
  </div>
    </form>


</body>
</html>