<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="/admin/css/style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="/admin/quanlydanhmuc/xuly.php" method="POST" class="form_box">
      <div class="box_1">
          <p style="font-size: 30px;margin: 0 20px">Thêm danh mục</p>
            <p class="product-name">Tên danh mục</p>
          <input type="text" name="tendanhmuc" class="product-type">
          <p class="product-name">Thứ tự</p>
          <input type="number" name="thutu" class="product-type"><br>
          <input type="submit" value="Thêm" name="themdanhmuc" class="btn-insert">
      
      <!-- Liệt kê danh mục -->
    <!--   <div class="box_2"> -->
      <?php
$sql_lietke_danhmuc = "SELECT * FROM db_danhmuc ORDER BY thutu ASC ";
$result = mysqli_query($mysqli,$sql_lietke_danhmuc);
?>
<p style="font-size: 30px;margin: 0 20px">Liệt kê danh mục</p>
<table border="1" style="width:600px;margin: 10px 20px;" >
   
   <tr><td style="width:30px">ID</td>
    
      <td class="product-name" style="width:450px;">Tên danh mục</td>
     <td class="product-name">Quản lý</td>
    </tr>
    <?php
    $i =1;
    while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
    ?>
    <tr style="width:100%">
    <th><?php
       
      echo $i;
      
      $i = $i+1;
    ?>
    </th>
     <td> <?php echo $row[1]    ?></td>
     <td>
     <button><a  class="btn control-btn" href="/admin/quanlydanhmuc/xoa.php?id=<?php echo $row[0]?>">Xóa</a></button>
    <button><a  class="btn control-btn" href="/admin/quanlydanhmuc/sua.php?&id=<?php echo $row[0]?>">Sửa</a></button>
     </td>
    <?php
   }
   ?>
    </table>
</div>
</form>
</body>
</html>
