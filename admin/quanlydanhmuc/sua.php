<?php
include('../connect.php');
$sql_sua_danhmuc = "SELECT * FROM db_danhmuc WHERE id_dmuc = '$_GET[id]' LIMIT 1 ";
$query_sua = mysqli_query($mysqli,$sql_sua_danhmuc);
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
<form action="/admin/quanlydanhmuc/xuly.php?id= <?php echo $_GET['id'] ?>" method="POST" class="form_box">
<?php
while($dong = mysqli_fetch_array($query_sua)){ ?>
<div class="box_1">
          <p style="font-size: 30px;margin: 0 20px">Sửa danh mục</p>
            <p class="product-name">Tên danh mục</p>
          <input type="text" name="tendanhmuc" class="product-type" value="<?php echo $row[0]?>">
          <p class="product-name">Thứ tự</p>
          <input type="number" name="thutu" class="product-type" value="<?php echo $row[1]?>"><br>
          <input type="submit" value="Sửa" name="suadanhmuc" class="btn-insert">
      
  <?php
}
  ?>
</div>
</form>
</body>
</html>
